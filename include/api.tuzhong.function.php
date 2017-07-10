<?php
function api_tuzhong_all($data,$uid){
	$model_arr = array('1' => 1,'3' => 1,'4' => 1,'5' => 1,'6' => 1,'7' => 4,'8' => 3,'9' => 2,'38' => 5,'41' => 1);
	$pics_arr = explode('|',$data['p_pics']);
	$arr = array();
	$arr['uid'] = $uid;
	$arr['cheyuan_id'] = $data['p_id'];
	$arr['p_brand'] = $data['p_brand'];
	$arr['p_brandname'] = 1;
	$arr['p_subbrand'] = $data['p_subbrand'];
	$arr['p_subbrandname'] = $data[''];
	$arr['p_subsubbrand'] = $data['p_subsubbrand'];
	$arr['p_allname'] = $data['p_allname'];
	$arr['aid'] = $data['aid'];
	$arr['cid'] = $data['cid'];
	$arr['p_ontime'] = time($data['p_year'].'-'.$data['p_month'].'-01');
	$arr['p_kilometre'] = $data['p_kilometre'];
	$arr['p_bidprice'] = $data[''];
	$arr['p_price'] = $data['p_price'];
	$arr['p_newprice'] = $data['p_newprice'];
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
	curl_setopt($curl, CURLOPT_POSTFIELDS, $arr);
	//执行命令
	$data = curl_exec($curl);
	//关闭URL请求
	curl_close($curl);
	//显示获得的数据
	
	




}



?>