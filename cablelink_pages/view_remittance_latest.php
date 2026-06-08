<div class="remittance">
	<div class="visible-xs visible-sm hidden-md">
    	<img style="width:100%" src="<?php echo base_url().'assets/img/remittance/remittance_sm.jpg' ?>" />
    </div>
    <div class="hidden-xs hidden-sm visible-md visible-lg">
    	<img style="width:100%" src="<?php echo base_url().'assets/img/remittance/remittance.jpg' ?>" />
    </div>
    <!-- <div class="container">
    	<p class="title">General Payment Reminders</p>
        <ol class="sub-title">
        	<li>Over-the-Counter payment
            	<ul>
                	<li class="details" style="padding-top:13px">- Always bring your Statement of Account (SOA) when paying thru accredited payment centers and Banks.</li>
                    <li class="details" style="padding-top: 13px">- Bayad Center, 7-11, GPRS.</li>
                </ul>
            </li>
            <li>Credit Card Payment (Two ways to pay)
            	<ul>
                    <li class="details" style="padding-top:13px"><span class="bold">- Auto Debit Arrangement -</span> Subscribers may enroll at any Cablelink satellite offices.</li>
                	<li class="details" style="padding-top:13px"><span class="bold">- Over-the-Counter -</span> Credit Card payment is accepted at selected Cablelink offices.</li>
                </ul>
            </li>
            <ul class="sub-title-cont">
                <li><strong>*Any Visa, MasterCard, AMEX and JCB</strong></li>
                <li><strong>* <span style="font-style:italic">(Parañaque, Las Piñas, Muntinlupa, Pateros and Imus)</span></strong></li>
    	    </ul></br>
            <li>For cheque payments please make your cheque payable to Cable Link and Holdings Corp.</li>
            <li>You can conveniently pay without your SOA at Cablelink satellite offices, at any branches of BDO, East West Bank, Unionbank,
                RCBC, Asia United Bank, Bank of Commerce and all branches of 7-11 and Touchpay.</li>
            <li>Payment can also be made via Digital payment Facilities  Gcash, Maya, Shopeepay, Grabpay, Peppermint, Bayad Online, Coinsph, Sold, justpayto,
                Diskartech, Juan Cash, We Chat, Baryacard.</li>
            <li>Payments made through payment centers, banks and credit cards will be credited to your account after 3 working days.</li>
        </ol>
    </div> -->
    <div class="container-fluid note">
    	<span><img src="<?php echo base_url().'assets/img/remittance/exclamation.png' ?>" />&nbsp;Always keep your proof of payment</span>
    </div>
    <!--new add for icons-->
    <!-- <div class="container"> -->
    <div class="container">
        <div class="col-lg-12">
            <div class="col-lg-10">
    	        <!-- <p class="title">Click an icon to view payment instructions</p> -->
                <p class="title">Click icon for payment  instructions</p>
            </div>
        </div>
        <div class="bank-card-wrapper">
             <div class="bank-card-container">


                 <div class="bank-card" data-toggle="modal" data-target="#bayadModal" data-bank="bayad">
                    <img src="<?php echo base_url().'assets/img/remittance/bayad.png' ?>" alt="ecpay">
                     <!-- <div class="bank-name">test</div> -->
                 </div>

                <div class="bank-card" data-toggle="modal" data-target="#bankModal" data-bank="BDO">
                    <img src="<?php echo base_url().'assets/img/remittance/bdo.png' ?>" alt="BDO">
                    <!-- <div class="bank-name">BDO</div> -->
                </div>


                <div class="bank-card" data-toggle="modal" data-target="#ecpay" data-bank="ecpay">
                    <img src="<?php echo base_url().'assets/img/remittance/ECPay.png' ?>" alt="ecpay">
                    <!-- <div class="bank-name">BDO</div> -->
                </div>

                <div class="bank-card" data-toggle="modal" data-target="#SEVEN-ELEVEN" data-bank="SEVEN-ELEVEN">
                    <img src="<?php echo base_url().'assets/img/remittance/7-Eleven.png' ?>" alt="7/11">
                    <!-- <div class="bank-name">BDO</div> -->
                </div>

                <div class="bank-card" data-toggle="modal" data-target="#touchpay" data-bank="touchpay">
                    <img src="<?php echo base_url().'assets/img/remittance/TouchPay.png'?>" alt="touchpay">
                    <!-- <div class="bank-name">BDO</div> -->
                </div>

                <div class="bank-card" data-toggle="modal" data-target="#eastwest" data-bank="eastwest">
                    <img src="<?php echo base_url().'assets/img/remittance/eastwest.png' ?>" alt="eastwest">
                    <!-- <div class="bank-name">BDO</div> -->
                </div>

                <div class="bank-card" data-toggle="modal" data-target="#BPI" data-bank="BPI">
                    <img src="<?php echo base_url().'assets/img/remittance/bpi.png' ?>" alt="BPI">
                    <!-- <div class="bank-name">BDO</div> -->
                </div>

                <div class="bank-card" data-toggle="modal" data-target="#unionbank" data-bank="unionbank">
                    <img src="<?php echo base_url().'assets/img/remittance/unionbank.png' ?>" alt="unionbank">
                    <!-- <div class="bank-name">BDO</div> -->
                </div>

                <div class="bank-card" data-toggle="modal" data-target="#RCBC" data-bank="rcbc">
                    <img src="<?php echo base_url().'assets/img/remittance/RCBC Blue-01.png' ?>" alt="rcbc">
                    <!-- <div class="bank-name">BDO</div> -->
                </div>
                 
                <div class="bank-card" data-toggle="modal" data-target="#bancnet" data-bank="bancnet">
                    <img src="<?php echo base_url().'assets/img/remittance/Bancnet.png' ?>" alt="bancnet">
                    <!-- <div class="bank-name">BDO</div> -->
                </div>

                <div class="bank-card" data-toggle="modal" data-target="#cards" data-bank="cards">
                    <img src="<?php echo base_url().'assets/img/remittance/visa-master.png' ?>" alt="Any Visa, MasterCard, AMEX and JCB">
                    <!-- <div class="bank-name">BDO</div> -->
                </div>

                <div class="bank-card" data-toggle="modal" data-target="#aub" data-bank="aub">
                    <img src="<?php echo base_url().'assets/img/remittance/aub.png' ?>" alt="aub">
                    <!-- <div class="bank-name">BDO</div> -->
                </div>

                <div class="bank-card" data-toggle="modal" data-target="#gcash" data-bank="gcash">
                    <img src="<?php echo base_url().'assets/img/remittance/gcash.png'?>" alt="gcash">
                    <!-- <div class="bank-name">BDO</div> -->
                </div>

                <div class="bank-card" data-toggle="modal" data-target="#cliqq" data-bank="cliqq">
                    <img src="<?php echo base_url().'assets/img/remittance/cliqq.png'?>" alt="cliqq">
                    <!-- <div class="bank-name">BDO</div> -->
                </div>

                <div class="bank-card" data-toggle="modal" data-target="#lazada" data-bank="lazada">
                    <img src="<?php echo base_url().'assets/img/remittance/lazada.jpg'?>" alt="lazada">
                    <!-- <div class="bank-name">BDO</div> -->
                </div>

                <div class="bank-card extra" data-toggle="modal" data-target="#shopeepay" data-bank="shopeepay">
                    <img src="<?php echo base_url().'assets/img/remittance/shopeepay.png'?>" alt="shopeepay">
                    <!-- <div class="bank-name">BDO</div> -->
                </div>

                <div class="bank-card  extra" data-toggle="modal" data-target="#grabpay" data-bank="grabpay">
                    <img src="<?php echo base_url().'assets/img/remittance/GrabPay.jpg'?>" alt="grabpay">
                    <!-- <div class="bank-name">BDO</div> -->
                </div>

                <div class="bank-card  extra" data-toggle="modal" data-target="#maya" data-bank="maya">
                    <img src="<?php echo base_url().'assets/img/remittance/maya.png'?>" alt="maya">
                    <!-- <div class="bank-name">BDO</div> -->
                </div>

                <div class="bank-card  extra" data-toggle="modal" data-target="#coinsph" data-bank="coinsph">
                    <img src="<?php echo base_url().'assets/img/remittance/coinsph.jpg'?>" alt="coinsph">
                    <!-- <div class="bank-name">BDO</div> -->
                </div>

                <div class="bank-card  extra" data-toggle="modal" data-target="#juancash" data-bank="juancash">
                    <img src="<?php echo base_url().'assets/img/remittance/juancash.webp'?>" alt="juancash">
                    <!-- <div class="bank-name">BDO</div> -->
                </div>

                <div class="bank-card  extra" data-toggle="modal" data-target="#diskartech" data-bank="diskartech">
                    <img src="<?php echo base_url().'assets/img/remittance/DISKARTECH.png'?>" alt="diskartech">
                    <!-- <div class="bank-name">BDO</div> -->
                </div>

                <div class="bank-card  extra" data-toggle="modal" data-target="#peppermint" data-bank="peppermint">
                    <img src="<?php echo base_url().'assets/img/remittance/peppermint.svg'?>" alt="perppermint">
                    <!-- <div class="bank-name">BDO</div> -->
                </div>

                <div class="bank-card  extra" data-toggle="modal" data-target="#justpayto" data-bank="justpayto">
                    <img src="<?php echo base_url().'assets/img/remittance/justpayto.png'?>" alt="justpayto">
                    <!-- <div class="bank-name">BDO</div> -->
                </div>

                <div class="bank-card  extra" data-toggle="modal" data-target="#wechatpay" data-bank="wechatpay">
                    <img src="<?php echo base_url().'assets/img/remittance/wechat.png'?>" alt="wechatpay">
                    <!-- <div class="bank-name">BDO</div> -->
                </div>

                <div class="bank-card  extra" data-toggle="modal" data-target="#alipay" data-bank="alipay">
                    <img src="<?php echo base_url().'assets/img/remittance/alipay.png'?>" alt="alipay">
                    <!-- <div class="bank-name">BDO</div> -->
                </div>


             </div>
        </div>
    </div>


    <div class="container text-right">
       <div class="col-lg-12 vert">
             <button id="viewMoreBtn" class="view-more-btn">
                View More
            </button>
        </div>
    </div>
    <!--new add for icons-->


<!--online payment pesopay-->

    <!-- <div class="text-center">
        <ul class="list-inline nav-tabs-custom-rounded switchable-tabs" >
            <li class="active"><a class="link" href="#" rel="onlinepayment">Oneline Payment</a></li>
            <li><a class="link" href="#" rel="autodebitarrangement">Auto Debit Arrangement</a></li>
        </ul>
    </div> -->
    

    <!-- <div class="container">
        <div class="content" id="onlinepayment">
            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true"> -->

