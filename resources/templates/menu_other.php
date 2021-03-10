<?php
//echo geturl();
$checkId= (isset($id)) ? $id : null;

if(geturl()=='dnred_details.php'){$banner_news=bannervideo($checkId);}else{$banner_news=bannernews($checkId);}
//print_r($banner_news);
$date=date('d F, Y',strtotime($banner_news[0]['updated']));
//$img_path='https://iplasma.life/custom/domain_1/image_files/sitemgr_photo_';
$img_path='https://app.iplasma.life/custom/domain_1/image_files/sitemgr_photo_';
?>
<div class="header_banner_section">
<div class="header inner_header">
    <?php include(realpath(dirname(__FILE__) . "/../templates/header_menu.php"));?>
</div>
<div class="news_banner"> 
<?php if($checkId!=null){?>

    <img src="<?php echo $img_path.$banner_news[0]['cover_id'].".".$banner_news[0]['img_ext']?>" alt=""/>
<?php }else{ ?>
<a href="newsdetails.php?id=<?php echo $banner_news[0]['id'];?>">
<!--<img src="https://iplasma.life/custom/domain_1/image_files/sitemgr_photo_428.png" alt=""/>-->
<img src="<?php echo $img_path.$banner_news[0]['cover_id'].".".$banner_news[0]['img_ext']?>" alt=""/>
</a>
<?php } ?>

  
  
   <div class="container">
   <div class="news_banner_inner">
       <?php if($checkId!=null){?>
       <h2><?php echo $banner_news[0]['title'];?></h2>
        <?php }else{ ?>
   <a href="newsdetails.php?id=<?php echo $banner_news[0]['id'];?>"><h2><?php echo $banner_news[0]['title'];?></h2></a>
   <?php } ?>
    <span class="date"><?php echo $date;?></span>
    <?php if($checkId==null){?>
    <p><?php //echo $banner_news[0]['content'];?></p>
    <?php } ?>
</div>

</div>

</div>

</div>