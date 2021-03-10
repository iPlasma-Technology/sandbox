<?php
    include(realpath(dirname(__FILE__) . "/../config.php"));	
    function renderLayoutWithContentFile($contentFile, $variables = array())
    {
		//echo TEMPLATES_PATH;
		
		//exit;
        $contentFileFullPath = TEMPLATES_PATH . "/" . $contentFile;
     
        // making sure passed in variables are in scope of the template
        // each key in the $variables array will become a variable
        if (count($variables) > 0) {
            foreach ($variables as $key => $value) {
                if (strlen($key) > 0) {
                    ${$key} = $value;
                }
            }
        }
     
        include(TEMPLATES_PATH . "/header.php");
     
        /*echo "<div id=\"container\">\n"
           . "\t<div id=\"content\">\n";*/
     
        if (file_exists($contentFileFullPath)) {
            include($contentFileFullPath);
        } else {
            /*
                If the file isn't found the error can be handled in lots of ways.
                In this case we will just include an error template.
            */
            include(TEMPLATES_PATH . "/error.php");
        }
     
        // close content div
        //echo "\t</div>\n";
     
       // require_once(TEMPLATES_PATH . "/rightPanel.php");
     
        // close container div
        //echo "</div>\n";
     
        include(TEMPLATES_PATH . "/footer.php");
    }
    
    function renderLayoutnoheaderfooter($contentFile, $variables = array())
    {
		//echo TEMPLATES_PATH;
		
		//exit;
        $contentFileFullPath = TEMPLATES_PATH . "/" . $contentFile;
     
        // making sure passed in variables are in scope of the template
        // each key in the $variables array will become a variable
        if (count($variables) > 0) {
            foreach ($variables as $key => $value) {
                if (strlen($key) > 0) {
                    ${$key} = $value;
                }
            }
        }
     
        //include(TEMPLATES_PATH . "/header.php");
     
        /*echo "<div id=\"container\">\n"
           . "\t<div id=\"content\">\n";*/
     
        if (file_exists($contentFileFullPath)) {
            include($contentFileFullPath);
        } else {
            /*
                If the file isn't found the error can be handled in lots of ways.
                In this case we will just include an error template.
            */
            include(TEMPLATES_PATH . "/error.php");
        }
     
        // close content div
        //echo "\t</div>\n";
     
       // require_once(TEMPLATES_PATH . "/rightPanel.php");
     
        // close container div
        //echo "</div>\n";
     
        //include(TEMPLATES_PATH . "/footer.php");
    }
?>