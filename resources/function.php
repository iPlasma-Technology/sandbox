<?php

 //include(realpath(dirname(__FILE__) . "./resources/config.php"));
 include("config.php");
 
 #########db connection 1##################
//print_r($config);
//echo $config['db']['db1']['dbname'];
$servername = $config['db']['db1']['host'];
$username = $config['db']['db1']['username'];
$password = $config['db']['db1']['password'];
$db = $config['db']['db1']['dbname'];

$mysqli = new mysqli($servername,$username,$password,$db);
// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}
#########db connection 2##################
//print_r($config);
//echo $config['db']['db1']['dbname'];
$servername2 = $config['db']['db2']['host'];
$username2 = $config['db']['db2']['username'];
$password2 = $config['db']['db2']['password'];
$db2 = $config['db']['db2']['dbname'];

global $con2;
$con2 = mysqli_connect($servername2,$username2,$password2,$db2);
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
function Post()
 {
	 global $con2;
	 $resulr_Array=array();	
	 $result = mysqli_query($con2, "SELECT * FROM Post where status = 'A' order by id desc limit 3");
	 //$row = mysqli_fetch_assoc($queryget);
	 /*$row = mysqli_fetch_array($queryget);
	print_r($row);exit;
	return $row;*/
	$i=0;
	while ($row = mysqli_fetch_array($result, MYSQLI_BOTH)) {
        //printf ("ID: %s  Name: %s", $row[0], $row["name"]);
		$resulr_Array[$i]['title']=$row["title"];
		$resulr_Array[$i]['image_id']=$row["image_id"];
		//$resulr_Array[$i]['author_image_id']=$row["author_image_id"];
		//$resulr_Array[$i]['author']=$row["author"];
		$resulr_Array[$i]['content']=substr($row["content"], 0, 100);
		//$resulr_Array[$i]['img_ext']=strtolower(getimgext($row["image_id"]));
		//$resulr_Array[$i]['logoimg_ext']=strtolower(getimgext($row["author_image_id"]));
		$i++;
    }

    //mysqli_free_result($result);
	return $resulr_Array;
 } 
