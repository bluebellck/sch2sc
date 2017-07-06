<?php /* Smarty version 2.6.18, created on 2017-07-06 09:33:02
         compiled from default/default/cars.html */ ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title><?php echo $this->_tpl_vars['cars']['p_allname']; ?>
-<?php echo $this->_tpl_vars['setting']['title']; ?>
</title>
		<meta content="<?php echo $this->_tpl_vars['setting']['keywords']; ?>
" name="keywords" />
		<meta content="<?php echo $this->_tpl_vars['setting']['description']; ?>
" name="description" />
		<link href="<?php echo $this->_tpl_vars['weburl']; ?>
/templates/default/<?php echo $this->_tpl_vars['setting']['templates']; ?>
/css/car.css" rel="stylesheet" type="text/css"/>
		<script type="text/javascript" src="<?php echo $this->_tpl_vars['weburl']; ?>
/templates/default/<?php echo $this->_tpl_vars['setting']['templates']; ?>
/js/jquery-1.7.1.js"></script>
		<script type="text/javascript" src="<?php echo $this->_tpl_vars['weburl']; ?>
/static/js/layer/layer.min.js"></script>
		<script type="text/javascript" src="<?php echo $this->_tpl_vars['weburl']; ?>
/static/js/laydate/laydate.js"></script>
		<script type="text/javascript" src="<?php echo $this->_tpl_vars['weburl']; ?>
/static/js/jquery.SuperSlide.2.1.js"></script>
		<script type="text/javascript" src="<?php echo $this->_tpl_vars['weburl']; ?>
/static/js/Validform_v5.3.2_min.js"></script>
		<script type="text/javascript" src="<?php echo $this->_tpl_vars['weburl']; ?>
