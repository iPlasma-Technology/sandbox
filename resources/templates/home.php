<?php
include(realpath(dirname(__FILE__) . "/../config.php"));	
//include(realpath(dirname(__FILE__) . "/../config.php"));	
include(realpath(dirname(__FILE__) . "/../function.php"));	

//print_r($config);
$img_path=$config['paths']['images']['layout']."/";
	$listnews=news();
	$video=getpost();	
	$homeblock1=Homepage1();

	//$img_path='https://iplasma.life/media/cache/card/custom/domain_1/image_files/sitemgr_photo_';
	//$img_path='https://iplasma.life/custom/domain_1/image_files/sitemgr_photo_';
	$img_path='https://app.iplasma.life/sandbox/custom/domain_1/image_files/sitemgr_photo';
	//print_r($homeblock1);
	
?>
<body>
<?php include(realpath(dirname(__FILE__) . "/../templates/menu.php"));?>
<div class="container">
    <div class="top_blog">
        <div class="top_blog_left">
        <img src="images/blog1.png" alt=""/>
        <img src="<?php //echo $img_path.$homeblock1[0]['cover_id'].".".$homeblock1[0]['img_ext']?>" alt=""/>
        </div>
        <div class="top_blog_right">
           <div class="top_blog_right_inner">
            <h3><?php echo $homeblock1[0]['title'];?></h3>
            <p><?php echo $homeblock1[0]['content'];?></p>
            </div>
        </div>
    </div>
    <div class="top_blog top_blog_new">
       <div class="top_blog_right">
           <div class="top_blog_right_inner">
            <h3><?php echo $homeblock1[1]['title'];?></h3>
            <p><?php echo $homeblock1[1]['content'];?></p>
            
           </div>
           
        </div>
        <div class="top_blog_left">
        <img src="images/blog2.png" alt=""/>
        <img src="<?php //echo $img_path.$homeblock1[1]['image_id'].".".$homeblock1[0]['img_ext']?>" alt=""/>
        </div>
    </div>
</div>
<div class="testimonials_section">
    <div class="container">
        <div class="row">
           <div class="col-sm-7 col-sm-push-5">
              
               <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" data-interval="3000" data-pause="false">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
   <!-- <li data-target="#carousel-example-generic" data-slide-to="3"></li>-->
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
      
     <div class="item active">
    <div class="testimonials_slider">
                   <div class="testimonials_slider_box">
                   <div class="testimonials_slider_img">
                       
                       <img src="images/IMG_0220.jpeg" alt=""/>
                   </div>
                    <p>“For me, it’s actually quite simple: without IVIG, my life would not reach very far beyond the edge of my bed. I would feel as if my disease made up my entire identity. WITH IVIG, I can be a whole person with a relationship and a job. IVIG gives me the taste of an adventure in life for someone with a hidden disability. IVIG gives me a glimpse of normalcy.”</p>
               <div class="textiname">
                  <span>Allie Brown</span>
                   <!--Suvannh, GA USA-->
               </div>
               </div>
                </div>
    </div> 
    <div class="item">
     <div class="testimonials_slider">
                   <div class="testimonials_slider_box">
                   <div class="testimonials_slider_img">
                      <img src="images/Megan Ryan.jpg" alt=""/> 
                   </div>
                    <p>“Without the life-saving plasma from dedicated donors, I’d live with severe and persistent infections – the kind that send you to bed for a couple of weeks! 
                    The plasma-derived product that I infuse weekly gives me the critical antibodies to fight off those infections and to live a healthy and productive life. Thank you, donors!”</p>
               <div class="textiname">
                  <span>Megan Ryan</span>
                   <!--Suvannh, GA USA-->
               </div>
               </div>
                </div>
    </div>
    <div class="item">
    <div class="testimonials_slider">
                   <div class="testimonials_slider_box">
                   <div class="testimonials_slider_img">
                       
                       <img src="images/Megan Ramirez.jpg" alt=""/>
                   </div>
                    <p>“I do not have enough words to thank those that donate their plasma to help me continue to live a semi-normal life. 
                    I do feel blessed that the plasma that people have donated has turned my life around health wise.” I want to express my thanks to everyone who is involved with the whole IGG process. 
                    I don't think I would be here without them.”</p>
               <div class="textiname">
                  <span>Megan Ramirez</span>
                   <!--Suvannh, GA USA-->
               </div>
               </div>
                </div>
    </div>
    
    
    
     <!--<div class="item">
    <div class="testimonials_slider">
                   <div class="testimonials_slider_box">
                   <div class="testimonials_slider_img">
                       <img src="images/testi.png" alt=""/>
                   </div>
                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered
