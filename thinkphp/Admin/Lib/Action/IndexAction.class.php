<?php
header("Content-Type:text/html; charset=utf-8");
// 本类由系统自动生成，仅供测试用途
class IndexAction extends Action {
    public function index(){
		$db=new Model('user');
		$select=$db->select();
		$this->assign('select',$select);
		$this->display();
		
    }
}