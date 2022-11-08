<?php
// 
header("Content-type: text/html; charset=utf-8"); 
class BlogRelationModel extends RelationModel {
    
   protected $tableName='blog';
   
   //多对多关联 可能会删除中间表 漏洞??
   protected $_link=array(
           'attr'=>array(
              'mapping_type'=>MANY_TO_MANY,
              'mapping_name'=>'attr',
              'foreign_key'=>'bid',
              'relation_foreign_key'=>'aid',
              'relation_table'=>'hd_blog_attr', 
            ),
           'cate'=>array(
              'mapping_type'=>BELONGS_TO,
              'foreign_key'=>'cid',
              'mapping_fields'=>'name',
              'as_fields'=>'name:cate'
            )
    );

   public function getBlogs($type=0,$limit){
    $field=array('del');
    $where=array('del'=>$type);
    return $this->field($field,true)->where($where)->limit($limit)->relation(true)->select();
    
   }

   
}