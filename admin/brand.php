<?php

if (!defined('APP_IN')) exit('Access Denied');

//当前模块
$m_name = '品牌管理';
//允许操作
$ac_arr = array('list'=>'品牌列表','add'=>'添加品牌','edit'=>'编辑品牌','del'=>'删除品牌','bulkdel'=>'批量删除','bulksort'=>'更新排序','sign'=>'标记品牌','addfirst'=>'增加一级品牌','addsecond'=>'增加二级品牌','editsecond'=>'编辑一级品牌','addthird'=>'增加三级品牌','editthird'=>'编辑二级品牌','delfirst'=>'删除一级品牌','delsecond'=>'删除二级品牌');
$match_arr = array('A','B','C','D','F','G','H','J','K','L','M','N','O','P','Q','R','S','T','W','X','Y','Z');

//当前操作

$ac = isset($_REQUEST['a']) && isset($ac_arr[$_REQUEST['a']]) ? $_REQUEST['a'] : 'default';
$sel_key = isset($_REQUEST['k']) && in_array($_REQUEST['k'],$match_arr) ? $_REQUEST['k'] : 'All';
$tpl->assign( 'mod_name', $m_name );
$tpl->assign( 'ac_arr', $ac_arr );
$tpl->assign( 'ac', $ac );

//页码
$page_g = isset($_REQUEST['page']) ? intval($_REQUEST['page']) : 1;
$tpl->assign( 'page_g', $page_g );

