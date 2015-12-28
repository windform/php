<?php
header("Content-Type:text/html; charset=utf-8");
class UserAction extends Action{
	public function insert(){
		$ins=new Model('user');
		$ins->Create();
		$result=$ins->add();
		}
	}
?>