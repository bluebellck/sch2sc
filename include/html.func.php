<?php

// 生成首页

// 生成新闻详细页
function html_news($id) {
	global $db, $tpl, $settings;
	$data = $db -> row_select_one('news', "n_id=" . intval($id));
	$data['addtime'] = date('Y-m-d H:i:s', $data['n_addtime']);
	$category = $db -> row_select_one('news_category', 'catid=' . $data['catid']);
	$data['catname'] = $category['catname'];
	$data['keywords']= $category['keywords'];
	$data['description']= $category['description'];
	$data['n_info'] = htmlspecialchars_decode($data['n_info']);
	$tpl -> assign('news', $data); 
	// 相关新闻
	$aboutnews['pre'] = $db -> row_select('news', "catid=" . $data['catid'] . " and n_id<" . $data['n_id'], 'n_id,n_title,n_addtime', '3', 'n_id desc');
	$aboutnews['next'] = $db -> row_select('news', "catid=" . $data['catid'] . " and n_id>" . $data['n_id'], 'n_id,n_title,n_addtime', '3', 'n_id asc');
	foreach($aboutnews as $key => $value) {
		foreach($value as $k => $v) {
			$aboutnews[$key][$k]['n_title'] = _substr($v['n_title'], 0, 70);
			$aboutnews[$key][$k]['n_url'] = WEB_PATH."/news/". date('Ym', $v['n_addtime']) . "/".$v['n_id'].".html";
		} 
	} 
	$tpl -> assign('aboutnewslist', $aboutnews);
	$newshtml = $tpl -> fetch('default/'.$settings['templates'].'/news.html');
	$newsdir = HTML_DIR."news/".date('Ym', $data['n_addtime'])."/";
	if(!is_dir($newsdir)) createFolder($newsdir);
	$fp = fopen($newsdir.$data['n_id'] . ".html", "w");
	fwrite($fp, $newshtml);
	fclose($fp);
	return true;
} 

