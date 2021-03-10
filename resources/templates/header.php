<!DOCTYPE html>
<?php echo CSS_PATH;?>
<?php 
//$title="iPlasma: The Social Community For Plasma Donors";

//echo realpath(dirname(__FILE__) . "/../function_header.php");
include(realpath(dirname(__FILE__) . "/../function_header.php"));
$url_link=(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
if(basename($_SERVER['PHP_SELF'])=='index.php') {  $title="iPlasma | The Social Community For Plasma Donors";$meta="iPlasma is a community, messaging, and education platform for plasma donors. Join, learn, connect with a center near you, and become a donor today. Plasma donors saves lives!";}
else if(basename($_SERVER['PHP_SELF'])=='dnr-ed.php'){$title="DnrEd : The Social Community For Plasma Donors";$meta="A library of donor education blogs and videos for you to learn more about donating plasma";}
elseif(basename($_SERVER['PHP_SELF'])=='news.php'){$title="News : The Social Community For Plasma Donors";$meta="Stay connected with the industry. Get the latest news, stories, and developments in the world of plasma!";}
else if(basename($_SERVER['PHP_SELF'])=='beta.php'){$title="Beta Program : The Social Community For Plasma Donors";}
else if(basename($_SERVER['PHP_SELF'])=='newsdetails.php')
	{	$img='';
		//$img_path='https://app.iplasma.life/media/cache/main_image/custom/domain_1/image_files/sitemgr_photo_';
		//$img_path='https://app.iplasma.life/media/cache/card_2/custom/domain_1/image_files/sitemgr_photo_';
		$img_path='https://app.iplasma.life/media/cache/card_2/custom/domain_1/image_files/sitemgr_photo_';
		
		 $id= $_GET['id'];	
		$title1=newsdetails_header($id);
		//print_r($title1);		
		$title=$title1[0]['title'];
		$image_id=$title1[0]["image_id"];
		$img_ext=strtolower(getimgext_header($title1[0]["image_id"]));
		$img=$img_path.$image_id.".".$img_ext;
	}
else if(basename($_SERVER['PHP_SELF'])=='dnred_details.php')
	{
		$img='';
		$img_path='https://app.iplasma.life/custom/domain_1/image_files/sitemgr_photo_';
		$title="DnrEd: The Social Community For Plasma Donors";
		$id= $_GET['id'];
		$title1=dnred_details_header($id);
		//print_r($title1);
		$title=$title1[0]['title'];
		//$image_id=$title1[0]["image_id"];
		$image_id=$title1[0]["thumb_id"];
		//$img_ext=strtolower(getimgext_header($title1[0]["image_id"]));
		$img_ext=strtolower(getimgext_header($title1[0]["thumb_id"]));
		$img=$img_path.$image_id.".".$img_ext;
	}
else{
	$meta="iPlasma is a community, messaging, and education platform for plasma donors. Join, learn, connect with a center near you, and become a donor today. Plasma donors saves lives!";
}	
?>

<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!--<meta name="google-site-verification" content="gEUhxJXWZFsrNYX6jVSIoHqDuHtoVaDB6CvjccFHCFY" />--> 
<meta property="og:image:width" content="450"/>
<meta property="og:image:height" content="298"/>
<meta property="og:image" content="<?php echo $img;?>" />

<!--<meta property="og:image:url" content="<?php //echo $img;?>" />-->
<meta property="og:title" content="<?php echo $title;?>" />
<meta property="og:type" content="website" />
<meta property="og:url" content="<?=$url_link?>" />
<!--<meta property="og:url" content="https://iplasma.life" />-->
<meta property="og:description" content="The Reasons Why Donors Get Deferred From Donating Plasma" />
<meta name="description" content="<?=$meta;?>">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<title><?php echo $title;?></title>
<link rel="shortcut icon" type="image/x-icon" href="https://iplasma.life/images/favicon_4.ico"/>
<!-- Bootstrap -->
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/responsive.css" rel="stylesheet">
<link href="css/jquery.fancybox.css" rel="stylesheet">
<link href="css/jquery.fancybox-buttons.css?v=1.0.5" rel="stylesheet">
<!--<script type="text/javascript">

  var gaq = gaq || [];
  _gaq.push(['_setAccount', 'UA-154437136-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>-->

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-NFL7RPB64X"></script>
<script>
window.dataLayer = window.dataLayer || [];
function gtag(){dataLayer.push(arguments);}
gtag('js', new Date());

gtag('config', 'G-NFL7RPB64X');
</script>


</head>