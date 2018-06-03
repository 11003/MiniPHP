<?php
/**
 * 入口文件
 */
header('content-type:text/html;chaset=utf8');
@$pathinfo=substr($_SERVER['PATH_INFO'],1);
$array=explode('/', $pathinfo);
@list($controller,$action)=$array;
if($controller == ''){
	$controller = 'IndexController';
}
if($action== ''){
	$action = 'index';
}
//包含相关的控制文件
require_once 'controller/'.$controller .'.php';
//实例化控制器
$class = new $controller();
//调用方法
$class->$action();