<?php /* Smarty version 2.6.18, created on 2017-07-04 14:34:50
         compiled from m/user_addcar.html */ ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>途众好车</title>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
		
		<link href="<?php echo $this->_tpl_vars['weburl']; ?>
/templates/m/css/uikit/uikit.min.css" rel="stylesheet" type="text/css"/>
 		<link href="<?php echo $this->_tpl_vars['weburl']; ?>
/templates/m/css/business.css" rel="stylesheet" type="text/css"/>
	</head>
	<body>
		<div class="topbox uk-grid uk-grid-collapse">
			<div class="uk-width-1-10 uk-text-center left">
				<a href="#"><i class="uk-icon-chevron-left"></i></a>
			</div>
			<div class="uk-width-8-10 uk-text-center center">
				<span>添加车辆信息</span>
			</div>
			<div class="uk-width-1-10"></div>
		</div>
		
	<form name="form1" class="carform" enctype="multipart/form-data" method="post" action="index.php?m=user">	
		<div class="business-tianjia uk-margin-bottom">
			<div class="box business-hz">
				<div class="uk-grid uk-grid-collapse">
					<div class="uk-width-3-10 uk-text-left left2">
						品牌：
					</div>
					<div class="uk-width-7-10 uk-text-left right">
						<select name="p_brand" id="brand" datatype="n" nullmsg="请选择品牌！">
							<?php echo $this->_tpl_vars['select_brand']; ?>

						</select>
					</div>
				</div>
				<div class="uk-grid uk-grid-collapse">
					<div class="uk-width-3-10 uk-text-left left2">
						车系：
					</div>
					<div class="uk-width-7-10 uk-text-left right">
						<select class="subbrand" id="subbrand" name="p_subbrand" datatype="n" nullmsg="请选择车系！">
							<option  value="">请选择车系</option>
							<?php echo $this->_tpl_vars['select_subbrand']; ?>
                    
						</select>
					</div>
				</div>
				<div class="uk-grid uk-grid-collapse">
					<div class="uk-width-3-10 uk-text-left left2">
						车型：
					</div>
					<div class="uk-width-7-10 uk-text-left right">
						<select class="subbrand" id="subsubbrand" name="p_subsubbrand" datatype="n" nullmsg="请选择款式！">
							<option  value="">请选择款式</option>
							<?php echo $this->_tpl_vars['select_subsubbrand']; ?>
	
						</select>
					</div>
				</div>
			</div>
			<div class="box business-hz">
				<div class="uk-grid uk-grid-collapse">
					<div class="uk-width-3-10 uk-text-left left2">
						省份：
					</div>
					<div class="uk-width-7-10 uk-text-left right">
						<select name="aid" id="province">
							<?php echo $this->_tpl_vars['selectprovince']; ?>

						</select>
					</div>
				</div>
				<div class="uk-grid uk-grid-collapse">
					<div class="uk-width-3-10 uk-text-left left2">
						城市：
					</div>
					<div class="uk-width-7-10 uk-text-left right">
						<select name="cid" id="city">
							<?php echo $this->_tpl_vars['selectcity']; ?>

						</select>
					</div>
				</div>
			</div>

			<div class="box business-hz">
				<div class="uk-grid uk-grid-collapse">
					<div class="uk-width-3-10 uk-text-left left2">
						上牌日期：
					</div>
					<div class="uk-width-7-10 uk-text-left right">
						<select name="p_year" id="p_year">
							<?php echo $this->_tpl_vars['select_year']; ?>

						</select>
						<select name="p_month" id="p_month">
							<?php echo $this->_tpl_vars['select_month']; ?>

						</select>
					</div>
				</div>
			</div>
			<div class="box business-hz">
				<div class="uk-grid uk-grid-collapse">
					<div class="uk-width-8-10 left">
						<input name="p_kilometre" type="text" id="p_kilometre" size="5" value="<?php echo $this->_tpl_vars['cars']['p_kilometre']; ?>
" placeholder="里程数" />
					</div>
					<div class="uk-width-2-10 uk-text-right right">
						万公里
					</div>
				</div>
			</div>
			<div class="box business-hz">
				<div class="uk-grid uk-grid-collapse">
					<div class="uk-width-8-10 left">
						<input type="text" name="p_price"  size="5" value="<?php echo $this->_tpl_vars['cars']['p_price']; ?>
" datatype="s" nullmsg="请填写价格！" placeholder="预售价">
					</div>
					<div class="uk-width-2-10 uk-text-right right">
						万元
					</div>
				</div>
			</div>
			<div class="box business-hz">
				<div class="uk-grid uk-grid-collapse">
					<div class="uk-width-8-10 left">
						<input type="text" name="p_newprice"  size="5" value="<?php echo $this->_tpl_vars['cars']['p_newprice']; ?>
" placeholder="出厂价">
					</div>
					<div class="uk-width-2-10 uk-text-right right">
						万元
					</div>
				</div>
			</div>
			<div class="box business-hz">
				<div class="uk-grid uk-grid-collapse">
					<div class="uk-width-8-10 left">
						<input type="text" name="p_tax"  size="5" value="<?php echo $this->_tpl_vars['cars']['p_tax']; ?>
" placeholder="购置税">
					</div>
					<div class="uk-width-2-10 uk-text-right right">
						万元
					</div>
				</div>
			</div>
			<div class="box business-hz">
				<div class="uk-grid uk-grid-collapse">
					<div class="uk-width-8-10 left">
						<input type="text" name="p_save"  size="5" value="<?php echo $this->_tpl_vars['cars']['p_save']; ?>
