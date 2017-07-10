<?php
function api_tuzhong_all($data,$uid){
	var_dump($data);
	$arr = array();
	$arr['uid'] = $uid;
	$arr['p_brand'] = ;
	$arr['p_brandname'] = ;
	$arr['p_subbrand'] = ;
	$arr['p_subbrandname'] = ;
	$arr['p_subsubbrand'] = ;
	$arr['p_allname'] = ;
	$arr['aid'] = ;
	$arr['cid'] = ;
	$arr['p_ontime'] = ;
	$arr['p_kilometre'] = ;
	$arr['p_bidprice'] = ;
	$arr['p_price'] = ;
	$arr['p_color'] = ;
	$arr['p_model'] = ;
	$arr['p_gas'] = ;
	$arr['p_transmission'] = ;
	$arr['p_usetype'] = ;
	$arr['p_remarks'] = ;
	$arr['p_mainpic'] = ;
	$arr['p_backpic'] = ;
	$arr['p_foresightpic'] = ;
	$arr['p_leftforepic'] = ;
	$arr['p_rightforepic'] = ;
	$arr['p_backsightpic'] = ;
	$arr['p_leftbackpic'] = ;
	$arr['p_rightbackpic'] = ;
	$arr['p_leftpic'] = ;
	$arr['p_sidepic'] = ;
	$arr['p_wheelpic'] = ;
	$arr['p_rightpic'] = ;
	$arr['p_driverlicpic'] = ;
	$arr['p_drivinglicpic'] = ;
	$arr['p_addtime'] = ;
	
	$url = "http://www.tuzhong.cn/api/api_sch2sc.php";
	//初始化
	$curl = curl_init();
	//设置抓取的url
	curl_setopt($curl, CURLOPT_URL, $url);
	//设置头文件的信息作为数据流输出
	curl_setopt($curl, CURLOPT_HEADER, 1);
	//设置获取的信息以文件流的形式返回，而不是直接输出。
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
	//设置post方式提交
	curl_setopt($curl, CURLOPT_POST, 1);
	curl_setopt($curl, CURLOPT_POSTFIELDS, $post_data);
	//执行命令
	$data = curl_exec($curl);
	//关闭URL请求
	curl_close($curl);
	//显示获得的数据
	
	




}



?>