#############################Home Pgae functionalities #####################################
 function news()
 {
	 global $con2;
	 $resulr_Array=array();	
	 $result = mysqli_query($con2, "SELECT * FROM Article where status = 'A' order by id desc limit 3");
	 //$row = mysqli_fetch_assoc($queryget);
	 /*$row = mysqli_fetch_array($queryget);
	print_r($row);exit;
	return $row;*/
	$i=0;
	while ($row = mysqli_fetch_array($result, MYSQLI_BOTH)) {
        //printf ("ID: %s  Name: %s", $row[0], $row["name"]);
		$resulr_Array[$i]['id']=$row["id"];
		$resulr_Array[$i]['title']=truncatewithoutmore($row["title"],50);//$row["title"];
		$resulr_Array[$i]['image_id']=$row["image_id"];
		$resulr_Array[$i]['author_image_id']=$row["author_image_id"];
		$resulr_Array[$i]['author']=$row["author"];
		$resulr_Array[$i]['updated']=$row["updated"];
		
		$resulr_Array[$i]['content']=truncatewithoutmore(strip_tags($row["content"]),250);//substr($row["content"], 0, 170);
		$resulr_Array[$i]['img_ext']=strtolower(getimgext($row["image_id"]));
		$resulr_Array[$i]['logoimg_ext']=strtolower(getimgext($row["author_image_id"]));
		$i++;
    }

    //mysqli_free_result($result);
	return $resulr_Array;
 } 
 
 
 function getpost()
 {
	 global $con2;
	 $resulr_Array=array();	
	 $result = mysqli_query($con2, " SELECT * FROM Page_Widget WHERE page_id=23 ORDER By id DESC limit 1"); 
	 $row = mysqli_fetch_array($result, MYSQLI_BOTH);
	$i=0;
	//print_r($row);
	//var_dump($row);
	$string=json_decode($row['content'], TRUE);
	//$newvar = unserialize($string);  
	//print_r($string);  
	//$resulr_Array = preg_replace('!s:(\d+):"(.*?)";!e', "'s:'.strlen('$2').':\"$2\";'", $resulr_Array);
	//$resulr_Array=unserialize($resulr_Array); 
	//print_r($resulr_Array);
	//exit;
	foreach($string['videos'] as $val)
	{
		$resulr_Array[$i]['description']=$val['description'];
		$resulr_Array[$i]['url']=$val['url'];
		$resulr_Array[$i]['iframe']=$val['iframe'];
		$resulr_Array[$i]['imageUrl']=$val['imageUrl'];
		//$i++;
	}
	//print_r($resulr_Array);
	return $resulr_Array;
 }
 
 
 
 function Homepage1()
 {
	 global $con2;
	 $resulr_Array=array();	
	 $result = mysqli_query($con2, "SELECT * FROM Post where status = 'A' order by id desc limit 2");
	 //$row = mysqli_fetch_assoc($queryget);
	 /*$row = mysqli_fetch_array($queryget);
	print_r($row);exit;
	return $row;*/
	$i=0;
	while ($row = mysqli_fetch_array($result, MYSQLI_BOTH)) {
        //printf ("ID: %s  Name: %s", $row[0], $row["name"]);
        $resulr_Array[$i]['id']=$row["id"];
		$resulr_Array[$i]['title']=$row["title"];
		//$resulr_Array[$i]['content']=substr($row["content"], 0, 500);//
		$resulr_Array[$i]['content']=truncate(strip_tags($row["content"]),150,$row["id"]);
		//$resulr_Array[$i]['content']=$row["content"];
	    $resulr_Array[$i]['updated']=$row["entered"];//updated
	     $resulr_Array[$i]['view']=$row["number_views"];
	     $resulr_Array[$i]['image_id']=$row["image_id"];
	     $resulr_Array[$i]['cover_id']=$row["cover_id"];
	     $resulr_Array[$i]['thumb_id']=$row["thumb_id"];
	     $resulr_Array[$i]['img_ext']=strtolower(getimgext($row["image_id"]));
	     $resulr_Array[$i]['category']=getslidercategory($row["id"]);
		$i++;
    }

    //mysqli_free_result($result);
	return $resulr_Array;
 }
 
 function Homepage2()
 {
	 global $con2;
	 $resulr_Array=array();	
	 $result = mysqli_query($con2, "SELECT * FROM Post where status = 'A' order by id desc limit 1,1");
	 //$row = mysqli_fetch_assoc($queryget);
	 /*$row = mysqli_fetch_array($queryget);
	print_r($row);exit;
	return $row;*/
	$i=0;
	while ($row = mysqli_fetch_array($result, MYSQLI_BOTH)) {
        //printf ("ID: %s  Name: %s", $row[0], $row["name"]);
		$resulr_Array[$i]['title']=$row["title"];
		$resulr_Array[$i]['content']=substr($row["content"], 0, 400);
		//$resulr_Array[$i]['content']=$row["content"];
	    $resulr_Array[$i]['updated']=$row["updated"];
	     $resulr_Array[$i]['view']=$row["number_views"];
	     $resulr_Array[$i]['category']=getslidercategory($row["id"]);
		$i++;
    }

    //mysqli_free_result($result);
	return $resulr_Array;
 }
 
 #####################functionalities for news Page###########################################
  function bannernews($id)
 {
	 global $con2;
	 $resulr_Array=array();	
	 if($id!=null){
	     $sql="SELECT * FROM Article WHERE  status = 'A' AND id=".$id;;
	  
	 }else{
	     $sql="SELECT * FROM Article WHERE  status = 'A' order by id desc limit 1";
	     
	 }
	 //echo $sql;
	 //$result = mysqli_query($con2, "SELECT * FROM Article order by id desc limit 1");
	 $result = mysqli_query($con2, $sql);
	 //$row = mysqli_fetch_assoc($queryget);
	 /*$row = mysqli_fetch_array($queryget);
	print_r($row);exit;
	return $row;*/
	$i=0;
	while ($row = mysqli_fetch_array($result, MYSQLI_BOTH)) {
        //printf ("ID: %s  Name: %s", $row[0], $row["name"]);
		$resulr_Array[$i]['id']=$row["id"];
		$resulr_Array[$i]['title']=$row["title"];
		$resulr_Array[$i]['image_id']=$row["image_id"];
		$resulr_Array[$i]['author_image_id']=$row["author_image_id"];
		$resulr_Array[$i]['author']=$row["author"];
		$resulr_Array[$i]['updated']=$row["entered"]; //updated
		$resulr_Array[$i]['cover_id']=$row["cover_id"];
		$resulr_Array[$i]['content']=substr($row["content"], 0, 150);
		//$resulr_Array[$i]['img_ext']=strtolower(getimgext($row["image_id"]));
		$resulr_Array[$i]['img_ext']=strtolower(getimgext($row["cover_id"]));
		//$resulr_Array[$i]['logoimg_ext']=strtolower(getimgext($row["author_image_id"]));
		$i++;
    }

    //mysqli_free_result($result);
	return $resulr_Array;
 }
 
 function other_story($id){
     global $con2;
	 $resulr_Array=array();	
    $sql_n="SELECT * FROM Article where id <> '".$id."' AND status ='A' order by id desc limit 3";
     $result2 = mysqli_query($con2, $sql_n);
	 //$row = mysqli_fetch_assoc($queryget);
	 /*$row = mysqli_fetch_array($queryget);
	print_r($row);exit;
	return $row;*/
	$i=0;
	while ($row = mysqli_fetch_array($result2, MYSQLI_BOTH)) {
	    
    //printf ("ID: %s  Name: %s", $row[0], $row["title"]);
		$resulr_Array[$i]['id']=$row["id"];
		$resulr_Array[$i]['title']=truncatewithoutmore($row["title"],55);
		$resulr_Array[$i]['image_id']=$row["image_id"];
		$resulr_Array[$i]['author_image_id']=$row["author_image_id"];
	//	$resulr_Array[$i]['author']=$row["author"];
		$resulr_Array[$i]['updated']=$row["entered"];//updated
		$resulr_Array[$i]['cover_id']=$row["cover_id"];
		$resulr_Array[$i]['image_id']=$row["image_id"];
		$resulr_Array[$i]['content']=substr($row["content"], 0, 150);
		//$resulr_Array[$i]['img_ext']=strtolower(getimgext($row["image_id"]));
		$resulr_Array[$i]['img_ext']=strtolower(getimgext($row["image_id"]));
	//	$resulr_Array[$i]['logoimg_ext']=strtolower(getimgext($row["author_image_id"]));
		$i++;
    }

    //mysqli_free_result($result);
	return $resulr_Array;
     
 }
 
 function topnews()
 {
	 global $con2;
	 $resulr_Array=array();	
	 //$result = mysqli_query($con2, "SELECT * FROM Article where status = 'A' order by id desc limit 1,3");
	 $result = mysqli_query($con2, "SELECT * FROM Article where status = 'A' order by id desc limit 1,3");
	 //$row = mysqli_fetch_assoc($queryget);
	 /*$row = mysqli_fetch_array($queryget);
	print_r($row);exit;
	return $row;*/
	$i=0;
	while ($row = mysqli_fetch_array($result, MYSQLI_BOTH)) {
        //printf ("ID: %s  Name: %s", $row[0], $row["name"]);
		$resulr_Array[$i]['id']=$row["id"];
		$resulr_Array[$i]['title']=truncatewithoutmore($row["title"],25);//$row["title"];
		$resulr_Array[$i]['image_id']=$row["image_id"];
		$resulr_Array[$i]['author_image_id']=$row["author_image_id"];
		$resulr_Array[$i]['author']=$row["author"];
		$resulr_Array[$i]['updated']=$row["entered"]; //updated
		
		$resulr_Array[$i]['content']=substr(strip_tags($row["content"]), 0, 150);
		$resulr_Array[$i]['img_ext']=strtolower(getimgext($row["image_id"]));
		$resulr_Array[$i]['logoimg_ext']=strtolower(getimgext($row["author_image_id"]));
		$i++;
    }

    //mysqli_free_result($result);
	return $resulr_Array;
 } 
 function Belownews()
 {
	 global $con2;
	 $resulr_Array=array();	
	 //$result = mysqli_query($con2, "SELECT * FROM Article where status = 'A' order by id desc limit 4,3");
	 $result = mysqli_query($con2, "SELECT * FROM Article where status = 'A' order by id desc limit 4,3");
	 //$row = mysqli_fetch_assoc($queryget);
	 /*$row = mysqli_fetch_array($queryget);
	print_r($row);exit;
	return $row;*/
	$i=0;
	while ($row = mysqli_fetch_array($result, MYSQLI_BOTH)) {
        //printf ("ID: %s  Name: %s", $row[0], $row["name"]);
		$resulr_Array[$i]['id']=$row["id"];
		$resulr_Array[$i]['title']=truncatewithoutmore($row["title"],25);//$row["title"];
		$resulr_Array[$i]['image_id']=$row["image_id"];
		$resulr_Array[$i]['author_image_id']=$row["author_image_id"];
		$resulr_Array[$i]['author']=$row["author"];
		$resulr_Array[$i]['updated']=$row["entered"];//updated
		
		//$resulr_Array[$i]['content']=substr($row["content"], 0, 217);
		$resulr_Array[$i]['content']=truncatewithoutmore(strip_tags($row["content"]),150);
		$resulr_Array[$i]['img_ext']=strtolower(getimgext($row["image_id"]));
		$resulr_Array[$i]['logoimg_ext']=strtolower(getimgext($row["author_image_id"]));
		$i++;
    }

    //mysqli_free_result($result);
	return $resulr_Array;
 } 
 
 function newsdetails($id){
     global $con2;
	 $resulr_Array=array();	
	 $sql="SELECT * FROM Article Where status = 'A'  AND id=".$id;;
	 $result = mysqli_query($con2, $sql);
	 $i=0;
	while ($row = mysqli_fetch_array($result, MYSQLI_BOTH)) {
        //printf ("ID: %s  Name: %s", $row[0], $row["name"]);
		$resulr_Array[$i]['id']=$row["id"];
		$resulr_Array[$i]['title']=$row["title"];
		$resulr_Array[$i]['image_id']=$row["image_id"];
		$resulr_Array[$i]['author_image_id']=$row["author_image_id"];
		$resulr_Array[$i]['author']=$row["author"];
		$resulr_Array[$i]['updated']=$row["entered"]; //updated
		
		//$resulr_Array[$i]['content']=substr($row["content"], 0, 217);
		//$resulr_Array[$i]['content']=truncatewithoutmore($row["content"],280);
		$resulr_Array[$i]['content']=$row["content"];
		$resulr_Array[$i]['img_ext']=strtolower(getimgext($row["image_id"]));
		$resulr_Array[$i]['logoimg_ext']=strtolower(getimgext($row["author_image_id"]));
		$i++;
    }

    //mysqli_free_result($result);
	return $resulr_Array;
 }
 #########################slider on video and video page functionalities#####################################################
 
 function bannervideo($id)
 {
	 global $con2;
	 $resulr_Array=array();	
	 if($id!=null){
	     $sql="SELECT * FROM Post WHERE status = 'A' AND id=".$id;;
	  
	 }else{
	     $sql="SELECT * FROM Post status = 'A' order by id desc limit 1";
	     
	 }
	 //echo $sql;
	 //$result = mysqli_query($con2, "SELECT * FROM Article order by id desc limit 1");
	 $result = mysqli_query($con2, $sql);
	 //$row = mysqli_fetch_assoc($queryget);
	 /*$row = mysqli_fetch_array($queryget);
	print_r($row);exit;
	return $row;*/
	$i=0;
	while ($row = mysqli_fetch_array($result, MYSQLI_BOTH)) {
        //printf ("ID: %s  Name: %s", $row[0], $row["name"]);
		$resulr_Array[$i]['id']=$row["id"];
		$resulr_Array[$i]['title']=$row["title"];
		$resulr_Array[$i]['image_id']=$row["image_id"];
		$resulr_Array[$i]['author_image_id']=$row["author_image_id"];
		$resulr_Array[$i]['author']=$row["author"];
		$resulr_Array[$i]['updated']=$row["entered"];//updated
		$resulr_Array[$i]['cover_id']=$row["cover_id"];
		$resulr_Array[$i]['content']=substr($row["content"], 0, 150);
		//$resulr_Array[$i]['img_ext']=strtolower(getimgext($row["image_id"]));
		$resulr_Array[$i]['img_ext']=strtolower(getimgext($row["cover_id"]));
		$resulr_Array[$i]['logoimg_ext']=strtolower(getimgext($row["author_image_id"]));
		$i++;
    }

    //mysqli_free_result($result);
	return $resulr_Array;
 }
 
 function Slider()
 {
	 global $con2;
	 $resulr_Array=array();	
	 $result = mysqli_query($con2, "SELECT * FROM Post where status = 'A' order by id desc limit 3");
	 //$row = mysqli_fetch_assoc($queryget);
	 /*$row = mysqli_fetch_array($queryget);
	print_r($row);exit;
	return $row;*/
	$i=0;
	while ($row = mysqli_fetch_array($result, MYSQLI_BOTH)) {
        //printf ("ID: %s  Name: %s", $row[0], $row["name"]);
        $resulr_Array[$i]['id']=$row["id"];
		$resulr_Array[$i]['title']=truncatewithoutmore($row["title"],25);//$row["title"];
		$resulr_Array[$i]['content']= substr(strip_tags ($row["content"]), 0, 49)."..."; //truncatewithoutmore($row["content"],40);
		//$resulr_Array[$i]['content']=$row["content"];
		$resulr_Array[$i]['updated']=$row["entered"];//updated
		$resulr_Array[$i]['image_id']=$row["image_id"];
		$resulr_Array[$i]['cover_id']=$row["cover_id"];
	    $resulr_Array[$i]['thumb_id']=$row["thumb_id"];
	     $resulr_Array[$i]['view']=$row["number_views"];
	     $resulr_Array[$i]['category']=getslidercategory($row["id"]);
	     $resulr_Array[$i]['img_ext']=strtolower(getimgext($row["image_id"]));
	    $resulr_Array[$i]['read_time']=site_estimated_reading_time($row["content"]);
		$i++;
    }

    //mysqli_free_result($result);
	return $resulr_Array;
 } 
 
 function SmallArticle()
 {
	 global $con2;
	 $resulr_Array=array();	
	 $result = mysqli_query($con2, "SELECT * FROM Post where status = 'A' order by id desc limit 3,3");
	 //$row = mysqli_fetch_assoc($queryget);
	 /*$row = mysqli_fetch_array($queryget);
	print_r($row);exit;
	return $row;*/
	$i=0;
	while ($row = mysqli_fetch_array($result, MYSQLI_BOTH)) {
        //printf ("ID: %s  Name: %s", $row[0], $row["name"]);
        $resulr_Array[$i]['id']=$row["id"];
		$resulr_Array[$i]['title']=truncatewithoutmore(strip_tags($row["title"]),32);//$row["title"];
		//$resulr_Array[$i]['content']=substr($row["content"], 0, 150);
		$resulr_Array[$i]['image_id']=$row["image_id"];
		$resulr_Array[$i]['content']=$row["content"];
	    $resulr_Array[$i]['updated']=$row["entered"]; //updated
	     $resulr_Array[$i]['view']=$row["number_views"];
	     $resulr_Array[$i]['img_ext']=strtolower(getimgext($row["image_id"]));
	      
		$i++;
    }

    //mysqli_free_result($result);
	return $resulr_Array;
 } 
 
 function BigArticle()
 {
	 global $con2;
	 $resulr_Array=array();	
	 $result = mysqli_query($con2, "SELECT * FROM Post where status = 'A' order by id desc limit 6,3");
	 //$row = mysqli_fetch_assoc($queryget);
	 /*$row = mysqli_fetch_array($queryget);
	print_r($row);exit;
	return $row;*/
	$i=0;
	while ($row = mysqli_fetch_array($result, MYSQLI_BOTH)) {
        //printf ("ID: %s  Name: %s", $row[0], $row["name"]);
         $resulr_Array[$i]['id']=$row["id"];
		$resulr_Array[$i]['title']=$row["title"];
		$resulr_Array[$i]['content']=substr($row["content"], 0, 150);
		$resulr_Array[$i]['image_id']=$row["image_id"];
		//$resulr_Array[$i]['content']=$row["content"];
	    $resulr_Array[$i]['updated']=$row["entered"];//updated
	     $resulr_Array[$i]['view']=$row["number_views"];
	     $resulr_Array[$i]['img_ext']=strtolower(getimgext($row["image_id"]));
	      
		$i++;
    }

    //mysqli_free_result($result);
	return $resulr_Array;
 }
 
 function getslidercategory($id){
     global $con2;
     $sql="SELECT Blog_Category.post_id,Blog_Category.category_id,BlogCategory.page_title FROM Blog_Category JOIN BlogCategory ON Blog_Category.category_id=BlogCategory.id WHERE Blog_Category.post_id=".$id."";
     
     $result = mysqli_query($con2,$sql);
     $row = mysqli_fetch_array($result, MYSQLI_BOTH);
     //print_r($row );exit;
     return $row['page_title'];
 }
 
  function getvideo()
 {
	 global $con2;
	 $resulr_Array=array();	
	 $result = mysqli_query($con2, "SELECT * FROM Page_Widget WHERE page_id=23 ORDER By  id DESC limit 1"); 
	 $row = mysqli_fetch_array($result, MYSQLI_BOTH);
	$i=0;
	//print_r($row);
	//var_dump($row);
	$string=json_decode($row['content'], TRUE);
	//$newvar = unserialize($string);  
//	print_r($string); exit;
	//$resulr_Array = preg_replace('!s:(\d+):"(.*?)";!e', "'s:'.strlen('$2').':\"$2\";'", $resulr_Array);
	//$resulr_Array=unserialize($resulr_Array); 
	//print_r($resulr_Array);
	//exit;
	foreach($string['videos'] as $val)
	{
		$resulr_Array[$i]['description']=$val['description'];
		$resulr_Array[$i]['url']=$val['url'];
		$resulr_Array[$i]['iframe']=$val['iframe'];
		$resulr_Array[$i]['imageUrl']=$val['imageUrl'];
		$i++;
		if($i==6) break;
	}
	//print_r($resulr_Array);
	return $resulr_Array;
 }
 
 
 function dnred_details($id){
     global $con2;
	 $resulr_Array=array();	
	 $sql="SELECT * FROM Post Where status = 'A' AND id=".$id;;
	 $result = mysqli_query($con2, $sql);
	 $i=0;
	while ($row = mysqli_fetch_array($result, MYSQLI_BOTH)) {
        //printf ("ID: %s  Name: %s", $row[0], $row["name"]);
		$resulr_Array[$i]['id']=$row["id"];
		$resulr_Array[$i]['title']=$row["title"];
		$resulr_Array[$i]['image_id']=$row["image_id"];
		$resulr_Array[$i]['updated']=$row["entered"]; //updated
		
		//$resulr_Array[$i]['content']=substr($row["content"], 0, 217);
		//$resulr_Array[$i]['content']=truncatewithoutmore($row["content"],280);
		$resulr_Array[$i]['content']=$row["content"];
		$resulr_Array[$i]['img_ext']=strtolower(getimgext($row["image_id"]));
		$resulr_Array[$i]['logoimg_ext']=strtolower(getimgext($row["author_image_id"]));
		$i++;
    }

    //mysqli_free_result($result);
	return $resulr_Array;
 }
 
 function dnred_story($id){
     global $con2;
	 $resulr_Array=array();	
    $sql_n="SELECT * FROM Post where status = 'A' AND id <> '.$id.' order by id desc limit 3";
     $result2 = mysqli_query($con2, $sql_n);
	 //$row = mysqli_fetch_assoc($queryget);
	 /*$row = mysqli_fetch_array($queryget);
	print_r($row);exit;
	return $row;*/
	$i=0;
	while ($row = mysqli_fetch_array($result2, MYSQLI_BOTH)) {
	    
    //printf ("ID: %s  Name: %s", $row[0], $row["title"]);
		$resulr_Array[$i]['id']=$row["id"];
		$resulr_Array[$i]['title']=truncatewithoutmore($row["title"],55);
		$resulr_Array[$i]['image_id']=$row["image_id"];
		$resulr_Array[$i]['author_image_id']=$row["author_image_id"];
	//	$resulr_Array[$i]['author']=$row["author"];
		$resulr_Array[$i]['updated']=$row["entered"];//updated
		$resulr_Array[$i]['cover_id']=$row["cover_id"];
		$resulr_Array[$i]['image_id']=$row["image_id"];
		$resulr_Array[$i]['content']=substr($row["content"], 0, 150);
		//$resulr_Array[$i]['img_ext']=strtolower(getimgext($row["image_id"]));
		$resulr_Array[$i]['img_ext']=strtolower(getimgext($row["image_id"]));
	//	$resulr_Array[$i]['logoimg_ext']=strtolower(getimgext($row["author_image_id"]));
		$i++;
    }

    //mysqli_free_result($result);
	return $resulr_Array;
     
 }
 
 #################################################################################################
 ##################custome function###############################################################
 #####################################################################################################
 ###############get img extention of image id##########
