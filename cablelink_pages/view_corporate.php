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
    		<p class="noteTest2 titlefont">Supercharge! Fast, Reliable and affordable Plans for your Business</p>
		<!-- <p class="note">Get the best speed to reach your unlimited business potential!</p> -->
   	</div>
	<div class="text-center mainnote">
    		<p class="noteTest2 notemarg">FIBERLINK</p>
			<p class="noteTest2 notemarg">ENTERPRISE</p>
		    <p class="note subnote">Connectivity that keeps your business moving.</p>
   	</div>
	<div class="row" id="wrapper">
            <div class="int-pkg">
                <div class="title color">
					<!-- <p style="padding-left: 40%;">UP TO</p>
					<h1 style="marigin-bottom: 0; padding-bottom:0;">40-80 </h1>
					<h1 style="margin:0;">Mbps</h1> -->

					<!-- <p style="padding-left: 40%;">UP TO</p>
					<h1 style="marigin-bottom: 0; padding-bottom:0;">40 Mbps</h1>
					<hr style="border:0; border-top:1px solid white; margin:10px 0;">
					<p style="padding-left: 40%;">UP TO</p>
					<h1 style="marigin-bottom: 0; padding-bottom:0;">80 Mbps</h1> -->

					<p style="padding-left: 40%;">UP TO</p>
					<h1 style="marigin-bottom: 0; padding-bottom:0;">40-80</h1>
					<h1 style="marigin-bottom: 0; padding-bottom:0;">Mbps</h1>
					<!-- <h1 style="margin:0;">Mbps</h1> -->
				</div>
				<!-- <div class="box">
   					<div class="ribbon">
						<div class="ribbon-stitches-top"></div>
						<div class="ribbon-content"><p><b>BEST SELLER</b></p></div>
						<div class="ribbon-stitches-bottom"></div>
					</div>
				</div> -->
				<!-- <div class="boost">
					<p>Boost up to</p>
					<h1>40 Mbps</h1>
				</div>  -->
				<div class="picked">
					<!-- <p><span style="color:green;">✔ </span>Ideal for up to 30 users</p> -->
					<!-- <h1>₱2,499/monthly</h1> -->
					<p><span style="color:green;">✔ </span>Internet only</p>
					<!-- <h1>₱2,599/monthly</h1> -->
					<!-- <p><span style="color:green;">✔ </span>Bundled with CATV</p> -->
				</div>
				<div class="subscribe">
					<a href="<?php echo base_url().'Subscribe_corporate?cat=internet&package=40-80mbps&internet=fiberlink-enterprise'?>">
						<strong>GET CONNECTED</strong>
					</a>
				</div>              	
            </div>

            <div class="int-pkg">
                <div class="title color">
					<!-- <p style="padding-left: 40%;">UP TO</p>
					<h1 style="marigin-bottom: 0; padding-bottom:0;">100-200 </h1>
					<h1 style="margin:0;">Mbps</h1> -->

					<!-- <p style="padding-left: 40%;">UP TO</p>
					<h1 style="marigin-bottom: 0; padding-bottom:0;">100 Mbps</h1>
					<hr style="border:0; border-top:1px solid white; margin:10px 0;">
					<p style="padding-left: 40%;">UP TO</p>
					<h1 style="marigin-bottom: 0; padding-bottom:0;">200 Mbps</h1> -->

					<p style="padding-left: 40%;">UP TO</p>
					<h1 style="marigin-bottom: 0; padding-bottom:0;">100-200</h1>
					<h1 style="marigin-bottom: 0; padding-bottom:0;">Mbps</h1>
				</div>
				<!-- <div class="box">
   					<div class="ribbon">
						<div class="ribbon-stitches-top"></div>
						<div class="ribbon-content"><p><b>BEST SELLER</b></p></div>
						<div class="ribbon-stitches-bottom"></div>
					</div>
				</div> -->
				<!-- <div class="boost">
					<p>Boost up to</p>
					<h1>40 Mbps</h1>
				</div>  -->
				<div class="picked">
					<!-- <p class="longtext"><span style="color:green;">✔&nbsp;</span> <span> Ideal for up to 40 to 60 users</span></p> -->
					<!-- <h1>₱2,499/monthly</h1> -->
					<p><span style="color:green;">✔ </span>Internet only</p>
					<!-- <h1>₱2,599/monthly</h1> -->
					<!-- <p><span style="color:green;">✔ </span>Bundled with CATV</p> -->
				</div>
				<div class="subscribe">
					<a href="<?php echo base_url().'Subscribe_corporate?cat=internet&package=100-200mbps&internet=fiberlink-enterprise'?>">
						<strong>GET CONNECTED</strong>
					</a>
				</div>              	
            </div>

			<div class="int-pkg">
                <div class="title color2">
					<!-- <p style="padding-left: 40%;">UP TO</p>
					<h1 style="marigin-bottom: 0; padding-bottom:0;">300-500 </h1>
					<h1 style="margin:0;">Mbps</h1> -->
					<!-- <p style="padding-left: 40%;">UP TO</p>
					<h1 style="marigin-bottom: 0; padding-bottom:0;">300 Mbps</h1>
					<hr style="border:0; border-top:1px solid white; margin:10px 0;">
					<p style="padding-left: 40%;">UP TO</p>
					<h1 style="marigin-bottom: 0; padding-bottom:0;">500 Mbps</h1> -->

					<p style="padding-left: 40%;">UP TO</p>
					<h1 style="marigin-bottom: 0; padding-bottom:0;">300-500</h1>
					<h1 style="marigin-bottom: 0; padding-bottom:0;">Mbps</h1>
				</div>
				<!-- <div class="box">
   					<div class="ribbon">
						<div class="ribbon-stitches-top"></div>
						<div class="ribbon-content"><p><b>BEST SELLER</b></p></div>
						<div class="ribbon-stitches-bottom"></div>
					</div>
				</div> -->
				<!-- <div class="boost">
					<p>Boost up to</p>
					<h1>40 Mbps</h1>
				</div>  -->
				<div class="picked">
					<!-- <p  class="longtext"><span style="color:green;">✔&nbsp;</span><span>Ideal for up to 70 to 100 users</span></p> -->
					<!-- <h1>₱2,499/monthly</h1> -->
					<p><span style="color:green;">✔ </span>Internet only</p>
					<!-- <h1>₱2,599/monthly</h1> -->
					<!-- <p><span style="color:green;">✔ </span>Bundled with CATV</p> -->
				</div>
				<div class="subscribe">
					<a href="<?php echo base_url().'Subscribe_corporate?cat=internet&package=300-500mbps&internet=fiberlink-enterprise'?>">
						<strong>GET CONNECTED</strong>
					</a>
				</div>              	
            </div>


			<div class="int-pkg">
                <div class="title color2">
					<!-- <p style="padding-left: 40%;">UP TO</p>
					<h1 style="marigin-bottom: 0; padding-bottom:0;">800mbps to</h1>
					<h1 style="margin:0;">1 GBPS</h1> -->
					<!-- <p style="padding-left: 40%;">UP TO</p>
					<h1 style="marigin-bottom: 0; padding-bottom:0;">800 Mbps</h1>
					<hr style="border:0; border-top:1px solid white; margin:10px 0;">
					<p style="padding-left: 40%;">UP TO</p>
					<h1 style="marigin-bottom: 0; padding-bottom:0;">1 Gbps</h1> -->
					 <p style="padding-left: 40%;">UP TO</p>
					<h1 style="marigin-bottom: 0; padding-bottom:0;">800-1</h1>
					<h1 style="marigin-bottom: 0; padding-bottom:0;">Mbps/Gbps</h1>
				</div>
				<!-- <div class="box">
   					<div class="ribbon">
						<div class="ribbon-stitches-top"></div>
						<div class="ribbon-content"><p><b>BEST SELLER</b></p></div>
						<div class="ribbon-stitches-bottom"></div>
					</div>
				</div> -->
				<!-- <div class="boost">
					<p>Boost up to</p>
					<h1>40 Mbps</h1>
				</div>  -->
				<div class="picked">
					<!-- <p  class="longtext"><span style="color:green;">✔&nbsp;</span><span>Ideal for up to 70 to 100 users</span></p> -->
					<!-- <h1>₱2,499/monthly</h1> -->
					<p><span style="color:green;">✔ </span>Internet only</p>
					<!-- <h1>₱2,599/monthly</h1> -->
					<!-- <p><span style="color:green;">✔ </span>Bundled with CATV</p> -->
				</div>
				<div class="subscribe">
					<a href="<?php echo base_url().'Subscribe_corporate?cat=internet&package=800mbps-1gbps&internet=fiberlink-enterprise'?>">
						<strong>GET CONNECTED</strong>
					</a>
				</div>              	
            </div>



			<div class="text-center mainnote">
    			<p class="noteTest2 notemarg">FIBERLINK</p>
				<p class="noteTest2 notemarg">PREMIUM BIZ</p>
		    	<p class="note subnote">Engineered for uptime. Designed for business</p>
   			</div>

            <div class="int-pkg">
                <div class="title color">
					<!-- <p style="padding-left: 40%;">UP TO</p>
					<h1 style="marigin-bottom: 0; padding-bottom:0;">10-50 </h1>
					<h1 style="margin:0;">Mbps</h1> -->
					<!-- <p style="padding-left: 40%;">UP TO</p>
					<h1 style="marigin-bottom: 0; padding-bottom:0;">10 Mbps</h1>
					<hr style="border:0; border-top:1px solid white; margin:10px 0;">
					<p style="padding-left: 40%;">UP TO</p>
					<h1 style="marigin-bottom: 0; padding-bottom:0;">20 Mbps</h1> -->

					<p style="padding-left: 40%;">UP TO</p>
					<h1 style="marigin-bottom: 0; padding-bottom:0;">10-20</h1>
					<h1 style="marigin-bottom: 0; padding-bottom:0;">Mbps</h1>
				</div>
				<!-- <div class="box">
   					<div class="ribbon">
						<div class="ribbon-stitches-top"></div>
						<div class="ribbon-content"><p><b>BEST SELLER</b></p></div>
						<div class="ribbon-stitches-bottom"></div>
					</div>
				</div> -->
				<!-- <div class="boost">
					<p>Boost up to</p>
					<h1>40 Mbps</h1>
				</div>  -->
				<div class="picked">
					<!-- <p><span style="color:green;">✔ </span>Ideal for up 1 to 10 users</p> -->
					<!-- <h1>₱2,499/monthly</h1> -->
					<p><span style="color:green;">✔ </span>Internet only</p>
					<!-- <h1>₱2,599/monthly</h1> -->
					<!-- <p><span style="color:green;">✔ </span>Bundled with CATV</p> -->
				</div>
				<div class="subscribe">
					<a href="<?php echo base_url().'Subscribe_corporate?cat=internet&package=10-20mbps&internet=fiberlink-premium'?>">
						<strong>GET CONNECTED</strong>
					</a>
				</div>              	
            </div>

            <div class="int-pkg">
                <div class="title color">
					<!-- <p style="padding-left: 40%;">UP TO</p>
					<h1 style="marigin-bottom: 0; padding-bottom:0;">60-100 </h1>
					<h1 style="margin:0;">Mbps</h1> -->
					<!-- <p style="padding-left: 40%;">UP TO</p>
					<h1 style="marigin-bottom: 0; padding-bottom:0;">40 Mbps</h1>
					<hr style="border:0; border-top:1px solid white; margin:10px 0;">
					<p style="padding-left: 40%;">UP TO</p>
					<h1 style="marigin-bottom: 0; padding-bottom:0;">50 Mbps</h1> -->

					<p style="padding-left: 40%;">UP TO</p>
					<h1 style="marigin-bottom: 0; padding-bottom:0;">40-50</h1>
					<h1 style="marigin-bottom: 0; padding-bottom:0;">Mbps</h1>
				</div>
				<!-- <div class="box">
   					<div class="ribbon">
						<div class="ribbon-stitches-top"></div>
						<div class="ribbon-content"><p><b>BEST SELLER</b></p></div>
						<div class="ribbon-stitches-bottom"></div>
					</div>
				</div> -->
				<!-- <div class="boost">
					<p>Boost up to</p>
					<h1>40 Mbps</h1>
				</div>  -->
				<div class="picked">
					<!-- <p class="longtext"><span style="color:green;">✔&nbsp;</span><span>Ideal for up to 10 to 20 users</span></p> -->
					<!-- <h1>₱2,499/monthly</h1> -->
					<p><span style="color:green;">✔ </span>Internet only</p>
					<!-- <h1>₱2,599/monthly</h1> -->
					<!-- <p><span style="color:green;">✔ </span>Bundled with CATV</p> -->
				</div>
				<div class="subscribe">
					<a href="<?php echo base_url().'Subscribe_corporate?cat=internet&package=40-50mbps&internet=fiberlink-premium'?>">
						<strong>GET CONNECTED</strong>
					</a>
				</div>              	
            </div>

			<div class="int-pkg">
                <div class="title /*!long*/ color">
					<!-- <p style="padding-left: 40%;">UP TO</p>
					<h1 style="marigin-bottom: 0; padding-bottom:0;">200mbps to</h1>
					<h1 style="margin:0;">1GBPS</h1> -->
					<!-- <p style="padding-left: 40%;">UP TO</p>
					<h1 style="marigin-bottom: 0; padding-bottom:0;">60 Mbps</h1>
					<hr style="border:0; border-top:1px solid white; margin:10px 0;">
					<p style="padding-left: 40%;">UP TO</p>
					<h1 style="marigin-bottom: 0; padding-bottom:0;">80 Mbps</h1> -->

					<p style="padding-left: 40%;">UP TO</p>
					<h1 style="marigin-bottom: 0; padding-bottom:0;">60-80</h1>
					<h1 style="marigin-bottom: 0; padding-bottom:0;">Mbps</h1>
				</div>
				<!-- <div class="box">
   					<div class="ribbon">
						<div class="ribbon-stitches-top"></div>
						<div class="ribbon-content"><p><b>BEST SELLER</b></p></div>
						<div class="ribbon-stitches-bottom"></div>
					</div>
				</div> -->
				<!-- <div class="boost">
					<p>Boost up to</p>
					<h1>40 Mbps</h1>
				</div>  -->
				<div class="picked">
					<!-- <p class="longtext"><span style="color:green;">✔&nbsp;</span><span>Ideal for up to 70 to 100 users</span></p> -->
					<!-- <h1>₱2,499/monthly</h1> -->
					<p><span style="color:green;">✔ </span>Internet only</p>
					<!-- <h1>₱2,599/monthly</h1> -->
					<!-- <p><span style="color:green;">✔ </span>Bundled with CATV</p> -->
				</div>
				<div class="subscribe">
					<a href="<?php echo base_url().'Subscribe_corporate?cat=internet&package=60-80mbps&internet=fiberlink-premium'?>">
						<strong>GET CONNECTED</strong>
					</a>
				</div>              	
            </div>

			<div class="int-pkg">
                <div class="title /*!long*/ color">
					<!-- <p style="padding-left: 40%;">UP TO</p>
					<h1 style="marigin-bottom: 0; padding-bottom:0;">200mbps to</h1>
					<h1 style="margin:0;">1GBPS</h1> -->
					<!-- <p style="padding-left: 40%;">UP TO</p>
					<h1 style="marigin-bottom: 0; padding-bottom:0;">100 Mbps</h1>
					<hr style="border:0; border-top:1px solid white; margin:10px 0;">
					<p style="padding-left: 40%;">UP TO</p>
					<h1 style="marigin-bottom: 0; padding-bottom:0;">200 Mbps</h1> -->

					<p style="padding-left: 40%;">UP TO</p>
					<h1 style="marigin-bottom: 0; padding-bottom:0;">100-200</h1>
					<h1 style="marigin-bottom: 0; padding-bottom:0;">Mbps</h1>
				</div>
				<!-- <div class="box">
   					<div class="ribbon">
						<div class="ribbon-stitches-top"></div>
						<div class="ribbon-content"><p><b>BEST SELLER</b></p></div>
						<div class="ribbon-stitches-bottom"></div>
					</div>
				</div> -->
				<!-- <div class="boost">
					<p>Boost up to</p>
					<h1>40 Mbps</h1>
				</div>  -->
				<div class="picked">
					<!-- <p class="longtext"><span style="color:green;">✔&nbsp;</span><span>Ideal for up to 70 to 100 users</span></p> -->
					<!-- <h1>₱2,499/monthly</h1> -->
					<p><span style="color:green;">✔ </span>Internet only</p>
					<!-- <h1>₱2,599/monthly</h1> -->
					<!-- <p><span style="color:green;">✔ </span>Bundled with CATV</p> -->
				</div>
				<div class="subscribe">
					<a href="<?php echo base_url().'Subscribe_corporate?cat=internet&package=100-200mbps&internet=fiberlink-premium'?>">
						<strong>GET CONNECTED</strong>
					</a>
				</div>              	
            </div>

			<div class="int-pkg">
                <div class="title /*!long*/ color2">
					<!-- <p style="padding-left: 40%;">UP TO</p>
					<h1 style="marigin-bottom: 0; padding-bottom:0;">200mbps to</h1>
					<h1 style="margin:0;">1GBPS</h1> -->
					<!-- <p style="padding-left: 40%;">UP TO</p>
					<h1 style="marigin-bottom: 0; padding-bottom:0;">300 Mbps</h1>
					<hr style="border:0; border-top:1px solid white; margin:10px 0;">
					<p style="padding-left: 40%;">UP TO</p>
					<h1 style="marigin-bottom: 0; padding-bottom:0;">400 Mbps</h1> -->

					<p style="padding-left: 40%;">UP TO</p>
					<h1 style="marigin-bottom: 0; padding-bottom:0;">300-400</h1>
					<h1 style="marigin-bottom: 0; padding-bottom:0;">Mbps</h1>
				</div>
				<!-- <div class="box">
   					<div class="ribbon">
						<div class="ribbon-stitches-top"></div>
						<div class="ribbon-content"><p><b>BEST SELLER</b></p></div>
						<div class="ribbon-stitches-bottom"></div>
					</div>
				</div> -->
				<!-- <div class="boost">
					<p>Boost up to</p>
					<h1>40 Mbps</h1>
				</div>  -->
				<div class="picked">
					<!-- <p class="longtext"><span style="color:green;">✔&nbsp;</span><span>Ideal for up to 70 to 100 users</span></p> -->
					<!-- <h1>₱2,499/monthly</h1> -->
					<p><span style="color:green;">✔ </span>Internet only</p>
					<!-- <h1>₱2,599/monthly</h1> -->
					<!-- <p><span style="color:green;">✔ </span>Bundled with CATV</p> -->
				</div>
				<div class="subscribe">
					<a href="<?php echo base_url().'Subscribe_corporate?cat=internet&package=300-400mbps&internet=fiberlink-premium'?>">
						<strong>GET CONNECTED</strong>
					</a>
				</div>              	
            </div>
			
			<div class="int-pkg">
                <div class="title /*!long*/ color2">
					<!-- <p style="padding-left: 40%;">UP TO</p>
					<h1 style="marigin-bottom: 0; padding-bottom:0;">200mbps to</h1>
					<h1 style="margin:0;">1GBPS</h1> -->
					<!-- <p style="padding-left: 40%;">UP TO</p>
					<h1 style="marigin-bottom: 0; padding-bottom:0;">500 Mbps</h1>
					<hr style="border:0; border-top:1px solid white; margin:10px 0;">
					<p style="padding-left: 40%;">UP TO</p>
					<h1 style="marigin-bottom: 0; padding-bottom:0;">600 Mbps</h1> -->

					<p style="padding-left: 40%;">UP TO</p>
					<h1 style="marigin-bottom: 0; padding-bottom:0;">500-600</h1>
					<h1 style="marigin-bottom: 0; padding-bottom:0;">Mbps</h1>
				</div>
				<!-- <div class="box">
   					<div class="ribbon">
						<div class="ribbon-stitches-top"></div>
						<div class="ribbon-content"><p><b>BEST SELLER</b></p></div>
						<div class="ribbon-stitches-bottom"></div>
					</div>
				</div> -->
				<!-- <div class="boost">
					<p>Boost up to</p>
					<h1>40 Mbps</h1>
				</div>  -->
				<div class="picked">
					<!-- <p class="longtext"><span style="color:green;">✔&nbsp;</span><span>Ideal for up to 70 to 100 users</span></p> -->
					<!-- <h1>₱2,499/monthly</h1> -->
					<p><span style="color:green;">✔ </span>Internet only</p>
					<!-- <h1>₱2,599/monthly</h1> -->
					<!-- <p><span style="color:green;">✔ </span>Bundled with CATV</p> -->
				</div>
				<div class="subscribe">
					<a href="<?php echo base_url().'Subscribe_corporate?cat=internet&package=500-600mbps&internet=fiberlink-premium'?>">
						<strong>GET CONNECTED</strong>
					</a>
				</div>              	
            </div>

			<div class="int-pkg">
                <div class="title /*!long*/ color2">
					<!-- <p style="padding-left: 40%;">UP TO</p>
					<h1 style="marigin-bottom: 0; padding-bottom:0;">200mbps to</h1>
					<h1 style="margin:0;">1GBPS</h1> -->
					<!-- <p style="padding-left: 40%;">UP TO</p>
					<h1 style="marigin-bottom: 0; padding-bottom:0;">700 Mbps</h1>
					<hr style="border:0; border-top:1px solid white; margin:10px 0;">
					<p style="padding-left: 40%;">UP TO</p>
					<h1 style="marigin-bottom: 0; padding-bottom:0;">800 Mbps</h1> -->

					<p style="padding-left: 40%;">UP TO</p>
					<h1 style="marigin-bottom: 0; padding-bottom:0;">700-800</h1>
					<h1 style="marigin-bottom: 0; padding-bottom:0;">Mbps</h1>
				</div>
				<!-- <div class="box">
   					<div class="ribbon">
						<div class="ribbon-stitches-top"></div>
						<div class="ribbon-content"><p><b>BEST SELLER</b></p></div>
						<div class="ribbon-stitches-bottom"></div>
					</div>
				</div> -->
				<!-- <div class="boost">
					<p>Boost up to</p>
					<h1>40 Mbps</h1>
				</div>  -->
				<div class="picked">
					<!-- <p class="longtext"><span style="color:green;">✔&nbsp;</span><span>Ideal for up to 70 to 100 users</span></p> -->
					<!-- <h1>₱2,499/monthly</h1> -->
					<p><span style="color:green;">✔ </span>Internet only</p>
					<!-- <h1>₱2,599/monthly</h1> -->
					<!-- <p><span style="color:green;">✔ </span>Bundled with CATV</p> -->
				</div>
				<div class="subscribe">
					<a href="<?php echo base_url().'Subscribe_corporate?cat=internet&package=700-800mbps&internet=fiberlink-premium'?>">
						<strong>GET CONNECTED</strong>
					</a>
				</div>              	
            </div>

			<div class="int-pkg">
                <div class="title /*!long*/ color2">
					<!-- <p style="padding-left: 40%;">UP TO</p>
					<h1 style="marigin-bottom: 0; padding-bottom:0;">200mbps to</h1>
					<h1 style="margin:0;">1GBPS</h1> -->
					<!-- <p style="padding-left: 40%;">UP TO</p>
					<h1 style="marigin-bottom: 0; padding-bottom:0;">900 Mbps</h1>
					<hr style="border:0; border-top:1px solid white; margin:10px 0;">
					<p style="padding-left: 40%;">UP TO</p>
					<h1 style="marigin-bottom: 0; padding-bottom:0;">1 Gbps</h1> -->

					<p style="padding-left: 40%;">UP TO</p>
					<h1 style="marigin-bottom: 0; padding-bottom:0;">900-1</h1>
					<h1 style="marigin-bottom: 0; padding-bottom:0;">Mbps/Gbps</h1>
				</div>
				<!-- <div class="box">
   					<div class="ribbon">
						<div class="ribbon-stitches-top"></div>
						<div class="ribbon-content"><p><b>BEST SELLER</b></p></div>
						<div class="ribbon-stitches-bottom"></div>
					</div>
				</div> -->
				<!-- <div class="boost">
					<p>Boost up to</p>
					<h1>40 Mbps</h1>
				</div>  -->
				<div class="picked">
					<!-- <p class="longtext"><span style="color:green;">✔&nbsp;</span><span>Ideal for up to 70 to 100 users</span></p> -->
					<!-- <h1>₱2,499/monthly</h1> -->
					<p><span style="color:green;">✔ </span>Internet only</p>
					<!-- <h1>₱2,599/monthly</h1> -->
					<!-- <p><span style="color:green;">✔ </span>Bundled with CATV</p> -->
				</div>
				<div class="subscribe">
					<a href="<?php echo base_url().'Subscribe_corporate?cat=internet&package=900mbps-1gbps&internet=fiberlink-premium'?>">
						<strong>GET CONNECTED</strong>
					</a>
				</div>              	
            </div>

			<!-- <div class="text-center mainnote">
    			<p class="noteTest2 notemarg">CABLELINK</p>
				<p class="noteTest2 notemarg">PREMIUM DIA</p>
		    	<p class="note subnote">EXPERIENCE LIGHTSPEED INTERNET</p>
   			</div>

			<div class="int-pkg">
                <div class="title">
					<p style="padding-left: 40%;">UP TO</p>
					<h1 style="marigin-bottom: 0; padding-bottom:0;">10Gbps</h1>
				</div>
				<div class="picked">
					<p><span style="color:green;">✔ Architecture: </span>FTTX or DLL</p>
					<p><span style="color:green;">✔ Connection: </span>Dedicated</p>
					<p><span style="color:green;">✔ Package: </span>Media Converter or SFP and Statis IP</p>
				</div>
				<div class="subscribe">
					<a href="<?php echo base_url().'subscribe?cat=internet&package=10mbps&internet=fiberlink-enterprise'?>">
						<strong>GET CONNECTED</strong>
					</a>
				</div>              	
            </div> -->

			<!--testing-->
			<!-- <div class="int-pkgnew">
                	<div class="titlenew">
						<div class="upto">
    					  <span>UP</span><br>
    					  <span>TO</span>
						</div> -->
				<!-- <p>UPTO</p> -->
				<!-- <h1>120mbps</h1>
				</div> -->
				<!-- <div class="boost">
					<p>with Free</p>
					<h1>CATV</h1>
				</div> -->     
				<!-- <div class="picker">
					<p>Free CATV</p>
					<h1>₱4,699/monthly</h1>
				</div>
				<div class="subscribe">
					<a href="<?php echo base_url().'subscribe?cat=internet&package=50mbps&internet=iblaze-enterprise'?>">
						<strong>APPLY NOW!</strong>
					</a>
				</div>        	
            </div> -->
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
