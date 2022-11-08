<?php
// 前台控制器
header("Content-type: text/html; charset=utf-8"); 
class ListAction extends Action {


    public function index(){
	 import('Class.Category',APP_PATH);
	 import('ORG.Util.Page');
	 
	 $id=(int) $_GET['id'];
	 $cate=M('cate')->order('sort')->select();
	 
	 $cids=Category::getChildsId($cate,$id);
	 $cids[]=$id;
	 
	 $where=array('cid'=>array('IN',$cids));
	 $count=M('blog')->where($where)->count();
	 $page=new Page($count,10);
	 $limit=$page->firstRow.','.$page->listRows;
	 
	 $this->blog=D('BlogView')->getAll($where,$limit);
	 $this->page=$page->show();
	 
	 $this->display();
   
	}
}