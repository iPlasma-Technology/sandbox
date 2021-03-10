<div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-5">
                <div class="footer_logo">
                    <h4><img src="images/footer_logo.png" alt=""/></h4>
                    <!--<p>In India, as more and more tests<br> are being conducted.</p>-->
                    <!--<p>Be The Difference</p>-->
                    <p>Let’s Normalize Plasma<sup>TM</sup></p>
                    <ul>
                        <li><a href="https://www.facebook.com/iplasmalife" target="_new"><img src="images/fb.png" alt=""/></a></li>
                        <li><a href="https://twitter.com/iplasmalife" target="_new"><img src="images/twiter.png" alt=""/></a></li>
                        <li><a href="https://www.instagram.com/iplasmalife/" target="_new"><img src="images/ins.png" alt=""/></a></li>
                        <li><a href="https://www.pinterest.com/iplasmalife/" target="_new"><img src="images/pin.png" alt=""/></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="footer_menu">
                    <h4>Menu</h4>
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="dnr-ed.php">DnrED</a></li>
                        <li><a href="news.php">News</a></li>
                        <li><a href="https://www.dearwarriors.com">Podcast</a></li>
                        <li><a href="beta.php">Beta Program</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="footer_download_app">
                    <h4>Download App</h4>
                    <div class="footer_download_app_btn">
                         <a href="#app" onclick="pupupOpen()"><img src="images/footer_app.png" alt="" id="app"></a>
                         <a href="#googleplay" onclick="pupupOpen()"><img src="images/footer_ios.png" alt="" id="googleplay"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="copy_right">
    <div class="container">
        Copyright ©<?php date('Y');?> 2020 <a href="#">iPlasma Technology LLC</a>. All rights reserved.
    </div>
</div>


<!--Success pop up Starts-->
<div class="modal fade" id="success_msg" role="dialog" tabindex="-1" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
				<div class="modal-body">
				<div class="app_modal"> 
					<div class="modal_logo">
               <img src="images/logo.png" alt=""/>
            </div>
				<div class="success">
				  <div class="modal-dialog-success">
					<div class="col-xs-12 pade_none">
					  <!--<button type="button" class="close" onClick="closeConfirm();" data-dismiss="modal">&times;</button>-->
					  <div class="col-xs-12 pade_none">
						<h2>Success!</h2>
						<p>Thank you for signing up to receive iPlasma updates. </p>
					  </div>
					  <div class="col-xs-12 pad_none">
					  </div>
					</div>
				  </div>
				</div>
		<button class="btn btn-default modal_btn" data-dismiss="modal" aria-label="Close">Done </button>
		</div>
      </div>
		</div>
	</div>
</div>
<!--Success pop up ends-->



<!--Success pop up Starts-->
<div class="modal fade" id="success_msg2" role="dialog" tabindex="-1" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
				<div class="modal-body">
				<div class="app_modal"> 
					<div class="modal_logo">
               <img src="images/logo.png" alt=""/>
            </div>
				<div class="success">
				  <div class="modal-dialog-success">
					<div class="col-xs-12 pade_none">
					  <!--<button type="button" class="close" onClick="closeConfirm();" data-dismiss="modal">&times;</button>-->
					  <div class="col-xs-12 pade_none">
						<!--<h2>Success!</h2>-->
						<p>Thank you for your interest in the iPlasma Beta Program.<br/> A member of our team will reach out to you shortly. </p>
					  </div>
					  <div class="col-xs-12 pad_none">
					  </div>
					</div>
				  </div>
				</div>
		<button class="btn btn-default modal_btn" data-dismiss="modal" aria-label="Close">Done </button>
		</div>
      </div>
		</div>
	</div>
</div>
<!--Success pop up ends-->



