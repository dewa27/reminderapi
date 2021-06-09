<?php
$tdatacustom_personal_channel = array();
$tdatacustom_personal_channel[".searchableFields"] = array();
$tdatacustom_personal_channel[".ShortName"] = "custom_personal_channel";
$tdatacustom_personal_channel[".OwnerID"] = "";
$tdatacustom_personal_channel[".OriginalTable"] = "custom_personal_channel";


$tdatacustom_personal_channel[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatacustom_personal_channel[".originalPagesByType"] = $tdatacustom_personal_channel[".pagesByType"];
$tdatacustom_personal_channel[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatacustom_personal_channel[".originalPages"] = $tdatacustom_personal_channel[".pages"];
$tdatacustom_personal_channel[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatacustom_personal_channel[".originalDefaultPages"] = $tdatacustom_personal_channel[".defaultPages"];

//	field labels
$fieldLabelscustom_personal_channel = array();
$fieldToolTipscustom_personal_channel = array();
$pageTitlescustom_personal_channel = array();
$placeHolderscustom_personal_channel = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelscustom_personal_channel["English"] = array();
	$fieldToolTipscustom_personal_channel["English"] = array();
	$placeHolderscustom_personal_channel["English"] = array();
	$pageTitlescustom_personal_channel["English"] = array();
	$fieldLabelscustom_personal_channel["English"]["member_ch_id"] = "Member Ch Id";
	$fieldToolTipscustom_personal_channel["English"]["member_ch_id"] = "";
	$placeHolderscustom_personal_channel["English"]["member_ch_id"] = "";
	$fieldLabelscustom_personal_channel["English"]["member_id"] = "Member Id";
	$fieldToolTipscustom_personal_channel["English"]["member_id"] = "";
	$placeHolderscustom_personal_channel["English"]["member_id"] = "";
	$fieldLabelscustom_personal_channel["English"]["channel_id"] = "Channel Id";
	$fieldToolTipscustom_personal_channel["English"]["channel_id"] = "";
	$placeHolderscustom_personal_channel["English"]["channel_id"] = "";
	$fieldLabelscustom_personal_channel["English"]["chat_id"] = "Chat Id";
	$fieldToolTipscustom_personal_channel["English"]["chat_id"] = "";
	$placeHolderscustom_personal_channel["English"]["chat_id"] = "";
	if (count($fieldToolTipscustom_personal_channel["English"]))
		$tdatacustom_personal_channel[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Indonesian")
{
	$fieldLabelscustom_personal_channel["Indonesian"] = array();
	$fieldToolTipscustom_personal_channel["Indonesian"] = array();
	$placeHolderscustom_personal_channel["Indonesian"] = array();
	$pageTitlescustom_personal_channel["Indonesian"] = array();
	$fieldLabelscustom_personal_channel["Indonesian"]["member_ch_id"] = "Member Ch Id";
	$fieldToolTipscustom_personal_channel["Indonesian"]["member_ch_id"] = "";
	$placeHolderscustom_personal_channel["Indonesian"]["member_ch_id"] = "";
	$fieldLabelscustom_personal_channel["Indonesian"]["member_id"] = "Member Id";
	$fieldToolTipscustom_personal_channel["Indonesian"]["member_id"] = "";
	$placeHolderscustom_personal_channel["Indonesian"]["member_id"] = "";
	$fieldLabelscustom_personal_channel["Indonesian"]["channel_id"] = "Channel Id";
	$fieldToolTipscustom_personal_channel["Indonesian"]["channel_id"] = "";
	$placeHolderscustom_personal_channel["Indonesian"]["channel_id"] = "";
	$fieldLabelscustom_personal_channel["Indonesian"]["chat_id"] = "Chat Id";
	$fieldToolTipscustom_personal_channel["Indonesian"]["chat_id"] = "";
	$placeHolderscustom_personal_channel["Indonesian"]["chat_id"] = "";
	if (count($fieldToolTipscustom_personal_channel["Indonesian"]))
		$tdatacustom_personal_channel[".isUseToolTips"] = true;
}


	$tdatacustom_personal_channel[".NCSearch"] = true;



$tdatacustom_personal_channel[".shortTableName"] = "custom_personal_channel";
$tdatacustom_personal_channel[".nSecOptions"] = 0;

$tdatacustom_personal_channel[".mainTableOwnerID"] = "";
$tdatacustom_personal_channel[".entityType"] = 6;
$tdatacustom_personal_channel[".connId"] = "notif_basic1_at_localhost";


$tdatacustom_personal_channel[".strOriginalTableName"] = "custom_personal_channel";

	



$tdatacustom_personal_channel[".showAddInPopup"] = false;

$tdatacustom_personal_channel[".showEditInPopup"] = false;

$tdatacustom_personal_channel[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatacustom_personal_channel[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatacustom_personal_channel[".listAjax"] = false;
//	temporary
$tdatacustom_personal_channel[".listAjax"] = false;

	$tdatacustom_personal_channel[".audit"] = false;

	$tdatacustom_personal_channel[".locking"] = false;


$pages = $tdatacustom_personal_channel[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacustom_personal_channel[".edit"] = true;
	$tdatacustom_personal_channel[".afterEditAction"] = 1;
	$tdatacustom_personal_channel[".closePopupAfterEdit"] = 1;
	$tdatacustom_personal_channel[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacustom_personal_channel[".add"] = true;
$tdatacustom_personal_channel[".afterAddAction"] = 1;
$tdatacustom_personal_channel[".closePopupAfterAdd"] = 1;
$tdatacustom_personal_channel[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacustom_personal_channel[".list"] = true;
}



$tdatacustom_personal_channel[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacustom_personal_channel[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacustom_personal_channel[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacustom_personal_channel[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacustom_personal_channel[".printFriendly"] = true;
}



$tdatacustom_personal_channel[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacustom_personal_channel[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacustom_personal_channel[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacustom_personal_channel[".isUseAjaxSuggest"] = true;

$tdatacustom_personal_channel[".rowHighlite"] = true;





$tdatacustom_personal_channel[".ajaxCodeSnippetAdded"] = false;

$tdatacustom_personal_channel[".buttonsAdded"] = false;

$tdatacustom_personal_channel[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacustom_personal_channel[".isUseTimeForSearch"] = false;


$tdatacustom_personal_channel[".badgeColor"] = "D2AF80";


$tdatacustom_personal_channel[".allSearchFields"] = array();
$tdatacustom_personal_channel[".filterFields"] = array();
$tdatacustom_personal_channel[".requiredSearchFields"] = array();

$tdatacustom_personal_channel[".googleLikeFields"] = array();
$tdatacustom_personal_channel[".googleLikeFields"][] = "member_ch_id";
$tdatacustom_personal_channel[".googleLikeFields"][] = "member_id";
$tdatacustom_personal_channel[".googleLikeFields"][] = "channel_id";
$tdatacustom_personal_channel[".googleLikeFields"][] = "chat_id";




$tdatacustom_personal_channel[".printerPageOrientation"] = 0;
$tdatacustom_personal_channel[".nPrinterPageScale"] = 100;

$tdatacustom_personal_channel[".nPrinterSplitRecords"] = 40;

$tdatacustom_personal_channel[".geocodingEnabled"] = false;










$tdatacustom_personal_channel[".pageSize"] = 20;

$tdatacustom_personal_channel[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatacustom_personal_channel[".strOrderBy"] = $tstrOrderBy;

$tdatacustom_personal_channel[".orderindexes"] = array();


$tdatacustom_personal_channel[".sqlHead"] = "";
$tdatacustom_personal_channel[".sqlFrom"] = "";
$tdatacustom_personal_channel[".sqlWhereExpr"] = "";
$tdatacustom_personal_channel[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacustom_personal_channel[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacustom_personal_channel[".arrGroupsPerPage"] = $arrGPP;

$tdatacustom_personal_channel[".highlightSearchResults"] = true;

$tableKeyscustom_personal_channel = array();
$tableKeyscustom_personal_channel[] = "member_ch_id";
$tdatacustom_personal_channel[".Keys"] = $tableKeyscustom_personal_channel;


$tdatacustom_personal_channel[".hideMobileList"] = array();




//	member_ch_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "member_ch_id";
	$fdata["GoodName"] = "member_ch_id";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("custom_personal_channel","member_ch_id");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "member_ch_id";

	
		$fdata["FullName"] = "member_ch_id";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacustom_personal_channel["member_ch_id"] = $fdata;
		$tdatacustom_personal_channel[".searchableFields"][] = "member_ch_id";
//	member_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "member_id";
	$fdata["GoodName"] = "member_id";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("custom_personal_channel","member_id");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "member_id";

	
		$fdata["FullName"] = "member_id";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacustom_personal_channel["member_id"] = $fdata;
		$tdatacustom_personal_channel[".searchableFields"][] = "member_id";
//	channel_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "channel_id";
	$fdata["GoodName"] = "channel_id";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("custom_personal_channel","channel_id");
	$fdata["FieldType"] = 2;

	
	
	
			

		$fdata["strField"] = "channel_id";

	
		$fdata["FullName"] = "channel_id";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacustom_personal_channel["channel_id"] = $fdata;
		$tdatacustom_personal_channel[".searchableFields"][] = "channel_id";
//	chat_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "chat_id";
	$fdata["GoodName"] = "chat_id";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("custom_personal_channel","chat_id");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "chat_id";

	
		$fdata["FullName"] = "chat_id";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacustom_personal_channel["chat_id"] = $fdata;
		$tdatacustom_personal_channel[".searchableFields"][] = "chat_id";


$tables_data["custom_personal_channel"]=&$tdatacustom_personal_channel;
$field_labels["custom_personal_channel"] = &$fieldLabelscustom_personal_channel;
$fieldToolTips["custom_personal_channel"] = &$fieldToolTipscustom_personal_channel;
$placeHolders["custom_personal_channel"] = &$placeHolderscustom_personal_channel;
$page_titles["custom_personal_channel"] = &$pageTitlescustom_personal_channel;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["custom_personal_channel"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["custom_personal_channel"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once( getabspath( "include/custom_personal_channel_ops.php" ) );



	
		;

				

$tdatacustom_personal_channel[".sqlquery"] = $queryData_custom_personal_channel;



include_once(getabspath("include/custom_personal_channel_events.php"));
$tableEvents["custom_personal_channel"] = new eventclass_custom_personal_channel;
$tdatacustom_personal_channel[".hasEvents"] = true;

?>