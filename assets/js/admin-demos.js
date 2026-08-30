/* GoDevs Portfolio — Admin Demo Library JS */
( function ( window, document ) {
	'use strict';

	var api = window.GODEVS_DEMOS || {};
	var I18N = api.i18n || {};

	function $( selector, scope ) {
		scope = scope || document;
		return scope.querySelector( selector );
	}

	function $all( selector, scope ) {
		scope = scope || document;
		return Array.prototype.slice.call( scope.querySelectorAll( selector ) );
	}

	/* -------------------- Filter & search -------------------- */

	var searchInput = $( '#godevs-search-input' );
	var categoryFilter = $( '#godevs-category-filter' );
	var styleFilter = $( '#godevs-style-filter' );
	var grid = $( '#godevs-demos-grid' );
	var emptyState = $( '#godevs-demos-empty' );

	function applyFilters() {
		if ( ! grid ) {
			return;
		}
		var query = ( searchInput ? searchInput.value : '' ).trim().toLowerCase();
		var cat = categoryFilter ? categoryFilter.value : '';
		var style = styleFilter ? styleFilter.value : '';
		var cards = $all( '.godevs-demo-card', grid );
		var visibleCount = 0;

		cards.forEach( function ( card ) {
			var matchesQuery = ! query || ( card.dataset.demoKeywords || '' ).indexOf( query ) !== -1;
			var matchesCat = ! cat || card.dataset.demoCategory === cat;
			var matchesStyle = ! style || card.dataset.demoStyle === style;
			var visible = matchesQuery && matchesCat && matchesStyle;
			card.classList.toggle( 'is-hidden', ! visible );
			if ( visible ) {
				visibleCount++;
			}
		} );

		if ( emptyState ) {
			emptyState.hidden = visibleCount > 0;
		}
	}

	if ( searchInput ) {
		searchInput.addEventListener( 'input', applyFilters );
	}
	if ( categoryFilter ) {
		categoryFilter.addEventListener( 'change', applyFilters );
	}
	if ( styleFilter ) {
		styleFilter.addEventListener( 'change', applyFilters );
	}

	/* -------------------- Modal -------------------- */

	var modal = $( '#godevs-modal' );
	var modalTitle = $( '#godevs-modal-title' );
	var modalBody = $( '#godevs-modal-body' );
	var modalFooter = $( '#godevs-modal-footer' );

	function openModal( title, bodyHTML, footerHTML ) {
		if ( ! modal ) {
			return;
		}
		if ( modalTitle ) {
			modalTitle.textContent = title;
		}
		if ( modalBody ) {
			modalBody.innerHTML = bodyHTML;
		}
		if ( modalFooter ) {
			modalFooter.innerHTML = footerHTML;
		}
		modal.hidden = false;
		document.body.style.overflow = 'hidden';
	}

	function closeModal() {
		if ( ! modal ) {
			return;
		}
		modal.hidden = true;
		document.body.style.overflow = '';
	}

	if ( modal ) {
		modal.addEventListener( 'click', function ( e ) {
			var target = e.target;
			if ( target.dataset && target.dataset.action === 'close-modal' ) {
				closeModal();
			}
		} );
		document.addEventListener( 'keydown', function ( e ) {
			if ( e.key === 'Escape' && modal && ! modal.hidden ) {
				closeModal();
			}
		} );
	}

	/* -------------------- Progress -------------------- */

	var progressEl = $( '#godevs-progress' );
	var progressSteps = $( '#godevs-progress-steps' );

	function showProgress( steps ) {
		if ( ! progressEl || ! progressSteps ) {
			return;
		}
		progressSteps.innerHTML = steps.map( function ( s ) {
			return '<li data-step-id="' + s.id + '">' + s.label + '</li>';
		} ).join( '' );
		progressEl.hidden = false;
		document.body.style.overflow = 'hidden';
	}

	function markStepActive( stepId ) {
		var li = progressSteps ? progressSteps.querySelector( 'li[data-step-id="' + stepId + '"]' ) : null;
		if ( li ) {
			li.classList.add( 'is-active' );
		}
	}

	function markStepComplete( stepId ) {
		var li = progressSteps ? progressSteps.querySelector( 'li[data-step-id="' + stepId + '"]' ) : null;
		if ( li ) {
			li.classList.remove( 'is-active' );
			li.classList.add( 'is-complete' );
		}
	}

	function markStepError( stepId ) {
		var li = progressSteps ? progressSteps.querySelector( 'li[data-step-id="' + stepId + '"]' ) : null;
		if ( li ) {
			li.classList.remove( 'is-active' );
			li.classList.add( 'is-error' );
		}
	}

	function hideProgress() {
		if ( progressEl ) {
			progressEl.hidden = true;
		}
		document.body.style.overflow = '';
	}

	/* -------------------- AJAX helpers -------------------- */

	function post( action, data ) {
		return fetch( api.ajaxUrl, {
			method: 'POST',
			headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
			body: new URLSearchParams(
				Object.assign(
					{
						action: action,
						nonce: api.ajaxNonce,
					},
					data || {}
				)
			).toString(),
		} ).then( function ( r ) {
			return r.json();
		} );
	}

	/* -------------------- Preview action -------------------- */

	if ( grid ) {
		grid.addEventListener( 'click', function ( e ) {
			var target = e.target;
			if ( ! target.dataset || ! target.dataset.action ) {
				return;
			}
			var action = target.dataset.action;
			var demoId = target.dataset.demoId;
			if ( ! demoId ) {
				return;
			}

			if ( action === 'preview' ) {
				e.preventDefault();
				handlePreview( demoId );
			} else if ( action === 'import' ) {
				e.preventDefault();
				handleImportClick( demoId );
			} else if ( action === 'remove' ) {
				e.preventDefault();
				handleRemoveClick( demoId );
			}
		} );
	}

	function handlePreview( demoId ) {
		openModal( 'Preview', '<p>Loading preview…</p>', '' );
		post( 'godevs_portfolio_preview_demo', { demo_id: demoId } )
			.then( function ( resp ) {
				if ( ! resp || ! resp.success ) {
					var msg = ( resp && resp.data && resp.data.message ) || 'Could not load preview.';
					modalBody.innerHTML = '<p>' + escapeHTML( msg ) + '</p>';
					return;
				}
				var data = resp.data;
				var styleNote = data.demo.style ? '<p><strong>Recommended style:</strong> ' + escapeHTML( data.demo.style ) + '</p>' : '';
				modalBody.innerHTML =
					'<p>' + escapeHTML( data.demo.name ) + '</p>' +
					styleNote +
					'<div class="godevs-preview-rendered" style="border:1px solid #dcdcde;border-radius:4px;overflow:auto;max-height:400px;background:#fff;padding:16px;">' + data.markup + '</div>';
				modalFooter.innerHTML = '<button type="button" class="button" data-action="close-modal">' + escapeHTML( I18N.cancel || 'Close' ) + '</button>';
			} )
			.catch( function () {
				modalBody.innerHTML = '<p>Network error while loading preview.</p>';
			} );
	}

	/* -------------------- Import action -------------------- */

	function handleImportClick( demoId ) {
		// First fetch the demo details to show in the confirmation modal.
		post( 'godevs_portfolio_get_import_details', { demo_id: demoId } )
			.then( function ( resp ) {
				if ( ! resp || ! resp.success ) {
					var msg = ( resp && resp.data && resp.data.message ) || 'Could not load demo details.';
					window.alert( msg );
					return;
				}
				var data = resp.data;
				showImportConfirmation( data );
			} )
			.catch( function () {
				window.alert( 'Network error while loading demo details.' );
			} );
	}

	function showImportConfirmation( data ) {
		var demo = data.demo;
		var isImported = data.isImported;
		var warning = '';
		var styleLine = '';

		if ( isImported ) {
			warning = '<div class="godevs-warning">This demo has already been imported. Importing again will create a new set of pages and a new navigation menu.</div>';
		}

		if ( demo.style ) {
			styleLine = '<p><strong>Recommended style:</strong> ' + escapeHTML( demo.style ) + '</p>';
		}

		var bodyHTML =
			'<p>You are about to import:</p>' +
			'<p><strong>' + escapeHTML( demo.name ) + '</strong><br>' + escapeHTML( demo.category ) + '</p>' +
			'<p>' + escapeHTML( demo.description ) + '</p>' +
			styleLine +
			warning +
			'<p>This will create:</p>' +
			'<ul>' +
				'<li>' + demo.pages.length + ' page' + ( demo.pages.length === 1 ? '' : 's' ) + '</li>' +
				'<li>1 navigation menu</li>' +
				'<li>Demo content (the homepage will be populated with the demo pattern markup)</li>' +
			'</ul>' +
			'<p>Existing content will not be deleted.</p>' +
			'<p><strong>Choose import mode:</strong></p>' +
			'<p>' +
				'<label><input type="radio" name="godevs-import-mode" value="safe" checked> ' +
				'<strong>Safe Import</strong> — for existing sites. Creates pages without changing homepage or style.</label><br>' +
				'<label><input type="radio" name="godevs-import-mode" value="starter"> ' +
				'<strong>Starter Import</strong> — for fresh sites. Sets the new homepage and applies the recommended style.</label>' +
			'</p>';

		if ( demo.style ) {
			bodyHTML += '<p><label><input type="checkbox" id="godevs-apply-style" checked> Apply recommended style variation (' + escapeHTML( demo.style ) + ')</label></p>';
		}

		var footerHTML =
			'<button type="button" class="button" data-action="close-modal">' + escapeHTML( I18N.cancel || 'Cancel' ) + '</button> ' +
			'<button type="button" class="button button-primary" id="godevs-confirm-import">' + escapeHTML( I18N.importDemo || 'Import Demo' ) + '</button>';

		openModal( 'Import Demo', bodyHTML, footerHTML );

		var confirmBtn = $( '#godevs-confirm-import' );
		if ( confirmBtn ) {
			confirmBtn.addEventListener( 'click', function () {
				var mode = 'safe';
				var modeRadios = document.querySelectorAll( 'input[name="godevs-import-mode"]' );
				modeRadios.forEach( function ( r ) {
					if ( r.checked ) {
						mode = r.value;
					}
				} );
				var applyStyleCheckbox = $( '#godevs-apply-style' );
				var applyStyle = applyStyleCheckbox ? applyStyleCheckbox.checked : false;
				closeModal();
				performImport( demo.id, mode, applyStyle );
			} );
		}
	}

	function performImport( demoId, mode, applyStyle ) {
		post( 'godevs_portfolio_import_demo', {
			demo_id: demoId,
			mode: mode,
			apply_style: applyStyle ? 1 : 0,
		} )
			.then( function ( resp ) {
				closeModal();
				if ( resp && resp.data && resp.data.steps ) {
					showProgress( resp.data.steps );
				}
				if ( ! resp || ! resp.success ) {
					var msg = ( resp && resp.data && resp.data.message ) || 'Import failed.';
					window.alert( msg );
					hideProgress();
					return;
				}
				var data = resp.data;
				// Mark all steps as complete (the import already happened synchronously server-side).
				if ( data.steps ) {
					data.steps.forEach( function ( s ) {
						markStepComplete( s.id );
					} );
				}
				var errorsHTML = '';
				if ( data.errors && data.errors.length > 0 ) {
					errorsHTML = '<p><strong>Some steps had issues:</strong></p><ul>' +
						data.errors.map( function ( e ) { return '<li>' + escapeHTML( e ) + '</li>'; } ).join( '' ) +
						'</ul>';
				}
				setTimeout( function () {
					hideProgress();
					var editUrl = data.editHomepageUrl || '';
					var editSiteUrl = data.editSiteUrl || '';
					openModal(
						'Import complete',
						'<p>The demo has been imported successfully.</p>' +
						( mode === 'starter' ? '<p>The homepage has been set to the new "Home" page.</p>' : '' ) +
						( data.style ? '<p>Recommended style variation: <strong>' + escapeHTML( data.style ) + '</strong>. Apply it via the Site Editor → Styles browser.</p>' : '' ) +
						errorsHTML +
						'<p>Open the new homepage in the editor to start customizing.</p>',
						'<button type="button" class="button" data-action="close-modal">' + escapeHTML( I18N.cancel || 'Close' ) + '</button> ' +
						( editSiteUrl ? '<a class="button button-primary" href="' + editSiteUrl + '">Open Site Editor</a> ' : '' ) +
						( editUrl ? '<a class="button" href="' + editUrl + '">Edit Homepage</a>' : '' )
					);
					// Reload the page so the imported card shows the "Imported" badge.
					setTimeout( function () {
						window.location.reload();
					}, 100 );
				}, 500 );
			} )
			.catch( function () {
				closeModal();
				window.alert( 'Network error during import.' );
				hideProgress();
			} );
	}

	/* -------------------- Remove action -------------------- */

	function handleRemoveClick( demoId ) {
		var bodyHTML =
			'<p>Are you sure you want to remove this demo?</p>' +
			'<p>This will <strong>trash</strong> the pages created by the importer and delete the navigation menu.</p>' +
			'<div class="godevs-warning">Existing content unrelated to this demo will not be affected. Trashed pages can be restored from the WordPress trash.</div>';
		var footerHTML =
			'<button type="button" class="button" data-action="close-modal">' + escapeHTML( I18N.cancel || 'Cancel' ) + '</button> ' +
			'<button type="button" class="button button-link-delete" id="godevs-confirm-remove">' + escapeHTML( I18N.removeDemo || 'Remove Demo' ) + '</button>';

		openModal( I18N.confirmRemove || 'Confirm Removal', bodyHTML, footerHTML );

		var confirmBtn = $( '#godevs-confirm-remove' );
		if ( confirmBtn ) {
			confirmBtn.addEventListener( 'click', function () {
				closeModal();
				performRemove( demoId );
			} );
		}
	}

	function performRemove( demoId ) {
		post( 'godevs_portfolio_remove_demo', { demo_id: demoId } )
			.then( function ( resp ) {
				if ( ! resp || ! resp.success ) {
					var msg = ( resp && resp.data && resp.data.message ) || 'Could not remove demo.';
					window.alert( msg );
					return;
				}
				window.location.reload();
			} )
			.catch( function () {
				window.alert( 'Network error during removal.' );
			} );
	}

	/* -------------------- Utilities -------------------- */

	function escapeHTML( s ) {
		if ( s === null || s === undefined ) {
			return '';
		}
		return String( s )
			.replace( /&/g, '&amp;' )
			.replace( /</g, '&lt;' )
			.replace( />/g, '&gt;' )
			.replace( /"/g, '&quot;' )
			.replace( /'/g, '&#039;' );
	}
} )( window, document );
