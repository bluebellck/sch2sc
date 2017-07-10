<?php
if (!defined('APP_IN')) exit('Access Denied');

$arr_p = array('1' => '3万以下', '2' => '3-5万', '3' => '5-8万', '4' => '8-12万', '5' => '12-18万', '6' => '18-24万', '7' => '24-35万', '8' => '35-50万', '9' => '50-100万', '10' => '100万以上');
$tpl -> assign('arr_price', $arr_p);
$arr_a = array('1' => '1年以内', '2' => '2年以内', '3' => '3年以内', '4' => '4年以内', '5' => '5年以内', '6' => '6年以内', '7' => '6年以上');
$tpl -> assign('arr_age', $arr_a);

$carlist['sjcar'] = get_carlist($_COOKIE['city'],"isrecom=1 and issell=0 and isshow=1 and uid in( select id from " . $db_config['TB_PREFIX'] . "member where isdealer=2)", '20', 'listtime desc');
foreach($carlist['sjcar'] as $key => $value){
	$carlist['sjcar'][$key]['p_url'] = "index.php?m=cars&id=".$carlist['sjcar'][$key]['p_id'];

}
if($_SESSION['USER_ID']) {
	$tpl -> assign('islogin', 1);
}

$tpl -> assign('carslist', $carlist['sjcar']); 

/*幻灯片*/
$tpl -> assign('film_list', get_filmstrip(2));

$tpl -> display('m/index.html');
?>