<?php /* Smarty version 2.6.18, created on 2017-07-04 17:18:05
         compiled from default/default/assessresult.html */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $this->_tpl_vars['page']['p_title']; ?>
 - <?php echo $this->_tpl_vars['setting']['title']; ?>
</title>
<meta content="<?php echo $this->_tpl_vars['setting']['keywords']; ?>
"  name="keywords"/>
<meta content="<?php echo $this->_tpl_vars['setting']['description']; ?>
" name="description"/>
<link href="<?php echo $this->_tpl_vars['weburl']; ?>
/templates/default/<?php echo $this->_tpl_vars['setting']['templates']; ?>
/css/assess.css" rel="stylesheet" type="text/css"/>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['weburl']; ?>
/templates/default/<?php echo $this->_tpl_vars['setting']['templates']; ?>
/js/jquery-1.7.1.js"></script>
</head>
<body>
<!--内容--> 
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "default/".($this->_tpl_vars['setting']['templates'])."/head.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div class="main mt15">
	<div class="lay1" id="evalute_result">
        <div class="car_info">
            <div class="left">
				<span title="<?php echo $this->_tpl_vars['post']['p_allname']; ?>
"><?php echo $this->_tpl_vars['post']['p_allname']; ?>
</span>
			</div>
            <div class="right">
                <span class="time">上牌年份<strong><?php echo $this->_tpl_vars['post']['p_year']; ?>
年<?php echo $this->_tpl_vars['post']['p_month']; ?>
月</strong></span>
				<span class="mileage">行驶里程<strong><?php echo $this->_tpl_vars['post']['p_kilometre']; ?>
万公里</strong></span>
            </div>
        </div>
        <div class="eva_info">
            <div class="logo">
                <div class="logo_switch">
                     <div class="hasdata"></div>
                 </div>  
            </div>
            <div class="detail_info">
                <p class="p1">通过专业估价算法分析，得出以下结果：</p>
                <p class="p2">预计成交价<span><?php echo $this->_tpl_vars['lastprice']; ?>
</span>万元</p>
                <div class="note_box">
                    <p>以上报价是基于该车在<strong class="color-red">正常保养情况</strong>下行驶<strong class="color-red"><?php echo $this->_tpl_vars['post']['p_kilometre']; ?>
万公里</strong>后的车况进行评估，该车况可能与您的实际情况有所偏差，您可在此基础上进行微调。</p>
                </div>
            </div>
            <div class="choose">
			  <div class="item">
				<a class="btn" href="#">再次评估</a>
				<a target="_blank" href="<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=sellcar" class="buy_car">我要卖车</a>
			  </div>  
			</div>
        </div>
    </div>
</div>
<!--版权--> 
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "default/".($this->_tpl_vars['setting']['templates'])."/foot.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
</body>
</html>