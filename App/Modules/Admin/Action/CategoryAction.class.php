<?php
// 分类控制器
header("Content-type: text/html; charset=utf-8"); 
class CategoryAction extends CommonAction {
     //分类列表视图 排序
    public function index(){
    	import('Class.Category',APP_PATH);
    	$cate=M('cate')->order('sort ASC')->select();
    	//$this->assign('cate',$cate)->display();
    	$this->cate=Category::unlimitedForLevel($cate,'&nbsp;&nbsp;--');

    	$this->display();
    }

    //添加或修改分类视图
    Public function addCate () {
        if ($_GET['id']) { //修改
            $id = (int) $_GET['id'];
            $this->cate = M('cate')->find($id);
        } else { //添加
            $cate['pid'] = I('pid',0,'intval');
            $this->assign('cate', $cate);

			//$pid=isset($_GET['pid'])?$_GET['pid']:0;
            //$this->pid=I('pid',0,'intval');
        }
        $this->display(); 
    }

    //添加或修改分类数据处理
    Public function runAddCate () {
        if ($_POST['id']) {  //修改
            if (M('cate')->save($_POST)) {
                $this->success('修改成功',U(GROUP_NAME . '/Category/index')); 
            } else {
                $this->error('修改失败');
            }
        } else { //添加
            if (M('cate')->add($_POST)) {
                $this->success('添加成功',U(GROUP_NAME . '/Category/index')); 
            } else {
                $this->error('添加失败');
            }
        }
    }

    //更新排序
	public function sortCate(){
		$db=M('cate');
		foreach ($_POST as $id => $sort) {
			$db->where(array('id'=>$id))->setField('sort',$sort);
		}
		$this->redirect(GROUP_NAME.'/Category/index');
	}

    //删除分类
    Public function del () {
        $id = (int) $_GET['id'];
        $where = array('id' => $id);
        if (M('cate')->where(array('pid' => $id))->select()) {
            $this->success('该分类下存在子分类，请先修改子分类', U(GROUP_NAME . '/Category/index'));
        } else {
            if (M('cate')->where($where)->delete()) {
            $this->success('删除成功', U(GROUP_NAME . '/Category/index'));
            } else {
                $this->error('删除失败'); 
            }
        }       
    }

    
}