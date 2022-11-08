<?php
 
  Class PhppicWidget extends Widget {
	Public function render ($data) {
	       
		   $condition['cid'] = 1;
		   $field = array('id','title','content');
           $data['phppic'] = M('blog')->field($field)->where( $condition)->limit(1)->order('time DESC')->select();  
		   $data['phppic'] [0]['content']=strip_tags($data['phppic'] [0]['content']);
        
		return $this->renderFile('',$data);
	}
}
  
?>