<?php /* Smarty version 2.6.18, created on 2017-07-04 14:37:34
         compiled from m/user.html */ ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>个人中心</title>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<link href="<?php echo $this->_tpl_vars['weburl']; ?>
/templates/m/css/uikit/uikit.min.css" rel="stylesheet" type="text/css"/>
 		<link href="<?php echo $this->_tpl_vars['weburl']; ?>
/templates/m/css/business.css" rel="stylesheet" type="text/css"/>

	</head>

<body style="background:#f5f5f5;">
		<div class="topbox uk-grid uk-grid-collapse">
			<div class="uk-width-1-10 uk-text-center left">
				<a href="index.php"><i class="uk-icon-chevron-left"></i></a>
			</div>
			<div class="uk-width-8-10 uk-text-center center">
				<span>商家中心</span>
			</div>
			<div class="uk-width-1-10"></div>
		</div>
				
		<div class="business-top uk-position-relative uk-margin-bottom">
			<div class="uk-position-z-index">
				<img src="<?php echo $this->_tpl_vars['weburl']; ?>
/static/img/top-bj.png" />
			</div>
			<div class="tx business-hz uk-position-top-left">
				<img src="<?php echo $this->_tpl_vars['weburl']; ?>
<?php echo $this->_tpl_vars['user']['logo']; ?>
" />
			</div>
			<div class="uk-position-top-left yhm">
				<p>用户名：<?php echo $this->_tpl_vars['user']['mobilephone']; ?>
</p>
				<p>在售车辆：<?php echo $this->_tpl_vars['sellcars']; ?>
 辆</p>
			</div>
		</div>
		
		<a href="<?php echo $this->_tpl_vars['weburl']; ?>
/m/index.php?m=user&a=addcar" class="business-tjxc uk-button uk-margin-bottom">添加新车</a>
		
		
		<div class="business-nav uk-margin-bottom">
			<a href="<?php echo $this->_tpl_vars['weburl']; ?>
/m/index.php?m=user&a=carlist"><img src="<?php echo $this->_tpl_vars['weburl']; ?>
/static/img/business-nav-01.png" /></a>
		</div>
		
		<a href="<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=user&a=logout" class="business-button uk-button">退出登录</a>
	
		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "mobile/".($this->_tpl_vars['setting']['templates'])."/common/bottombar.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		<script type="text/javascript" src="<?php echo $this->_tpl_vars['weburl']; ?>
/static/js/uikit/jquery-3.2.0.min.js"></script>
		<script type="text/javascript" src="<?php echo $this->_tpl_vars['weburl']; ?>
/static/js/uikit/uikit.min.js"></script>

</body>
</html>