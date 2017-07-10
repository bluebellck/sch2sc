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