<?php
 
  Class SjccpicWidget extends Widget {
	Public function render ($data) {
	      
		   $condition['cid'] = 3;
		   $field = array('id','title','content');
           $data['Sjccpic'] = M('blog')->field($field)->where($condition)->limit(1)->order('time DESC')->select();  
		   $data['Sjccpic'] [0]['content']=strip_tags($data['Sjccpic'] [0]['content']);
        
		return $this->renderFile('',$data);
	}
}
  
?>