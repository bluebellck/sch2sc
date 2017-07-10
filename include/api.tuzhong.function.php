<?php
function api_tuzhong_all($data,$uid){
	var_dump($data);
	$arr = array();
	$arr['uid'] = $uid;
	$arr['p_brand'] = 1;
	$arr['p_brandname'] = 1;
	$arr['p_subbrand'] = 1;
	$arr['p_subbrandname'] = 1;
	$arr['p_subsubbrand'] = 1;
	$arr['p_allname'] = 1;
	$arr['aid'] = 1;
	$arr['cid'] = 1;
	$arr['p_ontime'] = 1;
	$arr['p_kilometre'] = 1;
	$arr['p_bidprice'] = 1;
	$arr['p_price'] = 1;
	$arr['p_color'] = 1;
	$arr['p_model'] = 1;
	$arr['p_gas'] = 1;
	$arr['p_transmission'] = 1;
	$arr['p_usetype'] = 1;
	$arr['p_remarks'] = 1;
	$arr['p_mainpic'] = 1;
	$arr['p_backpic'] = 1;
	$arr['p_foresightpic'] = 1;
	$arr['p_leftforepic'] = 1;
	$arr['p_rightforepic'] = 1;
	$arr['p_backsightpic'] = 1;
	$arr['p_leftbackpic'] = 1;
	$arr['p_rightbackpic'] = 1;
	$arr['p_leftpic'] = 1;
	$arr['p_sidepic'] = 1;
	$arr['p_wheelpic'] = 1;
	$arr['p_rightpic'] = 1;
	$arr['p_driverlicpic'] = 1;
	$arr['p_drivinglicpic'] = 1;
	$arr['p_addtime'] = 1;
	
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