<?php /* Smarty version 2.6.18, created on 2017-07-06 17:27:05
         compiled from admin/add_brand.html */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<link href="static/css/admin/style.css" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="admin/kindeditor/themes/default/default.css" />
<script type="text/javascript" src="<?php echo $this->_tpl_vars['weburl']; ?>
/templates/default/<?php echo $this->_tpl_vars['setting']['templates']; ?>
/js/jquery-1.7.1.js"></script>
<script charset="utf-8" src="admin/kindeditor/kindeditor-min.js"></script>
<script charset="utf-8" src="admin/kindeditor/lang/zh_CN.js"></script>
<script type="text/javascript" src="static/js/Validform_v5.3.2_min.js"></script>
<script>
	$(function() {
		//表单验证
		$(".brandform").Validform({
			tiptype:3
		});
	});
	KindEditor.ready(function(K) {
		var editor = K.editor({
			uploadJson : '<?php echo $this->_tpl_vars['adminpage']; ?>
?m=upload',
			fileManagerJson : '<?php echo $this->_tpl_vars['adminpage']; ?>
?m=upload_manager',
			allowFileManager : true
		});
		K('#image1').click(function() {
			editor.loadPlugin('image', function() {
				editor.plugin.imageDialog({
					imageUrl : K('#url1').val(),
					clickFn : function(url, title, width, height, border, align) {
						K('#url1').val(url);
						editor.hideDialog();
					}
				});
			});
		});
	});
</script>
</head>
<body>
<div class="colorarea01">
	<div class="search clearfix">
		<div class="searchL">
			<ul class="menulist">
				<li><a href="<?php echo $this->_tpl_vars['adminpage']; ?>
?m=brand&a=list" class="list">返回品牌列表</a></li>
			</ul>
		</div>
	</div>
	<form name="form1" class="brandform" enctype="multipart/form-data" method="post" action="<?php echo $this->_tpl_vars['adminpage']; ?>
?m=brand">
		<table cellspacing="0" cellpadding="0" width="100%"  class="maintable">
			<tr>
				<th>上级品牌：</th>
				<td><b><?php echo $this->_tpl_vars['brand']['b_parentname']; ?>

					<input type="hidden" name="b_parent" value="<?php echo $this->_tpl_vars['brand']['b_parent']; ?>
">
					</b></td>
					</b>
					</td>
			</tr>
			<tr>
				<th>品牌类型：</th>
				<td><input type="checkbox" name="b_type" value="1" <?php if ($this->_tpl_vars['brand']['b_type'] == 1): ?>checked<?php endif; ?>> 推荐 </td>
			</tr>
			<tr>
				<th>品牌名称：</th>
				<td><input name="b_name" type="text" id="b_name" size="30" value="<?php echo $this->_tpl_vars['brand']['b_name']; ?>
"  datatype="*" nullmsg="请填写品牌名称！"/></td>
			</tr>
			<tr>
				<th>相关关键词：</th>
				<td><input name="b_keyword" type="text" id="b_name" size="30" value="<?php echo $this->_tpl_vars['brand']['b_keyword']; ?>
" /></td>
			</tr>
			<tr>
				<th>缩略图：</th>
				<td><input type="text" name="pic" id="url1" value="<?php echo $this->_tpl_vars['brand']['pic']; ?>
" />
					<input type="button" id="image1" value="选择图片" /></td>
			</tr>
			<tr>
				<th></th>
				<td><div class="buttons">
						<input type="submit" name="thevaluesubmit" value="提交保存" class="submit">
						<input type="hidden" name="a" value="<?php echo $this->_tpl_vars['ac']; ?>
">
						<input type="hidden" name="b_id" value="<?php echo $this->_tpl_vars['brand']['b_id']; ?>
">
						<input type="hidden" name="page" value="<?php echo $this->_tpl_vars['page']; ?>
">
					</div>
				</td>
			</tr>
		</table>
	</form>
</div>
</body>
</html>