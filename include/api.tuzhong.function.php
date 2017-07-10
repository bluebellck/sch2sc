<?php
function api_tuzhong_all($data,$uid){
	$arr['p_color'] = $data['p_color'];
	$arr['p_model'] = $model_arr($data['p_model']);
	$arr['p_gas'] = $data['p_gas'];
	$arr['p_transmission'] = $data['p_transmission'];
	$arr['p_usetype'] = $data['家用'];
	$arr['p_remarks'] = $data['p_details'];
	$arr['p_mainpic'] = $pics_arr[0];
	$arr['p_backpic'] = $pics_arr[1];
	$arr['p_foresightpic'] = $pics_arr[2];
	$arr['p_leftforepic'] = $pics_arr[3];
	$arr['p_rightforepic'] = $pics_arr[4];
	$arr['p_backsightpic'] = $pics_arr[5];
	$arr['p_leftbackpic'] = $pics_arr[6];
	$arr['p_rightbackpic'] = $pics_arr[7];
	$arr['p_leftpic'] = $pics_arr[8];
	$arr['p_sidepic'] = $pics_arr[9];
	$arr['p_addtime'] = $data['p_addtime'];
	$arr['status'] = $data['issell'] ? 6 : 7;
	var_dump($arr);
	$url = "http://www.tuzhong.cn/api.php?m=api_sch2sc";
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
	curl_setopt($curl, CURLOPT_POSTFIELDS, array('1'));
	//执行命令
	$data = curl_exec($curl);
	//关闭URL请求
	curl_close($curl);
	//显示获得的数据
	
	




}



?>