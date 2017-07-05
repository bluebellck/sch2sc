<?php /* Smarty version 2.6.18, created on 2017-07-05 14:44:56
         compiled from admin/add_assesscar.html */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
$(document).ready(function(){
	//表单验证
	$(".assessform").Validform({
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
?m=assesscars&a=list" class="list">返回评估列表</a></li>
		</ul>
	</div>
</div>
<form name="form1" class="assessform" method="post" action="<?php echo $this->_tpl_vars['adminpage']; ?>
?m=assesscars">
<table cellspacing="0" cellpadding="0" width="100%"  class="maintable">
	<tr>
		<th>评估价格：</th>
		<td><input name="p_price" type="text"  size="30" value="<?php echo $this->_tpl_vars['assesscar']['p_price']; ?>
" datatype="s" nullmsg="请填写评估价格！"/></td>
	</tr>
	<tr>
		<th></th>
		<td>
			<div class="buttons"><input type="submit" name="thevaluesubmit" value="提交保存" class="submit">
			<input type="hidden" name="a" value="<?php echo $this->_tpl_vars['ac']; ?>
">
			<input type="hidden" name="id" value="<?php echo $this->_tpl_vars['assesscar']['p_id']; ?>
">
			<input type="reset" name="thevaluereset" value="重置">
		</div>
		</td>
	</tr>
</table>
</form>
</div>
</body>
</html>