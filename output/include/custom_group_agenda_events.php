<?php

/**
 * 	Dear developer!
 *	Never modify events.php file, it is autogenerated.
 *  Modify PHP/EventTemplates/events.txt instead.
 *
 */

 class eventclass_custom_group_agenda  extends eventsBase
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

		// if(isset($_GET['member_id'])){
//     $sql = "SELECT * FROM group_agenda JOIN group_agenda_type USING(agenda_type_id) JOIN loop_type ON group_agenda.loop_id=loop_type.id_loop JOIN group_member ON group_member.group_id=group_agenda.group_id WHERE group_agenda.group_id=".$_GET['group_id']." AND member_id=".$_GET['member_id'];
// }else{
//     $sql = "SELECT * FROM group_agenda JOIN group_agenda_type USING(agenda_type_id) JOIN loop_type ON group_agenda.loop_id=loop_type.id_loop  WHERE group_agenda.group_id=".$_GET['group_id'];
// }
if($_GET['member_id']!=0){
    $sql = "SELECT group_member.user_type,group_agenda_id,group_agenda.group_id,group_agenda.agenda_type_id,group_agenda.loop_id, loop_value, agenda_name,message_general,message_content,send_date,attachment,`repeat`,repeat_type,agenda_type,description,group_requested,loop_type,`desc` FROM group_agenda JOIN group_agenda_type USING(agenda_type_id) JOIN loop_type ON group_agenda.loop_id=loop_type.id_loop JOIN group_member ON group_member.group_id=group_agenda.group_id WHERE group_agenda.group_id=".$_GET['group_id']." AND member_id=".$_GET['member_id'];
}else{
    $sql = "SELECT group_member.user_type,group_agenda_id,group_agenda.group_id,group_agenda.agenda_type_id,group_agenda.loop_id, loop_value, agenda_name,message_general,message_content,send_date,attachment,`repeat`,repeat_type,agenda_type,description,group_requested,loop_type,`desc` FROM group_agenda JOIN group_agenda_type USING(agenda_type_id) JOIN loop_type ON group_agenda.loop_id=loop_type.id_loop JOIN group_member ON group_member.group_id=group_agenda.group_id WHERE group_agenda.group_id=".$_GET['group_id'];
}

$preparedSQL = DB::PrepareSQL( $sql );
$result = DB::Query( $preparedSQL );
if( !$result ) {
	$dataSource->setError( DB::LastError() );
	return false;
}
$arr = array();
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
        "group_agenda_id"=>$data['group_agenda_id'],
        "group_id" => $data['group_id'],
        "agenda_type_id"=>$data['agenda_type_id'],
        "loop_id" => $data['loop_id'],
        "loop_value"=>$data['loop_value'],
        "agenda_name"=>$data['agenda_name'],
        "message_general"=>$data['message_general'],
        "message_content"=>$data['message_content'],
        "send_date"=>$data['send_date'],
        "attachment"=>$data['attachment'],
        "repeat"=>$data['repeat'],
        "repeat_type"=>$data['repeat_type'],
        "agenda_type"=>$data['agenda_type'],
        'description'=>$data['description'],
        'group_requested'=>$data['group_requested'],
        "loop_type"=>$data['loop_type'],
        "desc"=>$data['desc'],
        "isManageable"=>$status,
    );
    array_push($arr,$array);
}
return new ArrayResult($arr);

;		
} // function selectList

		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Single
function selectOne($dataSource, $command)
{

		if($_GET['member_id']!=0){
    $sql = "SELECT group_member.user_type,group_agenda_id,group_agenda.group_id,group_agenda.agenda_type_id,group_agenda.loop_id,loop_value,agenda_name,message_general,message_content,send_date,attachment,`repeat`,repeat_type,agenda_type,description,group_requested,loop_type,`desc` FROM group_agenda JOIN group_agenda_type USING(agenda_type_id) JOIN loop_type ON group_agenda.loop_id=loop_type.id_loop JOIN group_member ON group_member.group_id=group_agenda.group_id WHERE group_agenda.group_agenda_id=".$_GET['editid1'];
}else{
    $sql = "SELECT group_member.user_type,group_agenda_id,group_agenda.group_id,group_agenda.agenda_type_id,group_agenda.loop_id, loop_value, agenda_name,message_general,message_content,send_date,attachment,`repeat`,repeat_type,agenda_type,description,group_requested,loop_type,`desc` FROM group_agenda JOIN group_agenda_type USING(agenda_type_id) JOIN loop_type ON group_agenda.loop_id=loop_type.id_loop  WHERE group_agenda.group_agenda_id=".$_GET['editid1'];
}

$preparedSQL = DB::PrepareSQL( $sql );
$result = DB::Query( $preparedSQL );
if( !$result ) {
	$dataSource->setError( DB::LastError() );
	return false;
}
$arr = array();
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
        "group_agenda_id"=>$data['group_agenda_id'],
        "group_id" => $data['group_id'],
        "agenda_type_id"=>$data['agenda_type_id'],
        "loop_id" => $data['loop_id'],
        "loop_value"=>$data['loop_value'],
        "agenda_name"=>$data['agenda_name'],
        "message_general"=>$data['message_general'],
        "message_content"=>$data['message_content'],
        "send_date"=>$data['send_date'],
        "attachment"=>$data['attachment'],
        "repeat"=>$data['repeat'],
        "repeat_type"=>$data['repeat_type'],
        "agenda_type"=>$data['agenda_type'],
        'description'=>$data['description'],
        'group_requested'=>$data['group_requested'],
        "loop_type"=>$data['loop_type'],
        "desc"=>$data['desc'],
        "isManageable"=>$status,
    );
    array_push($arr,$array);
}
return new ArrayResult($arr);

;		
} // function selectOne

		
		
		
		



}
?>
