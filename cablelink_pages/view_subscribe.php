<div class="container-fluid p-0">
  <div class="row no-gutters">

  
    <div class="col-lg-3 col-md-12 p-0  hidden-xs hidden-sm hidden-md" style="padding: 0px !important;">
      <div class="banner-area" style="height:90vh; display:flex; flex-direction:column;">

            <div class="banner-content bg-blue w-100">
                <div class="prntlogo d-flex flex-column justify-content-center align-items-center">
                    <img class="logo" style="width:90%" src="<?php echo base_url().'assets/img/icons/cablelink_logo.png'  ?>" />
                    <h2>CABLELINK</h2>
                </div>
                <!-- <?php  strtoupper($_GET['internet'])?> -->
                <div class="bottom" style="margin-top:20px;">
                    <!-- <h1>SUPERCHARGE!</h1> -->
                     <h1><?php  echo strtoupper($_GET['plan'])?></h1>
                    <p>FAST,RELIABLE & AFFORDABLE PLANS!</p>
                </div>
            </div>

      </div>
    </div>

    <div class="col-xs-12 col-sm-12 hidden-lg" style="padding: 10px 0;">
        <div class="small-banner bg-blue">

        <img src="<?php echo base_url().'assets/img/icons/cablelink_logo.png' ?>" alt="logo">

        <div class="text-group">

            <h1><?php  echo strtoupper($_GET['plan'])?></h1>
            <p>FAST, RELIABLE & AFFORDABLE PLANS!</p>
        </div>

    </div>
