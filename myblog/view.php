<?php
	include("myblog.php");
	if(!empty($_GET['id'])){
		// $c=$_GET['id'];
		// $sql="SELECT * FROM msg WHERE `id`='$c'";
		$sql="SELECT * FROM msg WHERE `id`=".$_GET['id'];
		// echo $sql;
		$query=mysql_query($sql);
		$rs=mysql_fetch_array($query);
		// print_r($rs);
		$sql="UPDATE msg SET hits=hits+1 WHERE `id`=".$_GET['id'];
		mysql_query($sql);
	}
?>
<h1><?php echo $rs['title'] ?></h1>
<h1><?php echo $rs['dates'] ?></h1>
<h3>点击量：<?php echo $rs['hits'] ?></h3>
<hr>
<p><?php echo $rs['contents'] ?></p>