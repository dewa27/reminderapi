<?php
$tdatacustom_group_member_agenda = array();
$tdatacustom_group_member_agenda[".searchableFields"] = array();
$tdatacustom_group_member_agenda[".ShortName"] = "custom_group_member_agenda";
$tdatacustom_group_member_agenda[".OwnerID"] = "";
$tdatacustom_group_member_agenda[".OriginalTable"] = "custom_group_member_agenda";


$tdatacustom_group_member_agenda[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"]}" );
$tdatacustom_group_member_agenda[".originalPagesByType"] = $tdatacustom_group_member_agenda[".pagesByType"];
$tdatacustom_group_member_agenda[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"]}" ) );
$tdatacustom_group_member_agenda[".originalPages"] = $tdatacustom_group_member_agenda[".pages"];
$tdatacustom_group_member_agenda[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\"}" );
$tdatacustom_group_member_agenda[".originalDefaultPages"] = $tdatacustom_group_member_agenda[".defaultPages"];

//	field labels
$fieldLabelscustom_group_member_agenda = array();
$fieldToolTipscustom_group_member_agenda = array();
$pageTitlescustom_group_member_agenda = array();
$placeHolderscustom_group_member_agenda = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelscustom_group_member_agenda["English"] = array();
	$fieldToolTipscustom_group_member_agenda["English"] = array();
	$placeHolderscustom_group_member_agenda["English"] = array();
	$pageTitlescustom_group_member_agenda["English"] = array();
	if (count($fieldToolTipscustom_group_member_agenda["English"]))
		$tdatacustom_group_member_agenda[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Indonesian")
{
	$fieldLabelscustom_group_member_agenda["Indonesian"] = array();
	$fieldToolTipscustom_group_member_agenda["Indonesian"] = array();
	$placeHolderscustom_group_member_agenda["Indonesian"] = array();
	$pageTitlescustom_group_member_agenda["Indonesian"] = array();
	if (count($fieldToolTipscustom_group_member_agenda["Indonesian"]))
		$tdatacustom_group_member_agenda[".isUseToolTips"] = true;
}


	$tdatacustom_group_member_agenda[".NCSearch"] = true;



$tdatacustom_group_member_agenda[".shortTableName"] = "custom_group_member_agenda";
$tdatacustom_group_member_agenda[".nSecOptions"] = 0;

$tdatacustom_group_member_agenda[".mainTableOwnerID"] = "";
$tdatacustom_group_member_agenda[".entityType"] = 6;
$tdatacustom_group_member_agenda[".connId"] = "notif_basic1_at_localhost";


$tdatacustom_group_member_agenda[".strOriginalTableName"] = "custom_group_member_agenda";

	



$tdatacustom_group_member_agenda[".showAddInPopup"] = false;

$tdatacustom_group_member_agenda[".showEditInPopup"] = false;

$tdatacustom_group_member_agenda[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatacustom_group_member_agenda[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatacustom_group_member_agenda[".listAjax"] = false;
//	temporary
$tdatacustom_group_member_agenda[".listAjax"] = false;

	$tdatacustom_group_member_agenda[".audit"] = false;

	$tdatacustom_group_member_agenda[".locking"] = false;


$pages = $tdatacustom_group_member_agenda[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacustom_group_member_agenda[".edit"] = true;
	$tdatacustom_group_member_agenda[".afterEditAction"] = 1;
	$tdatacustom_group_member_agenda[".closePopupAfterEdit"] = 1;
	$tdatacustom_group_member_agenda[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacustom_group_member_agenda[".add"] = true;
$tdatacustom_group_member_agenda[".afterAddAction"] = 1;
$tdatacustom_group_member_agenda[".closePopupAfterAdd"] = 1;
$tdatacustom_group_member_agenda[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacustom_group_member_agenda[".list"] = true;
}



$tdatacustom_group_member_agenda[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacustom_group_member_agenda[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacustom_group_member_agenda[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacustom_group_member_agenda[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacustom_group_member_agenda[".printFriendly"] = true;
}



$tdatacustom_group_member_agenda[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacustom_group_member_agenda[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacustom_group_member_agenda[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacustom_group_member_agenda[".isUseAjaxSuggest"] = true;

$tdatacustom_group_member_agenda[".rowHighlite"] = true;





$tdatacustom_group_member_agenda[".ajaxCodeSnippetAdded"] = false;

$tdatacustom_group_member_agenda[".buttonsAdded"] = false;

$tdatacustom_group_member_agenda[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacustom_group_member_agenda[".isUseTimeForSearch"] = false;


$tdatacustom_group_member_agenda[".badgeColor"] = "DB7093";


$tdatacustom_group_member_agenda[".allSearchFields"] = array();
$tdatacustom_group_member_agenda[".filterFields"] = array();
$tdatacustom_group_member_agenda[".requiredSearchFields"] = array();





$tdatacustom_group_member_agenda[".printerPageOrientation"] = 0;
$tdatacustom_group_member_agenda[".nPrinterPageScale"] = 100;

$tdatacustom_group_member_agenda[".nPrinterSplitRecords"] = 40;

$tdatacustom_group_member_agenda[".geocodingEnabled"] = false;










$tdatacustom_group_member_agenda[".pageSize"] = 20;

$tdatacustom_group_member_agenda[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatacustom_group_member_agenda[".strOrderBy"] = $tstrOrderBy;

$tdatacustom_group_member_agenda[".orderindexes"] = array();


$tdatacustom_group_member_agenda[".sqlHead"] = "";
$tdatacustom_group_member_agenda[".sqlFrom"] = "";
$tdatacustom_group_member_agenda[".sqlWhereExpr"] = "";
$tdatacustom_group_member_agenda[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacustom_group_member_agenda[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacustom_group_member_agenda[".arrGroupsPerPage"] = $arrGPP;

$tdatacustom_group_member_agenda[".highlightSearchResults"] = true;

$tableKeyscustom_group_member_agenda = array();
$tdatacustom_group_member_agenda[".Keys"] = $tableKeyscustom_group_member_agenda;


$tdatacustom_group_member_agenda[".hideMobileList"] = array();






$tables_data["custom_group_member_agenda"]=&$tdatacustom_group_member_agenda;
$field_labels["custom_group_member_agenda"] = &$fieldLabelscustom_group_member_agenda;
$fieldToolTips["custom_group_member_agenda"] = &$fieldToolTipscustom_group_member_agenda;
$placeHolders["custom_group_member_agenda"] = &$placeHolderscustom_group_member_agenda;
$page_titles["custom_group_member_agenda"] = &$pageTitlescustom_group_member_agenda;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["custom_group_member_agenda"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["custom_group_member_agenda"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once( getabspath( "include/custom_group_member_agenda_ops.php" ) );



	
		;



$tdatacustom_group_member_agenda[".sqlquery"] = $queryData_custom_group_member_agenda;



include_once(getabspath("include/custom_group_member_agenda_events.php"));
$tableEvents["custom_group_member_agenda"] = new eventclass_custom_group_member_agenda;
$tdatacustom_group_member_agenda[".hasEvents"] = true;

?>