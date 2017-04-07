<?php  
header("Content-Type:text/html; charset=utf-8");
//伺服器登入相關
$mydb_localhost="127.0.0.1";
$mydb_username="root";
$mydb_userpassword="123456";
$mydb_table="wu";
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
$name=$_POST['aa'];  
$voice=$_POST['voice'];

$check_query = mysqli_query($link,"select * from acc where acc='$name'");

$row = mysqli_fetch_array($check_query);

if($voice==$row['liga1']){
	exec('sudo python /home/pi/zigbee/relay06open.py');
}

if($voice==$row['liga2']){
	exec('sudo python /home/pi/zigbee/relay06close.py');
}

if($voice==$row['tva1']){
	
}

if($voice==$row['tva2']){
	
}

if($voice==$row['eea1']){
	$check_query = mysqli_query($link,"select * from re");
 	$result = mysqli_query($link,"update re set h='0'");
	exec('sudo python /home/pi/zigbee/relay07open.py');
}

if($voice==$row['eea2']){
	$check_query = mysqli_query($link,"select * from re");
 	$result = mysqli_query($link,"update re set h='0'");
	exec('sudo python /home/pi/zigbee/relay07close.py');
}

if($voice==$row['aira1']){
	
}

if($voice==$row['aira2']){
	
}

if($voice==$row['ligb1']){
	exec('sudo python /home/pi/zigbee/relay08open.py');
}

if($voice==$row['ligb2']){
	exec('sudo python /home/pi/zigbee/relay08close.py');
}

if($voice==$row['nigb1']){
	exec('sudo python /home/pi/zigbee/relay09open.py');
}

if($voice==$row['nigb2']){
	exec('sudo python /home/pi/zigbee/relay09close.py');
}

if($voice==$row['eeb1']){
	$check_query = mysqli_query($link,"select * from re");
 	$result = mysqli_query($link,"update re set h='0'");
	exec('sudo python /home/pi/zigbee/relay10open.py');
}

if($voice==$row['eeb2']){
	$check_query = mysqli_query($link,"select * from re");
 	$result = mysqli_query($link,"update re set h='0'");
	exec('sudo python /home/pi/zigbee/relay10close.py');
}

if($voice==$row['ligc1']){
	exec('sudo python /home/pi/zigbee/relay11open.py');
}

if($voice==$row['ligc2']){
	exec('sudo python /home/pi/zigbee/relay11close.py');
}

if($voice==$row['eec1']){
	$check_query = mysqli_query($link,"select * from re");
 	$result = mysqli_query($link,"update re set h='0'");
	exec('sudo python /home/pi/zigbee/relay12open.py');
}

if($voice==$row['eec2']){
	$check_query = mysqli_query($link,"select * from re");
 	$result = mysqli_query($link,"update re set h='0'");
	exec('sudo python /home/pi/zigbee/relay12close.py');
}


if($voice==$row['std_name1']){
	$check_query = mysqli_query($link,"select * from con where situational='1'");
	$row = mysqli_fetch_array($check_query);
	
	if ($row['a1']=='a'){
		exec('sudo python /home/pi/zigbee/relay06open.py');
	}
	if($row['a1']=='b'){
		exec('sudo python /home/pi/zigbee/relay06close.py');
	}
	if($row['a2']=='c'){
		$check_query = mysqli_query($link,"select * from re");
 		$result = mysqli_query($link,"update re set h='0'");
		exec('sudo python /home/pi/zigbee/relay07open.py');
	}
	if($row['a2']=='d'){
		$check_query = mysqli_query($link,"select * from re");
 		$result = mysqli_query($link,"update re set h='0'");
		exec('sudo python /home/pi/zigbee/relay07close.py');
	}    
	if($row['a3']=='e'){
	
	}
	if($row['a3']=='f'){
	
	}
	if($row['a4']=='g'){
		exec('sudo python /home/pi/zigbee/relay08open.py');
	}
	if($row['a4']=='h'){
		exec('sudo python /home/pi/zigbee/relay08close.py');
	}
	if($row['a5']=='i'){
	
	}
	if($row['a5']=='j'){
	
	}
	if($row['a6']=='k'){
		$check_query = mysqli_query($link,"select * from re");
 		$result = mysqli_query($link,"update re set h='0'");
		exec('sudo python /home/pi/zigbee/relay10open.py');
	}
	if($row['a6']=='l'){
		$check_query = mysqli_query($link,"select * from re");
 		$result = mysqli_query($link,"update re set h='0'");
		exec('sudo python /home/pi/zigbee/relay10close.py');
	}
	if($row['a7']=='m'){
	
	}
	if($row['a7']=='n'){
	
	}
	if($row['a8']=='o'){
		exec('sudo python /home/pi/zigbee/relay09open.py');
	}
	if($row['a8']=='p'){
		exec('sudo python /home/pi/zigbee/relay09close.py');
	}
	if($row['a9']=='q'){
		exec('sudo python /home/pi/zigbee/relay11open.py');
	}
	if($row['a9']=='r'){
		exec('sudo python /home/pi/zigbee/relay11close.py');
	}
	if($row['a10']=='s'){
		$check_query = mysqli_query($link,"select * from re");
 		$result = mysqli_query($link,"update re set h='0'");
		exec('sudo python /home/pi/zigbee/relay12open.py');
	}
	if($row['a10']=='t'){
		$check_query = mysqli_query($link,"select * from re");
 		$result = mysqli_query($link,"update re set h='0'");
		exec('sudo python /home/pi/zigbee/relay12close.py');
	}
}

