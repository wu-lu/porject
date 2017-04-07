<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>居家監控整合系統</title>
<link href="zz.css" rel="stylesheet" type="text/css" />



<link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/themes/hot-sneaks/jquery-ui.css" rel="stylesheet">
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/jquery-ui.min.js"></script>
<link href="jquery/jquery-ui-timepicker-addon.css" rel="stylesheet"></link>
<script src="jquery/jquery-ui-timepicker-addon.js" type="text/javascript"></script>
<script src="jquery/jquery-ui-sliderAccess.js" type="text/javascript"></script>
<script type="text/javascript" src="../jquery/jquery.ui.datepicker-zh-TW.js"></script>
<script type="text/javascript" src="../jquery/jquery-ui-timepicker-zh-TW.js"></script>
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
  <div class="header"><h1>居家監控整合系統</h1><img src="" alt="在這裡插入商標" name="Insert_logo" width="180" height="90" id="Insert_logo" style="background-color: #C6D580; display:block;" /></a> 
    <!-- end .header --></div>
    
    <div id="menu">
	<ul>
		<li><a href="home.php">首頁</a></li>
		<li><a href="control.php">控制</a></li>
		<li><a href="doorbell.php">門鈴</a></li>
		<li><a href="search.php">查詢</a></li>
	</ul>
</div>
    
  <div class="content">
    <form method="Post" action="" >
	 <p>查詢
       <select name="count" size="1" >
         <option value= "weatherdata">溫溼度</option>
         <option value= "images">光感值</option>
         <option value= "DD">可燃氣體</option>
       </select> 
    <br>
    時間：
  <input id="datetimepicker1" type="text" name="date1" value="">
  到
  <script language="JavaScript">
   $(document).ready(function(){ 
   $('#datetimepicker1').datetimepicker({
      	showMonthAfterYear: true,
        dateFormat: 'yy-mm-dd',
        timeFormat: 'HH:mm:ss',
        showSecond: true,
		showButtonPanel: false,
		showTime: false
        });
      });
  </script>
	
  <input id="datetimepicker2" type="text" name="date2" value="">
  <script language="JavaScript">
   $(document).ready(function(){ 
   $('#datetimepicker2').datetimepicker({
      	showMonthAfterYear: true,
        dateFormat: 'yy-mm-dd',
        timeFormat: 'HH:mm:ss',
        showSecond: true,
		showButtonPanel: false,
		showTime: false
        });
      });
	  
  </script>
<input type="submit"  name="submit1" value="確認">
	 </p>
	 <p>
  <?php
	 
	
	if(@$_POST["count"] ) 
	{
	error_reporting(E_ALL ^ E_NOTICE);
	$time1 =(string)$_POST[date1];
	$time2 =(string)$_POST[date2];
	
	if($time1!="" && $time2!="")
	{
		echo $time1."~".$time2;
	}
	
	
	
	
	/* if(empty($_POST["count"])!=1){
	$da="select humidity,tempC,time from $_POST[count] order by time desc ";
	
	
	 }*/
	 if(($_POST["count"])=="weatherdata"  &&  $time1!=""  && $time2!=""  ){
    $da="select humidity,tempC,time from weatherdata  where (time between '$time1' and '$time2') order by time desc";
	echo "<table border='1' width='85%' height='60' >
             <td bgcolor=#FFD78C>溫度</td>
   	         <td bgcolor=#FFD78C>濕度</td>
    	     <td bgcolor=#FFD78C>時間</td>
            </tr>";
	$list=mysqli_query($link,$da);
	while(list($humidity,$tempC,$time)=mysqli_fetch_row($list))
	{
  
  echo "<tr><td width='60' bgcolor=#FFFFFF><b><font color='$color' size='3' >$humidity.$humidity2</font></b></td>";
  echo "<td width='60' bgcolor=#FFFFFF><b><font color='$color' size='3'>$tempC</font></b></td>";
  echo "<td width='60' bgcolor=#FFFFFF><b><font color='$color' >$time</font></b></td>";
      
    }    
	 }
	 
	 
	
	
	
	
	
	
	
	
	if(($_POST["count"])=="images"  &&  $time1!=""  && $time2!=""  ){
    $da="select Id,time from images  where (time between '$time1' and '$time2') order by time desc";
	echo "<table border='1' width='85%' height='60' >
             <td bgcolor=#FFD78C>123</td>
   	         <td bgcolor=#FFD78C>濕度</td>
    	     <td bgcolor=#FFD78C>時間</td>
            </tr>";
	$list=mysqli_query($link,$da);
	while(list($Id,$time)=mysqli_fetch_row($list))
	{
  
  echo "<tr><td width='60' bgcolor=#FFFFFF><b><font color='$color' size='3' >$Id.$humidity2</font></b></td>";
  echo "<td width='60' bgcolor=#FFFFFF><b><font color='$color' size='3'>$tempC</font></b></td>";
  echo "<td width='60' bgcolor=#FFFFFF><b><font color='$color' >$time</font></b></td>";
      
    }    
	 }
	
	
	
	
	
	echo"</table>";
	}
	
	
	
?>
	   <!-- end .footer --></div>
	   <!-- end .container --></div>
	   
</p>
  <div id="footer">
	<p>國立勤益科技大學資訊工程系</p>
	<p>製作 巫騄橙  廖宸逸  賴育鈿</a></p>
</div>
</body>
</html>