<?php /* Smarty version 2.6.18, created on 2017-07-06 09:45:08
         compiled from admin/news_html.html */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title></title>
<link href="static/css/admin/style.css" rel="stylesheet" type="text/css" />
</head>
<script type="text/javascript" src="static/js/common.js"></script>
<script type="text/javascript" src="static/js/ajax.js"></script>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['weburl']; ?>
/<?php echo $this->_tpl_vars['weburl']; ?>
/templates/default/<?php echo $this->_tpl_vars['setting']['templates']; ?>
/js/jquery-1.7.1.js"></script>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['weburl']; ?>
/static/js/laydate/laydate.js"></script>
<script type="text/javascript">
function submithtml(action)
{
    document.form.action = action;
    document.form.submit();
}
</script>
<body>
<div class="colorarea01">
	<form name="form" method="post" action="admin.php" target="report_iframe2">
		<table cellspacing="0" cellpadding="0" width="100%"  class="listtable">
			<tr>
				<th align="center" width="200">选择分类：</th>
				<th></th>
			</tr>
			<tr>
				<td align="center"><?php echo $this->_tpl_vars['selectcategory']; ?>
</td>
				<td valign="top">
					<div class="htmlmenu">
						<p>更新所有信息
							<input type="button" class="button" value="开始更新" onclick="submithtml('<?php echo $this->_tpl_vars['adminpage']; ?>
?m=create_html&a=news&op=1');"/>
						</p>
						<p>更新最新发布的
							<input type="text" name="newsnum" size="5" value="20">
							条信息
							<input type="button" class="button" value="开始更新" onclick="submithtml('<?php echo $this->_tpl_vars['adminpage']; ?>
?m=create_html&a=news&op=2');"/>
						</p>
						<p>更新发布时间从
							<input id="start_time" class="laydate-icon" type="text" readonly="" size="20" value="<?php echo $this->_tpl_vars['starttimevalue']; ?>
" name="startdate" onclick="laydate()">
							 到
							<input type="text" name="enddate" id="end_time" value="<?php echo $this->_tpl_vars['endtimevalue']; ?>
" size="20" class="laydate-icon" readonly onclick="laydate()">
							&nbsp; 
							 的信息
							<input type="button" class="button" value="开始更新" onclick="submithtml('<?php echo $this->_tpl_vars['adminpage']; ?>
?m=create_html&a=news&op=3');"/>
						</p>
						<p>更新ID从
							<input type="text" name="startid" size="5">
							到
							<input type="text" name="endid" size="5">
							的信息
							<input type="button" class="button" value="开始更新" onclick="submithtml('<?php echo $this->_tpl_vars['adminpage']; ?>
?m=create_html&a=news&op=4');"/>
						</p>
					</div>
				</td>
			</tr>
		</table>
	</form>
	<table cellspacing="0" cellpadding="0" width="100%"  class="listtable" style="border-top:none;">
		<tr>
			<th> 进行状态： </th>
		</tr>
		<tr>
			<td><?php echo $this->_tpl_vars['loading']; ?>

				<iframe id="report_iframe2" frameborder="0" name="report_iframe2" src="" scrolling="no" width="100%" height="500" ></iframe></td>
		</tr>
	</table>
</div>
</body>
</html>