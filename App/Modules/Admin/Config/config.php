<?php
//后台配置项
return array(
	// 'TMPL_PARSE_STRING' => array(
    //    '__PUBLIC__' => __ROOT__. '/' . APP_NAME . '/Modules/' . GROUP_NAME . '/Tpl/Public'
    // ),

    //'SHOW_PAGE_TRACE'=>TRUE,

    'RBAC_SUPERADMIN'=>'admin',          //超级管理员名称
    'ADMIN_AUTH_KEY'=>'superadmin',      //超级管理员识别号
    'USER_AUTH_ON'=>true,                //是否开启权限验证
    'USER_AUTH_TYPE'=> 1,                //验证类型（1：登录验证，2：时时验证）
    'USER_AUTH_KEY'=>'uid',              //用户认证识别号
    'NOT_AUTH_MODULE'=>'',               //无需认证的控制器
    'NOT_AUTH_ACTION'=>'logout',               //无需认证的动作方法
    'RBAC_ROLE_TABLE'=>'hd_role',        //角色表名称
    'RBAC_USER_TABLE'=>'hd_role_user',   //角色与用户的中间表名称
    'RBAC_ACCESS_TABLE'=>'hd_access',    //权限表名称
    'RBAC_NODE_TABLE'=>'hd_node',        //节点表名称

	'URL_HTML_SUFFIX'=>''             //取消伪静态
);
?>