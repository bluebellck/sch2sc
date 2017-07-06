<?php /* Smarty version 2.6.18, created on 2017-07-06 09:16:36
         compiled from admin/add_page.html */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<link href="static/css/admin/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="<?php echo $this->_tpl_vars['weburl']; ?>
/templates/default/<?php echo $this->_tpl_vars['setting']['templates']; ?>
/js/jquery-1.7.1.js"></script>
<link rel="stylesheet" href="admin/kindeditor/themes/default/default.css" />
<script charset="utf-8" src="admin/kindeditor/kindeditor-min.js"></script>
<script charset="utf-8" src="admin/kindeditor/lang/zh_CN.js"></script>
<script type="text/javascript" src="static/js/Validform_v5.3.2_min.js"></script>
<script type="text/javascript">
$(function() {
	//表单验证
	$(".pageform").Validform({
		tiptype:3
	});
	KindEditor.ready(function(K) {
		editor1 = K.create('textarea[name="p_info"]', {
		resizeType : 1,
		allowPreviewEmoticons : false,
		allowImageUpload : false,
		uploadJson : '<?php echo $this->_tpl_vars['adminpage']; ?>
?m=upload',
		fileManagerJson : '<?php echo $this->_tpl_vars['adminpage']; ?>
?m=upload_manager',
		allowFileManager : true,
		items : [
				'source', '|', 'undo', 'redo', '|', 'preview', 'print', 'template', 'code', 'cut', 'copy', 'paste',
				'plainpaste', 'wordpaste', '|', 'justifyleft', 'justifycenter', 'justifyright',
				'justifyfull', 'insertorderedlist', 'insertunorderedlist', 'indent', 'outdent', 'subscript',
				'superscript', 'clearhtml', 'quickformat', 'selectall', '|', 'fullscreen', '/',
				'formatblock', 'fontname', 'fontsize', '|', 'forecolor', 'hilitecolor', 'bold',
				'italic', 'underline', 'strikethrough', 'lineheight', 'removeformat', '|', 'image', 'multiimage', 'table', 'hr', 'emoticons', 'baidumap', 'pagebreak',
				'anchor', 'link', 'unlink', '|', 'about']
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
?m=page_sort&a=list" class="list">返回单页分类列表</a></li>
				<li><a href="<?php echo $this->_tpl_vars['adminpage']; ?>
?m=page&a=list" class="list">返回单页列表</a></li>
			</ul>
		</div>
	</div>
	<form name="form1" class="pageform" method="post" enctype="multipart/form-data"  action="<?php echo $this->_tpl_vars['adminpage']; ?>
?m=page">
		<table cellspacing="0" cellpadding="0" width="100%"  class="maintable">
			<tr>
				<th>分类：</th>
				<td><select name="s_id" datatype="n" nullmsg="请选择分类！">
						<?php echo $this->_tpl_vars['selectpagesort']; ?>

					</select></td>
			</tr>
			<tr>
				<th>标题：</th>
				<td><input name="p_title" type="text" size="30" value="<?php echo $this->_tpl_vars['page']['p_title']; ?>
" datatype="s" nullmsg="请填写标题！"/></td>
			</tr>
			<tr>
				<th>内容：</th>
				<td><textarea class="ckeditor" cols="80" id="editor1" name="p_info" rows="10" style="width:800px;height:300px;"><?php echo $this->_tpl_vars['page']['p_info']; ?>
</textarea></td>
			</tr>
			<tr>
				<th>静态文件名：</th>
				<td><input name="p_page" type="text" size="30" value="<?php echo $this->_tpl_vars['page']['p_page']; ?>
" />
					<span class="gray">可不填写</span></td>
			</tr>
			<tr>
				<th>引用模版：</th>
				<td><input name="p_tql" type="text" size="30" value="<?php echo $this->_tpl_vars['page']['p_tql']; ?>
" /></td>
			</tr>
			<tr>
				<th></th>
				<td><div class="buttons">
						<input type="submit" name="thevaluesubmit" value="提交保存" class="submit">
						<input type="hidden" name="a" value="<?php echo $this->_tpl_vars['ac']; ?>
">
						<input type="hidden" name="id" value="<?php echo $this->_tpl_vars['page']['p_id']; ?>
">
						<input type="hidden" name="p_list" value="<?php echo $this->_tpl_vars['page']['p_list']; ?>
">
						<input type="hidden" name="page" value="<?php echo $this->_tpl_vars['page_g']; ?>
">
					</div></td>
			</tr>
		</table>
	</form>
</div>
</body>
</html>