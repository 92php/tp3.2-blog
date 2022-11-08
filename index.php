<?php
//单入口运行模式
/*
$control=isset($_GET[m])?$_GET[m]:'Index';
$action=isset($_GET[a])?$_GET[m]:'index';

$obj=new $control();
$obj->$action();
class Index {
   function index(){
   	echo "this is Index index";
   }
    function handle(){
    	echo "this is Index handel";
    }
}
//url  index.php?m=index&a=handel
//显示 this is Index indexthis is Index index
*/

//echo "<pre>";
//print_r($_GET);
//url index.php?m=index&a=index
//Array
//(
//    [m] => index
//    [a] => index
//)

//die();

define('APP_NAME','App'); //项目名称 
define('APP_PATH','./App/'); //项目路径
define('APP_DEBUG', TRUE);  //开启调试模式
include './ThinkPHP/ThinkPHP.php'; //引入ThinkPHP核心运行文件


?>