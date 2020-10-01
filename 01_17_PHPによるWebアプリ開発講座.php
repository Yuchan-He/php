<?php 

echo '<h4>文字列の結合演算 </h4>';
//どっと｜dot|・｜が結合演算の演算子
//直接出力
echo 'hello' . 'php world'; 
echo '<br/>';
//変数で出力,備考を隣をつくと、エラーがでる
$a='hello'. 'php world';
echo $a;
//小数型の計算の誤差
echo '<br/>';
echo 100-99.6;
echo '<hr/>';

echo '<h4>スカラ（scalar）型*4:文字列string、整数型int,小数型float,論理値bool</h4>';
//演算和
echo '<br/>';
echo TRUE || FALSE;
echo TRUE or FALSE;
//演算積
echo '<br/>';
echo TRUE && FALSE;
var_dump(TRUE && FALSE);
echo TRUE and FALSE;
echo '<br/>';
echo TRUE && TRUE;
echo TRUE and TRUE;
//否定
echo '<br/>';
echo !TRUE;
echo !FALSE;
echo '<hr/>';

echo '<h4>ぬる型null：何もできない、用途としては、【無】を表現するもの</h4>';
$b=NULL;
//echo値だけ出力する、HTMLへの表示するために使う。
echo $b;
//var_dump 値と型がセットで出力する、プログラミングのデバッグするときに使う。
var_dump($b);

echo '<h4>キャスタ演算＝型変換：暗黙な変換がある</h4>';
$c=(string)10;
//var_dump 値と型がセットで出力する,stringの文字数も表示する。
var_dump($c);

echo '<h4>if文</h4>';
$x=1;
if($x>1){
	echo 'TRUE';
}
else{
echo 'FALSE';}

echo '<br/>';
if($x>1){
	echo '>1';
}
elseif($x==1){
echo '1';}
else{echo '<1';}

echo '<h4>連想配列</h4>';

$arr1=[
	'水'=>'雪',
	'火'=>'炎',
	'木'=>'森'
];
echo $arr1['水'];
var_dump($arr1);
//echo $arr1; error
//echo '水';  error

//連想配列の一部を書き換える
echo '<br/>';
$arr1['水']='雨';
echo $arr1['水'];

//foreachで取り出す場合
//$array as $key=>$value
 foreach($arr1 as $a=>$b){
 	echo "{$a}属性は{$b}です";
 	echo '<br/>';
 }

//連想配列に最後に元素を追加する
array_push($arr1,'土','光');
//連想配列に先頭に元素を追加する
array_unshift($arr1,'空気','光');
var_dump($arr1);
//連想配列の最初のデータを削除する
$a=array_shift($arr1);
//連想配列の最初のデータを削除する、その削除のもん表示する
echo '<br/>';
var_dump($a);

//連想配列の最後のデータを削除する
$a=array_pop($arr1);
//連想配列の最後のデータを削除する、その削除のもん表示する
echo '<br/>';
var_dump($a);

//一個しか追加しないとき
echo '<br/>';
$arr1[]='星';
var_dump($arr1);
echo '<br/>';
//配列の組み合わせ
$arr2=[
1,
2,
'星'
];

$merged=array_merge($arr1,$arr2);
var_dump($merged);

echo '<h4>control_structures</h4>';

echo '<h5>control_structures-for</h5>';

for($a=1;$a<=10;$a=$a+2){
	//まずデータのタイプを選定したほうがいい、システムの暗黙ルールではなくて
	$a=(string)$a;
	echo $a.'いいお天気';
	echo '<br/>';
	//""の中に変数を認識することができる、システムが認識できるように、空白か、｛｝を追加する
	echo "$a いいお天気";
	echo '<br/>';
	//""の中に変数を認識することができる、システムが認識できるように、空白か、｛｝を追加する
	echo "{$a}いいお天気";
	echo '<br/>';
};

//データの型が指定しないと、配列なerrorが出てくる
// $h=[1,2,3];
//echo  "{$h}です。";

echo '<h5>control_structures-break,</h5>';
	//配列にマイナスがあるかどうか
 	$arr=[1,2,55,-45,16,-10];
 	//配列の要素の数を取得
 	$num=count($arr);
 	$info='マイナスがない';

	for ($i=0;$i<$num;$i++){
		$value=$arr[$i];
		if($value<0){
			$info='マイナスがある';
			break;
		}
	}
	echo $info;

	//配列にマイナスがあるかどうか_foreach
	echo '<br/>';
	foreach ($arr as $a ){
		if($a<0){
		echo $a;
		echo '<br/>';
	    }
	}


