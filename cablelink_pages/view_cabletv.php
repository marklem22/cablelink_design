<div class="cabletv">
<div>
   <img class="hidden-xs" src="<?php echo base_url().'assets/img/carousel/basic_desktop.jpg' ?>" class="img-responsive unselect" style="width:100%" />
   <img class="visible-xs" src="<?php echo base_url().'assets/img/carousel/basic_mobile.jpg' ?>" class="img-responsive unselect" style="width:100%" />
</div>
<div class="container-fluid">
    <div class="row">
	<div class="cableTag">
        	<h1>Subscribe to Basic 495 CATV Plan</h1>
		<h4>Get access to SD Channels with latest updates on news, music, entertainment and sports</h4>
		<h1 class="title">CHANNELS INCLUDE</h1>
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

	<div class="col-sm-12 text-center" style="font-size:12px;">
		<p class="noteTest">Effective as of October 1, 2023</p>
	</div>

        <div class="col-sm-12 text-center" style="font-size:12px;">
              <p class="note">Channels, package inclusion and pricing are subject to change without prior notice</p>
        </div>
	<div class="col-sm-12 text-center">
    		<p class="noteTest">Application Requirements</p>
   	</div>

	<div class="col-sm-12 text-center botNote">
		<div class="row">
			<div class="col-md-6 col-sm-12">
    				<ul><li><p class="noteTest1">12 Months lock-in period</p></li></ul>
   			</div>
			<div class="col-md-6 col-sm-12">
    				<ul><li><p class="noteTest1">Monthly Service Fee for every Analog Extension TV = ₱60</p></ul></li>
   			</div>
		</div>
		<div class="row">
			<div class="col-md-6 col-sm-12">
    				<ul><li><p class="noteTest1">Initial Cash-out ₱990 1 Month advance and 1 Month deposit</p></ul></li>
   			</div>
			<div class="col-md-6 col-sm-12">
    				<ul><li><p class="noteTest1"> Pre-Termination Fee of ₱2,500</p></ul></li>
   			</div>
		</div>

	</div>
    </div>
</div>
	<div>
        	<img class="hidden-xs" src="<?php echo base_url().'assets/img/carousel/internet_ichoose_web.jpg' ?>" class="img-responsive unselect" style="width:100%;" />
        	<img class="visible-xs" src="<?php echo base_url().'assets/img/carousel/internet_ichoose_mobile.jpg' ?>" class="img-responsive unselect" style="width:100%" />
    	</div>

	<div class="text-center">
    		<p class="noteTest3">Apply now!</p>
	</div>
	<div class="buttonTest">
				<div class="subscribeTest"><strong>SUBSCRIBE</strong></div>
				<div class="upgradeTest"><strong>UPGRADE</strong></div>
	</div>

</div>
