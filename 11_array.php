
<?php

//定义数组：array
$arr1=array('1',2,'hello');
var_dump($arr1);
echo '<br/>foreachで配列の数字と文字列をループする';
foreach($arr1 as $value){
	echo $value;
}
echo '<br/>';
foreach($arr1 as $value){
	echo $value[0];
	#echo $value[1];
	#echo $value[2];
}
echo '多次元の配列のFOREACH方法<br/>';
$arr1=['A','B','C','EE'];
$arr2=['sky','star',3];
$arr3=[$arr1,$arr2];
echo '<pre>';
var_dump($arr3);

foreach($arr3 as $value){
	echo $value;
}

foreach($arr3 as $value){
	echo $value[0].$value[1];
	echo '<br/>';
}

foreach($arr3 as $value){
	echo $value[0].$value[1].$value[2].$value[3].$value[4];
	echo '<br/>';
}
echo '<br/>';


//数组的结构，分叉型

//使用【】定义数组也可--不用加array
//$arr2=array['world',6,'4'];
$arr2=['world',6,'4'];
var_dump($arr2);

//判断是否为数组 is_array();

//隐形数组
echo '<br/>';
$arr3=1;
var_dump($arr3);

echo '<br/>';
$arr4[]=5;
var_dump($arr4);

//隐形数组--指定下标的隐形数组
echo '<br/>隐形数组--指定下标的隐形数组';
$arr5[10]=5;
$arr5[]=5;
$arr5[1]=5;
var_dump($arr5);

echo '<br/>';
$arr6['key']=5;
var_dump($arr6);

//特殊下标转换_php的数组下标最好不用特殊字符
 echo '<br/>特殊下标转换_php的数组下标最好不用特殊字符';
 $arr7[false]=false;
 $arr7[true]=true;
 $arr7[null]=NULL;
 var_dump($arr7);
 

 //二.多维数组:数组中的元素还是数组
  echo '<hr/>';
  $info=array(
  	array ('name','Jim','age',1),    //name和tomy不对应，分开输出
  	array ('name'=>'TOMY','age'=>2), //name对应tomy
  	array ('name'=>'Lili','age'=>3)
  	//最后一个元素，后面可以跟逗号不影响，但不建议
  );

  echo '連想配列の出力方法';
  echo '連想配列のキーを取得するためには、array_keys関数を使用します';
  $info2=array(1,5,6,9);
  $keys=array_keys($info2);
  print_r($keys);

  echo '<hr>';
  echo $info;
  echo '<pre>';
  var_dump($info);
  echo '<hr/>';
  echo '<pre>';
  print_r($info); //不会表示出数据类型，只表示数据
  echo '<pre>';
  print ($info);

//数组遍历 foreach
//foreach($array_name as  $X) --游览该数组【$array_name】中值，值定义为 $X,
//--即通过定义变量$X,使得在栈区开辟一个值，让其读入数据
  	echo '<br/>';
	$arr=array(
		1=>'A', //定义了key为1，如果没定义，自动从0开始
		2=>'B',
		3=>'C',
		4=>'D'
	);
	//foreach($arr as $key){
	foreach($arr as $key=>$value){
		echo $key.'English'.$value;
		echo '<br/>';

	}
	var_dump($arr);

	echo '多次元の配列のFOREACH方法';
	$arr1=[A,B,C,EE];
	$arr2=[sky,star,sea,tree,bird];
	$arr3=[$arr1,$arr2];

	print_r($arr3);
	//count the key of the array 
	$keycount=array_keys($arr3);
	print_r($keycount);


	// for($i=0;$i<2;$i++){
	// 	foreach($arr3 as $value){
	// 		echo '<pre>';
	// 		echo $value;
	// 		echo '</pre>';
	// 	}
	// }

	foreach($arr3 as $value){
		foreach($value as $value2){
			echo '<pre>';
			echo $value2;
			echo '</pre>';
		}
	}
	echo '<hr>';
	foreach($arr3 as $value){
		echo $value[0].'('.$value[1].'('.$value[2];
		echo '<br>';
	}

	echo '多次元の配列のFOREACH方法';

