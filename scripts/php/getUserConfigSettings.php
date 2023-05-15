<?php

// Check if user cookie is set
if (!isset($_COOKIE["user"])) {
	return;
}

// Get user cookie
$user = $_COOKIE["user"];

// Get user config file
$userConfigFile = file_get_contents("../../config/users/".$user.".json") or die("Unable to open user config file!");
$userData = json_decode($userConfigFile, true);

// return user settings
print_r(json_encode($userData));

?>