// 生成车源详细页
// 生成租车详细页
function html_rentcars($id) {
	global $db, $tpl , $settings;
	$data = $db -> row_select_one('rentcars', "p_id=" . intval($id));
	$data['listtime'] = date('Y-m-d', $data['listtime']);
	$data['p_page'] = !empty($data['p_page']) ? $data['p_page'] : $data['p_id'] . ".html";
	$data['p_details'] = htmlspecialchars_decode($data['p_details']);
	if(!empty($data['p_model'])){
		$category = $db -> row_select_one('rentmodel', 's_id=' . $data['p_model']);
		$data['modelname'] = $category['s_name'];
	}

	$carpiclist = array();
	if (!empty($data['p_pics'])) {
		$piclist = explode('|', $data['p_pics']);
		foreach($piclist as $k => $v){
			$pic = explode(".", $v);
			$carpiclist[$k]['pic'] = $v;
			$carpiclist[$k]['smallpic'] = $pic[0]."_small".".".$pic[1];
		}
		$tpl -> assign('pic_list', $carpiclist);
	} else {
		$tpl -> assign('pic_list', "");
	} 
		//地区
	if(!empty($data['cid'])){
		$area = $db -> row_select_one('area','id = '.$data['cid']);
		$data['area'] = $area['name'];
	}

	$tpl -> assign('cars', $data);

	//商家信息
	if(!empty($data['uid'])){ 
		$user = $db -> row_select_one('member', 'id=' . $data['uid']);
	}
	$tpl -> assign('shop', $user);


	$cardir = HTML_DIR."rentcars/".date('Y/m/d', $data['p_addtime'])."/";
	if (!is_dir($cardir)) createFolder($cardir);
	$carshtml = $tpl -> fetch('default/'.$settings['templates'].'/rentcars.html');
	$fp = fopen($cardir.$data['p_page'], "w");
	fwrite($fp, $carshtml);
	fclose($fp);
	return true;
}
// 生成求购详细页
function html_qiugoucars($id) {
	global $db, $tpl , $settings;

	$data = $db -> row_select_one('buycars', "p_id=" . intval($id));
	$data['addtime'] = date('Y-m-d', $data['p_addtime']);
	$data['p_page'] = !empty($data['p_page']) ? $data['p_page'] : $data['p_id'] . ".html";
	$data['p_details'] = htmlspecialchars_decode($data['p_details']);
	if(!empty($data['p_model'])){
		$category = $db -> row_select_one('model', 's_id=' . $data['p_model']);
		$data['modelname'] = $category['s_name'];
	}
	
	$arr_age_b = array('1'=>'1年以内','2'=>'2年以内','3'=>'3-5年','4'=>'5-8年','5'=>'8年以上');
	$data['age'] = $arr_age_b[$data['p_age']];

	if(!empty($value['p_mainpic'])){
		$pic = explode(".", $value['p_mainpic']);
		$list[$k] = $pic[0]."_small".".".$pic[1];
	}
	if (!empty($data['p_pics'])) {
		$piclist = explode('|', $data['p_pics']);
		$spiclist = array();
		foreach($piclist as $k => $v){
			$pic = explode(".", $v);
			$spiclist[$k] = $pic[0]."_small".".".$pic[1];
		}
		$tpl -> assign('pic_list', $piclist);
		$tpl -> assign('spic_list', $spiclist);
	} else {
		$tpl -> assign('pic_list', "");
		$tpl -> assign('spic_list', "");
	} 
		//地区
	if(!empty($data['cid'])){
		$area = $db -> row_select_one('area','id = '.$data['cid']);
		$data['area'] = $area['name'];
	}

	$tpl -> assign('cars', $data);

	//商家信息
	if(!empty($data['uid'])){ 
		$user = $db -> row_select_one('member', 'id=' . $data['uid']);
		$tpl -> assign('shop', $user);
	}

	$cardir = HTML_DIR."qiugou/".date('Y/m/d', $data['p_addtime'])."/";
	if (!is_dir($cardir)) createFolder($cardir);
	$carshtml = $tpl -> fetch('default/'.$settings['templates'].'/qiugou.html');
	$fp = fopen($cardir.$data['p_page'], "w");
	fwrite($fp, $carshtml);
	fclose($fp);
	return true;
}
// 生成单页
function html_page($id) {
	global $db, $tpl, $settings;
	$data = $db -> row_select_one('page', "p_id=" . intval($id));
	$list = $db -> row_select('page', 's_id=' . $data['s_id'], '*', 0);
	$tpl -> assign('pagelist', $list);
	$sort = $db -> row_select_one('page_sorts', 's_id=' . $data['s_id']);
	$data['sortname'] = $sort['s_name'];
	$data['sorturl'] = $sort['s_dir'] . "/" . $list[0]['p_page'];
	if ($data['s_id'] == 2) {
		$tpl -> assign('menustate', 2);
	} elseif ($data['s_id'] == 3) {
		$tpl -> assign('menustate', 3);
	} elseif ($data['s_id'] == 4) {
		$tpl -> assign('menustate', 4);
	} elseif ($data['s_id'] == 5) {
		$tpl -> assign('menustate', 5);
	} elseif ($data['s_id'] == 6) {
		$tpl -> assign('menustate', 6);
	} elseif ($data['s_id'] == 7) {
		$tpl -> assign('menustate', 7);
	} elseif ($data['s_id'] == 8) {
		$tpl -> assign('menustate', 8);
	} elseif ($data['s_id'] == 9) {
				$tpl -> assign('menustate', 9);
	} elseif ($data['s_id'] == 14) {
		$tpl -> assign('menustate', 14);
	} 
	$data['p_page'] = !empty($data['p_page']) ? $data['p_page'] : $data['p_id'] . ".html";
	$data['p_info'] = htmlspecialchars_decode($data['p_info']);
	$tpl -> assign('page', $data);
	$tpl -> assign('pageid', $id);

	if (!is_dir(HTML_DIR.$sort['s_dir'])) createFolder( HTML_DIR.$sort['s_dir']);

	$pagehtml = $tpl -> fetch('default/'.$settings['templates'].'/'.$data['p_tql']);
	$fp = fopen(HTML_DIR.$sort['s_dir'] . "/" . $data['p_page'], "w");
	fwrite($fp, $pagehtml);
	fclose($fp);
	return true;
}
?>