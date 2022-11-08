<?php
 
  Class PhpWidget extends Widget {

	Public function render ($data) {
	
        $condition['cid'] = 1;
		$field = array('id','title','click','time');
		$data['phpp'] = M('blog')->field($field)->where( $condition)->limit(5)->order('time DESC')->select();
		return $this->renderFile('',$data);
	}
}
  
?>