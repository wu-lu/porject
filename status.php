<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>居家監控整合系統</title>
<link href="z10.css" rel="stylesheet" type="text/css" />


<link rel="stylesheet" href="//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>

</head>
<body>
 <?php
$userName = "root";
$password =  "123456";
$link= mysqli_connect("127.0.0.1",$userName,$password) or die ("無法開啟Mysql資料庫連結"); //建立mysql資料庫連結
mysqli_select_db($link,"wu1"); //選擇資料庫abc
$sql = "SELECT * FROM tem_liv ORDER BY time DESC"; //在test資料表中選擇所有欄位
//mysql_query($link, "SET CHARACTER SET 'utf8'");	// 送出Big5編碼的MySQL指令
//mysql_query($link,  “SET collation_connection = 'utf8_general_ci'");
$result = mysqli_query($link,$sql); // 執行SQL查詢
//$total_fields=mysqli_num_fields($result); // 取得欄位數
//$total_records=mysqli_num_rows($result);  // 取得記錄數
$row = mysqli_fetch_assoc($result);


?>

<div class="container">
  <div class="header"><h1>&nbsp;</h1>
    <h1>居家監控整合系統</h1>
    </a> 
    <!-- end .header --></div>
    
    <div id="menu">
	<ul>
		<li><a href="home.php">首頁</a></li>
		<li><a href="control.php">控制</a></li>
      	<li><a href="status.php">狀態</a></li>
		<li><a href="doorbell.php">門鈴</a></li>
		<li><a href="search.php">查詢</a></li>
	</ul>
