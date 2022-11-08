<?php
//前台配置项	
return array(
	'APP_AUTOLOAD_PATH'=>'@.TagLib',
	'TAGLIB_BUILD_IN'=>'Cx,Hd',
	
   // 'TMPL_PARSE_STRING' => array(
   //     '__PUBLIC__' => __ROOT__. '/' . APP_NAME . '/Modules/' . GROUP_NAME . '/Tpl/Public'
   // ),
	 //开启静态缓存
    'HTML_CACHE_ON' => true, //模板缓存
    'HTML_CACHE_RULES' => array(
    	'Show:index' => array('{:module}_{:action}_{id}', 10),
		//'Index:index' => array('{:module}_{:action}_{id}', 10),
		//'List:index' => array('{:module}_{:action}_{id}', 10),
    	),
);



?>