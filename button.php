<?php
	session_start();
	if (!$_SESSION['accesstoken']) {
		print "<button class='btn btn-info' id='login'>Login with facebook</button>";
	} else {
		print "<button class='btn btn-info' id='logout'>Logout</button>";
	}
?>
