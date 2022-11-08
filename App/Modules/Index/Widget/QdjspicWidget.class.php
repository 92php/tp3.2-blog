<?php
 
  Class QdjspicWidget extends Widget {
	Public function render ($data) {
	      
		   $condition['cid'] = 2;
		   $field = array('id','title','content');
           $data['Qdjspic'] = M('blog')->field($field)->where($condition)->limit(1)->order('time DESC')->select();  
		   $data['Qdjspic'] [0]['content']=strip_tags($data['Qdjspic'] [0]['content']);
         
		return $this->renderFile('',$data);
	}
}
  
?>