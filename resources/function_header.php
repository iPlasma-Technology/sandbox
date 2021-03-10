<?php

 //include(realpath(dirname(__FILE__) . "./resources/config.php"));
 //include("config.php");
 
 #########db connection 1##################
//print_r($config);
//echo $config['db']['db1']['dbname'];
/*$servername_h = $config['db']['db1']['host'];
$username_h = $config['db']['db1']['username'];
$password_h = $config['db']['db1']['password'];
$db_h = $config['db']['db1']['dbname'];*/

//$mysqli = new mysqli($servername_h,$username_h,$password_h,$db_h);
// Check connection
/*if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}*/
#########db connection 2##################
//print_r($config);
//echo $config['db']['db1']['dbname'];
$servername2_h ='localhost'; ///$config['db']['db2']['host'];
$username2_h = 'iPlasmauser';//$config['db']['db2']['username'];
$password2_h ='B7c8D9W1A'; //$config['db']['db2']['password'];
//$db2_h = 'q7o800j_domain1';//$config['db']['db2']['dbname'];
$db2_h = 'iPlasma_domain1';//$config['db']['db2']['dbname'];

global $con_h;
$con_h = mysqli_connect($servername2_h,$username2_h,$password2_h,$db2_h);
/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
// Check connection
// $mysqli2 = new mysqli($servername2,$username2,$password2,$db2);
/*if ($mysqli2 -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli2 -> connect_error;
  exit();
}*/

#####################function for aericle#######################
function newsdetails_header($id){
     global $con_h;
	 $resulr_Array=array();	
	$sql="SELECT * FROM Article Where id=".$id;;
	 $result = mysqli_query($con_h, $sql);
	// print_r($result_h);exit;
	$i=0;
	while ($row = mysqli_fetch_array($result, MYSQLI_BOTH)) {
        //printf ("ID: %s  Name: %s", $row[0], $row["name"]);
		$resulr_Array[$i]['title']=$row["title"];
		$resulr_Array[$i]['image_id']=$row["image_id"];
		$resulr_Array[$i]['author_image_id']=$row["author_image_id"];
		$i++;
    }
	 return $resulr_Array;
	
 }
 
 function dnred_details_header($id){
     global $con_h;
	 $resulr_Array=array();	
	 $sql="SELECT * FROM Post Where id=".$id;;
	 $result = mysqli_query($con_h, $sql);
	 $i=0;
	while ($row = mysqli_fetch_array($result, MYSQLI_BOTH)) {
        //printf ("ID: %s  Name: %s", $row[0], $row["name"]);
		
		$resulr_Array[$i]['title']=$row["title"];
		$resulr_Array[$i]['image_id']=$row["cover_id"];		
		$resulr_Array[$i]['cover_id']=$row["cover_id"];	
		$resulr_Array[$i]['thumb_id']=$row["thumb_id"];	
		$i++;
    }

    //mysqli_free_result($result);
	//print_r($resulr_Array);
	return $resulr_Array;
 }
############################################################

##############get img extention of image id##########
 function getimgext_header($id)
 {
	 global $con_h;
	 $resulr_Array=array();	
	 $sql="SELECT type FROM Image WHERE id=".$id;
	 $result = mysqli_query($con_h, $sql);
	 //$result = mysqli_query($con_h, "SELECT type FROM image WHERE id='".$id."'"); 
	 $row = mysqli_fetch_array($result, MYSQLI_BOTH);
	 //print_r($row);
	// echo $row[0]['type']."<>".$row['type'];
	 return $row['type'];
 }
?>