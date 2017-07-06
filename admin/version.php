<?php
if (!defined('APP_IN')) exit('Access Denied');
// 当前模块
$m_name = '版本列表管理';
// 允许操作
$ac_arr = array('list' => '版本列表','update'=>'切换版本');
// 当前操作
$ac = isset($_REQUEST['a']) && isset($ac_arr[$_REQUEST['a']]) ? $_REQUEST['a'] : 'default';

$array_cattype = array('1' => '内部分类', '2' => '外部链接');

/**
 * 递归删除栏目
 * @param  $catid 要删除的栏目id
 */

	$versiontype = isset($_GET['versiontype'])? intval($_GET['versiontype']):'';
	$array_versiontype = array('1' => '个人版本','2' => '团购版本','3' => '高级版本');
	$select_versiontype = select_make($versiontype, $array_versiontype, '版本类型');
	$tpl -> assign('select_versiontype', $select_versiontype);
// 列表
if ($ac == 'list') {

	$tpl -> display('admin/version_list.html');
	exit;
} 
else if($ac == 'update') {
	switch($versiontype) {
		case 1:
			 $rs = $db -> row_update('settings',array('v'=>$versiontype),"k='version'");
			break;
		case 2:
			 $rs = $db -> row_update('settings',array('v'=>$versiontype),"k='version'");
			break;
		case 3:
			 $rs = $db -> row_update('settings',array('v'=>$versiontype),"k='version'");
			break;
	   default:
	        $rs = $db -> row_update('settings',array('v'=>$versiontype),"k='version'");
	} 
	showmsg('应用成功', -1);
} 
// 默认操作
else {
	showmsg('非法操作', -1);
} 

showmsg($ac_arr[$ac] . ($rs ? '成功' : '失败'), ADMIN_PAGE."?m=$m&a=list");

?>