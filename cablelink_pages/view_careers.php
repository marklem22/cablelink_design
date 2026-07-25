

<div class="container-fluid careers">
    <div class="row">
        <!-- <div class="col-lg-12 top-bg">
        </div> -->
        <div class="top-bg">
            <img src="<?php echo base_url().'assets/img/careers/career_2.jpg' ?>" class="img-fluid banner-img">
        </div>
    </div>
    <div class="row">
    	<div class="col-md-12 equal-height">
        	<div class="featured-title">
                <p class="title">Featured Careers</p>
                <p class="sub-title">Thanks for checking out our featured careers. See something that interests you? Apply here.</p>
            </div>
        </div>
        <div class="col-md-9">
            <div class="featured-container" style="max-height:600px;height:550px; overflow-y:scroll; overflow-x:hidden"></div><!--600 orig height-->
             <div class="back-container"></div>
        </div>
        <div class="col-md-3 form-container">
        	<form role="form" style="position:relative" method="post" enctype="multipart/form-data" id="career-form">
                <div class="form-group">
                    <label for="position">Job position</label>
                    <select class="form-control" name="position" data-toggle="popover" data-content="" id="position">
                        <option value="">Select...</option>
			<!-- <option value="Others or Any Related Course">Others or Any Related Course</option> -->
                        <?php foreach($featured_career as $option):?>
                            <option value="<?php echo $option['ID']?>" data-location="<?php echo $option['location'] ?>"><?php echo $option['job_title'] ?></option>
                        <?php endforeach?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="name">Offices</label>
                    <input type="text" class="form-control" name="offices" data-toggle="popover" data-content="" id="offices" readonly/>
                </div>
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" name="name" data-toggle="popover" data-content="" id="name" />
                </div>
                <div class="form-group">
                    <label for="address">Address</label>
                    <input type="text" class="form-control" name="address" data-toggle="popover" data-content="" id="address" />
                </div>
                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="text" class="form-control" name="email" data-toggle="popover" data-content="" id="email" />
                </div>
                <div class="form-group">
                    <label for="contactno">Contact No.</label>
                    <input type="text" class="form-control" name="contactno" data-toggle="popover" data-content="" id="contactno" />
                </div>
                <!-- <div class="form-group">
                    <label for="resume">
                    	<ul style="list-style:square; margin-left:-20px">
                        <li>Upload a CV or portfolio</li>
                        <li><span class="normal">File max size: 5Mb</span></li>
                        <li><span class="normal">Allowed files: pdf, doc, docx, png, jpg</span></li>
                        <li><span class="normal">To upload multiple files, group your files using zip format </span></li>
                        </ul>
                    </label>
                    <input type="file" class="form-control" name="resume" id="resume" />
                    <span class="helper"></span>
                </div> -->
		<!-- checkbox -->
		    <div class="form-check">
    			<label class="form-check-label" for="dprivacy"><span><input type="checkbox" class="form-check-input" value="1" id="dprivacy" name="dprivacy">&nbsp;</span>I ALLOW CABLELINK TO USE THE INFORMATION, INCLUDING ALL SUPPORTING
				DOCUMENTS I HAVE PROVIDED FOR COMMUNICATION-RELATED TO MY APPLICATION
				PROCESS, MANAGING MY SUBSCRIPTION, OR CROSS-MARKETING OF PRODUCTS AND
				SERVICES. I AM ASSURED THAT THIS INFORMATION WILL BE TREATED WITH UTMOST
				CONFIDENTIALITY FOLLOWING THE STRICT GUIDELINES UNDER THE REPUBLIC ACT
				10173-DATA PRIVACY ACT OF 2012.</label>
  		    </div>
		    <!-- checkbox -->

                <div class="form-group text-center" style="text-align:center">
                    <button type="submit" class="btn btn-orange btn-career" style="width:200px">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>



<!-- <div class="container-fluid careers">
    <div class="row">
    	<div class="col-md-12">
        	<div class="featured-title">
                <p class="title">Featured Careers</p> -->
                <!-- <p class="sub-title">Thanks for checking out our featured careers. See something that interests you? Apply here.</p> -->
            <!-- </div>
        </div>
        <div class="col-md-9"> -->
            <!-- <div class="featured-container" style="max-height:600px;height:600px; overflow-y:scroll; overflow-x:hidden"></div>
             <div class="back-container"></div> -->
             <!-- <div class="no-careers">
                <h2>No Featured Careers Available</h2>
                <p >Please check back soon for new opportunities.</p>
            </div>
        </div>
        <div class="col-md-3 form-container">
        	<form role="form" style="position:relative" method="post" enctype="multipart/form-data" id="career-form">
                <div class="form-group">
                    <label for="position">Job position</label>
                    <select class="form-control" name="position" data-toggle="popover" data-content="" id="position">
                        <option value="">Select...</option> -->
			<!-- <option value="Others or Any Related Course">Others or Any Related Course</option> -->
                        <!-- <?php foreach($featured_career as $option):?> -->
                            <!-- <option value="<?php echo $option['ID']?>" data-location="<?php echo $option['location'] ?>"><?php echo $option['job_title'] ?></option> -->
                        <!-- <?php endforeach?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="name">Offices</label>
                    <input type="text" class="form-control" name="offices" data-toggle="popover" data-content="" id="offices" readonly/>
                </div>
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" name="name" data-toggle="popover" data-content="" id="name" />
                </div>
                <div class="form-group">
                    <label for="address">Address</label>
                    <input type="text" class="form-control" name="address" data-toggle="popover" data-content="" id="address" />
                </div>
                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="text" class="form-control" name="email" data-toggle="popover" data-content="" id="email" />
                </div>
                <div class="form-group">
                    <label for="contactno">Contact No.</label>
                    <input type="text" class="form-control" name="contactno" data-toggle="popover" data-content="" id="contactno" />
                </div>
                <div class="form-group">
                    <label for="resume">
                    	<ul style="list-style:square; margin-left:-20px">
                        <li>Upload a CV or portfolio</li>
                        <li><span class="normal">File max size: 5Mb</span></li>
                        <li><span class="normal">Allowed files: pdf, doc, docx, png, jpg</span></li>
                        <li><span class="normal">To upload multiple files, group your files using zip format </span></li>
                        </ul>
                    </label>
                    <input type="file" class="form-control" name="resume" id="resume" />
                    <span class="helper"></span>
                </div> -->
		<!-- checkbox -->
		    <!-- <div class="form-check">
    			<label class="form-check-label" for="dprivacy"><span><input type="checkbox" class="form-check-input" value="1" id="dprivacy" name="dprivacy">&nbsp;</span>I ALLOW LINKSERVE TO USE THE INFORMATION, INCLUDING ALL SUPPORTING
				DOCUMENTS I HAVE PROVIDED FOR COMMUNICATION-RELATED TO MY APPLICATION
				PROCESS, MANAGING MY SUBSCRIPTION, OR CROSS-MARKETING OF PRODUCTS AND
				SERVICES. I AM ASSURED THAT THIS INFORMATION WILL BE TREATED WITH UTMOST
				CONFIDENTIALITY FOLLOWING THE STRICT GUIDELINES UNDER THE REPUBLIC ACT
				10173-DATA PRIVACY ACT OF 2012.</label>
  		    </div>		     -->
		    <!-- checkbox -->

                <!-- <div class="form-group text-center" style="text-align:center">
                    <button type="submit" class="btn btn-orange btn-career" style="width:200px">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div> -->
