<?php

echo '<h2>目录操作</h2>';
//创建新目录|文件夹|mkdir|makes directory 
//删除新目录|文件夹|rmdir|remove directory

echo '<h2>在根目录下创建目录directory</h2>';
//#在根目录下创建目录directory   
//$res=mkdir('directory');
//$res=mkdir('./dirfather');
//var_dump($res);

//#在根目录directory下创建dirson
//$res=mkdir('directory/dirson');
//var_dump($res);

//#直接在C盘下创建 dirfather
//$res=mkdir('/dirfather');
//var_dump($res);


//#返回上一级，创建文件，绝对路径，相对路径
//#重复创建文件时，抑制错误@
$res=@mkdir('../dirmother');

echo '<h2>删除目录</h2>';
//#删除文件
$del=mkdir('dir');
//rmdir('dir');
//#删除文件+抑制错误
@rmdir('dir');
var_dump($del);


echo '<h2>读取目录</h2>';

//读取目录
$r=opendir('php');
var_dump($r); //type(stream)文件流的资源
echo '<br>';

//读取资源，任何文件夹都包含 自己目录，上级目录两个文件
echo readdir($r),'<br>'; //  ./.  代表自己目录
echo readdir($r),'<br>'; //  ../  代表上级目录
echo readdir($r),'<br>'; //文件夹中的第一个资源
echo readdir($r),'<br>'; //文件夹中的第二个资源

//循环遍历输出
//-- readdir本省就会自动移动指针，直到指针移除资源
/* foreach用于遍历数组，readdir是资源，不是数组
foreach($r as $value){
	echo readdir($value),'<br>'; 
}
*/
while($file=readdir($r)){
	echo $file,'<br>';
}


//关闭资源,对应opendir的值
closedir($r);

echo '<h2>其他目录操作</h2>';

//得到文件上一层目录
$dir1='C:\xampp\htdocs';
$dir2='‪C:\xampp\htdocs\study\01_mysql.sql';
echo '<h2>test</h2>';


echo '<h2>test</h2>';
var_dump(dirname($dir1),dirname($dir2));
echo '<br>';
var_dump(realpath($dir1),realpath($dir2)); //目录|文件夹是TRUE，文件|资源是FALSE

//判断指定路径是否是一个目录
echo '<br>';
var_dump(is_dir($dir1),is_dir($dir2)); 

//scandir()：封装版的opendir/readdir/closedir,获取一个指定路径下的所有文件信息，以数组形式访问
//--不用再写while循环
echo '<pre>';
var_dump(scandir('php'));

echo '<pre>';
var_dump(scandir('../study'));

echo '<h2>递归遍历目录（无论目录下有多少层，取出其中所有文件）</h2>';

//定义路径
$dir='../study';


/*
 *创建函数，能够访问指定路径下的所有文件，且判断出目录还是文件
 *@param string $dir，指定路径
*/

function my_scandir($dir){
	//保证文件安全，如果不是路径，没有必要往下
	if(!is_dir($dir))dir($dir.'<br/>');
	
	//读取全部路径信息，遍历输出
	$files=scandir($dir);
	foreach($files as $file){
		//$files就是一个文件名
		echo $file.'<br/>';

		//fiy
	}

}

//测试
my_scandir($dir);