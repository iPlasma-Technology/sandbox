<?php
//include(realpath(dirname(__FILE__) . "/../config.php"));
//include(realpath(dirname(__FILE__) . "/../function.php"));	
//print_r($config);
include(realpath(dirname(__FILE__) . "/../config.php"));

//include(realpath(dirname(__FILE__) . "/../config.php"));	

include(realpath(dirname(__FILE__) . "/../function.php"));	
	$list=topnews();
	//print_r($list);
	$belowNews=Belownews();
	//print_r($belowNews);
	
?>
<body>
<?php include(realpath(dirname(__FILE__) . "/../templates/menu_other.php"));?>

<div class="latest_news news_page_latest_news">
    <div class="container">
        <h2>Our latest news</h2>
        
   <div class="latest_news_sec">
       <div class="row">
	    <?php
	   //echo count($listnews);exit;
	   //$actual_path='https://iplasma.life/media/cache/card_2/custom/domain_1/image_files/sitemgr_photo_';
	   //$actual_path='https://iplasma.life/media/cache/main_image/custom/domain_1/image_files/sitemgr_photo_';
	   //$actual_logo_path='https://iplasma.life/media/cache/logo_icon/custom/domain_1/image_files/sitemgr_photo_';
	   
	    $actual_path='https://app.iplasma.life/media/cache/main_image/custom/domain_1/image_files/sitemgr_photo_';
	   $actual_logo_path='https://app.iplasma.life/media/cache/logo_icon/custom/domain_1/image_files/sitemgr_photo_';
	   
	   $actual_path2='https://app.iplasma.life/media/cache/card_2/custom/domain_1/image_files/sitemgr_photo_';
	   
	   foreach ($list as $key=>$value) {
		//print_r($value);
		$small_img=$actual_logo_path.$value['author_image_id'].".".$value['logoimg_ext'];
		$imagepath=$actual_path2.$value['image_id'].".".$value['img_ext'];
		if (!file_exists(trim($actual_path2.$value['image_id'].".".$value['img_ext']))) {
			
			$imagecallpath=$imagepath;
		}else{
			
			$imagecallpath=$actual_path.$value['image_id'].".".$value['img_ext'];
		}
		$date=date('d F, Y',strtotime($value['updated']));
	//	$title=htmlentities($value['title']);
	//echo $imagecallpath;
		$title=$value['title'];
		if($key==3) break;
	   ?>
           <div class="col-sm-4">
               <div class="latest_news_box">
                   <div class="latest_news_img">
                       <!--<img src="images/news1.jpg" alt=""/>-->
					    <img src="<?php echo $imagecallpath;?>" alt=""/>
                   </div>
                   <div class="latest_news_text">
                       <h4><?php echo html_entity_decode($title);?></h4>
                       <span class="date"><?php echo $date;?></span>
                       <div class="description_news">
                          <?php echo html_entity_decode($value['content']);?>...
                       </div>
                       <a href="newsdetails.php?id=<?php echo $value['id'];?>" class="read_artical">Read Article</a>
                   </div>
               </div>
           </div>
	   <?php } ?>   
            <!--<div class="col-sm-4">
               <div class="latest_news_box">
                   <div class="latest_news_img">
                       <img src="images/news2.jpg" alt=""/>
                   </div>
                   <div class="latest_news_text">
                       <h4>Plasma-Derived Therapies Highly Beneficial, Report</h4>
                       <span class="date">10 June, 2020</span>
                       <div class="description_news">
                          At iPlasma, we consider it our 
fundamental duty to educate people and shatter myths or misconceptions regarding plasma a...
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
                       <h4>India Says 'Yes' to Plasma Therapy; Approves 28..</h4>
                       <span class="date">10 June, 2020</span>
                       <div class="description_news">
                           In India, as more and more tests are being conducted, the true extent of COVID-19???s havoc has emerged through. Cases are exponentially..
                       </div>
                       <a href="#" class="read_artical">Read Article</a>
                   </div>
               </div>
           </div>-->
       </div>
   </div>
   
<!--
   <div class="news_read_more_btn">
       <a href="#" class="learn_more">Learn more</a>
   </div>
-->
    </div>
</div>  

