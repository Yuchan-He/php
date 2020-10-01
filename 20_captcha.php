<?php

//要输出图片，前面不能有输出函数和空格

//创建图片资源
$img=imagecreatetruecolor(200, 50);

//背景色
$bg_color=imagecolorallocate($img, 220, 220, 220);
imagefill($img, 0, 0,$bg_color);

//获得随机文字
$str='输出图片在游览器不能正常显示的时候';

//获取字符串长度
$len=strlen($str); //不是字符长度，而是字节长度，中文一个字是3个字符，应为一个是1个字符
$c_len=$len/3;
 
//随机取
$rand=mt_rand(0,$c_len-1); //随机汉字的数（第几个）  mt_rand（A,B），在A，B 区间任取数字
$char1=substr($str,$rand*3,3);
$char2=substr($str,$rand*3,3);
echo $char1;

//写入内容
$font='SamsungKorean-Bold.ttf';
//$str_color=imagecolorallocate($img,100,100,100);
$str_color=imagecolorallocate($img,mt_rand(0,100),mt_rand(0,100),mt_rand(0,100));
imagettftext($img,30,15,60,40,$str_color,
	$font,$char1);
imagettftext($img,30,15,60,40,$str_color,$font,$char2);

//加入干扰点或线




//输出资源
//header('Content-type:image/png');
//imagepng($img); //png格式图片是透明，比较小

//销毁资源
imagedestroy($img);
