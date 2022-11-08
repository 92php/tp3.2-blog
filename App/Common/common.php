<?php
// 公共应用函数
function p($arr){
	echo '<pre>'.print_r($arr,true).'</pre>';
}


function replace_phiz($content){
	preg_match_all('/\[.*?\]/is', $content, $arr);

	if($arr[0]){
		$phiz=F('phiz','','./Data/');
		foreach ($arr[0] as $v) {
			foreach ($phiz as $key => $value) {
				if ($v=='['.$value.']') {
					$content = str_replace($v,'<img src="'.__ROOT__.'/Public/Images/phiz/'.$key.'.gif"/>', $content);
                break;
				}	
			}
		}
	}
	return $content;
}

//截取中文字符串
function msubstr($str, $start=0, $length, $charset="utf-8", $suffix=false){
	 if(function_exists("mb_substr")){
	  if($suffix)
	   return mb_substr($str, $start, $length, $charset)."...";
	  else
	   return mb_substr($str, $start, $length, $charset);
	 }elseif(function_exists('iconv_substr')) {
	  if($suffix)
	   return iconv_substr($str,$start,$length,$charset)."...";
	  else
	   return iconv_substr($str,$start,$length,$charset);
	 }
	 $re['utf-8'] = "/[x01-x7f]|[xc2-xdf][x80-xbf]|[xe0-xef][x80-xbf]{2}|[xf0-xff][x80-xbf]{3}/";
	 $re['gb2312'] = "/[x01-x7f]|[xb0-xf7][xa0-xfe]/";
	 $re['gbk'] = "/[x01-x7f]|[x81-xfe][x40-xfe]/";
	 $re['big5'] = "/[x01-x7f]|[x81-xfe]([x40-x7e]|xa1-xfe])/";
	 preg_match_all($re[$charset], $str, $match);
	 $slice = join("",array_slice($match[0], $start, $length));
	 if($suffix) return $slice."…";
	 return $slice;
}     
//模版中使用  {$title|msubstr=0,21}


?>