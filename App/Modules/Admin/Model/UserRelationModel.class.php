<?php
// 用户与角色关联模型
header("Content-type: text/html; charset=utf-8"); 
class UserRelationModel extends RelationModel {
    
    //定义主表名称
    protected $tableName='user';

    
    //定义关联关系
    protected $_link=array(
        'role'=>array(
    	'mapping_type' => MANY_TO_MANY ,      //HAS_ONE一对一关系 HAS_MANY一对多的关系 MANY_TO_MANY多对多
    	'foreign_key'=>'user_id',            //主表外键
    	'relation_key'=>'role_id',           //关联表外键
    	'relation_table'=>'hd_role_user',    //指定中间表
    	'mapping_fields'=>'id,name,remark'    //指定附表读取字段
    	    )
        );

   
}