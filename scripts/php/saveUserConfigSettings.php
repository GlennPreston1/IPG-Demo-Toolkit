<?php

// Check if user cookie is set
if (!isset($_COOKIE["user"])) {
	return;
}

// Get user cookie
$user = $_COOKIE["user"];

// Get user config file
$userConfigFilePath = "../../config/users/".$user.".json";
$userConfigFile = file_get_contents($userConfigFilePath) or die("Unable to open user config file!");
$userData = json_decode($userConfigFile, true);
$params;

// Update data
foreach($_POST as $key => $value){
	$userData["params"][$key] = $value;
}

// Save user config file
$updatedUserConfigData = json_encode($userData, JSON_PRETTY_PRINT);
file_put_contents($userConfigFilePath, $updatedUserConfigData);

// return user settings
print_r($updatedUserConfigData);

?>