" placeholder="为您节省">
					</div>
					<div class="uk-width-2-10 uk-text-right right">
						万元
					</div>
				</div>
			</div>
			<div class="box business-hz">
				<div class="uk-grid uk-grid-collapse">
					<div class="uk-width-3-10 uk-text-left left2">
						车体颜色：
					</div>
					<div class="uk-width-7-10 uk-text-left right">
						<select name="p_color">
							<?php echo $this->_tpl_vars['select_color']; ?>

						</select>
					</div>
				</div>
			</div>
			<div class="box business-hz">
				<div class="uk-grid uk-grid-collapse">
					<div class="uk-width-3-10 uk-text-left left2">
						车型选择：
					</div>
					<div class="uk-width-7-10 uk-text-left right">
						<select name="p_model">
							<?php echo $this->_tpl_vars['select_model']; ?>

						</select>
					</div>
				</div>
			</div>
			<div class="box business-hz">
				<div class="uk-grid uk-grid-collapse">
					<div class="uk-width-3-10 uk-text-left left2">
						排量：
					</div>
					<div class="uk-width-7-10 uk-text-left right">
						<select name="p_gas">
							<?php echo $this->_tpl_vars['select_gas']; ?>

						</select>
					</div>
				</div>
			</div>
			<div class="box business-hz">
				<div class="uk-grid uk-grid-collapse">
					<div class="uk-width-3-10 uk-text-left left2">
						变速箱：
					</div>
					<div class="uk-width-7-10 uk-text-left right">
						<select name="p_transmission">
							<?php echo $this->_tpl_vars['select_transmission']; ?>

						</select>
					</div>
				</div>
			</div>
			<div class="box business-hz">
				<div class="uk-grid uk-grid-collapse">
					<div class="uk-width-3-10 uk-text-left left2">
						进口国产：
					</div>
					<div class="uk-width-7-10 uk-text-left right">
						<select name="p_country">
							<?php echo $this->_tpl_vars['select_country']; ?>

						</select>
					</div>
				</div>
			</div>


			<?php $_from = $this->_tpl_vars['paralist']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['paralist']):
?>
			<div class="box business-hz">
				<div class="uk-grid uk-grid-collapse">
					<div class="uk-width-3-10 uk-text-left left2">
						<?php echo $this->_tpl_vars['paralist']['c_name']; ?>
：
					</div>
					<div class="uk-width-7-10 uk-text-left right">
						<?php if ($this->_tpl_vars['paralist']['type_name'] == 'input'): ?>
							<input name="para<?php echo $this->_tpl_vars['paralist']['id']; ?>
" type="text" size="20" value="<?php echo $this->_tpl_vars['paralist']['c_value']; ?>
"/>
						<?php elseif ($this->_tpl_vars['paralist']['type_name'] == 'textarea'): ?>	
							<textarea name="para<?php echo $this->_tpl_vars['paralist']['id']; ?>
" ><?php echo $this->_tpl_vars['paralist']['c_value']; ?>
</textarea>
						<?php elseif ($this->_tpl_vars['paralist']['type_name'] == 'select'): ?>	
							<select name="para<?php echo $this->_tpl_vars['paralist']['id']; ?>
"><?php echo $this->_tpl_vars['paralist']['select']; ?>
</select>
						<?php elseif ($this->_tpl_vars['paralist']['type_name'] == 'time'): ?>	
							<input name="para<?php echo $this->_tpl_vars['paralist']['id']; ?>
" type="text" size="20" class="laydate-icon" value="<?php echo $this->_tpl_vars['paralist']['c_value']; ?>
" onclick="laydate()"/>
						<?php elseif ($this->_tpl_vars['paralist']['type_name'] == 'checkbox'): ?>	
							<?php echo $this->_tpl_vars['checkbox_str']; ?>

						<?php endif; ?>
					</div>
				</div>
			</div>
			<?php endforeach; endif; unset($_from); ?>

			<div class="box business-hz">
				<textarea  name="p_details" cols="" rows="" placeholder="备注" class="business-hz"><?php echo $this->_tpl_vars['cars']['p_details']; ?>
</textarea>
			</div>
		</div>
		<input type="submit" value="下一步" class="business-button g uk-button">
		<input type="hidden" name="a" value="<?php echo $this->_tpl_vars['ac']; ?>
">
		<input type="hidden" name="id" value="<?php echo $this->_tpl_vars['cars']['p_id']; ?>
">
	</form>
		<script type="text/javascript" src="<?php echo $this->_tpl_vars['weburl']; ?>
/static/js/uikit/jquery-3.2.0.min.js"></script>
		<script type="text/javascript" src="<?php echo $this->_tpl_vars['weburl']; ?>
/static/js/uikit/uikit.min.js"></script>
		<script type="text/javascript" src="<?php echo $this->_tpl_vars['weburl']; ?>
/static/js/laydate/laydate.js"></script>
		<script type="text/javascript">
		$(function(){
			//品牌选择
			$("#brand").change(function(){
				$.get("<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=ajax&ajax=1", { 
					brandid :  $("#brand").val() 
				}, function (data, textStatus){
									 $("#subbrand").html(data); // 把返回的数据添加到页面上
					}
				);
			});
			//品牌选择
			$("#subbrand").change(function(){
				$.get("<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=ajax&ajax=1", { 
					subbrandid :  $("#subbrand").val() 
				}, function (data, textStatus){
									 $("#subsubbrand").html(data); // 把返回的数据添加到页面上
					}
				);
			});
			<?php if ($this->_tpl_vars['setting']['version'] == 3): ?>
			//城市选择
			$("#province").change(function(){
				$.get("<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=ajax&ajax=1", { 
					cityid :  $("#province").val() 
				}, function (data, textStatus){
					$("#city").html(data); // 把返回的数据添加到页面上
							}
				);
			});
			<?php endif; ?>
		});
		</script>
	</body>
</html>