/templates/default/<?php echo $this->_tpl_vars['setting']['templates']; ?>
/js/jquery.SuperSlide.2.1.js"></script>
		<script language="JavaScript">
			$(function() {
				//品牌选择
				$("#brand").change(function(){
					$.get("<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?mod=ajax&ajax=1", { 
						pid :  $("#brand").val() 
					}, function (data, textStatus){
						   $("#subbrand").html(data); // 把返回的数据添加到页面上
						}
					);
				});
				$("div.car_tab ul li a").mouseover(function() {
					$(this).addClass("here").parent().siblings().children().removeClass("here");
					var index = $div_li.index(this);
					$("div.cartab_box > div").eq(index).show().siblings().hide();
				});
				$("#hits").load("<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=ajax&ajax=1&carshit=1&id=<?php echo $this->_tpl_vars['cars']['p_id']; ?>
");
				$(".emcity").toggle(
				  function () {
					$(".emission_city").show();
				  },
				  function () {
					$(".emission_city").hide();
				  }
				);
				//表单验证
				$(".yuyueform").Validform({
					tiptype:3
				});

				$('#yuyue').on('click', function(){
					var yuyueindex =  $.layer({
						type: 1,
						title: '预约看车',
						shade: [0.5, '#000'],
						area: ['460px', 'auto'],
						page: {dom: '#A1'}
					});
					$('#btnYuyueLookCar').on('click', function(){
						$.post("<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=ajax&ajax=1&yuyue=1",{
							pid: <?php echo $this->_tpl_vars['cars']['p_id']; ?>
, 
							uid: <?php echo $this->_tpl_vars['cars']['uid']; ?>
, 
							name: $("#A1 input[name='name']").val(), 
							mobilephone: $("#A1 input[name='mobilephone']").val(),
							ordertime: $("#A1 input[name='ordertime']").val(),
							orderinfo:$("#A1 textarea[name='orderinfo']").val()
						},function(data){
							if (data==1)
							{
								layer.close(yuyueindex);
								layer.alert("预约成功！请耐心等待商家和您联系！", 9);
								$('#yuyueform')[0].reset();
							}
							else{
								layer.close(yuyueindex);
								layer.alert("预约失败！请再次预约！", 9);
							}
						});
					});
				});
				$('#xunjia').on('click', function(){
					 var xunjiaindex = $.layer({
						type: 1,
						title: '咨询底价',
						shade: [0.5, '#000'],
						area: ['460px', 'auto'],
						page: {dom: '#B1'}
					});
					$('#btnxuejia').on('click', function(){
						$.post("<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=ajax&ajax=1&xunjia=1",{
							pid: <?php echo $this->_tpl_vars['cars']['p_id']; ?>
, 
							uid: <?php echo $this->_tpl_vars['cars']['uid']; ?>
, 
							name: $("#B1 input[name='name']").val(), 
							mobilephone: $("#B1 input[name='mobilephone']").val(),
						},function(data){
							if (data==1)
							{
								layer.close(xunjiaindex);
								layer.alert("询价成功！请耐心等待商家和您联系！", 9);
								$('#xunjiaform')[0].reset();
							}
							else{
								layer.close(xunjiaindex);
								layer.alert("询价失败！请再次询价！", 9);
							}
						});
					});
				});	
				
			})
		</script>
		</head>
	<body>
<!--内容--> 
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "default/".($this->_tpl_vars['setting']['templates'])."/head.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div class="nav">您当前的位置：<a href="<?php echo $this->_tpl_vars['weburl']; ?>
/">首页</a> <span>></span> <a href="<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=search">买车</a> <span>></span> <?php echo $this->_tpl_vars['cars']['p_allname']; ?>
</div>
<div class="main mt10">
	<div class="carbox clearfix">
		<div class="carbox_left">
			<div class="carpicbox">
				<?php if ($this->_tpl_vars['cars']['issell'] == 1): ?>
					<div class="issell"></div>
				<?php endif; ?>
				<?php if ($this->_tpl_vars['cars']['p_mainpic'] <> ""): ?>
				<img src="<?php echo $this->_tpl_vars['weburl']; ?>
<?php echo $this->_tpl_vars['cars']['p_mainpic']; ?>
" id="BigImg"/>
				<?php else: ?>
				<img src="<?php echo $this->_tpl_vars['weburl']; ?>
/static/img/bigcar.jpg"/>
				<?php endif; ?>
			</div>
			<?php if ($this->_tpl_vars['pic_list'] != ""): ?>
			<div class="ladyScroll">
				<a class="prev" href="javascript:void(0)"></a>
				<div class="scrollWrap">
					<div class="dlList">
						<?php $_from = $this->_tpl_vars['pic_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['piclist']):
?>
						<dl>
							<dt><img src="<?php echo $this->_tpl_vars['weburl']; ?>
<?php echo $this->_tpl_vars['piclist']['smallpic']; ?>
" onmousemove="javascript:document.getElementById('BigImg').src='<?php echo $this->_tpl_vars['weburl']; ?>
<?php echo $this->_tpl_vars['piclist']['pic']; ?>
'"></dt>
						</dl>
						<?php endforeach; endif; unset($_from); ?>
					</div>
				</div>
				<a class="next" href="javascript:void(0)"></a>
			</div>
			<script type="text/javascript">
				jQuery(".ladyScroll").slide({ mainCell:".dlList", effect:"leftLoop",vis:5, autoPlay:true});
			</script>
			<?php endif; ?>
		</div>
		<div class="carbox_center">
		<ul class="clearfix">
			<?php $_from = $this->_tpl_vars['recombrandlist']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['skey'] => $this->_tpl_vars['recombrand']):
?>
			<li class="js-title">
				<a <?php if ($this->_tpl_vars['skey'] == 0): ?>class="current"<?php endif; ?> href="javascript:;"><img src="upload/brand/<?php echo $this->_tpl_vars['recombrand']['pic']; ?>
"><?php echo $this->_tpl_vars['recombrand']['b_name']; ?>
</a>
            </li>
			<?php endforeach; endif; unset($_from); ?>
       </ul>
			<h1 class="carname"><?php echo $this->_tpl_vars['cars']['p_allname']; ?>
</h1>
			<p class="gray01" style="line-height:28px;"><span>发布日期：<?php echo $this->_tpl_vars['cars']['listtime']; ?>
<span class="pl10">浏览量：<span class="orange01" id="hits"></span>
			
			</p>
			<div class="pricebox clearfix">
				<div class="mt20">预售价格：<span class="price"><?php echo $this->_tpl_vars['cars']['p_price']; ?>
</span>
				
				</div>
				<div>出厂报价：<span class="fb white"><?php echo $this->_tpl_vars['cars']['p_newprice']; ?>
</span>万  + <span class="fb white"><?php echo $this->_tpl_vars['cars']['p_tax']; ?>
</span>万(购置税) 您节省了<span class="fb white"><?php echo $this->_tpl_vars['cars']['p_save']; ?>
</span>万</div>
			</div>
			<div class="para">
				<ul class="clearfix">
                    <li>
                        <dl>
                             <dt><span class="img1"></span></dt>
                             <dd>表显里程<strong><?php echo $this->_tpl_vars['cars']['p_kilometre']; ?>
万公里</strong></dd>
                        </dl>
                    </li>
                    <li>
                        <dl>
                             <dt><span class="img2"></span></dt>
                             <dd>上牌时间<strong><?php echo $this->_tpl_vars['cars']['p_year']; ?>
年<?php echo $this->_tpl_vars['cars']['p_month']; ?>
月</strong></dd>
                        </dl>
                    </li>
                    <li class="last">
                        <dl>
							<dt><span class="img3"></span></dt>
                            <dd>排放标准<strong><?php echo $this->_tpl_vars['cars']['p_emission']; ?>
</strong>
							</dd>
						</dl>
                    </li>
				</ul>
            </div>
			<div class="contactbox" id="tel">
				<?php if ($this->_tpl_vars['cars']['uid'] == 0 || $this->_tpl_vars['cars']['uid'] == -1): ?>
				<h3>免费咨询电话</h3>
				<div class="box">
				    <!--信息编号: <em><?php echo $this->_tpl_vars['cars']['p_no']; ?>
</em><br/>-->
					<span class="tel"><?php echo $this->_tpl_vars['setting']['tel']; ?>
</span>
				</div>
				<?php else: ?>
				<h3>免费咨询电话</h3>
				<div class="box">
				    <!--信息编号: <em><?php echo $this->_tpl_vars['cars']['p_no']; ?>
</em><br/>-->
					<p class="tel"><!--4000-400-400-->
						<?php echo $this->_tpl_vars['shop']['mobilephone']; ?>

						<!--<?php if ($this->_tpl_vars['shop']['isdealer'] == 2): ?>（商家车源）<?php endif; ?>-->
					</p>
				</div>
				<?php endif; ?>
			</div>
			<div class="ensure"><!--保障服务-->
               <span class="bdsharebuttonbox" style="float:right;"><a href="#" class="bds_more" data-cmd="more"></a><a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a><a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a><a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a><a href="#" class="bds_sqq" data-cmd="sqq" title="分享到QQ好友"></a><a href="#" class="bds_tqq" data-cmd="tqq" title="分享到腾讯微博"></a></span>
			</div>
		</div>
		<div class="carbox_right">
			<h3>推荐车源</h3>
			<div>
				<ul class="carlist clearfix">
					<?php $_from = $this->_tpl_vars['samecar']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['skey'] => $this->_tpl_vars['recomcarlist']):