<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
     
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        
     
      <div class="modal-body">
        <div class="app_modal">
            <div class="modal_logo">
               <img src="images/logo.png" alt=""/>
            </div>
            <h1>The iPlasma App is Coming </h1>
            <!--<h1>Download iPlasma And Start Donating Today</h1>-->
            <p>Be The First To Know When We Launch In Your City</p>
            <!--<p>It’s that simple!</p>-->
            <div id="alertH" class="alert alert-success" style="display:none;">
		  <strong>Success!</strong> data insert successfully.
		</div>
			<form id="headercontactForm" name="contact" role="form">
            <div class="form-group">
                <input type="text" name="name" id="name" class="form-control" placeholder="Name"/>
				<span class="help-block" id="nameError" style="display:none;color:red;">Please enter your name</span>
            </div>
            <div class="form-group">
                <input type="email" name="email" id="email" class="form-control" placeholder="Email"/>
				<span class="help-block" id="emailError" style="display:none;color:red;">Please enter your valid email</span>
            </div>
            <div class="form-group">
                <input type="text" name="zip" id="zip" class="form-control" placeholder="Zip Code "/>
				<span class="help-block" id="zipError" style="display:none;color:red;">Please enter your zip code</span>
            </div>
           <!-- <div class="form-group">
                <select class="form-control" name="city" id="city">
                    <option>City</option>
                    <option>New York</option>
                    <option>Los Angeles</option>
                    <option>Chicago</option>
                    <option>Houston</option>
                </select>
				<span class="help-block" id="cityError" style="display:none;color:red;">Please select your city</span>
            </div>-->
            <!--<div class="form-group">
                <select class="form-control" name="state" id="state">
                    <option>State</option>
                    <option>California</option>
                    <option>Illinois</option>
                    <option>Texas</option>
                </select>
			<span class="help-block" id="stateError" style="display:none;color:red;">Please select your state</span>	
            </div>-->
            <button class="btn btn-default modal_btn">Request An Invite</button>
			</form>
        </div>
      </div>
     
    </div>
  </div>
</div>



<!-- Modal -->
<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
     
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        
     
      <div class="modal-body">
        <div class="app_modal">
            <div class="modal_logo">
               <img src="images/logo.png" alt=""/>
            </div>
            <h1>The iPlasma App is Coming</h1>
            <!--<p>Be The First To Know When We Launch In Your City</p>-->
            <p>Be The First To Experience It</p>
            <div id="alertL" class="alert alert-success" style="display:none;">
		  <strong>Success!</strong> Your message has been sent.
		</div>
		<form id="testercontactForm" name="contact2" role="form">
            <div class="form-group">
                <input type="text" name="fname" id="fname" class="form-control" placeholder="First Name"/>
				<span class="help-block" id="fnameError" style="display:none;color:red;">Please enter your first name</span>
            </div>
            
            <div class="form-group">
                <input type="text" name="lname"id="lname" class="form-control" placeholder="Last Name"/>
				<span class="help-block" id="lnameError" style="display:none;color:red;">Please enter your last name</span>
            </div>
            <div class="form-group">
                <input type="text" name="email2" id="email2" class="form-control" placeholder="Email"/>
				<span class="help-block" id="email2Error" style="display:none;color:red;">Please enter your valid email</span>
            </div>
            <!--<div class="form-group">
                <input type="text" name="phonetype" id="phonetype" class="form-control" placeholder="Enter Phone Type"/>
				<span class="help-block" id="phonetypeError" style="display:none;color:red;">Please enter your Phone Type</span>
            </div>-->
            <div class="form-group">
                <input type="text" name="phone" id="phone" class="form-control" placeholder="Phone"/>
				<span class="help-block" id="phoneError" style="display:none;color:red;">Please enter your Phone</span>
            </div>
			<div class="form-group">
                <input type="text" name="zip2" id="zip2" class="form-control" placeholder="Zip Code"/>
				<span class="help-block" id="zip2Error" style="display:none;color:red;">Please enter your zip code</span>
				
            </div>
            	<div class="form-group">Select Phone Type</div>
            <div class="form-group">
			
    <label class="radio-inline">
      <input type="radio" class="typec" name="optradio" value="Android" checked="checked">Android
    </label>
    <label class="radio-inline">
      <input type="radio" class="typec" name="optradio" value="IOS">IOS
    </label>
	<span class="help-block" id="typecError" style="display:none;color:red;">Please select type</span>
			</div>
            <!--<div class="form-group">
                <select class="form-control">
                    <option>City</option>
                    <option>New York</option>
                    <option>Los Angeles</option>
                    <option>Chicago</option>
                    <option>Houston</option>
                </select>
            </div>
            <div class="form-group">
                <select class="form-control">
                    <option>State</option>
                    <option>California</option>
                    <option>Illinois</option>
                    <option>Texas</option>
                </select>
            </div>
             <div class="form-group">
                <select class="form-control">
                    <option>Select</option>
                    <option>Android</option>
                    <option>IOS</option>
                   
                </select>
            </div>-->
            <button class="btn btn-default modal_btn">Submit Application</button>
            </form>
        </div>
      </div>
     
    </div>
  </div>
</div>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script> --> 
<script src="js/jquery.min.js"></script>
<!---------------------------Custom Jquery--------------------------------------> 
<script src="js/custom.js"></script> 
<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="js/bootstrap.min.js"></script>
<script src="js/function.js"></script>
<script type="text/javascript" src="js/jquery.fancybox.pack.js"></script>
<script type="text/javascript" src="js/jquery.fancybox-buttons.js?v=1.0.5"></script>
<script type="text/javascript" src="js/jquery.fancybox-media.js?v=1.0.6"></script>


</body>
</html>