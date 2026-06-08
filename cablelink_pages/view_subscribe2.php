<div class="container subs_form">
	<p class="subscribe">Subscription Form</p>
    <form role="form" id="subscribe-form">
        <div class="form-group" style="padding-bottom:10px">
        	<label for="service_type">Product:</label>
            <select name="service_type" class="form-control prod-cat" style="width:200px;" data-url="<?php echo base_url().'subscribe/' ?>" data-toggle="popover">
                <option value="cabletv">Cable TV</option>
                <option value="bundle">Bundle</option>
                <option value="internet">Internet Only</option>
            </select>
        </div>
        <div class="form-content">
        </div>
        <div class="addons-container">
        	<div class="row">
                <div class="col-md-12">
                    <img src="<?php echo base_url().'assets/img/subscribe/pick-one.png' ?>" />
                    <select data-placeholder="Add a channel of your choice..." class="pickone-channels addons" id="pickone-channels"  multiple="multiple" style="max-height:25px">
                        <?php foreach($channel_cat as $optiongroup):?>
                            <optgroup label="<?php echo $optiongroup['name']?>">
                            <?php foreach($channels as $option):?>
                                <?php if($option['category']==$optiongroup['ID']):?>
                                <option value="<?php echo $option['channel_no'] ?>"><strong><?php echo $option['channel_no'] ?></strong> <?php echo $option['name'] ?> P<?php echo $option['price'] ?></option>
                                <?php endif?>
                            <?php endforeach?>
                            </optgroup>
                        <?php endforeach?>
                    </select>
                    <div class="form-group">
                        <input type="hidden" name="pickone_channels" class="form-control" data-toggle="popover" data-content="" />
                    </div>
                </div>
                <div class="col-md-12">
                    <h5><strong>I-Choose Plans</strong></h5>
                    <div class="row" style="margin-bottom:3px">
                        <div class="col-sm-3 col-md-2">
                            <div class="form-group">
                                <input type="checkbox" name="ichooseplans_type" value="trio" id="trio" class="ichoose-checkbox" />
                                <label for="trio" style="margin:0">TRIO</label>
                            </div>
                        </div>
                        <div class="col-sm-3 col-md-2">
                            <div class="form-group">
                                <input type="checkbox" name="ichooseplans_type" value="sen" id="sen" class="ichoose-checkbox" />
                                <label for="sen" style="margin:0">SEN</label>
                            </div>
                        </div>
                        <div class="col-sm-3 col-md-2">
                            <div class="form-group">
                                <input type="checkbox" name="ichooseplans_type" value="novo" id="novo" class="ichoose-checkbox" />
                                <label for="novo" style="margin:0">NOVO</label>
                            </div>
                        </div>
                        <div class="col-sm-3 col-md-2">
                            <div class="form-group">
                                <input type="checkbox" name="ichooseplans_type" value="dozen" id="dozen" class="ichoose-checkbox" />
                                <label for="dozen" style="margin:0">DOZEN</label>
                            </div>
                        </div>
                    </div>
                    <select data-placeholder="Group channels and save..." class="ichooseplans-channels addons" id="ichooseplans-channels" multiple="multiple" style="max-height:25px">
                        <?php foreach($channel_cat as $optiongroup):?>
                            <optgroup label="<?php echo $optiongroup['name']?>">
                            <?php foreach($channels as $option):?>
                                <?php if($option['category']==$optiongroup['ID']):?>
                                <option value="<?php echo $option['channel_no'] ?>"><?php echo $option['channel_no'] ?> <?php echo $option['name'] ?> P<?php echo $option['price'] ?></option>
                                <?php endif?>
                            <?php endforeach?>
                            </optgroup>
                        <?php endforeach?>
                    </select>
                    <div class="form-group">
                        <input type="hidden" name="ichooseplans_channels" class="form-control" data-toggle="popover" data-content="" />
                    </div>
                    <div class="help-container">
                        <span id="ichooseplans_channels"></span>
                    </div>
                </div>
                <div class="col-md-12">
                    <h5><strong>Other Packages</strong></h5>
                    <div class="row">
						<?php foreach($other_pkg as $option):?>
                        <div class="col-sm-4 col-md-3 col-lg-2">
                            <div class="form-group">
                                <input type="checkbox" value="<?php echo $option['name'] ?>" id="<?php echo $option['ID'] ?>" class="other_packages" />
                                <label for="<?php echo $option['ID'] ?>" style="margin:0"><?php echo $option['name'] ?></label>
                            </div>
                        </div>
                        <?php endforeach?>
                    </div>
                    <div class="form-group">
                        <input type="hidden" name="other_packages" class="form-control" data-toggle="popover" data-content="" />
                    </div>
                </div>
        	</div>
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
                	<p style="width:100%;padding:15px 0 0 15px; color:#FFF; text-align:center; font-weight:bold">Birthdate</p>
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