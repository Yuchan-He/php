<?php

//#PHP通过header设置响应头|header

//#若出现乱码，这设置的识别文字有问题
//--通过设置header中的content-type的语言调整
//header('Content-type:text/html;charset=utf-8'); 

echo '下面跳转，直接网页进行更新，要想回到原来页面，要重新输入地址';

//#location:立即重定向，
//在同一个根目录下
//header('Location:13_upload_file.html');
//在同一个根目录下的文件夹中
//header('Location:php/11_array.php');


//#refresh：延时重定向,延迟5秒跳转
//header('Refresh:5;url=13_upload_file.html');


//#content-disposition
//content-disposition:attachment 告知游览器这是一个附件
//filename=girl.jpg 下载文件，这个文件定义为girl.jpg
header('content-disposition:attachment;filename=girl.jpg');