</div>
    


    <div class="col-lg-9 col-md-12" style=" height:90vh;">


       <div class="featured-container centerform"  style="height:100%; overflow-y:auto; overflow-x:hidden;">

                <div class="headform" style="padding-top:20px; text-align:left !important;">
                    <h2>Application Form</h2>
                   
                </div>
                <div class="form-content">
                </div>

  <div style="margin-bottom:0px">
                        	<div class="pakage-title-container text-left" style="padding-left:10px;">
                            	<span>Contact Person Details</span>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="pakage-container">
                                    	<div class="border" style="background-color:#FFF; /*!border-radius:8px;*/ /*!padding:2px*/padding:20px 20px 0 20px">
                                        <div class="row text-left">
                                            <!-- <div class="col-md-3"></div> -->
                                            <div class="col-md-12">
                                            	<div class="form-group" style="margin:0;">


                                                    <!-- <div class="client-info"> -->
                                                    <!-- <form role="form" style="position:relative" method="post" enctype="multipart/form-data" id="career-form"> -->
                                                    <form role="form" style="position:relative" id="subscribe-form">
                                                            <input type="text" name="service_type"   value="<?php echo $_REQUEST['cat'];?>"  style="display:none" />
	                                                          <input type="text" name="package" value="<?php echo $_REQUEST['package'];?>"  style="display:none" />
                                                            <input type="text" name="internet" value="<?php echo $_REQUEST['internet'];?>"  style="display:none" />
                                                            <input type="text" name="plan" value="<?php echo $_REQUEST['plan'];?>"  style="display:none" />
                                                            <div class="form-group" style="margin-bottom:20px; ">
                                                            <label>Name<span style="color:red">&nbsp;*</span></label>
                                                            <div class="row">
                                                              <div class="col-md-4">
                                                                  <input type="text" class="form-control" data-toggle="popover" data-content="" name="first_name" id="first_name" placeholder="">
                                                                  <small class="form-text text-muted text-center">First Name</small>
                                                              </div>
                                                              <div class="col-md-4">
                                                                  <input type="text" class="form-control" data-toggle="popover" data-content="" name="middle_name" id="middle_name" placeholder="">
                                                                  <small class="form-text text-muted text-center">Middle Name</small>
                                                              </div>
                                                              <div class="col-md-4">
                                                                  <input type="text" class="form-control" data-toggle="popover" data-content="" name="last_name" id="last_name" placeholder="">
                                                                  <small class="form-text text-muted text-center">Last Name</small>
                                                              </div>
                                                            </div>
                                                            </div>

                                                            <!-- <div class="form-group" style="margin-bottom:20px;">
                                                            <label>Address</label>
                                                            <div class="row">
                                                              <div class="col-md-12">
                                                                  <input type="text" class="form-control" data-toggle="popover" data-content="" name="address" id="address" placeholder="">
                                                                  <small class="form-text text-muted text-center">Street Address</small>
                                                              </div>
                                                            </div>
                                                            </div> -->

                                                            <div class="form-group" style="margin-bottom:0px !important;">
                                                              <label>Address<span style="color:red">&nbsp;*</span></label>
                                                              <!-- <div class="row">
                                                                <div class="col-md-12">
                                                                    <input type="text" class="form-control" data-toggle="popover" data-content="" name="address" id="address" placeholder="">
                                                                    <small class="form-text text-muted text-center">Street Address</small>
                                                                </div>
                                                              </div> -->

                                                              <div class="row">
                                                                <!-- <div class="col-lg-12" style="display:flex; justify-content:flex-start;"> -->

                                                                    <div class="col-lg-3">
                                                                      <!-- <label>Province</label> -->
                                                                      <select id="province" name="province" class="form-control">
                                                                            <option value="">Select Province</option>
                                                                            <?php foreach ($psgc as $region_name => $region_data): 
                                                                                      foreach ($region_data as $province_name => $province_data): 
                                                                                            if ($province_name === 'population') continue;?>
                                                                                            <option value="<?php echo htmlspecialchars($province_name)?>">
                                                                                                <?php echo htmlspecialchars($province_name) ?>
                                                                                            </option>
                                                                            <?php     endforeach;
                                                                                  endforeach; ?>
                                                                      </select>
                                                                      <small class="form-text text-muted text-center">Province</small>
                                                                    </div>
                                                                                
                                                                    <div class="col-lg-3 city">
                                                                      <!-- <label>City / Municipality</label> -->
                                                                      <select id="city" name="city" class="form-control">
                                                                        <option value="">Select City</option>
                                                                      </select>
                                                                      <small class="form-text text-muted text-center">City / Municipality</small>
                                                                    </div>
                                                                                
                                                                    <div class="col-lg-3">
                                                                      <!-- <label>Barangay</label> -->
                                                                        <select id="barangay" name="barangay" class="form-control">
                                                                          <option value="">Select Barangay</option>
                                                                        </select>
                                                                        <small class="form-text text-muted text-center">Barangay</small>
                                                                    </div>
                                                                                
                                                                                
                                                                    <div class="col-lg-3">
                                                                      <!-- <label>Barangay</label> -->
                                                                        <input type="text" class="form-control" data-toggle="popover" data-content="" name="bldg" id="bldg" placeholder="">
                                                                        <small class="form-text text-muted text-center">Unit/House number</small>
                                                                    </div>
                                                                                
                                                                </div>              
                                                              <!-- </div>              -->
                                                            </div>
                                                                                
                                                            <div class="form-group" style="margin-bottom:20px;">
                                                             <div class="row">
                                                                 <div class="col-md-6">
                                                                     <input type="text" class="form-control" data-toggle="popover" data-content="" name="street" id="street" placeholder="">
                                                                     <small class="form-text text-muted text-center">Street name</small>
                                                                 </div>

                                                                 <div class="col-md-6">
                                                                     <input type="text" class="form-control" data-toggle="popover" data-content="" name="address" id="address" placeholder="">
                                                                     <small class="form-text text-muted text-center">Village/Subd</small>
                                                                 </div>
                                                               </div>
                                                             </div>
                                                                                

                                                            <div class="form-group" style="margin-bottom:20px;">
                                                            <label>Resident Type</label>&nbsp;&nbsp;&nbsp;&nbsp;
                                                            <div class="form-check radio-inline">
                                                              <input class="form-check-input" type="radio" name="resident_type" id="resident_type1" value="Owner" checked>
                                                              <label class="form-check-label" for="resident_type1">
                                                                Owner
                                                              </label>
                                                            </div>
                                                            <div class="form-check radio-inline">
                                                              <input class="form-check-input" type="radio" name="resident_type" id="resident_type2" value="Tenant">
                                                              <label class="form-check-label" for="resident_type2">
                                                                Tenant
                                                              </label>
                                                            </div>
                                                            </div>

                                                            <!-- <div class="form-group" style="margin-bottom:20px;">
                                                            <label>Email<span style="color:red">&nbsp;*</span></label>
                                                            <div class="row">
                                                              <div class="col-md-12">
                                                                  <input type="text" class="form-control"  data-toggle="popover" data-content="" name="Email" id="Email" placeholder="">
                                                                  <small class="form-text text-muted text-center">Please enter an accurate and active email address. ALL important emails such as your statement of account will be sent to the email provided.</small>
                                                              </div>
                                                            </div>
                                                            </div> -->


                                                            <!-- <div class="form-group" style="margin-bottom:20px;">
                                                            <label>Phone Number 1</label>
                                                            <div class="row">
                                                              <div class="col-md-12">
                                                                  <input type="text" class="form-control"  data-toggle="popover" data-content="" name="Phone" id="Phone" placeholder="09XX-XXX-XXXX">
                                                                  <small class="form-text text-muted text-center">Please enter a valid phone number.</small>
                                                              </div>
                                                            </div>
                                                            </div>

                                                            <div class="form-group" style="margin-bottom:20px;">
                                                            <label>Existing Internet Provider</label>
                                                            <div class="row">
                                                              <div class="col-md-12">
                                                                  <input type="text" class="form-control"  data-toggle="popover" data-content="" name="EInternetProvider" id="EInternetProvider" placeholder="">
                                                              </div>
                                                            </div>
                                                            </div> -->

                                                        <!-- <div class="row">
                                                          <div class="col-md-6">
                                                            <div class="form-group" style="margin-bottom:20px;">
                                                              <label>Mobile Number<span style="color:red">&nbsp;*</span></label>
                                                              <input type="text" class="form-control" name="Phone" id="Phone" placeholder="(0000) 000-0000">
                                                              <small class="form-text text-muted text-center">Please enter a valid phone number.</small>
                                                            </div>
                                                          </div>

                                                          <div class="col-md-6">
                                                            <div class="form-group" style="margin-bottom:20px;">
                                                              <label>Existing Internet Provider (optional)</label>
                                                              <input type="text" class="form-control" name="EInternetProvider" id="EInternetProvider" placeholder="">
                                                            </div>
                                                          </div>
                                                        </div> -->



                                                         <div class="row">
                                                    <div class="col-md-6">
                                                      <div class="form-group" style="margin-bottom:20px;">
                                                        <label>Phone Number<span style="color:red">&nbsp;*</span></label>
                                                        <input type="text" class="form-control" name="Phone" id="Phone" placeholder="(0000) 000-0000">
                                                        <small class="form-text text-muted text-center">Please enter a valid phone number.</small>
                                                      </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                      <div class="form-group" style="margin-bottom:20px;">
                                                        <label>Existing Internet Provider (optional)</label>
                                                        <input type="text" class="form-control" name="EInternetProvider" id="EInternetProvider" placeholder="">
                                                      </div>
                                                    </div>
                                                  </div>



                                                  <div class="form-group" style="margin-bottom:20px; ">
                                                    <div class="row">
                                                      <div class="col-md-6">
                                                          <!-- <div><span><label>Email Address</label><span></div> -->
                                                          <!-- <input type="text" class="form-control" data-toggle="popover" data-content="" name="fname" id="fname" placeholder=""> -->
                                                          <!-- <small class="form-text text-muted text-center">First Name</small> -->
                                                             <label>Preferred Contact Method (optional)</label>
                                                                <select id="preferred_contact" name="preferred_contact" class="form-control" style="margin-bottom: 15px;">
                                                                  <option value="">Select preferred contact</option>
                                                                  <!-- <option value="mobile">Mobile Number</option> -->
                                                                  <option value="email">Email Address</option>
                                                                  <option value="landline">Landline</option>
                                                                </select>
                                                      </div>
    
                                                      <div class="col-md-6">
                                                          <!-- <div><span><label>Phone Number</label></span></div>
                                                          <input type="text" class="form-control" data-toggle="popover" data-content="" name="lname" id="lname" placeholder=""> -->
                                                          <!-- <small class="form-text text-muted text-center">Last Name</small> -->
                                                          <!-- Mobile Input -->
                                                          <!-- <div class="form-group contact-input" id="mobile_input" style="display:none;">
                                                            <label>Mobile Number <span style="color:red">*</span></label>
                                                            <input type="text" name="mobile_number" class="form-control" placeholder="0917xxxxxxx">
                                                          </div> -->
                                                                                                                  
                                                          <!-- Email Input -->
                                                          <div class="form-group contact-input" id="email_input" style="display:none;">
                                                            <label>Email Address <span style="color:red">*</span></label>
                                                            <input type="email" name="email_address" id="email_address" class="form-control" placeholder="example@email.com">
                                                          </div>
                                                                                                                  
                                                          <!-- Landline Input -->
                                                          <div class="form-group contact-input" id="landline_input" style="display:none;">
                                                            <label>Landline</label>
                                                            <input type="text" name="landline" id="landline" class="form-control" placeholder="02xxxxxxx">
                                                          </div>
                                                      </div>

                                                                </div>
                                                      </div>                           





                                                        

                                                  </div>
                                            </div>
                                            <div class="col-md-3"></div>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                        	</div>
                        </div>



		                <div class="form-check">
    		            	<label class="form-check-label" for="dprivacy"><span><input type="checkbox" class="form-check-input" value="1" id="dprivacy" name="dprivacy">&nbsp;</span>
			            	I agree to receive CABLELINK, promos and offerings.</label>
  		                </div>		    

                        <div class="reminder">
                                <p>I have read and agree to the Cablelink <a href="<?php echo base_url().'dataprivacy'; ?>" id="dataprivacy" target="_blank">Privacy Policy</a></p>
                        </div>
                        <div class="form-group text-center btn-width" style="text-align:center">
                            <button type="submit" class="btn btn-orange btn-career btn-width blockedButton" id="submit_btn" style="width:200px" disabled>Submit</button>
                        </div>
                </form>
            </div>
        <!-- </div> -->
    </div>

  </div>
</div>






