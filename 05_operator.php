<?php
 
 //运算符

 //算数运算符
 $a=$b=10;
 $c=0;
 var_dump($a/0); //被除数不能为0，会显现警告，得出的值无限大，无法显示
 var_dump($a/$c); //被除数不能为0，会显现警告，得出的值无限大，无法显示
 echo '<hr/>';

 //比较运算符

 $a='123';//string
 $b=123;//int

 //判断相等 
 var_dump($a==$b);
 //判断全相等
 echo '<hr/>';
 var_dump($a===$b);

 //逻辑运算符
 echo '<hr/>';
 $c='weekend';//赋值=
 $d='good';//赋值=

 //逻辑与
 var_dump($c=='weekend' && $d=='goods');//等于==
 //逻辑或
 echo '<br/>';
 var_dump($c=='weekend' || $d=='goods');
//逻辑非
 echo '<br/>';
 var_dump($c=='weekend');
 var_dump(!($c=='weekend'));

 //连接运算符
 echo '<hr/>';
 $a='hello';
 $b=456;

 echo $a.$b; //将连个变量连接起来
 echo '<br/>';
 $a .=$b; // $a = $a .$b
 echo $a;
 
 //错误抑制符
 echo '<hr/>';
 $a=10;
 $b=0;
 $a/$b ; //被除数不能为0，警告
 echo '<br/>';
 // $a%$b ;//求余数时，被除数不能为0，报错
 @($a/$b); //抑制错误
 echo '<hr/>';

 //三目运算符
 $a=10;
 $b=$a>10? 100:0;
 echo $b;
 echo '<hr/>';
 //自操作运算符
 
 //独立操作， 不参与其他运算，结果一致
 $a=$b=10;
 $a++;
 ++$b;
 echo $a,$b;

//参与输出操作（其他运算），结果不一致
 echo '<br/>';
 echo $a++,++$b;
 echo $a,$b;

 //后置操作
 echo '<hr/>';
 $a=10;
 $b=$a++;
 echo $b;

  //前置操作
 echo '<br/>';
 $a=10;
 $b=++$a;
 echo $b;

 //衍生符号
 echo '<hr/>';
 $a=10;
 $b=5;
 $a += $b; //a=a+b=15
 $a -= $b-1;  //a=a-(b-1);  15-5+1=11
 echo $a,'<br/>',$b;
 
//位运算

//计算机码
 echo '<hr/>';
 $a=5; //原码-正数 00000101
 $b=-5; //1.原码-负数 10000101 2.取反，反码：符号位不变，其他位取反  11111010 3.求补：反码+1 11111011
 
 //十进制转二进制
 echo decbin($a),'<br/>'; 
 echo decbin($b); 

//位运算符

//按位与
 echo '<hr/>';
 $a=5; 
 $b=-5; 
 var_dump($a&$b);

 //按位非
 echo '<br/>';
 $a=5; 
 $b=-5; 
 var_dump(~$b);

 //按位右移
 echo '<br/>';
 $b=-5; 
 var_dump($b>>1);
 var_dump($b>>2);