//列表
if ($ac == 'list')
{
    $where = ' brand_mark="A" ';
    //搜索条件
	$pagesize = 0;
    if ($sel_key != 'All' and $sel_key)
    {
		$pagesize = 100;
        $where = " brand_mark = '".$sel_key."'";
    }
    include(INC_DIR.'Page.class.php');
    $Page = new Page($db->tb_prefix.'brand',$where,'*',$pagesize,'brand_mark');
    $list = $Page->get_data();
	$page = $Page -> page;
    foreach($list as $key => $value){
        $subbrandlist = $db->row_select('series','brand_id = '.$value['brand_id'],' distinct(series_groupname)');
		foreach($subbrandlist as $subkey => $subvalue){
			 $subsubbrandlist = $db->row_select('series','series_groupname = "'.$subvalue['series_groupname'].'" and brand_id='.$value['brand_id']);
			 $subbrandlist[$subkey]['subbrands_list']=$subsubbrandlist;
		}
        $list[$key]['brands_list']=$subbrandlist;
    }

    $button_basic = $Page->button_basic();
    $button_select = $Page->button_select();
    $tpl->assign( 'sel_key',	$sel_key );
    $tpl->assign( 'match_arr',	$match_arr );
    $tpl->assign( 'button_basic', $button_basic );
    $tpl->assign( 'button_select', $button_select );
    $tpl->assign( 'brandlist', $list );
	$tpl -> assign('page', $page);
    $tpl->display( 'admin/brand_list.html' );
    exit;
}
//单条删除
elseif ($ac == 'del')
{
    $series_id = isset($_GET['id']) ? intval($_GET['id']) : showmsg('缺少ID',-1);
    $rs = $db->row_delete('series',"series_id=$series_id");
}
elseif ($ac == 'delfirst')
{
    $brand_id = isset($_GET['id']) ? intval($_GET['id']) : showmsg('缺少ID',-1);
    $rs = $db->row_delete('brand',"brand_id=$brand_id");
}
elseif ($ac == 'delsecond')
{
    $seriesname = isset($_GET['seriesname']) ? $_GET['seriesname'] : showmsg('缺少seriesname',-1);
    $rs = $db->row_delete('series',"series_groupname='".$seriesname."'");
}
//批量删除
elseif ($ac == 'bulkdel')
{
    if (empty($_POST['bulkid'])) showmsg('没有选中任何项',-1);
    $str_id = return_str_id($_POST['bulkid']);
    $rs = $db->row_delete('brand',"b_id in($str_id)");
}
// 标记
elseif ($ac == 'sign') {
	$signid  = intval($_GET['signid']);
	$rs = $db -> row_update('brand', array('sign' => $signid ), "b_id=" . intval($_GET['id']));
} 
//批量排序
elseif ($ac == 'bulksort')
{
    if (empty($_POST['bulkid'])) showmsg('没有选中任何项',-1);
    foreach ($_POST['bulkid'] as $k => $v)
    {	
        $rs = $db->row_update('brand',array('orderid'=>$_POST['orderid'][$v]),"b_id=".intval($v));
    }
}
//添加
elseif ($ac == 'addfirst')
{
    //添加或修改
    if (submitcheck('a'))
    {
        $arr_not_empty = array('b_name'=>'品牌名称不可为空');
        can_not_be_empty($arr_not_empty,$_POST);
        $post = post('brand_name','brand_mark');
		$post['brand_name'] = $_POST['b_name'];
		$post['brand_series']=$_POST['brand_series'];
		$post['brand_mark'] = getinitial($_POST['b_name']);
        $rs = $db->row_insert('brand',$post);  
    }
    //转向添加或修改页面
    else
    {
		$brand=array();
		$brand['b_parentname']='根品牌';
		$tpl->assign( 'brand', $brand );
        $tpl->assign( 'ac', $ac );
        $tpl->display( 'admin/add_brand.html' );
        exit;
    }
}
//添加
elseif ($ac == 'addsecond' || $ac == 'editsecond')
{
    //添加或修改
    if (submitcheck('a'))
    {
        $arr_not_empty = array('b_name'=>'品牌名称不可为空');
        can_not_be_empty($arr_not_empty,$_POST);
        $post = post('series_groupname','brand_id');
		$post['series_groupname']=$_POST['b_name'];
		$post['brand_id']=$_POST['id'];
        if ($ac == 'addsecond')
        {
            $rs = $db->row_insert('series',$post);
        }
        else
        {
			$post=post('brand_name','brand_series');
			$post['brand_name']=$_POST['b_name'];
			$post['brand_series']=$_POST['brand_series'];
            $rs = $db->row_update('brand',$post,"brand_id=".intval($_POST['id']));
        }
    }
    //转向添加或修改页面
    else
    {
		$data=$db->row_select_one('brand','brand_id='.intval($_GET['id']));
        if (empty($_GET['id'])){
            $brand = array('brand_id'=>'','brand_name'=>'','brand_mark'=>'','b_parentname'=>'根品牌');
	    }
        else{
            if($ac == "addsecond"){
                $brand = array('brand_id'=>'','brand_name'=>'','brand_mark'=>'','b_parentname'=>$data['brand_name'],'b_id'=>$data['brand_id']);
			}
            else{
                    $brand['b_parentname'] = '根品牌';
					$brand['b_name']=$data['brand_name'];
					$brand['brand_series']=$data['brand_series'];
            }
				    $brand['b_id']=$data['brand_id'];
        }
        $tpl->assign( 'brand', $brand );
        $tpl->assign( 'ac', $ac );
        $tpl->display( 'admin/add_brand.html' );
        exit;
    }
}
//添加
elseif ($ac == 'addthird' || $ac == 'editthird')
{
    //添加或修改
    if (submitcheck('a'))
    {
        $arr_not_empty = array('b_name'=>'品牌名称不可为空');
        can_not_be_empty($arr_not_empty,$_POST);
        $post = post('series_groupname','brand_id','series_name');
		$post['series_groupname']=$_POST['seriesname'];
		$post['series_name']=$_POST['b_name'];
		$post['brand_id']=$_POST['id'];
        if ($ac == 'addthird')
        {
            $rs = $db->row_insert('series',$post);
        }
        else
        {
            $rs = $db->row_update('series',array('series_groupname'=>$_POST['b_name']),"series_groupname='".$_POST['seriesname']."'");
        }
    }
    //转向添加或修改页面
    else
    {
		$brandsecond=$db->row_select('series','series_groupname="'.$_GET['seriesname'].'"');
        if (empty($_GET['seriesname'])){
            $brand = array('series_id'=>'','series_name'=>'','series_groupname'=>'');
        }
        else{
			$brandfirst=$db->row_select_one('brand','brand_id='.$brandsecond[0]['brand_id']);
            $brand=array();
            if($ac == "addthird"){
            $brand = array('series_id'=>'','series_name'=>'','series_groupname'=>'','b_parentname'=>$_GET['seriesname']);
            }
            else{	 
					$brand['b_name']=$_GET['seriesname'];
				    $brand['b_parentname'] = $brandfirst['brand_name'];
            }
				    $brand['b_id']=$brandfirst['brand_id'];
					$brand['seriesname']=$_GET['seriesname'];
        }
        $tpl->assign( 'brand', $brand );
        $tpl->assign( 'ac', $ac );
        $tpl->display( 'admin/add_brand.html' );
        exit;
    }
}
//添加
elseif ($ac == 'add' || $ac == 'edit')
{
    //添加或修改
    if (submitcheck('a'))
    {
        $arr_not_empty = array('b_name'=>'品牌名称不可为空');
        can_not_be_empty($arr_not_empty,$_POST);
     //   foreach (array('b_name','b_keyword') as $v)
//        {
//            $_POST[$v] = htmlspecialchars($_POST[$v]);
//        }
        $post = post('series_name');
		$post['series_name']=$_POST['b_name'];
		//$post['mark'] = getinitial($_POST['b_name']);
	//	if(empty($post['b_type'])) $post['b_type']=0;
//		if(!empty($_FILES['upload']['name'])){
//            $newname = time();
//            $post['pic'] = upload_pic($newname,1,'brand/');
//        }
        if ($ac == 'add')
        {
            $rs = $db->row_insert('series',$post);
        }
        else
        {
            $rs = $db->row_update('series',$post,"series_id=".intval($_POST['id']));
        }
    }
    //转向添加或修改页面
    else
    {
        if (empty($_GET['id'])){
            $data = array('series_id'=>'','series_name'=>'','series_groupname'=>'','brand_id'=>'');
        }
        else{
            $data = $db->row_select_one('series',"series_id=".intval($_GET['id']));
            if($ac == "add"){
                $data = array('series_id'=>'','series_name'=>'','series_groupname'=>'','brand_id'=>'');
            }else{
                $data['b_parentname'] = $data['series_groupname'];
				$data['b_id'] = $data['series_id'];
				$data['b_name'] = $data['series_name'];
			}
        }
        $tpl->assign( 'brand', $data );
        $tpl->assign( 'ac', $ac );
        $tpl->display( 'admin/add_brand.html' );
        exit;
    }
}
//默认操作
else
{
    showmsg('非法操作',-1);
}

showmsg($ac_arr[$ac].($rs ? '成功' : '失败'),ADMIN_PAGE."?m=$m&a=list&page=".$page_g);
?>