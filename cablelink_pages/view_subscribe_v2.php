<div class="container subs_form">
	<p class="subscribe">Subscription Form</p>
    <form>
        <div class="form-group" style="padding-bottom:10px">
            <select class="form-control prod-cat" data-url="<?php echo base_url().'subscribe_v2/' ?>" style="width:250px; font-weight:bold; font-size:16px" name="product">
                <option value="cabletv">Cable TV</option>
                <option value="bundle">Bundle</option>
                <option value="internet">Internet Only</option>
            </select>
        </div>
        <div class="form-content">
        </div>
        <div class="client-info">
            <div class="row">
                <div class="col-md-4">	
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="First Name" />
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Middle Name" />
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Last Name" />
                    </div>
                </div> 
            </div>
            <div class="row">
                <div class="col-md-6">
                	<div class="form-group">	
                		<input type="text" class="form-control" placeholder="Contact Number" />
                    </div>
                </div>
                <div class="col-xs-3 col-md-1">
                	<p style="width:100%;padding:15px 0 0 0; color:#FFF; text-align:center; font-weight:bold">Birthdate</p>
                </div>
                <div class="col-xs-9 col-md-5">
                	<div class="form-group">	
                		<input type="text" class="form-control" />
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                	<div class="form-group">	
                		<input type="text" class="form-control" placeholder="Address" />
                    </div>
                </div>
                <div class="col-md-6">
                	<div class="form-group">	
                		<input type="text" class="form-control" placeholder="Email Address" />
                    </div>
                </div>
            </div>
            <div class="row">
            	 <div class="col-md-12 text-center" style="padding:10px">
                 	<div class="glossy">
                  		<a href="javascript:;">SUBMIT</a>
                	</div>
                 </div>
            </div>
        </div>
    </form>
</div>