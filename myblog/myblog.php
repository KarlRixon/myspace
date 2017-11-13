<?php
	header("content-type:text/html;charset=utf-8");
	mysql_connect("localhost:3306","root","18133193e0") or die("mysql连接失败");
	mysql_select_db("myblog") or die("db连接失败");
	// mysql_set_charset("gbk");
	mysql_query("SET NAMES UTF8");
?>
