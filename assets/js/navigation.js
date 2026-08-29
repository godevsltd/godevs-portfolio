/**
 * GoDevs Portfolio — front-end JavaScript.
 *
 * WordPress loads this script with `defer` so it runs after the DOM is parsed.
 * It is intentionally small: no libraries, no transpile step, no global
 * helpers. The Site Editor already handles most interactions; we only fill in
 * two things the core navigation block does not:
 *
 *   1. Sticky header offset adjustment when the page scrolls.
 *   2. Skip-to-content focus enhancement — the native skip link works, but
 *      we move focus into the main region so screen readers announce it.
 *
 * Everything respects `prefers-reduced-motion`.
 */

( function () {
	'use strict';

	document.addEventListener( 'DOMContentLoaded', function () {
		var header = document.querySelector( '.site-header' );
		var main = document.querySelector( '.site-main' );
		var skipLink = document.querySelector( '.skip-link' );

		// 1. Sticky header shadow on scroll, no transform animation.
		if ( header ) {
			var isSticky = window.getComputedStyle( header ).position === 'sticky';
			if ( isSticky ) {
				var onScroll = function () {
					if ( window.scrollY > 8 ) {
						header.classList.add( 'is-scrolled' );
					} else {
						header.classList.remove( 'is-scrolled' );
					}
				};
				window.addEventListener( 'scroll', onScroll, { passive: true } );
				onScroll();
			}
		}

		// 2. Skip-to-content enhancement.
		if ( skipLink && main ) {
			skipLink.addEventListener( 'click', function ( event ) {
				event.preventDefault();
				main.setAttribute( 'tabindex', '-1' );
				main.focus( { preventScroll: true } );
				main.scrollIntoView();
			} );
		}
	} );
} )();