</div>
    
  <div class="content">
  	<div class="left">
    <table width="1000" height="186" border="1" align="left" cellpadding="0" cellspacing="0">
    <tr>
    	<th  colspan="3" scope="col"  bgcolor="#FFD78C"  height="30" style="font-size:23px">客廳</th>
   		<th  colspan="3" scope="col"  bgcolor="#FFD78C"  height="30" style="font-size:23px">臥房</th>
  	 	<th  colspan="3" scope="col"  bgcolor="#FFD78C"  height="30" style="font-size:23px">廚房</th>
                   
    	</tr>
    <tr>
    		<td colspan="3" width="350" height="30" align="center">
                   <img src="liv.png" height="180" width="350"></a></td>
    		<td colspan="3"width="350" align="center" valign="middle">
                   <img src="bed.jpg" height="180" width="373"> </a></td>
           <td colspan="3"width="350" align="center" valign="middle">
            <img src="kit.jpg" height="180" width="350" /> </a></td>
                   
    	</tr>
    
      <tr>
    <th  scope="col"  bgcolor="#FFD78C">溫度</th>
    <th  scope="col"  bgcolor="#FFD78C" width="100">濕度</th>
    <th  scope="col"  bgcolor="#FFD78C">光度</th>
  	<th  scope="col"  bgcolor="#FFD78C">溫度</th>
    <th  scope="col"  bgcolor="#FFD78C">濕度</th>
    <th  scope="col"  bgcolor="#FFD78C">光度</th>
    <th  scope="col"  bgcolor="#FFD78C">溫度</th>
    <th  scope="col"  bgcolor="#FFD78C" width="110">濕度</th>
    <th  scope="col"  bgcolor="#FFD78C">可燃氣體</th>
  </tr>
  <tr>
    <td><div id="tem_liv"  style="font-size:20px;" align="center"></div></td>
    <td><div id="hum_liv"  style="font-size:20px;" align="center"></div></td>
   <?php /*?> <?php

$sql = "SELECT * FROM lig_liv ORDER BY time DESC"; //在test資料表中選擇所有欄位
//mysql_query($link, "SET CHARACTER SET 'utf8'");	// 送出Big5編碼的MySQL指令
//mysql_query($link,  “SET collation_connection = 'utf8_general_ci'");
$result = mysqli_query($link,$sql); // 執行SQL查詢
//$total_fields=mysqli_num_fields($result); // 取得欄位數
//$total_records=mysqli_num_rows($result);  // 取得記錄數
$row = mysqli_fetch_assoc($result);


?><?php */?>
    <td><div id="lig_liv"  style="font-size:20px;" align="center"></div></td>
     <?php /*?><?php

$sql = "SELECT * FROM tem_bed ORDER BY time DESC"; //在test資料表中選擇所有欄位
//mysql_query($link, "SET CHARACTER SET 'utf8'");	// 送出Big5編碼的MySQL指令
//mysql_query($link,  “SET collation_connection = 'utf8_general_ci'");
$result = mysqli_query($link,$sql); // 執行SQL查詢
//$total_fields=mysqli_num_fields($result); // 取得欄位數
//$total_records=mysqli_num_rows($result);  // 取得記錄數
$row = mysqli_fetch_assoc($result);

?><?php */?>
    <td><div id="tem_bed"  style="font-size:20px;" align="center"></div></td>
    <td><div id="hum_bed"  style="font-size:20px;" align="center"></div></td>
   <?php /*?> <?php

$sql = "SELECT * FROM lig_bed ORDER BY time DESC"; //在test資料表中選擇所有欄位
//mysql_query($link, "SET CHARACTER SET 'utf8'");	// 送出Big5編碼的MySQL指令
//mysql_query($link,  “SET collation_connection = 'utf8_general_ci'");
$result = mysqli_query($link,$sql); // 執行SQL查詢
//$total_fields=mysqli_num_fields($result); // 取得欄位數
//$total_records=mysqli_num_rows($result);  // 取得記錄數
$row = mysqli_fetch_assoc($result);


?><?php */?>
    <td><div id="lig_bed"  style="font-size:20px;" align="center"></div></td>
   <?php /*?> 
    <?php

$sql = "SELECT * FROM tem_kit ORDER BY time DESC"; //在test資料表中選擇所有欄位
//mysql_query($link, "SET CHARACTER SET 'utf8'");	// 送出Big5編碼的MySQL指令
//mysql_query($link,  “SET collation_connection = 'utf8_general_ci'");
$result = mysqli_query($link,$sql); // 執行SQL查詢
//$total_fields=mysqli_num_fields($result); // 取得欄位數
//$total_records=mysqli_num_rows($result);  // 取得記錄數
$row = mysqli_fetch_assoc($result);


?><?php */?>
    <td><div id="tem_kit"  style="font-size:20px;" align="center"></div></td>
    <td><div id="hum_kit"  style="font-size:20px;" align="center"></div></td>
    <?php /*?> <?php

$sql = "SELECT * FROM tgs ORDER BY time DESC"; //在test資料表中選擇所有欄位
//mysql_query($link, "SET CHARACTER SET 'utf8'");	// 送出Big5編碼的MySQL指令
//mysql_query($link,  “SET collation_connection = 'utf8_general_ci'");
$result = mysqli_query($link,$sql); // 執行SQL查詢
//$total_fields=mysqli_num_fields($result); // 取得欄位數
//$total_records=mysqli_num_rows($result);  // 取得記錄數
$row = mysqli_fetch_assoc($result);
?><?php */?>
    <td><div id="tgs"  style="font-size:20px;" align="center"></div></td>
    
    
  </tr>
 
  
  <?php /*?>
  <?php

$sql = "SELECT * FROM tem_liv ORDER BY time DESC"; //在test資料表中選擇所有欄位
//mysql_query($link, "SET CHARACTER SET 'utf8'");	// 送出Big5編碼的MySQL指令
//mysql_query($link,  “SET collation_connection = 'utf8_general_ci'");
$result = mysqli_query($link,$sql); // 執行SQL查詢
//$total_fields=mysqli_num_fields($result); // 取得欄位數
//$total_records=mysqli_num_rows($result);  // 取得記錄數
$row = mysqli_fetch_assoc($result);


?><?php */?>


      <tr>
    
    <th  colspan="3"scope="col"  bgcolor="#FFD78C">時間</th>
    <th  colspan="3"scope="col"  bgcolor="#FFD78C">時間</th>
    <th  colspan="3"scope="col"  bgcolor="#FFD78C">時間</th>
  </tr>
  <tr>
    
    <td colspan="3" align="center"><div id="time_liv"  style="font-size:20px;" align="center"></div></td>
    <?php /*?>
    <?php

$sql = "SELECT * FROM tem_bed ORDER BY time DESC"; //在test資料表中選擇所有欄位
//mysql_query($link, "SET CHARACTER SET 'utf8'");	// 送出Big5編碼的MySQL指令
//mysql_query($link,  “SET collation_connection = 'utf8_general_ci'");
$result = mysqli_query($link,$sql); // 執行SQL查詢
//$total_fields=mysqli_num_fields($result); // 取得欄位數
//$total_records=mysqli_num_rows($result);  // 取得記錄數
$row = mysqli_fetch_assoc($result);


?><?php */?>
    <td colspan="3" align="center"><div id="time_bed"  style="font-size:20px;" align="center"></div></td>
    
   <?php /*?> <?php

$sql = "SELECT * FROM tem_kit ORDER BY time DESC"; //在test資料表中選擇所有欄位
//mysql_query($link, "SET CHARACTER SET 'utf8'");	// 送出Big5編碼的MySQL指令
//mysql_query($link,  “SET collation_connection = 'utf8_general_ci'");
$result = mysqli_query($link,$sql); // 執行SQL查詢
//$total_fields=mysqli_num_fields($result); // 取得欄位數
//$total_records=mysqli_num_rows($result);  // 取得記錄數
$row = mysqli_fetch_assoc($result);


?><?php */?>
    
    
    
    <td colspan="3" align="center"><div id="time_kit"  style="font-size:20px;" align="center"></div></td>
  </tr>
  
  
 <?php /*?> <?php
$userName = "root";
$password =  "123456";
$link= mysqli_connect("127.0.0.1",$userName,$password) or die ("無法開啟Mysql資料庫連結"); //建立mysql資料庫連結
mysqli_select_db($link,"wu"); //選擇資料庫abc
$sql = "SELECT * FROM re "; //在test資料表中選擇所有欄位
mysql_query($link, "SET CHARACTER SET 'utf8'");	// 送出Big5編碼的MySQL指令
mysql_query($link,  “SET collation_connection = 'utf8_general_ci'");
$result = mysqli_query($link,$sql); // 執行SQL查詢
$total_fields=mysqli_num_fields($result); // 取得欄位數
$total_records=mysqli_num_rows($result);  // 取得記錄數
$row = mysqli_fetch_assoc($result);


?><?php */?>
  <tr>
  <th  colspan="3"scope="col"  bgcolor="#FFD78C" style="font-size:20px">目前狀態</td>
  <th  colspan="3"scope="col"  bgcolor="#FFD78C" style="font-size:20px">目前狀態</td>
  <th  colspan="3"scope="col"  bgcolor="#FFD78C" style="font-size:20px">目前狀態</td>
  </tr>
  
  <tr>
    		<td width="150" height="30" align="center">
            		
                  <img id="liv_lig" src='2.gif' height="135" width="123" alt='liv_lig'></td>
    		<td  colspan="2"width="150" align="center" >
                  <img id="liv_fan" src='4.gif' height="135" width="123" alt='liv_fan'></td>
            <td width="150" height="30" align="center">
                   <img id="bed_lig" src='2.gif' height="135" width="123" alt='bed_fan'></td>
            <td width="150" height="30" align="center">
                   <img id="bed_nig" src='6.png' height="135" width="123" alt='bed_nig'></td>
            <td  width="150" height="30" align="center" >
                  <img id="bed_fan" src='4.gif' height="135" width="123" alt='bed_fan'></td>
            <td width="150" height="30" align="center">
                   <img id="kit_lig" src='2.gif' height="135" width="123" alt='kit_lig'></td>
    		<td  colspan="2"width="150" align="center" >
                   <img id="kit_fan" src='4.gif' height="135" width="123" alt='kit_fan'></td>
    	</tr>

