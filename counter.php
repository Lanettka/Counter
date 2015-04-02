<?php
$url = "counter.com/stat.txt";
if(!file_exists($url)) {
	$count=0;
	$handle=fopen($url,"a");
	fwrite($handle,$count);
	fclose($handle);
}
else {
	$handle=fopen($url,"a+");
	$count=fread($handle,filesize($url));
	fclose($handle);
	$count++;
	$handle+fopen($url,"w");
	fwrite($handle,$count);
	fclose($handle);
}
	echo "user views: $count";
?>
