<?php /* Smarty version 2.6.18, created on 2017-07-03 11:22:16
         compiled from default/default/user_addlogo.html */ ?>
<script type="text/javascript">
	KindEditor.ready(function(K) {
			var editor = K.editor({
				uploadJson : 'index.php?m=upload&session_id=<?php echo $this->_tpl_vars['sessionid']; ?>
',
				allowFileManager : false,
			});
			K('#image1').click(function() {
				editor.loadPlugin('image', function() {
					editor.plugin.imageDialog({
						imageUrl : K('#url1').val(),
						clickFn : function(url, title, width, height, border, align) {
							K('#url1').val(url);
							editor.hideDialog();
						}
					});
				});
			});
	});
</script>
<form name="form1" class="carform" method="post" action="index.php?m=user">
<table width="100%" border="0" cellpadding="5" cellspacing="0" class="maintable">
	<tr>
		<th></th>
		<td><img src="<?php echo $this->_tpl_vars['user']['logo']; ?>
" width="100" height="100"/>
		</td>
	</tr>
	<tr>
		<th>头像：</th>
		<td><input type="text" name="logo" id="url1" value="<?php echo $this->_tpl_vars['user']['logo']; ?>
" size="60"/>
			<input type="button" id="image1" value="选择图片" class="uploadbut02"/>
		</td>
	</tr>
	<tr>
		<th></th>
		<td class="gray01">上传头像图片大小为：100*100像素</td>
	</tr>
    <tr>
        <td>&nbsp;</td>
        <td colspan="3"><div class="buttons">
           <input type="submit" name="Submit" value="提 交" />
           <input type="hidden" name="a" value="<?php echo $this->_tpl_vars['ac']; ?>
">
           </div>
		</td>
    </tr>
</table>
</form>