<?php /* Smarty version 2.6.18, created on 2017-07-03 11:22:11
         compiled from default/default/user_upinfo.html */ ?>
<form name="form1" class="carform" method="post" action="index.php?m=user">
	<table cellspacing="0" cellpadding="0" width="100%"  class="maintable">
		<tr>
			<th>用户名：</th>
			<td colspan="3"><?php echo $this->_tpl_vars['user']['username']; ?>
</td>
		</tr>
		<tr>
			<th>邮箱地址：</th>
			<td colspan="3">
				<input type="text" name="email" value="<?php echo $this->_tpl_vars['user']['email']; ?>
" size="30" class="inp01" datatype="e" ajaxurl="index.php?m=user&ajax=1" nullmsg="请输入邮箱地址！" errormsg="请输入正确的邮箱地址！"/>
			</td>
		</tr>
		<tr>
            <th>联系人：</th>
            <td><input type="text" name="nicname" value="<?php echo $this->_tpl_vars['user']['nicname']; ?>
" class="inp01"  datatype="s" nullmsg="请填写联系人！"/></td>
        </tr>
		<tr>
			<th>手机号码：</th>
			<td colspan="3">
				<input type="text" name="mobilephone" value="<?php echo $this->_tpl_vars['user']['mobilephone']; ?>
" size="20" class="inp01" datatype="m" ajaxurl="index.php?m=user&ajax=1" nullmsg="请输入手机号！" errormsg="请输入正确的手机号！"/>
			</td>
		</tr>
		<tr>
			<th></th>
			<td colspan="5">
				<div class="buttons">
					<input type="submit" value="提 交" class="submit">
					<input type="hidden" name="a" value="<?php echo $this->_tpl_vars['ac']; ?>
">
					<input type="hidden" name="id" value="<?php echo $this->_tpl_vars['user']['id']; ?>
">
				</div>
			</td>
		</tr>
	</table>
</form>