/* Calculate the estimated reading time for a given piece of $content.
*
* @param string $content Content to calculate read time for.
* @param int $wpm Estimated words per minute of reader.
*
* @returns	int $time Estimated reading time.
*/
function site_estimated_reading_time( $content = '', $wpm = 200 ) {
    
    
    //$clean_content = strip_shortcodes( $content );
    $clean_content = preg_replace('#\[[^\]]+\]#', '',$content);
  
    $clean_content = strip_tags( $clean_content );
    $word_count = str_word_count( $clean_content );
    $time = ceil( $word_count / $wpm );
    return $time;
    
    //return $word_count;
}
 function short_str($input){
     //echo $str;
     $str = $input;
     //echo $str;
     //echo strlen( $input);
        if( strlen( $input) > 50) {
            $str = explode( "\n", wordwrap( $input, 1500));
            $str = $str[0] . '...';
        }
        
        //echo $str;
        return $str;
 }
 
 function truncate($string, $length,$id=null, $stopanywhere=false) {
    //truncates a string to a certain char length, stopping on a word if not specified otherwise.
    if (strlen($string) > $length) {
        //limit hit!
        $string = substr($string,0,($length -3));
        if ($stopanywhere) {
            //stop anywhere
            $string .= '...';
        } else{
            //stop on a word.
            //echo $id;exit; 
            $link="<a href='dnred_details.php?id=$id'>Read More</a>";
            $string = substr($string,0,strrpos($string,' ')).'... '. $link;
        }
    }
    return $string;
}