<div class="news_latter">
    <div class="container">
       <div class="news_latter_inner">
       
        <h2>Sign up for our newsletter</h2>
        <p>Stay up to date on the last plasma stories.</p>
        
        <div class="news_latter_field_box">
        <div id="alertS" class="alert alert-success" style="display:none;">
		                We???re extremely excited that you have decided to apply.
		            </div>
		            <div id="alertE" class="alert alert-info" role="alert" style="display:none;">
                            Email Address is Already Registered
                    </div>    
            <form id="NewsletterForm" name="Newsletter" role="form">
            <div class="input_box">
                <!--<div class="input_box_inner">
                    <input type="text" placeholder="Name" class="input_fields">
                </div>-->
                
                <div class="input_box_inner">
                    <input type="email" id="newsemail" name="newsemail" placeholder="Email Address" class="input_fields">
                    <span class="help-block" id="emailError" style="display:none;color:red;">Please enter your valid email</span>
                </div>
                <div class="input_box_inner_btn">
                    <button id="newsleterid">Register</button>
                </div>
            </div>
            </form>
        </div>
        </div>
    </div>
</div>


<div class="latest_news news_page_latest_news">
    <div class="container">
      
        
   <div class="latest_news_sec">
       <div class="row">
	   <?php
	   //echo count($listnews);exit;
	   //$actual_path='https://iplasma.life/media/cache/card_2/custom/domain_1/image_files/sitemgr_photo_';
	   //$actual_path='https://iplasma.life/media/cache/main_image/custom/domain_1/image_files/sitemgr_photo_';
	   //$actual_logo_path='https://iplasma.life/media/cache/logo_icon/custom/domain_1/image_files/sitemgr_photo_';
	   
	    $actual_path='https://app.iplasma.life/media/cache/main_image/custom/domain_1/image_files/sitemgr_photo_';
	   $actual_logo_path='https://app.iplasma.life/media/cache/logo_icon/custom/domain_1/image_files/sitemgr_photo_';
	   
	   $actual_path2='https://app.iplasma.life/media/cache/card_2/custom/domain_1/image_files/sitemgr_photo_';
	   $k=0;
	   
	   foreach ($belowNews as $key2=>$value2) {
		//print_r($value);
		 //if($k>2){
			 
		$small_img=$actual_logo_path.$value2['author_image_id'].".".$value2['logoimg_ext'];
		$imagepath=$actual_path2.$value2['image_id'].".".$value2['img_ext'];
		$date=date('d F, Y',strtotime($value2['updated']));
	    //if($k==6) break;
		if (!file_exists(trim($actual_path2.$value2['image_id'].".".$value2['img_ext']))) {
			
			$imagecallpath2=$imagepath;
		}else{
			
			$imagecallpath2=$actual_path.$value2['image_id'].".".$value2['img_ext'];
		}
	   ?>
           <div class="col-sm-4">
               <div class="latest_news_box">
                   <div class="latest_news_img">
                       <img src="<?php echo $imagecallpath2;?>" alt=""/>
                   </div>
                   <div class="latest_news_text">
                       <h4><?php echo $value2['title'];?></h4>
                       <span class="date"><?php echo $date;?></span>
                       <div class="description_news">
                          <?php echo $value2['content'];?>
                       </div>
                       <a href="newsdetails.php?id=<?php echo $value2['id'];?>" class="read_artical">Read Article</a>
                   </div>
               </div>
           </div>
		   
		 <?php
		 //}$k++;
		 } ?>   
           <!--<div class="col-sm-4">
               <div class="latest_news_box">
                   <div class="latest_news_img">
                       <img src="images/news4.jpg" alt=""/>
                   </div>
                   <div class="latest_news_text">
                       <h4>Itsmyturn 'From the Boardroom to the Clea..</h4>
                       <span class="date">10 June, 2020</span>
                       <div class="description_news">
                          At iPlasma, we consider it our 
fundamental duty to educate people and shatter myths or misconceptions regarding plasma a...
                       </div>
                       <a href="#" class="read_artical">Read Article</a>
                   </div>
               </div>
           </div>
           <div class="col-sm-4">
               <div class="latest_news_box">
                   <div class="latest_news_img">
                       <img src="images/news5.jpg" alt=""/>
                   </div>
                   <div class="latest_news_text">
                       <h4>The Fight Is In Us - National Campaign Urges..</h4>
                       <span class="date">10 June, 2020</span>
                       <div class="description_news">
                           In India, as more and more tests are being conducted, the true extent of COVID-19???s havoc has emerged through. Cases are exponentially..
                       </div>
                       <a href="#" class="read_artical">Read Article</a>
                   </div>
               </div>
           </div>-->
       </div>
   </div>
   
   <div class="news_read_more_btn learn">
       <a href="javascript:void();" class="learn_more" onclick=learn_more();>View More</a>
   </div>
    </div>
</div>
</div>
<?php include(realpath(dirname(__FILE__) . "/../templates/beta_tester.php"));?> 