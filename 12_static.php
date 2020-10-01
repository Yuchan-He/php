<?php
#https://blog.csdn.net/mochu7777777/article/details/105416863

Class Test{
	public $a=2;
	private $b=3;
	public static $c=4;
	public function sum(){
		#$sum=$a+$b;  Undefined variable
		$sum=$this->a+$this->b;

		echo $sum;
	}
	
	/* syntax error, unexpected 'Class' (T_CLASS),
	public Class Test2{

	}
	*/
}

$test=new Test();
echo $test->a;
#echo $test->b;  : Cannot access private property Test::$b
echo $test->sum();

echo '<hr/>';

Class Test2{
	public $a=2;
	private $b=3;
	public static $c=4;
	public static function sum(){
		#$sum=$a+$b;  Undefined variable
		#$sum=$this->a+$this->b; Uncaught Error: Using $this when not in object context 
		#$sum=self::$a+self::$b;
		$c3=self::$c*3;
		echo $c3;

		#static 以外の変数の訪問方、先にインスタントする。
		echo '<br/>';
		$test2=new Test2();
		echo $test2->a;
		#echo $sum;
	}
}

echo Test2::$c;
$test2=new Test2();
echo $test2->a;
#echo Test2::sum();  Uncaught Error: Using $this when not in object context 
echo Test2::sum();
