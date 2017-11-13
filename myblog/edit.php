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
	}

	if(!empty($_POST["sub"])){
		$title=$_POST['title'];
		$con=$_POST['con'];
		$hid=$_POST['hid'];
		$sql="UPDATE `msg` SET `title`='$title',`contents`='$con' WHERE id='$hid' limit 1";
		mysql_query($sql);
		echo "<script>alert('更新成功'); location.herf='index.php'</script>";
	}
?>
<form action="edit.php" method="post">
	<input type="hidden" name="hid" value="<?php echo $rs['id'] ?>">
	标题：<input type="text" name="title" value="<?php echo $rs['title'] ?>"><br>
	内容：<textarea name="con" id="" cols="50" rows="5"><?php echo $rs['contents'] ?></textarea><br>
	<input type="submit" value="发表" name="sub">
</form>