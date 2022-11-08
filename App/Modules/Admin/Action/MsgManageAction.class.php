<?php
// 后台控制器
header("Content-type: text/html; charset=utf-8"); 
class MsgManageAction extends CommonAction {


    public function index(){
	import('ORG.Util.Page');
    $count=M('wish')->count();
	$page=new Page($count,8);
	$limit=$page->firstRow.','.$page->listRows;
    $wish=M('wish')->order('time DESC')->limit($limit)->select();
    $this->wish=$wish;
    $this->page=$page->show();
     $this->display();
    
	}

   public function delete(){
   $id=I('id','','intval');
   if(M('wish')->delete($id)){
         $this->success('删除成功',U('Admin/MsgManage/index'));
   }else{
         $this->error('删除失败');

   }

   }



}