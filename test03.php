<?php  
header("Content-Type:text/html; charset=utf-8");
//伺服器登入相關
$mydb_localhost="127.0.0.1";
$mydb_username="root";
$mydb_userpassword="123456";
$mydb_table="wu1";
//連結伺服器
$link=mysqli_connect($mydb_localhost,$mydb_username,$mydb_userpassword) or die(mysql_error());
mysqli_select_db($link,$mydb_table) or die(mysqli_error());
mysqli_query($link,"set names utf8");


$check_query = mysqli_query($link,"select * from re");
?>



<?php session_start();

    $OPENValue=$_POST['Value'];
    echo $OPENValue;
    switch($OPENValue){
    case 'ligON':
	exec('sudo python /home/pi/zigbee/relay11open.py');
    break;
	
	case 'ligOFF':
	exec('sudo python /home/pi/zigbee/relay11close.py');
    break;
	
	case 'fanON':
	$result = mysqli_query($link,"update re set h='0'");
	exec('sudo python /home/pi/zigbee/relay12open.py');
    break;
	
	case 'fanOFF':
	$result = mysqli_query($link,"update re set h='0'");
	exec('sudo python /home/pi/zigbee/relay12close.py');
    break;
    }
	
	

 ?>