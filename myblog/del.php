<?php
	include("myblog.php");
	if(!empty($_GET['del'])){
		$d=$_GET['del'];
		$sql="DELETE FROM `msg` WHERE `id`='$d'";
		mysql_query($sql);
		echo "删除成功";
	}
?>