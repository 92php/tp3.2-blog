<?php
 
  Class XtjgpicWidget extends Widget {
	Public function render ($data) {
	       
		   $condition['cid'] = 4;
		   $field = array('id','title','content');
           $data['Xtjgpic'] = M('blog')->field($field)->where($condition)->limit(1)->order('time DESC')->select();  
		   $data['Xtjgpic'] [0]['content']=strip_tags($data['Xtjgpic'] [0]['content']);
        
		return $this->renderFile('',$data);
	}
}
  
?>