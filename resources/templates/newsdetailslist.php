<?php
//include(realpath(dirname(__FILE__) . "/../config.php"));
//include(realpath(dirname(__FILE__) . "/../function.php"));	
//print_r($config);
include(realpath(dirname(__FILE__) . "/../config.php"));

//include(realpath(dirname(__FILE__) . "/../config.php"));	

include(realpath(dirname(__FILE__) . "/../function.php"));	
	//$list=topnews();
	//print_r($list);
	//$belowNews=Belownews();
    //print_r($variables);
    
$id=$variables['id'];
 $newsDetails=newsdetails($id);
 $other_story=other_story($id);
 //print_r($newsDetails);
 //print_r($other_story);
?>
<body>
<?php include(realpath(dirname(__FILE__) . "/../templates/menu_other.php"));?>

<div class="dnred_details">
    <div class="container">
        <div class="row">
           <div class="col-sm-8">
               <div class="dnred_right_text">
                  <?php echo $newsDetails[0]['content']?>
              
              
              <!--<div class="news_details_img">
                  <img src="images/news_details.jpg" alt=""/>
              </div>-->
               </div>
           </div>
            <div class="col-sm-4">
               <div class="drned_right_bar">
               
                 <div class="share_it_section">
                   <h4>Share It</h4>
                   
                   <ul>
                       <li><a href="https://www.facebook.com/iplasmalife" target="_blank"><img src="images/r_fb.png" alt=""/></a></li>
                       <li><a href="https://twitter.com/iplasmalife" target="_blank"><img src="images/r_tw.png" alt=""/></a></li>
                       <li><a href="https://www.instagram.com/iplasmalife/" target="_blank"><img src="images/r_ins.png" alt=""/></a></li>
                       <li><a href="https://www.pinterest.com/iplasmalife/" target="_blank"><img src="images/r_pin.png" alt=""/></a></li>
                      
                   </ul>
               </div>
               
               
               <?php include(realpath(dirname(__FILE__) . "/../templates/newsletter.php"));?> 
               
               <div class="propular_post">
               <h4>More Stories</h4>
               <?php foreach($other_story as $val){
                  $date=date('d F, Y',strtotime($val['updated'])); 
              $image_path='https://app.iplasma.life/media/cache/main_image/custom/domain_1/image_files/sitemgr_photo_';
               ?>
                <div class="small_event_section_box">
                    <div class="small_event_section_box_img">
                        <!--<img  src="images/small_event.png" alt=""/>-->
                        <a href='newsdetails.php?id=<?php echo $val['id']?>'><img src="<?php echo $img_path.$val['image_id'].".".$val['img_ext']?>" alt=""/></a>
                    </div>
                    <div class="small_event_section_box_text">
                        <span class="date"><?php echo $date;?></span>
                        <a href='newsdetails.php?id=<?php echo $val['id']?>'><h6><?php echo $val['title'];?></h6></a>
                    </div>
                </div>
                <?php  } ?>
                <!--<div class="small_event_section_box">
                    <div class="small_event_section_box_img">
                        <img  src="images/small_event2.png" alt=""/>
                    </div>
                    <div class="small_event_section_box_text">
                        <span class="date">27 March, 2020</span>
                        <h6>What To Do After You Donate</h6>
                    </div>
                </div>
            
                <div class="small_event_section_box">
                    <div class="small_event_section_box_img">
                        <img  src="images/small_event3.png" alt=""/>
                    </div>
                    <div class="small_event_section_box_text">
                        <span class="date">20 March, 2020</span>
                        <h6>Frequently Asked Donor Questions.</h6>
                    </div>
                </div>-->
                
                </div>
                
                
                   
               </div>
               
                
                
            </div>
            </div>
        </div>
    </div>
</div>
<?php //include(realpath(dirname(__FILE__) . "/../templates/newsletter.php"));?> 
<?php include(realpath(dirname(__FILE__) . "/../templates/beta_tester.php"));?> 