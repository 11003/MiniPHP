<?php
require_once 'model/Database.php';
class UserController{

	//呈现用户注册页面
	public function create(){
		require_once 'view/adduser.html';
	}
	//获取表单数据并写入数据库
	public function add(){
		$db=new Database();
		$db->insert($_POST);
	}
	//获取用户数据并呈现HTML页面
	public function list(){
		$db=new Database();
		$sql='SELECT id,username,sex FROM user';
		$rowset=$db->query($sql);
		require_once 'view/listuser.html';
	}
}