<?php /* Smarty version 2.6.18, created on 2017-06-29 15:35:01
         compiled from default/default/user_left.html */ ?>
		<script type="text/javascript">
		$(document).ready(function() {
			$("#user_menu").hover(
			   function () {
				 $('.userinfomenu').show();
			   },
			   function () {
				 $('.userinfomenu').hide();
			   }
			);
		});
		</script>
		<div class="userinfo">
			<div class="clearfix">
				<div class="userinfo_left">
					<?php if ($this->_tpl_vars['user']['logo'] <> ''): ?>
						<img src="<?php echo $this->_tpl_vars['user']['logo']; ?>
"/>
					<?php else: ?>
						<img src="<?php echo $this->_tpl_vars['weburl']; ?>
/static/img/user.gif"/>
					<?php endif; ?>
				</div>
				<div class="userinfo_right">
					<p class="fb"><?php echo $_SESSION['USER_NAME']; ?>
</p>
					<div class="mt10 gray01" id="user_menu">账户信息
						<ul class="userinfomenu hide">
							<li><a href="<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=user&a=upinfo">修改资料</a></li>
							<li><a href="<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=user&a=uppwd">修改密码</a></li>
							<li><a href="<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=user&a=addlogo">修改头像</a></li>
						</ul>
					</div>
				</div>
			</div>
			<p class="mt10 gray01 pl5">注册日期：<?php echo $this->_tpl_vars['user']['regtime']; ?>
</p>
		</div>
		<div class="usermenu">
            <h3><a href="<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=user">会员中心首页</a></h3>
		</div>
		<div class="usermenu">
            <h3>二手车管理</h3>
            <ul>
                <li><a href="<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=user&a=carlist">二手车管理</a></li>
            </ul>
        </div>
		
        <?php if ($this->_tpl_vars['user']['isdealer'] == 2): ?>
		<div class="usermenu">
            <h3>店铺管理</h3>
            <ul>
				<li><a href="<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=user&a=editshop">资料修改</a></li>
				<li><a href="<?php echo $this->_tpl_vars['weburl']; ?>
">查看我的店铺</a></li>
            </ul>
        </div>
        <?php endif; ?>
		<div class="usermenu">
            <h3><a href="<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=user&a=logout">退出</a></h3>
		</div>