﻿<?php  
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
$newname=$_POST['newname'];  
$newpassword=$_POST['newpassword'];


$s=$_POST['s'];

$check_query = mysqli_query($link,"select * from acc");
    	
//	$row = mysqli_fetch_assoc($result);
	$newname=$_POST['newname'];  
	$newpassword=$_POST['newpassword'];
	
     //mysql inserting a new row
    $result = mysqli_query($link,"insert into acc set acc='$newname',password='$newpassword',std_name1='情境一',std_name2='情境二',std_name3='情境三'");



if ($check_query = mysqli_query($link,"select * from acc where acc='$newname' and password='$newpassword'")) {
    	
	print("Eorror");

    

}	


    
?>   