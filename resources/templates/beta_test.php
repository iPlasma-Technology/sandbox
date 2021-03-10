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
<?php //include(realpath(dirname(__FILE__) . "/../templates/menu_other.php"));?>
<div class="header_banner_section">
<div class="header inner_header">
    <?php include(realpath(dirname(__FILE__) . "/../templates/header_menu.php"));?>
</div>

<div class="beta_test_banner">
   

        <div class="container">
               <div class="banner_main">
            <div class="banner_text_inner">
                <h2>iPlasma Beta Program</h2>
                <p>Rare disease patients depend on healthy people like us to donate plasma. Unfortunately, the current donor turnout is not enough to meet the needs of patients throughout the world. We are on a mission to change this! Join the iPlasma Beta Program and help shape the future of donor engagement.</p>
           <a href="javascriprt:void();" onclick='pupupBetaOpen()'>Sign Up</a>
            </div>
            <div class="banner_img">
                <img src="images/beta_banner1.png" alt=""/>
            </div>
        </div>
    </div>
</div>

<div class="beta_testing_page">
    <div class="container">
      <div class="how_to_parcipate">
          <h2>How do I participate?</h2>
          <p>As a member of our beta community, you will be one of the first to test drive the iPlasma platform and the latest features. Currently, we are looking for 100 current plasma donors between the ages of 18 and 44. Sign-up today to be part of the exclusive iPlasma Beta Program.</p>
      </div>
      
      <div class="faq_section">
          <h2>Frequently Asked Questions</h2>
          
          <div class="faq_box">
              <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingOne">
      <h4 class="panel-title">
        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          1. What is the iPlasma Beta Program?
        </a>
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
      <div class="panel-body">
       The iPlasma Beta Program is an exclusive community of users that have first access to all our latest features. The feedback you provide is critical to helping us build the best platform. You’ll help us ensure that rare diseases patients everywhere can enjoy the small things in life like we do! 
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingTwo">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          2. How do I enroll in the Beta Program?
        </a>
      </h4>
    </div>
    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
      <div class="panel-body">
       Enrollment in the iPlasma Beta Program is simple. Select sign-up and complete the short application.
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingThree">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          3. I have completed the application. What are the next steps?
        </a>
      </h4>
    </div>
    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
      <div class="panel-body">
      We’re extremely excited that you have decided to apply. A member of the iPlasma team will reach out to you with 72 hours to finalize the application process and ensure you are a good fit for our program. You will also have a chance to review our program terms. 
    </div>
  </div>
</div>
        
         <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingFour">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
          4. How will iPlasma contact me?
        </a>
      </h4>
    </div>
    <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
      <div class="panel-body">
       We will communicate with you via email and through our in-app chat. All application feedback is collected via in-app chat. iPlasma does not contact any users without prior written notification. 
    </div>
  </div>
</div>
         
      
                  
  
         <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingFive">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
          5. Is there any compensation for participating in the program?
        </a>
      </h4>
    </div>
    <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
      <div class="panel-body">
       This program is voluntary and there no compensation for your participation. 
    </div>
  </div>
</div>
         
         <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingSix">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
          6. Can I share I share information about the program? 
        </a>
      </h4>
    </div>
    <div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix">
      <div class="panel-body">
       Information obtained through the iPlasma Beta Program is confidential. Do no install the beta app on a device that does not belong to you. Also, do not share any screenshots on social media or anywhere on the internet. Information publicly published by iPlasma is not considered confidential.
    </div>
  </div>
</div>
         
         <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingSeven">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
          7. How do I leave the iPlasma Beta Program?
        </a>
      </h4>
    </div>
    <div id="collapseSeven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSeven">
      <div class="panel-body">
      To leave the iPlasma Beta Program – email a written request to beta@iplasma.co. Make sure to include your full name and send from email associated with your account. 
    </div>
  </div>
</div>
          </div>
      </div>
    </div>
    </div>
    </div>
    
<?php //include(realpath(dirname(__FILE__) . "/../templates/footer.php"));?> 