function truncatewithoutmore($string, $length, $stopanywhere=false) {
    //truncates a string to a certain char length, stopping on a word if not specified otherwise.
    if (strlen($string) > $length) {
        //limit hit!
        $string = substr($string,0,($length -3));
        if ($stopanywhere) {
            //stop anywhere
            $string .= '...';
        } else{
            //stop on a word.
           $string = substr($string,0,strrpos($string,' ')).'... ';
        }
    }
    return $string;
}
 function getimgext($id)
 {
	 global $con2;
	 $resulr_Array=array();	
	 $result = mysqli_query($con2, "SELECT type FROM Image WHERE id='".$id."'"); 
	 $row = mysqli_fetch_array($result, MYSQLI_BOTH);
	 //print_r($row);exit;
	 return $row['type'];
 }
 ######################################################
 
 ###############get Post list id######################
 function getpost222()
 {
	 global $con2;
	 $resulr_Array=array();	
	 $result = mysqli_query($con2, " SELECT * FROM Post where status = 'A' ORDER By id DESC limit 1"); 
	// $row = mysqli_fetch_array($result, MYSQLI_BOTH);
	$i=0;
	//print_r($row);
	while ($row = mysqli_fetch_array($result, MYSQLI_BOTH)) {
        //printf ("ID: %s  Name: %s", $row[0], $row["name"]);
		$resulr_Array[$i]['title']=$row["title"];
		$resulr_Array[$i]['content']=substr($row["content"], 0, 200);
		/*$resulr_Array[$i]['image_id']=$row["image_id"];
		$resulr_Array[$i]['author_image_id']=$row["author_image_id"];
		$resulr_Array[$i]['author']=$row["author"];
		$resulr_Array[$i]['content']=substr($row["content"], 0, 100);
		$resulr_Array[$i]['img_ext']=strtolower(getimgext($row["image_id"]));
		$resulr_Array[$i]['logoimg_ext']=strtolower(getimgext($row["author_image_id"]));*/
		$i++;
    }
	print_r($resulr_Array);
	return $resulr_Array;
 }
 
 
 
 
 

 ######################################################
 
 ###############check url################
 function checkurl()
 {
	 $link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] 
                === 'on' ? "https" : "http") . "://" . 
          $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF']; 
  
    // Display the complete URL 
	//echo $link; 
 }
 
