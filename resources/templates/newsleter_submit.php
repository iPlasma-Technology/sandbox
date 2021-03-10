<?php
include(realpath(dirname(__FILE__) . "/../config.php"));
//include(realpath(dirname(__FILE__) . "/../config.php"));	
include(realpath(dirname(__FILE__) . "/../function.php"));	
//print_r($_POST);exit;
if (isset($_POST['newsemail'])) {

	$email = strip_tags($_POST['newsemail']);

	}
	$x= addnewsleter($email);
	echo $x;exit;
?>
