<?php

/**
 * 	Dear developer!
 *	Never modify events.php file, it is autogenerated.
 *  Modify PHP/EventTemplates/events.txt instead.
 *
 */

 class eventclass_custom_group  extends eventsBase
{
	function __construct()
	{
	// fill list of events
		$this->events["selectList"]=true;

		$this->events["selectOne"]=true;


	}

//	handlers

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// List
function selectList($dataSource, $command)
{

		$sql = "SELECT description,group_id,user_type,group_name,logo,token_type,group.token_group,membership_type.membership_type,business_type.business_type,open_time,close_time,off_day FROM `group` JOIN group_member USING(group_id) JOIN membership_type ON group.membership_type=membership_type.membership_id JOIN business_type ON business_type.business_type_id=group.business_type WHERE member_id=".$_GET['member_id'];
$preparedSQL = DB::PrepareSQL( $sql );
$result = DB::Query( $preparedSQL );
if( !$result ) {
	$dataSource->setError( DB::LastError() );
	return false;
}
// $arr=array(1,2,3);
// return new ArrayResult($arr);
$arr = array();
	// filter results, apply search, security & other filters
// $result = $dataSource->filterResult( $result, $command->filter );
//	reorder results as requested
// $dataSource->reorderResult( $command, $result );
while( $data = $result->fetchAssoc())
{
    if($data['user_type']==3){
        $status=0;
    }else if($data['user_type']==2){
        $status=1;
    }else{
        $status=2;
    }
    $array = array(
        "group_id"=>$data['group_id'],
        "group_name" => $data['group_name'],
        "description"=>$data['description'],
        "logo_token" => $data['logo_token'],
        "token_type"=>$data['token_type'],
        "token_group"=>$data['token_group'],
        "membership_type"=>$data['membership_type'],
        "business_type"=>$data['business_type'],
        "open_time"=>$data['open_time'],
        "close_time"=>$data['close_time'],
        "off_day"=>$data['off_day'],
        "isManageable"=>$status,
    );
    array_push($arr,$array);
}
// return $command;
return new ArrayResult($arr);

;		
} // function selectList

		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Single
function selectOne($dataSource, $command)
{

		$sql = "SELECT description,group_id,group_name,logo,token_type,group.token_group,membership_type.membership_type,business_type.business_type,open_time,close_time,off_day FROM `group` JOIN membership_type ON group.membership_type=membership_type.membership_id JOIN business_type ON business_type.business_type_id=group.business_type WHERE group_id=".$_GET['editid1'];
$preparedSQL = DB::PrepareSQL( $sql );
$result = DB::Query( $preparedSQL );
if( !$result ) {
	$dataSource->setError( DB::LastError() );
	return false;
}
$arr= array();
while( $data = $result->fetchAssoc())
{
    $array = array(
        "group_id"=>$data['group_id'],
        "group_name" => $data['group_name'],
        "description"=>$data['description'],
        "logo_token" => $data['logo_token'],
        "token_type"=>$data['token_type'],
        "token_group"=>$data['token_group'],
        "membership_type"=>$data['membership_type'],
        "business_type"=>$data['business_type'],
        "open_time"=>$data['open_time'],
        "close_time"=>$data['close_time'],
        "off_day"=>$data['off_day'],
    );
    array_push($arr,$array);
}
return new ArrayResult($arr);

;		
} // function selectOne

		
		
		
		



}
?>
