<?php
	$conn = mysqli_connect("localhost", "root", "123456");
    mysqli_select_db($conn,"wu1") or die(mysql_error());
    if(isset($_GET['Id'])) {
        $sql = "SELECT * FROM images WHERE Id=" . $_GET['Id'];
		$result = mysqli_query($conn,"$sql") or die("<b>Error:</b> Problem on Retrieving Image BLOB<br/>" . mysql_error());
		$row = mysqli_fetch_array($result);
		header("Content-type: image/jpeg" );
      		  echo $row["Data"];
		while($row = mysqli_fetch_array($result)) {
header("Content-Type:text/html; charset=utf-8");
		  echo $row['time'];
}
	}
	mysqli_close($conn);
?>