<?php
 
  Class SjccWidget extends Widget {

	Public function render ($data) {
		
		$condition['cid'] = 3;
		$field = array('id','title','click','time');
		$data['Sjcc'] = M('blog')->field($field)->where($condition)->limit(5)->order('time DESC')->select();
		return $this->renderFile('',$data);
	}
}
  
?>