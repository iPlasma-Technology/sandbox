<?php
   //require_once(realpath(dirname(__FILE__) . "/../resources/config.php"));
   include(realpath(dirname(__FILE__) . "./resources/config.php"));
   //include(realpath(dirname(__FILE__) . "./resources/function.php"));	
    //include(LIBRARY_PATH . "/templateFunctions.php");
    include("resources/library/templateFunctions.php");
 
    /*
        Now you can handle all your php logic outside of the template
        file which makes for very clean code!
    */
     
    $setInIndexDotPhp = "Hey! I was set in the index.php file.";
     $id=$_REQUEST['id'];
    // Must pass in variables (as an array) to use in template
    $variables = array(
        //'setInIndexDotPhp' => $config
        'id'=>$id
    );
     
    renderLayoutWithContentFile("newsdetailslist.php", $variables);
 
?>