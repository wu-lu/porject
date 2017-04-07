<?php  
header("Content-Type:text/html; charset=utf-8");
//伺服器登入相關
$mydb_localhost="127.0.0.1";
$mydb_username="root";
$mydb_userpassword="1";
$mydb_table="aa";
//連結伺服器
$link=mysqli_connect($mydb_localhost,$mydb_username,$mydb_userpassword) or die(mysql_error());
mysqli_select_db($link,$mydb_table) or die(mysqli_error());
mysqli_query($link,"set names utf8");

$a=$_POST['a'];


$check_query = mysqli_query($link,"select * from re ");
$row = mysqli_fetch_array($check_query);


if($a== '1'){
	$result = mysqli_query($link,"update re set tem = tem+1 where tem between 25 and 28");
}
if($a== '2'){
	$result = mysqli_query($link,"update re set tem = tem-1 where tem between 26 and 29");
}
if($a== '0'){
	exec('sudo python /home/pi/zigbee/acopen.py');
}



if($row[tem] =='25'){
	exec('sudo python /home/pi/zigbee/relay06open.py');
}
if($row[tem] =='26'){
	
}
if($row[tem] =='27'){
	
}
if($row[tem] =='28'){
	
}
if($row[tem] =='29'){
	
}