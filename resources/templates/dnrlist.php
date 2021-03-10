<?php
//include(realpath(dirname(__FILE__) . "/../config.php"));
//include(realpath(dirname(__FILE__) . "/../function.php"));	
//print_r($config);
include(realpath(dirname(__FILE__) . "/../config.php"));

//include(realpath(dirname(__FILE__) . "/../config.php"));	

include(realpath(dirname(__FILE__) . "/../function.php"));	
	
$videolist=getvideo();	
//print_r($videolist);

$bigArticle = BigArticle();
//print_r($bigArticle);
?>
<body>
<?php include(realpath(dirname(__FILE__) . "/../templates/menu_dnr.php"));?>

<div class="recent_event_post">
    <div class="container">
        <h2>Recent posts</h2>
        <div class="recent_event_post_section">
            <div class="row">
               <?php  foreach($bigArticle as $key=>$val) 
	{
		 $date=date('d F, Y',strtotime($val['updated'])); 
                //$actual_path='https://iplasma.life/custom/domain_1/image_files/sitemgr_photo_';
				$actual_path='https://app.iplasma.life/custom/domain_1/image_files/sitemgr_photo_';
                $imagepath=$actual_path.$val['image_id'].".".$val['img_ext'];
	  ?> 
                <div class="col-sm-4">
               <div class="recent_event_post_box">
                   <div class="recent_event_post_box_img">
                       <!--<img src="images/post1.jpg" alt=""/>-->
                        <a href='dnred_details.php?id=<?php echo $val['id']?>'><img  src="<?php echo $imagepath;?>" alt=""/></a>
                   </div>
                   <div class="latest_news_text">
                       <a href='dnred_details.php?id=<?php echo $val['id']?>'><h4><?php echo $val['title'];?></h4></a>
                       <span class="date"><?php echo $date;?></span>
                       <div class="description_news">
                           <?php echo $val['content'];?>...
                       </div>
                   </div>
               </div>
           </div>
  <?php }?>         
           <!--<div class="col-sm-4">
               <div class="recent_event_post_box">
                   <div class="recent_event_post_box_img">
                       <img src="images/post1.jpg" alt=""/>
                   </div>
                   <div class="latest_news_text">
                       <h4>Who Needs my Plasma?</h4>
                       <span class="date">10 June, 2020</span>
                       <div class="description_news">
                           Donating plasma is one of the best ways to help make a real and lasting difference in the world. 
                       </div>
                   </div>
               </div>
           </div>-->
           
           <!--<div class="col-sm-4">
               <div class="recent_event_post_box">
                   <div class="recent_event_post_box_img">
                       <img src="images/post1.jpg" alt=""/>
                   </div>
                   <div class="latest_news_text">
                       <h4>What is a qualified donor?</h4>
                       <span class="date">10 June, 2020</span>
                       <div class="description_news">
                           Yes anyone can donate plasma. However, to ensure the safety of both donors and the therapies.. 
                       </div>
                   </div>
               </div>
           </div>-->
           
           
           
            </div>
        </div>
        
        
   <div class="news_read_more_btn">
       <a href="javascript:void();" class="learn_more" onClick="learn_more();">View More</a>
   </div>

    </div>
</div>

<div class="news_latter">
    <div class="container">
       <div class="news_latter_inner">
       
        <h2>Sign up for our newsletter</h2>
        <!--<p>Stay up to date on the last plasma stories.</p>-->
        <p>Join the iPlasma community.</p>
        
        <div class="news_latter_field_box">
            
            <div id="alertS" class="alert alert-success" style="display:none;">
		                We’re extremely excited that you have decided to apply.
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


<div class="recent_event_post">
    <div class="container">
        <h2>Recent videos</h2>
        <div class="recent_event_post_section">
            <div class="row">
			<?php foreach($videolist As $val){?>
                <div class="col-sm-4">
               <div class="recent_event_post_box">
                   <div class="recent_event_post_box_img">
                       <!--<img src="images/video1.jpg" alt=""/>-->
					  <!--<iframe class="embed-responsive-item" src="<?php //echo $val['url'];?>"></iframe>-->
					  <a class="fancybox-media" href="<?php echo $val['url'];?>&autoplay=true" rel="gallery">
	            <img src="<?php echo $val['imageUrl'];?>" alt="" />
	           
</a>
                    
                    <?php //echo $val['iframe'];?>
                   </div>
                   <div class="latest_news_text">
                       <!--<h4>What Should I Expect When Donating Plasma?</h4>-->
                       <!--<span class="date">10 June, 2020</span>-->
                       <div class="description_news">
                           <?php echo $val['description'];?>
                       </div>
                   </div>
               </div>
           </div>
			<?php }?>
           <!--<div class="col-sm-4">
               <div class="recent_event_post_box">
                   <div class="recent_event_post_box_img">
                       <img src="images/video1.jpg" alt=""/>
                   </div>
                   <div class="latest_news_text">
                       <h4>How often can I donate plasma?</h4>
                       <span class="date">10 June, 2020</span>
                       <div class="description_news">
                           Donating plasma is one of the best ways to help make a real and lasting difference in the world. 
                       </div>
                   </div>
               </div>
           </div>-->
           
           <!--<div class="col-sm-4">
               <div class="recent_event_post_box">
                   <div class="recent_event_post_box_img">
                       <img src="images/video1.jpg" alt=""/>
                   </div>
                   <div class="latest_news_text">
                       <h4>Blood vs Plasma vs Platelets: Types of Donations Explained</h4>
                       <span class="date">10 June, 2020</span>
                       <div class="description_news">
                           Yes anyone can donate plasma. However, to ensure the safety of both donors and the therapies.. 
                       </div>
                   </div>
               </div>
           </div>-->
		   
            </div>
        </div>
        
        
   <div class="news_read_more_btn">
       <a href="javascript:void();" class="learn_more" onClick="learn_more();">View More</a>
   </div>

    </div>
</div>
<?php include(realpath(dirname(__FILE__) . "/../templates/beta_tester.php"));?> 