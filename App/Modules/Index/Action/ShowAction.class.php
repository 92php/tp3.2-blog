<?php
// 控制器
header("Content-type: text/html; charset=utf-8"); 
class ShowAction extends Action {

    public function index(){

	  $id=(int)$_GET['id'];

	  $field=array('id','title','time','content','cid');
	  $this->blog=M('blog')->field($field)->find($id);

	  $cid=$this->blog['cid'];
	  import('Class.Category',APP_PATH);
	  $cate=M('cate')->order('sort')->select();
	  $this->parent=Category::getParents($cate,$cid);
	
	  $this->display();
   
	}

    public function clickNum(){
    	$id=(int) $_GET['id'];
    	$where=array('id'=>$id);
    	$click=M('blog')->where($where)->getField('click');
    	M('blog')->where($where)->setInc('click');
    	echo 'document.write('.$click.')';
    }

}