<?php
//公共配置项
return array(
	
	'APP_GROUP_LIST'=>'Index,Admin,Wish',//开启应用分组
	'DEFAULT_GROUP'=>'Index', //默认分组名称
	'APP_GROUP_MODE'=>1, //开启独立分组
	'APP_GROUP_PATH'=>'Modules', //独立分组文件夹名称

    'LOAD_EXT_CONFIG'=>'verify,water', //加载Config文件夹下自定义配置文件

	//'TOKEN_ON'=>true,  // 是否开启令牌验证
    //'TOKEN_NAME'=>'__hash__',    // 令牌验证的表单隐藏字段名称
    //'TOKEN_TYPE'=>'md5',  //令牌哈希验证规则 默认为MD5
    //'TOKEN_RESET'=>true,  //令牌验证出错后是否重置令牌 默认为true

    //数据库连接参数
    'DB_HOST' => 'localhost',
    'DB_USER' => 'root',
    'DB_PWD' => '123456',
    'DB_NAME' => '92php2013',
    'DB_PREFIX' => 'hd_',

    'TMPL_TEMPLATE_SUFFIX'=>'.html', //模板文件后缀名
    'TMPL_FILE_DEPR'=>'_', //模板路径 控制器名_方法名

    'SESSION_TYPE'=>'Db',  //自定义SESSION 数据库存储
     
    //'SESSION_PREFIX'=>'sess_', //SESSION 前缀
    //'SESSION_TYPE'=>'Redis',
    //'SESSION_HOST'=>'localhost', //REDIS服务器地址
    //'SESSION_PORT'=>6379,
    //'SESSION_EXPIRE'=>10,  //设置session 有效时间

    //'URL_HTML_SUFFIX'=>'.html',   //url地址伪静态后缀名 
	//'URL_MODEL'=>1,  //定义url规则
    //'DEFAULT_FILTER'=>'htmlspecialchars', //设置过滤
    //'TMPL_VAR_IDENTIFY=>'array', //模板点解析设置 提高编译速度

    //'SHOW_PAGE_TRACE'=>true, //开启调试模式
    //'TMPL_EXCEPTION_FILE' => './Public/Tpl/error.html',

    //'URL_MODEL'=>2,  //去除了index.php
    'URL_ROUTER_ON'=>true,
    'URL_ROUTE_RULES'=>array(
         '/^c_(\d+)$/'=>'Index/List/index?id=:1',
         ':id\d'=>'Index/Show/index'
        )
	
);
?>