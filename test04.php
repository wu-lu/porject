<?php session_start();

    $OPENValue=$_POST['Value'];
    echo $OPENValue;
    switch($OPENValue){
    case 'ligON':
	
	exec('sudo python /home/pi/zigbee/relay06open.py');
    break;
	
	case 'ligOFF':
	exec('sudo python /home/pi/zigbee/relay06close.py');
    break;
	
	case 'fanON':
	$result = mysqli_query($link,"update re set h='0'");
	exec('sudo python /home/pi/zigbee/relay07open.py');
    break;
	
	case 'fanOFF':
	$result = mysqli_query($link,"update re set h='0'");
	exec('sudo python /home/pi/zigbee/relay07close.py');
    break;
    }
	
	

 ?>