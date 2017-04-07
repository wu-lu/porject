<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
<?php
    $conn = mysqli_connect("localhost", "root", "123456");
    mysqli_select_db($conn,"wu1");
    $sql = "SELECT time,id FROM images ORDER BY id DESC limit 5"; 
    $result = mysqli_query($conn,$sql);
?>
<?php
	echo"<table width=20% border=1 align=center>";
	echo "<tr>";
	
	echo "<th scope=col bgcolor=#FFD78C>照片</th>";
	echo "<th scope=col bgcolor=#FFD78C>時間</th>";
	while($row = mysqli_fetch_array($result)) {
	echo "<tr>";
	echo "<td>";?>


		<img src="imageView.php?Id=<?php echo $row["id"]; ?>"  height="230" width="230" <?php echo "<td>";
echo "<td>";

header("Content-Type:text/html; charset=utf-8");
echo $row['time']; echo "</td>";
echo "<tr>";
}
echo "</table>";
?>
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