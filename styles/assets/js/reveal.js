/**
 * GoDevs Portfolio — Scroll Reveal + Header Scroll-State
 *
 * Vanilla JS, IntersectionObserver-based. No dependencies.
 * Respects prefers-reduced-motion: reduce (elements start visible).
 */
(function () {
	'use strict';

	// Check reduced motion preference
	var prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

	// ── Scroll Reveal ──────────────────────────────────────
	if (!prefersReducedMotion && 'IntersectionObserver' in window) {
		var revealElements = document.querySelectorAll('.godevs-reveal');

		if (revealElements.length > 0) {
			var observer = new IntersectionObserver(
				function (entries) {
					entries.forEach(function (entry) {
						if (entry.isIntersecting) {
							entry.target.classList.add('is-visible');
							observer.unobserve(entry.target);
						}
					});
				},
				{
					threshold: 0.1,
					rootMargin: '0px 0px -48px 0px'
				}
			);

			revealElements.forEach(function (el) {
				observer.observe(el);
			});
		}
	} else {
		// Reduced motion or no IntersectionObserver — make everything visible
		document.querySelectorAll('.godevs-reveal').forEach(function (el) {
			el.classList.add('is-visible');
		});
	}

	// ── Header Scroll-State ────────────────────────────────
	var headers = document.querySelectorAll('.site-header');
	if (headers.length > 0 && !prefersReducedMotion) {
		var scrollThreshold = 20;

		function updateHeaderScroll() {
			var scrolled = window.scrollY > scrollThreshold;
			headers.forEach(function (header) {
				if (scrolled) {
					header.classList.add('is-scrolled');
				} else {
					header.classList.remove('is-scrolled');
				}
			});
		}

		// Throttle scroll events with requestAnimationFrame
		var ticking = false;
		window.addEventListener('scroll', function () {
			if (!ticking) {
				window.requestAnimationFrame(function () {
					updateHeaderScroll();
					ticking = false;
				});
				ticking = true;
			}
		});

		// Initial check
		updateHeaderScroll();
	}

	// ── Expand-on-Click Search ────────────────────────────
	var searchToggles = document.querySelectorAll('.godevs-search-toggle');
	searchToggles.forEach(function (toggle) {
		toggle.addEventListener('click', function (e) {
			e.preventDefault();
			var target = toggle.getAttribute('data-target');
			var expandEl = target ? document.querySelector(target) : toggle.nextElementSibling;
			if (expandEl) {
				expandEl.classList.toggle('is-open');
				if (expandEl.classList.contains('is-open')) {
					var input = expandEl.querySelector('input');
					if (input) {
						input.focus();
					}
				}
			}
		});
	});
})();
