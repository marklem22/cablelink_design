<div class="cabletv">
<div>
    <?php if($basic_plus_flyer['img_name_bg']!=''):?>
    <img class="hidden-xs" src="<?php echo base_url().'assets/img/cabletv/'.$basic_plus_flyer['img_name_bg'] ?>" class="img-responsive unselect" style="width:100%" />
   <!-- <img class="hidden-xs" src="<?php echo base_url().'assets/img/carousel/basic_plus_desktop.jpg' ?>" class="img-responsive unselect" style="width:100%" />
   <img class="visible-xs" src="<?php echo base_url().'assets/img/carousel/basic_plus_mobile.jpg' ?>" class="img-responsive unselect" style="width:100%" /> -->
   <?php endif;?>
</div>
<div class="container-fluid">
    <div class="row">
	<div class="cableTag"><!--lifestyle 2 and 1-->
        	<!-- <h1>Subscribe to Basic Plus CATV Plan</h1>
		<h4>Get access to SD and HD Channels with latest updates on news, music, entertainment and sports</h4> -->
		<!-- <h1 class="title">CHANNELS INCLUDE</h1> -->
		<h1 class="title">BASIC <span class="orange">PLUS</span> <span class="small-title">CHANNEL GUIDE</span></h1>
    	</div>
        <!-- <div class="col-sm-6 col-md-4 channel-cat">
            <?php foreach($basic_cat as $cat): ?>
                <?php if($cat['Column_no'] == 1): ?>
                    <h4><?php echo $cat['name'] ?></h4>
                        <?php foreach($basic_cat_sub as $catsub): ?>
                            <?php if($catsub['category'] ==  $cat['ID']): ?>
                                <div class="row">
                                     <div class="col-xs-12 channel-title" style="text-align:left">
                                         <span class="channel-num"><?php echo $catsub['channel_no'] ?></span> &nbsp;<?php echo $catsub['name'] ?>
                                     </div>
                                </div>  
                            <?php endif; ?>
                        <?php endforeach; ?> 
                <?php endif; ?>     
            <?php endforeach; ?>  
        </div> -->

        <!-- <div class="col-sm-6 col-md-4 channel-cat">
            <?php foreach($basic_cat as $cat): ?>
                <?php if($cat['Column_no'] == 2): ?>
                    <h4><?php echo $cat['name'] ?></h4>
                        <?php foreach($basic_cat_sub as $catsub): ?>
                            <?php if($catsub['category'] ==  $cat['ID']): ?>
                                <div class="row">
                                     <div class="col-xs-12 channel-title" style="text-align:left">
                                         <span class="channel-num"><?php echo $catsub['channel_no'] ?></span> &nbsp;<?php echo $catsub['name'] ?>
                                     </div>
                                </div>  
                            <?php endif; ?>
                        <?php endforeach; ?> 
                <?php endif; ?>     
            <?php endforeach; ?>  
        </div> -->
        <!-- Optional: clear the XS cols if their content doesn't match in height -->
  		<!-- <div class="clearfix visible-sm-block"></div>
        <div class="col-sm-6 col-md-4 channel-cat">
            <?php foreach($basic_cat as $cat): ?>
                <?php if($cat['Column_no'] == 3): ?>
                    <h4><?php echo $cat['name'] ?></h4>
                        <?php foreach($basic_cat_sub as $catsub): ?>
                            <?php if($catsub['category'] ==  $cat['ID']): ?>
                                <div class="row">
                                     <div class="col-xs-12 channel-title" style="text-align:left">
                                         <span class="channel-num"><?php echo $catsub['channel_no'] ?></span> &nbsp;<?php echo $catsub['name'] ?>
                                     </div>
                                </div>  
                            <?php endif; ?>
                        <?php endforeach; ?> 
                <?php endif; ?>     
            <?php endforeach; ?>   -->





            <!--test-->
            <div class="col-sm-6 col-md-4 channel-cat">
                <?php foreach($merge as $cat => $data): ?>
                    <?php if($data['Column_no'] == 1): ?>
                        <h4><?php echo $cat; ?></h4>
                            <?php foreach($basic_cat_sub as $catsub): ?>
                                <?php if(in_array($catsub['category'], $data['IDs'])): ?>
                                    <div class="row">
                                         <div class="col-xs-12 channel-title" style="text-align:left">
                                             <span class="channel-num"><?php echo $catsub['channel_no'] ?></span> &nbsp;<?php echo $catsub['name'] ?>
                                         </div>
                                    </div>  
                                <?php endif; ?>
                            <?php endforeach; ?> 
                    <?php endif; ?>     
                <?php endforeach; ?>  
            </div>

            <div class="col-sm-6 col-md-4 channel-cat">
                <?php foreach($merge as $cat => $data): ?>
                    <?php if($data['Column_no'] == 2): ?>
                        <h4><?php echo $cat; ?></h4>
                            <?php foreach($basic_cat_sub as $catsub): ?>
                                <?php if(in_array($catsub['category'], $data['IDs'])): ?>
                                    <div class="row">
                                         <div class="col-xs-12 channel-title" style="text-align:left">
                                             <span class="channel-num"><?php echo $catsub['channel_no'] ?></span> &nbsp;<?php echo $catsub['name'] ?>
                                         </div>
                                    </div>  
                                <?php endif; ?>
                            <?php endforeach; ?> 
                    <?php endif; ?>     
                <?php endforeach; ?>  
            </div>
            <div class="clearfix visible-sm-block"></div>
            <div class="col-sm-6 col-md-4 channel-cat">
                <?php foreach($merge as $cat => $data): ?>
                    <?php if($data['Column_no'] == 3): ?>
                        <h4><?php echo $cat; ?></h4>
                            <?php foreach($basic_cat_sub as $catsub): ?>
                                <?php if(in_array($catsub['category'], $data['IDs'])): ?>
                                    <div class="row">
                                         <div class="col-xs-12 channel-title" style="text-align:left">
                                             <span class="channel-num"><?php echo $catsub['channel_no'] ?></span> &nbsp;<?php echo $catsub['name'] ?>
                                         </div>
                                    </div>  
                                <?php endif; ?>
                            <?php endforeach; ?> 
                    <?php endif; ?>     
                <?php endforeach; ?>  
            </div>

        </div>

     <div class="row">
	<div class="cableTag">
		<!-- <h1 class="title">ADDITIONAL CHANNELS</h1>
    	</div>

        <div class="col-sm-6 col-md-4 channel-cat">
            <?php foreach($basic_plus_cat as $cat): ?>
                <?php if($cat['Column_no'] == 1): ?>
                    <h4><?php echo $cat['name'] ?></h4>
                        <?php foreach($basic_cat_sub as $catsub): ?>
                            <?php if($catsub['category'] ==  $cat['ID']): ?>
                                <div class="row">
                                     <div class="col-xs-12 channel-title" style="text-align:left">
                                         <span class="channel-num">
					                        <?php 
					                        	$hd = preg_replace("/HD/i", '<b>$0</b>', $catsub['name']);
					                        	echo $catsub['channel_no'] ?></span> &nbsp;<?php echo $hd 
					                        ?>
                                     </div>
                                </div>  
                            <?php endif; ?>
                        <?php endforeach; ?> 
                <?php endif; ?>     
            <?php endforeach; ?>  

        </div> -->
        <!-- <div class="col-sm-6 col-md-4 channel-cat">
            <?php foreach($basic_plus_cat as $cat): ?>
                <?php if($cat['Column_no'] == 2): ?>
                    <h4><?php echo $cat['name'] ?></h4>
                        <?php foreach($basic_cat_sub as $catsub): ?>
                            <?php if($catsub['category'] ==  $cat['ID']): ?>
                                <div class="row">
                                     <div class="col-xs-12 channel-title" style="text-align:left">
                                         <span class="channel-num"><?php 
						                    $hd = preg_replace("/HD/i", '<b>$0</b>', $catsub['name']);
						                    echo $catsub['channel_no'] ?></span> &nbsp;<?php echo $hd ?>
                                     </div>
                                </div>  
                            <?php endif; ?>
                        <?php endforeach; ?> 
                <?php endif; ?>     
            <?php endforeach; ?>  
        </div> -->
        <!-- Optional: clear the XS cols if their content doesn't match in height -->
  		<!-- <div class="clearfix visible-sm-block"></div>
        <div class="col-sm-6 col-md-4 channel-cat">
            <?php foreach($basic_plus_cat as $cat): ?>
                <?php if($cat['Column_no'] == 3): ?>
                    <h4><?php echo $cat['name'] ?></h4>
                        <?php foreach($basic_cat_sub as $catsub): ?>
                            <?php if($catsub['category'] ==  $cat['ID']): ?>
                                <div class="row">
                                     <div class="col-xs-12 channel-title" style="text-align:left">
                                         <span class="channel-num"><?php 
						                    $hd = preg_replace("/HD/i", '<b>$0</b>', $catsub['name']);
						                    echo $catsub['channel_no'] ?></span> &nbsp;<?php echo $hd ?>
                                     </div>
                                </div>  
                            <?php endif; ?>
                        <?php endforeach; ?> 
                <?php endif; ?>     
            <?php endforeach; ?>  
        </div> -->


    <div class="col-sm-12 text-center" style="font-size:12px;margin-bottom:/*!25px*/ 90px;">
        &nbsp;
    </div>




    <!--test-->

