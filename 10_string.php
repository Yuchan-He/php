<?php 
header('Contet-type:text/html;charset=utf-8');
//字符串;定义

//引号定义，单引号或双引号，没有区别
$str1='hello';
$str2="hello";
var_dump($str1,$str2);

echo '<hr/>';
//结构化定义
//heredoc结构
$str3=<<<EOD
	 hello
	    world
EOD;//必须要定格，即在左边
//nowdoc结构
$str4=<<<'EOD'
hello
   world
EOD;//必须要定格，即在左边
var_dump($str3,$str4);


//定义字符串识别转义符号
echo '<hr/>';
$f='hello';
$str5='abc\r\ndef\t\'\"\$gg';
$str6="abc\r\ndef\t\'\"\$gg";
$str7="abc $f gfe";
$str8="abc $fgfe"; //$fgfe被自动识别为变量，但是没有复制，所以会出错,可以在字符中的变量加{}，帮系统辨识
$str8="abc {$f}gfe"; //字符中的变量加{}，帮系统辨识
echo $str5,'<br/>',$str6;
echo $str7,'<br/>',$str8;


//字符串长度

//定义字符串
echo '<hr/>';
$str1='hello';
$str2='努力学习啊';
echo strlen($str5),'<br/>',strlen($str6),'<br/>';

//使用mbstring扩展
echo mb_strlen($str5),'<br/>',mb_strlen($str6),'<br/>',mb_strlen($str6,'utf-8');  

//字符串相关函数
