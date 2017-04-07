<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/themes/hot-sneaks/jquery-ui.css" rel="stylesheet">
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/jquery-ui.min.js"></script>
<link href="jquery/jquery-ui-timepicker-addon.css" rel="stylesheet"></link>
<script src="jquery/jquery-ui-timepicker-addon.js" type="text/javascript"></script>
<script src="jquery/jquery-ui-sliderAccess.js" type="text/javascript"></script>
<script type="text/javascript" src="../jquery/jquery.ui.datepicker-zh-TW.js"></script>
<script type="text/javascript" src="../jquery/jquery-ui-timepicker-zh-TW.js"></script>
<title>無標題文件</title>
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
 <form method="Post" action="" >

	 <p>查詢
       <select name="count" size="1" >
         <option value= "tem_liv">溫溼度(客廳)</option>
         <option value= "tem_bed">溫溼度(臥房)</option>
         <option value= "tem_kit">溫溼度(廚房)</option>
         <option value= "lig_liv">光感值(客廳)</option>
         <option value= "lig_bed">光感值(臥房)</option>
         <option value= "tgs">可燃氣體(廚房)</option>
       </select> 
    <br>
    時間：
  <input id="datetimepicker1" type="text" name="date1" value="">
  到
  
  <input id="datetimepicker2" type="text" name="date2" value="">
 
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
		if(($_POST["count"])=="tem_liv" || ($_POST["count"])=="lig_liv")
		{
			echo "客廳";
			echo  "&nbsp; &nbsp; "; 
		}
		if(($_POST["count"])=="tem_bed" || ($_POST["count"])=="lig_bed")
		{
			echo "臥房";
			echo  "&nbsp; &nbsp; "; 
		}
		if(($_POST["count"])=="tem_kit" || ($_POST["count"])=="tgs")
		{
			echo "廚房";
			echo  "&nbsp; &nbsp; "; 
		}
		echo $time1."~".$time2;
	}
	
	
	
	
	/* if(empty($_POST["count"])!=1){
	$da="select humidity,tempC,time from $_POST[count] order by time desc ";
	
	
	 }*/
	 if(($_POST["count"])=="tem_liv"  &&  $time1!=""  && $time2!=""  ){
    $da="select tem1,hum1,time from tem_liv  where (time between '$time1' and '$time2') order by time desc";
	echo "<table border='1' width='85%' height='60' >
             <tr>
			 <td bgcolor=#FFD78C>溫度</td>
   	         <td bgcolor=#FFD78C>濕度</td>
    	     <td bgcolor=#FFD78C>時間</td>
            </tr>";
	$list=mysqli_query($link,$da);
	while(list($tem1,$hum1,$time)=mysqli_fetch_row($list))
	{
  
  echo "<tr><td width='60' bgcolor=#FFFFFF><b><font color='$color' size='3' >$tem1</font></b></td>";
  echo "<td width='60' bgcolor=#FFFFFF><b><font color='$color' size='3'>$hum1</font></b></td>";
  echo "<td width='60' bgcolor=#FFFFFF><b><font color='$color' >$time</font></b></td>";
      echo "</tr>";
    }    
	echo"</table>";
	 }
	 
	 
	
	
	
	if(($_POST["count"])=="tem_bed"  &&  $time1!=""  && $time2!=""  ){
    $da="select tem1,hum1,time from tem_bed  where (time between '$time1' and '$time2') order by time desc";
	echo "<table border='1' width='85%' height='60' >
             <tr>
			 <td bgcolor=#FFD78C>溫度</td>
   	         <td bgcolor=#FFD78C>濕度</td>
    	     <td bgcolor=#FFD78C>時間</td>
            </tr>";
	$list=mysqli_query($link,$da);
	while(list($tem1,$hum1,$time)=mysqli_fetch_row($list))
	{
  
 echo "<tr><td width='60' bgcolor=#FFFFFF><b><font color='$color' size='3' >$tem1</font></b></td>";
  echo "<td width='60' bgcolor=#FFFFFF><b><font color='$color' size='3'>$hum1</font></b></td>";
  echo "<td width='60' bgcolor=#FFFFFF><b><font color='$color' >$time</font></b></td>";
      echo"</tr>";
    }    
	echo"</table>";
	 }
	
	
	
	
	
	if(($_POST["count"])=="tem_kit"  &&  $time1!=""  && $time2!=""  ){
    $da="select tem1,hum1,time from tem_kit  where (time between '$time1' and '$time2') order by time desc";
	echo "<table border='1' width='85%' height='60' >
             <tr>
			 <td bgcolor=#FFD78C>溫度</td>
   	         <td bgcolor=#FFD78C>濕度</td>
    	     <td bgcolor=#FFD78C>時間</td>
            </tr>";
	$list=mysqli_query($link,$da);
	while(list($tem1,$hum1,$time)=mysqli_fetch_row($list))
	{
  
 echo "<tr><td width='60' bgcolor=#FFFFFF><b><font color='$color' size='3' >$tem1</font></b></td>";
  echo "<td width='60' bgcolor=#FFFFFF><b><font color='$color' size='3'>$hum1</font></b></td>";
  echo "<td width='60' bgcolor=#FFFFFF><b><font color='$color' >$time</font></b></td>";
      echo"</tr>";
    }    
	echo"</table>";
	 }
	
	
	
	
	
	if(($_POST["count"])=="lig_liv"  &&  $time1!=""  && $time2!=""  ){
    $da="select lig1,time from lig_liv  where (time between '$time1' and '$time2') order by time desc";
	echo "<table border='1' width='85%' height='60' >
			<tr>
   	         <td bgcolor=#FFD78C>光感值</td>
    	     <td bgcolor=#FFD78C>時間</td>
            </tr>";
	$list=mysqli_query($link,$da);
	while(list($lig1,$time)=mysqli_fetch_row($list))
	{
  
 
  echo "<tr><td width='60' bgcolor=#FFFFFF><b><font color='$color' size='3'>$lig1.$lig2</font></b></td>";
  echo "<td width='60' bgcolor=#FFFFFF><b><font color='$color' >$time</font></b></td>";
      echo "</tr>";
    }    
	echo"</table>";
	 }
	 
	 
	 
	 
	 
	 if(($_POST["count"])=="lig_bed"  &&  $time1!=""  && $time2!=""  ){
    $da="select lig1,time from lig_bed  where (time between '$time1' and '$time2') order by time desc";
	echo "<table border='1' width='85%' height='60' >
   	         <tr>
			 <td bgcolor=#FFD78C>光感值</td>
    	     <td bgcolor=#FFD78C>時間</td>
            </tr>";
	$list=mysqli_query($link,$da);
	while(list($lig1,$lig2,$time)=mysqli_fetch_row($list))
	{
  
 
  echo "<tr><td width='60' bgcolor=#FFFFFF><b><font color='$color' size='3'>$lig1</font></b></td>";
  echo "<td width='60' bgcolor=#FFFFFF><b><font color='$color' >$time</font></b></td>";
      echo"</tr>";
    }    
	echo"</table>";
	 }
	 
	 
	 
	 
	 
	 if(($_POST["count"])=="tgs"  &&  $time1!=""  && $time2!=""  ){
    $da="select tgs1,time from tgs  where (time between '$time1' and '$time2') order by time desc";
	echo "<table border='1' width='85%' height='60' >
			<tr>
   	         <td bgcolor=#FFD78C>可燃氣體</td>
    	     <td bgcolor=#FFD78C>時間</td>
            </tr>";
	$list=mysqli_query($link,$da);
	while(list($tgs1,$time)=mysqli_fetch_row($list))
	{
  
 
  echo "<tr><td width='60' bgcolor=#FFFFFF><b><font color='$color' size='3'>$tgs1</font></b></td>";
  echo "<td width='60' bgcolor=#FFFFFF><b><font color='$color' >$time</font></b></td>";
      echo"</tr>";
    }    
	echo"</table>";
	 }
	 
	 

	}
	
	
?>
</form>
</body>
</html>