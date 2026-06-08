<div class="internet">
	<div>
       <!--a href="<?php echo base_url().'promo/view_promo/6'; ?>"-->
        	<img class="hidden-xs" src="<?php echo base_url().'assets/img/carousel/fiberlink_home_desktop.jpg' ?>" class="img-responsive unselect" style="width:100%" />
        	<img class="visible-xs" src="<?php echo base_url().'assets/img/carousel/fiberlink_home_mobile.jpg' ?>" class="img-responsive unselect" style="width:100%" />
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
    		<p class="noteTest2">Start Fast, Go Faster with Fiberlink@Home Internet Brodband</p>
		<p class="note">Stay connected together at home with lightspeed Internet!</p>
   	</div>
	<div class="row" id="wrapper">
                <div class="int-pkg">
                	<div class="title">
				<p style="padding-left: 17%;">UP TO</p>
				<h1 style="padding-left: 17%;">5 Mbps</h1>
			</div>
			<div class="box">
   				<div class="ribbon">
					<div class="ribbon-stitches-top"></div>
					<div class="ribbon-content"><p><b>BEST SELLER</b></p></div>
					<div class="ribbon-stitches-bottom"></div>
				</div>
			</div>
			<div class="boost">
				<p>Boost up to</p>
				<h1>20 Mbps</h1>
			</div> 
			<div class="pick">
				<p>Internet Only</p>
				<h1>₱999/monthly</h1>
				<p>Bundled with Cable TV</p>
				<h1>₱1,299/monthly</h1>
			</div></br>              	
                </div>


		
	        <div class="int-pkg">
                	<div class="title">
				<p>UP TO</p>
				<h1>10 Mbps</h1>
			</div>
			<div class="boost">
				<p>Boost up to</p>
				<h1>40 Mbps</h1>
			</div>
			<div class="pick">
				<p>Internet Only</p>
				<h1>₱1,299/monthly</h1>
				<p>Bundled with Cable TV</p>
				<h1>₱1,599/monthly</h1>
			</div></br>              	
                </div>
            

   
                <div class="int-pkg">
                	<div class="title">
				<p>UP TO</p>
				<h1>20 Mbps</h1>
			</div>
			<div class="boost">
				<p>Boost up to</p>
				<h1>80 Mbps</h1>
			</div>     
			<div class="pick">
				<p>Internet Only</p>
				<h1>₱1,599/monthly</h1>
				<p>Bundled with Cable TV</p>
				<h1>₱1,899/monthly</h1>
			</div></br>         	
                </div>


                <div class="int-pkg">
                	<div class="title">
				<p>UP TO</p>
				<h1>50 Mbps</h1>
			</div>
			<div class="boost">
				<p>Boost up to</p>
				<h1>100 Mbps</h1>
			</div>     
			<div class="pick">
				<p>Internet only</p>
				<h1>₱1,899/monthly</h1>
				<p>Bundled with Cable TV</p>
				<h1>₱2,199/monthly</h1>
			</div></br>         	
                </div>


                <div class="int-pkg">
                	<div class="title">
				<p style="padding-left: 8%;">UP TO</p>
				<h1 style="padding-left: 8%;">100 Mbps</h1>
			</div>
			<div class="boost">
				<p>Boost up to</p>
				<h1>150 Mbps</h1>
			</div>    
			<div class="pick">
				<p>Internet only</p>
				<h1>₱2,199/monthly</h1>
				<p>Bundled with Cable TV</p>
				<h1>₱2,499/monthly</h1>
			</div></br>         	
                </div>

		<div class="text-center">
    			<p class="noteavrgspd">MINIMUM AVERAGE SPEED OF 30% AT 80% RELIABILITY.</p>
   		</div>

		<div class="text-center">
    			<p class="noteTest">Application Requirements</p>
   		</div>

		<div class="text-center">
    			<p class="noteTest1">Installation Fee - P2,000 | Lock-In Period - 24 months | Pre-termination - P5,000</p>
   		</div>





	</div>


</div>


	
		<div>
       <!--a href="<?php echo base_url().'promo/view_promo/6'; ?>"-->
        	<img class="hidden-xs" src="<?php echo base_url().'assets/img/carousel/internet_ichoose_web.jpg' ?>" class="img-responsive unselect" style="width:100%;" />
        	<img class="visible-xs" src="<?php echo base_url().'assets/img/carousel/internet_ichoose_mobile.jpg' ?>" class="img-responsive unselect" style="width:100%" />
    	<!--/a-->
    	</div>

	<div class="text-center">
    		<p class="noteTest3">Apply now!</p>
	</div>
	<div class="buttonTest">
				<div class="subscribeTest"><strong>SUBSCRIBE</strong></div>
				<div class="upgradeTest"><strong>UPGRADE</strong></div>
	</div>

</div>
