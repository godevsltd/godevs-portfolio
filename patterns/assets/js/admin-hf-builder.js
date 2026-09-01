/* GoDevs Portfolio — Header & Footer Builder JS
 * v2.4.0 — Visual drag-drop builder with device breakpoints
 */
( function ( $ ) {
        'use strict';

        var api = window.GODEVS_SETTINGS || {};
        var currentType = 'header';
        var currentDevice = 'desktop';
        var currentLayout = null;
        var elementsList = {};
        var templatesList = {};
        var savedLayouts = {};
        var activeLayout = null;

        /* ─── Init ─── */
        function init() {
                // Load data
                loadLayouts();

                // Tab switching
                $( '.godevs-hf-tab' ).on( 'click', function () {
                        $( '.godevs-hf-tab' ).removeClass( 'is-active' );
                        $( this ).addClass( 'is-active' );
                        currentType = $( this ).data( 'hf-tab' );
                        loadLayouts();
                } );

                // Device controls
                $( '.godevs-hf-device' ).on( 'click', function () {
                        $( '.godevs-hf-device' ).removeClass( 'is-active' );
                        $( this ).addClass( 'is-active' );
                        currentDevice = $( this ).data( 'device' );
                        $( '#godevs-hf-canvas' ).attr( 'data-device', currentDevice );
                } );

                // Save layout
                $( '#godevs-hf-save-layout' ).on( 'click', saveCurrentLayout );
        }

        /* ─── Load layouts from server ─── */
        function loadLayouts() {
                var $grid = $( '#godevs-hf-template-grid' );
                var $savedList = $( '#godevs-hf-saved-list' );

                // Show loading state.
                $grid.html( '<p style="color:#8c8f94;font-size:13px;padding:8px 0">Loading templates…</p>' );
                $savedList.html( '<p style="color:#8c8f94;font-size:13px;padding:8px 0">Loading layouts…</p>' );

                $.post( api.ajaxUrl, {
                        action: 'godevs_hf_get_layouts',
                        nonce: api.ajaxNonce,
                        layout_type: currentType
                } ).done( function ( response ) {
                        if ( ! response || ! response.success ) {
                                var msg = ( response && response.data && response.data.message ) ? response.data.message : 'Failed to load templates.';
                                $grid.html( '<div class="notice notice-error inline"><p>' + msg + '</p></div>' );
                                $savedList.html( '' );
                                return;
                        }

                        elementsList = response.data.elements || {};
                        templatesList = response.data.templates || {};
                        savedLayouts = response.data.layouts || {};
                        activeLayout = response.data.active || null;

                        renderTemplates();
                        renderSavedLayouts();
                        renderElementPalette();
                } ).fail( function ( jqXHR, textStatus, errorThrown ) {
                        // Silent failure — the user sees an empty grid with no diagnostic.
                        // Surface the error so it can be debugged.
                        var errorMsg = 'AJAX request failed: ' + textStatus + ' ' + errorThrown;
                        if ( jqXHR.status ) {
                                errorMsg += ' (HTTP ' + jqXHR.status + ')';
                        }
                        $grid.html( '<div class="notice notice-error inline"><p><strong>Error loading templates:</strong> ' + errorMsg + '</p><p>Please check your browser console and WordPress error logs. Common causes: nonce expired, security plugin blocking admin-ajax, or PHP fatal error.</p></div>' );
                        $savedList.html( '' );
                        if ( window.console ) {
                                if ( window.console ) { console.error( '[Header/Footer Builder] loadLayouts failed:', { textStatus: textStatus, errorThrown: errorThrown, status: jqXHR.status, responseText: jqXHR.responseText } ); }
                        }
                } );
        }

        /* ─── Render starter templates ─── */
        function renderTemplates() {
                var $grid = $( '#godevs-hf-template-grid' );
                $grid.empty();

                Object.keys( templatesList ).forEach( function ( key ) {
                        var tmpl = templatesList[ key ];
                        var $card = $(
                                '<div class="godevs-hf-template-card" data-template="' + key + '">' +
                                '<div class="godevs-hf-template-preview">' +
                                '<div class="preview-block" style="width:30px"></div>' +
                                '<div class="preview-block" style="width:60px"></div>' +
                                '<div class="preview-block" style="width:30px"></div>' +
                                '</div>' +
                                '<h4>' + ( tmpl.label || key ) + '</h4>' +
                                '<p>Click to use this template</p>' +
                                '</div>'
                        );

                        $card.on( 'click', function () {
                                loadTemplate( key );
                        } );

                        $grid.append( $card );
                } );
        }

        /* ─── Render saved layouts ─── */
        function renderSavedLayouts() {
                var $list = $( '#godevs-hf-saved-list' );
                $list.empty();

                if ( Object.keys( savedLayouts ).length === 0 ) {
                        $list.html( '<p style="color:#8c8f94;font-size:13px;padding:8px 0">No saved layouts yet. Choose a starter template above to begin.</p>' );
                        return;
                }

                Object.keys( savedLayouts ).forEach( function ( slug ) {
                        var layout = savedLayouts[ slug ];
                        var isActive = activeLayout === slug;
                        var $item = $(
                                '<div class="godevs-hf-saved-item' + ( isActive ? ' is-active' : '' ) + '" data-slug="' + slug + '">' +
                                '<div>' +
                                '<span class="godevs-hf-saved-item-name">' + ( layout.label || slug ) + '</span>' +
                                ( isActive ? '<span class="godevs-hf-saved-item-badge">Active</span>' : '' ) +
                                '</div>' +
                                '<div class="godevs-hf-saved-item-actions">' +
                                ( ! isActive ? '<button class="button button-small activate-btn">Set Active</button>' : '' ) +
                                '<button class="button button-small edit-btn">Edit</button>' +
                                '<button class="button button-small button-link-delete delete-btn">Delete</button>' +
                                '</div>' +
                                '</div>'
                        );

                        $item.find( '.activate-btn' ).on( 'click', function () {
                                activateLayout( slug );
                        } );
                        $item.find( '.edit-btn' ).on( 'click', function () {
                                editLayout( slug );
                        } );
                        $item.find( '.delete-btn' ).on( 'click', function () {
                                deleteLayout( slug );
                        } );

                        $list.append( $item );
                } );
        }

        /* ─── Render element palette ─── */
        function renderElementPalette() {
                var $list = $( '#godevs-hf-elements-list' );
                $list.empty();

                var categories = {};
                Object.keys( elementsList ).forEach( function ( key ) {
                        var el = elementsList[ key ];
                        var cat = el.category || 'content';
                        if ( ! categories[ cat ] ) categories[ cat ] = [];
                        categories[ cat ].push( { key: key, el: el } );
                } );

                Object.keys( categories ).forEach( function ( cat ) {
                        $list.append( '<div class="godevs-hf-element-category">' + cat.charAt( 0 ).toUpperCase() + cat.slice( 1 ) + '</div>' );
                        categories[ cat ].forEach( function ( item ) {
                                var $btn = $(
                                        '<button class="godevs-hf-element-btn" data-element="' + item.key + '">' +
                                        '<span class="dashicons ' + item.el.icon + '"></span>' +
                                        '<span>' + item.el.label + '</span>' +
                                        '</button>'
                                );
                                $btn.on( 'click', function () {
                                        addElementToSelectedColumn( item.key );
                                } );
                                $list.append( $btn );
                        } );
                } );
        }

        /* ─── Load a starter template ─── */
        function loadTemplate( templateKey ) {
                var tmpl = templatesList[ templateKey ];
                if ( ! tmpl ) return;

                currentLayout = {
                        label: tmpl.label,
                        rows: JSON.parse( JSON.stringify( tmpl.rows ) )
                };

                $( '#godevs-hf-layout-name' ).val( tmpl.label + ' — Custom' );
                showEditor();
                renderCanvas();
        }

        /* ─── Edit an existing saved layout ─── */
        function editLayout( slug ) {
                var layout = savedLayouts[ slug ];
                if ( ! layout ) return;

                currentLayout = JSON.parse( JSON.stringify( layout ) );
                $( '#godevs-hf-layout-name' ).val( layout.label || slug );
                $( '#godevs-hf-editor' ).attr( 'data-slug', slug );
                showEditor();
                renderCanvas();
        }

        /* ─── Show editor ─── */
        function showEditor() {
                $( '#godevs-hf-editor' ).show();
                $( '#godevs-hf-live-preview-section' ).show();
                $( 'html, body' ).animate( { scrollTop: $( '#godevs-hf-editor' ).offset().top - 50 }, 300 );
        }

        /* ─── Render the visual canvas ─── */
        function renderCanvas() {
                var $canvas = $( '#godevs-hf-canvas' );
                var $grid = $canvas.find( '.godevs-hf-canvas-inner' );
                if ( ! $grid.length ) {
                        $grid = $( '<div class="godevs-hf-canvas-inner"></div>' );
                        $canvas.append( $grid );
                }
                $grid.empty();

                if ( ! currentLayout || ! currentLayout.rows ) {
                        $grid.html( '<div style="padding:40px;text-align:center;color:#8c8f94">No rows yet. Click "Add Row" below.</div>' );
                } else {
                        // Render wireframe (structural view with element labels + icons).
                        currentLayout.rows.forEach( function ( row, rowIdx ) {
                                $grid.append( renderRow( row, rowIdx ) );
                        } );

                        // Also trigger a debounced live preview render into the
                        // preview container (below the wireframe). This shows the
                        // actual rendered HTML as the user edits.
                        updateLivePreview();
                }

                // Add row button
                var $addRow = $( '<div class="godevs-hf-add-row">+ Add Row</div>' );
                $addRow.on( 'click', function () {
                        if ( ! currentLayout ) currentLayout = { label: 'Untitled', rows: [] };
                        if ( ! currentLayout.rows ) currentLayout.rows = [];
                        currentLayout.rows.push( {
                                columns: [ { width: '33', elements: [] }, { width: '33', elements: [] }, { width: '34', elements: [] } ],
                                settings: { height: '64', background: '', sticky: '0' }
                        } );
                        renderCanvas();
                } );
                $grid.append( $addRow );
        }

        /* ─── Render a single row ─── */
        function renderRow( row, rowIdx ) {
                var settings = row.settings || {};
                var bg = settings.background || '';
                var textColor = settings.text_color || '';
                var height = settings.height || '64';
                var sticky = settings.sticky === '1';

                var styleParts = [];
                if ( bg ) styleParts.push( 'background:' + bg );
                if ( textColor ) styleParts.push( 'color:' + textColor );
                styleParts.push( 'min-height:' + height + 'px' );

                var $row = $(
                        '<div class="godevs-hf-builder-row" data-row="' + rowIdx + '">' +
                        '<div class="godevs-hf-builder-row-header">' +
                        '<span>Row ' + ( rowIdx + 1 ) + ( sticky ? ' · sticky' : '' ) + '</span>' +
                        '<div class="godevs-hf-row-actions">' +
                        '<button class="move-up-btn">↑</button>' +
                        '<button class="move-down-btn">↓</button>' +
                        '<button class="delete-row-btn">✕</button>' +
                        '</div>' +
                        '</div>' +
                        '<div class="godevs-hf-builder-columns" style="' + styleParts.join( ';' ) + '"></div>' +
                        '</div>'
                );

                var $cols = $row.find( '.godevs-hf-builder-columns' );

                row.columns.forEach( function ( col, colIdx ) {
                        $cols.append( renderColumn( col, colIdx, rowIdx ) );
                } );

                // Row actions
                $row.find( '.delete-row-btn' ).on( 'click', function () {
                        currentLayout.rows.splice( rowIdx, 1 );
                        renderCanvas();
                } );
                $row.find( '.move-up-btn' ).on( 'click', function () {
                        if ( rowIdx > 0 ) {
                                var tmp = currentLayout.rows[ rowIdx - 1 ];
                                currentLayout.rows[ rowIdx - 1 ] = currentLayout.rows[ rowIdx ];
                                currentLayout.rows[ rowIdx ] = tmp;
                                renderCanvas();
                        }
                } );
                $row.find( '.move-down-btn' ).on( 'click', function () {
                        if ( rowIdx < currentLayout.rows.length - 1 ) {
                                var tmp = currentLayout.rows[ rowIdx + 1 ];
                                currentLayout.rows[ rowIdx + 1 ] = currentLayout.rows[ rowIdx ];
                                currentLayout.rows[ rowIdx ] = tmp;
                                renderCanvas();
                        }
                } );

                // Row click for settings
                $row.on( 'click', function ( e ) {
                        if ( $( e.target ).closest( 'button' ).length ) return;
                        selectRow( rowIdx );
                } );

                return $row;
        }

        /* ─── Render a column ─── */
        function renderColumn( col, colIdx, rowIdx ) {
                var $col = $(
                        '<div class="godevs-hf-builder-col" data-col="' + colIdx + '" data-row="' + rowIdx + '">' +
                        '<div class="godevs-hf-col-label">Col ' + ( colIdx + 1 ) + ' · ' + ( col.width || '33' ) + '%</div>' +
                        '</div>'
                );

                if ( ! col.elements || col.elements.length === 0 ) {
                        $col.append( '<div class="godevs-hf-col-empty">Drop elements here</div>' );
                } else {
                        col.elements.forEach( function ( element, elIdx ) {
                                $col.append( renderElement( element, elIdx, colIdx, rowIdx ) );
                        } );
                }

                // Column click for settings
                $col.on( 'click', function ( e ) {
                        if ( $( e.target ).closest( '.godevs-hf-builder-element' ).length ) return;
                        selectColumn( rowIdx, colIdx );
                } );

                // Drag-drop support
                $col.on( 'dragover', function ( e ) {
                        e.preventDefault();
                        $( this ).addClass( 'is-drag-over' );
                } );
                $col.on( 'dragleave', function () {
                        $( this ).removeClass( 'is-drag-over' );
                } );
                $col.on( 'drop', function ( e ) {
                        e.preventDefault();
                        $( this ).removeClass( 'is-drag-over' );
                        var elementType = e.originalEvent.dataTransfer.getData( 'text/plain' );
                        if ( elementType ) {
                                addElement( rowIdx, colIdx, elementType );
                        }
                } );

                return $col;
        }

        /* ─── Render an element ─── */
        function renderElement( element, elIdx, colIdx, rowIdx ) {
                var elDef = elementsList[ element.type ] || {};
                var label = elDef.label || element.type;
                var icon = elDef.icon || 'dashicons-marker';

                var $el = $(
                        '<div class="godevs-hf-builder-element" data-el="' + elIdx + '" data-col="' + colIdx + '" data-row="' + rowIdx + '" draggable="true">' +
                        '<span class="dashicons ' + icon + '"></span>' +
                        '<span class="godevs-hf-element-label">' + label + '</span>' +
                        '<button class="godevs-hf-element-remove" title="Remove">✕</button>' +
                        '</div>'
                );

                // Element click for settings
                $el.on( 'click', function ( e ) {
                        e.stopPropagation();
                        selectElement( rowIdx, colIdx, elIdx );
                } );

                // Remove element
                $el.find( '.godevs-hf-element-remove' ).on( 'click', function ( e ) {
                        e.stopPropagation();
                        currentLayout.rows[ rowIdx ].columns[ colIdx ].elements.splice( elIdx, 1 );
                        renderCanvas();
                } );

                // Drag start
                $el.on( 'dragstart', function ( e ) {
                        e.originalEvent.dataTransfer.setData( 'text/plain', element.type );
                        e.originalEvent.dataTransfer.setData( 'text/source', rowIdx + ':' + colIdx + ':' + elIdx );
                } );

                return $el;
        }

        /* ─── Add element to a column ─── */
        function addElement( rowIdx, colIdx, elementType ) {
                var elDef = elementsList[ elementType ] || {};
                var newElement = {
                        type: elementType,
                        settings: JSON.parse( JSON.stringify( elDef.defaults || {} ) )
                };
                currentLayout.rows[ rowIdx ].columns[ colIdx ].elements.push( newElement );
                renderCanvas();
        }

        function addElementToSelectedColumn( elementType ) {
                // Find selected column, or use first column of last row
                var $selected = $( '.godevs-hf-builder-col.is-selected' );
                var rowIdx, colIdx;

                if ( $selected.length ) {
                        rowIdx = parseInt( $selected.data( 'row' ) );
                        colIdx = parseInt( $selected.data( 'col' ) );
                } else if ( currentLayout && currentLayout.rows && currentLayout.rows.length > 0 ) {
                        rowIdx = currentLayout.rows.length - 1;
                        colIdx = 0;
                } else {
                        alert( 'Add a row first.' );
                        return;
                }

                addElement( rowIdx, colIdx, elementType );
        }

        /* ─── Selection + Settings Panel ─── */
        function selectRow( rowIdx ) {
                $( '.godevs-hf-builder-row, .godevs-hf-builder-col, .godevs-hf-builder-element' ).removeClass( 'is-selected' );
                $( '.godevs-hf-builder-row' ).eq( rowIdx ).addClass( 'is-selected' );
                renderRowSettings( rowIdx );
        }

        function selectColumn( rowIdx, colIdx ) {
                $( '.godevs-hf-builder-row, .godevs-hf-builder-col, .godevs-hf-builder-element' ).removeClass( 'is-selected' );
                $( '.godevs-hf-builder-row' ).eq( rowIdx ).find( '.godevs-hf-builder-col' ).eq( colIdx ).addClass( 'is-selected' );
                renderColumnSettings( rowIdx, colIdx );
        }

        function selectElement( rowIdx, colIdx, elIdx ) {
                $( '.godevs-hf-builder-row, .godevs-hf-builder-col, .godevs-hf-builder-element' ).removeClass( 'is-selected' );
                $( '.godevs-hf-builder-element' ).filter( function () {
                        return parseInt( $( this ).data( 'row' ) ) === rowIdx &&
                               parseInt( $( this ).data( 'col' ) ) === colIdx &&
                               parseInt( $( this ).data( 'el' ) ) === elIdx;
                } ).addClass( 'is-selected' );
                renderElementSettings( rowIdx, colIdx, elIdx );
        }

        function renderRowSettings( rowIdx ) {
                var row = currentLayout.rows[ rowIdx ];
                var s = row.settings || {};

                var $panel = $( '#godevs-hf-settings-panel' );
                $panel.show();
                $panel.find( '#godevs-hf-element-settings' ).html(
                        '<div class="godevs-hf-settings-group">' +
                        '<p class="godevs-hf-settings-group-title">Row Settings</p>' +
                        '<div class="godevs-hf-setting-field"><label>Height (px)</label><input type="number" class="godevs-hf-row-height" value="' + ( s.height || '64' ) + '"></div>' +
                        '<div class="godevs-hf-setting-field"><label>Background</label><input type="text" class="godevs-hf-row-bg" value="' + ( s.background || '' ) + '" placeholder="CSS color or var(...)"></div>' +
                        '<div class="godevs-hf-setting-field"><label>Text Color</label><input type="text" class="godevs-hf-row-text-color" value="' + ( s.text_color || '' ) + '" placeholder="CSS color or var(...)"></div>' +
                        '<div class="godevs-hf-setting-field"><label>Sticky</label><select class="godevs-hf-row-sticky"><option value="0"' + ( s.sticky === '0' ? ' selected' : '' ) + '>No</option><option value="1"' + ( s.sticky === '1' ? ' selected' : '' ) + '>Yes</option></select></div>' +
                        '</div>'
                );

                // Wire up live updates
                $panel.find( '.godevs-hf-row-height' ).on( 'input', function () { s.height = $( this ).val(); renderCanvas(); } );
                $panel.find( '.godevs-hf-row-bg' ).on( 'input', function () { s.background = $( this ).val(); renderCanvas(); } );
                $panel.find( '.godevs-hf-row-text-color' ).on( 'input', function () { s.text_color = $( this ).val(); renderCanvas(); } );
                $panel.find( '.godevs-hf-row-sticky' ).on( 'change', function () { s.sticky = $( this ).val(); renderCanvas(); } );
        }

        function renderColumnSettings( rowIdx, colIdx ) {
                var col = currentLayout.rows[ rowIdx ].columns[ colIdx ];

                var $panel = $( '#godevs-hf-settings-panel' );
                $panel.show();
                $panel.find( '#godevs-hf-element-settings' ).html(
                        '<div class="godevs-hf-settings-group">' +
                        '<p class="godevs-hf-settings-group-title">Column Settings</p>' +
                        '<div class="godevs-hf-setting-field"><label>Width (%)</label><input type="number" class="godevs-hf-col-width" value="' + ( col.width || '33' ) + '" min="10" max="100"></div>' +
                        '<div class="godevs-hf-setting-field"><label>Device Visibility</label>' +
                        '<div class="godevs-hf-device-visibility">' +
                        '<label><input type="checkbox" class="vis-desktop" ' + ( col.visible_desktop !== false ? 'checked' : '' ) + '> Desktop</label>' +
                        '<label><input type="checkbox" class="vis-tablet" ' + ( col.visible_tablet !== false ? 'checked' : '' ) + '> Tablet</label>' +
                        '<label><input type="checkbox" class="vis-mobile" ' + ( col.visible_mobile !== false ? 'checked' : '' ) + '> Mobile</label>' +
                        '</div></div>' +
                        '</div>'
                );

                $panel.find( '.godevs-hf-col-width' ).on( 'input', debounce( function () { col.width = $( this ).val(); renderCanvas(); }, 250 ) );

                // Wire up responsive visibility checkboxes — these toggle whether
                // the column is shown at each device breakpoint.
                $panel.find( '.vis-desktop' ).on( 'change', function () {
                        col.visible_desktop = $( this ).is( ':checked' );
                        renderCanvas();
                        updateDeviceVisibilityUI( $( this ), 'desktop' );
                } );
                $panel.find( '.vis-tablet' ).on( 'change', function () {
                        col.visible_tablet = $( this ).is( ':checked' );
                        renderCanvas();
                        updateDeviceVisibilityUI( $( this ), 'tablet' );
                } );
                $panel.find( '.vis-mobile' ).on( 'change', function () {
                        col.visible_mobile = $( this ).is( ':checked' );
                        renderCanvas();
                        updateDeviceVisibilityUI( $( this ), 'mobile' );
                } );
        }

        function renderElementSettings( rowIdx, colIdx, elIdx ) {
                var element = currentLayout.rows[ rowIdx ].columns[ colIdx ].elements[ elIdx ];
                var elDef = elementsList[ element.type ] || {};
                var s = element.settings || {};
                if ( ! element.settings ) {
                        element.settings = {};
                        s = element.settings;
                }
                var settingsHTML = '<div class="godevs-hf-settings-group"><p class="godevs-hf-settings-group-title">' + ( elDef.label || element.type ) + ' Settings</p>';

                // Generate fields based on element type — with field-type awareness.
                var fields = Object.keys( elDef.defaults || {} );
                fields.forEach( function ( field ) {
                        var val = s[ field ] !== undefined ? s[ field ] : ( elDef.defaults[ field ] || '' );
                        var label = field.replace( /_/g, ' ' ).replace( /\b\w/g, function ( c ) { return c.toUpperCase(); } );

                        // Smart field types based on field name.
                        if ( field === 'style' ) {
                                // Render a <select> for style fields.
                                var styleOptions = { 'primary': 'Primary', 'outline': 'Outline', 'text': 'Text Link' };
                                if ( element.type === 'search' ) {
                                        styleOptions = { 'icon': 'Icon', 'expand': 'Expandable', 'full': 'Full Width' };
                                }
                                var opts = '';
                                Object.keys( styleOptions ).forEach( function ( k ) {
                                        opts += '<option value="' + k + '"' + ( val === k ? ' selected' : '' ) + '>' + styleOptions[ k ] + '</option>';
                                } );
                                settingsHTML += '<div class="godevs-hf-setting-field"><label>' + label + '</label><select data-field="' + field + '">' + opts + '</select></div>';
                        } else if ( field === 'align' ) {
                                var alignOpts = '<option value=""' + ( ! val ? ' selected' : '' ) + '>Default</option>'
                                        + '<option value="left"' + ( val === 'left' ? ' selected' : '' ) + '>Left</option>'
                                        + '<option value="center"' + ( val === 'center' ? ' selected' : '' ) + '>Center</option>'
                                        + '<option value="right"' + ( val === 'right' ? ' selected' : '' ) + '>Right</option>';
                                settingsHTML += '<div class="godevs-hf-setting-field"><label>' + label + '</label><select data-field="' + field + '">' + alignOpts + '</select></div>';
                        } else if ( field === 'font_weight' ) {
                                var weightOpts = '';
                                [ '400', '500', '600', '700' ].forEach( function ( k ) {
                                        weightOpts += '<option value="' + k + '"' + ( val === k ? ' selected' : '' ) + '>' + k + '</option>';
                                } );
                                settingsHTML += '<div class="godevs-hf-setting-field"><label>' + label + '</label><select data-field="' + field + '">' + weightOpts + '</select></div>';
                        } else if ( field === 'depth' || field === 'font_size' || field === 'size' || field === 'width' || field === 'retina' ) {
                                // Numeric fields.
                                settingsHTML += '<div class="godevs-hf-setting-field"><label>' + label + '</label><input type="number" data-field="' + field + '" value="' + val + '" min="0"></div>';
                        } else if ( field === 'content' || field === 'format' ) {
                                // Textarea for long content.
                                settingsHTML += '<div class="godevs-hf-setting-field"><label>' + label + '</label><textarea data-field="' + field + '">' + val + '</textarea></div>';
                        } else if ( field === 'link' || field === 'src' ) {
                                // URL fields.
                                settingsHTML += '<div class="godevs-hf-setting-field"><label>' + label + '</label><input type="url" data-field="' + field + '" value="' + val + '" placeholder="https://…"></div>';
                        } else {
                                // Default: text input.
                                settingsHTML += '<div class="godevs-hf-setting-field"><label>' + label + '</label><input type="text" data-field="' + field + '" value="' + val + '"></div>';
                        }
                } );

                // Device visibility
                settingsHTML += '<div class="godevs-hf-setting-field"><label>Device Visibility</label><div class="godevs-hf-device-visibility">';
                settingsHTML += '<label><input type="checkbox" class="vis-desktop" ' + ( s.visible_desktop !== false ? 'checked' : '' ) + '> Desktop</label>';
                settingsHTML += '<label><input type="checkbox" class="vis-tablet" ' + ( s.visible_tablet !== false ? 'checked' : '' ) + '> Tablet</label>';
                settingsHTML += '<label><input type="checkbox" class="vis-mobile" ' + ( s.visible_mobile !== false ? 'checked' : '' ) + '> Mobile</label>';
                settingsHTML += '</div></div>';

                settingsHTML += '</div>';

                var $panel = $( '#godevs-hf-settings-panel' );
                $panel.show();
                $panel.find( '#godevs-hf-element-settings' ).html( settingsHTML );

                // Wire up live updates — debounced + re-render canvas so changes
                // propagate visually.
                $panel.find( 'input[data-field], textarea[data-field], select[data-field]' ).on( 'input change', debounce( function () {
                        s[ $( this ).data( 'field' ) ] = $( this ).val();
                        renderCanvas();
                }, 250 ) );

                // Wire up responsive visibility checkboxes.
                $panel.find( '.vis-desktop' ).on( 'change', function () {
                        s.visible_desktop = $( this ).is( ':checked' );
                        renderCanvas();
                        updateDeviceVisibilityUI( $( this ), 'desktop' );
                } );
                $panel.find( '.vis-tablet' ).on( 'change', function () {
                        s.visible_tablet = $( this ).is( ':checked' );
                        renderCanvas();
                        updateDeviceVisibilityUI( $( this ), 'tablet' );
                } );
                $panel.find( '.vis-mobile' ).on( 'change', function () {
                        s.visible_mobile = $( this ).is( ':checked' );
                        renderCanvas();
                        updateDeviceVisibilityUI( $( this ), 'mobile' );
                } );
        }

        /**
         * Update the parent label's .is-hidden state when a visibility checkbox
         * changes, so the dimmed/strikethrough styling applies in the settings panel.
         */
        function updateDeviceVisibilityUI( checkbox, device ) {
                var $label = checkbox.closest( 'label' );
                if ( ! $label.length ) return;
                if ( checkbox.is( ':checked' ) ) {
                        $label.removeClass( 'is-hidden' );
                } else {
                        $label.addClass( 'is-hidden' );
                }
        }

        /**
         * Simple debounce utility — delays the execution of a function until
         * after `wait` ms have elapsed since the last call. Prevents rapid-fire
         * canvas re-renders while the user types.
         */
        function debounce( fn, wait ) {
                var t;
                return function () {
                        var ctx = this, args = arguments;
                        clearTimeout( t );
                        t = setTimeout( function () {
                                fn.apply( ctx, args );
                        }, wait );
                };
        }

        /**
         * Live preview — fetches the rendered HTML from the server via AJAX
         * and injects it into the preview container. This gives the user a
         * real-time visual preview of the header/footer as they edit.
         *
         * Debounced at 500ms to avoid excessive AJAX requests while typing.
         */
        var _previewDebounced = debounce( function () {
                if ( ! currentLayout || ! currentLayout.rows ) {
                        return;
                }

                var $preview = $( '#godevs-hf-live-preview' );
                if ( ! $preview.length ) {
                        return;
                }

                $preview.addClass( 'is-loading' );

                $.post( api.ajaxUrl, {
                        action: 'godevs_hf_render_preview',
                        nonce: api.ajaxNonce,
                        layout_type: currentType,
                        layout_data: JSON.stringify( currentLayout )
                } ).done( function ( response ) {
                        $preview.removeClass( 'is-loading' );
                        if ( response && response.success && response.data.html ) {
                                $preview.html( response.data.html );
                        } else {
                                $preview.html( '<p style="padding:20px;text-align:center;color:#8c8f94">Preview unavailable.</p>' );
                        }
                } ).fail( function () {
                        $preview.removeClass( 'is-loading' );
                        // Silent fail — the wireframe is still shown above.
                } );
        }, 500 );

        function updateLivePreview() {
                _previewDebounced();
        }

        /* ─── Save layout ─── */
        function saveCurrentLayout() {
                if ( ! currentLayout ) {
                        alert( 'No layout to save. Load a template first.' );
                        return;
                }

                var name = $( '#godevs-hf-layout-name' ).val() || 'Untitled';
                var slug = name.toLowerCase().replace( /[^a-z0-9]+/g, '-' ).replace( /^-|-$/g, '' );
                var existingSlug = $( '#godevs-hf-editor' ).attr( 'data-slug' );
                if ( existingSlug ) slug = existingSlug;

                currentLayout.label = name;

                $.post( api.ajaxUrl, {
                        action: 'godevs_hf_save_layout',
                        nonce: api.ajaxNonce,
                        layout_type: currentType,
                        layout_slug: slug,
                        layout_data: JSON.stringify( currentLayout )
                }, function ( response ) {
                        if ( response && response.success ) {
                                $( '#godevs-hf-editor' ).attr( 'data-slug', slug );
                                loadLayouts();
                                showIndicator( 'Layout saved!', false );
                        } else {
                                showIndicator( 'Error saving layout', true );
                        }
                } );
        }

        /* ─── Activate layout ─── */
        function activateLayout( slug ) {
                $.post( api.ajaxUrl, {
                        action: 'godevs_hf_set_active',
                        nonce: api.ajaxNonce,
                        layout_type: currentType,
                        layout_slug: slug
                }, function ( response ) {
                        if ( response && response.success ) {
                                loadLayouts();
                                showIndicator( 'Layout activated!', false );
                        }
                } );
        }

        /* ─── Delete layout ─── */
        function deleteLayout( slug ) {
                if ( ! confirm( 'Delete this layout? This cannot be undone.' ) ) return;

                $.post( api.ajaxUrl, {
                        action: 'godevs_hf_delete_layout',
                        nonce: api.ajaxNonce,
                        layout_type: currentType,
                        layout_slug: slug
                }, function ( response ) {
                        if ( response && response.success ) {
                                loadLayouts();
                                showIndicator( 'Layout deleted', false );
                        }
                } );
        }

        /* ─── Status indicator ─── */
        function showIndicator( message, isError ) {
                var $indicator = $( '#godevs-save-indicator' );
                $indicator.text( message )
                        .removeClass( 'is-error' )
                        .addClass( 'is-visible' );
                if ( isError ) $indicator.addClass( 'is-error' );
                setTimeout( function () { $indicator.removeClass( 'is-visible' ); }, 3000 );
        }

        $( document ).ready( init );

} )( jQuery );
