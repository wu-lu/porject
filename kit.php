<head>

<link href="jquery-ui.css" rel="stylesheet"></link>
<script type="text/javascript" src="jquery-1.10.2.js"></script>
<script type="text/javascript" src="jquery-ui.js"></script>
</head>



<table border="0" align="center">
   <tbody>
   <tr>
	<td><img src="lig.png" height="126" width="123"></td>
	<td><img src="cc.jpg" height="126" width="123"></td>
	</tr>
   <tr>
	<td><input type="button" name="submit1"  id="submit1" value="ligON" style="width: 123px; height: 30px; font-size: 16px;"></td>
	<td><input type="button" name="submit3" id="submit3" value="fanON" style="width:123px;height:30px;font-size: 16px;"></td>
   </tr>
   <tr>
	<td><input type="button" name="submit2" id="submit2" value="ligOFF" style="width:123px;font-size: 16px;height:30px;"></td>
	<td><input type="button" name="submit4" id="submit4" value="fanOFF" style="font-size: 16px;width:123px;height:30px;"></td>
   </tr>
   
   </tbody>
   </table>


<script>

$("#submit1").click(function(){
	//alert('1');
	$.ajax({
	  url: "test03.php",
	  cache: false,
	  type: "post",
	  data:{
		"Value":$("#submit1").val()
/*		"TIMETWO":$("#selectday_two").val(),
		"IDVALUE":$("#Select_ID").val(),
		"tableVALUE":$("#table").val()*/
	  },
	  dataType: "html",
	  success: function(Jdata) {
		 
		//var splitStr = Jdata.split(",");
		//$("#show").html(Jdata);
		
	  },
	  
	  error: function() {
		alert('check_error');
	  }
	});
});



$("#submit2").click(function(){
	//alert('1');
	$.ajax({
	  url: "test03.php",
	  cache: false,
	  type: "post",
	  data:{
		"Value":$("#submit2").val()
/*		"TIMETWO":$("#selectday_two").val(),
		"IDVALUE":$("#Select_ID").val(),
		"tableVALUE":$("#table").val()*/
	  },
	  dataType: "html",
	  success: function(Jdata) {
		 
		//var splitStr = Jdata.split(",");
		//$("#show").html(Jdata);
		
	  },
	  
	  error: function() {
		alert('check_error');
	  }
	});
});

$("#submit3").click(function(){
	//alert('1');
	$.ajax({
	  url: "test03.php",
	  cache: false,
	  type: "post",
	  data:{
		"Value":$("#submit3").val()
/*		"TIMETWO":$("#selectday_two").val(),
		"IDVALUE":$("#Select_ID").val(),
		"tableVALUE":$("#table").val()*/
	  },
	  dataType: "html",
	  success: function(Jdata) {
		 
		//var splitStr = Jdata.split(",");
		//$("#show").html(Jdata);
		
	  },
	  
	  error: function() {
		alert('check_error');
	  }
	});
});

$("#submit4").click(function(){
	//alert('1');
	$.ajax({
	  url: "test03.php",
	  cache: false,
	  type: "post",
	  data:{
		"Value":$("#submit4").val()
/*		"TIMETWO":$("#selectday_two").val(),
		"IDVALUE":$("#Select_ID").val(),
		"tableVALUE":$("#table").val()*/
	  },
	  dataType: "html",
	  success: function(Jdata) {
		 
		//var splitStr = Jdata.split(",");
		//$("#show").html(Jdata);
		
	  },
	  
	  error: function() {
		alert('check_error');
	  }
	});
});
</script>