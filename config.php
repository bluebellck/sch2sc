<?php
$db_config['DB_HOST'] = 'localhost'; //数据库地址
$db_config['DB_USER'] = 'sch2sc'; //mysql帐号
$db_config['DB_PASS'] = 'sch2sc123'; //mysql密码
$db_config['DB_NAME'] = 'sch2sc'; //数据库名称
$db_config['DB_CHARSET'] = 'utf8';  //数据库编码
$db_config['DB_ERROR'] = true;
$db_config['TB_PREFIX'] = 'simcms_';//数据表前缀

define('CHARSET', 'utf-8'); //文件编码
define('TIMEZONE', '-8'); //时区设置
define('INC_DIR', 'include/'); //包含目录
define('TPL_DIR', 'templates/'); //模板目录
define('HTML_DIR', ''); //静态文件目录
define('CACHETIME',3600); //缓存时间
define('COOKIETIME',3600); //缓存时间
define('ADMIN_PAGE', 'admin_login.php'); //后台入口文件
define('HTML_URL', WEB_URL . "/"); //静态文件地址

?>