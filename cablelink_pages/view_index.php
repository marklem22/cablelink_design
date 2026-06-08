<style>
    .background-design {
      /* position: fixed; */
      top: 400px;
      left: 0;
      width: 100%;
      height: 350px;
      background: linear-gradient(135deg, #fa6400, #ff944d);
      /* z-index: 1; */
    }
</style>

<div class="container-fluid">
  <div class="row">
    <div class="col-md-12" style="padding:0px;">
    	<?php $this->load->view('includes/carousel'); ?>
    </div>
    <!-- <div class="col-md-12">
        <div class="row" style="height:150px;">
        	<div class="col-md-2">
            </div>
            <div style="display:none; background-color:#06F; height:50px;" id="popup"></div>
            <div class="col-md-8">
            	<div class="row">
                	<div class="col-xs-4 col-sm-4 col-md-4 main-service-container">
                        <a class="hvr-float-shadow" href="<?php echo base_url().'cabletv' ?>">
                        	<img class="service" data-service="tv" src="<?php echo base_url().'assets/img/icons/tv.png'; ?>" />
                        </a>
                        <p>Cable TV</p>
                    </div>
                    <div class="col-xs-4 col-sm-4 col-md-4 main-service-container">
                        <a class="hvr-float-shadow" href="<?php echo base_url().'internet' ?>">
                        	<img class="service" data-service="internet" src="<?php echo base_url().'assets/img/icons/internet.png';?>" />
                        </a>
                        <p>Cable Internet</p>
                    </div>
                    <div class="col-xs-4 col-sm-4 col-md-4 main-service-container">
                        <a class="hvr-float-shadow" href="<?php echo base_url().'corporate' ?>">
                        	<img class="service" data-service="corporate" src="<?php echo base_url().'assets/img/icons/corporate.png';?>" />
                        </a>
                        <p>Corporate</p>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
            	<span class="icon-chevron-right-sign"></span>
            </div>
        </div>
    </div> -->
    <div class="col-md-12" style="/*!background-color:#D8D8D8;!*/"><!--this id the background-->
        <div class="row">
        	<div class="container">
            	<div class="col-md-12 promo-header">
                	<span class="promo-title fontStyle"><p style="line-height:0"><strong>Latest Promo</strong></p></span>
                    <span class="promo-see-all">
                    	<a href="<?php echo base_url().'promo' ?>" class="btn btn-xs btn-orange hvr-icon-forward">See All</a>
                    </span>
                </div>
                <div class="col-md-12 promo-container testing1"><!--hidden-xs hidden-sm hidden-md visible-lg-block--><!-- testing1 hidden-xs hidden-sm visible-md-block visible-lg-block-->
                    <span id="promo-prev"></span>
                    <span id="promo-next"></span>
                    <div class="promo" data-slide="promo">
                    <?php foreach($promo as $promo_slide): ?>
                      <div class="slide col-sm-6" style="padding-left: 0px !important; padding-right: 0px !important;">
                      	<a href="<?php echo base_url().'promo/view_promo/'.$promo_slide['ID'] ?>">
                        	<img title="<?php echo $promo_slide['title'] ?>" src="<?php echo base_url().'assets/img/promo/'.$promo_slide['img_home'] ?>">
                        </a>
                        <!--this div for button is new-->
                        <div class="button-pos"> <!--style="bottom: 12; padding:20px 0px 30px;  text-align:center;"-->
                          <span class="learn-more">
                            <!-- <a href="<?php echo base_url().'promo/view_promo/'.$promo_slide['ID'] ?>" class="btn btn-xs btn-blue btn-circle hvr-icon-forward btn-expand">Learn more</a> -->
                            <a href="<?php echo base_url().'promo/view_promo/'.$promo_slide['ID'] ?>" class="btn btn-xs btn-blue btn-circle hvr-icon-forward btn-expand">
                                <span>Learn more</span>
                            </a>
                          </span>
                        </div>

                        <!-- <div style="text-align:right; padding:20px;">
                          <a href="#" class="btn btn-xs btn-blue btn-circle hvr-icon-forward btn-expand">
                            <span>Learn more</span>
                          </a>
                        </div> -->
                        <!--this div for button is new-->
                     </div>
                    <?php endforeach;?>

                    <!--this one is the updated-->
                    <!-- <?php  foreach ($promo as $groupIndex => $ids): $ctr=1;?>
                        <div class="slide testing ">               
                            <?php foreach ($ids as $id): $style=''; if($ctr==2 ) $style="/*!margin-top:130px !important;!*/ margin-right:25px !important; margin-bottom:20px !important;"; $ctr++;?>
                                <?php $index = explode('?',$id);?>
                      	        <a href="<?php echo base_url().'promo/view_promo/'.$index['0'] ?>">
                                	<img class="img-promo" title="<?php echo $index['1'] ?>" src="<?php echo base_url().'assets/img/promo/'.$index['2'] ?>" >
                                </a>
                                <div style="bottom: 12; padding:20px 0px 30px;  text-align:center;">
                                  <span class="learn-more">
                                    <a href="<?php echo base_url().'promo/view_promo/'.$index['0'] ?>" class="btn btn-xs btn-blue btn-circle hvr-icon-forward">Learn more</a>
                                  </span>
                                </div>
                            <?php endforeach; $ctr=0;?>
                        </div>
                     <?php endforeach; ?> -->
                </div>
            </div>
            
            <!--this is updated-->
            <!-- <div class="col-md-12 promom-container visible-xs-block visible-sm-block visible-md-block hidden-lg">
                <span id="promom-prev"></span>
                <span id="promom-next"></span>
                <div class="promom" data-slide="promom">
                <?php  foreach ($promo as $groupIndex => $ids):?>
                    <?php foreach ($ids as $id): ?>
                        <?php $index = explode('?',$id);?>
                        <div class="slide">    
                  	    <a href="<?php echo base_url().'promo/view_promo/'.$index['0'] ?>" >
                        	<img title="<?php echo $index['1'] ?>" src="<?php echo base_url().'assets/img/promo/'.$index['2'] ?>">
                        </a>
                        </div>
                    <?php endforeach;?>
                <?php endforeach; ?>
                </div>
            </div> -->

		<div class="hr"></div>
		<div class="col-md-12 featured-header">
                	<span class="featured-title fontStyle"><p style="line-height:0"><strong>TVC</strong></p></span>
                    <span class="featured-see-all">
                    	<a href="<?php echo base_url().'unavailable' ?>" class="btn btn-xs btn-orange hvr-icon-forward">See All</a>
                    </span>
                </div>
                <div class="col-md-12 tvc-container">
                    <span id="tvc-prev"></span>
                    <span id="tvc-next"></span>
                    <div class="tvc">
                    <?php foreach($tvc as $ft_slide): ?>
                      <div class="slide">
				
				<video class="video_tvc" controls muted autoplay loop playsinline>
					<source src="<?php echo base_url().'assets/img/tvc/'.$ft_slide['Path']?>" type="video/mp4">?>
					
				</video> 
      
	              </div>
                    <?php endforeach;?>
                  </div>
            	</div>
                <div class="hr"></div> <!--this-->
                <!-- <div class="col-md-12 highlights-header">
                	<span class="highlights-title"><p style="line-height:0"><strong>Program Highlights</strong></p></span>
                    <span class="highlights-see-all">
                    	<a href="<?php echo base_url().'unavailable' ?>" class="btn btn-xs btn-orange hvr-icon-forward">See All</a>
                    </span>
                </div>
                <div class="col-md-12 highlights-container">
                    <span id="highlights-prev"></span>
                    <span id="highlights-next"></span>
                    <div class="highlights" style="padding:0">
                    <?php foreach($highlight as $hl_slide): ?>
                      <div class="slide">
                      	<a href="javascript:;">
                        	<img title="<?php echo $hl_slide['title'] ?>" src="<?php echo base_url().'assets/img/highlight/'.$hl_slide['img_home'] ?>">
                        </a>
                     </div>
                    <?php endforeach;?>
                    </div>
            	</div>  
                <div class="hr"></div>-->
                <!-- <div class="col-md-12 featured-header">
                	<span class="featured-title"><p style="line-height:0"><strong>Featured Videos</strong></p></span>
                    <span class="featured-see-all">
                    	<a href="<?php echo base_url().'unavailable' ?>" class="btn btn-xs btn-orange hvr-icon-forward">See All</a>
                    </span>
                </div> 
                <div class="col-md-12 featured-container">
                    <span id="featured-prev"></span>
                    <span id="featured-next"></span>
                    <div class="featured">
                    <?php foreach($featured as $ft_slide): ?>
                      <div class="slide">
                        	 <?php echo $ft_slide['iframe'] ?> 
				<video class="cam_video" src="<?php echo base_url().'assets/img/featuredVideos/'.$ft_slide['iframe']?>" controls>?</video>
                      </div>
                    <?php endforeach;?>
                  </div>
            	</div>
                <br />-->
		

            </div>
            <br />
            <!--for listen-->
            <!-- <div class="background-design">
            <div class="container">
                <div class="col-md-12 text-center" style="/*!height:auto;!*/ margin:5px 0 0 0; padding:0; /*!background-color: #daf2ff!*/">
                   <div>
                    <h2 style="line-height:normal; text-align:center; font-size:32px; padding-top:50px">
                        <span style="letter-spacing:0em;"><span style="font-weight:normal;" >
                            <span><span style="color:#000080;" class="styb">Why Choose Linkserve?</span></span></span>
                        </span>
                    </h2>
                    </div>
                </div>
                <div class="col-md-12 center-all ">
                    <div class="row">
                

                        <div class="col-6 col-md-3 col-sm-6 col-xs-6 textcolor xsscreen"> -->
                            <!-- <div class="hide-on-mobile"><hr class="divider"></hr></div>
                            <h6 style="line-height:1.3em; text-align:left; font-size:24px;">
                                <span style="letter-spacing:normal;"><span>Superior Fiber and Wireless Technology</span></span>
                            </h6> -->
                            <!-- <div class="title-row">
                              <hr class="hide-on-mobile divider">
                              <h6 style="line-height:1.3em; text-align:left; font-size:24px;" class="heading">Superior Fiber and Wireless Technology</h6>
                            </div>
                        </div>
                        <div class="col-6 col-md-3 col-sm-6 col-xs-6 textcolor"> -->
                        <!-- <div class="hide-on-mobile"><hr class="divider"></hr></div>
                            <h6 style="line-height:1.3em; text-align:left; font-size:24px;">
                                <span style="letter-spacing:normal;"><span>Reliable and Secure Network</span></span>
                            </h6> -->
                            <!-- <div class="title-row">
                              <hr class="divider">
                              <h6 style="line-height:1.3em; text-align:left; font-size:24px;" class="heading">Reliable and Secure Network</h6>
                            </div>
                        </div>
                        <div class="col-6 col-md-3 col-sm-6 col-xs-6 display-on-mobile  row-divider"></div> 
                        <div class="col-6 col-md-3 col-sm-6 col-xs-6 textcolor"> -->
                        <!-- <div class="hide-on-mobile"><hr class="divider"></hr></div>
                            <h6 style="line-height:1.3em; text-align:left; font-size:24px;">
                                <span style="letter-spacing:normal;"><span>24/7 Customer Support</span></span>
                            </h6> -->
                            <!-- <div class="title-row">
                              <hr class="divider">
                              <h6 style="line-height:1.3em; text-align:left; font-size:24px;" class="heading">24/7 Customer Support</h6>
                            </div>
                        </div>
                        <div class="col-6 col-md-3 col-sm-6 col-xs-6 textcolor"> -->
                        <!-- <div class="hide-on-mobile"><hr class="divider"></hr></div>
                            <h6 style="line-height:1.3em; text-align:left; font-size:24px;">
                                <span style="letter-spacing:normal;"><span>Flexible Installation Services</span></span>
                            </h6> -->
                            <!-- <div class="title-row">
                              <hr class="divider">
                              <h6 style="line-height:1.3em; text-align:left; font-size:24px;" class="heading">Flexible Installation Services</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div> -->
            <div class="col-md-12 text-center" style="height:auto; margin:5px 0 0 0; padding:0;">
               <div class="hidden-xs"><img id="bigImage" width="100%" src="<?php echo base_url().'assets/img/publish/prepaid_home.jpg' ?>" /></div>
               <div class="visible-xs"><img id="smallImage" width="100%" src="<?php echo base_url().'assets/img/publish/prepaid_home_sm.jpg' ?>" /></div>
            </div>
           <!-- <div class="container">
                <div class="col-md-12 instagram-header">
                	<span class="instagram-title"><p style="line-height:0"><strong><span class="text-cablelink">Cablelink</span> @ Instagram</strong></p></span>
                </div>
            </div>  -->
            <div class="container" style="margin-bottom:0px;" ><!--50px-->
            		<!-- <div id="instagram" class="row"></div> -->
            </div> 
        </div>
    </div>
  </div> <!-- /row -->




  <!-- <script>
    $('#tvc-container').on('slid.bs.carousel', function () {
        // Pause all videos
        $('.video_tvc').each(function () {
            this.pause();
            this.currentTime = 0; // Reset video to start
        });

        // Play the active video
        var activeVideo = $('.video_tvc .item.active video')[0];
        if (activeVideo) {
            activeVideo.play();
        }
    });
</script> -->

