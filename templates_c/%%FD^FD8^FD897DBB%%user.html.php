<?php /* Smarty version 2.6.18, created on 2017-06-29 15:35:01
         compiled from default/default/user.html */ ?>
<!DOCTYPE html PUBLIC "-//W3C//Dtd class="td1" XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/Dtd class="td1"/xhtml1-strict.dtd class="td1"">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>会员中心 - <?php echo $this->_tpl_vars['setting']['title']; ?>
</title>
<meta content="<?php echo $this->_tpl_vars['setting']['keywords']; ?>
"  name="keywords"/>
<meta content="<?php echo $this->_tpl_vars['setting']['description']; ?>
" name="description"/>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['weburl']; ?>
/templates/default/<?php echo $this->_tpl_vars['setting']['templates']; ?>
/js/jquery-1.7.1.js"></script>
<link href="<?php echo $this->_tpl_vars['weburl']; ?>
/templates/default/<?php echo $this->_tpl_vars['setting']['templates']; ?>
/css/user.css" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="admin/kindeditor/themes/default/default.css" />
<script charset="utf-8" src="admin/kindeditor/kindeditor-min.js"></script>
<script charset="utf-8" src="admin/kindeditor/lang/zh_CN.js"></script>
<script type="text/javascript" src="static/js/Validform_v5.3.2_min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
    //品牌选择
	$("#brand").click(function(){
		$.get("index.php?m=ajax&ajax=1", { 
			brandid :  $("#brand").val() 
		}, function (data, textStatus){
               $("#subbrand").html(data); // 把返回的数据添加到页面上
			}
		);
	});

	//表单验证
	$(".carform").Validform({
		tiptype:3
	});
});
</script>
</head>
<body>
<!--头部--> 
<div class="userhead">
	<div class="usertop">
		<div class="usertop_left">
			会员中心
		</div>
		<div class="usertop_right">
		<?php if ($_SESSION['USER_NAME'] <> ''): ?>欢迎你，<?php echo $_SESSION['USER_NAME']; ?>
。| <a href='<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=user'>会员中心</a> | <a href='<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=user&a=logout'>退出</a> | <a href='<?php echo $this->_tpl_vars['weburl']; ?>
/'>返回首页</a> <?php endif; ?>
		</div>
	</div>
</div>
<!--头部结束--> 
<!--主体-->
<div class="usermain clearfix mt10">
    <div class="userleft">
       <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "default/".($this->_tpl_vars['setting']['templates'])."/user_left.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    </div>
    <div class="userright">
		<h2 class="usernav"><?php echo $this->_tpl_vars['ac_arr'][$this->_tpl_vars['ac']]; ?>
</h2>
		<div class="box"> 
		<?php if ($this->_tpl_vars['ac'] == 'index'): ?>
			<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "default/".($this->_tpl_vars['setting']['templates'])."/user_index.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		<?php elseif ($this->_tpl_vars['ac'] == 'carlist'): ?>
            <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "default/".($this->_tpl_vars['setting']['templates'])."/user_carlist.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
        <?php elseif ($this->_tpl_vars['ac'] == 'addcar' || $this->_tpl_vars['ac'] == 'editcar'): ?>
            <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "default/".($this->_tpl_vars['setting']['templates'])."/user_addcar.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		<?php elseif ($this->_tpl_vars['ac'] == 'rentcarlist'): ?>
            <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "default/".($this->_tpl_vars['setting']['templates'])."/user_rentcarlist.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
        <?php elseif ($this->_tpl_vars['ac'] == 'addrentcar' || $this->_tpl_vars['ac'] == 'editrentcar'): ?>
            <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "default/".($this->_tpl_vars['setting']['templates'])."/user_addrentcar.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
        <?php elseif ($this->_tpl_vars['ac'] == 'subscribelist'): ?>
            <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "default/".($this->_tpl_vars['setting']['templates'])."/user_subscribelist.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		<?php elseif ($this->_tpl_vars['ac'] == 'inquirylist'): ?>
            <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "default/".($this->_tpl_vars['setting']['templates'])."/user_inquirylist.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		<?php elseif ($this->_tpl_vars['ac'] == 'upinfo'): ?>
            <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "default/".($this->_tpl_vars['setting']['templates'])."/user_upinfo.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
        <?php elseif ($this->_tpl_vars['ac'] == 'editshop'): ?>
            <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "default/".($this->_tpl_vars['setting']['templates'])."/user_openshop.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
        <?php elseif ($this->_tpl_vars['ac'] == 'uppwd'): ?>
            <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "default/".($this->_tpl_vars['setting']['templates'])."/user_uppwd.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		<?php elseif ($this->_tpl_vars['ac'] == 'addlogo'): ?>
            <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "default/".($this->_tpl_vars['setting']['templates'])."/user_addlogo.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		<?php elseif ($this->_tpl_vars['ac'] == 'asklist'): ?>
            <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "default/".($this->_tpl_vars['setting']['templates'])."/user_asklist.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		<?php elseif ($this->_tpl_vars['ac'] == 'replyask'): ?>
            <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "default/".($this->_tpl_vars['setting']['templates'])."/user_replyask.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		<?php elseif ($this->_tpl_vars['ac'] == 'newslist'): ?>
            <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "default/".($this->_tpl_vars['setting']['templates'])."/user_newslist.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		<?php elseif ($this->_tpl_vars['ac'] == 'addnews' || $this->_tpl_vars['ac'] == 'editnews'): ?>
            <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "default/".($this->_tpl_vars['setting']['templates'])."/user_addnews.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		<?php elseif ($this->_tpl_vars['ac'] == 'dealerlist'): ?>
            <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "default/".($this->_tpl_vars['setting']['templates'])."/user_dealerlist.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		<?php elseif ($this->_tpl_vars['ac'] == 'adddealer' || $this->_tpl_vars['ac'] == 'editdealer'): ?>
            <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "default/".($this->_tpl_vars['setting']['templates'])."/user_adddealer.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		<?php endif; ?>
		</div>
    </div>
</div>
<!--主体结束--> 
<!--底部--> 
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "default/".($this->_tpl_vars['setting']['templates'])."/foot.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?> 
<!--底部结束-->
</body>
</html>