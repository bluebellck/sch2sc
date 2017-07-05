<?php
include('common.inc.php');
include('index/page.php');

$m = isset($_GET['m']) && trim($_GET['m']) ? trim($_GET['m']) : 'index';

if(isMobile()){
	if (!file_exists('m/index/'.$m.'.php')) exit('error url');
	include('m/index/'.$m.'.php');
}else{
	if (!file_exists('index/'.$m.'.php')) exit('error url');
	include('index/'.$m.'.php');
}
?>