<?php
 
  Class HykxpicWidget extends Widget {
	Public function render ($data) {
	    
		   $condition['cid'] = 8;
		   $field = array('id','title','content');
           $data['Hykxpic'] = M('blog')->field($field)->where($condition)->limit(1)->order('time DESC')->select();  
		   $data['Hykxpic'] [0]['content']=strip_tags($data['Hykxpic'] [0]['content']);
        
		return $this->renderFile('',$data);
	}
}
  
?>
