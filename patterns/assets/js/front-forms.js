/**
 * GoDevs Portfolio — Front-end Forms JS
 *
 * Handles submission for [godevs_booking_form] and [godevs_proposal_form]
 * shortcodes via AJAX. No jQuery dependency — vanilla JS.
 *
 * Features:
 *   - Inline validation with aria-describedby error messaging (UX-D)
 *   - Real-time field validation on blur (UX-D)
 *   - Loading state on submit button (UX-D)
 *   - Disabled state during submission (UX-D)
 *   - Actionable error messages (UX-D)
 *   - Success messages with auto-dismiss
 *   - Honeypot anti-spam check (added)
 *
 * @package GoDevs_Portfolio
 * @since   2.9.0
 */
(function () {
        'use strict';

        var config = window.GODEVS_FORMS || {};
        var i18n = config.i18n || {};

        /**
         * Generate a unique ID for aria-describedby linking.
         */
        var idCounter = 0;
        function uniqueId(prefix) {
                idCounter++;
                return prefix + '-' + idCounter;
        }

        /**
         * Find or create an error message element for a field.
         */
        function getFieldErrorEl(field) {
                var fieldWrap = field.closest('.godevs-form-field');
                if (!fieldWrap) return null;
                var errId = field.getAttribute('aria-describedby');
                if (errId) {
                        var existing = document.getElementById(errId);
                        if (existing && existing.classList.contains('godevs-field-error')) {
                                return existing;
                        }
                }
                // Create new error element.
                var err = document.createElement('p');
                err.className = 'godevs-field-error';
                err.id = uniqueId('godevs-err');
                err.setAttribute('role', 'alert');
                err.setAttribute('aria-live', 'polite');
                err.style.display = 'none';
                fieldWrap.appendChild(err);
                field.setAttribute('aria-describedby', err.id);
                field.setAttribute('aria-invalid', 'false');
                return err;
        }

        /**
         * Show inline error for a single field.
         */
        function showFieldError(field, message) {
                var err = getFieldErrorEl(field);
                if (!err) return;
                err.textContent = message;
                err.style.display = 'block';
                field.classList.add('has-error');
                field.setAttribute('aria-invalid', 'true');
        }

        /**
         * Clear inline error for a single field.
         */
        function clearFieldError(field) {
                var err = getFieldErrorEl(field);
                if (!err) return;
                err.textContent = '';
                err.style.display = 'none';
                field.classList.remove('has-error');
                field.setAttribute('aria-invalid', 'false');
        }

        /**
         * Clear all field errors in a form.
         */
        function clearAllFieldErrors(form) {
                var fields = form.querySelectorAll('input, select, textarea');
                fields.forEach(function (f) { clearFieldError(f); });
        }

        /**
         * Validate a single field. Returns error message or null if valid.
         */
        function validateField(field) {
                // Required check.
                if (field.hasAttribute('required')) {
                        if (!field.value.trim()) {
                                return i18n.requiredField || 'This field is required.';
                        }
                }
                // Email format check.
                if (field.type === 'email' && field.value) {
                        var emailRe = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                        if (!emailRe.test(field.value)) {
                                return i18n.invalidEmail || 'Please enter a valid email address.';
                        }
                }
                // Phone format check (optional — just length).
                if (field.type === 'tel' && field.value && field.value.length < 7) {
                        return i18n.invalidPhone || 'Please enter a valid phone number.';
                }
                return null;
        }

        /**
         * Show a form-level message (success/error/info).
         */
        function showMessage(form, message, type) {
                var msgEl = form.querySelector('.godevs-form-message');
                if (!msgEl) return;
                msgEl.textContent = message;
                msgEl.className = 'godevs-form-message is-visible is-' + type;
                // For errors, also announce to screen readers.
                if (type === 'error') {
                        msgEl.setAttribute('role', 'alert');
                } else {
                        msgEl.setAttribute('role', 'status');
                }
                // Auto-hide success messages after 6 seconds.
                if (type === 'success') {
                        setTimeout(function () {
                                msgEl.className = 'godevs-form-message';
                                msgEl.textContent = '';
                        }, 6000);
                }
        }

        /**
         * Validate the entire form. Returns true if valid.
         * Also highlights invalid fields.
         */
        function validateForm(form) {
                var isValid = true;
                var firstInvalid = null;
                var requiredFields = form.querySelectorAll('[required], [type="email"], [type="tel"]');
                requiredFields.forEach(function (field) {
                        var err = validateField(field);
                        if (err) {
                                showFieldError(field, err);
                                if (!firstInvalid) firstInvalid = field;
                                isValid = false;
                        } else {
                                clearFieldError(field);
                        }
                });
                if (firstInvalid) {
                        firstInvalid.focus();
                        showMessage(form, i18n.pleaseFix || 'Please fix the highlighted fields below.', 'error');
                }
                return isValid;
        }

        /**
         * Handle form submission via AJAX.
         */
        function handleSubmit(event) {
                event.preventDefault();

                var form = event.target;
                if (!form.classList.contains('godevs-form')) return;

                // Honeypot check (anti-spam).
                var honeypot = form.querySelector('input[name="godevs_hp"]');
                if (honeypot && honeypot.value) {
                        // Bot filled the honeypot — silently fail.
                        return;
                }

                // Validate.
                if (!validateForm(form)) return;

                var submitBtn = form.querySelector('.godevs-form-submit');
                if (!submitBtn) return;

                // Collect form data.
                var formData = new FormData(form);
                var data = {};
                formData.forEach(function (value, key) {
                        data[key] = value;
                });

                // Set loading state.
                submitBtn.classList.add('is-loading');
                submitBtn.disabled = true;
                submitBtn.setAttribute('aria-busy', 'true');
                var originalText = submitBtn.textContent;
                submitBtn.innerHTML = '<span class="godevs-spinner" aria-hidden="true"></span> ' + (i18n.submitting || 'Sending…');

                // Send AJAX request.
                fetch(config.ajaxUrl, {
                        method: 'POST',
                        body: new URLSearchParams(data)
                })
                        .then(function (response) {
                                // Check HTTP status — non-200 means network/server error.
                                if (!response.ok) {
                                        throw new Error('HTTP ' + response.status);
                                }
                                return response.json();
                        })
                        .then(function (response) {
                                if (response.success) {
                                        showMessage(form, response.data.message || (i18n.successBooking || 'Form submitted successfully.'), 'success');
                                        form.reset();
                                        clearAllFieldErrors(form);
                                } else {
                                        var msg = (response.data && response.data.message) || (i18n.error || 'Something went wrong.');
                                        // Map known error messages to actionable text.
                                        if (msg.indexOf('nonce') !== -1 || msg.indexOf('security') !== -1) {
                                                msg = i18n.securityError || 'Security check failed. Please refresh the page and try again.';
                                        } else if (response.data && response.data.code === 403) {
                                                msg = i18n.permissionError || 'You do not have permission to do this.';
                                        }
                                        showMessage(form, msg, 'error');
                                }
                        })
                        .catch(function (error) {
                                var msg = i18n.networkError || 'Network error. Please check your connection and try again.';
                                showMessage(form, msg, 'error');
                                if (window.console) {
                                        console.error('[GoDevs Forms] Submission failed:', error);
                                }
                        })
                        .then(function () {
                                // Always restore the button.
                                submitBtn.classList.remove('is-loading');
                                submitBtn.disabled = false;
                                submitBtn.removeAttribute('aria-busy');
                                submitBtn.textContent = originalText;
                        });
        }

        // Attach to all forms on page load.
        document.addEventListener('DOMContentLoaded', function () {
                var forms = document.querySelectorAll('.godevs-form');
                forms.forEach(function (form) {
                        form.addEventListener('submit', handleSubmit);

                        // Real-time validation: clear error on input, validate on blur.
                        var fields = form.querySelectorAll('input, select, textarea');
                        fields.forEach(function (field) {
                                // Clear error as user types.
                                field.addEventListener('input', function () {
                                        if (field.classList.contains('has-error')) {
                                                clearFieldError(field);
                                        }
                                });
                                // Validate on blur.
                                field.addEventListener('blur', function () {
                                        if (field.hasAttribute('required') || field.type === 'email' || field.type === 'tel') {
                                                var err = validateField(field);
                                                if (err) {
                                                        showFieldError(field, err);
                                                } else {
                                                        clearFieldError(field);
                                                }
                                        }
                                });
                        });
                });
        });
})();
