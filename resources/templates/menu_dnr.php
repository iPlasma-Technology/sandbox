<?php
$listPost=Slider();
	//print_r($listPost);
$smallArticle = SmallArticle();

//print_r($smallArticle);
?>
<div class="header_banner_section">
<div class="header inner_header">
<?php include(realpath(dirname(__FILE__) . "/../templates/header_menu.php"));?>
</div>
<div class="video_page_banner">
<!--    <div class="container">-->

        <div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
  <?php  foreach($listPost as $key=>$val) 
	{
		if($key==0){$class='item active';}else{$class='item ';}
		$date=date('d F, Y',strtotime($val['updated']));
		$img_path='https://app.iplasma.life/custom/domain_1/image_files/sitemgr_photo_';
		//$img_path='https://iplasma.life/media/cache/card/custom/domain_1/image_files/sitemgr_photo_';
		
		$imag_cover=$img_path.$val['cover_id'].".".$val['img_ext'];
		
		if($key==0){$newimg='https://app.iplasma.life/custom/domain_1/image_files/sitemgr_photo_445.png';}
		elseif($key==1){$newimg='https://app.iplasma.life/custom/domain_1/image_files/sitemgr_photo_434.png';}
		elseif($key==2){$newimg='https://app.iplasma.life/custom/domain_1/image_files/sitemgr_photo_410.png';}
	  ?>
    <div class="<?php echo $class;?>">
     <a href='dnred_details.php?id=<?php echo $val['id']?>'><img src="<?php echo $imag_cover;?>" alt=""/></a>
     <div class="container">
      <div class="text_slide">
          
          <a href='dnred_details.php?id=<?php echo $val['id']?>'><h2><?php echo $val['title'];?></h2></a>
          <h4><?php echo $val['content'];?></h4>
          <div class="clearfix"></div>
          <ul>
              <li class="user"><?php echo $val['category']?></li>
              <li class="calender"><?php echo $date;?></li>
              <li class="clock"><?php echo $val['read_time']?> min read</li> 
          </ul>
      </div>
      </div>
      <!--<img src="images/video_banner.jpg" alt=""/>-->
<!--      <img src="<?php //echo $img_path.$val['cover_id'].".".$val['img_ext']?>" alt=""/>-->
      
    </div>
  <?php }?>
     <!--<div class="item">
      <div class="text_slide">
          <h2>What To Do After You</h2>
          <h3>Donate Plasma</h3>
          <ul>
              <li class="user">John Doe</li>
              <li class="calender">10 June, 2020</li>
              <li class="clock">4 min read</li>
          </ul>
      </div>
    </div>
    
     <<div class="item">
      <div class="text_slide">
          <h2>What To Do After You</h2>
          <h3>Donate Plasma</h3>
          <ul>
              <li class="user">John Doe</li>
              <li class="calender">10 June, 2020</li>
              <li class="clock">4 min read</li>
          </ul>
      </div>
    </div>-->


  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <img src="images/pre_btn.png" alt=""/>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <img src="images/next_btn.png" alt=""/>
    <span class="sr-only">Next</span>
  </a>
</div>
<!--    </div>-->
</div>
<div class="small_event_section">
    <div class="container">
        <div class="row">
            <?php foreach($smallArticle as $val) 
            {
               $date=date('d F, Y',strtotime($val['updated'])); 
                $actual_path='https://app.iplasma.life/custom/domain_1/image_files/sitemgr_photo_';
                $imagepath=$actual_path.$val['image_id'].".".$val['img_ext'];
            ?>
            <div class="col-sm-4">
                <div class="small_event_section_box">
                    <div class="small_event_section_box_img">
                        <!--<img  src="images/small_event.png" alt=""/>-->
                        <a href="dnred_details.php?id=<?php echo $val['id'];?>"><img  src="<?php echo $imagepath;?>" alt=""/></a>
                    </div>
                    <div class="small_event_section_box_text">
                        <span class="date"><?php echo $date;?></span>
                        <a href="dnred_details.php?id=<?php echo $val['id'];?>"><h6><?php echo $val['title'];?> </h6></a>
                    </div>
                </div>
            </div>
            <?php }?>
            <!--<div class="col-sm-4">
                <div class="small_event_section_box">
                    <div class="small_event_section_box_img">
                        <img  src="images/small_event2.png" alt=""/>
                    </div>
                    <div class="small_event_section_box_text">
                        <span class="date">27 March, 2020</span>
                        <h6>What To Do After You Donate</h6>
                    </div>
                </div>
            </div>-->
            
            <!--<div class="col-sm-4">
                <div class="small_event_section_box">
                    <div class="small_event_section_box_img">
                        <img  src="images/small_event3.png" alt=""/>
                    </div>
                    <div class="small_event_section_box_text">
                        <span class="date">20 March, 2020</span>
                        <h6>Frequently Asked Donor Questions.</h6>
                    </div>
                </div>
            </div>-->
            
            
        </div>
    </div>
</div>
</div>