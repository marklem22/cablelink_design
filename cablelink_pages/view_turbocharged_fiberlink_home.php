<div class="internet">
	<div>
       <!--a href="<?php echo base_url().'promo/view_promo/6'; ?>"-->
        	<!--<img class="hidden-xs" src="<?php echo base_url().'assets/img/carousel/fiberlink_enterprise_desktop.jpg' ?>" class="img-responsive unselect" style="width:100%" />
        	<img class="visible-xs" src="<?php echo base_url().'assets/img/carousel/fiberlink_enterprise_mobile.jpg' ?>" class="img-responsive unselect" style="width:100%" />-->
    	<!--/a-->
    	</div>
	
    <!--<div class="container int-container">
	 update 2022
	<div class="container">
		<div class="row">
			<div class="hidden-xs col-sm-3">
				<div class="upto"></div>
				<div class="speed"></div>
				<div class="boost"></div>
			</div>
			<div class="col-xs-6 col-sm-3 label text-center">INTERNET ONLY</div>
			<div class="col-xs-6 col-sm-3 label text-center">BUNDLED WITH CATV</div>
			<div class="hidden-xs col-sm-3 buttonTest">
				<div></div>
				<div></div>
			</div>
		</div>
	</div>
	<div class="container-fluid internetTest">
		<div class="row">
			<div class="col-xs-12 col-sm-3 divTest">
				<div class="upto"><strong>UP TO</strong></div>
				<div class="speed"><strong>5 MBPS</strong></div>
				<div class="boost">BOOST UP TO <strong>10 MBPS</strong></div>
			</div>
			<div class="col-xs-6 col-sm-3 priceTest">
				₱999/<small>monthly</small>
			</div>
			<div class="col-xs-6 col-sm-3 priceTest">
				₱1,199/<small>monthly</small>
			</div>
			<div class="col-xs-12 col-sm-3 buttonTest">
				<div class="subscribeTest"><strong>SUBSCRIBE</strong></div>
				<div class="upgradeTest">
					<a href="<?php echo base_url().'unavailable'?>">UPGRADE</a>				
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid internetTest">
		<div class="row">
			<div class="col-xs-12 col-sm-3 divTest">
				<div class="upto"><strong>UP TO</strong></div>
				<div class="speed"><strong>10 MBPS</strong></div>
				<div class="boost">BOOST UP TO <strong>20 MBPS</strong></div>
			</div>
			<div class="col-xs-6 col-sm-3 priceTest">
				₱1,299/<small>monthly</small>
			</div>
			<div class="col-xs-6 col-sm-3 priceTest">
				₱1,499/<small>monthly</small>
			</div>
			<div class="col-xs-12 col-sm-3 buttonTest">
				<div class="subscribeTest"><strong>SUBSCRIBE</strong></div>
				<div class="upgradeTest">
					<a href="<?php echo base_url().'unavailable'?>">UPGRADE</a>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid internetTest">
		<div class="row">
			<div class="col-xs-12 col-sm-3 divTest">
				<div class="upto"><strong>UP TO</strong></div>
				<div class="speed"><strong>20 MBPS</strong></div>
				<div class="boost">BOOST UP TO <strong>40 MBPS</strong></div>
			</div>
			<div class="col-xs-6 col-sm-3 priceTest">
				₱1,599/<small>monthly</small>
			</div>
			<div class="col-xs-6 col-sm-3 priceTest">
				₱1,699/<small>monthly</small>
			</div>
			<div class="col-xs-12 col-sm-3 buttonTest">
				<div class="subscribeTest"><strong>SUBSCRIBE</strong></div>
				<div class="upgradeTest">
					<a href="<?php echo base_url().'unavailable'?>">UPGRADE</a>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid internetTest">
		<div class="row">
			<div class="col-xs-12 col-sm-3 divTest">
				<div class="upto"><strong>UP TO</strong></div>
				<div class="speed"><strong>50 MBPS</strong></div>
				<div class="boost">WITH FREE <strong>CATV</strong></div>
			</div>
			<div class="col-xs-12 col-sm-6 priceTest text-center">
				₱1,899/<small>monthly</small>
			</div>
			<div class="col-xs-12 col-sm-3 buttonTest">
				<div class="subscribeTest"><strong>SUBSCRIBE</strong></div>
				<div class="upgradeTest">
					<a href="<?php echo base_url().'unavailable'?>">UPGRADE</a>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid internetTest">
		<div class="row">
			<div class="col-xs-12 col-sm-3 divTest">
				<div class="upto"><strong>UP TO</strong></div>
				<div class="speed"><strong>100 MBPS</strong></div>
				<div class="boost">WITH FREE <strong>CATV</strong></div>
			</div>
			<div class="col-xs-12 col-sm-6 priceTest text-center">
				₱2,899/<small>monthly</small>
			</div>
			<div class="col-xs-12 col-sm-3 buttonTest">
				<div class="subscribeTest"><strong>SUBSCRIBE</strong></div>
				<div class="upgradeTest">
					<a href="<?php echo base_url().'unavailable'?>">UPGRADE</a>
				</div>
			</div>
		</div>
	</div>


	

	<div class="container">
		<div class="row">
			<div class="text-center">
				<p class="note"><strong>MINIMUM AVERAGE SPEED OF 30% AT 80% reliability.</strong></p>
			</div>
		</div>
	</div>


	</div>




    
	<div class="text-center bb">
    		<p class="note">MINIMUM AVERAGE SPEED OF 30% AT 80% reliability.</p>
   	</div>
	
    <span id="areas"></span>
    
    <div class="container">
    	<hr style="margin:25px 10px; border-bottom:1px solid #B0B0B0" />
    	<p class="newrate-title">AVAILABLE ON THE FOLLOWING AREAS:</p>
        	<div class="row" style="margin-bottom:80px">
            	<?php foreach($entire_offices as $office): ?>
            	<div class="col-md-2 text-center" style="padding:10px 0">
                	<p class="entire-address" style="line-height:10px">
                    	<span class="icon-map-marker" style="font-size:16px; color:#0046B0"></span>
                        <?php echo $office['name'] ?>
                   </p>
                    <?php if($office['dwelling_type']=='sdu'):?>
                        <p class="dwelling">(SDU* ONLY)</p>
                    <?php endif?>
                </div>
                <?php endforeach?>
            </div>
    	<hr style="margin:25px 10px; border-bottom:1px solid #B0B0B0" />
    	<p class="newrate-title">AVAILABLE ON SELECTED AREAS OF</p>
	<div class="row" style="margin-bottom:80px;">
            <?php foreach($selected_offices as $office): ?>
            	<div class="col-md-2 col-xs-12 col-sm-3 text-center">
                		<p class="entire-address addTest" style="line-height:10px;">
                        		<?php echo $office['name'] ?>
                   	</p>
                </div>
            <?php endforeach?>
         </div>

    </div>


    <div class="container">
    	<p style="margin:50px 10px 10px 10px">*SDU - Single Dwelling Unit</p>
    </div>


	2022 UPDATE

			-->
	

