<?php
	include("myblog.php");
	if(!empty($_POST["sub"])){
		$title=$_POST['title'];
		$con=$_POST['con'];
		$sql="INSERT INTO `msg`(`id`,`hits`, `title`, `dates`, `contents`) VALUES (null,0,'$title',now(),'$con')";
		mysql_query($sql);
		echo "插入成功";
	}
?>
<form action="add.php" method="post">
	标题：<input type="text" name="title"><br>
	内容：<textarea name="con" id="" cols="50" rows="5"></textarea><br>
	<input type="submit" value="发表" name="sub">
</form>
