<?php
header('Contet-type:text/html;charset=utf-8');

echo '<h2>表单传值<h2>';
//接收数据
echo '<pre>';

var_dump($_GET);

echo '<hr>';
var_dump($_POST);

echo '<hr>';
var_dump($_REQUEST);
