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

$output = "";
$index = 0;	//$_FILES 以文件name为数组下标，不适用foreach($_FILES as $index=>$file)
foreach($_FILES as $file){
	$upload_filename = 'upload_file' . $index;//对应index.html FomData中的文件命名
	$filename = $_FILES[$upload_filename]['name'];
	//获得文件扩展名
	$temp_arr = explode(".", $filename);
	$file_ext = array_pop($temp_arr);
	$file_ext = trim($file_ext);
	$file_ext = strtolower($file_ext);
	//新文件名
	$rand_str = rand(10000, 99999);
	$new_filename = date("YmdHis") . '_' . $rand_str . '.' . $file_ext;
	$new_filename_small = date("YmdHis") . '_' . $rand_str . '_small.' . $file_ext;

	//文件不存在才上传
	if(!file_exists($dir_base.$filename)) {
		$isMoved = false;  //默认上传失败
		$MAXIMUM_FILESIZE = 10* 1024 * 1024; 	//文件大小限制	1M = 1 * 1024 * 1024 B;
		$rEFileTypes = "/^\.(jpg|jpeg|gif|png){1}$/i"; 
		$rand_str = rand(10000, 99999);

	}else{
		$isMoved = true; //已存在文件设置为上传成功
	}
	if($isMoved){
		//输出图片文件<img>标签
		//注：在一些系统src可能需要urlencode处理，发现图片无法显示，
		//请尝试 urlencode($filename) 或 urlencode($filename)，不行请查看HTML中显示的src并酌情解决。
		header('Content-type: text/html; charset=UTF-8');
		$output .= "<img src='{$save_path}{$new_filename}' title='{$new_filename}' alt='{$new_filename}' width='230' height='180'/><input type='hidden' name='{$picname}' value='/{$save_path}{$new_filename}'>";
	}else {
		header('Content-type: text/html; charset=UTF-8');
		$output .= "上传错误";
	}
	$index++;
}
echo $output;