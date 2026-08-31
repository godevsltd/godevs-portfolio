/* GoDevs Portfolio — Premium Demo Library JS
 * v2.0 — Device preview, page navigation, improved modal experience.
 */
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
        // The grid is now split into two sections: #godevs-demos-grid-ready and
        // #godevs-demos-grid-coming. We also keep the legacy #godevs-demos-grid
        // reference for backward-compat with the standalone page.
        var gridReady = $( '#godevs-demos-grid-ready' );
        var gridComing = $( '#godevs-demos-grid-coming' );
        var grid = gridReady || gridComing || $( '#godevs-demos-grid' );
        var emptyState = $( '#godevs-demos-empty' );
        var countEl = $( '#godevs-demos-count' );
        var clearFiltersBtn = $( '#godevs-clear-filters' );
        var emptyResetBtn = $( '#godevs-empty-reset' );

        function applyFilters() {
                var query = ( searchInput ? searchInput.value : '' ).trim().toLowerCase();
                var cat = categoryFilter ? categoryFilter.value : '';
                var style = styleFilter ? styleFilter.value : '';
                // Collect cards from BOTH grids.
                var allGrids = [];
                if ( gridReady ) allGrids.push( gridReady );
                if ( gridComing ) allGrids.push( gridComing );
                if ( ! allGrids.length && grid ) allGrids.push( grid );

                var visibleCount = 0;
                var readyVisible = 0;
                var comingVisible = 0;

                allGrids.forEach( function ( g ) {
                        var cards = $all( '.godevs-demo-card', g );
                        var isReadyGrid = ( g === gridReady ) || ( ! gridReady && g === grid );
                        cards.forEach( function ( card ) {
                                var matchesQuery = ! query || ( card.dataset.demoKeywords || '' ).indexOf( query ) !== -1;
                                var matchesCat = ! cat || card.dataset.demoCategory === cat;
                                var matchesStyle = ! style || card.dataset.demoStyle === style;
                                var visible = matchesQuery && matchesCat && matchesStyle;
                                card.classList.toggle( 'is-hidden', ! visible );
                                if ( visible ) {
                                        visibleCount++;
                                        if ( isReadyGrid ) readyVisible++;
                                        else comingVisible++;
                                }
                        } );
                } );

                // Show/hide section headers based on whether their grid has any visible cards.
                var readySection = $( '.godevs-demos-section[data-section="ready"]' );
                var comingSection = $( '.godevs-demos-section[data-section="coming"]' );
                if ( readySection ) readySection.style.display = readyVisible > 0 ? '' : 'none';
                if ( comingSection ) comingSection.style.display = comingVisible > 0 ? '' : 'none';

                if ( emptyState ) {
                        emptyState.hidden = visibleCount > 0;
                }

                if ( countEl ) {
                        countEl.textContent = visibleCount + ( visibleCount === 1 ? ' demo' : ' demos' );
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

        function clearAllFilters() {
                if ( searchInput ) searchInput.value = '';
                if ( categoryFilter ) categoryFilter.value = '';
                if ( styleFilter ) styleFilter.value = '';
                applyFilters();
        }

        if ( clearFiltersBtn ) {
                clearFiltersBtn.addEventListener( 'click', clearAllFilters );
        }
        if ( emptyResetBtn ) {
                emptyResetBtn.addEventListener( 'click', clearAllFilters );
        }

        /* -------------------- Modal -------------------- */

        var modal = $( '#godevs-modal' );
        var modalTitle = $( '#godevs-modal-title' );
        var modalCategory = $( '#godevs-modal-category' );
        var previewContent = null; // kept for backward-compat (no longer used)
        var previewIframe = $( '#godevs-preview-iframe' );
        var previewLoading = $( '#godevs-preview-loading' );
        var previewViewport = $( '#godevs-preview-viewport' );
        var pageNav = $( '#godevs-page-nav' );
        var importFromPreviewBtn = $( '#godevs-preview-import-btn' );
        var openNewTabBtn = $( '#godevs-preview-open-new' );
        var deviceBtns = $all( '.godevs-device-btn' );
        var closeBtns = $all( '[data-action="close-modal"]' );
        // The render endpoint URL is built from the api config — see admin-demos.php.
        var renderNonce = api.renderNonce || '';

        // State
        var currentDemoId = '';
        var currentPage = 'home';
        var currentDevice = 'desktop';
        var currentDemoData = null;

        function openPreviewModal( title, category ) {
                if ( ! modal ) return;
                if ( modalTitle ) modalTitle.textContent = title || '';
                if ( modalCategory ) modalCategory.textContent = category || '';
                modal.hidden = false;
                document.body.style.overflow = 'hidden';
                // Focus the close button for keyboard users
                if ( closeBtns.length ) {
                        setTimeout( function () { closeBtns[0].focus(); }, 50 );
                }
        }

        function closeModal() {
                if ( ! modal ) return;
                modal.hidden = true;
                document.body.style.overflow = '';
                currentDemoId = '';
                currentPage = 'home';
                // Reset the iframe to about:blank so the previous demo does
                // not keep running scripts in the background.
                if ( previewIframe ) {
                        previewIframe.src = 'about:blank';
                }
                if ( pageNav ) pageNav.innerHTML = '';
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

        /* -------------------- Device switcher -------------------- */

        function setDevice( device ) {
                currentDevice = device;
                if ( previewViewport ) {
                        previewViewport.setAttribute( 'data-device', device );
                }
                deviceBtns.forEach( function ( btn ) {
                        var isActive = btn.dataset.device === device;
                        btn.classList.toggle( 'is-active', isActive );
                        btn.setAttribute( 'aria-selected', isActive ? 'true' : 'false' );
                } );
        }

        deviceBtns.forEach( function ( btn ) {
                btn.addEventListener( 'click', function () {
                        setDevice( btn.dataset.device );
                } );
        } );

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

        function showPreviewLoading() {
                if ( previewLoading ) {
                        previewLoading.classList.remove( 'is-hidden' );
                }
        }

        function hidePreviewLoading() {
                if ( previewLoading ) {
                        previewLoading.classList.add( 'is-hidden' );
                }
        }

        // Build the iframe src URL for the live render endpoint.
        function buildRenderUrl( demoId, page ) {
                return api.ajaxUrl +
                        '?action=godevs_render_demo_page' +
                        '&demo=' + encodeURIComponent( demoId ) +
                        '&page=' + encodeURIComponent( page || 'home' ) +
                        '&_wpnonce=' + encodeURIComponent( renderNonce );
        }

        // Render the preview by setting the iframe src. The PHP endpoint
        // streams a complete HTML5 document with full CSS, so the iframe
        // shows the real rendered page — not raw block markup.
        function renderPreviewIframe( demoId, page ) {
                if ( ! previewIframe ) return;
                var url = buildRenderUrl( demoId, page );
                showPreviewLoading();
                // Set the iframe src — the onload handler will hide the loading overlay.
                previewIframe.onload = function () {
                        hidePreviewLoading();
                };
                previewIframe.src = url;
        }

        // Backward-compat no-op — no longer used (was used for innerHTML injection).
        function renderPreviewMarkup() {}

        /* -------------------- Page navigation -------------------- */

        function buildPageNav( pages ) {
                if ( ! pageNav ) return;
                pageNav.innerHTML = '';

                pages.forEach( function ( page ) {
                        var btn = document.createElement( 'button' );
                        btn.type = 'button';
                        btn.dataset.page = page.slug;
                        btn.textContent = page.title;
                        if ( page.slug === currentPage ) {
                                btn.classList.add( 'is-active' );
                        }
                        btn.addEventListener( 'click', function () {
                                loadDemoPage( currentDemoId, page.slug );
                        } );
                        pageNav.appendChild( btn );
                } );
        }

        function updatePageNavActive() {
                $all( 'button', pageNav ).forEach( function ( btn ) {
                        btn.classList.toggle( 'is-active', btn.dataset.page === currentPage );
                } );
        }

        /* -------------------- Preview action -------------------- */

        function handlePreview( demoId ) {
                currentDemoId = demoId;
                currentPage = 'home';

                // Find the demo card to get name + category
                var card = $( '.godevs-demo-card[data-demo-id="' + demoId + '"]' );
                var name = card ? ( card.dataset.demoName || '' ) : '';
                var category = card ? ( card.querySelector( '.godevs-demo-card-category-badge' ) || {} ).textContent : '';

                openPreviewModal( name, category );
                setDevice( 'desktop' );
                showPreviewLoading();

                // Fetch available pages for this demo
                post( 'godevs_portfolio_get_demo_pages', { demo_id: demoId } )
                        .then( function ( resp ) {
                                if ( resp && resp.success && resp.data.pages ) {
                                        buildPageNav( resp.data.pages );
                                }
                        } )
                        .catch( function () {} );

                // Fetch the homepage preview
                loadDemoPage( demoId, 'home' );
        }

        function loadDemoPage( demoId, page ) {
                currentPage = page;
                // Update the "Open in new tab" button href so the current
                // page can be opened in a full browser window.
                if ( openNewTabBtn ) {
                        openNewTabBtn.setAttribute( 'href', buildRenderUrl( demoId, page ) );
                        openNewTabBtn.setAttribute( 'target', '_blank' );
                }
                // Load the rendered HTML into the iframe.
                renderPreviewIframe( demoId, page );
                updatePageNavActive();
        }

        /* -------------------- Import from preview -------------------- */

        if ( importFromPreviewBtn ) {
                importFromPreviewBtn.addEventListener( 'click', function () {
                        if ( currentDemoId ) {
                                closeModal();
                                handleImportClick( currentDemoId );
                        }
                } );
        }

        /* -------------------- Grid click handler -------------------- */

        // Listen for clicks on BOTH the ready and coming-soon grids
        // (plus the legacy single grid for backward-compat).
        [ gridReady, gridComing, grid ].forEach( function ( g ) {
                if ( ! g ) return;
                g.addEventListener( 'click', function ( e ) {
                        var target = e.target;
                        // Find the closest button with data-action
                        var btn = target.closest( '[data-action]' );
                        if ( ! btn || ! btn.dataset.action ) return;

                        var action = btn.dataset.action;
                        var demoId = btn.dataset.demoId;
                        if ( ! demoId ) return;

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
        } );

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
                var importedCount = api.imported ? api.imported.length : 0;
                var warning = '';
                var styleLine = '';

                if ( isImported ) {
                        warning = '<div class="godevs-warning">This demo has already been imported. Importing again will replace the previous pages and navigation menu.</div>';
                }

                // Inform the user that other imported demos will be replaced.
                var otherImports = importedCount - ( isImported ? 1 : 0 );
                var replaceNotice = '';
                if ( otherImports > 0 ) {
                        replaceNotice = '<div class="godevs-info">You have ' + otherImports +
                                ' other imported demo' + ( otherImports === 1 ? '' : 's' ) +
                                '. Importing this demo will <strong>automatically remove</strong> ' +
                                ( otherImports === 1 ? 'it' : 'them' ) +
                                ' so only this demo\'s pages are visible on your site.</div>';
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
                        replaceNotice +
                        '<p>This will create:</p>' +
                        '<ul>' +
                                '<li>' + demo.pages.length + ' page' + ( demo.pages.length === 1 ? '' : 's' ) + '</li>' +
                                '<li>1 navigation menu (with only this demo\'s pages)</li>' +
                                '<li>Demo content (the homepage will be populated with the demo pattern markup)</li>' +
                        '</ul>' +
                        ( otherImports > 0 || isImported
                                ? '<p><strong>Previously imported demo pages will be moved to trash</strong> (recoverable from the Trash in Pages).</p>'
                                : '<p>Your other existing pages will not be deleted.</p>' ) +
                        '<p><strong>Choose import mode:</strong></p>' +
                        '<p>' +
                                '<label><input type="radio" name="godevs-import-mode" value="starter" checked> ' +
                                '<strong>Starter Import</strong> — recommended. Sets the demo as your homepage and applies the recommended style.</label><br>' +
                                '<label><input type="radio" name="godevs-import-mode" value="safe"> ' +
                                '<strong>Safe Import</strong> — for existing sites. Creates pages without changing your current homepage or style.</label>' +
                        '</p>';

                if ( demo.style ) {
                        bodyHTML += '<p><label><input type="checkbox" id="godevs-apply-style" checked> Apply recommended style variation (' + escapeHTML( demo.style ) + ')</label></p>';
                }

                var footerHTML =
                        '<button type="button" class="button" data-action="close-modal">' + escapeHTML( I18N.cancel || 'Cancel' ) + '</button> ' +
                        '<button type="button" class="button button-primary" id="godevs-confirm-import">' + escapeHTML( I18N.importDemo || 'Import Demo' ) + '</button>';

                // Reuse the modal for import confirmation
                openModalSimple( I18N.confirmSafeTitle || 'Import Demo', bodyHTML, footerHTML );

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

        // Simple modal (reuses the same modal element but without device switcher)
        function openModalSimple( title, bodyHTML, footerHTML ) {
                if ( ! modal ) return;
                if ( modalTitle ) modalTitle.textContent = title || '';
                if ( modalCategory ) modalCategory.textContent = '';

                // Hide device switcher and page nav for confirmation
                $all( '.godevs-device-btn' ).forEach( function ( btn ) { btn.style.display = 'none'; } );
                if ( pageNav ) pageNav.style.display = 'none';
                if ( importFromPreviewBtn ) importFromPreviewBtn.style.display = 'none';

                // Use the body for confirmation content
                var viewport = $( '#godevs-preview-viewport' );
                if ( viewport ) {
                        viewport.setAttribute( 'data-device', 'desktop' );
                        viewport.style.maxWidth = '640px';
                        viewport.style.margin = '24px auto';
                }
                if ( previewLoading ) previewLoading.style.display = 'none';
                if ( previewContent ) previewContent.innerHTML = bodyHTML;
                if ( previewContent ) previewContent.style.padding = '24px';

                modal.hidden = false;
                document.body.style.overflow = 'hidden';

                // Restore footer
                var footer = $( '.godevs-preview-footer' );
                if ( footer ) {
                        var actions = $( '.godevs-preview-actions', footer );
                        if ( actions ) {
                                actions.innerHTML = footerHTML;
                                // Bind close and confirm buttons
                                $all( 'button', actions ).forEach( function ( btn ) {
                                        if ( btn.dataset.action === 'close-modal' ) {
                                                btn.addEventListener( 'click', closeModal );
                                        }
                                } );
                        }
                }
        }

        function restorePreviewModal() {
                // Restore device switcher and page nav visibility
                $all( '.godevs-device-btn' ).forEach( function ( btn ) { btn.style.display = ''; } );
                if ( pageNav ) pageNav.style.display = '';
                if ( importFromPreviewBtn ) importFromPreviewBtn.style.display = '';
                var viewport = $( '#godevs-preview-viewport' );
                if ( viewport ) {
                        viewport.style.maxWidth = '';
                        viewport.style.margin = '';
                }
                if ( previewContent ) previewContent.style.padding = '';
        }

        function performImport( demoId, mode, applyStyle ) {
                post( 'godevs_portfolio_import_demo', {
                        demo_id: demoId,
                        mode: mode,
                        apply_style: applyStyle ? 1 : 0,
                } )
                        .then( function ( resp ) {
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
                                var replacedHTML = '';
                                if ( data.replaced_demos && data.replaced_demos.length > 0 ) {
                                        replacedHTML = '<p><strong>Replaced demo(s):</strong> ' +
                                                data.replaced_demos.map( escapeHTML ).join( ', ' ) +
                                                ' — their pages were moved to trash.</p>';
                                }
                                var successMsg = 'Import complete!';
                                if ( data.viewSiteUrl ) {
                                        successMsg += ' Redirecting to your live site…';
                                }
                                setTimeout( function () {
                                        hideProgress();
                                        if ( data.viewSiteUrl ) {
                                                // Redirect to the live site so the user immediately
                                                // sees the imported demo content.
                                                window.location.href = data.viewSiteUrl;
                                        } else {
                                                window.location.reload();
                                        }
                                }, 1200 );
                        } )
                        .catch( function () {
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

                openModalSimple( I18N.confirmRemove || 'Confirm Removal', bodyHTML, footerHTML );

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

        /* -------------------- Progress indicator -------------------- */

        var progressEl = $( '#godevs-progress' );
        var progressSteps = $( '#godevs-progress-steps' );

        function showProgress( steps ) {
                if ( ! progressEl || ! progressSteps ) return;
                progressSteps.innerHTML = steps.map( function ( s ) {
                        return '<li data-step-id="' + s.id + '">' + s.label + '</li>';
                } ).join( '' );
                progressEl.hidden = false;
                document.body.style.overflow = 'hidden';
        }

        function markStepComplete( stepId ) {
                var li = progressSteps ? progressSteps.querySelector( 'li[data-step-id="' + stepId + '"]' ) : null;
                if ( li ) {
                        li.classList.remove( 'is-active' );
                        li.classList.add( 'is-complete' );
                }
        }

        function hideProgress() {
                if ( progressEl ) {
                        progressEl.hidden = true;
                }
                document.body.style.overflow = '';
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

        // Restore preview modal state when closing
        var originalCloseModal = closeModal;
        closeModal = function () {
                originalCloseModal();
                restorePreviewModal();
        };

} )( window, document );
