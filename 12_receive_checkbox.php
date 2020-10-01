<?php
header('Contet-type:text/html;charset=utf-8');

echo '<h2>表单传值--复选框<h2>';
//接收数据
echo '<pre>';

var_dump($_GET);

echo '<hr>';
var_dump($_POST);

echo '<hr>';
var_dump($_REQUEST);


echo '<hr>';
print_r($_POST);

echo '<h2>将复选框内容存储到数据库<h2>';
//将复选框内容存储到数据库

//数据库的表设计
/* 

id name gender hobby
2  TOM  man    apple
*/
// 不是$_POST['hobby[]']的原因，$_POSTは変数の連想配列で、
//--$_POSTの中【hobby】を取得する、→$_POST['hobby'];




$hobby=$_POST['hobby'];

echo 'print_r($hobby);';
print_r($hobby);
echo '<br>';
print_r($_POST['hobby']);
//error:echo '{$_POST['hobby']}';
//→　【””】と【’’】が混同するとき、【””】+【’’】か、【’’】+【””】か
echo "{$_POST['hobby']}";

//print_r($_POST['hobby']);
echo '<hr/>';
//将数组转换成有格式的字符串-implode
$hobby_string=implode(',',$hobby);
echo $hobby_string;

echo '<hr/>';
//implode的相反操作，将存入数据库的数据转为字符串--explode
var_dump(explode(',',$hobby_string));




