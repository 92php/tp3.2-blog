<?php
 
  Class XtjgWidget extends Widget {

	Public function render ($data) {
		
		$condition['cid'] = 4;
		$field = array('id','title','click','time');
		$data['Xtjg'] = M('blog')->field($field)->where($condition)->limit(5)->order('time DESC')->select();
		return $this->renderFile('',$data);
	}
}
  
?>