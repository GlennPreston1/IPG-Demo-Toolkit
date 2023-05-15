<?php

$user = $_GET["user"];

if ($user != null && file_exists("./config/users/".$user.".json")) {
	setcookie("user", $user, time() + (86400 * 365), "/");
}

header("Location: ./HPP/hostedpaypage.php");
?>