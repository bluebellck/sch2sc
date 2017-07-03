<?php /* Smarty version 2.6.18, created on 2017-06-30 17:17:24
         compiled from m/add_carpicture.html */ ?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" >	
	<title>途众好车</title>
	<link rel="stylesheet" href="<?php echo $this->_tpl_vars['weburl']; ?>
/templates/m/css/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo $this->_tpl_vars['weburl']; ?>
/templates/m/css/bootstrap/css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="<?php echo $this->_tpl_vars['weburl']; ?>
/templates/m/css/mobile.css">
	<link rel="stylesheet" href="<?php echo $this->_tpl_vars['weburl']; ?>
/templates/m/css/common.css">
	
	<script type="text/javascript" src="<?php echo $this->_tpl_vars['weburl']; ?>
/static/js/jquery-1-11-3.js"></script>
	<script type="text/javascript" src="<?php echo $this->_tpl_vars['weburl']; ?>
/static/js/jquery.mobile.custom.min.js"></script>
	<script src="<?php echo $this->_tpl_vars['weburl']; ?>
/templates/m/css/bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="/static/js/Validform_v5.3.2_min.js"></script>
</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="mobile_user_top text-center">
				<a href="javascript:window.history.go(-1);"><img src="/static/img/user_back.jpg"></a>
				上传图片
			</div>
		</div>
		<form name="form1" class="carform" enctype="multipart/form-data" method="post" action="<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=user">
		<div id="addpicContainer">
			<ul class="upload" id="piclist">
				<li class="pic01">
					<span class="add">+</span>
					<input type="file" multiple="multiple" class="inputfile"/>
					<span class="pic">
						<?php if ($this->_tpl_vars['cars']['p_mainpic'] <> ''): ?>
							<img src='<?php echo $this->_tpl_vars['cars']['p_mainpic']; ?>
' alt="主图" width='90' height='60'/>
						<?php endif; ?>
						<input type='hidden' name='p_mainpic' value='<?php echo $this->_tpl_vars['cars']['p_mainpic']; ?>
'>
					</span>
					<span class="loading"></span>
					<p class="upload_text">
						主图
						<img src="<?php echo $this->_tpl_vars['weburl']; ?>
/static/img/delete.png" width="22" height="22" class="del_img" <?php if ($this->_tpl_vars['cars']['p_mainpic'] <> ''): ?>style="display:block;"<?php endif; ?>>
					</p>
				</li>
				<li class="pic02">
					<span class="add">+</span>
					<input type="file" multiple="multiple" class="inputfile"/>
					<span class="pic">
						<?php if ($this->_tpl_vars['cars']['p_backpic'] <> ''): ?>
							<img src='<?php echo $this->_tpl_vars['cars']['p_backpic']; ?>
' alt="正面照" width='90' height='60'/>
						<?php endif; ?>
						<input type='hidden' name='p_backpic' value='<?php echo $this->_tpl_vars['cars']['p_backpic']; ?>
'>
					</span>
					<span class="loading"></span>
					<p class="upload_text">
						正面照
						<img src="<?php echo $this->_tpl_vars['weburl']; ?>
/static/img/delete.png" width="22" height="22" class="del_img" <?php if ($this->_tpl_vars['cars']['p_backpic'] <> ''): ?>style="display:block;"<?php endif; ?>>
					</p>
				</li>
				<li class="pic03"><span class="add">+</span><input type="file" multiple="multiple" class="inputfile"/><span class="pic"><?php if ($this->_tpl_vars['cars']['p_foresightpic'] <> ''): ?><img src='<?php echo $this->_tpl_vars['cars']['p_foresightpic']; ?>