###################get last page url################

function geturl()
{
	
$uri = $_SERVER['REQUEST_URI'];
$uri; // Outputs: URI
 
$protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
 
$url = $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$url; // Outputs: Full URL
 
$query = $_SERVER['QUERY_STRING'];
//return  $query; // Outputs: Query String 
return basename($_SERVER['PHP_SELF']);
}

#####################Add 

############################################################
function prelaunchcontact($name,$email,$zip){
	 global $con2;
	$sql="INSERT INTO `prelaunch_contact` (`id`, `name`, `email`, `zip`) VALUES (NULL, '".$name."', '".$email."', '".$zip."')";
	
	if(mysqli_query($con2, $sql)){
		return 1;
	}else{ return 0;}
	
}
############################################################
###########################################################################
function addnewsleter($email){
    global $con2; 
    
    $sql="SELECT email FROM News_Leter WHERE email='".$email."'";
    
    $result = mysqli_query($con2, $sql); 
	$row = mysqli_fetch_array($result, MYSQLI_BOTH);
	if($row['email']==''){
	 
	 $sqlA="INSERT INTO `News_Leter` (`id`, `email`) VALUES (NULL, '".$email."')";   
	 
	 	if(mysqli_query($con2, $sqlA)){
		return 1;
	    }else{ return 2;}
	    
	}else{
	    return 0;
	}
}
###########################################################################
############################################################
function addbecometester($fname,$lname,$email,$phonetype,$phone,$zip,$type){
	 global $con2;
	$sql="INSERT INTO `beta_tester` (`id`, `fname`,`lname`, `email`,`phone`,`zip`,`type`) VALUES (NULL, '".$fname."','".$lname."','".$email."','".$phone."','".$zip."','".$type."')";
	
	if(mysqli_query($con2, $sql)){
		return 1;
	}else{ return 0;}
	
}
############################################################
?>