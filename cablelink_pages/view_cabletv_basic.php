<div class="cabletv">
<div class="bg-image">
   <?php if($basic_flyer['img_name_bg']!=''):?>
   <img class="hidden-xs" src="<?php echo base_url().'assets/img/cabletv/'.$basic_flyer['img_name_bg'] ?>" class="img-responsive unselect" style="width:100%" />
   <!--<img class="hidden-xs" src="<?php echo base_url().'assets/img/carousel/basic_desktop.jpg' ?>" class="img-responsive unselect" style="width:100%" />
   <img class="visible-xs" src="<?php echo base_url().'assets/img/carousel/basic_mobile.jpg' ?>" class="img-responsive unselect" style="width:100%" />-->
   <?php endif; ?>
</div>


<div class="container-fluid">
    <div class="row">
	<div class="cableTag">
        	<!-- <h1>Subscribe to Basic 495 CATV Plan</h1>
		<h4>Get access to SD Channels with latest updates on news, music, entertainment and sports</h4>-->
		<!-- <h1 class="title">CHANNELS INCLUDE</h1> -->
        <h1 class="title">BASIC <span class="orange">495</span> <span class="small-title">CHANNEL GUIDE</span></h1>
    	</div>

        <div class="col-sm-6 col-md-4 channel-cat">
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

        </div>
        <div class="col-sm-6 col-md-4 channel-cat">
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
        </div>
        <!-- Optional: clear the XS cols if their content doesn't match in height -->
  		<div class="clearfix visible-sm-block"></div>
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
            <?php endforeach; ?>  
        </div>


    <div class="col-sm-12 text-center" style="font-size:12px;padding:0px;">
		<p class="noteTest">TOTAL HD CHANNELS = 65</p>
	</div>

    <div class="col-sm-12 text-center" style="font-size:12px;padding:0px;">
        <p class="note">CHANNEL LINE-UP AS OF JANUARY 12, 2026 </p>
    </div>
    <div class="col-sm-12 text-center" style="font-size:12px;margin-bottom:/*!25px*/ 90px;padding:0px;">
        <p class="note">CHANNEL INCLUSIONS AND PRICING MAY CHANGE WITHOUT PRIOR NOTICE.</p>
    </div>

<!-- <div class="col-sm-12 text-center" 
     style="position:fixed;  bottom:40px; width:100%; font-size:12px; padding:0;">
    
    <a href="page1.html" class="nav-btn active"><i class="fa fa-home"></i> Home</a>
    <a href="page2.html" class="nav-btn"><i class="fa fa-info-circle"></i> About</a>
    <a href="page3.html" class="nav-btn"><i class="fa fa-envelope"></i> Contact</a>

</div> -->

    <div class="col-sm-12 text-center" style="font-size:12px; padding:20px 0;">
        <a class="nav-btn active"> BASIC 495</a>
        <a href="<?php echo base_url().'/cabletv_basic_plus';?>" class="nav-btn"> BASIC PLUS</a>
        <a href="<?php echo base_url().'/cabletv_basic_lite';?>" class="nav-btn"> BASIC LITE</a>
    </div>



    <!-- <div class="">
        <div class="button-overlay">
            <a href="page1.html" class="nav-btn active">BASIC 495</a>
            <a href="page2.html" class="nav-btn"></i>BASIC PLUS</a>
            <a href="page3.html" class="nav-btn">BASIC LITE</a>
        </div>
    </div> -->
	
	<!-- <div class="col-sm-12 text-center" style="font-size:12px;">
		<p class="noteTest">Effective as of February 15, 2024</p>
	</div>

        <div class="col-sm-12 text-center" style="font-size:12px;">
              <p class="note">Channels, package inclusion and pricing are subject to change without prior notice</p>
        </div>
	<div class="col-sm-12 text-center">
    		<p class="noteTest">Terms and Conditions</p>
   	</div>

	<div class="col-sm-12 text-center botNote">
		<div class="row">
			<div class="col-md-6 col-sm-12">
    				<ul><li><p class="noteTest1">12 Months lock-in period</p></li></ul>
   			</div>
			<div class="col-md-6 col-sm-12">
    				<ul><li><p class="noteTest1">Monthly Service Fee for every Analog Extension TV = ₱60</p></li></ul>
   			</div>
		</div>
		<div class="row">
			<div class="col-md-6 col-sm-12">
    				<ul><li><p class="noteTest1">Initial Cash-out ₱990 1 Month advance and 1 Month deposit</p></li></ul>
   			</div>
			<div class="col-md-6 col-sm-12">
    				<ul><li><p class="noteTest1"> Pre-Termination Fee of ₱2,500</p></il></il>
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
