<?php
			$optionsArray = array( 'fields' => array( 'gridFields' => array( 'group_id',
'group_name',
'description',
'logo',
'token_type',
'token_group',
'membership_type',
'business_type',
'open_time',
'close_time',
'off_day',
'member_id',
'group_id1',
'group_member_id' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'fieldItems' => array( 'group_id' => array( 'import_field' ),
'group_name' => array( 'import_field1' ),
'description' => array( 'import_field2' ),
'logo' => array( 'import_field3' ),
'token_type' => array( 'import_field4' ),
'token_group' => array( 'import_field5' ),
'membership_type' => array( 'import_field6' ),
'business_type' => array( 'import_field7' ),
'open_time' => array( 'import_field8' ),
'close_time' => array( 'import_field9' ),
'off_day' => array( 'import_field10' ),
'member_id' => array( 'import_field11' ),
'group_id1' => array( 'import_field12' ),
'group_member_id' => array( 'import_field13' ) ) ),
'pageLinks' => array( 'edit' => false,
'add' => false,
'view' => false,
'print' => false ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'supertop' => array(  ),
'top' => array( 'import_header' ),
'grid' => array( 'import_field',
'import_field1',
'import_field2',
'import_field3',
'import_field4',
'import_field5',
'import_field6',
'import_field7',
'import_field8',
'import_field9',
'import_field10',
'import_field11',
'import_field12',
'import_field13' ) ),
'formXtTags' => array( 'supertop' => array(  ) ),
'itemForms' => array( 'import_header' => 'top',
'import_field' => 'grid',
'import_field1' => 'grid',
'import_field2' => 'grid',
'import_field3' => 'grid',
'import_field4' => 'grid',
'import_field5' => 'grid',
'import_field6' => 'grid',
'import_field7' => 'grid',
'import_field8' => 'grid',
'import_field9' => 'grid',
'import_field10' => 'grid',
'import_field11' => 'grid',
'import_field12' => 'grid',
'import_field13' => 'grid' ),
'itemLocations' => array(  ),
'itemVisiblity' => array(  ) ),
'itemsByType' => array( 'import_header' => array( 'import_header' ),
'import_field' => array( 'import_field',
'import_field1',
'import_field2',
'import_field3',
'import_field4',
'import_field5',
'import_field6',
'import_field7',
'import_field8',
'import_field9',
'import_field10',
'import_field11',
'import_field12',
'import_field13' ) ),
'cellMaps' => array(  ) ),
'loginForm' => array( 'loginForm' => 3 ),
'page' => array( 'labeledButtons' => array( 'update_records' => array(  ),
'print_pages' => array(  ),
'register_activate_message' => array(  ),
'details_found' => array(  ) ),
'hasCustomButtons' => false,
'customButtons' => array(  ) ),
'events' => array( 'maps' => array(  ),
'mapsData' => array(  ),
'buttons' => array(  ) ) );
			$pageArray = array( 'id' => 'import',
'type' => 'import',
'layoutId' => 'first',
'disabled' => 0,
'default' => 0,
'forms' => array( 'supertop' => array( 'modelId' => 'panel-top',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array(  ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'top' => array( 'modelId' => 'import-header',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'import_header' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'grid' => array( 'modelId' => 'import-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'import_field',
'import_field1',
'import_field2',
'import_field3',
'import_field4',
'import_field5',
'import_field6',
'import_field7',
'import_field8',
'import_field9',
'import_field10',
'import_field11',
'import_field12',
'import_field13' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ) ),
'items' => array( 'import_header' => array( 'type' => 'import_header' ),
'import_field' => array( 'field' => 'group_id',
'type' => 'import_field' ),
'import_field1' => array( 'field' => 'group_name',
'type' => 'import_field' ),
'import_field2' => array( 'field' => 'description',
'type' => 'import_field' ),
'import_field3' => array( 'field' => 'logo',
'type' => 'import_field' ),
'import_field4' => array( 'field' => 'token_type',
'type' => 'import_field' ),
'import_field5' => array( 'field' => 'token_group',
'type' => 'import_field' ),
'import_field6' => array( 'field' => 'membership_type',
'type' => 'import_field' ),
'import_field7' => array( 'field' => 'business_type',
'type' => 'import_field' ),
'import_field8' => array( 'field' => 'open_time',
'type' => 'import_field' ),
'import_field9' => array( 'field' => 'close_time',
'type' => 'import_field' ),
'import_field10' => array( 'field' => 'off_day',
'type' => 'import_field' ),
'import_field11' => array( 'field' => 'member_id',
'type' => 'import_field' ),
'import_field12' => array( 'field' => 'group_id1',
'type' => 'import_field' ),
'import_field13' => array( 'field' => 'group_member_id',
'type' => 'import_field' ) ),
'dbProps' => array(  ),
'version' => 4 );
		?>