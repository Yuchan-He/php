<?php

echo '<h2>使用cookie</h2>';
echo '<h2>第一次访问，记录cookie，不会返回cookie值，第二次访问才会返回cookie值</h2>';
//设置cookie 
//cookie(名字，值)
setcookie('age',1);
setcookie('name','mark');

//读取cookie信息
var_dump($_COOKIE);

echo '<h2>cookie生命周期</h2>';
setcookie('a1','a1'); //普通的cookie,游览器关闭失效
setcookie('a4','a4',0); //生命周期=0，相当于时间设置0时，相当于普通的cookie,游览器关闭失效

setcookie('a2','a2',7*24*60*60); //格林威治时间7天过期
setcookie('a3','a3',time()+7*24*60*60); //格林威治时间，从今天开始7天后过期

//删除cookie
setcookie('a3','');  //删除方法1，清空内容

setcookie('a3','a3',time());//删除方法2,设定时间戳过期

echo '<h2>cookie作用域</h2>';
//设置普通cookie 
setcookie('father1','father8');
//读取cookie信息
var_dump($_COOKIE);

echo '<h2>指定cookie输出</h2>';
$father=$_COOKIE['father1'];
echo $father;

echo '<h2>指定cookie输出</h2>';

echo '<h2>设定设定cookie为【/】,使其全局访问cookie（localhost）</h2>';
setcookie('global_son','global_son',0,'/');



echo '<h2>用‘数组’保存cookie</h2>';

//尝试直接用数组形式保存cookie
//cookie 本身无法支持数组
//error --setcookie('good_ids',array(1,2,3)); 

//伪装数组，通过伪装数组游览器自动识别【】为数组
echo '<h3>用‘伪装数组[]’保存cookie,但是不设定下标的话，后一个数据会覆盖前一个数据</h3>';
setcookie('good_ids_1[]',1);
setcookie('good_ids_1[]',2);
setcookie('good_ids_1[]',3);

echo '<pre>';
print_r($_COOKIE);

echo '<h3>用‘伪装数组[]’保存cookie,设定下标</h3>';

setcookie('good_ids[0]',1);
setcookie('good_ids[1]',2);
setcookie('good_ids[2]',3);  //若存在两个‘3’cookie时，是前面的cookie带来的影响，需要清空前面的cookie
$arr=$_COOKIE['good_ids'];


echo '<pre>';
//print_r($_COOKIE);
print_r($arr);

//用下标取出单个cookie
//读取形式 $_COOKIE['数组名字'][下标位置]
echo $_COOKIE['good_ids'][2];

