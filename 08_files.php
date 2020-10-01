<?php
//包含文件+被包含文件


//向上包含
//“被包含”文件

//定义数据
$a =1;  //变量的赋值
define('PI',3.14); //常量的定义

//向下包含
//定义数据
$b=10;
const c=3.14;

//“包含文件”，为了显示以上数据
include_once '08_files_include.php';
echo '<hr/>';


//include（报错时，是waring不影响下面代码的执行）和require错误级别高，导致下面代码不再执行) 的区别
include 'a.php'; 
echo 'WORLD';
echo '<hr/>';


//include（报错时，是waring不影响下面代码的执行）和require错误级别高，导致代码不再执行) 的区别
//require 'a.php'; 
echo 'WORLD';



