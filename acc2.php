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
$name=$_POST['name'];  
$aa=$_POST['aa'];


$check_query = mysqli_query($link,"select * from acc where acc='$aa'");
	//讀取會員資料
	if($result=mysqli_fetch_assoc($check_query)){ 
		print(json_encode($result)); //印出JSON格式
	}else{
		print("1");
	}


//if ($check_query = mysqli_query($link,"select * from acc")) {
    	
	//$row = mysqli_fetch_assoc($result);
//	$newname=$_POST['newname'];  
//	$newpassword=$_POST['newpassword'];
	
   //  mysql inserting a new row
//    $result = mysqli_query($link,"replace INTO acc(acc, password) VALUES('$newname', '$newpassword')");
    

//}


?>   