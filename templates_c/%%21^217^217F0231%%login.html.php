<?php /* Smarty version 2.6.18, created on 2017-07-04 13:01:39
         compiled from m/login.html */ ?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" >	
	<title>途众好车</title>
	<link href="<?php echo $this->_tpl_vars['weburl']; ?>
/templates/m/css/mobile.css" rel="stylesheet" type="text/css"/>
	<script type="text/javascript" src="<?php echo $this->_tpl_vars['weburl']; ?>
/templates/default/<?php echo $this->_tpl_vars['setting']['templates']; ?>
/js/jquery-1.7.1.js"></script>
	<script type="text/javascript" src="<?php echo $this->_tpl_vars['weburl']; ?>
/static/js/Validform_v5.3.2_min.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			//表单验证
			$(".loginform").Validform({
				tiptype:3
			});
		});
	</script>
</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="mobile_user_top text-center">
				<a href="javascript:window.history.go(-1);"><img src="<?php echo $this->_tpl_vars['weburl']; ?>
/static/img/jt.png" style="width:10px; height:14px; margin:12px 0 0 16px;"></a>
				登录
				<a href="<?php echo $this->_tpl_vars['weburl']; ?>
/m/" class="user_logout">首页</a>
			</div>
		</div>
		<div class="login-box">
			<ul class="login-box-title">
				<li>登录</li>
			</ul>
				
			<div id="login_1" class="login-box-ti" style="">
				<form name="loginform" class="loginform" method="post" action="index.php?m=login">
					<dl class="login-box-ti-d">
						<dt>手机号码</dt>
						<dd><input type="text" name="username" class="inp01" ajaxurl="index.php?m=login&ajax=1" datatype="s6-18" errormsg="用户名至少6个字符,最多18个字符！"/></dd>
					</dl>
					<dl class="login-box-ti-d">
						<dt>密码</dt>
						<dd><input type="password" name="password" class="inp01"/></dd>
					</dl>
					<div class="login-box-ti-but">
						<input type="submit" class="login_but" value="登录">
						<input type="hidden" name="action" value="login">
					</div>
				</form>
			</div>      
				

		</div>
	</div>
</body>
</html>


















