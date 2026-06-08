<div class="container-fluid contact-us">
	<div class="container">
		<div class="row">
        	<div class="col-md-6 col-md-push-6">
            	<div class="visible-xs visible-sm">
                    <p class="title-sm">We'd love to</p>
                    <p class="title-sm">hear from you</p>
                </div>
            	<div class="form-container" style="padding-bottom:3px">
                	<form role="form" id="contactus-form" enctype="multipart/form-data" >
                    	<div class="form-group" style="display: flex; align-items: center;">
				<img src="<?php echo base_url().'assets/img/icons/PersonIcon.png' ?>" /> &nbsp;
                        	<input type="text" name="name" data-toggle="popover" data-content="" class="form-control" placeholder="Name" />
                        </div>
                        <div class="form-group" style="display: flex; align-items: center;">
				<img src="<?php echo base_url().'assets/img/icons/Home.png' ?>" /> &nbsp;
                        	<input type="text" name="address" data-toggle="popover" data-content="" class="form-control" placeholder="Address" />
                        </div>
                        <div class="row">
                        	<div class="col-sm-6">
                                <div class="form-group" style="display: flex; align-items: center;">
					<img src="<?php echo base_url().'assets/img/icons/AccountIcon.png' ?>" /> &nbsp;
                                	<input type="text" name="account_no" data-toggle="popover" data-content="" class="form-control" placeholder="Account Number" maxlength="9"/>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group" style="display: flex; align-items: center;">
					<img src="<?php echo base_url().'assets/img/icons/MailIcon1.png' ?>" /> &nbsp;
                                	<input type="text" name="email" data-toggle="popover" data-content="" class="form-control" placeholder="Email Address" />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                        	<div class="col-xs-2 hidden-xs">
                                <div class="form-group" style="display: flex; align-items: center;">
					<img src="<?php echo base_url().'assets/img/icons/SubjectIcon3.png' ?>" />
                                	<p style="width:100%;padding:5px 0 5px 0; margin-left:15px; color:#FFF; text-align:center; font-weight:bold">Subject</p>
                                </div>
                            </div>
                        	<div class="col-sm-4">
                                <div class="form-group" style="display: flex; align-items: center;">
					<img src="<?php echo base_url().'assets/img/icons/SubjectIcon3.png' ?>" class="visible-xs-block" /> &nbsp;
                                	<select class="form-control" data-toggle="popover" data-content="" name="subject">
                                    	<option value="">Select...</option>
                                    	<option value="Inquiries">Inquiries</option>
                                        <option value="feedback">Feedback</option>
                                        <option value="complaints">Complaints</option>
                                        <option value="followup">Follow-up</option>
                                        <option value="questions">Questions</option>
                                        <option value="request">Request</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group" style="display: flex; align-items: center;">
					<img src="<?php echo base_url().'assets/img/icons/PhoneIcon8.png' ?>" width="34" height="34"/> &nbsp;
                                	<input type="text" name="contact_no" data-toggle="popover" data-content="" class="form-control" placeholder="Contact Number" />
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                        	<textarea name="message" data-toggle="popover" data-content="" class="form-control" placeholder="Message" rows="7"></textarea>
                        </div>
                        <div class="" style="text-align:center; margin-bottom:20px;">
							<span class="captcha-container"><?php echo $captcha; ?></span>
                            <!--<a href="javascript:;" class="btn btn-orange" style="padding:2px 4px; border-radius:2px"><span class="icon-refresh text-orange" style="font-size:18px"></span></a>-->
                            <div class="form-group" style="max-width:170px; margin:0 auto">
                            	<!--<input type="text" name="captcha" class="form-control" data-toggle="popover down" data-content="" style="border-radius:0px; height:24px; text-align:center; margin-top:5px" placeholder="Enter code above..." maxlength="6" />-->
 
                            </div>
                        </div>
			<!-- checkbox -->
		    	<div class="form-check">
    				<label class="form-check-label" style="color: #FFF;" for="dprivacy"><span><input type="checkbox" class="form-check-input" value="1" id="dprivacy" name="dprivacy">&nbsp;</span>I ALLOW CABLELINK TO USE THE INFORMATION, INCLUDING ALL SUPPORTING
					DOCUMENTS I HAVE PROVIDED FOR COMMUNICATION-RELATED TO MY APPLICATION
					PROCESS, MANAGING MY SUBSCRIPTION, OR CROSS-MARKETING OF PRODUCTS AND
					SERVICES. I AM ASSURED THAT THIS INFORMATION WILL BE TREATED WITH UTMOST
					CONFIDENTIALITY FOLLOWING THE STRICT GUIDELINES UNDER THE REPUBLIC ACT
					10173-DATA PRIVACY ACT OF 2012.</label>
  		    	</div>		    
		    	<!-- checkbox -->
                        <div class="form-group" style="text-align:center">
                            <button type="submit" class="btn btn-orange btn-contactus" style="width:200px"/>SUBMIT</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-6 col-md-pull-6 contactus-desc">
            	<div class="hidden-xs hidden-sm">
                    <p class="title-lg">We'd love to</p>
                    <p class="title-lg">hear from you</p>
                </div>
                <div class="heading">
                	<div class="head">Head Office</div>
                    <div class="content">
                    	<!--<img src="<?php echo base_url().'assets/img/icons/map-marker.png' ?>" />--> 
                        8210 Dr. A Santos Avenue, Sucat Road, Parañaque City
                    </div>
                    <div class="head">Customer Service</div>
                    <div class="content">
                    	<!--<img src="<?php echo base_url().'assets/img/icons/phone.png' ?>" />--> 
				<span class="contact-big">8988-5465</span>&nbsp;
                        <!--<img src="<?php echo base_url().'assets/img/icons/envelope.png' ?>" /> customer.relations@cablelink.com.ph-->

			

                    <!--</div>-->
                    <br>
		    <!--<div class="content">
			<!--<img src="<?php echo base_url().'assets/img/icons/phone.png' ?>" />
				<span class="contact-big">7918-6460 #5465</span>&nbsp;-->
                        <span class="contact-big">CABLELINK (Viber Business)</span>&nbsp;
                    <!--</div>-->
		    <br>
		    <!--<div class="content">-->
 			<!--<img src="<?php echo base_url().'assets/img/icons/envelope.png' ?>" />--> customerservice@cablelink.com.ph
		    </div>


                    <div class="head">Alternative Contact Numbers</div>
                        <div class="content">
                          <div class="row">
                              <div class="col-xs-6 col-md-5">
                                  <!--<img src="<?php echo base_url().'assets/img/icons/phone.png' ?>" />--> <span class="alt-no">(046) 471-5541 to 42</span>
                              </div>
                              <div class="col-xs-6 col-md-7">
                                  Bacoor and Imus, Cavite
                              </div>
                          </div>
                          <!--<div class="row">
                              <div class="col-xs-6 col-md-5">
                                  <img src="<?php echo base_url().'assets/img/icons/phone.png' ?>" /> <span class="alt-no">(049) 511-8910</span>
                              </div>
                              <div class="col-xs-6 col-md-7">
                                  Biñan, Laguna
                              </div>
                          </div>-->
                        </div>
                    <div class="head">Follow us on your favorite social media sites</div>
                    <div class="content">
                        <!-- <img src="<?php echo base_url().'assets/img/icons/fb-orange.png' ?>" />
                        <img src="<?php echo base_url().'assets/img/icons/twitter-orange.png' ?>" />
                        <img src="<?php echo base_url().'assets/img/icons/ig-orange.png' ?>"/> -->

                        <img src="<?php echo base_url().'assets/img/icons/facebook_2024.png' ?>" width="25" height="25" />
                        <img src="<?php echo base_url().'assets/img/icons/instagram_2024.png' ?>" width="25" height="25" />
                        <img src="<?php echo base_url().'assets/img/icons/twitter_2024.png' ?>" width="25" height="25" />
                    	<span class="social-name">CablelinkTV</span><br>

                        <img src="<?php echo base_url().'assets/img/icons/tiktok_2024.png' ?>" width="25" height="25" />
                        <img src="<?php echo base_url().'assets/img/icons/youtube_2024.png' ?>" width="25" height="25" />
                        <span class="social-name">Cablelink Official</span>                    </div>
               	</div>
            </div>
        </div>
    </div>
</div>