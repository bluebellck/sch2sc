<?php /* Smarty version 2.6.18, created on 2017-07-10 13:23:41
         compiled from m/user_carlist.html */ ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>途众好车</title>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, maximum-scale=1.0, business-scalable=no">
		
		<link href="<?php echo $this->_tpl_vars['weburl']; ?>
/templates/m/css/uikit/uikit.min.css" rel="stylesheet" type="text/css"/>
 		<link href="<?php echo $this->_tpl_vars['weburl']; ?>
/templates/m/css/business.css" rel="stylesheet" type="text/css"/>
	</head>
	<body>
		<div class="topbox uk-grid uk-grid-collapse">
			<div class="uk-width-1-10 uk-text-center left">
				<a href="<?php echo $this->_tpl_vars['weburl']; ?>
/m/index.php?m=user"><i class="uk-icon-chevron-left"></i></a>
			</div>
			<div class="uk-width-8-10 uk-text-center center">
				<span>在库车辆</span>
			</div>
			<div class="uk-width-1-10"></div>
		</div>
		<div class="boxhzcl uk-margin-bottom"></div>
		
		<?php $_from = $this->_tpl_vars['carslist']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['cars']):
?>		
		<div class="business-shoucang uk-container-center business-hz uk-margin-bottom">
			<div class="business-hz top">
				<a href="index.php?m=user&a=editcar&id=<?php echo $this->_tpl_vars['cars']['p_id']; ?>
&page=<?php echo $this->_tpl_vars['currpage']; ?>
" class="uk-float-right"><i class="uk-icon-cog"></i> 编辑</a>
				<span>
					刷新时间：<?php echo $this->_tpl_vars['cars']['listtime']; ?>

				</span>
			</div>
			<div class="text business-hz">
				<div class="img uk-float-left">
					<a href="index.php?m=cars&id=<?php echo $this->_tpl_vars['cars']['p_id']; ?>
"><?php if ($this->_tpl_vars['cars']['p_mainpic'] <> ''): ?><img src="<?php echo $this->_tpl_vars['cars']['p_mainpic']; ?>
" width="80" height="60"/><?php else: ?><img src="/static/img/img-cs.png" /><?php endif; ?></a>
				</div>
				<h2>
					<a href="index.php?m=cars&id=<?php echo $this->_tpl_vars['cars']['p_id']; ?>
"><?php if ($this->_tpl_vars['cars']['p_allname'] != ""): ?><?php echo $this->_tpl_vars['cars']['p_allname']; ?>
<?php else: ?><?php echo $this->_tpl_vars['cars']['p_name']; ?>
<?php endif; ?></a>
				</h2>
				<p><?php echo $this->_tpl_vars['cars']['p_year']; ?>
年<?php echo $this->_tpl_vars['cars']['p_month']; ?>
月 | <?php echo $this->_tpl_vars['cars']['p_kilometre']; ?>
万公里</p>
				<p class="jg">当前价格： <span>¥<?php echo $this->_tpl_vars['cars']['p_price']; ?>
</span> 万</p>
			</div>
			<div class="uk-grid uk-grid-collapse">
				<div class="uk-width-1-2">
					<a href="index.php?m=user&a=refresh&id=<?php echo $this->_tpl_vars['cars']['p_id']; ?>
&page=<?php echo $this->_tpl_vars['currpage']; ?>
" class="button uk-button">刷新</a>
				</div>
				<div class="uk-width-1-2">
					<a href="index.php?m=user&a=sellcar&sell=<?php if ($this->_tpl_vars['cars']['issell'] == 1): ?>0<?php else: ?>1<?php endif; ?>&id=<?php echo $this->_tpl_vars['cars']['p_id']; ?>
&page=<?php echo $this->_tpl_vars['currpage']; ?>
" class="button uk-button lx"><?php if ($this->_tpl_vars['cars']['issell'] == 1): ?>恢复为在售<?php else: ?>设置为已出售<?php endif; ?></a> 
				</div>
			</div>
		</div>
		<?php endforeach; endif; unset($_from); ?>
		
		<div class="page_list">
			<?php echo $this->_tpl_vars['button_basic']; ?>

		</div>
		<script type="text/javascript" src="<?php echo $this->_tpl_vars['weburl']; ?>
/static/js/uikit/jquery-3.2.0.min.js"></script>
		<script type="text/javascript" src="<?php echo $this->_tpl_vars['weburl']; ?>
/static/js/uikit/uikit.min.js"></script>
	</body>
</html>