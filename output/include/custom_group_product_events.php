<?php

/**
 * 	Dear developer!
 *	Never modify events.php file, it is autogenerated.
 *  Modify PHP/EventTemplates/events.txt instead.
 *
 */

 class eventclass_custom_group_product  extends eventsBase
{
	function __construct()
	{
	// fill list of events
		$this->events["selectList"]=true;


	}

//	handlers

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// List
function selectList($dataSource, $command)
{

		// $sql = "SELECT * FROM group_product WHERE group_id=".$_GET['group_id']." ORDER BY group_product_id ASC;";
if(isset($_GET['member_id'])){
    $sql="SELECT user_type,product_type.product_type,product_name,stock_type.stock_type,stock,order_type,price,curency,image FROM group_product JOIN `group` ON group.group_id=group_product.group_id JOIN stock_type ON stock_type.stock_type_id=group_product.stock_type JOIN group_member ON group.group_id=group_member.group_id JOIN product_type ON product_type.id_product_type=group_product.product_type WHERE member_id=".$_GET['member_id']." AND group.group_id=".$_GET['group_id'];
    $with_user=1;
}else{
    $sql="SELECT product_type.product_type,product_name,stock_type.stock_type,stock,order_type,price,curency,image FROM group_product JOIN `group` ON group.group_id=group_product.group_id JOIN stock_type ON stock_type.stock_type_id=group_product.stock_type JOIN product_type ON product_type.id_product_type=group_product.product_type WHERE group.group_id=".$_GET['group_id'];
    $with_user=0;
}
$preparedSQL = DB::PrepareSQL( $sql );
$result = DB::Query( $preparedSQL );
if( !$result ) {
	$dataSource->setError( DB::LastError() );
	return false;
}
if($with_user==1){
    $arr=array();
    while( $data = $result->fetchAssoc()){
        if($data['user_type']==3){
            $status=0;
        }else if($data['user_type']==2){
            $status=1;
        }else{
            $status=2;
        }
        $array = array(
            "product_type"=>$data['product_type'],
            "product_name" => $data['product_name'],
            "stock_type"=>$data['stock_type'],
            "stock" => $data['stock'],
            "order_type"=>$data['order_type'],
            "price"=>$data['price'],
            "curency"=>$data['curency'],
            "image"=>$data['image'],
            "isManageable"=>$status,
        );
        array_push($arr,$array);
    }
    return new ArrayResult($arr);
}else{
    return $result;
}


;		
} // function selectList

		
		
		
		
		



}
?>