<?php
// 
header("Content-type: text/html; charset=utf-8"); 
Class BlogViewModel extends ViewModel {
      
	  Protected $viewFields=array(
	  'blog'=>array(
	     'id','title','time','click',
		 '_type'=>'LEFT'
		 ),
	   'cate'=>array(
	     'name','_on'=>'blog.cid=cate.id'
	   )
		 
	  );
	  
	  public function getAll($where,$limit){
	    return $this->where($where)->limit($limit)->select();
	  }

  
}