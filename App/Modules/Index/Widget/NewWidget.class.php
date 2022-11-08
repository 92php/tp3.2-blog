<?php
 
  Class NewWidget extends Widget {
  //最新博文
	Public function render ($data) {
		$limit = $data['limit'];
		$field = array('id','title','click');
		$data['new'] = M('blog')->field($field)->limit($limit)->order('time DESC')->select();
		return $this->renderFile('',$data);
	}
}
  
?>