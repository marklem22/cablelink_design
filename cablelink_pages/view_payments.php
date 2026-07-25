<div class="container-fluid">
  <!-- [ Header Section ] -->
  <div class="row mt-5">
    <div class="col-12 payment-header" style="margin-top:60px;">
      <h1><strong>Online Payment</strong></h1>
    </div>
  </div>

  <!-- [ Form Section ] -->
  <div class="row justify-content-center center-all" style="height:740px;">
    <!-- <div class="col-xs-10 col-sm-8 col-md-6 col-lg-8 mx-auto form-container" style="height:500px;"> -->
    <div class="col-xs-10 col-sm-8 col-md-6 mx-auto form-container custom-width" style="height:580px;"><!--we can remove the custom-width if we want-->
      <!-- <div class="col-lg-8 col-lg-offset-2">  -->
      <div class="col-lg-8 col-lg-offset-2 custom-card"> 
      <form name="payFormCcard" id="payFormCcard" method="post" action="https://www.pesopay.com/b2c2/eng/payment/payForm.jsp">
        <div class="row eq-row" style="height:130px !important; /!*padding: 40px 0px 100px 0px; height:100px*/">
          <!-- <label class="form-text">Please enter your 9-digit account number to proceed with payment.</label> -->
          <div id="step1instruct">
              <div style="font-size:24px; font-weight: 600; letter-spacing:1.3px; text-align:center;">
                Personal Information
                <hr  class="anim" style="margin-top: 10px;" ></hr>
              </div>
              <div class="eq-row helperText custom-label" style="font-weight:300 !important; top:90px !important; font-size:11px !important; color:black; !important;"><!--row eq-row  color:#7F7F7F;-->
                  <label >Please provide your first name, last name, and contact number.</label>
              </div>
          </div>

          <div id="step2instruct" style="display: none;">
              <div style="font-size:24px; font-weight: 600; letter-spacing:1.3px; text-align:center;">
                 Payment Details
                <hr  class="anim" style="margin-top: 10px;" ></hr>
              </div>
              <div class="eq-row helperText custom-label" style="top:90px !important; font-size:11px !important; color:black; !important;"><!--row eq-row  color:#7F7F7F;-->
                  <label >Please enter your 9-digit account number and the amount to proceed with the payment.</label>
              </div>
          </div>
        </div>

        <!-- [ Step 1 ] -->
        <div id="step1">
          <div class="form-row">
            <div class="form-group col-md-6 floating-label-group" style="padding-bottom:20px;">
                <input type="text" name="customer_firstName" style="width:100% !important;" class="fieldform" id="customer_firstName" value="" data-toggle="popover" placeholder=" ">
                <label for="amount">First Name</label>
            </div>
            <div class="form-group col-md-6 floating-label-group" style="padding-bottom:20px;">
                <input type="text" name="customer_lastName"  style="width:100% !important;" class="fieldform" id="customer_lastName" value="" data-toggle="popover" placeholder=" ">
                <label for="amount">Last Name</label>
            </div>
          </div>

          <div class="form-row">
            <div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-12 mx-auto floating-label-group" style="padding-bottom:30px;">
              <!-- <span class="prefix-code">+63</span> -->
                <input type="text" name="customer_phone" class="fieldform /!*su887*/" id="customer_phone" style="width:100% !important;" value="" data-toggle="popover" placeholder="">
                <label for="amount" class="floating-label /!*always-float*/">Mobile Number</label>
            </div>
          </div>

          <div class="form-row">
            <div class="form-group col-xs-12 floating-label-group">
               <button type="button" class="btn btn-primary blockedButton ripple" id="next" name="submit"  onclick="showStep2()" style="width:100%;"><strong><div id="loader" style="display:none"></div>NEXT STEP</strong></button>
            </div>
          </div>
          <!-- <span class="INFO">PERSONAL INFO</span> -->
        </div>

        <!-- [ Step 2 ] -->
        <div id="step2" style="display: none;">
        <div class="form-row">
          <div class="form-group col-lg-12 floating-label-group" style="padding-bottom:20px;">
                <input type="text" name="customer_account_id" class="fieldform" id="customer_account_id"  style="width:100% !important;" data-toggle="popover" placeholder=" " value="" >
                <label for="amount">Account No.</label>
          </div>
          <div class="form-group col-lg-12 floating-label-group" style="padding-bottom:30px;">
                <input type="text" name="amount" class="fieldform" id="amount" style="width:100% !important;" value="" data-toggle="popover" placeholder=" ">
                <label for="amount">Amount</label>
          </div>
        </div>

          <!-- [ Hidden Fields ] -->
          <input type="hidden" name="merchantId" value="">
          <input type="hidden" name="orderRef" value="">
          <input type="hidden" name="currCode" value="" >
          <input type="hidden" name="mpsMode" value="" >
          <input type="hidden" name="successUrl" value="">
          <input type="hidden" name="failUrl" value="">
          <input type="hidden" name="cancelUrl" value="">
          <input type="hidden" name="payType" value="">
          <input type="hidden" name="lang" value="">
          <input type="hidden" name="payMethod" value="">
          <input type="hidden" name="secureHash" value="">

          <!-- [ Step 2 Buttons ] -->
          <!-- <div class="form-row">
            <div class="form-group col-xs-1 col-sm-1 col-md-1 col-lg-1" style="height:10px; padding:0px; text-align:right;">
                <input type="checkbox" class="form-check-input" value="1" id="clpolicy" name="clpolicy">&nbsp;</span>
            </div>
            <div class="form-group col-xs-11 col-sm-11 col-md-11 col-lg-11" style="padding:0px; text-align:left;">
                <p>
                    By proceeding with this payment, you agree to our
                    <a href="<?php echo base_url()."cancellation_policy"?>" target="_blank">Cancellation Policy</a>.
                </p>
            </div>
          </div> -->
          <div class="form-row">
            <p style="font-size: 0.9em;" class="policy">
                <!-- <span><input type="checkbox" class="form-check-input" value="1" id="clpolicy" name="clpolicy">&nbsp;</span> -->
                <!-- <span style="display: inline-block; text-align: left !important;"> -->
                    By proceeding with this payment, you agree to our
                    <a href="<?php echo base_url()."cancellation_policy"?>" target="_blank" style="/*!color:#ff6600!*/">Cancellation Policy</a>.
                <!-- </span> -->
            </p>


            <div class="form-group col-xs-12 col-sm-12 col-md-4 col-lg-4">
              <button type="button" class="btn btn-primary returnButton ripple" onclick="goBack()" style="width:100%; !important"><strong><div id="loader" style="display:none"></div>PREVIOUS</strong></button>
            </div>
            <div class="form-group col-xs-12 col-sm-12 col-md-8 col-lg-8">
              <button type="submit" class="btn btn-primary blockedButton ripple" id="sub" name="submit" style="width:100% !important; float:right;"><strong><div id="loader" style="display:none"></div>PROCEED TO PAYMENT</strong></button>
            </div>
            <!-- <span class="INFO">TRANSACTION INFO</span> -->
          </div>
        </div>
      </form>
      </div>
        <!-- [ Progress Bar ] -->
        <!-- <div class="progress mt-4" style="width:100%; height: 8px; position: absolute; bottom: -20px; left: 0; right: 0; /*!top:0px;*/ border-radius: 0px 0px 5px 5px; /*!border-radius: 5px 5px 0px 0px;*/">
              <div id="progressBar" class="progress-bar progress-bar-custom" style="width: 50%;"></div>
        </div> -->
          <!--circle progrss-->
          <!-- <div class="step-container" style="position: absolute; bottom: -20px; left: 0; right: 0; top:520px; border-radius: 0px 0px 5px 5px; /*!border-radius: 5px 5px 0px 0px;*/">
            <div id="act1" class="step active">
              <div id="c1" class="circle"></div>
            </div>
            <div id="line" class="line"></div>
            <div id="act2" class="step">
              <div id="c2" class="circle"></div>
            </div>
          </div> -->
    </div>
  </div>

    <!-- Dashed border overlay card -->
    <!-- <div class="col-xs-10 col-sm-8 col-md-6 mx-auto dashed-card"></div> -->
    <div class="col-xs-10 col-sm-8 col-md-6 mx-auto dashed-card" style="/*!background: linear-gradient( 135deg, rgb(43, 56, 143) 0%, rgb(0, 32, 82) 100% );!*/">
        <div class="progress mt-4" style="width:100%; height: 8px; position: absolute; bottom: -29px; left: 0; right: 0; /*!top:0px;*/ border-radius: 0px 0px 8px 8px; /*!border-radius: 5px 5px 0px 0px;*/">
            <div id="progressBar" class="progress-bar progress-bar-custom" style="width: 50%;"></div>
        </div>
    </div>
    <div class="col-xs-10 col-sm-8 col-md-6 mx-auto head-card"></div>
