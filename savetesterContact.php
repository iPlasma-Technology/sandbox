<?php
   //require_once(realpath(dirname(__FILE__) . "/../resources/config.php"));
   //include(realpath(dirname(__FILE__) . "./resources/config.php"));
   //include(realpath(dirname(__FILE__) . "./resources/function.php"));	
   
    include(realpath(dirname(__FILE__) . "./resources/config.php"));  
    //include(LIBRARY_PATH . "/templateFunctions.php");
    include("resources/library/templateFunctions.php");
 
    /*
        Now you can handle all your php logic outside of the template
        file which makes for very clean code!
    */
     
    $setInIndexDotPhp = "Hey! I was set in the index.php file.";
     
    // Must pass in variables (as an array) to use in template
    $variables = array(
        'setInIndexDotPhp' => $config
    );
     
    renderLayoutWithContentFile("test2.php", $_POST);
	//print_r($_POST);exit;
	/*if (isset($_POST['email2'])) {
	$fname = strip_tags($_POST['fname']);
	$lname = strip_tags($_POST['lname']);
	$email = strip_tags($_POST['email2']);
	$phone = strip_tags($_POST['phone']);
	$zip = strip_tags($_POST['zip2']);
	$type = strip_tags($_POST['optradio']);
	}
	echo addbecometester($fname,$lname,$email,$phone,$zip,$type);*/
 
?>