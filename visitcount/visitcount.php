<?php
	header("content-type:text/html;charset=utf-8");
	if(!@$f=fopen("num.txt", "r")){
		echo "文件不存在！";
		$num=0;
	}else{
		$num=fgets($f,10);
		fclose($f);
	}
	$num+=1;
	if(!$ff=fopen("num.txt","w")){
		echo "文件不存在！";
	}else{
		fwrite($ff,$num);
		fclose($ff);
	}
	$numarr=str_split($num);
	foreach($numarr as $val){
		echo "<img src='".$val.".png'>";
	}
?>