' alt="侧面正照" width='90' height='60'/><?php endif; ?><input type='hidden' name='p_foresightpic' value='<?php echo $this->_tpl_vars['cars']['p_foresightpic']; ?>
'></span><span class="loading"></span><p class="upload_text">侧面正照<img src="<?php echo $this->_tpl_vars['weburl']; ?>
/static/img/delete.png" width="22" height="22" class="del_img" <?php if ($this->_tpl_vars['cars']['p_foresightpic'] <> ''): ?>style="display:block;"<?php endif; ?>></p></li>
				<li class="pic04"><span class="add">+</span><input type="file" multiple="multiple" class="inputfile"/><span class="pic"><?php if ($this->_tpl_vars['cars']['p_leftforepic'] <> ''): ?><img src='<?php echo $this->_tpl_vars['cars']['p_leftforepic']; ?>
' alt="尾部正面照" width='90' height='60'/><?php endif; ?><input type='hidden' name='p_leftforepic' value='<?php echo $this->_tpl_vars['cars']['p_leftforepic']; ?>
'></span><span class="loading"></span><p class="upload_text">尾部正面照<img src="<?php echo $this->_tpl_vars['weburl']; ?>
/static/img/delete.png" width="22" height="22" class="del_img" <?php if ($this->_tpl_vars['cars']['p_leftforepic'] <> ''): ?>style="display:block;"<?php endif; ?>></p></li>
				<li class="pic05"><span class="add">+</span><input type="file" multiple="multiple" class="inputfile"/><span class="pic"><?php if ($this->_tpl_vars['cars']['p_rightforepic'] <> ''): ?><img src='<?php echo $this->_tpl_vars['cars']['p_rightforepic']; ?>
' alt="驾驶室正面照" width='90' height='60'/><?php endif; ?><input type='hidden' name='p_rightforepic' value='<?php echo $this->_tpl_vars['cars']['p_rightforepic']; ?>
'></span><span class="loading"></span><p class="upload_text">驾驶室正面照<img src="<?php echo $this->_tpl_vars['weburl']; ?>
/static/img/delete.png" width="22" height="22" class="del_img" <?php if ($this->_tpl_vars['cars']['p_rightforepic'] <> ''): ?>style="display:block;"<?php endif; ?>></p></li>
				<li class="pic06"><span class="add">+</span><input type="file" multiple="multiple" class="inputfile"/><span class="pic"><?php if ($this->_tpl_vars['cars']['p_backsightpic'] <> ''): ?><img src='<?php echo $this->_tpl_vars['cars']['p_backsightpic']; ?>
' alt="后排座正面照" width='90' height='60'/><?php endif; ?><input type='hidden' name='p_backsightpic' value='<?php echo $this->_tpl_vars['cars']['p_backsightpic']; ?>
'></span><span class="loading"></span><p class="upload_text">后排座正面照<img src="<?php echo $this->_tpl_vars['weburl']; ?>
/static/img/delete.png" width="22" height="22" class="del_img" <?php if ($this->_tpl_vars['cars']['p_backsightpic'] <> ''): ?>style="display:block;"<?php endif; ?>></p></li>
				<li class="pic07"><span class="add">+</span><input type="file" multiple="multiple" class="inputfile"/><span class="pic"><?php if ($this->_tpl_vars['cars']['p_leftbackpic'] <> ''): ?><img src='<?php echo $this->_tpl_vars['cars']['p_leftbackpic']; ?>
' alt="仪表台正面照" width='90' height='60'/><?php endif; ?><input type='hidden' name='p_leftbackpic' value='<?php echo $this->_tpl_vars['cars']['p_leftbackpic']; ?>
'></span><span class="loading"></span><p class="upload_text">仪表台正面照<img src="<?php echo $this->_tpl_vars['weburl']; ?>
/static/img/delete.png" width="22" height="22" class="del_img" <?php if ($this->_tpl_vars['cars']['p_leftbackpic'] <> ''): ?>style="display:block;"<?php endif; ?>></p></li>
				<li class="pic08"><span class="add">+</span><input type="file" multiple="multiple" class="inputfile"/><span class="pic"><?php if ($this->_tpl_vars['cars']['p_rightbackpic'] <> ''): ?><img src='<?php echo $this->_tpl_vars['cars']['p_rightbackpic']; ?>
