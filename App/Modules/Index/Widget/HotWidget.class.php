<?php

Class HotWidget extends Widget{
  
    public function render($data){
	 //ç­éšćæ
	 $field=array('id','title','click');
	 $data['blog']=M('blog')->field($field)->order('click DESC')->limit(8)->select();
	 return $this->renderFile('',$data);
	  
	  
	
	}

} 

?>