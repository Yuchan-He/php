<?php
  //PHP常量

  //使用函数定义常量 define
  define('PI',3.14);
  //常量的使用，直接使用常量名字
  echo PI,'<br/>';

  //使用const关键字定义
  const PII=3;
  //常量的使用，直接使用常量名字
  echo PII,'<br/>';
  
  //定义特殊常量
  define('(*￣︶￣)','smile');
  //const((*￣︶￣)='smile'); //error

  //使用定义特殊常量
 // echo (*￣︶￣);//error，特殊常量不能直接输出
  echo constant('(*￣︶￣)'),'<hr/>';

 //系统常量
  echo PHP_VERSION,'<br/>',PHP_INT_SIZE,'<br/>',PHP_INT_MAX;

 //魔术常量
  echo '<hr/>';
  //echo _DIR_;//error  需要两个下划线
  echo __DIR__,'<br/>',__FILE__,'<br/>',__LINE__,'<br/>';
  echo __line__;
  