<div class="container int-container">
	<div class="text-center">
    		<!-- <p class="noteTest2 titlefont">Supercharge! Fast, Reliable and affordable Plans for your Business</p> -->
		<!-- <p class="note">Get the best speed to reach your unlimited business potential!</p> -->
   	</div>
	<div class="text-center mainnote">
    		<!-- <p class="noteTest2 notemarg">Fiberlink@Home</p> -->
			<div class="icon-container">
				<a href="<?php echo base_url().'Turbocharged_Iblaze_home'?>">
					<img src="<?php echo base_url().'assets/img/icons/Iblaze.png'?>" class="icon-iblaze">
				</a>
				<a>
					<img src="<?php echo base_url().'assets/img/icons/Fiberlink_Home.png'?>" class="icon-fiber">
				</a>
			</div>
			<p class="noteTest2 notemarg">TURBOCHARGED PLANS!</p>
		    <!--<p class="note subnote">EXPERIENCE LIGHTSPEED INTERNET</p> -->
   	</div>
	<div class="row" id="wrapper">


          	<!--testing-->
			<div class="int-pkgnew color1">
                	<div class="titlenew">
						<!-- <div class="upto">
    					  <span>UP</span><br>
    					  <span>TO</span>
						</div> -->
				<p>UP TO</p>
				<h1>50mbps</h1>
			</div>
			<!-- <div class="boost">
				<p>with Free</p>
				<h1>CATV</h1>
			</div> -->     
			<div class="picker">
				<!-- <p>Free CATV</p> -->
				<h1 style="background:#a83636;">₱599/mo</h1>
			</div>
			<div class="bottom">
				<img src="<?php echo base_url().'assets/img/icons/monitor.png'?>" class="icon">
				<div class="text-block">
				<h5>+FREE CABLE TV</h5>
				<h4>(BASIC LITE)</h4>
				</div>
			</div>
			<div class="subscribe">
				<a href="<?php echo base_url().'Subscribe?plan=turbocharged&cat=internet&package=50mbps&internet=fiberlink'?>">
					<strong>APPLY NOW!</strong>
				</a>
			</div>        	
            </div>
			<!--testing-->

			<!--testing-->
			<div class="int-pkgnew /*!color2!*/ color1">
                	<div class="titlenew">
						<!-- <div class="upto">
    					  <span>UP</span><br>
    					  <span>TO</span>
						</div> -->
				<p>UP TO</p>
				<h1>200mbps</h1>
			</div>
			<!-- <div class="boost">
				<p>with Free</p>
				<h1>CATV</h1>
			</div> -->     
			<div class="picker">
				<!-- <p>Free CATV</p> -->
				<h1 style="background:#a83636;">₱999/mo</h1>
			</div>
			<div class="bottom">
				<img src="<?php echo base_url().'assets/img/icons/monitor.png'?>" class="icon">
				<div class="text-block">
				<h5>+FREE CABLE TV</h5>
				<h4>(BASIC LITE)</h4>
				</div>
			</div>
			<div class="subscribe">
				<a href="<?php echo base_url().'Subscribe?plan=turbocharged&cat=internet&package=200mbps&internet=fiberlink'?>">
					<strong>APPLY NOW!</strong>
				</a>
			</div>        	
            </div>
			<!--testing-->

			<!--testing-->
			<div class="int-pkgnew /*!color3!*/ color1">
                	<div class="titlenew">
						<!-- <div class="upto">
    					  <span>UP</span><br>
    					  <span>TO</span>
						</div> -->
				<p>UP TO</p>
				<h1>300mbps</h1>
			</div>
			<!-- <div class="boost">
				<p>with Free</p>
				<h1>CATV</h1>
			</div> -->     
			<div class="picker">
				<!-- <p>Free CATV</p> -->
				<h1 style="background:#2525bf;">₱1,299/mo</h1>
			</div>
			<div class="bottom">
				<img src="<?php echo base_url().'assets/img/icons/monitor.png'?>" class="icon">
				<div class="text-block">
				<h5>+FREE CABLE TV</h5>
				<h4>(BASIC LITE)</h4>
				</div>
			</div>
			<div class="subscribe">
				<a href="<?php echo base_url().'Subscribe?plan=turbocharged&cat=internet&package=300mbps&internet=fiberlink'?>">
					<strong>APPLY NOW!</strong>
				</a>
			</div>        	
            </div>
			<!--testing-->



			<div></div>
			<!--second part-->
			          	<!--testing-->
			<div class="int-pkgnew color1">
                	<div class="titlenew">
						<!-- <div class="upto">
    					  <span>UP</span><br>
    					  <span>TO</span>
						</div> -->
				<p>UP TO</p>
				<h1>500mbps</h1>
			</div>
			<!-- <div class="boost">
				<p>with Free</p>
				<h1>CATV</h1>
			</div> -->     
			<div class="picker">
				<!-- <p>Free CATV</p> -->
				<h1 style="background:#a83636;">₱1,499/mo</h1>
			</div>
			<div class="bottom">
				<img src="<?php echo base_url().'assets/img/icons/monitor.png'?>" class="icon">
				<div class="text-block">
				<h5>+FREE CABLE TV</h5>
				<h4>(BASIC LITE)</h4>
				</div>
			</div>
			<div class="subscribe">
				<a href="<?php echo base_url().'Subscribe?plan=turbocharged&cat=internet&package=500mbps&internet=fiberlink'?>">
					<strong>APPLY NOW!</strong>
				</a>
			</div>        	
            </div>
			<!--testing-->
			<!--testing-->
			<div class="int-pkgnew /*!color2!*/ color1">
                	<div class="titlenew">
						<!-- <div class="upto">
    					  <span>UP</span><br>
    					  <span>TO</span>
						</div> -->
				<p>UP TO</p>
				<h1>800mbps</h1>
			</div>
			<!-- <div class="boost">
				<p>with Free</p>
				<h1>CATV</h1>
			</div> -->     
			<div class="picker">
				<!-- <p>Free CATV</p> -->
				<h1 style="background:#a83636;">₱1,999/mo</h1>
			</div>
			<div class="bottom">
				<img src="<?php echo base_url().'assets/img/icons/monitor.png'?>" class="icon">
				<div class="text-block">
				<h5>+FREE CABLE TV</h5>
				<h4>(BASIC LITE)</h4>
				</div>
			</div>
			<div class="subscribe">
				<a href="<?php echo base_url().'Subscribe?plan=turbocharged&cat=internet&package=800mbps&internet=fiberlink'?>">
					<strong>APPLY NOW!</strong>
				</a>
			</div>        	
            </div>
			<!--testing-->

			<!--testing-->
			<div class="int-pkgnew /*!color3!*/ color1">
                	<div class="titlenew">
						<!-- <div class="upto">
    					  <span>UP</span><br>
    					  <span>TO</span>
						</div> -->
				<p>UP TO</p>
				<h1>1000mbps</h1>
			</div>
			<!-- <div class="boost">
				<p>with Free</p>
				<h1>CATV</h1>
			</div> -->     
			<div class="picker">
				<!-- <p>Free CATV</p> -->
				<h1 style="background:#2525bf;">₱2,999/mo</h1>
			</div>
			<div class="bottom">
				<img src="<?php echo base_url().'assets/img/icons/monitor.png'?>" class="icon">
				<div class="text-block">
				<h5>+FREE CABLE TV</h5>
				<h4>(BASIC LITE)</h4>
				</div>
			</div>
			<div class="subscribe">
				<a href="<?php echo base_url().'Subscribe?plan=turbocharged&cat=internet&package=1000mbps&internet=fiberlink'?>">
					<strong>APPLY NOW!</strong>
				</a>
			</div>        	
            </div>
			<!--testing-->

				
		<!-- <div class="ssas">
    			<p class="noteavrgspd"><strong>FOR OTHER SERVICES AND SOLUTIONS,</strong><small> please call 8825-6789 loc. 2845 or email us at sales@cablelink.com.ph or contact your Account Officer</small></p>
   		</div> -->

		<!-- <div class="text-center">
    			<p class="noteTest">Application Requirements</p>
   		</div>

		<div class="text-center">
    			<p class="noteTest1">Installation Fee - P1,000 | Lock-In Period - 18 months | Pre-termination - P5,000</p>
   		</div> -->
	</div>


</div>


	
		<!--<div>
       a href="<?php echo base_url().'promo/view_promo/6'; ?>"        	<img class="hidden-xs" src="<?php echo base_url().'assets/img/carousel/internet_ichoose_web.jpg' ?>" class="img-responsive unselect" style="width:100%;" />
        	<img class="visible-xs" src="<?php echo base_url().'assets/img/carousel/internet_ichoose_mobile.jpg' ?>" class="img-responsive unselect" style="width:100%" />
    	/a
    	</div>-->

	<!-- <div class="text-center">
    		<p class="noteTest3">Apply now!</p>
	</div>
	<div class="buttonTest"> -->
				<!--<div class="subscribeTest"><strong>SUBSCRIBE</strong></div>
				<div class="upgradeTest"><strong>UPGRADE</strong></div>-->
	<!-- </div>

</div> -->