?>
					<?php if ($this->_tpl_vars['skey'] < 2): ?>
					<li>
						<a href="<?php echo $this->_tpl_vars['recomcarlist']['p_url']; ?>
" target="_blank"><?php if ($this->_tpl_vars['recomcarlist']['p_mainpic'] <> ""): ?><img src="<?php echo $this->_tpl_vars['recomcarlist']['p_mainpic']; ?>
"/><?php else: ?><img src="<?php echo $this->_tpl_vars['weburl']; ?>
/static/img/car.jpg"/><?php endif; ?></a>
						<p class="mt10"><a href="<?php echo $this->_tpl_vars['recomcarlist']['p_url']; ?>
" target="_blank"><?php echo $this->_tpl_vars['recomcarlist']['p_shortname']; ?>
</a></p>
						<p><span class="gray01 fr"><?php echo $this->_tpl_vars['recomcarlist']['p_year']; ?>
年<?php echo $this->_tpl_vars['recomcarlist']['p_month']; ?>
月上牌</span><span class="orange01 fb"><?php echo $this->_tpl_vars['recomcarlist']['p_price']; ?>
万</span></p>
					</li>
					<?php endif; ?>
					<?php endforeach; endif; unset($_from); ?>
				</ul>
			</div>
			
		</div>
	</div>
</div>

<div class="main mt20 clearfix">
	<div class="main_left">
		<ul class="cardetail_tab clearfix">
			<li class="here"><a href="#A">车源详情</a></li>
		</ul>
		<div class="cardetailbox">
			<h4 class="mt10"><span class="title">基本信息</span></h4>
			<div class="box">
				<ul class="cardetaillist clearfix">
					<li><span>车型：</span><?php if ($this->_tpl_vars['cars']['modelname'] <> ''): ?><?php echo $this->_tpl_vars['cars']['modelname']; ?>
<?php else: ?>无<?php endif; ?></li>
					<li><span>上牌日期：</span><?php echo $this->_tpl_vars['cars']['p_year']; ?>