<div class="container-fluid">
    <div class="row">
	<div class="cableTag">
        	<h1>ADD A CHANNEL OF YOUR CHOICE TO YOUR BASIC PLUS SUBSCRIPTION</h1>
		<h1 class="title">CHANNELS INCLUDE</h1>
    	</div>

        <div class="col-sm-6 col-md-4 channel-cat">
            <?php foreach($pick_one_cat as $cat): ?>
                <?php if($cat['Column_no'] == 1): ?>
                    <h4><?php echo $cat['name'] ?></h4>
                        <?php foreach($basic_cat_sub as $catsub): ?>
                            <?php if($catsub['category'] ==  $cat['ID']): ?>   
                                    <div class="row">
                                         <div class="col-xs-10 channel-title" style="text-align:left">
                                            <span class="channel-num">
					 	<?php 
							$hd = preg_replace("/HD|SD/i", '<b>$0</b>', $catsub['name']);
							echo $catsub['channel_no'] ?></span> &nbsp;<?php echo $hd 
					 	?>
						<?php if($catsub['NA_someArea'] ==  1):?>
                                                    <span class="text-cablelink">*</span>
                                                <?php else:?>
                                                    <span style="color:#FFF">*</span>
                                                <?php endif; ?> 		
                                         </div>
					 <?php if(strlen($catsub['price']) >  5):?>
					 	<div class="col-xs-2 channel-price" style="left: -10px;">&#8369;<?php echo $catsub['price'] ?></div>
                                         <?php else:?>
						<div class="col-xs-2 channel-price">&#8369;<?php echo $catsub['price'] ?></div>
                        		<?php endif; ?>             
				</div> 
                            <?php endif; ?>
                        <?php endforeach; ?> 
                <?php endif; ?>     
            <?php endforeach; ?>  
        </div>
        <div class="col-sm-6 col-md-4 channel-cat">
            <?php foreach($pick_one_cat as $cat): ?>
                <?php if($cat['Column_no'] == 2): ?>
                    <h4><?php echo $cat['name'] ?></h4>
                        <?php foreach($basic_cat_sub as $catsub): ?>
                            <?php if($catsub['category'] ==  $cat['ID']): ?>   
                                    <div class="row">
                                         <div class="col-xs-10 channel-title" style="text-align:left">
                                            <span class="channel-num">
					 	<?php 
							$hd = preg_replace("/HD|SD/i", '<b>$0</b>', $catsub['name']);
							echo $catsub['channel_no'] ?></span> &nbsp;<?php echo $hd 
					 	?>
						<?php if($catsub['NA_someArea'] ==  1):?>
                                                    <span class="text-cablelink">*</span>
                                                <?php else:?>
                                                    <span style="color:#FFF">*</span>
                                                <?php endif; ?> 		
                                         </div>         
                    <?php $peso ='&#8369;';?>    
                    <?php if(strpos($catsub['name'], 'PPV') !== false) $peso = '';?>                             
					<div class="col-xs-2 channel-price"><?php echo $peso; ?><?php echo $catsub['price'] ?></div>
                                    </div> 
                            <?php endif; ?>
                        <?php endforeach; ?> 
                <?php endif; ?>     
            <?php endforeach; ?>  
        </div>
        <!-- Optional: clear the XS cols if their content doesn't match in height -->
  		<div class="clearfix visible-sm-block"></div>
        <div class="col-sm-6 col-md-4 channel-cat">
            <?php foreach($pick_one_cat as $cat): ?>
                <?php if($cat['Column_no'] == 3): ?>
                    <h4><?php echo $cat['name'] ?></h4>
                        <?php foreach($basic_cat_sub as $catsub): ?>
                            <?php if($catsub['category'] ==  $cat['ID']): ?>   
                                    <div class="row">
					<div class="col-xs-10 channel-title" style="text-align:left">
                                            <span class="channel-num">
					 	<?php 
							$hd = preg_replace("/HD|SD/i", '<b>$0</b>', $catsub['name']);
							echo $catsub['channel_no'] ?></span> &nbsp;<?php echo $hd 
					 	?>
						<?php if($catsub['NA_someArea'] ==  1):?>
                                                    <span class="text-cablelink">*</span>
                                                <?php else:?>
                                                    <span style="color:#FFF">*</span>
                                                <?php endif; ?> 		
                                         </div>                                         
					<div class="col-xs-2 channel-price"><?php echo $catsub['price'] ?></div>
                                    </div> 
                            <?php endif; ?>
                        <?php endforeach; ?> 
                <?php endif; ?>     
            <?php endforeach; ?>  
        </div>
 	<!-- <div class="col-sm-12 text-center">
    		<p class="noteTest"><span style="color: #f08821;">*</span> NOT AVAILABLE ON I CHOOSE PLANS</p>
   	</div>	 -->
	
    </div>






     </div>




    <div class="col-sm-12 text-center" style="font-size:12px; padding:0px;">
		<p class="noteTest">TOTAL CHANNELS SD & HD = 123</p>
	</div>

    <div class="col-sm-12 text-center" style="font-size:12px;">
        <p class="note">CHANNEL LINE-UP AS OF JANUARY 12, 2026 </p>
    </div>
    <div class="col-sm-12 text-center" style="font-size:12px;margin-bottom:/*!25px*/ 90px;">
        <p class="note">CHANNEL INCLUSIONS AND PRICING MAY CHANGE WITHOUT PRIOR NOTICE.</p>
    </div>

    
    <div class="col-sm-12 text-center" style="font-size:12px; padding:20px 0;">
        <a href="<?php echo base_url().'/cabletv_basic';?>" class="nav-btn"> BASIC 495</a>
        <a class="nav-btn active"> BASIC PLUS</a>
        <a href="<?php echo base_url().'/cabletv_basic_lite';?>" class="nav-btn"> BASIC LITE</a>
    </div>







    <!-- <div class="col-sm-12 text-center botNote">
		<div class="row">


            <div class="row visible-xs visible-sm" style="margin:0;"> -->

                <!-- LEFT COLUMN -->
                <!-- <div class="col-xs-6" style="padding:0; text-align:left;">
                    <ul style="padding-left:53px;">
                        <div>
                            <p class="noteTest1">
                            <span><img src="http://192.168.1.147/assets/img/icons/call.png" class="unselect" width="40px">8988-5465</span>
                            </p>
                        </div>

					    <div  style="display: flex; align-items: flex-start; text-align:center;">
                            <div>
                                <img src="http://192.168.1.147/assets/img/icons/call.png" class="unselect" width="40px">
                            </div>
                            <div class="noteTest1">
                                <div class="title-card">Viber Buiseness</div>
                                <div>CABLELINK</div>
                            </div>
                        </div>
				    </ul>
                </div> -->

                <!-- RIGHT COLUMN -->
                <!-- <div class="col-xs-6" style="padding:0; text-align:center;">
                    <div>
                        <p class="noteTest1">
                        <span>
                            <img src="http://192.168.1.147/assets/img/icons/facebook_2024.png" width="40px">
                            <img src="http://192.168.1.147/assets/img/icons/instagram.png" width="40px">
                            <img src="http://192.168.1.147/assets/img/icons/twitter_2024.png" width="40px">
                        </span>
                        </p>
                    </div>
                    <div class="noteTest1 centered">
                            <div class="title-card">Follow us now</div>
                            <div>CablelinkTV</div>
                    </div>
                </div>

            </div>

            <div class="row visible-xs visible-sm" style="margin:0;">
                <div class="col-xs-11" style="padding:0; text-align:left;">
                    <ul style="padding-left:53px;">
                    <div>
                        <p class="noteTest1">
                        <span><img src="http://192.168.1.147/assets/img/icons/call.png" class="unselect" width="40px">www.cablelink.com.ph</span>
                        </p>
                    </div>

                    <div>
                        <p class="noteTest1">
                        <span><img src="http://192.168.1.147/assets/img/icons/call.png" class="unselect" width="40px">customerservice@cablelink.com.ph</span>
                        </p>
                    </div>

	                <div  style="display: flex; align-items: flex-start;">
                        <div>
                            <img src="http://192.168.1.147/assets/img/icons/call.png" class="unselect" width="40px">
                        </div>
                        <div class="noteTest1">
                             <div>8210 Dr. A Santos Ave., Barangay San Isidro, 1700 Parañaque City, Philippines</div>
                        </div>
                    </div>
                    </ul>
                </div>
            </div>


			<div class="col-md-4 col-sm-4 custom-width2 visible-lg visible-md">
    			<ul>
                    <div>
                        <p class="noteTest1">
                        <span><img src="http://192.168.1.147/assets/img/icons/call.png" class="unselect" width="40px">8988-5465</span>
                        </p>
                    </div>

					<div  style="display: flex; align-items: flex-start;">
                        <div>
                            <img src="http://192.168.1.147/assets/img/icons/call.png" class="unselect" width="40px">
                        </div>
                        <div class="noteTest1">
                            <div class="title-card">Viber Buiseness</div>
                            <div>CABLELINK</div>
                        </div>
                    </div>
				</ul>
            </div>

			<div class="col-md-4 col-sm-4 custom-width visible-lg visible-md">
    			<ul>
					 <div>
                        <p class="noteTest1">
                        <span>
                            <img src="http://192.168.1.147/assets/img/icons/facebook_2024.png" width="40px">
                            <img src="http://192.168.1.147/assets/img/icons/instagram.png" width="40px">
                            <img src="http://192.168.1.147/assets/img/icons/twitter_2024.png" width="40px">
                        </span>
                        </p>
                    </div>

                    <div class="noteTest1 centered">
                            <div class="title-card">Follow us now</div>
                            <div>CablelinkTV</div>
                    </div>
				</ul>
   			</div>

            <div class="col-md-5 col-sm-5 visible-lg">
    			<ul>
                    <div>
                        <p class="noteTest1">
                        <span><img src="http://192.168.1.147/assets/img/icons/call.png" class="unselect" width="40px">www.cablelink.com.ph</span>
                        </p>
                    </div>

                    <div>
                        <p class="noteTest1">
                        <span><img src="http://192.168.1.147/assets/img/icons/call.png" class="unselect" width="40px">customerservice@cablelink.com.ph</span>
                        </p>
                    </div>
				</ul>
   			</div>

            <div class="col-md-6 col-sm-6 visible-md">
    			<ul>
                    <div>
                        <p class="noteTest1">
                        <span><img src="http://192.168.1.147/assets/img/icons/call.png" class="unselect" width="40px">www.cablelink.com.ph</span>
                        </p>
                    </div>

                    <div>
                        <p class="noteTest1">
                        <span><img src="http://192.168.1.147/assets/img/icons/call.png" class="unselect" width="40px">customerservice@cablelink.com.ph</span>
                        </p>
                    </div>
				</ul>
   			</div>

            <div class="col-md-3 col-sm-3 visible-lg">
    			<ul>
	                <div  style="display: flex; align-items: flex-start;">
                        <div>
                            <img src="http://192.168.1.147/assets/img/icons/call.png" class="unselect" width="40px">
                        </div>
                        <div class="noteTest1">
                             <div>8210 Dr. A Santos Ave., Barangay San Isidro, 1700 Parañaque City, Philippines</div>
                        </div>
                    </div>
				</ul>
   			</div>

            <div class="col-md-12 col-sm-12  visible-md">
    			<ul>
	                <div  style="display: flex; align-items:center;">
                        <div>
                            <img src="http://192.168.1.147/assets/img/icons/call.png" class="unselect" width="40px">
                        </div>
                        <div class="noteTest1">
                            <div>8210 Dr. A Santos Ave., Barangay San Isidro, 1700 Parañaque City, Philippines</div>
                        </div>
                    </div>
				</ul>
   			</div>


		</div>
		<div class="row">
			<div class="col-md-6 col-sm-12">
    				<ul></ul>
   			</div>
			<div class="col-md-6 col-sm-12">
    				<ul></ul>
   			</div>
		</div>

	</div>  -->


	<!-- <div class="col-sm-12 text-center" style="font-size:12px;">
		<p class="noteTest">Effective as of February 15, 2024</p>
	</div> -->

        <!-- <div class="col-sm-12 text-center" style="font-size:12px;">
              <p class="note">Channels, package inclusion and pricing are subject to change without prior notice</p>
        </div> -->

	<!-- <div class="col-sm-12 text-center">
    		<p class="noteTest">Terms and Conditions</p>
   	</div> -->

	<!-- <div class="col-sm-12 text-center botNote">
		<div class="row">
			<div class="col-md-6 col-sm-12">
    				<ul>
					<li><p class="noteTest1">18 Months lock-in period</p></li>
					<li><p class="noteTest1">Initial Cash-out ₱1,990</p></li>
					<li><p class="noteTest1">Installtion Fee of ₱1,000 + 1 Month advance and 1 Month deposit</p></li>
				</ul>
   			</div>
			<div class="col-md-6 col-sm-12">
    				<ul>
					<li><p class="noteTest1">Monthly Service Fee for every Digital Extension TV = ₱100</p></li>
					<li><p class="noteTest1"> Pre-Termination Fee of ₱5,000</p></li>
				</ul>
   			</div>
		</div>
		<div class="row">
			<div class="col-md-6 col-sm-12">
    				<ul></ul>
   			</div>
			<div class="col-md-6 col-sm-12">
    				<ul></ul>
   			</div>
		</div>

	</div> -->
    </div>
</div>
	<!-- <div>
        	<img class="hidden-xs" src="<?php echo base_url().'assets/img/carousel/internet_ichoose_web.jpg' ?>" class="img-responsive unselect" style="width:100%;" />
        	<img class="visible-xs" src="<?php echo base_url().'assets/img/carousel/internet_ichoose_mobile.jpg' ?>" class="img-responsive unselect" style="width:100%" />
    	</div> -->

	<!-- <div class="text-center">
    		<p class="noteTest3">Apply now!</p>
	</div>
	<div class="buttonTest">
				<div class="subscribeTest"><strong>SUBSCRIBE</strong></div>
				<div class="upgradeTest"><strong>UPGRADE</strong></div>
	</div> -->

</div>
