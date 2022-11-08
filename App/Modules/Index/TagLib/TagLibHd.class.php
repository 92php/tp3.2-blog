<?php

//import('TagLib');  //旧版本需要引入，新版不用
/**
 * 自定义标签库
 */
Class TagLibHd extends TagLib{
	Protected $tags = array(
		'nav' => array('attr' => 'limt,order','close'=> 1)
		);
	Public function _nav ($attr, $content) {
		$attr = $this->parseXmlAttr($attr);
		$str = <<<str
<?php
	\$_nav_cate = M('cate')->order("{$attr['order']}")->select();
	import('Class.Category',APP_PATH);
	\$_nav_cate = Category::unlimitedForLayer(\$_nav_cate);
	foreach (\$_nav_cate as \$_nav_cate_v) :
	extract(\$_nav_cate_v);
?>
str;
	$str .= $content;
	$str .= '<?php endforeach;?>';
	return $str;
	}

}

?>