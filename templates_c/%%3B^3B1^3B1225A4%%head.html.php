<?php /* Smarty version 2.6.18, created on 2017-07-05 16:23:23
         compiled from default/default/head.html */ ?>



<!--头部-->
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "default/".($this->_tpl_vars['setting']['templates'])."/top.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div class="headw">
	<div class="head">
		<div class="logo"><a href="<?php echo $this->_tpl_vars['weburl']; ?>
/"><?php if ($this->_tpl_vars['setting']['logo'] <> ''): ?><img src="<?php echo $this->_tpl_vars['setting']['logo']; ?>
" alt="<?php echo $this->_tpl_vars['setting']['sitename']; ?>
"><?php else: ?><?php echo $this->_tpl_vars['setting']['sitename']; ?>
<?php endif; ?></a></div>
		 	
		<div class="topsearch">
			<div class="topsearchbox">
			<form method="get" action="<?php echo $this->_tpl_vars['weburl']; ?>
/index.php">
				<input type="text" name="k" class="keywords" placeholder="请输入车辆关键词或信息编号，如：别克 或 别克 君威"><input type="submit" value="" class="button"/>
				<input type="hidden" name="m" value="search">
			</form>
			</div>
			<p class="topkeywords"><?php $_from = $this->_tpl_vars['cache']['topkeywords']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['keywords']):
?><a href="<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=search&k=<?php echo $this->_tpl_vars['keywords']['keyword']; ?>
"><?php echo $this->_tpl_vars['keywords']['keywords']; ?>
</a>&nbsp;&nbsp;<?php endforeach; endif; unset($_from); ?></p>
		</div>
		<div class="carnum" id="carcount">
		</div>
	</div>
</div>
<div class="nav_list">
	<ul class="clearfix">
		<?php $_from = $this->_tpl_vars['partlist']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['part']):
?>
		<li>
		<a href="<?php if ($this->_tpl_vars['part']['c_target'] == 2): ?><?php echo $this->_tpl_vars['part']['c_url']; ?>
<?php else: ?><?php echo $this->_tpl_vars['weburl']; ?>
/<?php echo $this->_tpl_vars['part']['c_url']; ?>
<?php endif; ?>" title="<?php echo $this->_tpl_vars['part']['c_name']; ?>
" <?php if ($this->_tpl_vars['menustate'] == $this->_tpl_vars['part']['c_id']): ?>class="here"<?php endif; ?> <?php if ($this->_tpl_vars['part']['c_target'] == 2): ?>target="_blank"<?php endif; ?>><?php echo $this->_tpl_vars['part']['c_name']; ?>
</a>
		</li>
		<?php endforeach; endif; unset($_from); ?>
	</ul>
</div>

<!--头部end -->