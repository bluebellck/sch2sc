<?php /* Smarty version 2.6.18, created on 2017-07-05 15:02:25
         compiled from m/aboutus.html */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8">
    <meta content="yes" name="apple-mobile-web-app-capable" />
    <meta content="black" name="apple-mobile-web-app-status-bar-style" />
    <meta content="telephone=no" name="format-detection" />
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <title><?php echo $this->_tpl_vars['setting']['keywords']; ?>
-<?php echo $this->_tpl_vars['setting']['sitename']; ?>
</title>
	<link href="<?php echo $this->_tpl_vars['weburl']; ?>
/templates/m/css/page.css" rel="stylesheet" type="text/css"/>
	<script src="<?php echo $this->_tpl_vars['weburl']; ?>
/templates/m/js/jquery.js" type="text/javascript"></script>
	<script type="text/javascript" src="<?php echo $this->_tpl_vars['weburl']; ?>
/templates/m/js/jquery.textRemindAuto-1.0.js"></script>
	<script src="<?php echo $this->_tpl_vars['weburl']; ?>
/templates/m/js/TouchSlide.1.1.js"></script>
	<script type="text/javascript">
    $(function() {
		$(".remindAuto").textRemindAuto();
    })
	</script>
</head>
<body>
<!--头部--> 
<div class="comnav clearfix">
	<a href="javascript:window.history.go(-1);" class="reback">返回</a>
	<a href="index.php" class="home">首页</a>
	公司介绍
</div>
<!--头部结束-->
<!--主体-->
<div class="main mt10">
	<div id="focus" class="focus">
		<div class="hd">
			<ul></ul>
		</div>
		<div class="bd">
			<ul>
				<?php $_from = $this->_tpl_vars['film_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['film']):
?>
				<li><a href="#"><img _src="<?php echo $this->_tpl_vars['webdomain']; ?>
<?php echo $this->_tpl_vars['film']['pic']; ?>
" src="images/blank.png" /></a></li>
				<?php endforeach; endif; unset($_from); ?>
			</ul>
		</div>
	</div>
	<script type="text/javascript">
		TouchSlide({ 
			slideCell:"#focus",
			titCell:".hd ul", //开启自动分页 autoPage:true ，此时设置 titCell 为导航元素包裹层
			mainCell:".bd ul", 
			effect:"left", 
			autoPlay:true,//自动播放
			autoPage:true, //自动分页
			switchLoad:"_src" //切换加载，真实图片路径为"_src" 
		});
	</script>
</div>
<div class="main">
	<?php $_from = $this->_tpl_vars['newslist']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['news']):
?>
	<div class="carlist clearfix mt10">
		<div class="carlist_left">
			<a href="index.php?m=about&id=<?php echo $this->_tpl_vars['news']['n_id']; ?>
"><?php if ($this->_tpl_vars['news']['n_pic'] <> ''): ?><img src="<?php echo $this->_tpl_vars['news']['n_pic']; ?>
"/><?php else: ?>暂无图片<?php endif; ?></a>
		</div>
		<div class="carlist_right">
			<p class="f12 fb"><a href="index.php?m=about&id=<?php echo $this->_tpl_vars['news']['n_id']; ?>
"><?php echo $this->_tpl_vars['news']['n_title']; ?>
</a></p>
		</div>
	</div>
	<?php endforeach; endif; unset($_from); ?>
</div>
<!--主体-->
<!--底部--> 
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "m/foot.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<!--底部结束-->
</body>
</html>