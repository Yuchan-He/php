<?php
//PHP中作用域

 //默认的代码空间：全局空间
  $global='global area';  //最终会自动被系统纳入到超全局变量（数组）中：$GLOBALS['global']=global area;  即系统自动生成数组$GLOBALS['global']，并赋值global area给该数组

 //局部变量（必须在函数内部定义）
  function display6(){
  	//所有的形参都可以理解为局部变量
  	$inner=__FUNCTION__;  //局部变量,取该函数名称

  	//访问全局变量--error
  	//echo $global;  //error，不能访问，因为全局变量不能在局部空间使用

  	//访问全局变量--solution
  	var_dump($GLOBALS);  //局部访问超全局变量
  	echo '<hr>';
  	echo $GLOBALS['global']; // 访问全局变量中特定的值
  	//var_dump($globals); //$global被系统自动纳入到超全局变量（数组）中：$GLOBALS['global']中
 	echo '<hr>';
 	//定义变量，使用全局变量，外部全局空间已经存在，直接引入
 	global $global; //用关键字global定义变量，
 	echo $global;
	echo '<hr>';
 	//定义变量，全局变量不存在
 	global $local; //用关键字global定义变量，
 	$local='inner';

  }

  //调用函数
   display6();  //在局本空间访问全局变量

  //全局空间访问局部变量
  // echo $inner;  //error，不能访问，调用函数display6 后，该函数结束，内存空间被释放。函数不存在，函数内的变量自然不能被访问

  //如何解决以上error问题，即全局变量和局部变量互相访问的问题 →超全局变量,详细见上方 访问全局变量--solution

  //访问’局部‘变量
   echo $local;


 //静态变量--都是局部变量

 //定义函数
   echo '<hr>';
   function display7(){
   	//定义变量
   	$local='local';

   	//定义静态变量
   	static $count =1;
   }
 
  //调用函数
   display7();


//静态变量--使用

 //定义函数
   echo '<hr>';
   function display8(){
 
   	$a=1;
   	static $b=1;
   	echo $a++,$b++,'<br>';

   }
 
  //调用函数
   display8();  // 1 time：b=1,因为编译时，会为静态变量赋值，所以运行三次，b的值会变，a的值不会变。
   display8();  // 2 time：b=2
   display8();  // 3 time：b=3

  
  //可变函数

   //定义函数
   function display9(){
   	echo __LINE__,__FUNCTION__; //取得对应的函数和函数名字
   }

   //定义变量
   $func = 'display9';

   //可变函数
   $func();


   //变量函数_回调函数——用户自定义的函数引用到系统函数中使用
   //定义系统函数（假设） 
    echo '<hr>'; 
   function sys_function($a,$b){
   	//给指定的函数（第一个参数），求对应的第二个参数值的3次方
   	//为实际用户输入的数据进行处理
 	$b=$b+10;  //b=下方的10+10
 	$a='user_function';
 	return $a($b);  //	return  user_function(20)=$num*$num*$num;
   }

   //定义一个用户函数而且要通过系统函数，求一个数的3次方
 	function user_function($num){
 		return $num*$num*$num;
 	}

   //求10的3次方
 	echo sys_function('user_function',10); // 8000=20*20*20  $a='user_function',$b=10


 //匿名函数

 // 定义基本匿名函数 ,匿名函数的语法，最后要加；结尾
  echo '<hr/>';
  function(){
  	//函数体
  	echo 'hello';
  };

 //匿名函数没有名字，无法做函数调用 function name(),所以把匿名函数赋值给可变函数，然后调用可变函数（）
// 由于是一个赋值的过程，所以$func = fun..后面要加引号
  echo '<hr/>';
  $func=function(){
  	//函数体
  	echo 'hello';
  };

  $func();
  //查看变量内容
  echo '<br/>';
  var_dump($func);

  //闭包函数
  echo '<br/>';
  var_dump($func);

  //闭包函数的使用
  echo '<hr/>';
  function display10(){
  //定义变量：局部变量
  	$name=__FUNCTION__;

  //定义匿名函数
  //$innerfunction= function() { //error $name无法调用，通过添加use()来解决	
  	$innerfunction= function() use($name){  //use是讲外部变（局部）保留给内部使用（闭包）
  		//函数内部的函数
  		echo $name; //name是匿名函数function中的变量，执行后就消失了。name对于display10（），相当于外部的，不能直接调用。所以通过use进行保留，让内外的函数都能使用name
  	};

  	//调用函数
  	$innerfunction();

  }
  display10();
 

 //闭包函数的使用_证明函数的局部变量（匿名函数）在函数使用完后没有被释放
  echo '<hr/>';
  function display11(){
  //定义变量：局部变量
  	$name=__FUNCTION__;

  //定义匿名函数
  //$innerfunction= function() { //error $name无法调用，通过添加use()来解决	
  	$innerfunction= function() use($name){  //use是讲外部变（局部）保留给内部使用（闭包）
  		//函数内部的函数
  		echo $name; //name是匿名函数function中的变量，执行后就消失了。name对于display10（），相当于外部的，不能直接调用。所以通过use进行保留，让内外的函数都能使用name
  	};

  	//返回内部匿名函数
  	return $innerfunction; //在函数内部，终止函数内部执行，不会影响外部代码的继续执行

  }
  display11();
  $closure=display11(); //保留该值
 //170行，函数$innerfunction运行借宿，局部变量$name应该被释放,但运行下方代码时候，出现结果，说明$name没有被完全释放。
  //出现的结果，是$innerfunction= function() use($name)的结果。上述的return使得function display11()运行结束。但$innerfunction= function() use($name)是闭包，没有完全释放，所以得到运行
  $closure();


//系统函数 

 //输入相关
 echo '<hr/>';
 echo 'hello',' <br/>';
 echo 'hello <hr/>';
 print '1';
 echo 'hello <hr/>';
 echo print('hello <br/>');
 echo print('hello');
 print 'hello <br/>';

 $a='hello <br/>';
 print_r($a);

 //时间函数
 echo '<hr/>';
 echo date ('Y年m月d日 H:i:s',12345678), '<br/>'; //h→时;i→分;s→秒; echo date ('Y年m月d日 H:i:s <br/>',12345678)--data中有些特别字符被解析，所以其中的br无效;
 echo time(),'<br/>';
 echo microtime(),'<br/>';
 echo strtotime('tomorrow 10 hours'); //比microtime多10H

 //数学相关的函数
 echo '<hr/>';
 echo ceil(1.2); //向上取整

 //关于函数的函数
 echo '<hr/><pre>';
 function test($a,$b){
 	//获取指定参数
 	var_dump(func_get_arg(1));
 	//获取所有参数
 	var_dump(func_get_args());
 	//获取参数数量
 	var_dump(func_num_args());
 }

 	//调用函数
 function_exists('test') && test(1,'2',3,4); //为安全性，验证函数是否存在 &&逻辑与，前面存在时，后面才能运行


 //return 的用法，用于返回值

 function buy($id,$num){
  echo $id.'buy'.$num;

}

buy(1,2);

function buy2($id,$num){
  echo $id.'buy'.$num;
  return;
  
}

buy2(1,2);

function buy3($id,$num){
  return $id.'buy'.$num;
  
}
echo buy3(1,2);

function buy4($id,$num){
  //error// $id.'buy'.$num;
  
}

echo buy4(1,2);

