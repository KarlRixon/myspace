<a href="add.php">添加内容</a><hr>
please click search botton first because of some fucking bugs,,,
<form action="" method="get">
	<input type="text" name="keys">
	<input type="submit" name="subs" value="搜索">
</form>
<hr>
<?php
	include("myblog.php");

	if(!empty($_GET['keys'])){
		$w="`title` like '%".$_GET['keys']."%'";
	}else{
		$w=1;
	}

	$sql="SELECT * FROM `msg` WHERE $w order by id desc";//倒序显示
	$query=mysql_query($sql);
	while($rs=mysql_fetch_array($query)){
	// print_r($rs);
?>
<h2>标题：<a href="view.php?id=<?php echo $rs['id'] ?>"><?php echo $rs['title'] ?></a>|
<a href="edit.php?id=<?php echo $rs['id'] ?>">编辑</a>|
<a href="del.php?del=<?php echo $rs['id'] ?>">删除</a>|
</h2>
<li>时间：<?php echo $rs['dates'] ?></li>
<p><?php echo iconv_substr($rs['contents'],0,5,"utf-8") ?></p>
<hr>
<?php
}
?>
