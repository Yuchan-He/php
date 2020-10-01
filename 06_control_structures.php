<?php

//流程控制 06_control_structures.php

//条件结构_if
$day='Monday';
 if($day=='sunday')
 {echo 'go out';}
 elseif ($day=='Monday')
 		{echo 'First day';}
 else{echo 'work';}
 	  

 //条件结构_switch
 echo '<hr/>';
 $day=5;
 switch($day){
 	case 1; //$day==1 一般是一个具体的值，而不是做大小判断
 		echo '1';
 	 	break;
 	case 2;
 		echo '2';
 		break;
 	default:  //不匹配case时候的处理
 	  	echo 'other','<hr/>';
 	  	break;
 }

 //循环结构_for

 //从1到10输出
 // $a=1; // 定义初始值
 
  	for ($a=1;$a<=10;$a++){ 
 	echo $a,'<br/>';
	}
 //最后：($a==11
	echo $a,'<hr/>';

	for ($a=1;$a<=10;++$a){ 
 	echo $a,'<br/>';
	}
 //最后：($a==11


 //从1到10输出(10通常是动态得到,给终止条件赋值)
	echo '<hr/>';
	for ($a=1,$end=10;$a<=$end;$a++){ 
 	echo $a,'<br/>';
	}

  
 //循环结构_while

 //从1到10输出/  =$i and ++$i
	echo '<hr/>';
	$i=1;  //定义条件
	while ($i<=10) {  //循环判断执行
		echo $i++;  //循环体
	}
	echo $i;
 //从1到10输出/	= ++$i
	echo '<hr/>';
	$i=1;
	while ($i<=10) {
		$i++;
		echo $i;
	}
	echo $i;

 //从1到10输出/
	echo '<hr/>';
	$i=1;  //定义条件
	while ($i<=10) {  //循环判断执行
		echo $i;  //循环体
		$i++;
	}


 //循环结构_do while

 //从1到10输出偶数，条件判定加入

 //定义基础条件
	echo '<hr/>';
 	$i=1; 
 //循环判定
 	do{
 		//执行输出
 		if($i%2 != 1){
 			//是偶数
 			echo $i,'<br/>';
 		}
 		//不是偶数的时候 
 		$i++;
 	}
 	while ($i<=10); //条件判定加入


 //循环控制|iterate control

 //从1到100之间5的倍数
 //定义基础条件
	echo '<hr/>';
 	$i=1; 

 	do{
 		if($i%5 ==0 ){
 			//是5的倍数
 			echo $i,'<br/>';
 		}
 		 $i++;
 	}
 	while($i<=100);


 //从1到100之间5的倍数
 //定义基础条件
	echo '<hr/>';
 	$i=1; 

 	do{
 		if($i%5 !=0 ){
 			//不是5的倍数
 			$i++; //重新循环
 			continue;//系统重新跳循环开始处
 			
 		}
 		 echo $i++,'<br/>'; //输出数值
 	}
 	while($i<=100);
 ?>  // ?>php的终止符号，下方开始为HTML代码
 <hr/>

 //流程控制替代语法：php在HTML中的嵌套，HTML和PHP的注释符号不同
 <!-- //流程控制替代语法：php在HTML中的嵌套 -->

 //99乘法表

 <?php
 for($i=1;$i<10;$i++){
 	for($j=1;$j<10;$j++){
 		$x=$i*$j;
 		echo "{$i}*{$j}={$x}";
 		echo '<br/>';
 	}
 }
 ?>


 <table border=1>    <!-- //HTML 代码 -->
	<?php for($i=1;$i<10;$i++){?>  <!-- //php 代码 --"for($i=1;$i<10;$i++){ " 包含在<?php ?>  -->
		<tr>                 <!-- //HTML 代码 -->
			<?php for($j=1;$j<10;$j++){?> <!-- //php 代码 -->
				<td>             <!-- //HTML 代码 -->
					<?php echo $i.'*'.$j.'='.$i*$j;?> <!-- //php 代码 -->
				</td>   <!-- //HTML 代码 -->
			<?php }?><!-- //php 代码 -"} " 包含在<?php ?> -->
		</tr>    <!-- //HTML 代码 -->
	<?php }?>  <!-- //php 代码 -->
 </table>    <!-- //HTML 代码 -->

  //99乘法表--改良版

 <table border=1>    <!-- //HTML 代码 -->
	<?php for($i=1;$i<10;$i++){?>  <!-- //php 代码 --"for($i=1;$i<10;$i++){ " 包含在<?php ?>  -->
		<tr>                 <!-- //HTML 代码 -->
			<?php for($j=1;$j<$i;$j++){?> <!-- //php 代码 -->
				<td>             <!-- //HTML 代码 -->
					<?php echo $i.'*'.$j.'='.$i*$j;?> <!-- //php 代码 -->
				</td>   <!-- //HTML 代码 -->
			<?php }?><!-- //php 代码 -"} " 包含在<?php ?> -->
		</tr>    <!-- //HTML 代码 -->
	<?php }?>  <!-- //php 代码 -->
 </table>    <!-- //HTML 代码 -->


  //99乘法表--替代语法 

 <table border=1>    <!-- //HTML 代码 -->
	<?php for($i=1;$i<10;$i++):?>  <!-- //php 代码 --"for($i=1;$i<10;$i++){ " 包含在<?php ?>  -->
		<tr>                 <!-- //HTML 代码 -->
			<?php for($j=1;$j<$i;$j++):?> <!-- //php 代码 -->
				<td>             <!-- //HTML 代码 -->
					<?php echo $i.'*'.$j.'='.$i*$j;?> <!-- //php 代码 -->
				</td>   <!-- //HTML 代码 -->
			<?php endfor;?><!-- //php 代码 -"} " 包含在<?php ?> -->
		</tr>    <!-- //HTML 代码 -->
	<?php endfor;?>  <!-- //php 代码 -->
 </table>    <!-- //HTML 代码 -->