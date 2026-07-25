<div class="cabletv">
<div>
   <?php if($pickone_flyer['img_name_bg']!=''):?>
    <img class="hidden-xs" src="<?php echo base_url().'assets/img/cabletv/'.$pickone_flyer['img_name_bg'] ?>" class="img-responsive unselect" style="width:100%" />    
   <!--<img class="hidden-xs" src="<?php echo base_url().'assets/img/carousel/pickone_desktop.jpg' ?>" class="img-responsive unselect" style="width:100%" />
   <img class="visible-xs" src="<?php echo base_url().'assets/img/carousel/pickone_mobile.jpg' ?>" class="img-responsive unselect" style="width:100%" />-->
   <?php endif;?>  
</div>
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
					<div class="col-xs-2 channel-price">&#8369;<?php echo $catsub['price'] ?></div>
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
 	<div class="col-sm-12 text-center">
    		<p class="noteTest"><span style="color: #f08821;">*</span> NOT AVAILABLE ON I CHOOSE PLANS</p>
   	</div>	
	
    </div>
<div class="text-center botNote">
		<ul class="list-inline">
			<li><img alt="" src="<?php echo base_url().'assets/img/cabletv/NHK.png' ?>" /></li>
			<!--<li><img alt="" src="<?php echo base_url().'assets/img/cabletv/CMM.png' ?>" /></li>
			<li><img alt="" src="<?php echo base_url().'assets/img/cabletv/MTV.png' ?>" /></li>
			
			 <li><img alt="" src="<?php echo base_url().'assets/img/cabletv/TravelXP.png' ?>" /></li> -->
		</ul>
	</div>
</div>
	<!-- <div>
        	<img class="hidden-xs" src="<?php echo base_url().'assets/img/carousel/internet_ichoose_web.jpg' ?>" class="img-responsive unselect" style="width:100%;" />
        	<img class="visible-xs" src="<?php echo base_url().'assets/img/carousel/internet_ichoose_mobile.jpg' ?>" class="img-responsive unselect" style="width:100%" />
    	</div> -->

	<div class="text-center">
    		<p class="noteTest3">Apply now!</p>
	</div>
	<div class="buttonTest">
				<div class="subscribeTest"><strong>SUBSCRIBE</strong></div>
				<div class="upgradeTest"><strong>UPGRADE</strong></div>
	</div>

</div>
