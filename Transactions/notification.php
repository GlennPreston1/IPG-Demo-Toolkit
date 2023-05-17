<?php

// Return if there was no transaction response
if (!$_POST) {
	echo ('No order has been processed, please try again.') ;
	return 0;
}

// Get user
$user = "Guest";
if (isset($_GET["user"]) && is_dir("./logs/".$_GET["user"]."/")) {
	$user = $_GET["user"];
}

// Get response
$payload = file_get_contents('php://input');

// Create logs folder if it does not exist
$logsDir = 'logs/'.$user.'/';
	
if (is_dir($logsDir))
{
	// Retrieve merchantId and merchantTxId
	$parameters = explode("&", urldecode($payload));
	$merchantId = "Unknown";
	$merchantTxId = "Unknown";
	
	foreach($parameters as $value){
		$keyValue = explode("=", $value, 2);
		echo '<tr>';
		echo '<td>'.$keyValue[0].'</td>';
		echo '<td>'.$keyValue[1].'</td>';
		echo '</tr>';
		
		if($keyValue[0] == "merchantId") {
			$merchantId = $keyValue[1];
		}
		else if ($keyValue[0] == "merchantTxId") {
			$merchantTxId = $keyValue[1];
		}
	}
	
	// Write response to file
	$myfile = fopen('logs/'.$user.'/'.time().'_'.$merchantId.'_'.$merchantTxId.'.txt', 'w') or die('Unable to open file!');
	fwrite($myfile, $payload);
	fclose($myfile);
}

?>
