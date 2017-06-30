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
if(!defined('APP_IN')) exit('Access Denied');

include('page.php');

$array_price = array('1' => '5万以下', '2' => '5-8万', '3' => '8-12万', '4' => '12-18万', '5' => '18-35万', '6' => '35-50万', '7' => '50万以上');
$array_age = array('1' => '1年以内', '2' => '2年以内', '3' => '3年以内', '4' => '4年以内', '5' => '5年以内', '6' => '6年以内', '6' => '6年以上');
$array_gas = array('1' => '1.0L以下', '2' => '1.0-1.4L', '3' => '1.4-1.6L', '4' => '1.6-2.0L', '5' => '2.0-3.0L', '6' => '3.0L以上');
$array_transmission = array('1' => '手动', '2' => '自动', '3' => '手自一体');
$array_kilometre = array('1' => '1万公里以下', '2' => '1-3万公里', '3' => '3-5万公里', '4' => '5-8万公里', '5' => '8-10万公里', '6' => '10万公里以上');
$array_month = array('01' => '01月', '02' => '02月', '03' => '03月', '04' => '04月', '05' => '05月', '06' => '06月', '07' => '07月', '08' => '08月', '09' => '09月', '10' => '10月', '11' => '11月', '12' => '12月');

//品牌选择
if (isset($_GET['ajax']) && intval($_GET['ajax'])==1 && isset($_GET['brand']) && intval($_GET['brand'])==1)
{	header('Content-Type:text/plain; charset=utf-8');
	$str = "<div class='comnav clearfix'><a href='javascript:void(0);' class='reback' id='reback'>返回</a>品牌</div><ul class='optionlist'>";
	$brand = $db -> row_select('brand', "b_parent=-1", 'b_id,b_name,mark', 0, 'mark asc');
	foreach ($brand as $k => $v) {
		$brand[$k]['b_name'] = $brand[$k]['mark'] . ' ' . $brand[$k]['b_name'];
		unset($brand[$k]['mark']);
	} 
	$list = get_array($brand, 'b_id', 'b_name');
	foreach($list as $key => $value){
		$str .= "<li><a href='javascript:void(0);'>".$value."</a><input type='hidden' name='id' value='".$key."'><input type='hidden' name='mod' value='brand'></li>";
	}
	$str .= "</ul>";
	echo $str;
	exit;
}

//车系选择
if (isset($_GET['ajax']) && intval($_GET['ajax'])==1 && isset($_GET['subbrand']) && intval($_GET['subbrand'])==1 && !empty($_GET['brandid']))
{	header('Content-Type:text/plain; charset=utf-8');
	$str = "<div class='comnav clearfix'><a href='javascript:void(0);' class='reback' id='reback'>返回</a>车系</div><ul class='optionlist'>";
	$brand = $db -> row_select('brand', "b_parent=".intval($_GET['brandid']), 'b_id,b_name', 0, 'orderid asc');
	foreach($brand as $key => $value){
		$subbrand = $db -> row_select('brand', "b_parent=".intval($value['b_id']), 'b_id,b_name', 0, 'orderid asc');
		foreach($subbrand as $k => $v){
			$str .= "<li><a href='javascript:void(0);'>".$value['b_name']."&nbsp;&nbsp;".$v['b_name']."</a><input type='hidden' name='id' value='".$v['b_id']."'><input type='hidden' name='mod' value='subbrand'></li>";
		}
	}
	$str .= "</ul>";
	echo $str;
	exit;
}

//级别选择
if (isset($_GET['ajax']) && intval($_GET['ajax'])==1 && isset($_GET['model']) && intval($_GET['model'])==1)
{	header('Content-Type:text/plain; charset=utf-8');
	$str = "<div class='comnav clearfix'><a href='javascript:void(0);' class='reback' id='reback'>返回</a>级别</div><ul class='optionlist'>";
	foreach($commoncache['modellist'] as $key => $value){
		$str .= "<li><a href='javascript:void(0);'>".$value."</a><input type='hidden' name='id' value='".$key."'><input type='hidden' name='mod' value='model'></li>";
	}
	$str .= "</ul>";
	echo $str;
	exit;
}

//价格选择
if (isset($_GET['ajax']) && intval($_GET['ajax'])==1 && isset($_GET['price']) && intval($_GET['price'])==1)
{	header('Content-Type:text/plain; charset=utf-8');
	$str = "<div class='comnav clearfix'><a href='javascript:void(0);' class='reback' id='reback'>返回</a>价格</div><ul class='optionlist'>";
	foreach($array_price as $key => $value){
		$str .= "<li><a href='javascript:void(0);'>".$value."</a><input type='hidden' name='id' value='".$key."'><input type='hidden' name='mod' value='price'></li>";
	}
	$str .= "</ul>";
	echo $str;
	exit;
}

//车龄选择
if (isset($_GET['ajax']) && intval($_GET['ajax'])==1 && isset($_GET['years']) && intval($_GET['years'])==1)
{	header('Content-Type:text/plain; charset=utf-8');
	$str = "<div class='comnav clearfix'><a href='javascript:void(0);' class='reback' id='reback'>返回</a>车龄</div><ul class='optionlist'>";
	foreach($array_age as $key => $value){
		$str .= "<li><a href='javascript:void(0);'>".$value."</a><input type='hidden' name='id' value='".$key."'><input type='hidden' name='mod' value='years'></li>";
	}
	$str .= "</ul>";
	echo $str;
	exit;
}

