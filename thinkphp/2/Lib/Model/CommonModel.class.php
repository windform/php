<?php
class CommonModel extends Model{
	//这里根据需要写自己的业务逻辑
	public function strmak($str){
		echo md5(sha1(md5($str)));
		}
	//
	}
?>