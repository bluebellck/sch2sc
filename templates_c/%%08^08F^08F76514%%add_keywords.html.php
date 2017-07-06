<?php /* Smarty version 2.6.18, created on 2017-07-05 17:16:17
         compiled from admin/add_keywords.html */ ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<link href="static/css/admin/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="<?php echo $this->_tpl_vars['weburl']; ?>
/templates/default/<?php echo $this->_tpl_vars['setting']['templates']; ?>
/js/jquery-1.7.1.js"></script>
<script type="text/javascript" src="static/js/Validform_v5.3.2_min.js"></script>
<script type="text/javascript">
$(function() {
//表单验证
	$(".keywordsform").Validform({
		tiptype:3
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
?m=keywords&a=list" class="list">返回关键词列表</a></li>
		</ul>
	</div>
</div>
<form name="form1" class="keywordsform" method="post" action="<?php echo $this->_tpl_vars['adminpage']; ?>
?m=keywords">
	<table cellspacing="0" cellpadding="0" width="100%"  class="maintable">
		<tr>
			<th>分类</th>
			<td><select name="catid">
				<?php echo $this->_tpl_vars['selectcategory']; ?>

			</select></td>
		</tr>
		<tr>
			<th>关键词名称：</th>
			<td><input name="keywords" type="text"  size="30" value="<?php echo $this->_tpl_vars['keywords']['keywords']; ?>
" datatype="s" nullmsg="请填写关键词名称！"/></td>
		</tr>
		<tr>
		<tr>
			<th></th>
			<td><div class="buttons">
					<input type="submit" name="thevaluesubmit" value="提交保存" class="submit">
					<input type="hidden" name="a" value="<?php echo $this->_tpl_vars['ac']; ?>
">
					<input type="hidden" name="id" value="<?php echo $this->_tpl_vars['keywords']['id']; ?>
">
				</div></td>
		</tr>
	</table>
	</div>
</form>
</body>
</html>