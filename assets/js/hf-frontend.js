/**
 * GoDevs Portfolio — Header/Footer Builder Front-end JS
 *
 * Handles:
 *   - Mobile hamburger menu toggle (for builder-rendered nav menus)
 *   - Sticky header scroll shadow (adds .is-scrolled class when scrolled)
 *
 * This script is enqueued on the front-end (not in admin) by
 * godevs_hf_enqueue_css() in inc/header-footer-builder.php.
 *
 * @package GoDevs_Portfolio
 * @since   3.0.0
 */

( function () {
	'use strict';

	// Run on DOM ready.
	function init() {
		initMobileToggle();
		initStickyScroll();
	}

	/**
	 * Mobile hamburger menu toggle.
	 *
	 * When the mobile toggle button is clicked, expand/collapse the nav menu.
	 * Only active at ≤768px (CSS handles the show/hide of the toggle button).
	 */
	function initMobileToggle() {
		var toggles = document.querySelectorAll( '.godevs-hf-mobile-toggle' );
		if ( ! toggles.length ) {
			return;
		}

		toggles.forEach( function ( toggle ) {
			toggle.addEventListener( 'click', function ( e ) {
				e.preventDefault();
				e.stopPropagation();

				var navWrap = toggle.closest( '.godevs-hf-nav-wrap' );
				if ( ! navWrap ) {
					return;
				}

				var isOpen = navWrap.classList.contains( 'is-mobile-expanded' );

				if ( isOpen ) {
					// Close.
					navWrap.classList.remove( 'is-mobile-expanded' );
					navWrap.classList.add( 'is-mobile-collapsed' );
					toggle.classList.remove( 'is-open' );
					toggle.setAttribute( 'aria-expanded', 'false' );
				} else {
					// Open.
					navWrap.classList.remove( 'is-mobile-collapsed' );
					navWrap.classList.add( 'is-mobile-expanded' );
					toggle.classList.add( 'is-open' );
					toggle.setAttribute( 'aria-expanded', 'true' );
				}
			} );
		} );

		// Close mobile menu when clicking outside.
		document.addEventListener( 'click', function ( e ) {
			var expanded = document.querySelectorAll( '.godevs-hf-nav-wrap.is-mobile-expanded' );
			expanded.forEach( function ( navWrap ) {
				if ( ! navWrap.contains( e.target ) ) {
					navWrap.classList.remove( 'is-mobile-expanded' );
					navWrap.classList.add( 'is-mobile-collapsed' );
					var toggle = navWrap.querySelector( '.godevs-hf-mobile-toggle' );
					if ( toggle ) {
						toggle.classList.remove( 'is-open' );
						toggle.setAttribute( 'aria-expanded', 'false' );
					}
				}
			} );
		} );

		// Close mobile menu on Escape key.
		document.addEventListener( 'keydown', function ( e ) {
			if ( e.key !== 'Escape' ) {
				return;
			}
			var expanded = document.querySelectorAll( '.godevs-hf-nav-wrap.is-mobile-expanded' );
			expanded.forEach( function ( navWrap ) {
				navWrap.classList.remove( 'is-mobile-expanded' );
				navWrap.classList.add( 'is-mobile-collapsed' );
				var toggle = navWrap.querySelector( '.godevs-hf-mobile-toggle' );
				if ( toggle ) {
					toggle.classList.remove( 'is-open' );
					toggle.setAttribute( 'aria-expanded', 'false' );
					toggle.focus();
				}
			} );
		} );
	}

	/**
	 * Sticky header scroll shadow.
	 *
	 * Adds .is-scrolled class to sticky header rows when the page is scrolled
	 * more than 10px from the top. The CSS then applies a box-shadow.
	 *
	 * Throttled with requestAnimationFrame for performance.
	 */
	function initStickyScroll() {
		var stickyRows = document.querySelectorAll( '.godevs-hf-row.is-sticky' );
		if ( ! stickyRows.length ) {
			return;
		}

		var ticking = false;

		function updateScrollState() {
			var scrolled = window.pageYOffset > 10;

			stickyRows.forEach( function ( row ) {
				if ( scrolled ) {
					row.classList.add( 'is-scrolled' );
				} else {
					row.classList.remove( 'is-scrolled' );
				}
			} );

			ticking = false;
		}

		function onScroll() {
			if ( ! ticking ) {
				window.requestAnimationFrame( updateScrollState );
				ticking = true;
			}
		}

		window.addEventListener( 'scroll', onScroll, { passive: true } );

		// Initial state.
		updateScrollState();
	}

	if ( document.readyState === 'loading' ) {
		document.addEventListener( 'DOMContentLoaded', init );
	} else {
		init();
	}
} )();
