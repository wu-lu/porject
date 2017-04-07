 <?php session_start();
$userName = "root";
$password =  "123456";
$link= mysqli_connect("127.0.0.1",$userName,$password) or die ("無法開啟Mysql資料庫連結"); //建立mysql資料庫連結
mysqli_select_db($link,"wu"); //選擇資料庫abc
$sql = "SELECT * FROM re"; //在test資料表中選擇所有欄位
//mysql_query($link, "SET CHARACTER SET 'utf8'");	// 送出Big5編碼的MySQL指令
//mysql_query($link,  “SET collation_connection = 'utf8_general_ci'");
$result = mysqli_query($link,$sql); // 執行SQL查詢
//$total_fields=mysqli_num_fields($result); // 取得欄位數
//$total_records=mysqli_num_rows($result);  // 取得記錄數
$row = mysqli_fetch_assoc($result);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>居家監控整合系統</title>
<link href="zz.css" rel="stylesheet" type="text/css" />
</head>
<?php

/*
if(isset($_POST['submit1'])) {

     openSerial("a");
}
 
if(isset($_POST['submit2'])) {
    openSerial("b");
}

 
if(isset($_POST['submit3'])) {
    openSerial("c");
}
 
if(isset($_POST['submit4'])) {
    openSerial("d");
}*/
?>
<form method="post" action="<?php /*echo $_SERVER['PHP_SELF']; */?>">

<body>

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
   <div id="room_select" align="center"><table width="600" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td align="center" valign="middle">
    	<img src="cc.gif" width="25" height="25">
    	<a href="liv.php" target="show" class="room_select_font">客廳</a>
    </td>
    <td align="center" valign="middle">
    	<img src="cc.gif" width="25" height="25">
    	<a href="bed.php" target="show" class="room_select_font">臥房</a>
    </td>
    <td align="center" valign="middle">
    	<img src="cc.gif" width="25" height="25">
        <a href="kit.php" target="show" class="room_select_font">廚房</a>
    </td>
  </tr>
</table>
 
</div>
<div id="room_select_show">
  <iframe src="hh.php" name="show" scrolling="auto" frameborder="0" class="room_select_show_iframe" ></iframe>
</div>

<!-- end .content --></div>
  <!-- end .container --></div>
  

  
  <div id="footer">

	<p>|勤益科技大學 ‧ 資訊工程系|</p>
	<p>|製作 巫騄橙  廖宸逸  賴育鈿|</a></p>
</div>
</body>
</html>