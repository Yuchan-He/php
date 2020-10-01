<?php
//错误处理

//处理脚本让游览器按照指定字符集解析的方法

header('Contet-type:text/html;charset=utf-8');

$a =100;
$b =0;

if($b==0){
	//人为触发错误
	trigger_error('除数不能为0'); //默认notice,代码会继续执行
}

echo $a/$b;
echo 'hello';

if($b==0){
	//人为触发错误
	//trigger_error('除数不能为0',E_USER_ERROR); //默认error,代码不会继续执行
}

echo $a/$b;
echo 'hello';

//自定义错误处理机制

//自定义函数
 /*
   @param1 $errno,是系统提供的错误代码:E_All,E_NOTICE...
   */
 echo '<hr>';
 function my_error($erro,$errstr,$errfile,$errline){
 	//先做以下判断:当前会碰到的错误有哪些  
 	if(!(error_reporting()&$errno)){
 			return false;
 			//error_reporting没有参数代表获取当前系统错误对应的级别

 	}
 	//开始判断错误类型
 	switch($errno){
 		case E_ERROR:
 		case E_USER_ERROR:
 			echo 'fatal error in file'.$errfile.'on line'.$errline.'<br/>';
 			echo 'error info:'.$errstr;
 			break;

 			case E_WARNING:
 			case E_USER_WARNING:
 			echo 'Warning error in file'.$errfile.'on line'.$errline.'<br/>';
 			echo 'error info:'.$errstr;
 			break;

 			case E_NOTICE:
 			case E_USER_NOTICE:
 			echo 'Notice error in file'.$errfile.'on line'.$errline.'<br/>';
 			echo 'error info:'.$errstr;
 			break;
 	}
 	return true;
 	}

 	//报错
 	echo $d;
 	//修改错误机制
 	set_error_handler('my_error');
 	echo $d;

 