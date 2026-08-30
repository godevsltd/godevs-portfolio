/* GoDevs Portfolio — Modern Settings Dashboard JS
 * v2.0.0 — Tab switching, AJAX save, color picker
 */
( function ( $ ) {
	'use strict';

	var api = window.GODEVS_SETTINGS || {};
	var saveBtn = $( '#godevs-save-btn' );
	var resetBtn = $( '#godevs-reset-btn' );
	var indicator = $( '#godevs-save-indicator' );
	var form = $( '#godevs-settings-form' );

	/* ─── Tab switching ─── */
	$( '.godevs-settings-nav a' ).on( 'click', function ( e ) {
		e.preventDefault();
		var section = $( this ).data( 'section' );

		// Update nav active state
		$( '.godevs-settings-nav a' ).removeClass( 'is-active' );
		$( this ).addClass( 'is-active' );

		// Show the matching panel
		$( '.godevs-panel' ).removeClass( 'is-active' );
		$( '#panel-' + section ).addClass( 'is-active' );
	} );

	/* ─── Color picker init ─── */
	$( '.godevs-color-picker' ).wpColorPicker( {
		change: function () {
			markUnsaved();
		},
		clear: function () {
			markUnsaved();
		}
	} );

	/* ─── Mark unsaved changes ─── */
	var hasUnsaved = false;

	function markUnsaved() {
		hasUnsaved = true;
		saveBtn.addClass( 'is-unsaved' );
	}

	form.on( 'change input', 'input, select', function () {
		markUnsaved();
	} );

	/* ─── Save via AJAX ─── */
	saveBtn.on( 'click', function () {
		saveBtn.text( 'Saving…' ).prop( 'disabled', true );

		// Gather all form data
		var data = {
			action: 'godevs_portfolio_save_settings',
			nonce: api.ajaxNonce
		};

		// Collect all inputs
		form.find( 'input[type="text"], input[type="number"], select' ).each( function () {
			var name = $( this ).attr( 'name' );
			if ( name ) {
				data[ name ] = $( this ).val();
			}
		} );

		// Collect toggles (checkboxes)
		form.find( 'input[type="checkbox"]' ).each( function () {
			var name = $( this ).attr( 'name' );
			if ( name ) {
				data[ name ] = $( this ).is( ':checked' ) ? '1' : '';
			}
		} );

		// Collect color picker values (wpColorPicker stores in the hidden input)
		form.find( '.godevs-color-picker' ).each( function () {
			var name = $( this ).attr( 'name' );
			if ( name ) {
				data[ name ] = $( this ).val();
			}
		} );

		$.post( api.ajaxUrl, data )
			.done( function ( response ) {
				if ( response.success ) {
					showIndicator( response.data.message || 'Saved', false );
					hasUnsaved = false;
					saveBtn.removeClass( 'is-unsaved' );
				} else {
					showIndicator( response.data.message || api.i18n.error, true );
				}
			} )
			.fail( function () {
				showIndicator( api.i18n.error, true );
			} )
			.always( function () {
				saveBtn.text( 'Save changes' ).prop( 'disabled', false );
			} );
	} );

	/* ─── Reset via AJAX ─── */
	resetBtn.on( 'click', function () {
		if ( ! confirm( api.i18n.resetConf ) ) {
			return;
		}

		resetBtn.text( 'Resetting…' ).prop( 'disabled', true );

		$.post( api.ajaxUrl, {
			action: 'godevs_portfolio_reset_settings',
			nonce: api.ajaxNonce
		} )
			.done( function ( response ) {
				if ( response.success ) {
					showIndicator( response.data.message || api.i18n.resetDone, false );
					// Reload page to reflect reset
					setTimeout( function () {
						window.location.reload();
					}, 1000 );
				} else {
					showIndicator( response.data.message || api.i18n.error, true );
				}
			} )
			.fail( function () {
				showIndicator( api.i18n.error, true );
			} )
			.always( function () {
				resetBtn.text( 'Reset' ).prop( 'disabled', false );
			} );
	} );

	/* ─── Show indicator ─── */
	function showIndicator( message, isError ) {
		indicator.text( message )
			.removeClass( 'is-error' )
			.addClass( 'is-visible' );

		if ( isError ) {
			indicator.addClass( 'is-error' );
		}

		setTimeout( function () {
			indicator.removeClass( 'is-visible' );
		}, 3000 );
	}

	/* ─── Warn on unsaved changes ─── */
	$( window ).on( 'beforeunload', function () {
		if ( hasUnsaved ) {
			return '';
		}
	} );

} )( jQuery );
