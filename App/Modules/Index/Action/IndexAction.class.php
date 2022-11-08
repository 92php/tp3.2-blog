<?php
// 前台控制器
header("Content-type: text/html; charset=utf-8"); 
class IndexAction extends Action {


    public function index(){
	
	
	 $this->display();
   
	}
}