<?php
if (!defined('APP_IN')) exit('Access Denied');

if (submitcheck('action'))
{
    //不可为空
    $arr_not_empty = array('p_brand'=>'请选择品牌','p_subbrand'=>'请选择子品牌','p_contact_tel'=>'请输入您的联系电话');
    can_not_be_empty($arr_not_empty,$_POST);
   
    if (trim($_POST['authcode']) != $_SESSION['authcode']) showmsg('验证码不正确',-1);
	
	$post = post('p_brand','p_subbrand','p_subsubbrand','p_year','p_month','p_kilometre','p_contact_tel');
     
	if(isset($_COOKIE['city'])){
		$post['cid'] = $_COOKIE['city'];
		if($_COOKIE['city']!=0){
			$area = $db->row_select_one('area','id='.$_COOKIE['city']);
			$post['aid'] = $area['parentid'];
		}
	}

    $post['p_brand'] =intval($post['p_brand']);
    $post['p_subbrand'] =intval($post['p_subbrand']);
	$post['p_subsubbrand'] = intval($_POST['p_subsubbrand']);
	$post['p_allname'] = "";

		if(!empty($post['p_brand'])){
			$bname = arr_brandname($post['p_brand']);
			$post['p_allname'] .= $bname;
		}
		if(!empty($post['p_subbrand'])){
			$subname = arr_subbrandname($post['p_subbrand']);
			$subsubname=arr_subsubbrandname($post['p_subsubbrand']);
			$compareword = strstr($subsubname,$subname);
			if(!empty($compareword)){
				$post['p_allname'] .= $subsubname;
			}
			else{
				$post['p_allname'] .= $subname ." ".$subsubname;
			}
		}

	$post['p_kilometre'] =trim($post['p_kilometre']);
	$post['p_year'] = intval($post['p_year']);
	$post['p_month'] = intval($post['p_month']);
	$post['p_contact_tel']  = $post['p_contact_tel'];

	$post['p_addtime'] = TIMESTAMP;

    $rs = $db->row_insert('maicar',$post);


	showmsg('您的信息已成功提交！', "index.php?m=maicar");
}
else{
	$tpl -> assign('menustate', 3);

	$tpl -> display('default/' . $settings['templates'] . '/maicar.html');
}
?>