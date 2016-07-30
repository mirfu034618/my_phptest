<?php
//引入phpqrcode库文件
include('phpqrcode.php'); 

// 二维码数据
$data = 'http://www.imooc.com/view/54';
// 生成的文件名
$filename = 'erweima.png';
// 纠错级别：L、M、Q、H
$errorLevel = 'L';
// 点的大小：1到10
$size = 4;
//创建一个二维码文件
QRcode::png($data, $filename, $errorLevel, $size, 2);
//输入二维码到浏览器
QRcode::png($data);
