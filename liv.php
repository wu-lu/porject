<head>

<link href="aa.css" rel="stylesheet" type="text/css" />
<link href="jquery-ui.css" rel="stylesheet"></link>
<script type="text/javascript" src="jquery-1.10.2.js"></script>
<script type="text/javascript" src="jquery-ui.js"></script>
</head>
<div class="aa"  >
<table border="0" align="left">
   <tbody>
   <tr>
     <td><img src="lig.png" height="126" width="123"></td></tr>
   <tr>
     <td><input type="button" name="submit1"  id="submit1" value="ligON" style="width: 123px; height: 30px; font-size: 

16px;"></td>
</tr>
   <tr><td><input type="button" name="submit2" id="submit2" value="ligOFF" style="width:123px;font-size: 

16px;height:30px;"></td></tr>
   
   </tbody>
   </table>
<table border="0" align="left">
   <tbody>
   <tr>
     <td><img src="ee.jpg" height="126" width="123"></td></tr>
   <tr>
     <td><input type="button" name="submit3" id="submit3" value="fanON" style="width:123px;height:30px;font-size: 

16px;"></td></tr>
   <tr><td><input type="button" name="submit4" id="submit4" value="fanOFF" style="font-size: 

16px;width:123px;height:30px;"></td></tr>
   
   </tbody>
   </table>
<table border="0"  align="left" >
    <tbody>
      <tr><td><table border="1" cellpadding="0" cellspacing="0" >
      <tbody>
   <tr><img src="11.jpg" height="120" width="265"></tr>
   <tr>
   <td colspan="2"><input type="button" id="submit5" name="submit5" value="Open"style="width:252px;height:30px;font-size: 16px;"></td>
   </tr>
   <tr>
   <td><input type="button" name="submit6" value="升" style="width:125px;font-size: 16px;height:30px;"></td>
   <td><input type="button" name="submit8" value="大" style="width:125px;height:30px;font-size: 16px;" ></td>
   </tr>
   <tr>
   <td><input type="button" name="submit7" value="降" style="width:125px;font-size: 16px;height:30px;"></td>
   <td><input type="button" name="submit9" value="小" style="font-size: 16px;width:125px;height:30px;"></td>
   </tr>
   </tbody>
    </table></td>
      </tr>
    </tbody>
    </table>
    
    
 

   
 
 </div>
<table border="0"  align="left">
    <tbody>
      <tr><td><table border="1" cellpadding="0" cellspacing="0" >
        <tbody>
          <tr><img src="22.png" height="170" width="302	" /></tr>
          <tr>
            <td colspan="5"><input type="button" name="submit10" value="開"style="width:301px;height:25px;font-size: 16px;" /></td>
          </tr>
          <tr>
            <td rowspan="2"><input type="button" name="submit11" value="↑"style="width:37px;height:65px;font-size: 40px;" /></td>
            <td><input type="button" name="submit13" value="1" style="width:71px;font-size: 16px;height:30px;" /></td>
            <td><input type="button" name="submit14" value="2" style="font-size: 16px;width:72px;height:30px;" /></td>
            <td><input type="button" name="submit15" value="3" style="width:71px;height:30px;font-size: 16px;" /></td>
            <td rowspan="2"><input type="button" name="submit25" value="+"style="width:38px;height:65px;font-size: 40px;" /></td>
          </tr>
          <tr>
            <td><input type="button" name="submit16" value="4" style="width:71px;font-size: 16px;height:30px;" /></td>
            <td><input type="button" name="submit17" value="5" style="font-size: 16px;width:72px;height:30px;" /></td>
            <td><input type="button" name="submit18" value="6" style="width:71px;height:30px;font-size: 16px;" /></td>
          </tr>
          <tr>
            <td rowspan="2"><input type="button" name="submit12" value="↓"style="width:37px;height:65px;font-size: 40px;" /></td>
            <td><input type="button" name="submit19" value="7" style="width:71px;font-size: 16px;height:30px;" /></td>
            <td><input type="button" name="submit20" value="8" style="font-size: 16px;width:72px;height:30px;" /></td>
            <td><input type="button" name="submit21" value="9" style="font-size: 16px;width:71px;height:30px;" /></td>
            <td rowspan="2"><input type="button" name="submit26" value="-"style="width:38px;height:65px;font-size: 40px;" /></td>
          </tr>
          <tr>
            <td><input type="button" name="submit22" value="返回" style="width:71px;height:30px;font-size: 16px;" /></td>
            <td><input type="button" name="submit23" value="0" style="font-size: 16px;width:72px;height:30px;" /></td>
            <td><input type="button" name="submit24" value="100" style="width:71px;font-size: 16px;height:30px;" /></td>
          </tr>
        </tbody>
      </table></td>
      </tr>
    </tbody>
    </table>


<script>

$("#submit1").click(function(){
	//alert('1');
	$.ajax({
	  url: "test01.php",
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
	  url: "test01.php",
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
	  url: "test01.php",
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
	  url: "test01.php",
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

$("#submit5").click(function(){
	//alert('1');
	$.ajax({
	  url: "test01.php",
	  cache: false,
	  type: "post",
	  data:{
		"Value":$("#submit5").val()
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

	
