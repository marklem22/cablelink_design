<div class="troubleshoot">
    <div class="container-fluid">
		<div class="row">
        	<div class="col-md-9">
                <p class="title">Basic Cable TV Troubleshooting</p>
            </div>
            <!-- <br><br> -->
                <?php foreach($cabletv as $troubleshoot):?>
                    <div class="row mb-4">
                        <div class="col-lg-12 d-flex justify-content-end gap-2 mb-2" style="margin:0 auto">

                            <div class="col-md-10" style="position:relative;margin:0 auto;  padding:0 !important;">
                             <?php if($troubleshoot['Youtube']!=''):?>
                            	<p class="download">
                                    <a href="<?php echo $troubleshoot['Youtube']; ?>" target="_blank" class="btn btn-orange btn-youtube">
                                        <!-- <span class="icon-download-alt"></span> YOUTUBE -->
                                             <span class="glyphicon glyphicon-play-circle"></span> YouTube
                                    </a>
                                </p>
                              <?php endif;?>
                            </div>
                
                
                            <div class="col-md-2" style="position:relative;margin:0 auto; padding:0 !important;">
                                <?php if($troubleshoot['PDF']!=''):?>
                            	    <p class="download">
                                        <a href="<?php echo base_url().'assets/pdf/'.$troubleshoot['PDF'].'' ?>" class="btn btn-orange" download="Basic Cable TV Troubleshooting">
                                            <span class="icon-download-alt"></span> DOWNLOAD PDF
                                        </a>
                                    </p>
                                <?php endif;?>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-1">
                        <div class="col-lg-12 text-center">
        	                <img style="width:100%" src="<?php echo base_url().'assets/pdf/'.$troubleshoot['Troubleshoot_img'].'' ?>" />
                        </div>
                    </div>
                    <br><br>
                <?php endforeach;?>
            </div>

            <div class="row">
            	<div class="col-md-9">
                    <p class="title">Basic Internet Troubleshooting</p>
                </div>


                <?php foreach($internet as $troubleshoot):?>

                    <div class="row mb-4">
                        <div class="col-lg-12 d-flex justify-content-end gap-2 mb-2" style="margin:0 auto;">

                            <div class="col-md-10" style="position:relative;margin:0 auto;   padding:0 !important;">
                             <?php if($troubleshoot['Youtube']!=''):?>
                            	<p class="download">
                                    <a href="<?php echo $troubleshoot['Youtube']; ?>" target="_blank" class="btn btn-orange btn-youtube">
                                        <!-- <span class="icon-download-alt"></span> YOUTUBE -->
                                             <span class="glyphicon glyphicon-play-circle"></span> YouTube
                                    </a>
                                </p>
                              <?php endif;?>
                            </div>
                
                
                            <div class="col-md-2" style="position:relative;margin:0 auto;  padding:0 !important;">
                                <?php if($troubleshoot['PDF']!=''):?>
                            	    <p class="download">
                                        <a href="<?php echo base_url().'assets/pdf/'.$troubleshoot['PDF'].'' ?>" class="btn btn-orange" download="Basic Cable TV Troubleshooting">
                                            <span class="icon-download-alt"></span> DOWNLOAD PDF
                                        </a>
                                    </p>
                                <?php endif;?>
                            </div>
                        </div>
                    </div>


                    <div class="row mb-1">
                        <div class="col-lg-12 text-center">
        	                <img style="width:100%" src="<?php echo base_url().'assets/pdf/'.$troubleshoot['Troubleshoot_img'].'' ?>" />
                        </div>
                    </div>
                    <br><br>
                        <!-- <div class="col-md-3" style="position:relative;margin:0 auto">
                        	<p class="download" style="pointer-events: none;">
                              	<a href="<?php echo base_url().'assets/pdf/Basic-Internet-Troubleshooting.pdf' ?>" class="btn btn-orange" download="Basic Internet Troubleshooting">
                    				<span class="icon-download-alt"></span> DOWNLOAD PDF
 		            			</a>
                            </p>
                        </div>
                    </div> -->



                    <!-- <div class="text-center">
                    	<img style="width:100%" src="<?php echo base_url().'assets/pdf/Basic-Internet-Troubleshooting.jpg' ?>" />
                    </div> -->
                <?php endforeach;?>
        </div>
    </div>
</embed>