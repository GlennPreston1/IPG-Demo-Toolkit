<?php

// Return if there was no transaction response
if (!$_POST) {
	echo ('No order has been processed, please try again.') ;
	return 0;
}

// Get response
$payload = file_get_contents('php://input');

// Create logs folder if it does not exist
$logsDir = 'logs/';
	
if (!is_dir($logsDir))
{
    mkdir($logsDir, 0755, false);
}

// Write response to file
$myfile = fopen('logs/TransactionResultCall_'.time().'.txt', 'w') or die('Unable to open file!');
fwrite($myfile, $payload);
fclose($myfile);

?>
