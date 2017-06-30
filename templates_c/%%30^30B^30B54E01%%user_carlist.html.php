<?php /* Smarty version 2.6.18, created on 2017-06-29 16:40:19
         compiled from default/default/user_carlist.html */ ?>

			<div class="userrightmenu">
				<span class="fr">您已发布二手车 <span class="orange01"><?php echo $this->_tpl_vars['usercarcounts']['0']; ?>
</span> 条，在售 <span class="orange01"><?php echo $this->_tpl_vars['usercarcounts']['2']; ?>
</span> 条，已售 <span class="orange01"><?php echo $this->_tpl_vars['usercarcounts']['1']; ?>
</span> 条。</span><a href="<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=user&a=addcar">+发布二手车</a>
			</div>
			<div class="userrightsearch clearfix">
				<div class="fr">
					<form method="get" action="<?php echo $this->_tpl_vars['weburl']; ?>
/index.php">
						<input type="text" name="keywords" class="keyword" size="30"><input type="submit" class="but01" value="搜 索"><input type="hidden" name="m" value="user"><input type="hidden" name="a" value="carlist">
					</form>
				</div>
			</div>
			<table cellspacing="0" cellpadding="0" width="100%"  class="listtable">
                <tr>
					<th width="100">图片</th>
                    <th>车型信息</th>
                    <th>报价</th>
                    <th width="130">操作</th>
                </tr>
                <?php $_from = $this->_tpl_vars['carslist']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['cars']):
?>
                <tr bgcolor="#ffffff" onmouseover="style.backgroundColor='#f5f5f5'"  onmouseout="style.backgroundColor='#ffffff'">
					<td align="center"><?php if ($this->_tpl_vars['cars']['p_mainpic'] <> ''): ?><img src="<?php echo $this->_tpl_vars['cars']['p_mainpic']; ?>
" width="80" height="60"/><?php else: ?><div class="noimg">未上传图片</div><?php endif; ?></td>
                    <td align="left">
						<p><a href="<?php echo $this->_tpl_vars['cars']['p_url']; ?>
" target="_blank" class="f14 fb"><?php if ($this->_tpl_vars['cars']['p_allname'] != ""): ?><?php echo $this->_tpl_vars['cars']['p_allname']; ?>
<?php else: ?><?php echo $this->_tpl_vars['cars']['p_name']; ?>
<?php endif; ?></a> <?php if ($this->_tpl_vars['cars']['p_pics'] != ""): ?><span class="red">图</span><?php endif; ?> <?php if ($this->_tpl_vars['cars']['issell'] == 1): ?><span class="red">已出售</span><?php endif; ?></p>
						<p class="gray">排量：<?php echo $this->_tpl_vars['cars']['p_gas']; ?>
 升 / 上牌日期：<?php echo $this->_tpl_vars['cars']['p_year']; ?>
年<?php echo $this->_tpl_vars['cars']['p_month']; ?>
月 / 颜色：<?php echo $this->_tpl_vars['cars']['p_color']; ?>
 / 行驶里程：<?php echo $this->_tpl_vars['cars']['p_kilometre']; ?>
 万公里 / 信息编号:<?php echo $this->_tpl_vars['cars']['p_no']; ?>
</p>
						<p class="gray">刷新时间：<?php echo $this->_tpl_vars['cars']['listtime']; ?>
</p>
					</td>
                    <td align="center" class="orange01 f14"><?php echo $this->_tpl_vars['cars']['p_price']; ?>
万</td>
                    <td align="center" class="acmenu">
						<p><a href="index.php?m=user&a=editcar&id=<?php echo $this->_tpl_vars['cars']['p_id']; ?>
&page=<?php echo $this->_tpl_vars['currpage']; ?>
">编辑</a> | <a href="index.php?m=user&a=refresh&id=<?php echo $this->_tpl_vars['cars']['p_id']; ?>
&page=<?php echo $this->_tpl_vars['currpage']; ?>
">刷新</a> | <a href="javascript:if(confirm('确实要删除吗?'))location='index.php?m=user&a=delcar&id=<?php echo $this->_tpl_vars['cars']['p_id']; ?>
&page=<?php echo $this->_tpl_vars['currpage']; ?>
'">删除</a></p>
						<p><a href="index.php?m=user&a=sellcar&sell=<?php if ($this->_tpl_vars['cars']['issell'] == 1): ?>0<?php else: ?>1<?php endif; ?>&id=<?php echo $this->_tpl_vars['cars']['p_id']; ?>
&page=<?php echo $this->_tpl_vars['currpage']; ?>
"><?php if ($this->_tpl_vars['cars']['issell'] == 1): ?>恢复为在售<?php else: ?>设置为已出售<?php endif; ?></a> 
						</p>
					</td>
                </tr>
                <?php endforeach; endif; unset($_from); ?>
            </table>
			<div class="page_list">
				<?php echo $this->_tpl_vars['button_basic']; ?>

			</div>