</table>


<!-- end .left --></div>

    <!-- end .footer --></div>
  <!-- end .container --></div>
  
  <div id="footer">
    <p>|勤益科技大學 ‧ 資訊工程系|</p>
	<p>|製作 巫騄橙  廖宸逸  賴育鈿|</a></p>
</div>

<script type="text/javascript">
// setInterval


function changeImageload(id,onoff) 
{
	if(onoff == 1)
	{
		document.getElementById(id).src = "1.gif";
	}
	else if(onoff == 2)
	{
		document.getElementById(id).src = "2.gif";
	}
	else if(onoff == 3)
	{
		document.getElementById(id).src = "3.gif";
	}
	else if(onoff == 4)
	{
		document.getElementById(id).src = "4.gif";
	}
	else if(onoff == 5)
	{
		document.getElementById(id).src = "5.png";
	}
	else if(onoff == 6)
	{
		document.getElementById(id).src = "6.png";
	}
}
var lig_liv = "";
var fan_liv = "";
var lig_bed = "";
var nig_bed = "";
var fan_bed = "";
var lig_kit = "";
var fan_kit = "";

window.onload = function(e) 
{
	var timer = setInterval(update, 1000);	
	function update() 
	{
		
		var ID = "<?php echo $UserID?>";
		$.ajax
		({
			url: "post.php",
			cache: false,
			type: "post",
			data:
			{
				"SelectIndex":"003",
				"ID":ID,
			},
			dataType: "html",
			success: function(Jdata) {
				var data = Jdata.split('&');
				$('#tem_liv').html(data[0]);
				$('#hum_liv').html(data[1]);
				$('#time_liv').html(data[2]);
				$('#tem_bed').html(data[3]);
				$('#hum_bed').html(data[4]);
				$('#time_bed').html(data[5]);
				$('#tem_kit').html(data[6]);
				$('#hum_kit').html(data[7]);
				$('#time_kit').html(data[8]);
				$('#lig_liv').html(data[9]);
				$('#lig_bed').html(data[10]);
				$('#tgs').html(data[11]);
				lig_liv = data[12];
				fan_liv = data[13];
				lig_bed = data[14];
				nig_bed = data[15];
				fan_bed = data[16];
				lig_kit = data[17];
				fan_kit = data[18];
				changeImageload("liv_lig",lig_liv);
				changeImageload("liv_fan",fan_liv);
				changeImageload("bed_lig",lig_bed);
				changeImageload("bed_nig",nig_bed);
				changeImageload("bed_fan",fan_bed);
				changeImageload("kit_lig",lig_kit);
				changeImageload("kit_fan",fan_kit);
				
				//$('#a').html(data[12]);
			},
			error: function() {
				alert('Netwook Fail!!');
			}
		});
	}
};
</script>

</body>
</html>