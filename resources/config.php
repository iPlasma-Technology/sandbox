<?php
  
/*
    The important thing to realize is that the config file should be included in every
    page of your project, or at least any page you want access to these settings.
    This allows you to confidently use these settings throughout a project because
    if something changes such as your database credentials, or a path to a specific resource,
    you'll only need to update it here.
*/
 $password='B7c8D9W1A';//'d8$kaz0N9-3u';
$config = array(
    "db" => array(
        "db1" => array(
            "dbname" => "io3e00lt_main", //shreya_q7o800j_main
            "username" => "iPlasmauser",//shreya_root
            "password" => $password, //$password
            "host" => "localhost" //localhost
        ),
        "db2" => array(
            "dbname" => "io3e00lt_domain1", //shreya_q7o800j_domain1
            "username" => "iPlasmauser",//shreya_q7o800j
            "password" => "B7c8D9W1A", //2FxME(8u2TrS
            "host" => "localhost" //localhost
        )
    ),
    "urls" => array(
        //"baseUrl" => "http://example.com"
		//"baseUrl"=>"http://mydevfactory.com/~shreya/subhankar/iplasmawebsite/"
		"baseUrl"=>"http://52.0.42.23/sandbox/"
    ),
    "paths" => array(
        //"resources" => "/path/to/resources",
		//"resources" => "http://mydevfactory.com/~shreya/subhankar/iplasmawebsite/resources",
		"resources" => "http://52.0.42.23/sandbox/resources",
        "images" => array(
            "content" => $_SERVER["DOCUMENT_ROOT"] . "/images/content",
            "layout" => $_SERVER["DOCUMENT_ROOT"] . "/images/layout"
        )
    )
);
 
/*
    I will usually place the following in a bootstrap file or some type of environment
    setup file (code that is run at the start of every page request), but they work 
    just as well in your config file if it's in php (some alternatives to php are xml or ini files).
*/
 
/*
    Creating constants for heavily used paths makes things a lot easier.
    ex. require_once(LIBRARY_PATH . "Paginator.php")
*/
defined("LIBRARY_PATH")
    or define("LIBRARY_PATH", realpath(dirname(__FILE__) . '/library'));
	
defined("CSS_PATH")
    or define("CSS_PATH", realpath(dirname(__FILE__) . './css'));
     
defined("TEMPLATES_PATH")
    or define("TEMPLATES_PATH", realpath(dirname(__FILE__) . '/templates'));
	
defined("IMG_PATH")
    or define("IMG_PATH", realpath(dirname(__FILE__) . '/img/layout'));	
 
/*
    Error reporting.
*/
ini_set("error_reporting", "true");
error_reporting(E_ALL|E_STRCT);


 
?>