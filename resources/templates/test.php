<?php
include(realpath(dirname(__FILE__) . "/../config.php"));
//include(realpath(dirname(__FILE__) . "/../config.php"));	
include(realpath(dirname(__FILE__) . "/../function.php"));	
//print_r($_POST);exit;
if (isset($_POST['email'])) {
	$name = strip_tags($_POST['name']);
	$email = strip_tags($_POST['email']);
	//$city = strip_tags($_POST['city']);
	//$state = strip_tags($_POST['state']);
	$zip = strip_tags($_POST['zip']);
	}
	echo prelaunchcontact($name,$email,$zip);
	exit;
?>
