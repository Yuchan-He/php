<?php

//包含文件，使用数据

//包含文件

//向上包含，先包含文件，然后使用文件的内容
include '08_files.php';//若不在同一个根目录下，则要选择对应的路径

echo $a,PI;

//再次加载_include
//include '08_files.php';// 报错，不能同名，重复加载，两个同名常量会冲突

//为消除报错，再次加载_include_once
include_once '08_files.php';



?>

<hr/>
//向下包含，先准备内容，然后包含另外的文件，在另外的文件中，使用当前内容

<table border=1>
	<tr>
		<td><?php echo $b; ?></td>
		<td><?php echo c; ?></td>
	</tr>
	<tr>
		<td>7</td>
		<td>8</td>
	</tr>
</table>

