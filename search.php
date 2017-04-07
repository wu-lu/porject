<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>居家監控整合系統</title>
<link href="zz.css" rel="stylesheet" type="text/css" />
</head>
<body>
 <?php
$userName = "root";
$password =  "123456";
$link= mysqli_connect("127.0.0.1",$userName,$password) or die ("無法開啟Mysql資料庫連結"); //建立mysql資料庫連結
mysqli_select_db($link,"wu1"); //選擇資料庫abc
$sql = "SELECT * FROM weatherdata ORDER BY time DESC"; //在test資料表中選擇所有欄位
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
  <iframe src="kk.php" name="show" scrolling="auto" frameborder="0" class="room_select_showiframe" ></iframe>
  <!-- end .footer --></div>
  <!-- end .container --></div>
  
  
  <div id="footer">
	<p>|勤益科技大學 ‧ 資訊工程系|</p>
	<p>|製作 巫騄橙  廖宸逸  賴育鈿|</p>
</div>
</body>
</html>