<div class="container subs_form">
	<p class="subscribe">Subscription Form</p>
    <form role="form" id="subscribe-form">
        <div class="form-group" style="padding-bottom:10px">
        	<!--<label for="service_type">Product:</label>
            <select name="service_type" class="form-control prod-cat" style="width:200px" data-url="<?php echo base_url().'subscribe/' ?>" class="form-control" data-toggle="popover" disabled>
                <option value="cabletv">Cable TV</option>
                <option value="bundle">Bundle</option>
                <option value="internet">Internet Only</option>
            </select>-->
	    <input type="text" name="service_type"   value="<?php echo $_REQUEST['cat'];?>"  style="display:none"/>
	    <input type="text" name="package" value="<?php echo $_REQUEST['package'];?>"  style="display:none"/>
        </div>
        <div class="form-content">
        </div>
        <div class="client-info">
            <div class="row">
                <div class="col-md-4">	
                    <div class="form-group">
                        <input type="text" name="first_name" class="form-control" data-toggle="popover" data-content=""  placeholder="First Name" />
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <input type="text"  name="middle_name" class="form-control" data-toggle="popover" data-content=""  placeholder="Middle Name" />
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <input type="text"  name="last_name" class="form-control" data-toggle="popover" data-content=""  placeholder="Last Name" />
                    </div>
                </div> 
           </div>
           <div class="row">
                <div class="col-md-6">
                	<div class="form-group">	
                		<input type="text"  name="contact_no" data-toggle="popover" data-content=""  class="form-control" placeholder="Contact Number" />
                    </div>
                </div>
                <div class="col-xs-3 col-md-1">
                	<p style="width:100%;padding:15px 0 0 0; color:#FFF; text-align:center; font-weight:bold">Birthdate</p>
                </div>
                <div class="col-xs-9 col-md-5">
                	<div class="form-group">	
                		<input type="text" name="birth_date" data-toggle="popover" data-content=""  class="form-control" />
                    </div>
                </div>
           </div>
           <div class="row">
                <div class="col-md-6">
                	<div class="form-group">	
                		<input type="text" name="address" class="form-control" data-toggle="popover" data-content=""  placeholder="Address" />
                    </div>
                </div>
                <div class="col-md-6">
                	<div class="form-group">	
                		<input type="text" name="email" class="form-control" data-toggle="popover" data-content=""  placeholder="Email Address" />
                    </div>
                </div>
           </div>
           <div class="row">
            	<div class="col-md-12">
                	<div class="form-group">
                    	<textarea name="message" class="form-control" data-toggle="popover" data-content=""  placeholder="Message" rows="7"></textarea>
                    </div>
                </div>
           </div>
           <div class="row">
            	 <div class="col-md-12 text-center" style="text-align:center; margin:15px 0">
                 	<button type="submit" class="btn btn-orange btn-application" style="width:200px">SUBMIT</button>
                 </div>
           </div>
       </div>
    </form>
</div>