//for循环遍历数据

//数据的特点:索引数组，下标规律
for($i=1;$i<count($arr);$i++){
	echo $arr[$i];
	echo '<br/>';
}

//level up,count的数据不变，为减少重复使用，事先将其定义
for($i=1,$j=count($arr);$i<$j;$i++){
	echo $arr[$i];
	echo '<br/>';
}

//while配合each和list遍历数组
while(list($list,$value)=each($arr)){
	echo 'key is:'.$key.'value is:'.$value.'<br/>';
}


//数组排序函数
$arr=array(2,5,1,0,-1);
echo '<pre>';
print_r(sort($arr)); //sort返回bool值，所以返回的是1,证明可以进行排序操作

//要接收结果
$sort_arr=sort($arr);
echo $sort_arr;
print_r($sort_arr);
print_r($arr); //排序操作后的输出
echo $arr;
print $arr;

//数组指针函数
$arr=array(2,5,1,0,-1);
echo current($arr),'<br>';
echo next($arr),next($arr),'<br>';

//其他函数

//模拟数据结构：栈和队列
$arr=array();
//栈 FILO:first in last out
//队列 FIFI:First in First out
array_unshift($arr,3);
array_unshift($arr,2);
array_unshift($arr,1);
print_r($arr);
print_r(array_reverse($arr));
var_dump(in_array(6,$arr));
echo '<br/>';
var_dump(in_array(3,$arr));

echo '<h3>编程思想--递推算法</h3>';


//斐波那契数列 1,1,2,3,5,8,13
/*
0=>1, key0
1=>1, key0
2=>1+1, key0+key1
3=>1+2  key2+key1
i=>x+y  keyi=keyi-1+keyi-2
*/

/* 试错1
$arr=array(1,1);
$key=1;
$value1=1;
$value2=1;
$key_user=3;
while($key<$key_user){
	$key++;
	echo $key;

	echo '<br/>';
}
print_r($arr); 
*/

$f[1]=1;
$f[2]=1;

$des=15;
for($i=3;$i<=$des;$i++){
	$f[$i]=$f[$i-1]+$f[$i-2];
}
echo '<pre>';
print_r($f);

//函数设置
echo '<hr/>';
function my_recursive($des){
	//判断如果是第一个或者第二个，则返回1
	if($des==1 || $des==2) return 1;

	//开始计算
	$f[1]=1;
	$f[2]=1; //第一个第二个结果直接给出

	for($i=3;$i<=$des;$i++){
		$f[$i]=$f[$i-1]+$f[$i-2];
	}
	//返回最后一个位置的结果
	return $f;
}

$a=my_recursive(9);
echo '<pre>';
print_r($a);
$a=my_recursive(2);
echo '<pre>';
print_r($a);

echo '<h3>编程思想--递归算法</h3>';

//递归一定有函数
function recursion($n){
	//递归出口
	if($n==1|| $n==2) 
		return 1;
	//递归点，求N的值，于求N-1的值一模一样，只是N-1的规模比N小
	return recursion($n-1)+recursion($n-2);// 用函数计算函数
}

//调用
	echo recursion(15);


echo '<h3>数组排序算法，冒泡排序 sort() </h3>';
 
$arr=array(10,4,12,9,7,5,8);


for($j=0,$count=count($arr);$j<$count;$j++){
	//2.让下面的循环，每次找出最大值的代码重复执行
	for($i=0,$count=count($arr)-1-$i;$i<$count;$i++){
		//1.把大的值移动到最后
		if($arr[$i]<$arr[$i+1]){
			continue;
		}
		else{
		$temp=$arr[$i];
		$arr[$i]=$arr[$i+1];
		$arr[$i+1]=$temp;
		}
	}
	
}
//my_sort($arr,8);
echo '<pre>';
print_r($arr);


echo '<h3>数组排序算法，选择排序  </h3>';
$arr=array(10,4,12,9,7,5,8);

//1.确定要交换多少次，一次只能知道最小的，需要找到数组长度对应的次数
