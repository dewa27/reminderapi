<?php
$tdatacustom_group_agenda_subscriber = array();
$tdatacustom_group_agenda_subscriber[".searchableFields"] = array();
$tdatacustom_group_agenda_subscriber[".ShortName"] = "custom_group_agenda_subscriber";
$tdatacustom_group_agenda_subscriber[".OwnerID"] = "";
$tdatacustom_group_agenda_subscriber[".OriginalTable"] = "custom_group_agenda_subscriber";


$tdatacustom_group_agenda_subscriber[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"]}" );
$tdatacustom_group_agenda_subscriber[".originalPagesByType"] = $tdatacustom_group_agenda_subscriber[".pagesByType"];
$tdatacustom_group_agenda_subscriber[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"]}" ) );
$tdatacustom_group_agenda_subscriber[".originalPages"] = $tdatacustom_group_agenda_subscriber[".pages"];
$tdatacustom_group_agenda_subscriber[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\"}" );
$tdatacustom_group_agenda_subscriber[".originalDefaultPages"] = $tdatacustom_group_agenda_subscriber[".defaultPages"];

//	field labels
$fieldLabelscustom_group_agenda_subscriber = array();
$fieldToolTipscustom_group_agenda_subscriber = array();
$pageTitlescustom_group_agenda_subscriber = array();
$placeHolderscustom_group_agenda_subscriber = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelscustom_group_agenda_subscriber["English"] = array();
	$fieldToolTipscustom_group_agenda_subscriber["English"] = array();
	$placeHolderscustom_group_agenda_subscriber["English"] = array();
	$pageTitlescustom_group_agenda_subscriber["English"] = array();
	if (count($fieldToolTipscustom_group_agenda_subscriber["English"]))
		$tdatacustom_group_agenda_subscriber[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Indonesian")
{
	$fieldLabelscustom_group_agenda_subscriber["Indonesian"] = array();
	$fieldToolTipscustom_group_agenda_subscriber["Indonesian"] = array();
	$placeHolderscustom_group_agenda_subscriber["Indonesian"] = array();
	$pageTitlescustom_group_agenda_subscriber["Indonesian"] = array();
	if (count($fieldToolTipscustom_group_agenda_subscriber["Indonesian"]))
		$tdatacustom_group_agenda_subscriber[".isUseToolTips"] = true;
}


	$tdatacustom_group_agenda_subscriber[".NCSearch"] = true;



$tdatacustom_group_agenda_subscriber[".shortTableName"] = "custom_group_agenda_subscriber";
$tdatacustom_group_agenda_subscriber[".nSecOptions"] = 0;

$tdatacustom_group_agenda_subscriber[".mainTableOwnerID"] = "";
$tdatacustom_group_agenda_subscriber[".entityType"] = 6;
$tdatacustom_group_agenda_subscriber[".connId"] = "notif_basic1_at_localhost";


$tdatacustom_group_agenda_subscriber[".strOriginalTableName"] = "custom_group_agenda_subscriber";

	



$tdatacustom_group_agenda_subscriber[".showAddInPopup"] = false;

$tdatacustom_group_agenda_subscriber[".showEditInPopup"] = false;

$tdatacustom_group_agenda_subscriber[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatacustom_group_agenda_subscriber[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatacustom_group_agenda_subscriber[".listAjax"] = false;
//	temporary
$tdatacustom_group_agenda_subscriber[".listAjax"] = false;

	$tdatacustom_group_agenda_subscriber[".audit"] = false;

	$tdatacustom_group_agenda_subscriber[".locking"] = false;


$pages = $tdatacustom_group_agenda_subscriber[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacustom_group_agenda_subscriber[".edit"] = true;
	$tdatacustom_group_agenda_subscriber[".afterEditAction"] = 1;
	$tdatacustom_group_agenda_subscriber[".closePopupAfterEdit"] = 1;
	$tdatacustom_group_agenda_subscriber[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacustom_group_agenda_subscriber[".add"] = true;
$tdatacustom_group_agenda_subscriber[".afterAddAction"] = 1;
$tdatacustom_group_agenda_subscriber[".closePopupAfterAdd"] = 1;
$tdatacustom_group_agenda_subscriber[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacustom_group_agenda_subscriber[".list"] = true;
}



$tdatacustom_group_agenda_subscriber[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacustom_group_agenda_subscriber[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacustom_group_agenda_subscriber[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacustom_group_agenda_subscriber[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacustom_group_agenda_subscriber[".printFriendly"] = true;
}



$tdatacustom_group_agenda_subscriber[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacustom_group_agenda_subscriber[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacustom_group_agenda_subscriber[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacustom_group_agenda_subscriber[".isUseAjaxSuggest"] = true;

$tdatacustom_group_agenda_subscriber[".rowHighlite"] = true;





$tdatacustom_group_agenda_subscriber[".ajaxCodeSnippetAdded"] = false;

$tdatacustom_group_agenda_subscriber[".buttonsAdded"] = false;

$tdatacustom_group_agenda_subscriber[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacustom_group_agenda_subscriber[".isUseTimeForSearch"] = false;


$tdatacustom_group_agenda_subscriber[".badgeColor"] = "2F4F4F";


$tdatacustom_group_agenda_subscriber[".allSearchFields"] = array();
$tdatacustom_group_agenda_subscriber[".filterFields"] = array();
$tdatacustom_group_agenda_subscriber[".requiredSearchFields"] = array();





$tdatacustom_group_agenda_subscriber[".printerPageOrientation"] = 0;
$tdatacustom_group_agenda_subscriber[".nPrinterPageScale"] = 100;

$tdatacustom_group_agenda_subscriber[".nPrinterSplitRecords"] = 40;

$tdatacustom_group_agenda_subscriber[".geocodingEnabled"] = false;










$tdatacustom_group_agenda_subscriber[".pageSize"] = 20;

$tdatacustom_group_agenda_subscriber[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatacustom_group_agenda_subscriber[".strOrderBy"] = $tstrOrderBy;

$tdatacustom_group_agenda_subscriber[".orderindexes"] = array();


$tdatacustom_group_agenda_subscriber[".sqlHead"] = "";
$tdatacustom_group_agenda_subscriber[".sqlFrom"] = "";
$tdatacustom_group_agenda_subscriber[".sqlWhereExpr"] = "";
$tdatacustom_group_agenda_subscriber[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacustom_group_agenda_subscriber[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacustom_group_agenda_subscriber[".arrGroupsPerPage"] = $arrGPP;

$tdatacustom_group_agenda_subscriber[".highlightSearchResults"] = true;

$tableKeyscustom_group_agenda_subscriber = array();
$tdatacustom_group_agenda_subscriber[".Keys"] = $tableKeyscustom_group_agenda_subscriber;


$tdatacustom_group_agenda_subscriber[".hideMobileList"] = array();






$tables_data["custom_group_agenda_subscriber"]=&$tdatacustom_group_agenda_subscriber;
$field_labels["custom_group_agenda_subscriber"] = &$fieldLabelscustom_group_agenda_subscriber;
$fieldToolTips["custom_group_agenda_subscriber"] = &$fieldToolTipscustom_group_agenda_subscriber;
$placeHolders["custom_group_agenda_subscriber"] = &$placeHolderscustom_group_agenda_subscriber;
$page_titles["custom_group_agenda_subscriber"] = &$pageTitlescustom_group_agenda_subscriber;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["custom_group_agenda_subscriber"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["custom_group_agenda_subscriber"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once( getabspath( "include/custom_group_agenda_subscriber_ops.php" ) );



	
		;



$tdatacustom_group_agenda_subscriber[".sqlquery"] = $queryData_custom_group_agenda_subscriber;



include_once(getabspath("include/custom_group_agenda_subscriber_events.php"));
$tableEvents["custom_group_agenda_subscriber"] = new eventclass_custom_group_agenda_subscriber;
$tdatacustom_group_agenda_subscriber[".hasEvents"] = true;

?>