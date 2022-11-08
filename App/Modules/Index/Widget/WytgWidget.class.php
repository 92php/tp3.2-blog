<?php
 
  Class WytgWidget extends Widget {

	Public function render ($data) {
		
		$condition['cid'] = 6;
		$field = array('id','title','click','time');
		$data['Wytg'] = M('blog')->field($field)->where($condition)->limit(5)->order('time DESC')->select();
		return $this->renderFile('',$data);
	}
}
  
?>