<?php

echo '<h2>使用session之前，要先启用session</h2>';

//#使用session之前，先要开启session_start
session_start();
var_dump($_SESSION);

//#设置session数据
$_SESSION['name']='Mark';

$_SESSION['hobby']=array('basketball','football');

//#读取session，session就是一个数组信息，什么方式存，什么方式读取
echo '<pre>';
print_r($_SESSION);

echo $_SESSION['name'];
echo '<br>';
print_r($_SESSION['hobby']);

//#删除一个session数据
unset($_SESSION['name']);


//#删除全部session数据
$_SESSION=array();

//测试效果
sleep(5); //脚本休息5秒后执行

//#销毁全部session文件
session_destroy();