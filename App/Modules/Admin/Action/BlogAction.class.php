<?php
// 博文控制器
header("Content-type: text/html; charset=utf-8"); 
class BlogAction extends CommonAction {
    
    //博文列表
    public function index(){
      //$field=array('del');
      //$where=array('del'=>0);
      //$this->blog=D('BlogRelation')->field($field,true)->where($where)->relation(true)->select();
      //$this->display();
	  	  
	    import('ORG.Util.Page');
        $count = M('blog')->count();
        $page = new Page($count, 10);
        $limit = $page->firstRow . ',' . $page->listRows;  
	
        $this->blog = D('BlogRelation')->getBlogs(0, $limit);
    	$this->page=$page->show();	   
        $this->display();
    }

    //删除到回收站或还原
    public function toTrach(){
      $type=(int) $_GET['type'];
      $msg=$type ? '删除':'还原';
      $update=array(
          'id'=>(int) $_GET['id'],
          'del'=>$type
        );
      if (M('blog')->save($update)) {
        $this->success($msg.'成功',U(GROUP_NAME.'/Blog/index'));
      }else{
        $this->error($msg.'失败');
      }
    }

    //回收站列表
    public function trach(){
     $this->blog=D('BlogRelation')->getBlogs(1);
     $this->display('index');
    }

    //彻底删除
    public function delete(){
      //关联删除有问题？？
      //$id=(int) $_GET['id'];
      //D('BlogRelation')->relation('attr')->delete($id);
      //$this->display('index');

      $id=(int) $_GET['id'];
      if (M('blog')->delete($id)) {
         M('blog_attr')->where(array('bid'=>$id))->delete();
         $this->success('删除成功',U(GROUP_NAME.'/Blog/trach'));
      }else{
        $this->error('删除失败');
      }
        $this->display('index');
    }

	 //清空回收站
    Public function allDel () {
           if (M('blog')->where(array('del' => 1))->delete()) {
            $this->success('彻底删除成功', U(GROUP_NAME . '/Blog/trash'));
        } else {
            $this->error('删除失败'); 
        }
    }
    
    // 添加/修改博文
    public function blog(){
	
	    //选择文章分类列表
        import('Class.Category',APP_PATH);
        $cate = M('cate')->order('sort')->select();
        $this->cate = Category::unlimitedForLevel($cate);
        
        //选择文章属性列表
        $attr = M('attr')->select();
        //读取要修改文章
        if (isset($_GET['id'])) {
            $id = (int) $_GET['id'];
            $blog = D('BlogRelation')->relation(true)->find($id);
			
            //判断文章属性
            foreach ($blog['attr'] as $v) {
                $aid = $v['id'];
                foreach ($attr as $key => $value) {
                    if ($value['id'] == $aid) {
                        $attr[$key]['checked'] = 'checked';
                    }
                }
            }
            $this->assign('blog',$blog);
        }
		
        $this->assign('attr',$attr);
        $this->display();

    }

    //添加/修改博文到表单处理
    public function addBlog(){
	
	    $id = $_POST['id'] ? (int) $_POST['id'] : false;
	  
        $data=array(
              'title'=>$_POST['title'],
              'content'=>$_POST['content'],
              'time'=>time(),
              'click'=>(int)$_POST['click'],
              'cid'=>(int)$_POST['cid']
            );
							   
        if ($id) {
		
            if ($bid = M('blog')->where(array('id' => $id))->save($data)) {
              /* //属性更改有问题
				 if (isset($_POST[aid])) {
                   $sql = 'INSERT INTO`' . C('DB_PREFIX') . 'blog_attr` (bid,aid) VALUES';
                   foreach ($_POST['aid'] as $v) {
                       $sql .='(' . $id . ',' . $v . '),';
                   }
                   $sql=rtrim($sql,',');			
                   M('blog_attr')->query($sql);
              }
			  */

                $this->success('修改成功', U(GROUP_NAME . '/Blog/index'));
            } else {
                $this->error('修改失败'); 
            }
        } else {		
						
	
          if ($bid=M('blog')->add($data)) {
              
              if (isset($_POST[aid])) {
                   $sql = 'INSERT INTO`' . C('DB_PREFIX') . 'blog_attr` (bid,aid) VALUES';
                   foreach ($_POST['aid'] as $v) {
                       $sql .='(' . $bid . ',' . $v . '),';
                   }
                   $sql=rtrim($sql,',');
                   M('blog_attr')->query($sql);
              }
              $this->success('添加成功',U(GROUP_NAME.'/Blog/index'));
          }else{
              $this->error('添加失败');
          }
		  
}
        /*
        if (isset($_POST['aid'])) {
            foreach ($_POST['aid'] as $v) {
                $data['attr'][]=$v;
            }
        }
        D('BlogRelation')->relation(true)->add($data);
        $this->display('addBlog');//开启调试模式查看SQL
        */

    }

    //编辑图片上传处理
    public function upload(){
        import('ORG.Net.UploadFile'); //调用Tp上传类
        $upload=new UploadFile();
        $upload->allowExts  = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
        $upload->autoSub = true; //开启子目录保存
        $upload->subType = 'date'; // 子目录创建方式 可以使用hash date custom
        $upload->dateFormat = 'Ym'; //定义date子文件名字格式

        //判断文件是否上传到相应位置 并输出json
        if ($upload->upload('./Uploads/')) {
            $info=$upload->getUploadFileInfo();

            //加水印
            //import('ORG.Util.Image'); //Tp自带水印类
            //Image::water('./Uploads/'.$info[0]['savename'],'./Data/water.png');

            //import('Class.Image',APP_PATH); //调用自己写的类
            //Image::water('./Uploads/'.$info[0]['savename']);

            echo json_encode(array(
                'url'=>$info[0]['savename'],
                'title'=>htmlspecialchars($_POST['pictitle'],EN_QUOTES),
                'original'=>$info[0]['name'],
                'state'=>'SUCCESS'
                ));
        }else{
            echo json_encode(array(
                'state'=>$upload->getErrorMsg()
                ));
        }
    }
  
}