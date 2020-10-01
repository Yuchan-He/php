<?php 

//作用，通过return建立两个文件的关系，返回另一个文件中return上方的值
//包含有return 关键字的文件

include_once '07_functions.php';

//作用，通过return建立两个文件的关系，返回另一个文件中return中的值，但要把上方的代码先注释掉，否则会变为bool
echo '<hr/>';
$res = include_once '07_functions.php';
var_dump($res);