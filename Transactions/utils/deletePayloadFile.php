<?php

// Return if there was no filename
if (!$_POST) {
	echo ('No filename was received, please try again.') ;
	return 0;
}

if (isset($_POST['file'])) {
	unlink($_POST['file']);
}

?>