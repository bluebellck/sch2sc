<?php /* Smarty version 2.6.18, created on 2017-06-29 15:12:45
         compiled from default/default/right.html */ ?>
<script language="JavaScript">
$(function() {
	//热门车源
	$("#hotcar").load("<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=ajax&ajax=1&cartype=hot");
})
</script>
<div class="commonbox02">
	<h3>热门车源</h3>
	<div class="box">
		<div id="hotcar"></div>
	</div>
</div>