if($voice==$row['std_name2']){
	$check_query = mysqli_query($link,"select * from con where situational='2'");
	$row = mysqli_fetch_array($check_query);
	
	if ($row['a1']=='a'){
		exec('sudo python /home/pi/zigbee/relay06open.py');
	}
	if($row['a1']=='b'){
		exec('sudo python /home/pi/zigbee/relay06close.py');
	}
	if($row['a2']=='c'){
		$check_query = mysqli_query($link,"select * from re");
 		$result = mysqli_query($link,"update re set h='0'");
		exec('sudo python /home/pi/zigbee/relay07open.py');
	}
	if($row['a2']=='d'){
		$check_query = mysqli_query($link,"select * from re");
 		$result = mysqli_query($link,"update re set h='0'");
		exec('sudo python /home/pi/zigbee/relay07close.py');
	}    
	if($row['a3']=='e'){
	
	}
	if($row['a3']=='f'){
	
	}
	if($row['a4']=='g'){
		exec('sudo python /home/pi/zigbee/relay08open.py');
	}
	if($row['a4']=='h'){
		exec('sudo python /home/pi/zigbee/relay08close.py');
	}
	if($row['a5']=='i'){
	
	}
	if($row['a5']=='j'){
	
	}
	if($row['a6']=='k'){
		$check_query = mysqli_query($link,"select * from re");
 		$result = mysqli_query($link,"update re set h='0'");
		exec('sudo python /home/pi/zigbee/relay10open.py');
	}
	if($row['a6']=='l'){
		$check_query = mysqli_query($link,"select * from re");
 		$result = mysqli_query($link,"update re set h='0'");
		exec('sudo python /home/pi/zigbee/relay10close.py');
	}
	if($row['a7']=='m'){
	
	}
	if($row['a7']=='n'){
	
	}
	if($row['a8']=='o'){
		exec('sudo python /home/pi/zigbee/relay09open.py');
	}
	if($row['a8']=='p'){
		exec('sudo python /home/pi/zigbee/relay09close.py');
	}
	if($row['a9']=='q'){
		exec('sudo python /home/pi/zigbee/relay11open.py');
	}
	if($row['a9']=='r'){
		exec('sudo python /home/pi/zigbee/relay11close.py');
	}
	if($row['a10']=='s'){
		$check_query = mysqli_query($link,"select * from re");
 		$result = mysqli_query($link,"update re set h='0'");
		exec('sudo python /home/pi/zigbee/relay12open.py');
	}
	if($row['a10']=='t'){
		$check_query = mysqli_query($link,"select * from re");
 		$result = mysqli_query($link,"update re set h='0'");
		exec('sudo python /home/pi/zigbee/relay12close.py');
	}
}

if($voice==$row['std_name3']){
	$check_query = mysqli_query($link,"select * from con where situational='3'");
	$row = mysqli_fetch_array($check_query);
	
	if ($row['a1']=='a'){
		exec('sudo python /home/pi/zigbee/relay06open.py');
	}
	if($row['a1']=='b'){
		exec('sudo python /home/pi/zigbee/relay06close.py');
	}
	if($row['a2']=='c'){
		$check_query = mysqli_query($link,"select * from re");
 		$result = mysqli_query($link,"update re set h='0'");
		exec('sudo python /home/pi/zigbee/relay07open.py');
	}
	if($row['a2']=='d'){
		$check_query = mysqli_query($link,"select * from re");
 		$result = mysqli_query($link,"update re set h='0'");
		exec('sudo python /home/pi/zigbee/relay07close.py');
	}    
	if($row['a3']=='e'){
	
	}
	if($row['a3']=='f'){
	
	}
	if($row['a4']=='g'){
		exec('sudo python /home/pi/zigbee/relay08open.py');
	}
	if($row['a4']=='h'){
		exec('sudo python /home/pi/zigbee/relay08close.py');
	}
	if($row['a5']=='i'){
	
	}
	if($row['a5']=='j'){
	
	}
	if($row['a6']=='k'){
		$check_query = mysqli_query($link,"select * from re");
 		$result = mysqli_query($link,"update re set h='0'");
		exec('sudo python /home/pi/zigbee/relay10open.py');
	}
	if($row['a6']=='l'){
		$check_query = mysqli_query($link,"select * from re");
 		$result = mysqli_query($link,"update re set h='0'");
		exec('sudo python /home/pi/zigbee/relay10close.py');
	}
	if($row['a7']=='m'){
	
	}
	if($row['a7']=='n'){
	
	}
	if($row['a8']=='o'){
		exec('sudo python /home/pi/zigbee/relay09open.py');
	}
	if($row['a8']=='p'){
		exec('sudo python /home/pi/zigbee/relay09close.py');
	}
	if($row['a9']=='q'){
		exec('sudo python /home/pi/zigbee/relay11open.py');
	}
	if($row['a9']=='r'){
		exec('sudo python /home/pi/zigbee/relay11close.py');
	}
	if($row['a10']=='s'){
		$check_query = mysqli_query($link,"select * from re");
 		$result = mysqli_query($link,"update re set h='0'");
		exec('sudo python /home/pi/zigbee/relay12open.py');
	}
	if($row['a10']=='t'){
		$check_query = mysqli_query($link,"select * from re");
 		$result = mysqli_query($link,"update re set h='0'");
		exec('sudo python /home/pi/zigbee/relay12close.py');
	}
}


?>   