年<?php echo $this->_tpl_vars['cars']['p_month']; ?>
月</li>					
					<li><span>行驶里程：</span><?php if ($this->_tpl_vars['cars']['p_kilometre'] <> ''): ?><?php echo $this->_tpl_vars['cars']['p_kilometre']; ?>
万公里<?php else: ?>无<?php endif; ?></li>
					<li><span>颜色：</span><?php if ($this->_tpl_vars['cars']['p_color'] <> ''): ?><?php echo $this->_tpl_vars['cars']['p_color']; ?>
<?php else: ?>无<?php endif; ?></li>
					<li><span>变速箱：</span><?php if ($this->_tpl_vars['cars']['p_transmission'] <> ''): ?><?php echo $this->_tpl_vars['cars']['p_transmission']; ?>
<?php else: ?>无<?php endif; ?></li>
					<li><span>排量：</span><?php echo $this->_tpl_vars['cars']['p_gas']; ?>
</li>	
				</ul>
				<ul class="cardetaillist clearfix">
					<?php $_from = $this->_tpl_vars['paralist']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['paralist']):
?>
						<?php if ($this->_tpl_vars['paralist']['type_name'] == 'checkbox'): ?>
						<?php $_from = $this->_tpl_vars['list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['list']):
?>
						<?php if ($this->_tpl_vars['list']['checkvalue'] == 2): ?><li><span class="gray"></span><?php echo $this->_tpl_vars['key']; ?>
</li><?php endif; ?>
						<?php endforeach; endif; unset($_from); ?>
						<?php elseif ($this->_tpl_vars['paralist']['c_name'] == 'DVD' && $this->_tpl_vars['paralist']['c_value'] == '有'): ?><span class="icon_gp"><li><i class="i1"></i>DVD</li></span>
						<?php elseif ($this->_tpl_vars['paralist']['c_name'] == '电子稳定' && $this->_tpl_vars['paralist']['c_value'] == '有'): ?><span class="icon_gp"><li><i class="i2"></i>电子稳定(ESP)</li></span>
						<?php elseif ($this->_tpl_vars['paralist']['c_name'] == '倒车雷达' && $this->_tpl_vars['paralist']['c_value'] == '有'): ?><span class="icon_gp"><li><i class="i3"></i>倒车雷达</li></span>
						<?php elseif ($this->_tpl_vars['paralist']['c_name'] == '定速巡航' && $this->_tpl_vars['paralist']['c_value'] == '有'): ?><span class="icon_gp"><li><i class="i4"></i>定速巡航</li></span>
						<?php elseif ($this->_tpl_vars['paralist']['c_name'] == '自动空调' && $this->_tpl_vars['paralist']['c_value'] == '有'): ?><span class="icon_gp"><li><i class="i5"></i>自动空调</li></span>
						<?php elseif ($this->_tpl_vars['paralist']['c_name'] == '四轮驱动' && $this->_tpl_vars['paralist']['c_value'] == '有'): ?><span class="icon_gp"><li><i class="i6"></i>四轮驱动</li></span>
						<?php elseif ($this->_tpl_vars['paralist']['c_name'] == 'GPS导航' && $this->_tpl_vars['paralist']['c_value'] == '有'): ?><span class="icon_gp"><li><i class="i7"></i>GPS导航</li></span>
						<?php elseif ($this->_tpl_vars['paralist']['c_name'] == '座椅加热' && $this->_tpl_vars['paralist']['c_value'] == '有'): ?><span class="icon_gp"><li><i class="i8"></i>座椅加热</li></span>
						<?php elseif ($this->_tpl_vars['paralist']['c_name'] == '蓝牙电话' && $this->_tpl_vars['paralist']['c_value'] == '有'): ?><span class="icon_gp"><li><i class="i9"></i>蓝牙电话</li></span>
						<?php elseif ($this->_tpl_vars['paralist']['c_name'] == '外接音源' && $this->_tpl_vars['paralist']['c_value'] == '有'): ?><span class="icon_gp"><li><i class="i10"></i>外接音源</li></span>
						
						<?php elseif ($this->_tpl_vars['paralist']['c_name'] == '大灯随动' && $this->_tpl_vars['paralist']['c_value'] == '有'): ?><span class="icon_gp"><li><i class="i11"></i>大灯随动</li></span>
						<?php elseif ($this->_tpl_vars['paralist']['c_name'] == '空气悬挂' && $this->_tpl_vars['paralist']['c_value'] == '有'): ?><span class="icon_gp"><li><i class="i12"></i>空气悬挂</li></span>
						<?php elseif ($this->_tpl_vars['paralist']['c_name'] == '自动大灯' && $this->_tpl_vars['paralist']['c_value'] == '有'): ?><span class="icon_gp"><li><i class="i13"></i>自动大灯</li></span>
						<?php elseif ($this->_tpl_vars['paralist']['c_name'] == '电动车窗' && $this->_tpl_vars['paralist']['c_value'] == '有'): ?><span class="icon_gp"><li><i class="i14"></i>电动车窗</li></span>
						<?php elseif ($this->_tpl_vars['paralist']['c_name'] == '全景天窗' && $this->_tpl_vars['paralist']['c_value'] == '有'): ?><span class="icon_gp"><li><i class="i15"></i>全景天窗</li></span>
						<?php elseif ($this->_tpl_vars['paralist']['c_name'] == '后座出风' && $this->_tpl_vars['paralist']['c_value'] == '有'): ?><span class="icon_gp"><li><i class="i16"></i>后座出风</li></span>
						<?php elseif ($this->_tpl_vars['paralist']['c_name'] == '倒车影像' && $this->_tpl_vars['paralist']['c_value'] == '有'): ?><span class="icon_gp"><li><i class="i17"></i>倒车影像</li></span>
						<?php elseif ($this->_tpl_vars['paralist']['c_name'] == '电动后备箱' && $this->_tpl_vars['paralist']['c_value'] == '有'): ?><span class="icon_gp"><li><i class="i18"></i>电动后备箱</li></span>
						<?php elseif ($this->_tpl_vars['paralist']['c_name'] == '涡轮增压' && $this->_tpl_vars['paralist']['c_value'] == '有'): ?><span class="icon_gp"><li><i class="i19"></i>涡轮增压</li></span>
						<?php elseif ($this->_tpl_vars['paralist']['c_name'] == '真皮座椅' && $this->_tpl_vars['paralist']['c_value'] == '有'): ?><span class="icon_gp"><li><i class="i20"></i>真皮座椅</li></span>
						
						<?php elseif ($this->_tpl_vars['paralist']['c_name'] == '侧气囊帘' && $this->_tpl_vars['paralist']['c_value'] == '有'): ?><span class="icon_gp"><li><i class="i21"></i>侧气囊帘</li></span>
						<?php elseif ($this->_tpl_vars['paralist']['c_name'] == '未知22' && $this->_tpl_vars['paralist']['c_value'] == '有'): ?><span class="icon_gp"><li><i class="i22"></i>未知22</li></span>
						<?php elseif ($this->_tpl_vars['paralist']['c_name'] == '电动座椅' && $this->_tpl_vars['paralist']['c_value'] == '有'): ?><span class="icon_gp"><li><i class="i23"></i>电动座椅</li></span>
						<?php elseif ($this->_tpl_vars['paralist']['c_name'] == '未知24' && $this->_tpl_vars['paralist']['c_value'] == '有'): ?><span class="icon_gp"><li><i class="i24"></i>未知24</li></span>
						<?php elseif ($this->_tpl_vars['paralist']['c_name'] == '氙气大灯' && $this->_tpl_vars['paralist']['c_value'] == '有'): ?><span class="icon_gp"><li><i class="i25"></i>氙气大灯</li></span>
						<?php elseif ($this->_tpl_vars['paralist']['c_name'] == '一键启动' && $this->_tpl_vars['paralist']['c_value'] == '有'): ?><span class="icon_gp"><li><i class="i26"></i>一键启动</li></span>
						<?php elseif ($this->_tpl_vars['paralist']['c_name'] == '自动泊车入位' && $this->_tpl_vars['paralist']['c_value'] == '有'): ?><span class="icon_gp"><li><i class="i27"></i>自动泊车入位</li></span>
						<?php elseif ($this->_tpl_vars['paralist']['c_name'] == '中控台彩屏' && $this->_tpl_vars['paralist']['c_value'] == '有'): ?><span class="icon_gp"><li><i class="i28"></i>中控台彩屏</li></span>
						<?php elseif ($this->_tpl_vars['paralist']['c_name'] == '电动后视镜' && $this->_tpl_vars['paralist']['c_value'] == '有'): ?><span class="icon_gp"><li><i class="i29"></i>电动后视镜</li></span>
						<?php elseif ($this->_tpl_vars['paralist']['id'] > 9 && $this->_tpl_vars['paralist']['id'] < 40): ?><span class="icon_gp"></span>
						<?php else: ?>
						<li><span class="gray"><?php echo $this->_tpl_vars['paralist']['c_name']; ?>
：</span><?php echo $this->_tpl_vars['paralist']['c_value']; ?>
</li>
						<?php endif; ?>
						<?php endforeach; endif; unset($_from); ?>
				</ul>
			</div>
			<h4><span class="title">车主描述</span></h4>
			<div class="box">
				<?php echo $this->_tpl_vars['cars']['p_details']; ?>

			</div>
			<h4><span class="title">大图展示</span></h4>
			<?php if ($this->_tpl_vars['pic_list'] != ""): ?>
			<div class="box">
				<?php $_from = $this->_tpl_vars['pic_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['piclist']):
?>
				<p class="tc mt10"><img src="<?php echo $this->_tpl_vars['weburl']; ?>
<?php echo $this->_tpl_vars['piclist']['pic']; ?>
" class="carinfo_img"></p>
				<?php endforeach; endif; unset($_from); ?>
			</div>
			<?php endif; ?>
		</div>
	</div>
	<div class="main_right">
		<a href="#" target="_blank">
			<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "default/".($this->_tpl_vars['setting']['templates'])."/right.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		</a>
	</div>	
</div>

<div id="A1" class="hide">
	<div class="popnotice">
		<?php echo $this->_tpl_vars['cars']['p_allname']; ?>
，售价<?php echo $this->_tpl_vars['cars']['p_price']; ?>
，<?php echo $this->_tpl_vars['cars']['p_year']; ?>
年上牌，行驶<?php echo $this->_tpl_vars['cars']['p_kilometre']; ?>
万公里
	</div>
	<div class="p20">
	<form method="post" name="yuyueform" id="yuyueform" class="yuyueform">
		<table class="poptable">
		<tr>
			<th><span class="red">*</span> 姓名：</th>
			<td><input type="text" name="name" datatype="s" nullmsg="请填写姓名！"></td>
		</tr>
		<tr>
			<th><span class="red">*</span> 手机号：</th>
			<td><input type="text" name="mobilephone" datatype="m" nullmsg="请填写手机号！"></td>
		</tr>
		<tr>
			<th><span class="red">*</span> 预约时间：</th>
			<td><input type="text" class="laydate-icon" name="ordertime" datatype="*" nullmsg="请选择预约时间！" onclick="laydate()"></td>
		</tr>
		<tr>
			<th><span class="red">*</span> 留言：</th>
			<td><textarea name="orderinfo" rows="5" cols="25" datatype="*" nullmsg="请填写留言！"></textarea></td>
		</tr>
		<tr>
			<th></th>
			<td class="gray">您的信息不会在网站上显示，我们将保证您的隐私安全。</td>
		</tr>
		<tr>
			<th></th>
			<td><span class="button1 h35-p25 mr5"><a id="btnYuyueLookCar" href="javascript:;">提&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;交</a></span></td>
		</tr>
		</table>
	</form>
	</div>
</div>
<div id="B1" class="hide">
	<div class="popnotice">
		<?php echo $this->_tpl_vars['cars']['p_allname']; ?>
，售价<?php echo $this->_tpl_vars['cars']['p_price']; ?>
，<?php echo $this->_tpl_vars['cars']['p_year']; ?>
年上牌，行驶<?php echo $this->_tpl_vars['cars']['p_kilometre']; ?>
万公里
	</div>
	<div class="p20">
		<form method="post" name="xunjiaform" id="xunjiaform" class="xunjiaform">
		<table class="poptable">
		<tr>
			<th><span class="red">*</span> 姓名：</th>
			<td><input type="text" name="name" datatype="s" nullmsg="请填写姓名！"></td>
		</tr>
		<tr>
			<th><span class="red">*</span> 手机号：</th>
			<td><input type="text" name="mobilephone" datatype="m" nullmsg="请填写手机号！"></td>
		</tr>
		<tr>
			<th></th>
			<td class="gray">您的信息不会在网站上显示，我们将保证您的隐私安全。</td>
		</tr>
		<tr>
			<th></th>
			<td><span class="button1 h35-p25 mr5"><a id="btnxuejia" href="javascript:;">提&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;交</a></span></td>
		</tr>
		</table>
		</form>
	</div>
</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "default/".($this->_tpl_vars['setting']['templates'])."/foot.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
</body>
</html>
