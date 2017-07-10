<?php /* Smarty version 2.6.18, created on 2017-07-07 17:34:24
         compiled from default/default/user_openshop.html */ ?>
<form name="form1" class="carform" method="post" action="index.php?m=user">
                <table width="100%" border="0" cellpadding="5" cellspacing="0" class="maintable">
					<tr>
						 <td width="20%" align="right">公司类型：</td>
						 <td>
							<select name="shoptype" id="shoptype" datatype="n" nullmsg="请选择公司类型！">
								<?php echo $this->_tpl_vars['select_dealer_category']; ?>

							</select>
						 </td>
					</tr>
                    <tr>
                        <td width="20%" align="right">公司名称：</td>
                        <td><input name="company" type="text" value="<?php echo $this->_tpl_vars['user']['company']; ?>
" size="30" class="inp01" datatype="s" nullmsg="请填写公司名称！"/></td>
                    </tr>
					<tr>
                        <td align="right">公司地址：</td>
                        <td><input name="address" type="text" value="<?php echo $this->_tpl_vars['user']['address']; ?>
" size="50" class="inp01"  datatype="s" nullmsg="请填写公司地址！"/></td>
                    </tr>
                    <tr>
                        <td align="right">联系人：</td>
                        <td><input type="text" name="nicname" value="<?php echo $this->_tpl_vars['user']['nicname']; ?>
" class="inp01"  datatype="s" nullmsg="请填写联系人！"/></td>
                    </tr>
                    <tr>
                        <td align="right">手机：</td>
                        <td><input type="text" name="mobilephone" value="<?php echo $this->_tpl_vars['user']['mobilephone']; ?>
" class="inp01" datatype="m" ajaxurl="index.php?m=user&ajax=1" nullmsg="请输入手机号！" errormsg="请输入正确的手机号！"/></td>
                    </tr>
                    <tr>
                        <td align="right">固话：</td>
                        <td><input type="text" name="tel" value="<?php echo $this->_tpl_vars['user']['tel']; ?>
" class="inp01" datatype="/[\d]{7}/" ignore="ignore"  errormsg="请输入正确的固话号码！" /></td>
                    </tr>
                    <tr>
                        <td align="right">简介：</td>
                        <td colspan="3"><textarea name="shopdetail" rows="5" cols="60" class="textarea01"><?php echo $this->_tpl_vars['user']['shopdetail']; ?>
</TEXTAREA></td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td colspan="3"><div class="buttons">
                                <input type="submit" name="Submit" value="提 交" />
                                <input type="hidden" name="a" value="<?php echo $this->_tpl_vars['ac']; ?>
">
                            </div></td>
                    </tr>
                </table>
            </form>