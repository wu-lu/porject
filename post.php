<?php
session_start();

$userName = "root";
$password =  "123456";
$link= mysqli_connect("127.0.0.1",$userName,$password) or die ("�L�k�}��Mysql��Ʈw�s��"); //�إ�mysql��Ʈw�s��
mysqli_select_db($link,"wu1"); //��ܸ�Ʈwabc



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
		
		$str = "SELECT * FROM tem_liv ORDER BY time DESC"; //�btest��ƪ���ܩҦ����
		$result = mysqli_query($link,$str) or die("die:".$str);
		if($row = mysqli_fetch_array($result))
		{
			$tem_liv  = $row['tem1'];
			$hum_liv  = $row['hum1'];
			$time_liv = $row['time'];						
		}
		else
		{
			$tem_liv  = "�d�L���";
			$hum_liv  = "�d�L���";
			$time_liv = "�d�L���";
		}
		
		$str = "SELECT * FROM tem_bed ORDER BY time DESC"; //�btest��ƪ���ܩҦ����
		$result = mysqli_query($link,$str) or die("die:".$str);
		if($row = mysqli_fetch_array($result))
		{
			$tem_bed  = $row['tem1'];
			$hum_bed  = $row['hum1'];
			$time_bed = $row['time'];						
		}
		else
		{
			$tem_bed  = "�d�L���";
			$hum_bed  = "�d�L���";
			$time_bed = "�d�L���";
		}
		
		$str = "SELECT * FROM tem_kit ORDER BY time DESC"; //�btest��ƪ���ܩҦ����
		$result = mysqli_query($link,$str) or die("die:".$str);
		if($row = mysqli_fetch_array($result))
		{
			$tem_kit  = $row['tem1'];
			$hum_kit  = $row['hum1'];
			$time_kit = $row['time'];						
		}
		else
		{
			$tem_kit  = "�d�L���";
			$hum_kit  = "�d�L���";
			$time_kit = "�d�L���";
		}
		
		$str = "SELECT * FROM lig_liv ORDER BY time DESC"; //�btest��ƪ���ܩҦ����
		$result = mysqli_query($link,$str) or die("die:".$str);
		if($row = mysqli_fetch_array($result))
		{
			$lig_liv  = $row['lig1'];
		}
		else
		{
			$lig_liv  = "�d�L���";
		}
		
		$str = "SELECT * FROM lig_bed ORDER BY time DESC"; //�btest��ƪ���ܩҦ����
		$result = mysqli_query($link,$str) or die("die:".$str);
		if($row = mysqli_fetch_array($result))
		{
			$lig_bed  = $row['lig1'];
		}
		else
		{
			$lig_bed  = "�d�L���";
		}
		
		$str = "SELECT * FROM tgs ORDER BY time DESC"; //�btest��ƪ���ܩҦ����
		$result = mysqli_query($link,$str) or die("die:".$str);
		if($row = mysqli_fetch_array($result))
		{
			$tgs  = $row['tgs1'];
		}
		else
		{
			$tgs  = "�d�L���";
		}
		
		$str = "SELECT * FROM re "; //�btest��ƪ���ܩҦ����
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
			$a  = "�d�L���";
			$b  = "�d�L���";
			$c  = "�d�L���";
			$d  = "�d�L���";
			$e  = "�d�L���";
			$f  = "�d�L���";
			$g  = "�d�L���";
			
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