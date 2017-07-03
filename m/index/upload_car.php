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

		if ($_FILES[$upload_filename]['size'] <= $MAXIMUM_FILESIZE && 
			preg_match($rEFileTypes, strrchr($filename, '.'))) {	
			$isMoved = @move_uploaded_file ( $_FILES[$upload_filename]['tmp_name'], $save_path.$new_filename); //上传文件
			//生成缩略图
			$file_url = $save_path.$new_filename;
			$file_url_small = $save_path.$new_filename_small;
			copy($file_url,$file_url_small);
			require_once 'include/img.class.php';
			$settings = settings();
			$t = new ThumbHandler();
			$t -> setSrcImg($file_url);
			$t -> setDstImg($file_url);
			if($settings['imgwidth']==''||$settings['imgheight']==''){
				$t -> createImg(1000,1000);
			}
			else{
				$t -> createImg($settings['imgwidth'], $settings['imgheight']);
			}
			$ts = new ThumbHandler();
			$ts -> setSrcImg($file_url_small);
			$ts -> setDstImg($file_url_small);
			if($settings['thumbwidth']==''||$settings['thumbheight']==''){
				$ts -> createImg(300,300);
			}
			else{
			   $ts -> createImg($settings['thumbwidth'], $settings['thumbheight']); 
			}
			// 加水印
			if ($settings['water'] == 1 and $settings['waterpic']!="") {
				$ty = new ThumbHandler();
				$ty -> setMaskPosition($settings['position']);
				$ty -> setSrcImg($file_url);
				$ty -> setDstImg($file_url);
				$ty -> setMaskImg($settings['waterpic']);
				$ty -> createImg(100);
			}
		}
	}else{
		$isMoved = true; //已存在文件设置为上传成功
	}
	$index++;
}
echo $output;