echo '<h5>control_structures-continue,</h5>';
//continueを使うかどうか、偶数の数が多い場合、ループで偶数かどうか判断するようより、ループを飛ばして偶数じゃない、直接合計したほうがいい
//偶数だけを合計する。continue ないとき

 	$arr=[4,2,55,45,16,10];
 	//配列の要素の数を取得
 	$num=count($arr);
 	$sum=0;

	for ($i=0;$i<$num;$i++){
		$value=$arr[$i];
		if($value%2===1){
			//continue;
		}
		$sum+=$value;
	}
	echo $sum;

 //偶数だけを集計する。continue あるとき、ポイント：マイナスが入ると、MECEになってない
	echo '<br/>';
	$arr=[4,2,55,45,16,10];
 	//配列の要素の数を取得
 	$num=count($arr);
 	$sum=0;

	for ($i=0;$i<$num;$i++){
		$value=$arr[$i];
		//
		if($value%2===1){
			//偶数の場合だけ、continue,下のコードを実行し続ける。さもないと、ループを循環する
			continue;
		}
		$sum+=$value;
	}
	echo $sum;

	echo '<h5>control_structures-foreach</h5>';
	echo '<br/>';
	$arr4=[4,2,55,45,16,10];
	foreach($arr4 as $value){
		echo $value;
		echo '<br/>';
		}


 	echo '<h4>関数</h4>';
 	//例えば、arrayの数を数えるcount(),foreach(),abs()

 	//ユーザー関数関数の結果を「外」で出力する
 	function add($x,$y){
 		$z=$x+$y;
 		//関数の値を戻す
 		return $z;
 	}
 	//関数を使う
 	$sum=add(2,5);
 	//関数の結果を出力する
 	echo $sum;
 	echo '<br/>';

	//ユーザー関数関数の結果を「中」で出力する
	function add2($x,$y){
 		$z=$x+$y;
	//関数の中で直接出力する
 		echo $z;  	
 	}
 	//関数を使う
   add2(1,8);

   //PHPの実行順番で、最終的なデータを出力する
   	echo '<br/>';
   function add4($x,$y){
 		$z=$x+$y;
 		//関数の値を戻す
 		return $z;
 	}
 	//関数を使う
 	$sum=100;
 	$sum=add4(7,5);
 	//関数の結果を出力する
 	echo $sum;
 	echo '<br/>';

 	//【TABでインデントを調整する】表示したコードは同じなのに、syntax errorが出てくる

	function hi2($a,$b){
	$c=$a*$b;
//	　	$c=$a*$b;//error
	return $c;	
	}

	$f=hi2(3,4);
	echo $f;
 
//2つの数値を受け取り、大きい方の数を返す関数my_max()を作成せよ
	function my_max($a,$b){
	if($a>$b){
		return $a;
	}
	elseif($a<$b){
		return $b;
	}
	else {
		echo 'the equal';
	}
}

	$c=my_max(1,4);
	echo "{$c}\n";
	$c=my_max(4,4);
	echo "{$c}\n";
	$c=my_max(8,4);
	echo "{$c}\n";

//クラス｜classとオブジェクト｜object
//ものデータとふるまいから構成される。データがクラスで定義する。ふるまいはメソッド（関数）で定義する。
//クラス：アクセス修飾子：public,protected,private
//メソッド：コンストラクタ＝new classname();
	echo '<hr/>';
	class human{
		public $name;  //プロパティをクラスの外に公開するのはpublic
		protected $birthday;
		private $gender;//プロパティをクラスの外から隠すのはprivate--特に理由がなければ、privateにするのは吉
		publice function __construct($name,$birthday,$gender){
			$this->name=$name;
			$this->birthday=$birthday;
			$this->gender=$gender;
		}

		public function walk(){
			echo 'Walk<br/>';
		}
		public function eat(){
			echo 'Eat<br/>';
		}
	}

	$human=new human('TOM','1990.01.01','man'); //コンストラクタ＝new classname();

	$human->eat();
	$human->walk();