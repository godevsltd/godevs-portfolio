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
		$.post( api.ajaxUrl, {
			action: 'godevs_hf_get_layouts',
			nonce: api.ajaxNonce,
			layout_type: currentType
		}, function ( response ) {
			if ( ! response || ! response.success ) return;

			elementsList = response.data.elements || {};
			templatesList = response.data.templates || {};
			savedLayouts = response.data.layouts || {};
			activeLayout = response.data.active || null;

			renderTemplates();
			renderSavedLayouts();
			renderElementPalette();
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
		$( 'html, body' ).animate( { scrollTop: $( '#godevs-hf-editor' ).offset().top - 50 }, 300 );
	}

	/* ─── Render the visual canvas ─── */
	function renderCanvas() {
		var $canvas = $( '#godevs-hf-canvas' );
		$grid = $canvas.find( '.godevs-hf-canvas-inner' );
		if ( ! $grid.length ) {
			$grid = $( '<div class="godevs-hf-canvas-inner"></div>' );
			$canvas.append( $grid );
		}
		$grid.empty();

		if ( ! currentLayout || ! currentLayout.rows ) {
			$grid.html( '<div style="padding:40px;text-align:center;color:#8c8f94">No rows yet. Click "Add Row" below.</div>' );
		} else {
			currentLayout.rows.forEach( function ( row, rowIdx ) {
				$grid.append( renderRow( row, rowIdx ) );
			} );
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

		$panel.find( '.godevs-hf-col-width' ).on( 'input', function () { col.width = $( this ).val(); renderCanvas(); } );
	}

	function renderElementSettings( rowIdx, colIdx, elIdx ) {
		var element = currentLayout.rows[ rowIdx ].columns[ colIdx ].elements[ elIdx ];
		var elDef = elementsList[ element.type ] || {};
		var s = element.settings || {};
		var settingsHTML = '<div class="godevs-hf-settings-group"><p class="godevs-hf-settings-group-title">' + ( elDef.label || element.type ) + ' Settings</p>';

		// Generate fields based on element type
		var fields = Object.keys( elDef.defaults || {} );
		fields.forEach( function ( field ) {
			var val = s[ field ] || '';
			var label = field.replace( /_/g, ' ' ).replace( /\b\w/g, function ( c ) { return c.toUpperCase(); } );

			if ( field === 'content' || field === 'format' ) {
				settingsHTML += '<div class="godevs-hf-setting-field"><label>' + label + '</label><textarea data-field="' + field + '">' + val + '</textarea></div>';
			} else {
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

		// Wire up live updates
		$panel.find( 'input[data-field], textarea[data-field]' ).on( 'input', function () {
			s[ $( this ).data( 'field' ) ] = $( this ).val();
		} );
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
