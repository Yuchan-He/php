<?php

 //系统函数 functions

 //定义函数 
 function display(){
 	//函数体
 	echo 'hello world'; //并没有返回值
 }

 //调用或使用函数--函数名称()
 display(); //输出该函数返回值 -定义后调用

 //函数的调用可以在定义前，也可以在定义后，因为函数的编译和执行时分开的。

  //调用或使用函数--函数名称()，同个脚本内函数不能同名
 echo '<hr/>';
 display2(); //输出该函数返回值 -定义前调用

  //定义函数 
 function display2(){
 	//函数体
 	echo 'hello world'; //并没有返回值
 }


  //函数参数
 echo '<hr/>';
  //定义函数
  function addup($arg1,$arg2){  //形参可以有多个，用逗号分隔
 		
  		//函数体：可以直接使用形参运算
  		echo $arg1+$arg2;
  }
 
  $num1=10;
  addup($num1,20); // 传入的实参，可以是变量或者其实有值的表达式（变量）

  //函数参数_默认值
   echo '<hr/>';
   $num1=10;
   function jian($num1=0,$num2=0){ //设置两个形参的默认值为0，当前$num1是形参，在编译时不执行，即使执行也是在jian函数内部，不会与外部的$num1变量冲突
   echo $num1-$num2;
   }

  //调用：默认值如果存在，可以不用传入
   jian($num1);
   echo $num1;

 //引用传值
 echo '<hr/>';
 function linkout ($a,&$b){
 	//改变形参的值
 	$a=$a*$b;
 	$b=$b*$b;
 	echo $a,'<br/>',$b,'<br/>';
 }
   //定义变量
    $a=10;
 	$b=5;
   //调用函数
 	linkout($a,$b); //函数中a,b
 	echo $a,'<br/>',$b; //形参a,b。b是引用传值，a是直接传值
 	echo '<br/>';

 //函数体+函数返回值

 //定义函数 
 	function display5(){
 		//输出
 		echo __FUNCTION__; //输出当前函数的名字,4个下划线
 	}

 	display5();
 	echo '<br/>';
 	var_dump(display5());
 
 //加法运算  return：代码的终结者
 	echo '<br/>';
 	function add($a,$b){
 		return $a+$b; //返回结果
 		echo $a; //输出，结果不再执行，原因是，return在函数内部时候，会结束当前函数，所以后面所有内容都不在执行，return是返回，都返回了自然不会继续下面的代码
 	}
 	$res=add(10,20); //外部定义变量接收函数运行结果
 	//return在函数外部的时候，作用是将结果交给另外包含的文件

   echo '<h2>return会结束下面代码，故另起functions文件</h2>';

 	return 'hello world ';
 	echo $res; //输出，结果不再执行，原因是，return在上方时候，会结束当前操作，所以后面所有内容都不在执行，return是返回，都返回了自然不会继续下面的代码


   //输入相关
 echo '<hr/>';
 echo 'hello',' <br/>';
 echo 'hello <br/>';
 echo print('hello <br/>');
 echo print('hello');
 print 'hello <br/>';

 $a='hello <br/>';
 print_r($a);