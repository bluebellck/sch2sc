<?php
/*
 本软件版权归作者所有,在投入使用之前注意获取许可
 作者：北京市普艾斯科技有限公司
 项目：simcms_锐车1.0
 电话：010-58480317
 Q  Q: 228971357
 网址：http://www.simcms.net
 simcms.net保留全部权力，受相关法律和国际公约保护，请勿非法修改、转载、散播，或用于其他赢利行为，并请勿删除版权声明。
*/
if (!defined('APP_IN')) exit('Access Denied');
include(INC_DIR . 'html.func.php');
$tpl -> assign('menustate', 5);

if($settings['version']==3){
	// 城市选择
	if (!empty($_COOKIE['city'])) {
		$citydata = $db -> row_select_one('area', "id='" . $_COOKIE['city'] . "'", 'parentid');
		$select_province = select_make($citydata['parentid'], $commoncache['provincelist'], "请选择省份");
		$array_city = arr_city($citydata['parentid']);
		$select_city = select_make($_COOKIE['city'], $array_city, "请选择城市");
	} else {
		$array_city = array();
		$select_province = select_make('', $commoncache['provincelist'], "请选择省份");
		$select_city = select_make('', $array_city, "请选择城市");
	} 
	$tpl -> assign('selectprovince', $select_province);
	$tpl -> assign('selectcity', $select_city);
}

if (submitcheck('action'))
{
    //不可为空
    $arr_not_empty = array('p_contact_name'=>'请输入联系人','p_contact_tel'=>'请输入您的联系电话');
    can_not_be_empty($arr_not_empty,$_POST);
   
   if (trim($_POST['authcode']) != $_SESSION['authcode']) showmsg('验证码不正确',-1);
	
	$post = post('aid', 'cid','p_brand','p_subbrand','p_subsubbrand','p_allname','p_model','p_price','p_age','p_kilometre','p_details','p_contact_name','p_contact_tel');
	
	if($settings['version']==3){
		$post['aid'] = intval($_POST['aid']);
		$post['cid'] = intval($_POST['cid']);
	}
	else{
		$post['aid'] = 0;
		$post['cid'] = 0;
	}

	$post['p_brand']    = intval($post['p_brand']);
	$post['p_subbrand']	= intval($post['p_subbrand']);
	$post['p_subsubbrand'] = intval($post['p_subsubbrand']);
	$post['p_allname'] = "";
	if(!empty($post['p_subbrand'])){
		$bname = $commoncache['brandlist'][$post['p_brand']];
		$subbname = arr_brandname($post['p_subbrand']);
		$compareword = strstr($subbname,$bname);
		if(!empty($compareword)){
			$post['p_allname'] .= arr_brandname($post['p_subbrand']);
		}
		else{
			$post['p_allname'] .= $bname ." ".arr_brandname($post['p_subbrand']);
		}
	}
	if(!empty($post['p_subsubbrand'])){
		$post['p_allname'] .= " ".arr_brandname($post['p_subsubbrand']);
	}
	$post['p_model']		= intval($post['p_model']);
	$post['p_price']		= sprintf("%0.2f",$post['p_price']);
	$post['p_age']			= intval($post['p_age']);
	$post['p_contact_name'] = trim($post['p_contact_name']);
    $post['p_contact_tel']	= trim($post['p_contact_tel']);
    $post['p_kilometre']	= trim($post['p_kilometre']);
	$post['p_details']		= htmlspecialchars($post['p_details']);
	
	$post['p_addtime'] = TIMESTAMP;

	if(!empty($_SESSION['USER_ID'])){
		$post['uid'] = $_SESSION['USER_ID'];
		$userinfo = $db -> row_select_one('member', "id={$_SESSION['USER_ID']}");
		if($userinfo['isdealer']==2 and $userinfo['ischeck']==1){
			$post['isshow'] = 1;
		}
		else{
			$post['isshow'] = 0;
		}
	}
	else{
		$post['uid'] = 0;
		$post['isshow'] = 0;
	}

    $db->row_insert('buycars',$post);
	if($post['isshow'] == 1){
		$insertid = $db -> insert_id();
		html_qiugoucars($insertid);
	}
	showmsg('您的信息已提交成功！',-1);
	
}
$tpl -> display('default/' . $settings['templates'] . '/buy.html');
?>