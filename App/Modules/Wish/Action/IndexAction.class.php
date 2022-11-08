<?php
// 后台控制器
header("Content-type: text/html; charset=utf-8"); 
class IndexAction extends Action {



    public function index(){
	//  $this->assign('a',111) $this->a=111;  //两种分配方法
    
    $this->assign('wish',M('wish')->select())->display();
  //   $this->display();
    
	}
/*
    public function handle(){

    	if(!IS_POST) _404('页面不存在',U('index'));   //_404('页面不存在',U('index')); 调试模式不跳转
    		$data=array(
                 'username'=>I('username','','htmlspecialchars'),
                'content'=>I('content','','htmlspecialchars'),
                'time'=>time()
    			);
    		// M('wish')  和 new Model('wish')
    		$id=M('wish')->data($data)->add();
    		if($id){
              $this->success('发布成功','index');
    		}else{
              $this->error('发布失败，请重试...');
    		}
    }
*/
    //异步处理
    public function handle(){

      // p(I('post.'));
  if(!IS_AJAX) halt('页面不存在');
    $data=array(
                 'username'=>I('username'),
                'content'=>I('content'),
                'time'=>time()
          );

    if ($id=M('wish')->data($data)->add()) {
      $data['id']=$id;
      $data['content']=replace_phiz($data['content']);
      $data['time']=date('y-m-d H:i',$data['time']);
      $data['status']=1;
      $this->ajaxReturn($data,'json');
    }else{
      $this->ajaxReturn(array('status'=>0),'json');
    }
     /*
      $phiz=array(
          'zhuakuang'=> '抓狂',
          'baobao'=>'抱抱',
          'haixiu'=>'害羞',
          'ku'=>'酷',
          'xixi'=>'嘻嘻',
          'taikaixin'=>'太开心',
          'touxiao'=>'偷笑',
          'qian'=>'钱',
          'huaxin'=>'花心',
          'jiyan'=>'挤眼'
        );
     */

    /*
      $str="<?php return ". var_export($phiz,true) .";?>";
      file_put_contents('./Data/phiz.php', $str);
    */ 
     // $phiz= include './Data/phiz.php';
     // p($phiz);
    
    //  F('phiz',$phiz,'./Data');  //写数据
    //  $phiz=F('phiz','','./Data');
    //  p($phiz);   //读数据
    }


}