<?php
// 后台公共控制器
header("Content-type: text/html; charset=utf-8"); 
class CommonAction extends Action {

   public function _initialize(){
   	//if (!isset($_SESSION['uid']) || !isset($_SESSION['username'])) {
   	//	$this->redirect('Admin/Login/index');
   	//}
    
    if (!isset($_SESSION[C('USER_AUTH_KEY')])) {
    	$this->redirect(GROUP_NAME.'/Login/index');
    }

    $notAuth=in_array(MODULE_NAME, explode(',', C('NOT_AUTH_MODULE'))) ||
             in_array(ACTION_NAME, explode(',', C('NOT_AUTH_ACTION')));

    if (C('USER_AUTH_ON') && !$notAuth) {
    	import('ORG.Util.RBAC');
    	RBAC::AccessDecision(GROUP_NAME) || $this->error('没有权限');
    }

   }


}