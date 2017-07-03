<?php

// 生成首页

// 生成新闻详细页
// 生成求购详细页
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