/**
 * GoDevs Portfolio — Front-end Forms JS
 *
 * Handles submission for [godevs_booking_form] and [godevs_proposal_form]
 * shortcodes via AJAX. No jQuery dependency — vanilla JS.
 *
 * @package GoDevs_Portfolio
 * @since   2.9.0
 */
(function () {
	'use strict';

	var config = window.GODEVS_FORMS || {};
	var i18n = config.i18n || {};

	/**
	 * Find the closest ancestor matching a selector.
	 */
	function closest(el, selector) {
		return el.closest ? el.closest(selector) : null;
	}

	/**
	 * Show a message in the form's message element.
	 */
	function showMessage(form, message, type) {
		var msgEl = form.querySelector('.godevs-form-message');
		if (!msgEl) return;

		msgEl.textContent = message;
		msgEl.className = 'godevs-form-message is-visible is-' + type;

		// Auto-hide success messages after 6 seconds.
		if (type === 'success') {
			setTimeout(function () {
				msgEl.className = 'godevs-form-message';
				msgEl.textContent = '';
			}, 6000);
		}
	}

	/**
	 * Validate the form's required fields.
	 * Returns true if valid, false otherwise (and shows an error message).
	 */
	function validateForm(form) {
		var requiredFields = form.querySelectorAll('[required]');
		for (var i = 0; i < requiredFields.length; i++) {
			var field = requiredFields[i];
			if (!field.value.trim()) {
				showMessage(form, i18n.required || 'Please fill in all required fields.', 'error');
				field.focus();
				return false;
			}
			// Email validation.
			if (field.type === 'email' && field.value) {
				var emailRe = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
				if (!emailRe.test(field.value)) {
					showMessage(form, i18n.invalidEmail || 'Please enter a valid email address.', 'error');
					field.focus();
					return false;
				}
			}
		}
		return true;
	}

	/**
	 * Handle form submission via AJAX.
	 */
	function handleSubmit(event) {
		event.preventDefault();

		var form = event.target;
		if (!form.classList.contains('godevs-form')) return;

		// Validate.
		if (!validateForm(form)) return;

		var submitBtn = form.querySelector('.godevs-form-submit');
		if (!submitBtn) return;

		// Collect form data.
		var formData = new FormData(form);

		// Add the nonce and action (they're already in the form as hidden fields,
		// but FormData will pick them up).
		var data = {};
		formData.forEach(function (value, key) {
			data[key] = value;
		});

		// Set loading state.
		submitBtn.classList.add('is-loading');
		submitBtn.disabled = true;
		var originalText = submitBtn.textContent;
		submitBtn.textContent = i18n.submitting || 'Sending…';

		// Send AJAX request.
		fetch(config.ajaxUrl, {
			method: 'POST',
			body: new URLSearchParams(data)
		})
			.then(function (response) {
				return response.json();
			})
			.then(function (response) {
				if (response.success) {
					showMessage(form, response.data.message || (i18n.successBooking || 'Form submitted successfully.'), 'success');
					form.reset();
				} else {
					var msg = (response.data && response.data.message) || (i18n.error || 'Something went wrong.');
					showMessage(form, msg, 'error');
				}
			})
			.catch(function (error) {
				showMessage(form, i18n.error || 'Network error. Please try again.', 'error');
				if (window.console) {
					console.error('[GoDevs Forms] Submission failed:', error);
				}
			})
			.then(function () {
				// Always restore the button.
				submitBtn.classList.remove('is-loading');
				submitBtn.disabled = false;
				submitBtn.textContent = originalText;
			});
	}

	// Attach to all forms on page load.
	document.addEventListener('DOMContentLoaded', function () {
		var forms = document.querySelectorAll('.godevs-form');
		forms.forEach(function (form) {
			form.addEventListener('submit', handleSubmit);
		});
	});
})();
