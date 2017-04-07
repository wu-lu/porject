<?
	error_reporting(0);
	$conn = mysql_connect('127.0.0.1','root','123456') or die('Error with MySQL connection');
	
	mysql_query("SET CHARACTER SET 'UTF8';");
	mysql_query('SET NAMES UTF8;');
	mysql_query('SET CHARACTER_SET_CLIENT=UTF8;');
	mysql_query('SET CHARACTER_SET_RESULTS=UTF8;');
	mysql_select_db("wu1");   // 資料"庫"名稱
?>
<!DOCTYPE html>
<!-- Website template by freewebsitetemplates.com -->
<html>
<head>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/themes/hot-sneaks/jquery-ui.css" rel="stylesheet">
   <!-- <link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css"/>
<!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
    
    <!--<script src="js/modules/exporting.js"></script>-->
    
 
</head>
<?php 

/*$userName = "root";
$password =  "123456";
$link= mysqli_connect("127.0.0.1",$userName,$password) or die ("無法開啟Mysql資料庫連結"); //建立mysql資料庫連結
mysqli_select_db($link,"wu1"); //選擇資料庫abc*/
	
	$TIMEONE=$_POST['TIMEONE'];
	$TIMETWO=$_POST['TIMETWO'];
	$table=$_POST['tableVALUE'];
	//echo "$TIMEONE";


 $sql="select * from  ".$table."  where time between '".$TIMEONE."%' and '".$TIMETWO."%' order by time desc ";
 /*echo $sql;
 $result = mysqli_query($link,$sql);
 $row = mysqli_fetch_assoc($result);
 
 echo $row['tem1'];*/
 
 $result = mysql_query($sql);
//$table='tem_liv';
$total=mysql_num_rows($result);

 //echo $total."★";


 switch ($table)
 {
	 
	case "tem_liv":
	 ?><script>
	// alert('乾無??');
		</script>
        <?
	$chart_name='溫溼度-客廳';
	while($row = mysql_fetch_array($result))
	{
		$atem1[] = (float) ($row['tem1']);
		$atem2[] = (float) ($row['hum1']);
		$time[] =  ($row['time']);
	} 
	
	break;

	case "tem_bed":
	  $chart_name='溫溼度-臥房';
	 
	 while($row = mysql_fetch_array($result))
	 {
		$atem1[] = (float) ($row['tem1']);
		$atem2[] = (float) ($row['hum1']);
		$time[] = ($row['time']);
         } 
	
	 break;
	 
	 case "tem_kit":
	  $chart_name='溫溼度-廚房';
	 
	 while($row = mysql_fetch_array($result))
	 {
		$atem1[] = (float) ($row['tem1']);
		$atem2[] = (float) ($row['hum1']);
		$time[] = ($row['time']);
         } 
	
	 break;
	 
	 case "lig_liv":
	  $chart_name='光感值-客廳';
	 
	 while($row = mysql_fetch_array($result))
	 {
		$atem1[] = (float) ($row['lig1']);
		$time[] = ($row['time']);
         } 
	
	 break;
	 
	 case "lig_bed":
	  $chart_name='光感值-臥房';
	 
	 while($row = mysql_fetch_array($result))
	 {
		$atem1[] = (float) ($row['lig1']);
		$time[] = ($row['time']);
         } 
	
	 break;
	 
	 case "tgs":
	  $chart_name='可燃氣體';
	 
	 while($row = mysql_fetch_array($result))
	 {
		$atem1[] = (float) ($row['tgs1']);
		$time[] = ($row['time']);
         } 
	
	 break;
	 }


//$pre[] = new bar_filled_value (2,5);


 $total=mysql_num_rows($result);
 $Y_value = json_encode($atem1); 
 $Y2_value = json_encode($atem2); 

 



for($i=1;$i<=$total;$i++)
$x_labels_array[]=(string)$i;
$x = json_encode($x_labels_array); 
$js_time=json_encode($time);




	?>
		
		<script type="text/javascript">
		
var time_php = <? echo json_encode($js_time) ?>;
var time=JSON.parse(time_php);  
$(function () {
        $('#container').highcharts({
            title: {
				
                text: '<?php echo $chart_name;?>',
            x: -20 //center
            },
			chart: {
           		 borderColor: '#000000',
				 borderWidth: 2,
           		 width: 1050,
				 height:500,				
				 zoomType: 'x' 
				 
        	},
			credits: {
            	enabled: false
        	},
            subtitle: {
              //  text: 'Source: WorldClimate.com',
                x: -20
            },
            xAxis: {
			
            },
            yAxis: {
				lineWidth: 1,
				minorGridLineWidth: 0,
            	minorTickInterval: 'auto',
            	minorTickWidth: 3,
                title: {
                    text: ''
                },
                plotLines: [{
                    value: 0,
                    width: 1,
                    color: '#808080'
                }]
            },
            tooltip: {
                valueSuffix: '',
				crosshairs: true,
				style: {      	
					padding:30					       
            	},								
				formatter: function() { 
                return ' The value for <b>'+ this.x +
                    '</b> is <b>'+ this.y+'</b><br>From <b>'+this.series.name+
					'</b><br>紀錄時間<br>'+time[this.x] ;
            	}
				
            },
            legend: {
                layout: 'horizontal',
                align: 'center',
                verticalAlign: 'bottom',
                borderWidth: 0
            },
			exporting: {
            	width: 1739
        	},
            series: [
			
					{ //数据列 
            name: '<?php if($table=='tem_liv') echo "溫度";
			else if($table=='tem_bed')echo "溫度";
			else if($table=='tem_kit')echo "溫度";
			else if($table=='lig_liv')echo "光感值";
			else if($table=='lig_bed')echo "光感值";
			else if($table=='tgs')echo "可燃氣體";?>', 
            data: <?php echo $Y_value;?> 
			}
			<?php  
			
			if($table=='tem_liv')
			{
				echo ",{
						name: '濕度', 
           				data:"; ?>  
						<?php  echo "".$Y2_value."}";
			}
			else if($table=='tem_bed')
			{
				echo ",{
						name: '濕度', 
           				data:"; ?>  
						<?php  echo "".$Y2_value."}";
			}
			else if($table=='tem_kit')
			{
				echo ",{
						name: '濕度', 
           				data:"; ?>  
						<?php  echo "".$Y2_value."}";
			}
			?>
					
					
					
			
                
			
			] 
		
        });
    });
    

		</script>

<body>

<div style="color:#F00 ; font-size:18px;"  ><?php if ($total==0) echo "查無資料" ;?></div>

<div align="center" id="container" style="width:1150px; height: 500px;"></div>

        </body>
        </html>
		