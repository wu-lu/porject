<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/themes/hot-sneaks/jquery-ui.css" rel="stylesheet">
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/jquery-ui.min.js"></script>
 
 
 	<script src="jquery/highcharts.js"></script>
    <script src="jquery/zoomout-selection.js"></script>
 	
 <link href="jquery/jquery-ui-timepicker-addon.css" rel="stylesheet"></link>
<script src="jquery/jquery-ui-timepicker-addon.js" type="text/javascript"></script>
<script src="jquery/jquery-ui-sliderAccess.js" type="text/javascript"></script>
<script type="text/javascript" src="../jquery/jquery.ui.datepicker-zh-TW.js"></script>
<script type="text/javascript" src="../jquery/jquery-ui-timepicker-zh-TW.js">
  </script>
<title>無標題文件</title>
</head>

<body>
<form name="fromtable" method="post" action="">
        
           <p>查詢
       <select name="table" size="1" id='table'  >
         <option value= "tem_liv" name="tem_liv">溫溼度(客廳)</option>
         <option value= "tem_bed" name="tem_bed">溫溼度(臥房)</option>
         <option value= "tem_kit" name="tem_kit">溫溼度(廚房)</option>
         <option value= "lig_liv" name="lig_liv">光感值(客廳)</option>
         <option value= "lig_bed" name="lig_bed">光感值(臥房)</option>
         <option value= "tgs">可燃氣體(廚房)</option>
       </select> <br>
          時間： <input type="text"  id="selectday_one" name="selectday_one" required/>
          到  <input type="text"  id="selectday_two" name="selectday_two" required/>
</form>

<div id="show">

</div>
<script language="JavaScript">
    $(document).ready(function(){ 
      $('#selectday_one').datetimepicker({
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
   $('#selectday_two').datetimepicker({
      	showMonthAfterYear: true,
        dateFormat: 'yy-mm-dd',
        timeFormat: 'HH:mm:ss',
        showSecond: true,
		showButtonPanel: false,
		showTime: false
        });
      });
	
     
	  	
    
  </script>
<script>

$("#show").hide();

$("#table").ready(function(){
	//alert('1');
	$.ajax({
	  url: "123.php",
	  cache: false,
	  type: "post",
	  data:{
		"TIMEONE":$("#selectday_one").val(),
		"TIMETWO":$("#selectday_two").val(),
		"tableVALUE":$("#table").val()
	  },
	  dataType: "html",
	  success: function(Jdata) {
		 
		//var splitStr = Jdata.split(",");
		//$("#show").show();
		$("#show").html("");
		$("#show").html(Jdata);
		
	  },
	  
	  error: function() {
		alert('check_error');
	  }
	});
});

$("#table").change(function(){
	//alert('1');
	$.ajax({
	  url: "123.php",
	  cache: false,
	  type: "post",
	  data:{
		"TIMEONE":$("#selectday_one").val(),
		"TIMETWO":$("#selectday_two").val(),
		"tableVALUE":$("#table").val()
	  },
	  dataType: "html",
	  success: function(Jdata) {
		 
		//var splitStr = Jdata.split(",");
		$("#show").show();
		$("#show").html(Jdata);
		
	  },
	  
	  error: function() {
		alert('check_error');
	  }
	});
});




$("#selectday_two").change(function(){
	//alert('1');
	$.ajax({
	  url: "123.php",
	  cache: true,
	  type: "post",
	  data:{
		"TIMEONE":$("#selectday_one").val(),
		"TIMETWO":$("#selectday_two").val(),
		"tableVALUE":$("#table").val()
	  },
	  dataType: "html",
	  success: function(Jdata) {		  
		//var splitStr = Jdata.split(",");
		$("#show").show();
		$("#show").html("");
		$("#show").html(Jdata);
		
	  },
	  
	  error: function() {
		alert('check_error');
	  }
	});
});

</script>
</body>
</html>