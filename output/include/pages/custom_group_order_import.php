<?php
			$optionsArray = array( 'fields' => array( 'gridFields' => array( 'group_member_order',
'group_member_id',
'member_id',
'group_id',
'order_date',
'valid',
'total',
'currency',
'review_member',
'rating_member',
'payment_status',
'money_received',
'change_money',
'group_member_order_detail_id',
'group_member_order_id',
'group_member_id1',
'member_id1',
'group_id1',
'group_product_id',
'nominal',
'quantity',
'total1',
'progress' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'fieldItems' => array( 'group_member_order' => array( 'import_field' ),
'group_member_id' => array( 'import_field1' ),
'member_id' => array( 'import_field2' ),
'group_id' => array( 'import_field3' ),
'order_date' => array( 'import_field4' ),
'valid' => array( 'import_field5' ),
'total' => array( 'import_field6' ),
'currency' => array( 'import_field7' ),
'review_member' => array( 'import_field8' ),
'rating_member' => array( 'import_field9' ),
'payment_status' => array( 'import_field10' ),
'money_received' => array( 'import_field11' ),
'change_money' => array( 'import_field12' ),
'group_member_order_detail_id' => array( 'import_field13' ),
'group_member_order_id' => array( 'import_field14' ),
'group_member_id1' => array( 'import_field15' ),
'member_id1' => array( 'import_field16' ),
'group_id1' => array( 'import_field17' ),
'group_product_id' => array( 'import_field18' ),
'nominal' => array( 'import_field19' ),
'quantity' => array( 'import_field20' ),
'total1' => array( 'import_field21' ),
'progress' => array( 'import_field22' ) ) ),
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
'import_field13',
'import_field14',
'import_field15',
'import_field16',
'import_field17',
'import_field18',
'import_field19',
'import_field20',
'import_field21',
'import_field22' ) ),
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
'import_field13' => 'grid',
'import_field14' => 'grid',
'import_field15' => 'grid',
'import_field16' => 'grid',
'import_field17' => 'grid',
'import_field18' => 'grid',
'import_field19' => 'grid',
'import_field20' => 'grid',
'import_field21' => 'grid',
'import_field22' => 'grid' ),
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
'import_field13',
'import_field14',
'import_field15',
'import_field16',
'import_field17',
'import_field18',
'import_field19',
'import_field20',
'import_field21',
'import_field22' ) ),
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
'import_field13',
'import_field14',
'import_field15',
'import_field16',
'import_field17',
'import_field18',
'import_field19',
'import_field20',
'import_field21',
'import_field22' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ) ),
'items' => array( 'import_header' => array( 'type' => 'import_header' ),
'import_field' => array( 'field' => 'group_member_order',
'type' => 'import_field' ),
'import_field1' => array( 'field' => 'group_member_id',
'type' => 'import_field' ),
'import_field2' => array( 'field' => 'member_id',
'type' => 'import_field' ),
'import_field3' => array( 'field' => 'group_id',
'type' => 'import_field' ),
'import_field4' => array( 'field' => 'order_date',
'type' => 'import_field' ),
'import_field5' => array( 'field' => 'valid',
'type' => 'import_field' ),
'import_field6' => array( 'field' => 'total',
'type' => 'import_field' ),
'import_field7' => array( 'field' => 'currency',
'type' => 'import_field' ),
'import_field8' => array( 'field' => 'review_member',
'type' => 'import_field' ),
'import_field9' => array( 'field' => 'rating_member',
'type' => 'import_field' ),
'import_field10' => array( 'field' => 'payment_status',
'type' => 'import_field' ),
'import_field11' => array( 'field' => 'money_received',
'type' => 'import_field' ),
'import_field12' => array( 'field' => 'change_money',
'type' => 'import_field' ),
'import_field13' => array( 'field' => 'group_member_order_detail_id',
'type' => 'import_field' ),
'import_field14' => array( 'field' => 'group_member_order_id',
'type' => 'import_field' ),
'import_field15' => array( 'field' => 'group_member_id1',
'type' => 'import_field' ),
'import_field16' => array( 'field' => 'member_id1',
'type' => 'import_field' ),
'import_field17' => array( 'field' => 'group_id1',
'type' => 'import_field' ),
'import_field18' => array( 'field' => 'group_product_id',
'type' => 'import_field' ),
'import_field19' => array( 'field' => 'nominal',
'type' => 'import_field' ),
'import_field20' => array( 'field' => 'quantity',
'type' => 'import_field' ),
'import_field21' => array( 'field' => 'total1',
'type' => 'import_field' ),
'import_field22' => array( 'field' => 'progress',
'type' => 'import_field' ) ),
'dbProps' => array(  ),
'version' => 4 );
		?>