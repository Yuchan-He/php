<?php

echo '<h3>【PHP/MySQL入門】データベースからブログ内容を取り出して一覧表示しよう！ ~ブログアプリ作成~ #04</h3>';

echo '<h3>PDO</h3>';

//違うデータベース管理ソフトにより、PHPからの接続方法が違う
//＃mysqlに接続仕方
//MySQL=>mysql_connect();
//--建立连接
//1.主机地址：默认是自动连接端口
//mysql_connect(主机连接端口，sql用户名，sql用户密码)
//mysql_connect('localhost:3306',' root','Avant20180903');


//＃postgresqlに接続仕方
//PostgreSQL=>pg_connect();


//#どんなデータベースでも接続できる方法　－PDO
//$dsn:访问本地地址，访问数据库（不是数据中的table）
$dsn='mysql:host=localhost;dbname=world;charset=utf8';
$user='root';
$pass='Avant20180903';
//databaseが間違ってるか、どうかopt|optionのパラメータを設定する
//--errmodeを例外modeとして出力する。
//--接続がうまくいくかどうか、tryで試す。
try{
	$dbh=new PDO($dsn,$user,$pass,[PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION,]);
	echo '接続成功';
	//接続終了
	$dbh=null;
}catch(PDOException $e){
	echo '接続失敗'.$e->getMessage();
	//接続失敗の時、退出
	exit();
}

var_dump($dbh);



