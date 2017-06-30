<?php
include('common.inc.php');
include('index/page.php');

$m = isset($_GET['m']) && trim($_GET['m']) ? trim($_GET['m']) : 'index';

if (!file_exists('index/'.$m.'.php')) exit('error url');
if(isMobile()){
	include('m/index/'.$m.'.php');
}else{
	include('index/'.$m.'.php');
}
?>