<?php

if (!defined('APP_IN')) exit('Access Denied');

// 品牌选择
if (!empty($_GET['ajax']) && isset($_GET['bid'])) {
	header('Content-Type:text/plain; charset=utf-8');
	$brandlist = "<option value='' selected>请选择子品牌</option>";
	$list = $db -> row_select('brand', "b_parent='" . $_GET['bid'] . "'");
	if($list) {
		foreach($list as $key => $value) {
			$brandlist .= "<option value=" . $value['b_id'] . ">" . $value['b_name'] . "</option>";
		} 
	} 
	echo $brandlist;
	exit;
} 

//当前模块
$m_name = '品牌管理';
//允许操作
$ac_arr = array('list'=>'品牌列表','add'=>'添加车型','edit'=>'编辑车型','del'=>'删除品牌','bulkdel'=>'批量删除','bulksort'=>'更新排序','sign'=>'标记品牌','editcarstyle'=>'编辑款式');
$match_arr = array('A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z','All');

//当前操作

$ac = isset($_REQUEST['a']) && isset($ac_arr[$_REQUEST['a']]) ? $_REQUEST['a'] : 'default';
$sel_key = isset($_REQUEST['k']) && in_array($_REQUEST['k'],$match_arr) ? $_REQUEST['k'] : 'All';
$tpl->assign( 'mod_name', $m_name );
$tpl->assign( 'ac_arr', $ac_arr );
$tpl->assign( 'ac', $ac );

//列表
if ($ac == 'list')
{
	if(!empty($_GET['p_subbrand'])){
	   $where='series_id='.$_GET['p_subbrand'];
	   $list = $db -> row_select('styles', $where);
	   foreach($list as $key => $value){
		   	 $subbrandlist=$db ->row_select_one('series','series_id='.$value['series_id']);
			 $list[$key]['brandname']=$subbrandlist['series_groupname'];
			$list[$key]['seriesname']=$subbrandlist['series_name'];			
		}
		$tpl->assign( 'types', 1 );
		$select_brand = select_make($list[0]['brand_id'], $commoncache['markbrandlist'], '请选择品牌');
		$select_subbrand = select_subbrand(intval($_GET['p_subbrand']));
		$tpl -> assign('select_brand', $select_brand);
		$tpl -> assign('select_subbrand', $select_subbrand);
	}
	else{
		$where = '1=1';
		include(INC_DIR.'Page.class.php');
		$Page = new Page($db->tb_prefix.'styles',$where,'*',30,'styles_id');
		$list = $Page->get_data();
		$page = $Page -> page;
		foreach($list as $key => $value){
			$sublist=$db->row_select_one('series','series_id='.$value['series_id']);
			$list[$key]['brandname']=$sublist['series_groupname'];			
			$list[$key]['seriesname']=$sublist['series_name'];			
		}
		$tpl->assign( 'types', 2 );
		$button_basic = $Page->button_basic();
		$button_select = $Page->button_select();
		$tpl->assign( 'button_basic', $button_basic );
		$tpl->assign( 'button_select', $button_select );
		//$tpl -> assign('select_brand', $select_brand);
		$select_subbrand = select_subbrand(0);
		$tpl -> assign('select_brand', $select_brand);
		$tpl -> assign('select_subbrand', $select_subbrand);
	}
	
    $tpl->assign( 'sel_key',	$sel_key );
    $tpl->assign( 'match_arr',	$match_arr );
    $tpl->assign( 'brandlist', $list );
    $tpl->display( 'admin/carmodel_list.html' );
	print_r($brandlist);
    exit;
}
//单条删除
elseif ($ac == 'del')
{
    $s_id = isset($_GET['styles_id']) ? intval($_GET['styles_id']) : showmsg('缺少ID',-1);
    $rs = $db->row_delete('styles',"styles_id=$styles_id");
}
//批量删除
elseif ($ac == 'bulkdel')
{
    if (empty($_POST['bulkid'])) showmsg('没有选中任何项',-1);
    $str_id = return_str_id($_POST['bulkid']);
    $rs = $db->row_delete('brand',"b_id in($str_id)");
}
//批量排序
elseif ($ac == 'bulksort')
{
    if (empty($_POST['bulkid'])) showmsg('没有选中任何项',-1);
    foreach ($_POST['bulkid'] as $k => $v)
    {
        $rs = $db->row_update('styles',array('orderid'=>$_POST['orderid'][$v]),"b_id=".intval($v));
    }
}
//添加
elseif ($ac == 'add' || $ac == 'edit')
{
    //添加或修改
    if (submitcheck('a'))
    {	
          $arr_not_empty = array('styles_year'=>'款式名称不可为空','styles_name'=>'车型名称不可为空');
          can_not_be_empty($arr_not_empty,$_POST);
        if ($ac == 'add')
        {
			$post=post('brand_id','series_id','styles_year','styles_name');
			$post['brand_id']=$_POST['p_brand'];
			$post['series_id']=$_POST['p_subbrand'];
			$rs = $db->row_insert('styles',$post);
        }
    }
    //转向添加或修改页面
    else 
    {
		    $select_brand = select_make(0, $commoncache['markbrandlist'], '请选择品牌');
		    $tpl->assign( 'ac', $ac );
		    $tpl -> assign('select_brand', $select_brand);
            $tpl->display( 'admin/add_carmodel.html' );
            exit;	
    }
}
//修改款式
elseif ($ac == 'editcarstyle')
{
    if (submitcheck('a'))
    {	
        $arr_not_empty = array('styles_year'=>'款式名称不可为空','styles_name'=>'车型名称不可为空');
        can_not_be_empty($arr_not_empty,$_POST);
		$post=post('styles_year','styles_name');
		$post['styles_year']=$_POST['styles_year'];
		$post['styles_name']=$_POST['styles_name'];
		$rs = $db->row_update('styles',$post,'styles_id='.$_POST['styles_id']);	        
    }
    //转向修改页面
    else 
    {
            $data4 = $db->row_select_one('styles',"styles_id=".$_GET['styles_id']);
			$tpl->assign( 'subsubsublist', $data4 );
		    $tpl->assign( 'ac', $ac );
            $tpl->display( 'admin/edit_carstyle.html' );
            exit;	
    }
}
//默认操作
else
{
    showmsg('非法操作',-1);
}
showmsg($ac_arr[$ac].($rs ? '成功' : '失败'),ADMIN_PAGE."?m=$m&a=list");
?>