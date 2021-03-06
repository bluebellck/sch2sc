<?php /* Smarty version 2.6.18, created on 2017-07-04 17:24:29
         compiled from default/default/assess.html */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $this->_tpl_vars['page']['p_title']; ?>
 - <?php echo $this->_tpl_vars['setting']['title']; ?>
</title>
<meta content="<?php echo $this->_tpl_vars['setting']['keywords']; ?>
"  name="keywords"/>
<meta content="<?php echo $this->_tpl_vars['setting']['description']; ?>
" name="description"/>
<link href="<?php echo $this->_tpl_vars['weburl']; ?>
/templates/default/<?php echo $this->_tpl_vars['setting']['templates']; ?>
/css/page.css" rel="stylesheet" type="text/css"/>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['weburl']; ?>
/static/js/jquery-1.7.1.js"></script>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['weburl']; ?>
/static/js/Validform_v5.3.2_min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
    //品牌选择
	$("#brand").change(function(){
		$.get("<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=ajax&ajax=1", { 
			brandid :  $("#brand").val() 
		}, function (data, textStatus){
               $("#subbrand").html(data); // 把返回的数据添加到页面上
			}
		);
	});
	//品牌选择
	$("#subbrand").change(function(){
		$.get("<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=ajax&ajax=1", { 
			subbrandid :  $("#subbrand").val() 
		}, function (data, textStatus){
               $("#subsubbrand").html(data); // 把返回的数据添加到页面上
			}
		);
	});
	
	//表单验证
	$(".carform").Validform({
		tiptype:2
	});
});
</script>
</head>
<body>
<!--内容--> 
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "default/".($this->_tpl_vars['setting']['templates'])."/head.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div class="assess_banner">
		<div class="assessbox">
			<div class="form_title"><span>免费评估车源</span></div>
				<form name="carform" class="carform" method="post" action="<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=assesscar">
					<table cellspacing="0" cellpadding="0" width="100%"  class="sell_table">
						<tr>
							<th> 品&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;牌：</th>
							<td colspan="3"><select name="p_brand" id="brand" datatype="n" nullmsg="请选择品牌！" class="select01">
									<?php echo $this->_tpl_vars['selectbrand']; ?>

								</select>
							</td>
						</tr>
						<tr>
							<th> 车&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;系：</th>
							<td>
								<select id="subbrand" name="p_subbrand" datatype="n" nullmsg="请选择车系！" class="select01">
									<option value="" selected>请选择车系</option>                       
								</select>
							</td>
						</tr>
						<tr>
							<th> 车&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;型：</th>
							<td>
								<select id="subsubbrand" name="p_subsubbrand" datatype="n" nullmsg="请选择款式！" class="select01">
								<option value="" selected>请选择款式</option>
							</select>
							</td>
						</tr>
						<tr>
							<th>上牌日期：</th>
							<td><select name="p_year" datatype="n" nullmsg="请选择年份！" class="select02">
									<?php echo $this->_tpl_vars['select_year']; ?>

								</select>
								<select name="p_month" datatype="n" nullmsg="请选择月份！" class="select02">
									<?php echo $this->_tpl_vars['select_month']; ?>

								</select>
							</td>
							</td>
						</tr>
						<tr>
							<th>行驶里程：</th>
							<td><input name="p_kilometre" type="text" id="p_kilometre" size="15" />
								<span class="gray">(万公里)</span></td>
							</td>
						</tr>
						<tr>
							<th>手&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;机：</th>
							<td><input name="p_contact_tel" type="text" size="30" class="inp01" value="" datatype="m" nullmsg="请填写手机号！"/></td>
						</tr>
						<tr>
							<th>验&nbsp;&nbsp;证&nbsp;&nbsp;码：</th>
							<td colspan="5"><input name="authcode" id="cftcode"  type="text"  class="inp02" datatype="s" ajaxurl="<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=ajax&ajax=1" nullmsg="请输入验证码！" errormsg="请输入正确的验证码！"/> <img src="<?php echo $this->_tpl_vars['weburl']; ?>
/include/kcaptcha/" width="70" height="30" onclick="this.src='<?php echo $this->_tpl_vars['weburl']; ?>
/include/kcaptcha/?'+Math.random();" title="点击刷新验证码" style="cursor:pointer" id="checkcode" align="absmiddle"></td>
						</tr>
						<tr>
							<td></td>
							<td><input type="submit" value="立刻发布" class="sell_but02">
								<input type="hidden" name="action" value="sellcar"></td>
						</tr>
					</table>
				</form>
		</div>
</div>


<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "default/".($this->_tpl_vars['setting']['templates'])."/foot.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
</body>
</html>