<?php
	require_once "config.php";

	if (isset($_SESSION['access_token'])) {
		header('Location: ../../client/indexClient.php');
		exit();
	}

	$redirectURL = "http://localhost/projet-web/projet-web/projet%20web/views/FrontOfficeEnactus/login/FacebookLogin/fb-callback.php";
	$permissions = ['user_location'];
	$loginURL = $helper->getLoginUrl($redirectURL, $permissions);

	header("location:".$loginURL."");
?>