alteration in some form, by injected humour, or
randomised words. Which don't look even slightly
believable. If you are going to use.</p>
               <div class="textiname">
                  <span>“ Aria, S</span>
                   Suvannh, GA USA
               </div>
               </div>
                </div>
    </div>-->
     <!--<div class="item">
    <div class="testimonials_slider">
                   <div class="testimonials_slider_box">
                   <div class="testimonials_slider_img">
                       <img src="images/testi.png" alt=""/>
                   </div>
                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered
alteration in some form, by injected humour, or
randomised words. Which don't look even slightly
believable. If you are going to use.</p>
               <div class="textiname">
                  <span>“ Aria, S</span>
                   Suvannh, GA USA
               </div>
               </div>
                </div>
    </div>-->

  </div>


</div>
                
            </div>
            <div class="col-sm-5 col-sm-pull-7">
                <div class="testimonials_left">
                    <!--<h2>Vein-to-Vein. Human-to-Human</h2>-->
                    <h2>People Caring For People</h2>
                    <p>Donating plasma is people caring for people. It is the ultimate human-to-human connection where strangers help strangers live a more healthy and normal life. You can make a difference.</p>
                    <!--<p>There isn't anything embarrassing hidden in the middle of text.</p>-->
                    <button data-toggle="modal" data-target="#myModal">Find A Center</button>
                </div>
            </div>
            
        </div>
    </div>
</div>
<div class="videos_section">
    <div class="container">
        <div class="row">
           <div class="col-sm-6 col-sm-push-6">
                <div class="videos_sec">
                    <!--<img src="images/videos.png" alt=""/>-->
					
					<a class="fancybox-media" href="<?php echo $video[0]['url'];?>&autoplay=true" rel="gallery">
	            <img src="<?php echo $video[0]['imageUrl'];?>" alt="" />
	           
</a>
					<?php //echo $video[0]['iframe'];?>
				
                </div>
            </div>
            <div class="col-sm-6 col-sm-pull-6">
                <div class="video_text">
                    <!--<h2>Discover how Apps is boosting team’s productivity worldwide</h2>-->
               <h2><?php echo $video[0]['description'];?></h2>               

               <!--<a href="javascript:void();" class="learn_more" onclick="learn_more();">Learn more</a>-->
               <a href="dnr-ed.php" class="learn_more" >View More</a>
                </div>
            </div>
            
        </div>
    </div>
</div>
<div class="productivity_section">
    <div class="container">
        <!--<h2>Over 850 US & Canada Plasma Centers.Ready To Find One Near You?</h2>-->
        <h2>Download iPlasma And Start Donating Today</h2>
        <!--<p>Download iPlasma Today. today — it's free.</p>-->
        <p>It’s that simple!</p>
        <div class="android_ios_section">
            <img src="images/android_ios.png" alt=""/>
            
            <div class="android_sec">
                <h3>Android</h3>
<!--                <span>Are you ready to make the leap? Download Apps for Android today — it's free.</span>-->
                <a href="#android" onClick="pupupOpen()">
                    <img src="images/android_small.png" alt="" id="android"/>
                </a>
            </div>
            
            <div class="ios_sec">
                <h3>iOS</h3>
<!--                <span>Are you ready to make the leap? Download Apps for iOS today — it's free.</span>-->
                <a href="#ios" onClick="pupupOpen()">
                    <img src="images/ios_small.png" alt="" id="ios"/>
                </a>
            </div>
            
        </div>
    </div>
