<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>居家監控系統</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="js/jquery.mobile-1.3.2.min.css"/>
	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/jquery.mobile-1.3.2.min.js"></script>
    <script src="jQuery.ui.datepicker.js"></script>
    <script src="jquery.ui.datepicker.mobile.js"></script>
	<script src="js/highcharts.js"></script>
    <script src="js/modules/exporting.js"></script>
    <script src="js/highcharts_plugins/zoomout-selection.js"></script>
</head>
<style>
.txtwrapper{
    font-size: 15px;
	text-align:center;
}
</style>
<body>
<div data-role="page" id="main">
<div data-role="header" data-theme="a">
	<div class="txtwrapper">
		<h1>查詢</h1>
    </div>
</div>
<div data-role="content"> <!-- Collapsibles -->  
		<table width="100%" border="1">
		<tr>
			<td width="50%" align="center">
                <li><img id="img_137" src='images/powerOFF.png' width='87' height='146' alt='img_137'></li>
                <a href="#" data-role="button" id="T_BTN137_ONOFF" name="T_BTN137_ONOFF" data-theme="b" data-ajax="false">開關(NO.137)</a>       
			</td>
			<td width="50%" align="center">
                <li><img id="img_165" src='images/powerOFF.png' width='87' height='146' alt='img_165'></li>
                <a href="#" data-role="button" id="T_BTN165_ONOFF" name="T_BTN165_ONOFF" data-theme="b" data-ajax="false">開關(NO.165)</a>
			</td>
		</tr>
        <tr>
        	<td width="50%" align="center" colspan="2">
        	<li><img id="img_LED" src='images/powerOFF.png' width='87' height='146' alt='img_LED'></li>
	        <a href="#" data-role="button" id="T_BTNLED_ONOFF" name="T_BTNLED_ONOFF" data-theme="b" data-ajax="false">開關 LED</a>
            </td>
        </tr>
		</table>
	</div>
	<div id="show" align="center">
	</div>
</div>
<div data-role="footer" data-position="fixed">
	<h4>Author : Shih Ray</h4>
</div>
</body>
</html>
<script>
$("#T_BTN137_ONOFF").click(function()
{
	$.ajax({
		  url: "http://192.168.1.111:5005/get?f=t",
		  context: document.body
		}).done(function() {
		  $( this ).addClass( "done" );
	});
	changeImage("img_137");	
});
$("#T_BTN165_ONOFF").click(function()
{
	$.ajax({
		  url: "http://192.168.1.111:5005/get?f=h",
		  context: document.body
		}).done(function() {
		  $( this ).addClass( "done" );
	});
	changeImage("img_165");
});
$("#T_BTNLED_ONOFF").click(function()
{
	$.ajax({
		  url: "http://192.168.1.111:5005/get?f=e",
		  context: document.body
		}).done(function() {
		  $( this ).addClass( "done" );
	});
	changeImage("img_LED");
});

function changeImage(str) 
{
	var src = document.getElementById(str).src;	
	var imgsrc = src.substring(src.lastIndexOf("/")+1);
    if  (imgsrc == "powerOFF.png")
    {
        document.getElementById(str).src = "images/powerON.png";
		//alert('if'+document.getElementById("img_137").src);
    }
    else 
    {
        document.getElementById(str).src = "images/powerOFF.png";
		//alert('else'+document.getElementById("img_137").src);
    }
}

function changeImageload(id,onoff) 
{
	if(onoff == 0)
	{
		document.getElementById(id).src = "images/powerOFF.png";
	}
	else
	{
		document.getElementById(id).src = "images/powerON.png";
	}
}

window.onload = function(e) 
{
	var timer = setInterval(update, 1000);	
	function update() 
	{
		$.ajax
		({
			url: "postt.php",
			cache: false,
			type: "post",
			data:
			{
			},
			dataType: "html",
			success: function(Jdata) {
				var data = Jdata.split('&');
				changeImageload("img_137",data[0]);
				changeImageload("img_165",data[1]);
				changeImageload("img_LED",data[2]);								
			},
			error: function() {
				alert('Netwook Fail!!');
			}
		});
	}
};
</script>