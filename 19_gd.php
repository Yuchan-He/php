<?php

//创建图片资源

//创建一个真彩图片
$img=imagecreatetruecolor(100,100) or dir('图片初始化失败'); //黑色图片（无色）

//分配颜色--只分配，不上色！
$bg_color=imagecolorallocate($img,255,0,0);
//填充背景颜色
imagefill($img,0,0,$bg_color);

//制作矩形
$rec_color=imagecolorallocate($img,0,0,255);
imagerectangle($img,10,10,90,90,$rec_color);

//echo '<h2>制作画布</h2>';
//制作一段圆弧
$arc_color=imagecolorallocate($img,0,0,0);
imagearc($img,50,50,80,80,180,360,$arc_color);

//写入英文字符串
$str_color=imagecolorallocate($img,100,100,100);
imagestring($img,5,20,50,'abcd',$str_color);

//写入中文字符串
//$ch_color=imagecolorallocate($img,50,50,50);
//imagettftext($img,30,45,50,50,$ch_color,'STHUPO.TTF','中');

//保存输出
imagepng($img,'my.png'); //通过png比较多（自己创建的画布）


//游览器上的输出，出现乱码，原因是没有告诉游览器输出类型，游览器自动用文字输出
//--输出给游览器必须告知响应头|header:图片
header('content-type:image/png');
imagepng($img); //游览器上的输出



//从以后jpeg图片中打开资源
$img2=imagecreatefromjpeg('mysql/truth3.jpg');
//error--$img=imagecreatefromjpg('mysql/truth3.jpg');
var_dump($img2);

//$img=imagecreatefromjpg('mysql/truth3.jpg');

echo '<h2>GD[graphic device]图像处理</h2>';

echo '<h2>游览器前面加了header后，还是不能正常输出，有可能图片之前有输出语句，或者<?php之前有空行，都删除后，图片就能正常输出</h2>';





