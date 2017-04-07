<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="jquery-ui.css" rel="stylesheet"></link>
<script type="text/javascript" src="jquery-1.10.2.js"></script>
<script type="text/javascript" src="jquery-ui.js"></script>
</head>
<body>

<p>&nbsp;&nbsp;<img src="liv.png" height="170" width="300"></p>
    <table width="100%" height="72" border="1">
      <tr>
    <th  scope="col"  bgcolor="#FFD78C">溫度</th>
    <th  scope="col"  bgcolor="#FFD78C">濕度</th>
    <th  scope="col"  bgcolor="#FFD78C">亮度</th>
  
  </tr>
  <tr>
    <td><div id="tem_liv"  style="font-size:20px;" align="center"></div></td>
    <td><div id="hum_liv"  style="font-size:20px;" align="center"></div></td>
    <td><div id="lig_liv"  style="font-size:20px;" align="center"></div></td>
  </tr>
  <tr>
    <th  colspan="3"scope="col"  bgcolor="#FFD78C">時間</th>
  
  </tr>
  <tr>
	<td colspan="3" align="center"><div id="time_liv"  style="font-size:20px;" align="center"></div></td>
  </tr>
</table>
    <p> </p>
 





<p>&nbsp;&nbsp;<img src="bed.jpg" height="180" width="300"></p>

<table width="100%" height="72" border="1">
      <tr>
    <th  scope="col"  bgcolor="#FFD78C">溫度</th>
    <th  scope="col"  bgcolor="#FFD78C">濕度</th>
    <th  scope="col"  bgcolor="#FFD78C">亮度</th>
  
  </tr>
  <tr>
    <td><div id="tem_bed"  style="font-size:20px;" align="center"></div></td>
    <td><div id="hum_bed"  style="font-size:20px;" align="center"></div></td>
    <td><div id="lig_bed"  style="font-size:20px;" align="center"></div></td>
  </tr>
  <tr>
    <th  colspan="3"scope="col"  bgcolor="#FFD78C">時間</th>
  
  </tr>
  <tr>
	<td colspan="3" align="center"><div id="time_bed"  style="font-size:20px;" align="center"></div></td>
  </tr>
</table>
<p>&nbsp;&nbsp;<img src="kit.jpg" height="180" width="300"></p>


<table width="100%" height="72" border="1">
      <tr>
    <th  scope="col"  bgcolor="#FFD78C">溫度</th>
    <th  scope="col"  bgcolor="#FFD78C">濕度</th>
    <th  scope="col"  bgcolor="#FFD78C">可燃氣體</th>
  
  </tr>
  <tr>
    <td><div id="tem_kit"  style="font-size:20px;" align="center"></div></td>
    <td><div id="hum_kit"  style="font-size:20px;" align="center"></div></td>
    <td><div id="tgs"  style="font-size:20px;" align="center"></div></td>
  </tr>
  <tr>
    <th  colspan="3"scope="col"  bgcolor="#FFD78C">時間</th>
  
  </tr>
  <tr>
	<td colspan="3" align="center"><div id="time_kit"  style="font-size:20px;" align="center"></div></td>
  </tr>
</table>

<script type="text/javascript">
// setInterval
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
				$('#a').html(data[12]);
			},
			error: function() {
				alert('Netwook Fail!!');
			}
		});
	}
};
</script>
</body>
<style type="text/css"> 
    body {
	 background-image: url("back.jpg"); 
	margin: 0;
	padding: 0;
	color: #000;
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 100%;
	line-height: 1.4;
} 
  </style> 
