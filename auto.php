<head>
<link rel="stylesheet" href="//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
</head>
<body>
<div id="demo">

</div>

<script>

				
</script>
<script type="text/javascript">
// setInterval



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
				tem_liv=data[0];
				hum_liv=data[1];
				time_liv=data[2];
				tem_bed=data[3];
				hum_bed=data[4];
				time_bed=data[5];
				tem_kit=data[6];
				hum_kit=data[7];
				time_kit=data[8];
				lig_liv=data[9];
				lig_bed=data[10];
				tgs=data[11];
				
				
				if(tem_bed >30)
				{	
					var tag = document.getElementsByTagName("demo");
					text = tag.innerHTML;
					$.ajax({
  					type: "POST",
 					url: "~/relay08open.py",
 					data: { param: text}
					}).done(function( o ) {
  					// do something
					});
				}
				else
				{
					$.ajax({
  					type: "POST",
 					url: "~/relay08close.py",
 					data: { param: text}
					}).done(function( o ) {
  					// do something
					});
				}
				document.getElementById("demo").innerHTML = greeting;
			},
			error: function() {
				alert('Netwook Fail!!');
			}
		});

	}
};
</script>

</body>