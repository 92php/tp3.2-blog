<?php
 
  Class HykxWidget extends Widget {

	Public function render ($data) {
		
		$condition['cid'] = 8;
		$field = array('id','title','click','time');
		$data['Hykx'] = M('blog')->field($field)->where($condition)->limit(5)->order('time DESC')->select();
		return $this->renderFile('',$data);
	}
}
  
?>