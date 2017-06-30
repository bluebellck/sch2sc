<?php /* Smarty version 2.6.18, created on 2017-06-29 15:35:01
         compiled from default/default/user_index.html */ ?>
<div class="pr20">
	<h3 class="pb10"> <span class="f14 fb orange01">您好，<?php echo $this->_tpl_vars['user']['username']; ?>
</span>，欢迎登录！<span class="gray01">登陆时间：<?php echo $this->_tpl_vars['user']['last_login_time']; ?>
</span></h3>
	<p class="gray">你现在的会员类型是：<?php if ($this->_tpl_vars['user']['isdealer'] == 1): ?>个人<?php else: ?>商家<?php endif; ?><?php if ($this->_tpl_vars['user']['isdealer'] == 2 && $this->_tpl_vars['user']['ischeck'] == 0): ?>&nbsp;&nbsp;|&nbsp;&nbsp;<span class="orange01">您的信息正在审核。</span>&nbsp;&nbsp; | &nbsp;&nbsp;<?php elseif ($this->_tpl_vars['user']['isdealer'] == 2 && $this->_tpl_vars['user']['ischeck'] == 2): ?>&nbsp;&nbsp;|&nbsp;&nbsp;<span class="orange01">您的信息未通过审核，未通过原因：<?php echo $this->_tpl_vars['user']['checknotice']; ?>
。</span><?php endif; ?></p>
	<div class="commonbox02 mt20">
		<h3>信息统计</h3>
		<div class="box">
			<ul class="usercarcount clearfix">
				<li>您发布的二手车：<span class="fb orange01"><?php echo $this->_tpl_vars['usercarcounts']['0']; ?>
</span> 辆</li>
				<li>目前在售的二手车：<span class="fb orange01"><?php echo $this->_tpl_vars['usercarcounts']['2']; ?>
</span> 辆</li>
				<li>已卖出的二手车：<span class="fb orange01"><?php echo $this->_tpl_vars['usercarcounts']['1']; ?>
</span> 辆</li>
			</ul>
			<ul class="usercarcount clearfix">
				<li>您发布的租车：<span class="fb orange01"><?php echo $this->_tpl_vars['userrentcarcounts']['0']; ?>
</span> 辆</li>
				
			</ul>
		</div>
	</div>
</div>