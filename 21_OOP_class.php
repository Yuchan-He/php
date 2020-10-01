<?php

//空类
class Nothing{

}
$n=new Nothing();
var_dump($n);

echo '<hr>';
//类成员
class Saler{
  	# 属性
  	public $count = 100;
  	protected $discount = 0.8;
  	private $money = 100;
    
    public function sum(){
        var_dump($this);
		//$this->count,$this->discount,$this->money;	
		echo $this->count*$this->discount;
    }	

    public function getAll(){
        var_dump($this);
        echo $this->count,$this->discount,$this->money;	
    }					
}
$s = new Saler();
$s->getAll();

echo '<br>';
$s = new Saler();
$s->sum();

echo '<hr>';

echo '<h3>使用construct初始化值</h3>';
class Saler2{
  	# 属性
  	public $count;				
  	private $money;
    
    # 构造方法：初始化属性
    public function __construct($count,$money){
        $this->count = $count;
        $this->money = $money;
    }
}


//$s = new Saler2(100,100);
new Saler2(100,100);

$s = new Saler2(100,100); //有两个参数，数组型

//echo $s;  --Fatal error: Uncaught Error: Object of class Saler2 could not be converted to string
var_dump($s);
echo '<pre>';
print_r($s);

echo '<h3>不使用construct初始化值</h3>';
class Saler3{
  	# 属性
  	public $count;				
  	private $money;
    
    # 构造方法：初始化属性
    public function no_construct($count,$money){
        $this->count = $count;
        $this->money = $money;
    }
}


//$s = new Saler2(100,100);
$s=new Saler3;
$s->no_construct(100,100);

//echo $s;  --Fatal error: Uncaught Error: Object of class Saler2 could not be converted to string
var_dump($s);
echo '<pre>';
print_r($s);