</div> 
<div class="latest_news">
    <div class="container">
        <h2>Our Latest News</h2>
        <p>The latest news, stories, and developments in the world of plasma!</p>
   <div class="latest_news_sec">
       <div class="row">
	   <?php
	   //echo count($listnews);exit;
	  // $actual_path='https://iplasma.life/media/cache/card_2/custom/domain_1/image_files/sitemgr_photo_';
	   $actual_path='https://app.iplasma.life/sandbox/media/cache/main_image/custom/domain_1/image_files/sitemgr_photo_';
	   $actual_path2='https://app.iplasma.life/sandbox/media/cache/resolve/card_2/custom/domain_1/image_files/sitemgr_photo_';
	   $actual_logo_path='https://app.iplasma.life/sandbox/media/cache/logo_icon/custom/domain_1/image_files/sitemgr_photo_';
	   //$imagepath='https://iplasma.life/media/cache/card_2/custom/domain_1/image_files/sitemgr_photo_283.jpg';
	   
	   foreach ($listnews as $key=>$value) {
		//print_r($value);
		$small_img=$actual_logo_path.$value['author_image_id'].".".$value['logoimg_ext'];
		$imagepath=$actual_path.$value['image_id'].".".$value['img_ext'];
		if (file_exists($imagepath)) {
				$imagepath=$imagepath;
		} else {
			//echo "The file does not exist";
			$imagepath=$actual_path2.$value['image_id'].".".$value['img_ext'];
			}
		if($key==3) break;
	   ?>
           <div class="col-sm-4">
               <div class="latest_news_box">
                   <div class="latest_news_img">
                       <!--<img src="images/news1.jpg" alt=""/>-->
					   <img src="<?php echo $imagepath;?>" alt=""/>
                   </div>
                   <div class="latest_news_text">
                       <h4><?php echo $value['title'];?></h4>
                       <span class="by_whom">
					   <?php if($value['author']!=''){?>
					   By <img src="<?php echo $small_img;?>" alt=""/><?php echo $value['author'];?>
					   <?php }?>
					   </span>
                       <div class="description_news">
                           <?php echo $value['content'];?>
                       </div>
                       <a href="newsdetails.php?id=<?php echo $value['id'];?>" class="read_artical">Read Article</a>
                   </div>
               </div>
           </div>
	   <?php }?>
           <!--<div class="col-sm-4">
               <div class="latest_news_box">
                   <div class="latest_news_img">
                       <img src="images/news2.jpg" alt=""/>
                   </div>
                   <div class="latest_news_text">
                       <h4>“We have now a backlog of hundreds of people... </h4>
                       <span class="by_whom">By <img src="images/small_logo.png" alt=""/></span>
                       <div class="description_news">
                          Plasma therapy has shown
incredible potential for saving lives amid the COVID-19 crisis. It is now
considered one of the most...
                       </div>
                       <a href="#" class="read_artical">Read Article</a>
                   </div>
               </div>
           </div>
		   <div class="col-sm-4">
               <div class="latest_news_box">
                   <div class="latest_news_img">
                       <img src="images/news3.jpg" alt=""/>
                   </div>
                   <div class="latest_news_text">
                       <h4>Scientists Consider Using Blood Plasma...COVID-19</h4>
                       <span class="by_whom">By <img src="images/small_logo.png" alt=""/></span>
                       <div class="description_news">
                           With so many lives on the line,
scientists all around the world are striving to find a way to treat the coronavirus. Among the...
                       </div>
                       <a href="#" class="read_artical">Read Article</a>
                   </div>
               </div>
           </div>-->
       </div>
   </div>
   
   <div class="news_read_more_btn">
       <a href="news.php" class="learn_more">View More </a>
   </div>
   
    </div>
</div>  

<!--<div class="app_is_comming">
    <div class="container">
        <h1>The iPlasma App Is Coming. </h1>
        <h1>Be The First To Experience It.</h1>
        
        <button data-toggle="modal" data-target="#myModal2">Become A Beta Tester</button>
    </div>
</div>-->
<?php include(realpath(dirname(__FILE__) . "/../templates/beta_tester.php"));?> 