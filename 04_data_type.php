<?php
//数据类型 data type

//创建数据
$a='abc1.1.1';
$b='1.1.1abc';

//自动转换
echo $a+$b; //算数+运算，系统先转换成数字类型（整型和浮点型，然后运算）

//强制转换
echo '<br/>';
echo (float)$a+(float)$b;
echo '<br/>';
echo (float)$a,(float)$b;

//判断数据类型
echo '<hr/>';
var_dump(is_int($a)); //false
var_dump(is_string($a)); //true

echo '<hr/>';
echo gettype($a);// a被强制转换为float,但是gettype会返回数字的最初类型

//设置类型
echo '<br/>';
var_dump(settype($b,'int'));//settype会改变数据类型
echo '<br/>';
echo gettype($b),'<br/>',$b;

//简单数据类型：整型，浮点型，布尔型

//定义4种整型数据
 echo '<hr/>';
 $a1=110; //10进制，逢10进1，出现的数字是0-9
 $a2=0b110; //0b开头，逢2进1，出现的数字是0-1 binary|二进制，剩余由0.1构成
 $a3=0110; //0开头，8进制，逢8进1，出现的数字是0-7 
 $a4=0x110; //0x开头，16进制，逢16进1，出现的数字是0-9 以及a-f，a=10,以此类推

 echo $a1,'~',$a2,'~',$a3,'~',$a; //默认的PHP输出数值都会自动转换成10进制

 //进制转换

//整数类型： 利用进制函数运算
 echo '<hr/>';
 var_dump(decbin(107));

 //浮点类型
  echo '<hr/>';
  $f1=1.23;
  $f2=1.23e10;
  $f3=PHP_INT_MAX+1; //PHP中最大的整数+1，整数过大，会自动变为浮点数,PHP_INT_MAX区分大小写
  $f4=PHP_INT_MAX; //整数型
  var_dump($f1,$f2,$f3,$f4);

  //浮点数判断,浮点数是不精确的 0.7不等于2.1/3
  echo '<hr/>'; 
  $f5=0.7;
  $f6=2.1;
  $f7=$f6/3;
  var_dump($f7==$f6);
  
  //布尔类型
  echo '<hr/>'; 
  $f8=true;
  $f9=FALSE;
  var_dump($f8,$f9);