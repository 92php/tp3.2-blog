<?php	
return array ( 
    //验证码配置项  
	
	//验证码长度
	'VERIFY_LENGTH' => '1',
	//验证码图片宽度（像素）
	'VERIFY_WIDTH' => '250',
	//验证码图片高度（像素）
	'VERIFY_HEIGHT' => '60',
	//验证码种子
	'VERIFY_SEED' => '3456789aAbBcCdDeEfFgGhHjJkKmMnNpPqQrRsStTuUvVwWxXyY', 
	//验证码字体
	'VERIFY_FONTFILE' => './Data/font.ttf', 
	//验证码背影颜色（十六进制色值）
	'VERIFY_BGCOLOR' => '#F3FBFE', 
	//验证码字体大小
	'VERIFY_SIZE' => '30', 
	//验证码字体颜色（十六进制色值）
	'VERIFY_COLOR' => '#444444', 
	//SESSION识别名称
	'VERIFY_NAME' => 'verify',
	//存储验证码到SESSION时使用函数
	'VERIFY_FUNC' => 'strtolower', 
	 );

?>