<?php

/**
 * 	Dear developer!
 *	Never modify events.php file, it is autogenerated.
 *  Modify PHP/EventTemplates/events.txt instead.
 *
 */

 class eventclass_custom_personal  extends eventsBase
{
	function __construct()
	{
	// fill list of events
		$this->events["selectOne"]=true;

		$this->events["selectList"]=true;

		$this->events["update"]=true;


	}

//	handlers

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Single
function selectOne($dataSource, $command)
{

		$sql = "SELECT * FROM `personal` LEFT JOIN `country` ON country.country_id=personal.country_id LEFT JOIN province ON province.province_id=personal.province_id WHERE member_id=".$_GET['editid1'];
$preparedSQL = DB::PrepareSQL( $sql );
$result = DB::Query( $preparedSQL );
if( !$result ) {
	$dataSource->setError( DB::LastError() );
	return false;
}
return $result;

;		
} // function selectOne

		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// List
function selectList($dataSource, $command)
{

		$sql = "SELECT * FROM `personal` WHERE mail='".$_SERVER['PHP_AUTH_USER']."' AND password='".$_SERVER['PHP_AUTH_PW']."'";
$preparedSQL = DB::PrepareSQL( $sql );
$result = DB::Query( $preparedSQL );
if( !$result ) {
	$dataSource->setError( DB::LastError() );
	return false;
}
	// filter results, apply search, security & other filters
$result = $dataSource->filterResult( $result, $command->filter );
//	reorder results as requested
$dataSource->reorderResult( $command, $result );
return $result;

;		
} // function selectList

		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Update
function update($dataSource, $command)
{

		$data= array();
$key=array();
$sql = "SELECT * FROM `personal` LEFT JOIN `country` ON country.country_id=personal.country_id LEFT JOIN province ON province.province_id=personal.province_id WHERE member_id=".$_POST['member_id'];
$preparedSQL = DB::PrepareSQL( $sql );
$result = DB::Query( $preparedSQL );
while( $data = $result->fetchAssoc()){
    $name=$data['name'];
    $mail=$data['mail'];
    $password=$data['password'];
    $country_id=$data['country_id'];
    $province_id=$data['province_id'];
}
$data['name']=isset($_POST['name']) ? $_POST['name'] : $name;
$data['mail']=isset($_POST['mail']) ? $_POST['mail'] : $mail;
$data['password']=isset($_POST['password']) ? $_POST['password'] : $password;
$data['country_id']=isset($_POST['country_id']) ? $_POST['country_id'] : $country_id;
$data['province_id']=isset($_POST['province_id']) ? $_POST['province_id'] : $province_id;
$key['member_id']=$_POST['member_id'];
$result=DB::Update("personal",$data,$key);

if( !$result ) {
	$dataSource->setError( DB::LastError() );
	return false;
}
return $result;

;		
} // function update

		
		



}
?>
