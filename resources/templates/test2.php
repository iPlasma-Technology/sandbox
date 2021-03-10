<?php
include(realpath(dirname(__FILE__) . "/../config.php"));
//include(realpath(dirname(__FILE__) . "/../config.php"));	
include(realpath(dirname(__FILE__) . "/../function.php"));	
//print_r($config);
if (isset($_POST['email2'])) {
	$fname = strip_tags($_POST['fname']);
	$lname = strip_tags($_POST['lname']);
	$email = strip_tags($_POST['email2']);
	$phonetype = strip_tags($_POST['phonetype']);
	$phone = strip_tags($_POST['phone']);
	$zip = strip_tags($_POST['zip2']);
	$type = strip_tags($_POST['optradio']);
	}
	echo addbecometester($fname,$lname,$email,$phonetype,$phone,$zip,$type);
 
	exit;
?>
