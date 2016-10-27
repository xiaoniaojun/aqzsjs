<?php

$config_arr1 = include_once WEB_ROOT . 'Common/config.php';
$config_arr2 = array(
	'TMPL_PARSE_STRING'  =>array(
	'__ROOT__' => '/~hackpoint/aqzsjs/', // 更改默认的/Public 替换规则
     '__PUBLIC__' => '/Common', // 更改默认的/Public 替换规则
     '__JS__' => 'Public/JS/', // 增加新的JS类库路径替换规则
     '__IMG__' => 'Public/Img/', // 增加新的JS类库路径替换规则
     '__CSS__' => 'Public/Css/', // 增加新的JS类库路径替换规则
     '__UPLOAD__' => '/Uploads', // 增加新的上传路径替换规则
 )
);
return array_merge($config_arr1, $config_arr2);
?>