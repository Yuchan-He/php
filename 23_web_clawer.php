<?php
// 获取网页源码
$url = 'https://pluschina.co.jp/web';
$html = file_get_contents($url);

#$preg = '/<span class="salaryText">(.*)</span>/';
$preg = '/<h5>(.*)</h5>/';
preg_match_all($preg,$html,$arr);

print_r($arr);