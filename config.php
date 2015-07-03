<?php
define("APP_PATH",dirname(__FILE__));
define("KXJ_PATH",APP_PATH."/include");

@date_default_timezone_set('PRC');     //函数前+“@” 排除错误警告

// 2015-7-3 by zlj to create
$kxjConfig = array(
	'db' => array(
	'host' => '127.0.0.1',			//数据库地址
	'port' => 3306,					//数据库端口
	'database' => 'doyo',		//数据库名
	'login' => 'root',				//数据库帐号
	'password' => '',			//数据库密码
	'prefix' => 'dy_',				//数据库表前缀
	),
	'ext' => array(
	'version' => '1.0',
	'update' => '20150703',
	)
);