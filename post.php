<?php
session_start();

$userName = "root";
$password =  "123456";
$link= mysqli_connect("127.0.0.1",$userName,$password) or die ("無法開啟Mysql資料庫連結"); //建立mysql資料庫連結
mysqli_select_db($link,"wu1"); //選擇資料庫abc



$UserID = $_SESSION['id'];

$DeleteContact = '001';
$RemarkTypeInsert = '002';
$ReceiveInformation = '003';
$GetSession = '004';
$selectIndex = $_POST['SelectIndex'];
switch($selectIndex)
{
	case $DeleteContact:
	{
		$ID = $_POST['ID'];
		$ContactName = $_POST['name'];
		$ContactEmail = $_POST['email'];
		
		$str = "Delete from tb_contact where id= '$ID' and 
		ContactName= '$ContactName' and ContactEmail= '$ContactEmail'";
		$result = mysql_query($str);
		
		echo "UPDATE";
		break;
	} 
	case $RemarkTypeInsert:
	{
		$ID = $_POST['ID'];
		$ContactName = $_POST['name'];
		$ContactEmail = $_POST['email'];
		
		$str = "INSERT INTO tb_contact(id,time,ContactName,ContactEmail)
		VALUE('$ID','".date('Y-m-d')."','$ContactName','$ContactEmail')";
		$result = mysql_query($str) or die("die:".$str);
		echo "INSERT_OK";
		break;
	}
	case $ReceiveInformation:
	{
		$ID = $_POST['ID'];
		
		$str = "SELECT * FROM tem_liv ORDER BY time DESC"; //在test資料表中選擇所有欄位
		$result = mysqli_query($link,$str) or die("die:".$str);
		if($row = mysqli_fetch_array($result))
		{
			$tem_liv  = $row['tem1'];
			$hum_liv  = $row['hum1'];
			$time_liv = $row['time'];						
		}
		else
		{
			$tem_liv  = "查無資料";
			$hum_liv  = "查無資料";
			$time_liv = "查無資料";
		}
		
		$str = "SELECT * FROM tem_bed ORDER BY time DESC"; //在test資料表中選擇所有欄位
		$result = mysqli_query($link,$str) or die("die:".$str);
		if($row = mysqli_fetch_array($result))
		{
			$tem_bed  = $row['tem1'];
			$hum_bed  = $row['hum1'];
			$time_bed = $row['time'];						
		}
		else
		{
			$tem_bed  = "查無資料";
			$hum_bed  = "查無資料";
			$time_bed = "查無資料";
		}
		
		$str = "SELECT * FROM tem_kit ORDER BY time DESC"; //在test資料表中選擇所有欄位
		$result = mysqli_query($link,$str) or die("die:".$str);
		if($row = mysqli_fetch_array($result))
		{
			$tem_kit  = $row['tem1'];
			$hum_kit  = $row['hum1'];
			$time_kit = $row['time'];						
		}
		else
		{
			$tem_kit  = "查無資料";
			$hum_kit  = "查無資料";
			$time_kit = "查無資料";
		}
		
		$str = "SELECT * FROM lig_liv ORDER BY time DESC"; //在test資料表中選擇所有欄位
		$result = mysqli_query($link,$str) or die("die:".$str);
		if($row = mysqli_fetch_array($result))
		{
			$lig_liv  = $row['lig1'];
		}
		else
		{
			$lig_liv  = "查無資料";
		}
		
		$str = "SELECT * FROM lig_bed ORDER BY time DESC"; //在test資料表中選擇所有欄位
		$result = mysqli_query($link,$str) or die("die:".$str);
		if($row = mysqli_fetch_array($result))
		{
			$lig_bed  = $row['lig1'];
		}
		else
		{
			$lig_bed  = "查無資料";
		}
		
		$str = "SELECT * FROM tgs ORDER BY time DESC"; //在test資料表中選擇所有欄位
		$result = mysqli_query($link,$str) or die("die:".$str);
		if($row = mysqli_fetch_array($result))
		{
			$tgs  = $row['tgs1'];
		}
		else
		{
			$tgs  = "查無資料";
		}
		
		$str = "SELECT * FROM re "; //在test資料表中選擇所有欄位
		$result = mysqli_query($link,$str) or die("die:".$str);
		if($row = mysqli_fetch_array($result))
		{
			$a  = $row['a'];
			$b  = $row['b'];
			$c  = $row['c'];
			$d  = $row['d'];
			$e  = $row['e'];
			$f  = $row['f'];
			$g  = $row['g'];
		}
		else
		{
			$a  = "查無資料";
			$b  = "查無資料";
			$c  = "查無資料";
			$d  = "查無資料";
			$e  = "查無資料";
			$f  = "查無資料";
			$g  = "查無資料";
			
		}
		echo $tem_liv."&".$hum_liv."&".$time_liv."&".$tem_bed."&".$hum_bed."&".$time_bed."&".$tem_kit."&".$hum_kit."&".$time_kit."&".$lig_liv."&".$lig_bed."&".$tgs."&".$a."&".$b."&".$c."&".$d."&".$e."&".$f."&".$g;
		
		break;
	}
	case $GetSession:
	{
		unset($_SESSION['memberName']);
   		unset($_SESSION['memberID']);
		$_SESSION['memberName'] = $_POST['memberName'];
		$_SESSION['memberID'] = $_POST['memberID'];
		echo 0;
		break;
	}
}

?>