<?php
 
  Class QdjsWidget extends Widget {

	Public function render ($data) {
	
	    $condition['cid'] = 2;		
		$field = array('id','title','click','time');
		$data['Qdjs'] = M('blog')->field($field)->where($condition)->limit(5)->order('time DESC')->select();
		return $this->renderFile('',$data);
	}
}
  
?>