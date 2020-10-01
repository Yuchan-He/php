<?php


echo '<pre>';
echo '获得该数组所有信息';
var_dump($_FILES);
echo "获得该数组下['image']['name']的信息";
//若以下出错，看提交的HTML的文件submit是否正确
var_dump($_FILES['image']['name']);



//检查文件
echo '<pre>';

var_dump($_POST);
var_dump($_FILES);


echo '<h2>单个文件上传</h2>';
//1.取得文件信息
$file=$_FILES['image'];


//2.判断是否是上传文件,根据是否有临时文件来判断
//error:if(is_uploaded_file($file){
//--uploaded file的判断类型是string，$file是数组，在数组中取值后，就为string
if(is_uploaded_file($file['tmp_name'])){
	//echo 'success';
	//3.移动文件，需要指定文件的地址和文件名称
	if(move_uploaded_file($file['tmp_name'], 'mysql/'.$file['name'])){
		//move_uploaded_file($file['tmp_name'], 'mysql/$a');
	echo 'success to save';	
	}else{
	echo 'fail to save';}

}else{
	echo 'Fail to upload';
}

	
	echo '<h2>不同属性多个文件上传</h2>';
	//不同名文件的遍历处理方式
	foreach($_FILES as $file){
		//$file 就是一个完整的上传文件信息，找到临时路径，指定存放路径
		if(is_uploaded_file($file['tmp_name'])){
	//echo 'success';
	//3.移动文件，需要指定文件的地址和文件名称
		if(move_uploaded_file($file['tmp_name'], 'mysql/'.$file['name'])){
			//move_uploaded_file($file['tmp_name'], 'mysql/$a');
		echo 'success to save';	
		}else{
		echo 'fail to save';}

		}else{
			echo 'Fail to upload';
		}
			}

	
	echo '<pre>';
	var_dump($_FILES);
	echo '<h2>同个属性多个文件上传</h2>';


	//此时遍历$_FILES没有意义，因为只有一个数组元素。
	//--应该变量$_FILES['userfile']['任意一个要素:name|tmp_name|size|error|type']
	//判断元素存在而且是数组，name有代表是文件，name元素有多个（数组），代表是同名批量上传
	//判断是否存在:isset($_FILES['image']['name']
    //判断是否为数组:is_array($_FILES['image']['name']
    //不能单单只有is_array($_FILES['image']['name'],因为空值也能构成数组
    //判断标准是  有值 && 该值是一个数组
	if(isset($_FILES['image']['name']) && is_array($_FILES['image']['name'])){
		//遍历构造数组元素
		$images=array(); // 改代码，不影响程序，存储所有的文件信息，一个元素代表一个文件（数组）
		foreach($_FILES['image']['name'] as $key=>$file){
			//$_FILES['image']['name'][$key] =$file[$k]
			//构建一个数组，分别保存各个文件信息
		
			echo $key.'=>'.$file;
			$images[]=array(
				'name'=>$file, //$_FILES['image']['name'][$key]=$file
				'type'=>$_FILES['image']['type'][$key],
				'tmp_name'=>$_FILES['image']['tmp_name'][$key],
				'error'=>$_FILES['image']['error'][$key],
				'size'=>$_FILES['image']['size'][$key]
			);
			//不在上方用$array=array的原因，是因为foreach时候，新的数值会覆盖掉旧的数字，所以每次循环，都把结果另存到$array[]数组中。

			
			//不把上面的文件信息单独分开，直接将下面的tmp文件一个一个保存也可。这为两个功能，不互相影响
			move_uploaded_file($_FILES['image']['tmp_name'][$key], 'mysql/'.$_FILES['image']['name'][$key]);

		}

	}
	print_r($images);