<div class="clearfix custom-bg" style="background-color: #f4f7fb; /*!background-color: #589df985;*/ padding: 35px 0 45px 0; overflow: hidden;">
<div class="container fade-in-up">
<!--<div class="container-fluid">--> <!--old class parent-->
    <!-- <div class="row mt-5"> -->
      <!-- <div class="col-12 payment-header" style="/*!margin-top:60px;*/margin-top:20px">
        <h1><strong>Online Payment</strong></h1>
      </div> -->
        <div class="/*!text-center*/">
            <ul class="list-inline nav-tabs-custom-rounded switchable-tabs" >
                <li class="active"><button class="link" href="#" rel="onlinepayment" >Online Payment</button></li>
                <li><button class="link" href="#" rel="autodebitarrangement" style="width:100%">Auto Debit Arrangement</button></li>
                <!-- <a class="Separate  slide-in-right" href="<?php echo base_url().'offices' ?>"><i class="glyphicon glyphicon-map-marker" style="/*!color:#ca3130*/"></i> Office payment</a> -->
            </ul>
        </div>
    <!-- </div> -->


    <div class="content" id="onlinepayment">
        <div class="row justify-content-center center-all" style="height:500px;padding: 0; margin:0px !important;"><!--740-->
            <!-- <div class="col-lg-8 visible-lg" style="padding:0px">
                <div class="simple-card">
                    <p>Image Content</p>
                </div>
            </div> -->
            <div class="col-xs-12 col-sm-12 col-md-12 /*!col-lg-4*/ col-lg-18 mx-auto form-container custom-width" style="height:500px;"><!--latest:571 old:580-->
                <!-- <div class="col-lg-4"></div> -->
                <div class="col-lg-2"></div>
                <div class="col-lg-8 /!*col-lg-offset-2*/ custom-card"> 
                    <form class="validate-form" name="payFormCcard" id="payFormCcard" method="post" action="https://www.pesopay.com/b2c2/eng/payment/payForm.jsp">
                        <div class="row eq-row" style="height:130px !important; /!*padding: 40px 0px 100px 0px; height:100px*/">
                            <div id="step1instruct">
                                <div class="smfont" style="font-size:24px; font-weight: 600; letter-spacing:1.3px; text-align:center; /*!color:#ffffff;!*/">
                                  Personal Information
                                  <hr  class="anim" style="margin-top: 10px; border-color:#3d527e !important;" ></hr>
                                </div>
                                <div class="eq-row helperText custom-label" style="font-weight:300 !important; top:90px !important; font-size:11px !important; /*!color:#ffffff; !important;!*/"><!--row eq-row  color:#7F7F7F;-->
                                    <label >Please provide your first name, last name, and contact number.</label>
                                </div>
                            </div>
                    
                            <div id="step2instruct" style="display: none;">
                                <div style="font-size:24px; font-weight: 600; letter-spacing:1.3px; text-align:center; /*!color:#ffffff;!*/">
                                   Payment Details
                                  <hr  class="anim" style="margin-top: 10px; border-color:#3d527e !important;" ></hr>
                                </div>
                                <div class="eq-row helperText custom-label" style="top:90px !important; font-size:11px !important; /*!color:#ffffff; !important;!*/"><!--row eq-row  color:#7F7F7F;-->
                                    <label >Please enter your 9-digit account number and the amount to proceed with the payment.</label>
                                </div>
                            </div>
                        </div>
                    
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
                                  <input type="text" name="customer_phone" class="fieldform /!*su887*/" id="customer_phone" style="width:100% !important;" value="" data-toggle="popover" placeholder="">
                                  <label for="amount" class="floating-label /!*always-float*/">Mobile Number</label>
                              </div>
                            </div>
                    
                            <div class="form-row">
                              <div class="form-group col-xs-12 floating-label-group">
                                 <button type="button" class="btn btn-primary blockedButton ripple" id="next" name="submit"  onclick="showStep2()" style="width:100%;"><strong><div id="loader" style="display:none"></div>NEXT STEP</strong></button>
                              </div>
                            </div>
                        </div>
                    
                        <div id="step2" style="display: none;">
                            <div class="form-row">
                                <div class="form-group col-lg-12 floating-label-group" style="padding-bottom:20px;">
                                      <input type="text" name="customer_account_id" class="fieldform" id="customer_account_id"  style="width:100% !important;" data-toggle="popover" placeholder=" " value="" >
                                      <label for="amount">Account No.</label>
                                </div>
                                <div class="form-group col-lg-12 floating-label-group" style="padding-bottom:30px;">
                                      <input type="text" name="amount" class="fieldform" id="amount" style="width:100% !important;" value="" data-toggle="popover" placeholder="0.00">
                                      <label for="amount">Amount</label>
                                </div>
                            </div>
                    
                            <input type="hidden" name="merchantId" value="">
                            <input type="hidden" name="orderRef" value="">
                            <input type="hidden" name="currCode" value="" >
                            <input type="hidden" name="mpsMode" value="" >
                            <input type="hidden" name="successUrl" value="<?php echo base_url().'payments/success'; ?>">
                            <input type="hidden" name="failUrl" value="<?php echo base_url().'payments/failed'; ?>">
                            <input type="hidden" name="cancelUrl" value="<?php echo base_url().'payments/cancel'; ?>">
                            <input type="hidden" name="payType" value="">
                            <input type="hidden" name="lang" value="">
                            <input type="hidden" name="payMethod" value="">
                            <input type="hidden" name="secureHash" value="">
                    
                            <div class="form-row">
                              <p style="font-size: 0.9em;" class="policy">
                                      By proceeding with this payment, you agree to our
                                      <a href="<?php echo base_url()."cancellation_policy"?>" target="_blank" style="color:#ff6600">Cancellation Policy</a>.
                              </p>
                    
                    
                              <div class="form-group col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                <button type="button" class="btn btn-primary returnButton ripple" onclick="goBack()" style="width:100%; !important"><strong><!--<div id="loader" style="display:none"></div>-->PREVIOUS</strong></button>
                              </div>
                              <div class="form-group col-xs-12 col-sm-12 col-md-8 col-lg-8">
                                <button type="submit" class="btn btn-primary blockedButton ripple" id="sub" name="submit" style="width:100% !important; float:right;"><strong><div id="loader" style="display:none"></div>PROCEED TO PAYMENT</strong></button>
                              </div>
                            </div>
                        </div>
                    </form>
                    <!-- <div class="progress mt-4 progbor" style="width:100%; height: 8px; position: absolute; bottom: -29px; left: 0; right: 0; /*!top:0px;*/ border-radius: 0px 0px 8px 8px; /*!border-radius: 5px 5px 0px 0px;*/">
                        <div id="progressBar" class="progress-bar progress-bar-custom" style="width: 50%;"></div>
                    </div> -->
                </div>
                <!-- <div class="progress mt-4 progbor" style="width:100%; height: 8px; position: absolute; bottom: -29px; left: 0; right: 0; /*!top:0px;*/ border-radius: 0px 0px 8px 8px; /*!border-radius: 5px 5px 0px 0px;*/">
                    <div id="progressBar" class="progress-bar progress-bar-custom" style="width: 50%;"></div>
                </div> -->
            </div>
            <!-- <div class="col-lg-4 visible-lg" style="padding:0px"><div class="simple-card"></div></div> -->
        </div>
    </div>

    <div class="content hidden" id="autodebitarrangement">
        <div class="col-xs-12 col-sm-12 col-md-12 /*!col-lg-4*/ col-lg-18 mx-auto form-container custom-width" style="/*!height:500px*/;"><!--571 580-->
            <!-- <div class="container" style="max-width: 726px; /!*margin-top: 30px;*/"> -->
                <div class="col-lg-2"></div>
                <div class="col-lg-8 /!*col-lg-offset-2*/ custom-card"> 

                    <form class="validate-form" name="ada" id="ada">

                        <div class="row eq-row" style="height:130px !important; /*!padding: 40px 0px 100px 0px; height:100px*/ height:80px !important;">
                            <div id="step1instruct">
                                <div class="smfont" style="font-size:24px; font-weight: 600; letter-spacing:1.3px; text-align:center; /*!color:#ffffff;!*/">
                                  Auto Debit Arrangement
                                  <hr  class="anim" style="margin-top: 10px; border-color:#3d527e !important;" ></hr>
                                </div>
                            </div>
                        </div>

                        <div id="step1">
                            <div class="form-row">
                                <div class="form-group col-md-6 floating-label-group" style="padding-bottom:20px;">
                                      <input type="text" name="account_number" style="width:100% !important;" class="fieldform" id="account_number" value="" data-toggle="popover" placeholder=" ">
                                      <label for="amount">Account Number</label>
                                </div>
                                <div class="form-group col-md-6 floating-label-group" style="padding-bottom:20px;">
                                      <input type="text" name="account_name"  style="width:100% !important;" class="fieldform" id="account_name" value="" data-toggle="popover" placeholder=" ">
                                      <label for="amount">Account Name</label>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-6 floating-label-group" style="padding-bottom:20px;">
                                      <input type="text" name="card_number" style="width:100% !important;" class="fieldform" id="card_number" value="" data-toggle="popover" placeholder=" ">
                                      <label for="amount">Card Number</label>
                                </div>
                                <div class="form-group col-md-6 floating-label-group" style="padding-bottom:20px;">
                                      <input type="text" name="card_expiry"  style="width:100% !important;" class="fieldform" id="card_expiry" value="" data-toggle="popover" placeholder=" ">
                                      <label for="amount">Card Expiry</label>
                                </div>
                            </div>

                            <!-- <div class="form-row">
                                <div class="form-group col-md-12 floating-label-group" style="padding-bottom:20px;">
                                      <input type="file" name="valid_ID" style="width:100% !important;" class="fieldform" id="valid_ID" value="" data-toggle="popover" placeholder=" ">
                                      <label for="amount">Attach Valid ID</label>
                                </div>
                            </div> -->

                            <div class="form-check">
    		                	<label class="form-check-label" for="dprivacy"><span><input type="checkbox" class="form-check-input" value="1" id="dprivacy" name="dprivacy">&nbsp;</span>
			                	I, a credit cardholder, hereby enroll in the auto-charge facility with Cable Link and Holdings Corp and authorize the payment of all subscription fees associated with my account number(s) stated herein. These fees will be charged to my credit card account. Should my credit limit not be sufficient to cover my cable subscription fees, Cable Link Holdings will have the right to collect the outstanding amount directly from me.
                                </label>
                                <label>This authorization will remain valid until canceled by me in writing to Cable Link or by Cable Link itself.</label>
                                <label>certify that the information provided in this application form is true and accurate. I allow Cable Link to use this information, along with any supporting documents I have provided, for communication related to my application process, managing my subscription, or for cross-marketing purposes. I am assured that my information will be treated with the utmost confidentiality in accordance with the guidelines established under the Republic Act 10173</label>
                                <label> - Data Privacy Act of 2012.</label>
  		                    </div>		    

                            <div class="reminder">
                                    <p>By clicking "Submit", I agree to Cablelinks's <a href="<?php echo base_url().'dataprivacy'; ?>" id="dataprivacy" target="_blank">Privacy Policy</a></p>
                            </div>

                            <div class="form-row">
                              <div class="form-group col-xs-12 floating-label-group">
                                 <button type="submit" class="btn btn-primary blockedButton ripple" id="adasubmit" name="adasubmit" onclick="" style="width:100%;"><strong><div id="loader" style="display:none"></div>Submit</strong></button>
                              </div>
                            </div>
                        </div>

                        <!-- Submit Button -->
                        <!-- <button type="submit" class="btn btn-success btn-block">Apply for Auto Debit</button> -->
                    </form>
                </div>
            <!-- </div> -->
        </div>
    </div>

</div>
</div>

 
    <!-- <div class="col-xs-10 col-sm-8 col-md-6 mx-auto dashed-card" style="/*!background: linear-gradient( 135deg, rgb(43, 56, 143) 0%, rgb(0, 32, 82) 100% );!*/">
          <div class="progress mt-4 progbor" style="width:100%; height: 8px; position: absolute; bottom: -29px; left: 0; right: 0; /*!top:0px;*/ border-radius: 0px 0px 8px 8px; /*!border-radius: 5px 5px 0px 0px;*/">
                <div id="progressBar" class="progress-bar progress-bar-custom" style="width: 50%;"></div>
          </div>
    </div> -->
    <!-- <div class="col-xs-10 col-sm-8 col-md-6 mx-auto head-card"></div> -->
</div>
<!--End of online payment pesopay-->


    <!-- <div class="container-fluid note">
    	<span><img src="<?php echo base_url().'assets/img/remittance/exclamation.png' ?>" />&nbsp;Always keep your proof of payment</span>
    </div> -->

 <!--   <div class="container">

        <p class="title">Payment Centers</p>
<--comment
        <div class="table-responsive">
            <table class="table table-condensed table-pc">
                <thead>
                	<tr class="first-head">
                    	<th rowspan="4">Payment Centers</th>
                        <th colspan="2">Mode of payment accepted</th>
                        <th colspan="2">Accepting payments for</th>
                    </tr>
                    <tr class="second-head">
                    	<th colspan="2" class="grey">Over-the-Counter</th>
                        <th rowspan="2">Cablelink</th>
                        <th rowspan="2">I-Blaze Internet</th>
                    </tr>
                    <tr class="third-head">
                        <th style="padding:2px">Cash</th>
                        <th style="padding:2px">Dated Cheque</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><img src="<?php echo base_url().'assets/img/remittance/SM.png' ?>" /></td>
                        <td class="check"></td>
                        <td class="check"></td>
                        <td class="check"></td>
                        <td class="check"></td>
                    </tr>
                    <tr>
                        <td><div class="pc-logo"><img class="" src="<?php echo base_url().'assets/img/remittance/7-Eleven.png' ?>" /><div class="asterisk-711">*</div></div></td>
                        <td class="check"></td>
                        <td></td>
                        <td class="check"></td>
                        <td class="check"></td>
                    </tr>
                    <tr>
                        <td><img src="<?php echo base_url().'assets/img/remittance/LBC.png' ?>" /></td>
                        <td class="check"></td>
                        <td class="check"></td>
                        <td class="check"></td>
                        <td class="check"></td>
                    </tr>
                    <tr>
                        <td><div class="bc-logo"><a href="<?php echo base_url()?>Paymentfacilities/viewsite"> <img src="<?php echo base_url().'assets/img/remittance/Bayad Center.png' ?>" /></a><div class="asterisk-bayadcenter">**</div></div></td>
                        <td class="check"></td>
                        <td class="check"></td>
                        <td class="check"></td>
                        <td class="check"></td>
                    </tr>
                </tbody>
            </table>
         </div>
         <div class="table-responsive">
             <table class="table table-bc">
                <thead>
                	<tr class="first-head">
                    	<th rowspan="4">Payment Centers</th>
                        <th colspan="4">Mode of payment accepted</th>
                        <th colspan="2">Accepting payments for</th>
                    </tr>
                    <tr class="second-head">
                    	<th colspan="2" class="grey">Over-the-Counter</th>
                        <th rowspan="2">Online</th>
                        <th rowspan="2">ATM</th>
                        <th rowspan="2">Cablelink</th>
                        <th rowspan="2">I-Blaze Internet</th>
                    </tr>
                    <tr class="third-head">
                        <th style="padding:2px">Cash</th>
                        <th style="padding:2px">Dated Cheque</th>
                        
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><img src="<?php echo base_url().'assets/img/remittance/AUB.png' ?>" /></td>
                        <td class="check"></td>
                        <td class="check"></td>
                        <td class="check"></td>
                        <td></td>
                        <td class="check"></td>
                        <td class="check"></td>
                    </tr>
                    <tr>
                        <td><div class="bc-logo"><img src="<?php echo base_url().'assets/img/remittance/BDO.png' ?>" /> <div class="asterisk-BDO" style="">*</div></div></td>
                        <td class="check"></td>
                        <td class="check"></td>
                        <td class="check"></td>
                        <td class="check"></td>
                        <td class="check"></td>
                        <td class="check"></td>
                    </tr>
                    <tr>
                        <td><div class="bc-logo"><img src="<?php echo base_url().'assets/img/remittance/BPI.png' ?>" /> <div class="asterisk-BPI">*</div></div></td>
                        <td></td>
                        <td></td>
                        <td>
                        	<img style="margin-top:35px" src="<?php echo base_url().'assets/img/remittance/check.png' ?>" />
                        <p style="font-size:11px; padding-top:10px; line-height:12px; color:#19347D"><strong>* w/ phone banking facility</strong></p></td>
                        <td></td>
                        <td class="check"></td>
                        <td class="check"></td>
                    </tr>
                    <tr>
                        <td><div class="bc-logo"><img src="<?php echo base_url().'assets/img/remittance/Bancnet.png' ?>" /> <div class="asterisk-bancnet">*</div></div></td>
                        <td></td>
                        <td></td>
                        <td class="check"></td>
                        <td></td>
                        <td class="check"></td>
                        <td class="check"></td>
                    </tr>
                    <tr>
                        <td><img src="<?php echo base_url().'assets/img/remittance/Bankcom.png' ?>" /></td>
                        <td class="check"></td>
                        <td class="check"></td>
                        <td class="check"></td>
                        <td></td>
                        <td class="check"></td>
                        <td class="check"></td>
                    </tr>
                    <tr>
                        <td><div class="bc-logo"><img src="<?php echo base_url().'assets/img/remittance/Eastwest.png' ?>" /> <div class="asterisk-eastwest">*</div></div></td>
                        <td class="check"></td>
                        <td class="check"></td>
                        <td class="check"></td>
                        <td class="check"></td>
                        <td class="check"></td>
                        <td class="check"></td>
                    </tr>
                    <tr>
                        <td><div class="bc-logo"><img src="<?php echo base_url().'assets/img/remittance/unionbank.png' ?>" /> <div class="asterisk-unionbank"></div></div></td>
                        <td class="check"></td>
                        <td></td>
                        <td class="check"></td>
                        <td></td>
                        <td class="check"></td>
                        <td class="check"></td>
                    </tr>
                </tbody>
             </table>
         </div>
          <ul class="sub-title-cont">
            <li><span class="asterisk">*</span> <strong>711, BDO, BPI, Bancnet & Eastwest Bank accepts payment for Antipolo.</strong></li>
            <li><span class="asterisk">*</span><span class="asterisk">*</span> <strong>Click BAYAD CENTER icon(<img src="<?php echo base_url().'assets/img/remittance/Bayad Center.png' ?>" width="10" height="10"/>) to view payment site available within Sta. Rosa, Laguna. </strong></li>
    	</ul>
    </div>  