//里程选择
if (isset($_GET['ajax']) && intval($_GET['ajax'])==1 && isset($_GET['kilometre']) && intval($_GET['kilometre'])==1)
{	header('Content-Type:text/plain; charset=utf-8');
	$str = "<div class='comnav clearfix'><a href='javascript:void(0);' class='reback' id='reback'>返回</a>行驶里程</div><ul class='optionlist'>";
	foreach($array_kilometre as $key => $value){
		$str .= "<li><a href='javascript:void(0);'>".$value."</a><input type='hidden' name='id' value='".$key."'><input type='hidden' name='mod' value='kilometre'></li>";
	}
	$str .= "</ul>";
	echo $str;
	exit;
}

//上牌年份选择
if (isset($_GET['ajax']) && intval($_GET['ajax'])==1 && isset($_GET['year']) && intval($_GET['year'])==1)
{	header('Content-Type:text/plain; charset=utf-8');
	$str = "<div class='comnav clearfix'><a href='javascript:void(0);' class='reback' id='reback'>返回</a>上牌年份</div><ul class='optionlist'>";
	foreach($commoncache['yearlist'] as $key => $value){
		$str .= "<li><a href='javascript:void(0);'>".$value."</a><input type='hidden' name='id' value='".$key."'><input type='hidden' name='mod' value='year'></li>";
	}
	$str .= "</ul>";
	echo $str;
	exit;
}

//上牌月份选择
if (isset($_GET['ajax']) && intval($_GET['ajax'])==1 && isset($_GET['month']) && intval($_GET['month'])==1)
{	header('Content-Type:text/plain; charset=utf-8');
	$str = "<div class='comnav clearfix'><a href='javascript:void(0);' class='reback' id='reback'>返回</a>上牌月份</div><ul class='optionlist'>";
	foreach($array_month as $key => $value){
		$str .= "<li><a href='javascript:void(0);'>".$value."</a><input type='hidden' name='id' value='".$key."'><input type='hidden' name='mod' value='month'></li>";
	}
	$str .= "</ul>";
	echo $str;
	exit;
}
//二级品牌选择
if (!empty($_GET['ajax']) && !empty($_GET['brandid']))
{	header('Content-Type:text/plain; charset=utf-8');
	$brandlist = "<option value='' selected>请选择车系</option>";
	$list = $db->row_select('brand',"b_parent='".$_GET['brandid']."'");
	if($list){
		foreach($list as $key => $value){
			$brandlist .= "<optgroup label=".$value['b_name']." style='font-style: normal; background: none repeat scroll 0% 0% rgb(239, 239, 239); text-align: center;'></optgroup>";
			$sublist = $db->row_select('brand',"b_parent='".$value['b_id']."'");
			foreach($sublist as $subkey => $subvalue){
				$brandlist .= "<option value=".$subvalue['b_id'].">".$subvalue['b_name']."</option>";
			}
		}
	}
	echo $brandlist;
	exit;
}


//三级品牌选择
if (!empty($_GET['ajax']) && !empty($_GET['subbrandid']))

{	header('Content-Type:text/plain; charset=utf-8');
	$brandlist = "<option value='' selected>请选择款式</option>";
	$list = $db->row_select('brand',"b_parent='".$_GET['subbrandid']."'");
	if($list){
		foreach($list as $key => $value){
			$brandlist .= "<optgroup label='".$value['b_name']."' style='font-style: normal; background: none repeat scroll 0% 0% rgb(239, 239, 239); text-align: center;'></optgroup>";
			$sublist = $db->row_select('brand',"b_parent='".$value['b_id']."'");
			foreach($sublist as $subkey => $subvalue){
				$brandlist .= "<option value=".$subvalue['b_id'].">".$subvalue['b_name']."</option>";
			}
		}
	}
	echo $brandlist;
	exit;
}



//四级品牌选择
if (!empty($_GET['ajax']) && !empty($_GET['subsubbrandid']))

{	header('Content-Type:text/plain; charset=utf-8');
	$brandlist = "<option value='' selected>请选择款式</option>";
	$list = $db->row_select('brand',"b_parent='".$_GET['subsubbrandid']."'");
	if($list){
		foreach($list as $key => $value){
				$brandlist .= "<option value=".$value['b_id'].">".$value['b_name']."</option>";
		}
	}
	echo $brandlist;
	exit;
}

//城市选择
if (!empty($_GET['ajax']) && isset($_GET['cityid']))
{	header('Content-Type:text/plain; charset=utf-8');
	$provincelist = "<option value='' selected>请选择城市</option>";
	$list = $db->row_select('area',"parentid='".$_GET['cityid']."'");
	if($list){
		foreach($list as $key => $value){
			$provincelist .= "<option value=".$value['id'].">".$value['name']."</option>";		
		}
	}
	echo $provincelist;
	exit;

}


//城市选择(搜索页面)
if (!empty($_GET['ajax']) && isset($_GET['searchcityid']))
{	header('Content-Type:text/plain; charset=utf-8');
	$citylist = "";
	$list = $db->row_select('area',"parentid='".$_GET['searchcityid']."'");
	if($list){
		foreach($list as $key => $value){
			$citylist .= "<option value='c_".$value['id']."'>".$value['name']."</option>";
		}
	}
	echo $citylist;
	exit;
}

?>