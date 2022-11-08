<?php
// 后台控制器
header("Content-type: text/html; charset=utf-8"); 
class IndexAction extends CommonAction {


    public function index(){  
     $this->display();
    
	}
    public function logout(){
    	session_unset();
    	session_destroy();
    	$this->redirect(GROUP_NAME.'/Login/index');
    }
}