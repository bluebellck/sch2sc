<?php /* Smarty version 2.6.18, created on 2017-07-05 21:58:45
         compiled from default/default/top.html */ ?>
<?php if ($this->_tpl_vars['setting']['version'] == 2 || $this->_tpl_vars['setting']['version'] == 3): ?>
<script language="JavaScript">
$(function(){
	$("#login").load("<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=ajax&ajax=1&login=1");
})
window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdMiniList":false,"bdPic":"","bdStyle":"0","bdSize":"16"},"share":{}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];</script>
<?php endif; ?>
<div class="top">
	<div class="top_main clearfix">
		<div class="top_left">
			欢迎来到<?php echo $this->_tpl_vars['setting']['sitename']; ?>
！
			<?php if ($this->_tpl_vars['islogin'] == 1): ?>
				<a href="<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=user">个人中心</a>
			<?php else: ?>
				<a href="<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=login">登录</a>
			<?php endif; ?>
		</div>
		<div class="top_right">
			<a href="<?php echo $this->_tpl_vars['weburl']; ?>
/m/" onmouseover="javascript:$('#mobile_url').show();" onmouseout="javascript:$('#mobile_url').hide();">手机端</a>&nbsp;&nbsp;|&nbsp;&nbsp;客服热线：<span class="orange01 fb"><?php echo $this->_tpl_vars['setting']['tel']; ?>
</span>
			<img src="/static/img/mobile_url.png" id="mobile_url" style="position:relative; top:0px; left:-121px; display:none;">
		</div>
	</div>
</div>