<?php
function ORG($path,$name,$params=array()){
	require_once('libs/ORG/'.$path.$name.'.class.php');
    $obj=new $name();
	if(!empty($params)){
		foreach($params as $key=>$value){
			$obj->$key=$value;
			}
		}
	return $obj;

}



?>