' alt="仪表正面照" width='90' height='60'/><?php endif; ?><input type='hidden' name='p_rightbackpic' value='<?php echo $this->_tpl_vars['cars']['p_rightbackpic']; ?>
'></span><span class="loading"></span><p class="upload_text">仪表正面照<img src="<?php echo $this->_tpl_vars['weburl']; ?>
/static/img/delete.png" width="22" height="22" class="del_img" <?php if ($this->_tpl_vars['cars']['p_rightbackpic'] <> ''): ?>style="display:block;"<?php endif; ?>></p></li>
				<li class="pic09"><span class="add">+</span><input type="file" multiple="multiple" class="inputfile"/><span class="pic"><?php if ($this->_tpl_vars['cars']['p_leftpic'] <> ''): ?><img src='<?php echo $this->_tpl_vars['cars']['p_leftpic']; ?>
' alt="发动机舱正面照" width='90' height='60'/><?php endif; ?><input type='hidden' name='p_leftpic' value='<?php echo $this->_tpl_vars['cars']['p_leftpic']; ?>
'></span><span class="loading"></span><p class="upload_text">发动机舱正面照<img src="<?php echo $this->_tpl_vars['weburl']; ?>
/static/img/delete.png" width="22" height="22" class="del_img" <?php if ($this->_tpl_vars['cars']['p_leftpic'] <> ''): ?>style="display:block;"<?php endif; ?>></p></li>
				<li class="pic10"><span class="add">+</span><input type="file" multiple="multiple" class="inputfile"/><span class="pic"><?php if ($this->_tpl_vars['cars']['p_sidepic'] <> ''): ?><img src='<?php echo $this->_tpl_vars['cars']['p_sidepic']; ?>
' alt="铭牌正面照" width='90' height='60'/><?php endif; ?><input type='hidden' name='p_sidepic' value='<?php echo $this->_tpl_vars['cars']['p_sidepic']; ?>
'></span><span class="loading"></span><p class="upload_text">铭牌正面照<img src="<?php echo $this->_tpl_vars['weburl']; ?>
/static/img/delete.png" width="22" height="22" class="del_img" <?php if ($this->_tpl_vars['cars']['p_sidepic'] <> ''): ?>style="display:block;"<?php endif; ?>></p></li>
				<li class="pic11"><span class="add">+</span><input type="file" multiple="multiple" class="inputfile"/><span class="pic"><?php if ($this->_tpl_vars['cars']['p_wheelpic'] <> ''): ?><img src='<?php echo $this->_tpl_vars['cars']['p_wheelpic']; ?>
' alt="后备箱正面照" width='90' height='60'/><?php endif; ?><input type='hidden' name='p_wheelpic' value='<?php echo $this->_tpl_vars['cars']['p_wheelpic']; ?>
'></span><span class="loading"></span><p class="upload_text">后备箱正面照<img src="<?php echo $this->_tpl_vars['weburl']; ?>
/static/img/delete.png" width="22" height="22" class="del_img" <?php if ($this->_tpl_vars['cars']['p_wheelpic'] <> ''): ?>style="display:block;"<?php endif; ?>></p></li>
				<li class="pic12"><span class="add">+</span><input type="file" multiple="multiple" class="inputfile"/><span class="pic"><?php if ($this->_tpl_vars['cars']['p_rightpic'] <> ''): ?><img src='<?php echo $this->_tpl_vars['cars']['p_rightpic']; ?>
' alt="备胎正面照" width='90' height='60'/><?php endif; ?><input type='hidden' name='p_rightpic' value='<?php echo $this->_tpl_vars['cars']['p_rightpic']; ?>
'></span><span class="loading"></span><p class="upload_text">备胎正面照<img src="<?php echo $this->_tpl_vars['weburl']; ?>
/static/img/delete.png" width="22" height="22" class="del_img" <?php if ($this->_tpl_vars['cars']['p_rightpic'] <> ''): ?>style="display:block;"<?php endif; ?>></p></li>
				<li class="pic12"><span class="add">+</span><input type="file" multiple="multiple" class="inputfile"/><span class="pic"><?php if ($this->_tpl_vars['cars']['p_driverlicpic'] <> ''): ?><img src='<?php echo $this->_tpl_vars['cars']['p_driverlicpic']; ?>
