<?php
//����phpqrcode���ļ�
include('phpqrcode.php'); 

// ��ά������
$data = 'http://www.imooc.com/view/54';
// ���ɵ��ļ���
$filename = 'erweima.png';
// ������L��M��Q��H
$errorLevel = 'L';
// ��Ĵ�С��1��10
$size = 4;
//����һ����ά���ļ�
QRcode::png($data, $filename, $errorLevel, $size, 2);
//�����ά�뵽�����
QRcode::png($data);