</div>-->

    <!-- <div class="text-center"> -->
        <!-- data-aos="zoom-in" -->
        <!-- <ul class="list-inline nav-tabs-custom-rounded switchable-tabs" >
            <li class="active"><a class="link" href="#" rel="onlinepayment">ONLINE PAYMENT</a></li>
            <li><a class="link" href="#" rel="digitalpartners">DIGITAL PARTNERS</a></li>
            <li><a class="link" href="#" rel="otherpaymentcenter">PAYMENT CENTERS</a></li>
            <li><a class="link" href="#" rel="overthecounter">OVER-THE-COUNTER</a></li>
            <li><a class="link" href="#" rel="autodebit">AUTO DEBIT</a></li>
            <li><a class="link" href="#" rel="atm">ATM</a></li>
        </ul>
    </div> -->

    <!-- <div class="container">
        <div class="content" id="onlinepayment">
            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingOne">
                        <h3 class="panel-title collapsed custom-carlo" data-toggle="collapse" data-parent="#accordion" href="#bdo" aria-expanded="true" aria-controls="bdo">
                            <a role="button" > --
                             BDO
                            </a> --
                        </h3>
                    </div>
                    <div id="bdo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                    <div class="panel-body">
                        <strong>Here's how to pay your Cablelink bill thru BDO: </strong><br /><br />
                        <ol>
                            <li>Log in to your <strong>BDO Online Banking Account</strong> at <a href="https://online.bdo.com.ph">https://online.bdo.com.ph</a></li>
                            <li>Fill out the Enrollment Details and Submit. Once enrolled, go to Pay Bills and Reload > Bills Payment > Pay Bills</li>
                            <li>Fill out Payment Details and Click “Submit”</li>
                        </ol>
                    </div>
                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingTwo">
                    <h3 class="panel-title collapsed custom-carlo" data-toggle="collapse" data-parent="#accordion" href="#bpi" aria-expanded="false" aria-controls="bpi">
                      <a class="collapsed" role="button" > --
                       BPI
                      </a> --
                    </h3>
                </div>
                <div id="bpi" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                    <div class="panel-body">
                        <strong>Here's how to pay your Cablelink bill thru BPI: </strong><br /><br />
                        <ol>
                            <li>Must <strong>enroll</strong> first their BPI account in <strong>BPI Online Banking</strong></li>
                            <li><strong>Enroll </strong>the company / biller in <strong>BPI Online Banking</strong> for bills payment</li>
                            <li>Pay your bills online with BPI Online Banking</li>
                        </ol>
                    </div>
                </div>
            </div>

          
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingThree" >
                    <h3 class="panel-title collapsed custom-carlo" data-toggle="collapse" data-parent="#accordion" href="#rcbc" aria-expanded="false" aria-controls="rcbc">
                      <a class="collapsed" role="button"> --
                        RCBC
                      </a> --
                    </h3>
                </div>
                <div id="rcbc" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                    <div class="panel-body">
                        <strong>Here's how to pay your Cablelink bill thru RCBC: </strong><br/><br/>
                        <ol>
                            <li>Go to <a href="https://www.rcbconlinebanking.com">www.rcbconlinebanking.com</a> or use your RCBC Mobile App</li>
                            <li>Type your User ID & Password, click log-in and enter OTP</li>
                            <li>Go to “ Pay Bills “ Menu.</li>
                            <li>Select List of Billers, Choose “ CABLELINK”</li>
                            <li>Input required information and enter the amount to be paid, then click “SUBMIT” button.</li>
                            <li>Then Proceed to Payment and Input OTP.</li>
                            <li>Wait for RCBC confirmation on payment via SMS/Email.</li>
                        </ol>
                    </div>
                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingThree">
                    <h3 class="panel-title collapsed custom-carlo" data-toggle="collapse" data-parent="#accordion" href="#eastwest" aria-expanded="false" aria-controls="eastwest">
                      <a class="collapsed" role="button"> --
                        EASTWEST
                      </a> --
                    </h3>
                </div>
                <div id="eastwest" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                    <div class="panel-body">
                        <strong>Here's how to pay your Cablelink bill thru EASTWEST: </strong><br/><br/>
                        <ol>
                            <li>Simply register your <strong>Eastwest Deposit Account</strong> in <a href="https://www.eastwestbanker.com">https://www.eastwestbanker.com</a></li>
                            <li>Log in and choose <strong>Cablelink</strong> from the enrolled list of Biller, enter the amount then <strong>“Confirm”</strong></li>
                        </ol>
                    </div>
                </div>
            </div> -->

<!--  UCPB comment
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingThree">
                    <h3 class="panel-title collapsed custom-carlo"  data-toggle="collapse" data-parent="#accordion" href="#ucpb" aria-expanded="false" aria-controls="ucpb">
                        UCPB
                                          </h3>
                </div>
                <div id="ucpb" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                    <div class="panel-body">
                        <strong>Here's how to pay your Cablelink bill thru UCPB: </strong><br/><br/>
                        <ol>
                            <li>Open your UCPB Bank App , Log-in your user and password.</li>
                            <li>Enter OTP VIA SMS or EMAIL.</li>
                            <li>Click " Pay Bills " Select biller " CABLELINK"</li>
                            <li>Enter the required information.</li>
                            <li>Review all the details. then click PAY</li>
                            <li>Wait for the UCPB confirmation on payment via SMS.</li>
                        </ol>
                    </div>
                </div>
            </div>
 -->
<!-- robinson comment
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingThree">
                    <h3 class="panel-title collapsed custom-carlo" data-toggle="collapse" data-parent="#accordion" href="#robinsonbank" aria-expanded="false" aria-controls="robinsonbank">
                        ROBINSON BANK
                    </h3>
                </div>
                <div id="robinsonbank" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                    <div class="panel-body">
                        <strong>Here's how to pay your Cablelink bill thru ROBINSON BANK: </strong><br/><br/>
                        <ol>
                            <li>Open your Robinson's Bank App , Log-in your user and password.</li>
                            <li>Click New Payment, then choose biller " CABLELINK ".</li>
                            <li>Enter the required information and enter the amount to be paid.</li>
                            <li>Review all the details, Then click pay.</li>
                            <li>Wait for the Robinson's bank confirmation on payment via SMS.</li>
                        </ol>
                    </div>
                </div>
            </div>