' alt="驾驶证照" width='90' height='60'/><?php endif; ?><input type='hidden' name='p_driverlicpic' value='<?php echo $this->_tpl_vars['cars']['p_driverlicpic']; ?>
'></span><span class="loading"></span><p class="upload_text">驾驶证照<img src="<?php echo $this->_tpl_vars['weburl']; ?>
/static/img/delete.png" width="22" height="22" class="del_img" <?php if ($this->_tpl_vars['cars']['p_driverlicpic'] <> ''): ?>style="display:block;"<?php endif; ?>></p></li>
				<li class="pic12"><span class="add">+</span><input type="file" multiple="multiple" class="inputfile"/><span class="pic"><?php if ($this->_tpl_vars['cars']['p_drivinglicpic'] <> ''): ?><img src='<?php echo $this->_tpl_vars['cars']['p_drivinglicpic']; ?>
' alt="行驶证照" width='90' height='60'/><?php endif; ?><input type='hidden' name='p_drivinglicpic' value='<?php echo $this->_tpl_vars['cars']['p_drivinglicpic']; ?>
'></span><span class="loading"></span><p class="upload_text">行驶证照<img src="<?php echo $this->_tpl_vars['weburl']; ?>
/static/img/delete.png" width="22" height="22" class="del_img" <?php if ($this->_tpl_vars['cars']['p_drivinglicpic'] <> ''): ?>style="display:block;"<?php endif; ?>></p></li>
			</ul>
		</div>
		<div class="upload_button">
			<input type="submit" value="添加新车">
			<input type="hidden" name="a" value="<?php echo $this->_tpl_vars['ac']; ?>
">
			<input type="hidden" name="carid" value="<?php echo $this->_tpl_vars['carid']; ?>
">
			<input type="hidden" name="page" value="<?php echo $this->_tpl_vars['page_g']; ?>
">
		</div>
		</form>
	</div>
<script type="text/javascript">
$(document).ready(function() {
	
	//响应文件+成功事件
	$(".inputfile").change(function(){
		//创建FormData对象
		var data = new FormData();
		//为FormData对象+数据
		$.each($(this)[0].files, function(i, file) {
			data.append('upload_file'+i, file);
		});
		var picname = $(this).siblings('.pic').children('input').attr('name');
		data.append("picname",picname);
		var loading = $(this).siblings(".loading");
		loading.show();	//显示加载图片
		var div = $(this).siblings(".pic");
		var del = $(this).siblings("p").children("img");
		//发送数据
		$.ajax({
			url:'index.php?m=upload_car',
			type:'POST',
			data:data,
			cache: false,
			contentType: false,	//不可缺参数
			processData: false,		//不可缺参数
			success:function(data){
				//第一个feedback数据直接append，其他的用before第1个（ .eq(0).before() ）放至最前面。
				//data.replace(/&lt;/g,'<').replace(/&gt;/g,'>') 转换html标签，否则图片无法显示。
				div.html(data);
				loading.hide();	//加载成功移除加载图片
				del.show();
			},
			error:function(){
				alert('上传出错');
				loading.hide();	//加载失败移除加载图片
			}
		});
	});
	$(".del_img").bind("click",function(){
		var t = $(this);
		var src = t.parent().siblings(".pic").children("input").val();
		var cid = $("input[name=carid]").val();
		var loc = t.parent().siblings(".pic").children("input").attr('name');
		$.get("<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=ajax&ajax=1",{addpicture:src,cid:cid,loc:loc},function(data){
			if(data){
				t.parent().siblings(".pic").children("img").remove();
				t.parent().siblings(".pic").children("input").val('');
				t.hide();
			}else{
				alert('图片删除失败，请刷新重试');
			}
		})
	})

	$("#piclist li").children('.add').click(function(){
		$(this).siblings('.inputfile').click();
	});
});

</script>
</body>
</html>