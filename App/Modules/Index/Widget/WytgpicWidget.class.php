<?php
 
  Class WytgpicWidget extends Widget {
	Public function render ($data) {
	   
		   $condition['cid'] = 6;
		   $field = array('id','title','content');
           $data['Wytgpic'] = M('blog')->field($field)->where($condition)->limit(1)->order('time DESC')->select();  
		   $data['Wytgpic'] [0]['content']=strip_tags($data['Wytgpic'] [0]['content']);
        
		return $this->renderFile('',$data);
	}
}
  
?>