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
$username=$_POST['username'];  
$userpassword=$_POST['userpassword'];
$newname=$_POST['newname'];  
$newpassword=$_POST['newpassword'];
$a1=$_POST['a1'];
$a2=$_POST['a2'];
$a3=$_POST['a3'];
$a4=$_POST['a4'];
$name=$_POST['name'];  
$newname=$_POST['newname'];  
$newpassword=$_POST['newpassword'];
$c=$_POST['c'];
$situational=$_POST['Situational'];

$check_query = mysqli_query($link,"select * from re");


if($c == 'a'){
exec('sudo python /home/pi/zigbee/relay06open.py');
}

if($c == 'b'){
exec('sudo python /home/pi/zigbee/relay06close.py');
}

if($c == 'c'){
$result = mysqli_query($link,"update re set h='0'");
exec('sudo python /home/pi/zigbee/relay07open.py');
}

if($c == 'd'){
$result = mysqli_query($link,"update re set h='0'");
exec('sudo python /home/pi/zigbee/relay07close.py');
}

if($c == 'e'){
exec;
}

if($c == 'f'){
excute;
}

if($c == 'g'){
exec('sudo python /home/pi/zigbee/relay08open.py');
}

if($c == 'h'){
exec('sudo python /home/pi/zigbee/relay08close.py');
}

if($c == 'i'){
$result = mysqli_query($link,"update re set h='1'");
}

if($c == 'j'){
$result = mysqli_query($link,"update re set h='0'");
}

if($c == 'k'){
$result = mysqli_query($link,"update re set h='0'");
exec('sudo python /home/pi/zigbee/relay10open.py');
}

if($c == 'l'){
$result = mysqli_query($link,"update re set h='0'");
exec('sudo python /home/pi/zigbee/relay10close.py');
}
    
if($c == 'm'){
exec;
}
  
if($c == 'n'){
exec;
}
  
if($c == 'o'){
exec('sudo python /home/pi/zigbee/relay09open.py');
}
  
if($c == 'p'){
exec('sudo python /home/pi/zigbee/relay09close.py');
}
  
if($c == 'q'){
exec('sudo python /home/pi/zigbee/relay11open.py');
}
  
if($c == 'r'){
exec('sudo python /home/pi/zigbee/relay11close.py');
}
  
if($c == 's'){
$result = mysqli_query($link,"update re set h='0'");
exec('sudo python /home/pi/zigbee/relay12open.py');
} 

if($c == 't'){
$result = mysqli_query($link,"update re set h='0'");
exec('sudo python /home/pi/zigbee/relay12close.py');
}
?>   