<?php
header('content-type:text/html charset:utf-8');
$dir_base = "upload/image"; //文件上传根目录
$save_path = "";
//创建文件夹
if ($dir_base !== '') {
	$save_path .= $dir_base . "/";
	if (!file_exists($save_path)) {
		mkdir($save_path);
	}
}
$ymd = date("Ymd");
$save_path .= $ymd . "/";
if (!file_exists($save_path)) {
	mkdir($save_path);
}

//没有成功上传文件，报错并退出。
if(empty($_FILES)) {
	echo "上传错误";
	exit(0);
}

$picname = trim($_POST['picname']);

echo 1;