-->
            <!-- <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingThree">
                    <h3 class="panel-title collapsed custom-carlo" data-toggle="collapse" data-parent="#accordion" href="#unionbank" aria-expanded="false" aria-controls="unionbank">
                      <a class="collapsed" role="button"> --
                        UNION BANK
                      </a> --
                    </h3>
                </div>
                <div id="unionbank" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                    <div class="panel-body">
                        <strong>Here's how to pay your Cablelink bill thru UNION BANK: </strong><br/><br/>
                        <ol>
                            <li>Open your Union Bank App. Tap Pay bills</li>
                            <li>Select biller ,Choose biller " CABLELINK"</li>
                            <li>Enter the required information. then tap next</li>
                            <li>Choose Bank Account ( DEBIT) .</li>
                            <li>Enter the amount to be paid then tap next.</li>
                            <li>Review all the details, then tap "Pay"</li>
                            <li>Wait for the Unionbank confirmation on payment via SMS.</li>
                        </ol>
                    </div>
                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingThree">
                    <h3 class="panel-title collapsed custom-carlo" data-toggle="collapse" data-parent="#accordion" href="#bancnet" aria-expanded="false" aria-controls="bancnet">
                      <a class="collapsed" role="button"> --
                        BANCNET
                      </a> --
                    </h3>
                </div>
                <div id="bancnet" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                    <div class="panel-body">
                        <strong>Here's how to pay your Cablelink bill thru BANCNET: </strong><br/><br/>
                        <ol>
                            <li>Log on to <a href="https://www.bancnetonline.com">https://www.bancnetonline.com</a></li>
                            <li>On the homepage, click on your bank</li>
                            <li>Read the agreement in using Bancnet Online and Click the “I Agree” button if you agree with the Terms and Conditions</li>
                            <li>Click on “Payment”</li>
                            <li>Fill out the required fields:</li>
                            <ul>
                                <li>Biller/Institution</li>
                                <li>Account/ Subscriber Number</li>
                                <li>Bank Name</li>
                                <li>ATM Card Number</li>
                                <li>Member Number</li>
                                <li>Account Type: Savings or Check</li>
                                <li>Amount To Be Paid</li>
                            </ul>
                            <li>Enter your ATM PIN on the onscreen keypad</li>
                            <li>Click the Submit Button</li>
                            <li>Details of your transaction will prompt on screen, once verified that they are all correct, click “OK”</li>
                            <li>You may print the screen that shows your transaction details as your transaction receipt or click “Close” to conclude the transaction</li>
                        </ol>
                    </div>
                </div>
            </div>


            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingThree">
                    <h3 class="panel-title collapsed custom-carlo" data-toggle="collapse" data-parent="#accordion" href="#asiaunitedbank" aria-expanded="false" aria-controls="asiaunitedbank">
                        <a class="collapsed" role="button"> --
                          ASIA UNITED BANK
                        </a> --
                    </h3>
                </div>
                <div id="asiaunitedbank" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                    <div class="panel-body">
                        <strong>Here's how to pay your Cablelink bill thru ASIA UNITED BANK: </strong><br/><br/>
                        <ol>
                            <li>Log on to <a href="https://www.aub.com.ph">https://www.aub.com.ph</a> enter your user name and and password</li>
                            <li>Under the transaction menu, click “Bills Payment”</li>
                            <li>Choose the AUB account from which the payment will come from</li>
                            <li>Under the biller institution/Merchant, choose <strong>“Cablelink and Holdings Corp"</strong></li>
                            <li>Enter your account information and amount. Click “Pay” to confirm payment</li>
                        </ol>
                        <strong>Note: You should receive a confirmation email from AUB if payment is successful</strong>
                    </div>
                </div>
            </div>


        </div>
    </div> -->


    <!-- <div class="container">
        <div class="content hidden" id="otherpaymentcenter">
            <div class="panel-group" id="accordion1" role="tablist" aria-multiselectable="true"> -->
                <!-- <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingOne">
                        <h3 class="panel-title collapsed custom-carlo" data-toggle="collapse" data-parent="#accordion1" href="#sm" aria-expanded="true" aria-controls="sm"> -->
                          <!-- <a role="button" > -->
                           <!-- SM -->
                          <!-- </a> -->
                        <!-- </h3>
                    </div>
                    <div id="sm" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                        <div class="panel-body">
                            <strong>Here's how to pay your Cablelink bill thru SM: </strong><br /><br />
                                <ol>
                                    <li>Subscriber must bring their Statement of Account (SOA) for validation</li>
                                    <li>Accepts cash or dated cheque only</li>
                                </ol>
                        </div>
                    </div>
                </div> -->


                <!-- <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingOne">
                        <h3 class="panel-title collapsed custom-carlo" data-toggle="collapse" data-parent="#accordion1" href="#bayad" aria-expanded="true" aria-controls="bayad">
                          <a role="button" > --
                           BAYAD CENTER
                          </a> --
                        </h3>
                    </div>
                    <div id="bayad" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                        <div class="panel-body">
                            <strong>Here's how to pay your Cablelink bill thru BAYAD: </strong><br /><br />
                                <ol>
                                    <li>Subscriber/s should bring their Statement of Account ( SOA ) or ask the teller for " BILLS PAYMENT FORM" then indicate the required details such as ( Account number, Account name, and amount to be paid.</li>
                                    <li>Review all the details.</li>
                                    <li>Subscriber/s can settle the balance through <strong>CASH</strong> or <strong>DATED CHEQUE</strong>.</li>
                                    <li>Wait for the validation on your SOA or Bills payment form.</li>
                                    <li>Check if validated details are all correct before leaving the counter.</li>
                                </ol>
                        </div>
                    </div>
                </div>
                

                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingOne">
                        <h3 class="panel-title collapsed custom-carlo" data-toggle="collapse" data-parent="#accordion1" href="#truemoney" aria-expanded="true" aria-controls="truemoney">
                          <a role="button" > --
                           TRUE MONEY
                          </a> --
                        </h3>
                    </div>
                    <div id="truemoney" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                        <div class="panel-body">
                            <strong>Here's how to pay your Cablelink bill thru TRUE MONEY: </strong><br /><br />
                            <ol>
                                <li>Present your Statement of Account ( SOA ) or simply provide your account details.</li>
                                <li>Review all the details</li>
                                <li>Subscriber/s can settle the balance through CASH.</li>
                                <li>Wait for the validation on your SOA or Bills payment for.</li>
                                <li>Make sure all the details validated are correct.</li>
                            </ol>
                        </div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingOne">
                        <h3 class="panel-title collapsed custom-carlo" data-toggle="collapse" data-parent="#accordion1" href="#7eleven" aria-expanded="true" aria-controls="7eleven">
                            <a role="button" > --
                             7-ELEVEN
                            </a> --
                        </h3>
                    </div>
                    <div id="7eleven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                        <div class="panel-body">
                            <strong>Here's how to pay your Cablelink bill thru TRUE 7-ELEVEN: </strong><br /><br />
                            <ol>
                                <li>Go to any 7-11 branch and look for the Cliqq touch-screen payment kiosk. Select “Bills Payment” and display All Billers</li>
                                <li>Click “Cable and Internet”</li>
                                <li>Click “Cablelink”</li>
                                <li>Enter the account number and amount to be paid</li>
                                <li>Hand over your kiosk payment slip and cash (no checks please) to the cashier</li>
                            </ol>
                        </div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingOne">
                        <h3 class="panel-title collapsed custom-carlo" data-toggle="collapse" data-parent="#accordion1" href="#touchpay" aria-expanded="true" aria-controls="touchpay">
                            <a role="button" > --
                            TOUCHPAY
                            </a> --
                        </h3>
                    </div>
                    <div id="touchpay" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                        <div class="panel-body">
                            <strong>Here's how to pay your Cablelink bill thru TRUE TOUCHPAY: </strong><br /><br />
                            <ol>
                                <li>Look for Touchpay kiosk, at the screen, select “bills payment” and display All Billers</li>
                                <li>Click Cable and Internet</li>
                                <li>Click Cablelink</li>
                                <li>Enter the account number and amount to be paid</li>
                                <li>Disclaimer will appear on the screen, read and click “Continue if you agree”</li>
                                <li>Insert cash</li>
                                <li>Wait for the receipt for confirmation</li>
                            </ol>
                        </div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingOne">
                        <h3 class="panel-title collapsed custom-carlo" data-toggle="collapse" data-parent="#accordion1" href="#gprs" aria-expanded="true" aria-controls="gprs">
                            <a role="button" > --
                            GPRS 
                            </a> --
                        </h3>
                    </div>
                    <div id="gprs" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                        <div class="panel-body">
                            <strong>Here's how to pay your Cablelink bill thru TRUE GPRS : </strong><br /><br />
                            <ol>
                                <li>From GPRS (Unified) dashboard select “Pay bills”</li>
                                <li>Choose “Cablelink”</li>
                                <li>Input required information such</li>
                                <li>Enter the amount to be paid then click “Pay”</li>
                                <li>Wait for GPRS (Unified) confirmation of payment via SMS/ Email</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <div class="container">
        <div class="content hidden" id="digitalpartners">
            <div class="panel-group" id="accordion2" role="tablist" aria-multiselectable="true">
		<div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingOne">
                        <h3 class="panel-title collapsed custom-carlo" data-toggle="collapse" data-parent="#accordion2" href="#bayad1" aria-expanded="true" aria-controls="bayad1">
                            <a role="button" > --
                            BAYAD ONLINE
                            </a> --
                        </h3>
                    </div>
                    <div id="bayad1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                        <div class="panel-body">
                            <strong>Here's how to pay your Cablelink bill thru BAYAD ONLINE: </strong><br /><br />
                                <ol>
				    <li>Go to Bayad Online: <a href="https://www.online.bayad.com">https://www.online.bayad.com</a></li>
                                    <li>Log in to your Bayad Online account.</li>
                                    <li>On the 'BILLS PAYMENT' section, click 'Cable/Internet' then "CABLELINK".</li>
                                    <li>Fill out the required details and then review before payment. Tip: Enable the SAVE BILLER feature for your next payment.</li>
                                    <li>Wait for your payment confirmation receipt and you're done!.</li>
                                </ol>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingOne">
                        <h3 class="panel-title collapsed custom-carlo" data-toggle="collapse" data-parent="#accordion2" href="#shopee" aria-expanded="true" aria-controls="shopee">
                          <a role="button" > --
                           SHOPEE
                          </a> --
                        </h3>
                    </div>
                    <div id="shopee" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                        <div class="panel-body">
                            <strong>Here's how to pay your Cablelink bill thru SHOPEEPAY: </strong><br /><br />
                            <ol>
                                <li>Go to the Load, Bills & eServices, and then tap “TV Cable”</li>
                                <li>Select Cable Link under postpaid and add necessary details, and then tap “Continue”</li>
                                <li>Select the preferred payment method, and then tap “Confirm”</li>
                                <li>Tap “Pay now”. Once payment is successful, you will receive your order details</li>
                            </ol>
                        </div>
                    </div>
                </div>
           

                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingOne">
                        <h3 class="panel-title collapsed custom-carlo" data-toggle="collapse" data-parent="#accordion2" href="#paymaya" aria-expanded="true" aria-controls="paymaya">
                          <a role="button" > --
                           MAYA
                          </a> --
                        </h3>
                    </div>
                    <div id="paymaya" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                        <div class="panel-body">
                            <strong>Here's how to pay your Cablelink bill thru MAYA: </strong><br /><br />
                            <ol>
                                <li>Select “Pay Bills” on the homepage of the Maya App</li>
                                <li>Choose the biller “Cablelink”</li>
                                <li>Input the required information</li>
                                <li>Enter the amount to be paid</li>
                                <li>Confirm the payment</li>
                                <li>Wait for Maya's confirmation on your payment via SMS</li>
                            </ol>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingOne">
                        <h3 class="panel-title collapsed custom-carlo" data-toggle="collapse" data-parent="#accordion2" href="#diskartech" aria-expanded="true" aria-controls="diskartech">
                          <a role="button" > --
                           DISKARTECH
                          </a> --
                        </h3>
                    </div>
                    <div id="diskartech" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                        <div class="panel-body">
                            <strong>Here's how to pay your Cablelink bill thru DISKARTECH: </strong><br /><br />
                            <ol>
                                <li>Open Diskartech App and enter your 4- Digits Passcode</li>
                                <li>Select “Pay Bills” on the homepage of Diskartech App</li>
                                <li>Click Internet in the Category then choose “Cablelink”</li>
                                <li>Input the required information</li>
                                <li>Confirm the payment</li>
                                <li>Wait for Diskartech confirmation on your payment via SM</li>
                            </ol>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingOne">
                        <h3 class="panel-title collapsed custom-carlo" data-toggle="collapse" data-parent="#accordion2" href="#coinsph" aria-expanded="true" aria-controls="coinsph">
                          <a role="button" > --
                           COINS.PH
                          </a> --
                        </h3>
                    </div>
                    <div id="coinsph" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                        <div class="panel-body">
                            <strong>Here's how to pay your Cablelink bill thru COINS.PH: </strong><br /><br />
                            <ol>
                                <li>Sign up for an account</li>
                                <li>Choose an outlet to cash in</li>
                                <li>Tap the Pay Bills icon on the App</li>
                                <li>Select the “Cablelink”, input the required information and the amount</li>
                                <li>Slide to pay</li>
                                <li>Wait for the Coins.Ph confirmation on payment via SMS</li>
                            </ol>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingOne">
                        <h3 class="panel-title collapsed custom-carlo" data-toggle="collapse" data-parent="#accordion2" href="#peppermint" aria-expanded="true" aria-controls="peppermint">
                            <a role="button" > --
                            PEPPERMINT
                            </a> --
                        </h3>
                    </div>
                    <div id="peppermint" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                        <div class="panel-body">
                            <strong>Here's how to pay your Cablelink bill thru PEPPERMINT: </strong><br /><br />
                            <ol>
                                <li>Log-in on Peppermint Apps</li>
                                <li>On the home page select “Pay Bills”</li>
                                <li>Choose  “Cablelink”, Then input the required information</li>
                                <li>Click confirm payment</li>
                                <li>Wait for the Peppermint confirmation on payment via SMS</li>
                            </ol>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingOne">
                        <h3 class="panel-title collapsed custom-carlo" data-toggle="collapse" data-parent="#accordion2" href="#justpayto" aria-expanded="true" aria-controls="justpayto">
                            <a role="button" > --
                            JUSTPAYTO
                            </a> --
                        </h3>
                    </div>
                    <div id="justpayto" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                        <div class="panel-body">
                            <strong>Here's how to pay your Cablelink bill thru JUSTPAYTO: </strong><br /><br />
                            <ol>
                                <li>Visit the JUSTPAYTO Bayad Center Payment Page</li>
                                <li>Choose your type of bill</li>
                                <li>Choose “Cablelink”'</li>
                                <li>Fill up account details</li>
                                <li>Click “payment option”</li>
                                <li>Select “Online Banking”</li>
                                <li>Select where your bank is located</li>
                                <li>Select what type of Online Banking you will use</li>
                                <li>Choose what bank you will use</li>
                                <li>After verifying the inputs and check the “ Terms and Conditions” Click “Pay Now”</li>
                                <li>Enter your contact information then Click “OK”</li>
                                <li>Review transaction details then click “Confirm”</li>
                                <li>Check your email to complete the transaction and see payment details</li>
                                <li>Open your email to check transaction details and to see special instructions about how to deposit</li>
                                <li>You will receive email and SMS notification for a successful transaction</li>
                            </ol>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingOne">
                        <h3 class="panel-title collapsed custom-carlo" data-toggle="collapse" data-parent="#accordion2" href="#juancash" aria-expanded="true" aria-controls="juancash">
                            <a role="button" > --
                            JUANCASH
                            </a> --
                        </h3>
                    </div>
                    <div id="juancash" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                        <div class="panel-body">
                            <strong>Here's how to pay your Cablelink bill thru JUANCASH: </strong><br /><br />
                            <ol>
                                <li>Log-in to JUANCASH App</li>
                                <li>Click “ Pay bills “, Then select “Cablelink”</li>
                                <li>Input required information</li>
                                <li>Confirm payment</li>
                                <li>Wait for JuanCash confirmation on payment via SMS</li>
                            </ol>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingOne">
                        <h3 class="panel-title collapsed custom-carlo" data-toggle="collapse" data-parent="#accordion2" href="#grabpay" aria-expanded="true" aria-controls="grabpay">
                            <a role="button" > --
                            GRABPAY
                            </a> --
                        </h3>
                    </div>
                    <div id="grabpay" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                        <div class="panel-body">
                            <strong>Here's how to pay your Cablelink bill thru GRABPAY: </strong><br /><br />
                            <ol>
                                <li>On the main dashboard, tap the Bills icon to start the process</li>
                                <li>Browse the biller's list and select “Cablelink”</li>
                                <li>Enter the Customer Account Number and the Payment Amount to be paid</li>
                                <li>Review the transaction details and press the Confirmation button</li>
                                <li>Then, tap the pay button to process the payment</li>
                            </ol>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingOne">
                        <h3 class="panel-title collapsed custom-carlo" data-toggle="collapse" data-parent="#accordion2" href="#gcash" aria-expanded="true" aria-controls="gcash">
                            <a role="button" > --
                            GCASH
                            </a> --
                        </h3>
                    </div>
                    <div id="gcash" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                        <div class="panel-body">
                            <strong>Here's how to pay your Cablelink bill thru GCASH: </strong><br /><br />
                            <ol>
                                <li>From the Gcash dashboard. Tap “Pay bills “.</li>
                                <li>Choose the biller category of Cable/Internet</li>
                                <li>Choose “Cablelink” and fill out the amount to pay and the account details</li>
                                <li>Review your bills payment details before tapping “Confirm”</li>
                                <li>Wait for the text confirmation of your transaction</li>
                            </ol>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingOne">
                        <h3 class="panel-title collapsed custom-carlo" data-toggle="collapse" data-parent="#accordion2" href="#cliqq" aria-expanded="true" aria-controls="cliqq">
                            <a role="button" > --
                            CLIQQ
                            </a> --
                        </h3>
                    </div>
                    <div id="cliqq" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                        <div class="panel-body">
                            <strong>Here's how to pay your Cablelink bill thru CLIQQ: </strong><br /><br />
                            <ol>
                                <li>Open the CliQQ app and log in to your account</li>
                                <li>Tap the “Pay Bills” icon</li>
                                <li>Choose the biller category of Cable T.V.</li>
                                <li>Choose “Cablelink” and enter the required payment details and tap Confirm</li>
                                <li>Visit the nearest 7-eleven store, show the barcode to the cashier and pay for your bill in cash</li>
                            </ol>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingOne">
                        <h3 class="panel-title collapsed custom-carlo" data-toggle="collapse" data-parent="#accordion2" href="#alipay" aria-expanded="true" aria-controls="alipay">
                            <a role="button" > --
                            ALIPAY
                            </a> --
                        </h3>
                    </div>
                    <div id="alipay" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                        <div class="panel-body">
                            <strong>Here's how to pay your Cablelink bill thru ALIPAY: </strong><br /><br />
                            <ol>
                                <li>Login to Alipay App</li>
                                <li>Click “Pay bills “ then choose “Cablelink“</li>
                                <li>Input the required information</li>
                                <li>Confirm Payment </li>
                                <li>Wait for Alipay confirmation on payment via SMS</li>
                            </ol>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingOne">
                        <h3 class="panel-title collapsed custom-carlo" data-toggle="collapse" data-parent="#accordion2" href="#wechat" aria-expanded="true" aria-controls="wechat">
                            <a role="button" > --
                            WECHAT PAY
                            </a> --
                        </h3>
                    </div>
                    <div id="wechat" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                        <div class="panel-body">
                            <strong>Here's how to pay your Cablelink bill thru WECHAT PAY: </strong><br /><br />
                            <ol>
                                <li>Login to Alipay App</li>
                                <li>Click “Pay bills” then choose “Cablelink”</li>
                                <li>Input the required information</li>
                                <li>Confirm Payment</li>
                                <li>Wait for Wechat PAY confirmation on payment via SMS</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->








<!-- 

    <div class="container">
        <div class="content hidden" id="overthecounter">
            <div class="text-center">
                <ul class="list-inline"> -->
                    
                    <!-- <li>
                        <a href="" class="box" target="_blank">
                            <span class="img-box">
                                <img alt="" src="<?php echo base_url().'assets/img/remittance/bdo.png' ?>" class="center-block" />
                            </span>
                            <span class="abstract">BDO</span>
                        </a>
                    </li> -->


                    <!-- <li><a><img alt="" src="<?php echo base_url().'assets/img/remittance/bdo.png' ?>" /></a></li> -->
                    <!--<li><a><img alt="" src="<?php echo base_url().'assets/img/remittance/bpi.png' ?>" /></a></li>-->
                    <!-- <li><a><img alt="" src="<?php echo base_url().'assets/img/remittance/eastwest.png' ?>" /></a></li>
                    <li><a><img alt="" src="<?php echo base_url().'assets/img/remittance/unionbank.png' ?>" /></a></li>
                    <li><a><img alt="" src="<?php echo base_url().'assets/img/remittance/boc.png' ?>" /></a></li>
                    <li><a><img alt="" src="<?php echo base_url().'assets/img/remittance/rcbc.png' ?>" /></a></li>
                    <li><a><img alt="" src="<?php echo base_url().'assets/img/remittance/aub.png' ?>" /></a></li>
                </ul>
            </div>

            <div class="panel-body">
                <strong>Here’s how to pay your Cablelink bill thru Over-the-Counter:</strong><br /><br />
                    <ol>
                        <li>Subscriber must fill “Bills Payment Form” and “Cablelink” as the Company name</li>
                        <li>Indicate also the account number and account name for correct posting</li>
                    </ol>
            </div>
        </div>
    </div>


    <div class="container">
        <div class="content hidden" id="autodebit">
            <div class="text-center">
                <ul class="list-inline"> -->
                    
                    <!-- <li>
                        <a href="" class="box" target="_blank">
                            <span class="img-box">
                                <img alt="" src="<?php echo base_url().'assets/img/remittance/bdo.png' ?>" class="center-block" />
                            </span>
                            <span class="abstract">BDO</span>
                        </a>
                    </li> -->
                    <!-- <li><a><img alt="" src="<?php echo base_url().'assets/img/remittance/visa.png' ?>" /></a></li>
                    <li><a><img alt="" src="<?php echo base_url().'assets/img/remittance/mastercard.png' ?>" /></a></li>
                    <li><a><img alt="" src="<?php echo base_url().'assets/img/remittance/jcb.png' ?>" /></a></li>
                </ul>
            </div>

            <div class="panel-body">
                <strong>Here’s how to pay your Cablelink bill thru Auto Debit Arrangement:</strong><br /><br />
                    <ol>
                        <li>Open to all Credit Cardholders of locally issued Visa or Mastercard, JCB or Amex</li>
                        <li>Subscriber must fill up an enrollment form (at our office or enrollment forms may be forwarded to subscriber thru e-mail or fax)</li>
                    </ol>
            </div>
            <div class="text-center">
                <h3><strong>BANK PARTNERS</strong></h3>
            </div>
            <div class="text-center">
                <ul class="list-inline">

                    <li><a><img alt="" src="<?php echo base_url().'assets/img/remittance/bdo.png' ?>" /></a></li>
                    <li><a><img alt="" src="<?php echo base_url().'assets/img/remittance/bpi.png' ?>" /></a></li>
                    <li><a><img alt="" src="<?php echo base_url().'assets/img/remittance/securitybank.png' ?>" /></a></li>
                </ul>
            </div>
            <div class="panel-group" id="accordionc" role="tablist" aria-multiselectable="true">
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingOne">
                        <h3 class="panel-title collapsed custom-carlo" data-toggle="collapse" data-parent="#accordionc" href="#bdo1" aria-expanded="true" aria-controls="bdo1">
                          <a role="button" > --
                           BDO
                          </a> --
                        </h3>
                    </div>
                    <div id="bdo1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                        <div class="panel-body">
                            <strong>Methods of Payment using BDO Credit Card: </strong><br /><br />
                                <ol>
                                    <li><strong>AUTO CHARGE ARRANGEMENT</strong>. Automatic bills payment. No documents required.</li>
                                    <ul>
                                        <li>Go to bdo.com.ph</li>
                                        <li>Click ONLINE BANKING LOGIN and select BDO ONLINE BANKING</li>
                                        <li>Log in using your registered User ID and Password</li>
                                        <li>Under My Quick Links, select Credit Cards Bills Payments icon</li>
                                        <li>Click Bills Payments at the top</li>
                                        <li>Select Auto Charge Arrangement</li>
                                        <li>Completely fill out the form and click submit</li>
                                    </ul><br/>
                                    <li><strong>CHARGE ON DEMAND</strong>. Periodic bills are settled on a per request basis or as required. No enrollment needed.</li>
                                    <ul>
                                        <li>Login to your BDO internet banking access</li>
                                        <li>Click “Pay Bills and Reload” then click “Bills Payment” then click “Pay Bills”</li>
                                        <li>When the Bills Payment Page loads, scroll down, then click “Credit Card Payment”</li>
                                    </ul>
                                </ol>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingOne">
                        <h3 class="panel-title collapsed custom-carlo" data-toggle="collapse" data-parent="#accordionc" href="#bpi1" aria-expanded="true" aria-controls="bpi1">
                          <a role="button" > --
                           BPI
                          </a> --
                        </h3>
                    </div>
                    <div id="bpi1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                        <div class="panel-body">
                            <strong>Methods of Payment using BPI Credit Card: </strong><br /><br />
                                <ol>
                                    <li>May enroll directly at our office</li>
                                    <li>Open to all Credit cardholders of locally issued Visa or Mastercard, JCB or Annex</li>
                                    <li>Subscriber must fill up an enrollment form at our office or enrollment forms may be forwarded to subscriber through email or fax</li>
                                    <li>Fill up the form with your details needed</li>
                                    <li>Submit the form to our authorized personnel (CSE / Billing officer) or through email</li>
                                </ol>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingOne">
                        <h3 class="panel-title collapsed custom-carlo" data-toggle="collapse" data-parent="#accordionc" href="#sb" aria-expanded="true" aria-controls="sb">
                          <a role="button" > --
                           SECURITY BANK
                          </a>--
                        </h3>
                    </div>
                    <div id="sb" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                        <div class="panel-body">
                            <strong>Methods of Payment using SECURITY BANK Credit Card: </strong><br /><br />
                                <ol>
                                    <li>Download a soft copy of the Security Bank ADCM Enrollment Form or go to the nearest Security Bank branch and request for a hard copy</li>
                                    <li>Fill up the form with your details needed</li>
                                    <li>Submit the Enrollment Form to your Security Bank branch of account</li>
                                </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container">
        <div class="content hidden" id="atm">
            <div class="text-center">
                <ul class="list-inline">
                    <li><a><img alt="" src="<?php echo base_url().'assets/img/remittance/bdo.png' ?>" /></a></li>
                    <li><a><img alt="" src="<?php echo base_url().'assets/img/remittance/eastwest.png' ?>" /></a></li>
                    <li><a><img alt="" src="<?php echo base_url().'assets/img/remittance/rcbc.png' ?>" /></a></li>
                </ul>
            </div>

            <div class="panel-body">
                <strong>Here’s how to pay your Cablelink bill thru ATM Payment:</strong><br /><br />
                    <ol>
                        <li>Select the Bills Payment Button</li>
                        <li>Select the type of account that will be used to pay</li>
                        <li>Enter the amount to be paid</li>
                    </ol>
            </div>
        </div>
    </div> -->

        <div class="container" style="padding-top:40px !important;">
    <div class="row justify-content-center fade-in-up">
      <div class="col-lg-12">
        <div class="offices-card d-flex align-items-center justify-content-between flex-wrap bgimg">
          <div class="offices-text">
            <h1 class="head-office">OFFICE PAYMENT</h1>
            <hr style="border: 1px solid white"></hr>
            <!-- <p><i class="glyphicon glyphicon-map-marker head-office-icon"></i>8210 Dr A. Santos Ave., Parañaque City</p> -->
          </div>

          <div class="offices-cta">
            <a href="<?php echo base_url('offices'); ?>" class="btn btn-primary btn-lg button-rounded">Office Address</a>
          </div>
        </div>
      </div>
    </div>
                    </div>



    <div class="container">
    	<p class="title">General Payment Reminders</p>
        <ol class="sub-title">
        	<li>Over-the-Counter payment
            	<ul>
                	<li class="details" style="padding-top:13px">- Always bring your Statement of Account (SOA) when paying thru accredited payment centers and Banks.</li>
                    <li class="details" style="padding-top: 13px">- Bayad Center, 7-11, GPRS.</li>
                </ul>
            </li>
            <li>Credit Card Payment (Two ways to pay)
            	<ul>
                    <li class="details" style="padding-top:13px"><span class="bold">- Auto Debit Arrangement -</span> Subscribers may enroll at any Cablelink satellite offices.</li>
                	<li class="details" style="padding-top:13px"><span class="bold">- Over-the-Counter -</span> Credit Card payment is accepted at selected Cablelink offices.</li>
                </ul>
            </li>
            <ul class="sub-title-cont">
                <li><strong>*Any Visa, MasterCard, AMEX and JCB</strong></li>
                <li><strong>* <span style="font-style:italic">(Parañaque, Las Piñas, Muntinlupa, Pateros and Imus)</span></strong></li>
    	    </ul></br>
            <li>For cheque payments please make your cheque payable to Cable Link and Holdings Corp.</li>
            <li>You can conveniently pay without your SOA at Cablelink satellite offices, at any branches of BDO, East West Bank, Unionbank,
                RCBC, Asia United Bank, Bank of Commerce and all branches of 7-11 and Touchpay.</li>
            <li>Payment can also be made via Digital payment Facilities  Gcash, Maya, Shopeepay, Grabpay, Peppermint, Bayad Online, Coinsph, Sold, justpayto,
                Diskartech, Juan Cash, We Chat, Baryacard.</li>
            <li>Payments made through payment centers, banks and credit cards will be credited to your account after 3 working days.</li>
        </ol>
    </div>














</div></br>



<div class="modal fade" id="bankModal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">

            <div class="modal-header gradient-bg  img-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <!-- <h4 class="modal-title" id="bankModalTitle">BDO</h4> -->
                 <img src="<?php echo base_url().'assets/img/remittance/bdo.png' ?>" alt="BDO">
            </div>

            <div class="modal-body text-center">
                <!-- <p id="bankModalText">Over-the-counter</p> -->
                <div class="bank-card-box">
                    <div class="bank-card-header">
                        <div class="panel-heading" role="tab" id="headingOne">
                            <h5 class="panel-title /*!collapsed*/ custom-carlo" data-toggle="collapse" data-parent="#accordion" href="#otc" aria-expanded="true" aria-controls="otc">
                                Over-the-counter
                            </h5>
                        </div>
                    </div>
                    <div id="otc" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                        <div class="bank-card-body">
                            <div class="panel-body">
                                <!-- <strong>Here’s how to pay your Cablelink bill thru Over-the-Counter:</strong><br /><br /> -->
                                    <ol>
                                        <li>Subscriber must fill “Bills Payment Form” and “Cablelink” as the Company name</li>
                                        <li>Indicate also the account number and account name for correct posting</li>
                                    </ol>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bank-card-box">
                    <div class="bank-card-header">
                        <div class="panel-heading" role="tab" id="headingOne">
                            <h5 class="panel-title /*!collapsed*/ custom-carlo" data-toggle="collapse" data-parent="#accordion" href="#op" aria-expanded="true" aria-controls="op">
                                Online payment
                            </h5>
                        </div>
                    </div>
                    <div id="op" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                        <div class="bank-card-body">
                            <div class="panel-body">
                                <strong>Here's how to pay your Cablelink bill thru BDO: </strong><br /><br />
                                <ol>
                                    <li>Log in to your <strong>BDO Online Banking Account</strong> at <a href="https://online.bdo.com.ph" target="_blank">https://online.bdo.com.ph</a></li>
                                    <li>Fill out the Enrollment Details and Submit. Once enrolled, go to Pay Bills and Reload > Bills Payment > Pay Bills</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bank-card-box">
                    <div class="bank-card-header">
                        <div class="panel-heading" role="tab" id="headingOne">
                            <h5 class="panel-title /*!collapsed*/ custom-carlo" data-toggle="collapse" data-parent="#accordion" href="#atmp" aria-expanded="true" aria-controls="atmp">
                                ATM Payment
                            </h5>
                        </div>
                    </div>
                    <div id="atmp" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                        <div class="bank-card-body">
                            <div class="panel-body">
                                <!-- <strong>Here’s how to pay your Cablelink bill thru Over-the-Counter:</strong><br /><br /> -->
                                    <ol>
                                        <li>Select the Bills Payment Button</li>
                                        <li>Select the type of account that will be used to pay</li>
                                        <li>Enter the amount to be paid</li>
                                    </ol>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- <button class="btn btn-primary btn-block">
                    Continue
                </button> -->
            </div>

        </div>
    </div>
</div>


<div class="modal fade" id="bayadModal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">

            <div class="modal-header gradient-bg  img-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <!-- <h4 class="modal-title" id="bankModalTitle">BDO</h4> -->
                 <img src="<?php echo base_url().'assets/img/remittance/bayad.png' ?>" alt="Bayad Center">
            </div>

            <div class="modal-body text-center">
                <!-- <p id="bankModalText">Over-the-counter</p> -->
                <div class="bank-card-box">
                    <div class="bank-card-header">
                        <div class="panel-heading" role="tab" id="heading">
                            <h5 class="panel-title /*!collapsed*/ custom-carlo" data-toggle="collapse" data-parent="#accordion" href="#otcbayad" aria-expanded="true" aria-controls="otcbayad">
                                Over-the-counter
                            </h5>
                        </div>
                    </div>
                    <div id="otcbayad" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading">
                        <div class="bank-card-body">
                            <div class="panel-body">
                                <!-- <strong>Here’s how to pay your Cablelink bill thru Over-the-Counter:</strong><br /><br /> -->
                                    <ol>
                                        <li>Subscriber/s should bring their Service Invoice   or ask the teller for " BILLS PAYMENT FORM" then indicate the required details such as ( Account number, Account name, and amount to be paid.</li>
                                        <li>Review all the details.</li>
                                        <li>Subscriber/s can settle the balance through CASH or DATED CHEQUE.</li>
                                        <li>Wait for the validation on your invoice or Bills payment form.</li>
                                        <li>Check if validated details are all correct before leaving the counter.</li>
                                    </ol>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bank-card-box">
                    <div class="bank-card-header">
                        <div class="panel-heading" role="tab" id="heading">
                            <h5 class="panel-title /*!collapsed*/ custom-carlo" data-toggle="collapse" data-parent="#accordion" href="#opbayad" aria-expanded="true" aria-controls="opbayad">
                                Online payment
                            </h5>
                        </div>
                    </div>
                    <div id="opbayad" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading">
                        <div class="bank-card-body">
                            <div class="panel-body">
                                <!-- <strong>Here's how to pay your Cablelink bill thru BDO: </strong><br /><br /> -->
                                <ol>
                                    <li>Go to Bayad Online: <a href="https://www.online.bayad.com" target="_blank">https://www.online.bayad.com</a></li>
                                    <li>Log in to your Bayad Online account.</li>
                                    <li>On the 'BILLS PAYMENT' section, click 'Cable/Internet' then "CABLELINK".</li>
                                    <li>Fill out the required details and then review before payment. Tip: Enable the SAVE BILLER feature for your next payment.</li>
                                    <li>Wait for your payment confirmation receipt and you're done!.</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- <button class="btn btn-primary btn-block">
                    Continue
                </button> -->
            </div>

        </div>
    </div>
</div>



<div class="modal fade" id="ecpay" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">

            <div class="modal-header gradient-bg  img-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <!-- <h4 class="modal-title" id="bankModalTitle">BDO</h4> -->
                 <img src="<?php echo base_url().'assets/img/remittance/ECPay.png' ?>" alt="ECPAY">
            </div>

            <div class="modal-body text-center">
                <!-- <p id="bankModalText">Over-the-counter</p> -->
                <div class="bank-card-box">
                    <div class="bank-card-header">
                        <div class="panel-heading" role="tab" id="headingOne">
                            <h5 class="panel-title /*!collapsed*/ custom-carlo" data-toggle="collapse" data-parent="#accordion" href="#otcecpay" aria-expanded="true" aria-controls="otcecpay">
                                Over-the-counter
                            </h5>
                        </div>
                    </div>
                    <div id="otcecpay" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                        <div class="bank-card-body">
                            <div class="panel-body">
                                <!-- <strong>Here’s how to pay your Cablelink bill thru Over-the-Counter:</strong><br /><br /> -->
                                    <ol>
                                        <li>Subscriber/s should bring their Service Invoice   or ask the teller for " BILLS PAYMENT FORM" then indicate the required details such as Account number, Account name, and amount to be paid.</li>
                                        <li>Review all the details.</li>
                                        <li>Subscriber/s can settle the balance through CASH</li>
                                        <li>Wait for the validation on your invoice or Bills payment form.</li>
                                    </ol>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bank-card-box">
                    <div class="bank-card-header">
                        <div class="panel-heading" role="tab" id="headingOne">
                            <h5 class="panel-title /*!collapsed*/ custom-carlo" data-toggle="collapse" data-parent="#accordion" href="#opecpay" aria-expanded="true" aria-controls="opecpay">
                                Over kiosk machine
                            </h5>
                        </div>
                    </div>
                    <div id="opecpay" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                        <div class="bank-card-body">
                            <div class="panel-body">
                                <!-- <strong>Here's how to pay your Cablelink bill thru BDO: </strong><br /><br /> -->
                                <ol>
                                    <li>In any ecpay kiosk machine. Select “Bills Payment” and display All Billers</a></li>
                                    <li>Click “Cable and Internet”</li>
                                    <li>Enter the account number and amount to be paid</li>
                                    <li>Hand over your kiosk payment slip and cash (no checks please) to the cashier</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- <button class="btn btn-primary btn-block">
                    Continue
                </button> -->
            </div>

        </div>
    </div>
</div>


<div class="modal fade" id="SEVEN-ELEVEN" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">

            <div class="modal-header gradient-bg  img-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <!-- <h4 class="modal-title" id="bankModalTitle">BDO</h4> -->
                 <img src="<?php echo base_url().'assets/img/remittance/7-Eleven.png' ?>" alt="7-ELEVEN">
            </div>

            <div class="modal-body text-center">
                <!-- <p id="bankModalText">Over-the-counter</p> -->
                <div class="bank-card-box">
                    <div class="bank-card-header">
                        <div class="panel-heading" role="tab" id="headingOne">
                            <h5 class="panel-title /*!collapsed*/ custom-carlo" data-toggle="collapse" data-parent="#accordion" href="#otc711" aria-expanded="true" aria-controls="otc711">
                               Over kiosk machine: 
                            </h5>
                        </div>
                    </div>
                    <div id="otc711" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                        <div class="bank-card-body">
                            <div class="panel-body">
                                <!-- <strong>Here’s how to pay your Cablelink bill thru Over-the-Counter:</strong><br /><br /> -->
                                    <ol>
                                        <li>Go to any 7-11 branch and look for the Cliqq touch-screen payment kiosk. Select “Bills Payment” and display All Billers</li>
                                        <li>Click “Cable and Internet”</li>
                                        <li>Click “Cablelink”</li>
                                        <li>Enter the account number and amount to be paid</li>
                                        <li>Hand over your kiosk payment slip and cash (no checks please) to the cashier</li>
                                    </ol>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- <button class="btn btn-primary btn-block">
                    Continue
                </button> -->
            </div>

        </div>
    </div>
</div>

<div class="modal fade" id="touchpay" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">

            <div class="modal-header gradient-bg  img-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <!-- <h4 class="modal-title" id="bankModalTitle">BDO</h4> -->
                 <img src="<?php echo base_url().'assets/img/remittance/TouchPay.png' ?>" alt="TOUCHPAY">
            </div>

            <div class="modal-body text-center">
                <!-- <p id="bankModalText">Over-the-counter</p> -->
                <div class="bank-card-box">
                    <div class="bank-card-header">
                        <div class="panel-heading" role="tab" id="headingOne">
                            <h5 class="panel-title /*!collapsed*/ custom-carlo" data-toggle="collapse" data-parent="#accordion" href="#otctouchpay" aria-expanded="true" aria-controls="otctouchpay">
                               Over kiosk machine: 
                            </h5>
                        </div>
                    </div>
                    <div id="otctouchpay" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                        <div class="bank-card-body">
                            <div class="panel-body">
                                <!-- <strong>Here’s how to pay your Cablelink bill thru Over-the-Counter:</strong><br /><br /> -->
                                    <ol>
                                        <li>Look for Touchpay kiosk, at the screen, select “bills payment” and display All Billers</li>
                                        <li>Click Cable and Internet</li>
                                        <li>Click Cablelink</li>
                                        <li>Enter the account number and amount to be paid</li>
                                        <li>Disclaimer will appear on the screen, read and click “Continue if you agree”</li>
                                        <li>Insert cash</li>
                                        <li>Wait for the receipt for confirmation</li>
                                    </ol>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- <button class="btn btn-primary btn-block">
                    Continue
                </button> -->
            </div>

        </div>
    </div>
</div>


<div class="modal fade" id="eastwest" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">

            <div class="modal-header gradient-bg  img-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <!-- <h4 class="modal-title" id="bankModalTitle">BDO</h4> -->
                 <img src="<?php echo base_url().'assets/img/remittance/eastwest.png' ?>" alt="EASTWEST">
            </div>

            <div class="modal-body text-center">
                <!-- <p id="bankModalText">Over-the-counter</p> -->
                <div class="bank-card-box">
                    <div class="bank-card-header">
                        <div class="panel-heading" role="tab" id="headingOne">
                            <h5 class="panel-title /*!collapsed*/ custom-carlo" data-toggle="collapse" data-parent="#accordion" href="#otceastwest" aria-expanded="true" aria-controls="otceastwest">
                                Over-the-Counter:
                            </h5>
                        </div>
                    </div>
                    <div id="otceastwest" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                        <div class="bank-card-body">
                            <div class="panel-body">
                                <!-- <strong>Here’s how to pay your Cablelink bill thru Over-the-Counter:</strong><br /><br /> -->
                                    <ol>
                                        <li>Subscriber must fill “Bills Payment Form” and “Cablelink” as the Company name</li>
                                        <li>Indicate also the account number and account name for correct posting</li>
                                    </ol>
                            </div>
                        </div>
                    </div>
                </div>

                 <div class="bank-card-box">
                    <div class="bank-card-header">
                        <div class="panel-heading" role="tab" id="headingOne">
                            <h5 class="panel-title /*!collapsed*/ custom-carlo" data-toggle="collapse" data-parent="#accordion" href="#opeastwest" aria-expanded="true" aria-controls="opeastwest">
                                Online payment
                            </h5>
                        </div>
                    </div>
                    <div id="opeastwest" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                        <div class="bank-card-body">
                            <div class="panel-body">
                                <!-- <strong>Here's how to pay your Cablelink bill thru BDO: </strong><br /><br /> -->
                                <ol>
                                    <li>Simply register your Eastwest Deposit Account in <a href="https://www.eastwestbanker.com" target="_blank">https://www.eastwestbanker.com</a></li>
                                    <li>Log in and choose Cablelink from the enrolled list of Biller, enter the amount then “Confirm”</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bank-card-box">
                    <div class="bank-card-header">
                        <div class="panel-heading" role="tab" id="headingOne">
                            <h5 class="panel-title /*!collapsed*/ custom-carlo" data-toggle="collapse" data-parent="#accordion" href="#atmpeastwest" aria-expanded="true" aria-controls="atmpeastwest">
                                ATM Payment
                            </h5>
                        </div>
                    </div>
                    <div id="atmpeastwest" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                        <div class="bank-card-body">
                            <div class="panel-body">
                                <!--<strong>Here’s how to pay your Cablelink bill thru Over-the-Counter:</strong><br /><br />-->
                                    <ol>
                                        <li>Select the Bills Payment Button</li>
                                        <li>Select the type of account that will be used to pay</li>
                                        <li>Enter the amount to be paid</li>
                                    </ol>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- <button class="btn btn-primary btn-block">
                    Continue
                </button> -->
            </div>

        </div>
    </div>
</div>


<div class="modal fade" id="BPI" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">

            <div class="modal-header gradient-bg  img-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <!-- <h4 class="modal-title" id="bankModalTitle">BDO</h4> -->
                 <img src="<?php echo base_url().'assets/img/remittance/bpi.png' ?>" alt="BPI">
            </div>

            <div class="modal-body text-center">
                <!-- <p id="bankModalText">Over-the-counter</p> -->
                <div class="bank-card-box">
                    <div class="bank-card-header">
                        <div class="panel-heading" role="tab" id="headingOne">
                            <h5 class="panel-title /*!collapsed*/ custom-carlo" data-toggle="collapse" data-parent="#accordion" href="#otcBPI" aria-expanded="true" aria-controls="otcBPI">
                               Online payment 
                            </h5>
                        </div>
                    </div>
                    <div id="otcBPI" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                        <div class="bank-card-body">
                            <div class="panel-body">
                                <!-- <strong>Here’s how to pay your Cablelink bill thru Over-the-Counter:</strong><br /><br /> -->
                                    <ol>
                                        <li>Must enroll first their BPI account in BPI Online Banking</li>
                                        <li>Enroll the company / biller in BPI Online Banking for bills payment</li>
                                        <li>Pay your bills online with BPI Online Banking</li>
                                    </ol>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- <button class="btn btn-primary btn-block">
                    Continue
                </button> -->
            </div>

        </div>
    </div>
</div>


<div class="modal fade" id="unionbank" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">

            <div class="modal-header gradient-bg  img-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <!-- <h4 class="modal-title" id="bankModalTitle">BDO</h4> -->
                 <img src="<?php echo base_url().'assets/img/remittance/unionbank.png' ?>" alt="UNIONBANK">
            </div>

            <div class="modal-body text-center">
                <!-- <p id="bankModalText">Over-the-counter</p> -->
                <div class="bank-card-box">
                    <div class="bank-card-header">
                        <div class="panel-heading" role="tab" id="headingOne">
                            <h5 class="panel-title /*!collapsed*/ custom-carlo" data-toggle="collapse" data-parent="#accordion" href="#otcunionbank" aria-expanded="true" aria-controls="otcunionbank">
                               Online payment 
                            </h5>
                        </div>
                    </div>
                    <div id="otcunionbank" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                        <div class="bank-card-body">
                            <div class="panel-body">
                                <!-- <strong>Here’s how to pay your Cablelink bill thru Over-the-Counter:</strong><br /><br /> -->
                                    <ol>
                                        <li>Open your Union Bank App. Tap Pay bills</li>
                                        <li>Select biller ,Choose biller " CABLELINK"</li>
                                        <li>Enter the required information. then tap next</li>
                                        <li>Choose Bank Account ( DEBIT) .</li>
                                        <li>Enter the amount to be paid then tap next.</li>
                                        <li>Review all the details, then tap "Pay"</li>
                                    </ol>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- <button class="btn btn-primary btn-block">
                    Continue
                </button> -->
            </div>

        </div>
    </div>
</div>


<div class="modal fade" id="RCBC" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">

            <div class="modal-header gradient-bg  img-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <!-- <h4 class="modal-title" id="bankModalTitle">BDO</h4> -->
                 <img src="<?php echo base_url().'assets/img/remittance/rcbc.png' ?>" alt="RCBC">
            </div>

            <div class="modal-body text-center">
                <!-- <p id="bankModalText">Over-the-counter</p> -->
                <div class="bank-card-box">
                    <div class="bank-card-header">
                        <div class="panel-heading" role="tab" id="headingOne">
                            <h5 class="panel-title /*!collapsed*/ custom-carlo" data-toggle="collapse" data-parent="#accordion" href="#otcRCBC" aria-expanded="true" aria-controls="otcRCBC">
                                Over-the-Counter:
                            </h5>
                        </div>
                    </div>
                    <div id="otcRCBC" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                        <div class="bank-card-body">
                            <div class="panel-body">
                                <!-- <strong>Here’s how to pay your Cablelink bill thru Over-the-Counter:</strong><br /><br /> -->
                                    <ol>
                                        <li>Subscriber must fill “Bills Payment Form” and “Cablelink” as the Company name</li>
                                        <li>Indicate also the account number and account name for correct posting</li>
                                    </ol>
                            </div>
                        </div>
                    </div>
                </div>

                 <div class="bank-card-box">
                    <div class="bank-card-header">
                        <div class="panel-heading" role="tab" id="headingOne">
                            <h5 class="panel-title /*!collapsed*/ custom-carlo" data-toggle="collapse" data-parent="#accordion" href="#opRCBC" aria-expanded="true" aria-controls="opRCBC">
                                Online payment
                            </h5>
                        </div>
                    </div>
                    <div id="opRCBC" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                        <div class="bank-card-body">
                            <div class="panel-body">
                                <!-- <strong>Here's how to pay your Cablelink bill thru BDO: </strong><br /><br /> -->
                                <ol>
                                    <li>Go to <a href="https://www.rcbconlinebanking.com" target="_blank">https://www.rcbconlinebanking.com</a> or use your RCBC Mobile App</li>
                                    <li>Type your User ID & Password, click log-in and enter OTP</li>
                                    <li>Go to “ Pay Bills “ Menu</li>
                                    <li>Select List of Billers, Choose “ CABLELINK”</li>
                                    <li>Input required information and enter the amount to be paid, then click “SUBMIT” button.</li>
                                    <li>Then Proceed to Payment and Input OTP.</li>
                                    <li>Wait for RCBC confirmation on payment via SMS/Email.</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bank-card-box">
                    <div class="bank-card-header">
                        <div class="panel-heading" role="tab" id="headingOne">
                            <h5 class="panel-title /*!collapsed*/ custom-carlo" data-toggle="collapse" data-parent="#accordion" href="#atmpRCBC" aria-expanded="true" aria-controls="atmpRCBC">
                                ATM Payment
                            </h5>
                        </div>
                    </div>
                    <div id="atmpRCBC" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                        <div class="bank-card-body">
                            <div class="panel-body">
                                <!-- <strong>Here’s how to pay your Cablelink bill thru Over-the-Counter:</strong><br /><br /> -->
                                    <ol>
                                        <li>Select the Bills Payment Button</li>
                                        <li>Select the type of account that will be used to pay</li>
                                        <li>Enter the amount to be paid</li>
                                    </ol>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- <button class="btn btn-primary btn-block">
                    Continue
                </button> -->
            </div>

        </div>
    </div>
</div>


<div class="modal fade" id="bancnet" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">

            <div class="modal-header gradient-bg  img-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <!-- <h4 class="modal-title" id="bankModalTitle">BDO</h4> -->
                 <img src="<?php echo base_url().'assets/img/remittance/Bancnet.png' ?>" alt="BANCNET">
            </div>

            <div class="modal-body text-center">
                <!-- <p id="bankModalText">Over-the-counter</p> -->
                <div class="bank-card-box">
                    <div class="bank-card-header">
                        <div class="panel-heading" role="tab" id="headingOne">
                            <h5 class="panel-title /*!collapsed*/ custom-carlo" data-toggle="collapse" data-parent="#accordion" href="#otcbancnet" aria-expanded="true" aria-controls="otcbancnet">
                               Online payment 
                            </h5>
                        </div>
                    </div>
                    <div id="otcbancnet" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                        <div class="bank-card-body">
                            <div class="panel-body">
                                <!-- <strong>Here’s how to pay your Cablelink bill thru Over-the-Counter:</strong><br /><br /> -->
                                    <ol>
                                        <li>Log on to <a href="https://www.bancnetonline.com" target="_blank">https://www.bancnetonline.com</a></li>
                                        <li>On the homepage, click on your bank</li>
                                        <li>Read the agreement in using Bancnet Online and Click the “I Agree” button if you agree with the Terms and Conditions</li>
                                        <li>Click on “Payment”</li>
                                        <li>Fill out the required fields:</li>
                                        <li>Enter your ATM PIN on the onscreen keypad</li>
                                        <li>Click the Submit Button</li>
                                        <li>Details of your transaction will prompt on screen, once verified that they are all correct, click “OK”</li>
                                        <li>You may print the screen that shows your transaction details as your transaction receipt or click “Close” to conclude the transaction</li>
                                    </ol>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- <button class="btn btn-primary btn-block">
                    Continue
                </button> -->
            </div>

        </div>
    </div>
</div>


<!-- <div class="modal fade" id="unionbank" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">

            <div class="modal-header gradient-bg  img-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>

                 <img src="<?php echo base_url().'assets/img/remittance/bdo.png' ?>" alt="BDO">
            </div>

            <div class="modal-body text-center">
                <div class="bank-card-box">
                    <div class="bank-card-header">
                        <div class="panel-heading" role="tab" id="headingOne">
                            <h5 class="panel-title /*!collapsed*/ custom-carlo" data-toggle="collapse" data-parent="#accordion" href="#otc" aria-expanded="true" aria-controls="otc">
                               Online payment 
                            </h5>
                        </div>
                    </div>
                    <div id="otc" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                        <div class="bank-card-body">
                            <div class="panel-body">
                              
                                    <ol>
                                        <li>Open your Union Bank App. Tap Pay bills</li>
                                        <li>Select biller ,Choose biller " CABLELINK"</li>
                                        <li>Enter the required information. then tap next</li>
                                        <li>Choose Bank Account ( DEBIT) .</li>
                                        <li>Enter the amount to be paid then tap next.</li>
                                        <li>Review all the details, then tap "Pay"</li>
                                    </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->


<div class="modal fade" id="aub" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">

            <div class="modal-header gradient-bg  img-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <!-- <h4 class="modal-title" id="bankModalTitle">BDO</h4> -->
                 <img src="<?php echo base_url().'assets/img/remittance/aub.png' ?>" alt="AUB">
            </div>

            <div class="modal-body text-center">
                <!-- <p id="bankModalText">Over-the-counter</p> -->
                <div class="bank-card-box">
                    <div class="bank-card-header">
                        <div class="panel-heading" role="tab" id="headingOne">
                            <h5 class="panel-title /*!collapsed*/ custom-carlo" data-toggle="collapse" data-parent="#accordion" href="#otcaub" aria-expanded="true" aria-controls="otcaub">
                                Over-the-Counter:
                            </h5>
                        </div>
                    </div>
                    <div id="otcaub" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                        <div class="bank-card-body">
                            <div class="panel-body">
                                <!-- <strong>Here’s how to pay your Cablelink bill thru Over-the-Counter:</strong><br /><br /> -->
                                    <ol>
                                        <li>Subscriber must fill “Bills Payment Form” and “Cablelink” as the Company name</li>
                                        <li>Indicate also the account number and account name for correct posting</li>
                                    </ol>
                            </div>
                        </div>
                    </div>
                </div>

                 <div class="bank-card-box">
                    <div class="bank-card-header">
                        <div class="panel-heading" role="tab" id="headingOne">
                            <h5 class="panel-title /*!collapsed*/ custom-carlo" data-toggle="collapse" data-parent="#accordion" href="#opaub" aria-expanded="true" aria-controls="opaub">
                                Online payment
                            </h5>
                        </div>
                    </div>
                    <div id="opaub" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                        <div class="bank-card-body">
                            <div class="panel-body">
                                <!-- <strong>Here's how to pay your Cablelink bill thru BDO: </strong><br /><br /> -->
                                <ol>
                                    <li>Log on to <a href="https://www.aub.com.ph" target="_blank">https://www.aub.com.ph</a> enter your user name and and password</li>
                                    <li>Under the transaction menu, click “Bills Payment”</li>
                                    <li>Choose the AUB account from which the payment will come from</li>
                                    <li>Under the biller institution/Merchant, choose “Cablelink and Holdings Corp"</li>
                                    <li>Enter your account information and amount. Click “Pay” to confirm payment</li>
                                </ol>
                                <p>Note: You should receive a confirmation email from AUB if payment is successful </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- <button class="btn btn-primary btn-block">
                    Continue
                </button> -->
            </div>

        </div>
    </div>
</div>




<div class="modal fade" id="gcash" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">

            <div class="modal-header gradient-bg  img-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <!-- <h4 class="modal-title" id="bankModalTitle">BDO</h4> -->
                 <img src="<?php echo base_url().'assets/img/remittance/gcash.png' ?>" alt="GCASH">
            </div>

            <div class="modal-body text-center">
                <!-- <p id="bankModalText">Over-the-counter</p> -->
                <div class="bank-card-box">
                    <div class="bank-card-header">
                        <div class="panel-heading" role="tab" id="headingOne">
                            <h5 class="panel-title /*!collapsed*/ custom-carlo" data-toggle="collapse" data-parent="#accordion" href="#otcgcash" aria-expanded="true" aria-controls="otcgcash">
                               Online payment 
                            </h5>
                        </div>
                    </div>
                    <div id="otcgcash" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                        <div class="bank-card-body">
                            <div class="panel-body">
                                <!-- <strong>Here’s how to pay your Cablelink bill thru Over-the-Counter:</strong><br /><br /> -->
                                    <ol>
                                        <li>From the Gcash dashboard. Tap “Pay bills “.</li>
                                        <li>Choose the biller category of Cable/Internet</li>
                                        <li>Choose “Cablelink” and fill out the amount to pay and the account details</li>
                                        <li>Review your bills payment details before tapping “Confirm”</li>
                                        <li>Wait for the text confirmation of your transaction</li>
                                    </ol>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- <button class="btn btn-primary btn-block">
                    Continue
                </button> -->
            </div>

        </div>
    </div>
</div>


<div class="modal fade" id="cliqq" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">

            <div class="modal-header gradient-bg  img-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <!-- <h4 class="modal-title" id="bankModalTitle">BDO</h4> -->
                 <img src="<?php echo base_url().'assets/img/remittance/cliqq.png' ?>" alt="CLIQQ">
            </div>

            <div class="modal-body text-center">
                <!-- <p id="bankModalText">Over-the-counter</p> -->
                <div class="bank-card-box">
                    <div class="bank-card-header">
                        <div class="panel-heading" role="tab" id="headingOne">
                            <h5 class="panel-title /*!collapsed*/ custom-carlo" data-toggle="collapse" data-parent="#accordion" href="#otccliqq" aria-expanded="true" aria-controls="otccliqq">
                               Online payment 
                            </h5>
                        </div>
                    </div>
                    <div id="otccliqq" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                        <div class="bank-card-body">
                            <div class="panel-body">
                                <!-- <strong>Here’s how to pay your Cablelink bill thru Over-the-Counter:</strong><br /><br /> -->
                                    <ol>
                                        <li>Open the CliQQ app and log in to your account</li>
                                        <li>Tap the “Pay Bills” icon</li>
                                        <li>Choose the biller category of Cable T.V.</li>
                                        <li>Choose “Cablelink” and enter the required payment details and tap Confirm</li>
                                        <li>Visit the nearest 7-eleven store, show the barcode to the cashier and pay for your bill in cash</li>
                                    </ol>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- <button class="btn btn-primary btn-block">
                    Continue
                </button> -->
            </div>

        </div>
    </div>
</div>



<div class="modal fade" id="lazada" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">

            <div class="modal-header gradient-bg  img-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <!-- <h4 class="modal-title" id="bankModalTitle">BDO</h4> -->
                 <img src="<?php echo base_url().'assets/img/remittance/lazada.jpg' ?>" alt="LAZADA">
            </div>

            <div class="modal-body text-center">
                <!-- <p id="bankModalText">Over-the-counter</p> -->
                <div class="bank-card-box">
                    <div class="bank-card-header">
                        <div class="panel-heading" role="tab" id="headingOne">
                            <h5 class="panel-title /*!collapsed*/ custom-carlo" data-toggle="collapse" data-parent="#accordion" href="#otclazada" aria-expanded="true" aria-controls="otclazada">
                               Online payment 
                            </h5>
                        </div>
                    </div>
                    <div id="otclazada" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                        <div class="bank-card-body">
                            <div class="panel-body">
                                <!-- <strong>Here’s how to pay your Cablelink bill thru Over-the-Counter:</strong><br /><br /> -->
                                    <ol>
                                        <li>Go to Top Up Pay, tap Bills payment, then tap more billers</li>
                                        <li>Select Cable/Internet under select provider look for Cable Link under and add necessary details, and then tap “Pay Now”</li>
                                        <li>Select the preferred payment method, and then tap “Place order”</li>
                                        <li>Once payment is successful, you will receive your order details</li>
                                    </ol>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- <button class="btn btn-primary btn-block">
                    Continue
                </button> -->
            </div>

        </div>
    </div>
</div>

<div class="modal fade" id="shopeepay" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">

            <div class="modal-header gradient-bg  img-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <!-- <h4 class="modal-title" id="bankModalTitle">BDO</h4> -->
                 <img src="<?php echo base_url().'assets/img/remittance/shopeepay.png' ?>" alt="SHOPEEPAY">
            </div>

            <div class="modal-body text-center">
                <!-- <p id="bankModalText">Over-the-counter</p> -->
                <div class="bank-card-box">
                    <div class="bank-card-header">
                        <div class="panel-heading" role="tab" id="headingOne">
                            <h5 class="panel-title /*!collapsed*/ custom-carlo" data-toggle="collapse" data-parent="#accordion" href="#otcshopeepay" aria-expanded="true" aria-controls="otcshopeepay">
                               Online payment 
                            </h5>
                        </div>
                    </div>
                    <div id="otcshopeepay" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                        <div class="bank-card-body">
                            <div class="panel-body">
                                <!-- <strong>Here’s how to pay your Cablelink bill thru Over-the-Counter:</strong><br /><br /> -->
                                    <ol>
                                        <li>Go to the Load, Bills & eServices, and then tap “TV Cable”</li>
                                        <li>Select Cable Link under postpaid and add necessary details, and then tap “Continue”</li>
                                        <li>Select the preferred payment method, and then tap “Confirm”</li>
                                        <li>Tap “Pay now”. Once payment is successful, you will receive your order details</li>
                                    </ol>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- <button class="btn btn-primary btn-block">
                    Continue
                </button> -->
            </div>

        </div>
    </div>
</div>


<div class="modal fade" id="grabpay" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">

            <div class="modal-header gradient-bg  img-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <!-- <h4 class="modal-title" id="bankModalTitle">BDO</h4> -->
                 <img src="<?php echo base_url().'assets/img/remittance/GrabPay.jpg' ?>" alt="GRABPAY">
            </div>

            <div class="modal-body text-center">
                <!-- <p id="bankModalText">Over-the-counter</p> -->
                <div class="bank-card-box">
                    <div class="bank-card-header">
                        <div class="panel-heading" role="tab" id="headingOne">
                            <h5 class="panel-title /*!collapsed*/ custom-carlo" data-toggle="collapse" data-parent="#accordion" href="#otcgrabpay" aria-expanded="true" aria-controls="otcgrabpay">
                               Online payment 
                            </h5>
                        </div>
                    </div>
                    <div id="otcgrabpay" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                        <div class="bank-card-body">
                            <div class="panel-body">
                                <!-- <strong>Here’s how to pay your Cablelink bill thru Over-the-Counter:</strong><br /><br /> -->
                                    <ol>
                                        <li>On the main dashboard, tap the Bills icon to start the process</li>
                                        <li>Browse the biller's list and select “Cablelink”</li>
                                        <li>Enter the Customer Account Number and the Payment Amount to be paid</li>
                                        <li>Review the transaction details and press the Confirmation button</li>
                                        <li>Then, tap the pay button to process the payment</li>

                                    </ol>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- <button class="btn btn-primary btn-block">
                    Continue
                </button> -->
            </div>

        </div>
    </div>
</div>


<div class="modal fade" id="maya" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">

            <div class="modal-header gradient-bg  img-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <!-- <h4 class="modal-title" id="bankModalTitle">BDO</h4> -->
                 <img src="<?php echo base_url().'assets/img/remittance/maya.png' ?>" alt="MAYA">
            </div>

            <div class="modal-body text-center">
                <!-- <p id="bankModalText">Over-the-counter</p> -->
                <div class="bank-card-box">
                    <div class="bank-card-header">
                        <div class="panel-heading" role="tab" id="headingOne">
                            <h5 class="panel-title /*!collapsed*/ custom-carlo" data-toggle="collapse" data-parent="#accordion" href="#otcmaya" aria-expanded="true" aria-controls="otcmaya">
                               Online payment 
                            </h5>
                        </div>
                    </div>
                    <div id="otcmaya" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                        <div class="bank-card-body">
                            <div class="panel-body">
                                <!-- <strong>Here’s how to pay your Cablelink bill thru Over-the-Counter:</strong><br /><br /> -->
                                    <ol>
                                        <li>Select “Pay Bills” on the homepage of the Maya App</li>
                                        <li>Choose the biller “Cablelink”</li>
                                        <li>Input the required information</li>
                                        <li>Enter the amount to be paid</li>
                                        <li>Confirm the payment</li> 
                                        <li>Wait for Maya's confirmation on your payment via SMS</li>
                                    </ol>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- <button class="btn btn-primary btn-block">
                    Continue
                </button> -->
            </div>

        </div>
    </div>
</div>


<div class="modal fade" id="coinsph" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">

            <div class="modal-header gradient-bg  img-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <!-- <h4 class="modal-title" id="bankModalTitle">BDO</h4> -->
                 <img src="<?php echo base_url().'assets/img/remittance/coinsph.jpg' ?>" alt="COINS.PH">
            </div>

            <div class="modal-body text-center">
                <!-- <p id="bankModalText">Over-the-counter</p> -->
                <div class="bank-card-box">
                    <div class="bank-card-header">
                        <div class="panel-heading" role="tab" id="headingOne">
                            <h5 class="panel-title /*!collapsed*/ custom-carlo" data-toggle="collapse" data-parent="#accordion" href="#otccoinsph" aria-expanded="true" aria-controls="otccoinsph">
                               Online payment 
                            </h5>
                        </div>
                    </div>
                    <div id="otccoinsph" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                        <div class="bank-card-body">
                            <div class="panel-body">
                                <!-- <strong>Here’s how to pay your Cablelink bill thru Over-the-Counter:</strong><br /><br /> -->
                                    <ol>
                                        <li>Sign up for an account</li>
                                        <li>Choose an outlet to cash in</li>
                                        <li>Tap the Pay Bills icon on the App</li>
                                        <li>Select the “Cablelink”, input the required information and the amount</li>
                                        <li>Slide to pay</li> 
                                        <li>Wait for the Coins.Ph confirmation on payment via SMS</li>
                                    </ol>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- <button class="btn btn-primary btn-block">
                    Continue
                </button> -->
            </div>

        </div>
    </div>
</div>


<div class="modal fade" id="juancash" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">

            <div class="modal-header gradient-bg  img-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <!-- <h4 class="modal-title" id="bankModalTitle">BDO</h4> -->
                 <img src="<?php echo base_url().'assets/img/remittance/juancash.webp' ?>" alt="JUANCASH">
            </div>

            <div class="modal-body text-center">
                <!-- <p id="bankModalText">Over-the-counter</p> -->
                <div class="bank-card-box">
                    <div class="bank-card-header">
                        <div class="panel-heading" role="tab" id="headingOne">
                            <h5 class="panel-title /*!collapsed*/ custom-carlo" data-toggle="collapse" data-parent="#accordion" href="#otcjuancash" aria-expanded="true" aria-controls="otcjuancash">
                               Online payment 
                            </h5>
                        </div>
                    </div>
                    <div id="otcjuancash" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                        <div class="bank-card-body">
                            <div class="panel-body">
                                <!-- <strong>Here’s how to pay your Cablelink bill thru Over-the-Counter:</strong><br /><br /> -->
                                    <ol>
                                        <li>Log-in to JUANCASH App</li>
                                        <li>Click “ Pay bills “, Then select “Cablelink”</li>
                                        <li>Input required information</li>
                                        <li>Confirm payment</li>
                                        <li>Wait for JuanCash confirmation on payment via SMS</li> 
                                    </ol>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- <button class="btn btn-primary btn-block">
                    Continue
                </button> -->
            </div>

        </div>
    </div>
</div>



<div class="modal fade" id="diskartech" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">

            <div class="modal-header gradient-bg  img-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <!-- <h4 class="modal-title" id="bankModalTitle">BDO</h4> -->
                 <img src="<?php echo base_url().'assets/img/remittance/DISKARTECH.png' ?>" alt="DISKARTECH">
            </div>

            <div class="modal-body text-center">
                <!-- <p id="bankModalText">Over-the-counter</p> -->
                <div class="bank-card-box">
                    <div class="bank-card-header">
                        <div class="panel-heading" role="tab" id="headingOne">
                            <h5 class="panel-title /*!collapsed*/ custom-carlo" data-toggle="collapse" data-parent="#accordion" href="#otcdiskartech" aria-expanded="true" aria-controls="otcdiskartech">
                               Online payment 
                            </h5>
                        </div>
                    </div>
                    <div id="otcdiskartech" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                        <div class="bank-card-body">
                            <div class="panel-body">
                                <!-- <strong>Here’s how to pay your Cablelink bill thru Over-the-Counter:</strong><br /><br /> -->
                                    <ol>
                                        <li>Open Diskartech App and enter your 4- Digits Passcode</li>
                                        <li>Select “Pay Bills” on the homepage of Diskartech App</li>
                                        <li>Click Internet in the Category then choose “Cablelink”</li>
                                        <li>Input the required information</li>
                                        <li>Confirm the payment</li> 
                                        <li>Wait for Diskartech confirmation on your payment via SM</li> 

                                    </ol>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- <button class="btn btn-primary btn-block">
                    Continue
                </button> -->
            </div>

        </div>
    </div>
</div>



<div class="modal fade" id="peppermint" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">

            <div class="modal-header gradient-bg  img-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <!-- <h4 class="modal-title" id="bankModalTitle">BDO</h4> -->
                 <img src="<?php echo base_url().'assets/img/remittance/peppermint.svg' ?>" alt="PEPPERMINT">
            </div>

            <div class="modal-body text-center">
                <!-- <p id="bankModalText">Over-the-counter</p> -->
                <div class="bank-card-box">
                    <div class="bank-card-header">
                        <div class="panel-heading" role="tab" id="headingOne">
                            <h5 class="panel-title /*!collapsed*/ custom-carlo" data-toggle="collapse" data-parent="#accordion" href="#otcpeppermint" aria-expanded="true" aria-controls="otcpeppermint">
                               Online payment 
                            </h5>
                        </div>
                    </div>
                    <div id="otcpeppermint" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                        <div class="bank-card-body">
                            <div class="panel-body">
                                <!-- <strong>Here’s how to pay your Cablelink bill thru Over-the-Counter:</strong><br /><br /> -->
                                    <ol>
                                        <li>Log-in on Peppermint Apps</li>
                                        <li>On the home page select “Pay Bills”</li>
                                        <li>Choose “Cablelink”, Then input the required information</li>
                                        <li>Click confirm payment</li>
                                        <li>Wait for the Peppermint confirmation on payment via SMS</li> 
                                    </ol>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- <button class="btn btn-primary btn-block">
                    Continue
                </button> -->
            </div>

        </div>
    </div>
</div>



<div class="modal fade" id="justpayto" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">

            <div class="modal-header gradient-bg  img-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <!-- <h4 class="modal-title" id="bankModalTitle">BDO</h4> -->
                 <img src="<?php echo base_url().'assets/img/remittance/justpayto.png' ?>" alt="JUSTPAY.TO">
            </div>

            <div class="modal-body text-center">
                <!-- <p id="bankModalText">Over-the-counter</p> -->
                <div class="bank-card-box">
                    <div class="bank-card-header">
                        <div class="panel-heading" role="tab" id="headingOne">
                            <h5 class="panel-title /*!collapsed*/ custom-carlo" data-toggle="collapse" data-parent="#accordion" href="#otcjustpayto" aria-expanded="true" aria-controls="otcjustpayto">
                               Online payment 
                            </h5>
                        </div>
                    </div>
                    <div id="otcjustpayto" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                        <div class="bank-card-body">
                            <div class="panel-body">
                                <!-- <strong>Here’s how to pay your Cablelink bill thru Over-the-Counter:</strong><br /><br /> -->
                                    <ol>
                                        <li>Visit the JUSTPAYTO Bayad Center Payment Page</li>
                                        <li>Choose your type of bill</li>
                                        <li>Choose “Cablelink”'</li>
                                        <li>Fill up account details</li>
                                        <li>Click “payment option”</li> 
                                        <li>Select “Online Banking”</li>
                                        <li>Select where your bank is located</li>
                                        <li>Select what type of Online Banking you will use</li>
                                        <li>Choose what bank you will use</li>
                                        <li>After verifying the inputs and check the “ Terms and Conditions” Click “Pay Now”</li> 
                                        <li>Enter your contact information then Click “OK”</li>
                                        <li>Review transaction details then click “Confirm”</li>
                                        <li>Check your email to complete the transaction and see payment details</li>
                                        <li>Open your email to check transaction details and to see special instructions about how to deposit</li>
                                        <li>You will receive email and SMS notification for a successful transaction</li>

                                    </ol>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- <button class="btn btn-primary btn-block">
                    Continue
                </button> -->
            </div>

        </div>
    </div>
</div>




<div class="modal fade" id="alipay" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">

            <div class="modal-header gradient-bg  img-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <!-- <h4 class="modal-title" id="bankModalTitle">BDO</h4> -->
                 <img src="<?php echo base_url().'assets/img/remittance/alipay.png' ?>" alt="ALIPAY">
            </div>

            <div class="modal-body text-center">
                <!-- <p id="bankModalText">Over-the-counter</p> -->
                <div class="bank-card-box">
                    <div class="bank-card-header">
                        <div class="panel-heading" role="tab" id="headingOne">
                            <h5 class="panel-title /*!collapsed*/ custom-carlo" data-toggle="collapse" data-parent="#accordion" href="#otcalipay" aria-expanded="true" aria-controls="otcalipay">
                               Online payment 
                            </h5>
                        </div>
                    </div>
                    <div id="otcalipay" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                        <div class="bank-card-body">
                            <div class="panel-body">
                                <!-- <strong>Here’s how to pay your Cablelink bill thru Over-the-Counter:</strong><br /><br /> -->
                                    <ol>
                                        <li>Login to Alipay App</li>
                                        <li>Click “Pay bills “ then choose “Cablelink“</li>
                                        <li>Input the required information</li>
                                        <li>Confirm Payment </li>
                                        <li>Wait for Alipay confirmation on payment via SMS</li> 
                                    </ol>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- <button class="btn btn-primary btn-block">
                    Continue
                </button> -->
            </div>

        </div>
    </div>
</div>



<div class="modal fade" id="wechatpay" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">

            <div class="modal-header gradient-bg  img-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <!-- <h4 class="modal-title" id="bankModalTitle">BDO</h4> -->
                 <img src="<?php echo base_url().'assets/img/remittance/wechat.png' ?>" alt="WECHATPAY">
            </div>

            <div class="modal-body text-center">
                <!-- <p id="bankModalText">Over-the-counter</p> -->
                <div class="bank-card-box">
                    <div class="bank-card-header">
                        <div class="panel-heading" role="tab" id="headingOne">
                            <h5 class="panel-title /*!collapsed*/ custom-carlo" data-toggle="collapse" data-parent="#accordion" href="#otcwechatpay" aria-expanded="true" aria-controls="otcwechatpay">
                               Online payment 
                            </h5>
                        </div>
                    </div>
                    <div id="otcwechatpay" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                        <div class="bank-card-body">
                            <div class="panel-body">
                                <!-- <strong>Here’s how to pay your Cablelink bill thru Over-the-Counter:</strong><br /><br /> -->
                                    <ol>
                                        <li>Login to Wechat App</li>
                                        <li>Click “Pay bills” then choose “Cablelink”</li>
                                        <li>Input the required information</li>
                                        <li>Confirm Payment</li>
                                        <li>Wait for Wechat PAY confirmation on payment via SMS</li> 
                                    </ol>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- <button class="btn btn-primary btn-block">
                    Continue
                </button> -->
            </div>

        </div>
    </div>
</div>



<div class="modal fade" id="cards" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">

            <div class="modal-header gradient-bg  img-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <!-- <h4 class="modal-title" id="bankModalTitle">BDO</h4> -->
                 <img src="<?php echo base_url().'assets/img/remittance/visa-master.png' ?>" alt="Any Visa, MasterCard, AMEX and JCB">
            </div>

            <div class="modal-body text-center">
                <!-- <p id="bankModalText">Over-the-counter</p> -->
                <div class="bank-card-box">
                    <div class="bank-card-header">
                        <div class="panel-heading" role="tab" id="headingOne">
                            <h5 class="panel-title /*!collapsed*/ custom-carlo" data-toggle="collapse" data-parent="#accordion" href="#otccards" aria-expanded="true" aria-controls="otccards">
                               Any Visa, MasterCard, AMEX and JCB
                            </h5>
                        </div>
                    </div>
                    <div id="otccards" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                        <div class="bank-card-body">
                            <div class="panel-body">
                                <strong>Two ways to settle:</strong><br /><br />
                                    <ol>
                                        <li>Over-the-Counter - Credit Card payment is accepted at selected Cable Link offices.
                                            ( Parañaque, Las Piñas, Muntinlupa, Pateros and Imus)
                                        </li>
                                        <li>Auto Debit Arrangement - Subscribers may enroll at any Cablelink satellite offices. Subscriber must fill up an enrollment form at our office or enrollment forms may be forwarded to subscriber thru e-mail or fax or apply thru online  (Click here)</li>
                                    </ol>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- <button class="btn btn-primary btn-block">
                    Continue
                </button> -->
            </div>

        </div>
    </div>
</div>




<!--MODAL-->
<div id="OtpModalVerifaciton" class="modal fade modal-backdrop-new" role="dialog" data-backdrop="static" data-keyboard="false" style="/*!padding-top:150px;background: rgba(0, 0, 0, 0.5);!*/">
    <div class="modal-dialog modal-md">
        <!-- Modal content-->
        <div class="modal-content modal-content-test">
          <!-- <div class="" style="display: flex; align-items: center;">
             <h2 class="modal-title"><strong><h2>Enter OTP: <p id="OTPcode"></p></h2></strong></h2>
		          <button type="button" class="close" data-dismiss="modal">&times;</button> 
          </div> -->
            <div id="headerotp" style="height:140px; display: flex; align-items: center; justify-content: center; flex-direction: column; text-align: center;">
              <h1 class="modal-title">
                      <strong>OTP VERIFICATION</strong>
              </h1>
              <h6><p>Please type the verification sent to <strong>+63<span id="cont"></span></strong></p></h6>
              <!-- <p id="OTPcode"></p> -->
              <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
               
            </div>
            <div class="modal-body modal-body-test">
                <div align="center">
                  <div>
                    <form id="OTP" >
                      <!-- <input type="text" name="otp" placeholder="Enter OTP">
                      <button type="submit" class="btn btn-warning btnsize-sud" >Verify</button> -->
                          <!-- <div>
                              <input type="text" name="otp" id="otp" hidden/>
                              <label for="amount" hidden>Amount</label>
                          </div> -->
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
                  <!-- <strong><span class="glyphicon glyphicon-warning-sign" aria-hidden="true" style="color:orange;font-size: 28px;"></span><p style="color: orange; letter-spacing: 3px;">SUBMISSION FAILED</p></strong> -->
                </div>
                <div id="otp-timer" class="centered"><h5>OTP can be resent after <span id="countdown">60</span>s</h5></div>
                <div id="Resend" class="centered"  style="display:none;">
                  <span style="cursor:pointer;" onclick="OtpSecure('',document.getElementsByName('orderRef')[0].value);" style="float: center;">Resend OTP</span>
                </div>
                <!-- <div class="centered"><h6>Resend OTP</h6></div> -->
            </div>
            <div class="modal-footer  d-flex flex-wrap justify-content-center">
                    <a type="button" class="btn btn-primary returnButton ripple otp-buttonsize" href="<?php echo base_url()?>Paymentfacilities" > Cancel </a> <!--class="btn btn-primary btn-block" btn-cancel btn-secondary-->                                       
                    <!-- <a type="submit" id="verify" class="btn btn-primary blockedButton otp-buttonsize" form="OTP">Submit</a> --><!--centered-->
                    <button type="submit" id="verify" class="btn btn-primary blockedButton otp-buttonsize" form="OTP" >Submit</button>
                <!-- <button type="button" id="Resend" onclick="OtpSecure('',document.getElementsByName('orderRef')[0].value);" style="float: center;">Resend OTP</button>
                <button type="button" name=""data-dismiss="modal" style="float: center;">Close</button> -->
            </div>
        </div>
    </div>
</div>
<!--END OF MODAL-->



