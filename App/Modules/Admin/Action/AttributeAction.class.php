<?php
// 属性控制器
header("Content-type: text/html; charset=utf-8"); 
class AttributeAction extends CommonAction {
   
       //属性首页
	  public function index(){
		$this->attr=M('attr')->select();
		$this->display();
	   }
    
    //添加或修改属性
    Public function addAttr () {
        if (isset($_GET)) {
            $id = (int) $_GET['id'];
            $this->attr = M('attr')->find($id);
        }        
        $this->display();
    }
  
    //表单处理
    Public function runAddAttr () {
        if ($_POST['id']) { //修改
            if (M('attr')->save($_POST)) {
            $this->success('修改成功',U(GROUP_NAME . "/Attribute/index"));
            } else {
                $this->error('修改失败'); 
            }
        } else { //添加
            if (M('attr')->add($_POST)) {
                $this->success('添加成功',U(GROUP_NAME . "/Attribute/index"));
            } else {
                $this->error('添加失败'); 
            }
        }
    }
    //删除属性
    Public function del () {
           if (M('attr')->where(array('id' => $_GET['id']))->delete()) {
            $this->success('删除成功', U(GROUP_NAME . '/Attribute/index'));
        } else {
            $this->error('删除失败'); 
        }
    }



}