</div>












<!--otp-->
<!--MODAL-->
<div id="OtpModalVerifaciton" class="modal fade modal-backdrop-new" role="dialog" data-backdrop="static" data-keyboard="false" style="/*!padding-top:150px;background: rgba(0, 0, 0, 0.5);!*/">
    <div class="modal-dialog modal-md">
        <!-- Modal content-->
        <div class="modal-content">
            <div id="headerotp" style="height:140px; display: flex; align-items: center; justify-content: center; flex-direction: column; text-align: center;">
              <h1 class="modal-title"><strong>OTP VERIFICATION</strong></h1>
              <h6><p>Enter the verification code sent to <strong>+63 <span id="cont"></span></strong></p></h6>
            </div>
            <!-- Modal body content -->
            <div class="modal-body">
                <div align="center">
                  <div>
                    <form id="OTP" >
                          <div class="otp-inputs">
                            <input type="text" name="otpbox[]" maxlength="1" class="otp-box form-control" />
                            <input type="text" name="otpbox[]" maxlength="1" class="otp-box form-control" />
                            <input type="text" name="otpbox[]" maxlength="1" class="otp-box form-control" />
                            <input type="text" name="otpbox[]" maxlength="1" class="otp-box form-control" />
                            <input type="text" name="otpbox[]" maxlength="1" class="otp-box form-control" />
                            <input type="text" name="otpbox[]" maxlength="1" class="otp-box form-control" />
                          </div>
                          <div hidden>
                              <input type="text" name="ref" id="ref" hidden/>
                          </div>
                          <div>
                              <input type="text" name="otp" id="otp" hidden/>
                              <label for="amount" hidden>Amount</label>
                          </div>
                    </form>
                  </div>
                </div>
                <div id="otp-timer" class="centered"><h5>OTP can be resent after <span id="countdown">60</span>s</h5></div>
                <div id="Resend" class="centered"  style="display:none;">
                  <span style="cursor:pointer;" onclick="OtpSecure('',document.getElementsByName('orderRef')[0].value);" style="float: center;">Resend OTP</span>
                </div>
            </div>
            <!--Modal footer content-->
            <div class="modal-footer  d-flex flex-wrap justify-content-center">
                    <!-- <a type="button" class="btn btn-primary returnButton ripple otp-buttonsize" href="<?php echo base_url()?>payments" > Cancel </a> -->
                    <!-- <button type="button" class="btn btn-primary returnButton ripple otp-buttonsize">Cancel</button>-->
                    <!-- <button type="submit" id="verify" class="btn btn-primary blockedButton otp-buttonsize" form="OTP" >Submit</button> -->
                     <a type="button" class="otpbtn cancel-otpbtn otp-buttonsize" href="<?php echo base_url()?>payments" > Cancel </a>                                     
                    <button type="submit" id="verify" class="otpbtn submit-otpbtn otp-buttonsize" form="OTP" >Submit</button>
            </div>
        </div>
    </div>
</div>
<!--END OF MODAL-->
<!--otp-->