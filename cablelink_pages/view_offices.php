<div class="offices">
	<div>
    	<img width="100%" src="<?php echo base_url().'assets/img/offices/offices.jpg' ?>" />
    </div>
    <div class="container" style="/*!width:1800px !important;*/">
    	<div class="offices-title">Satellite Offices</div>
        <div class="row" style="padding:0; margin:0">
        	<div class="col-md-2 visible-sm visible-xs">
            	<div class="form-group">
                	<select class="form-control map-opt">
                        <?php foreach($offices as $office): ?>
                        	<option value="<?php echo $office['ID'] ?>"><?php echo $office['name'] ?></option>
                    	<?php endforeach ?>
                    </select>
                </div>
            </div>
        	<div class="col-md-2 hidden-sm hidden-xs">
            	<?php foreach($offices as $office): ?>
                	<div class="form-group">
                        <a href="javascript:;" class="map-btn" data-tab="<?php echo $office['ID'] ?>" id="<?php echo $office['ID'] ?>"><?php echo $office['name'] ?></a>
                	</div>
                <?php endforeach ?>
            </div>

            <div class="col-md-10" style="/*!border-left:1px solid #ccc;*/">
                    <div class="map-card">
                                   
            	        <div class="map-container" style="text-decoration:none; overflow:hidden; height:415px; width:950px; max-width:100%;">
                        </div>


                    <?php foreach($offices as $office): ?>

                        <div id="<?php echo $office['ID'];?>-details" class="tab-content <?php echo ($office['ID']==2)?'active':'';?>">

   
                        <div class="map-card-inner">
                        <div class="map-header">
                          <h3><?php echo $office['name']; ?> HEAD OFFICE</h3>
                          <!-- <span class="rating">⭐ 4.5 (128 reviews)</span> -->
                        </div>

                        <p class="address">
                           <?php echo $office['address']; ?>
                        </p>

                        <?php if($office['Phone'] !='' ): ?>
                        <div class="info-row">
                            <strong>Phone:</strong> <a href=""><?php echo $office['Phone'];?></a>
                        </div>
                        <?php endif;?>

                        <div class="hours-simple">
                          <!-- <span class="status open">Open now</span> -->
                          <span id="officeStatus" class="status"><?php echo $status; ?></span>
                          <span class="days">· <?php echo $office['work_days'];?></span>
                          <div class="time"><?php echo $office['work_hours'];?></div>
                        </div>

                        <div class="map-actions">
                          <a href="<?php echo $office['view_directions'];?>"
                             target="_blank" class="btn primary">
                            Directions
                          </a>

                          <a href="<?php echo $office['view_map'];?>"
                             target="_blank" class="btn">
                            View on Map
                          </a>

                          <a href="<?php echo $office['view_street'];?>"
                             target="_blank" class="btn">
                            Street View
                          </a>
                        </div>
                        </div>
                     </div>
                    <?php endforeach; ?>
                       </div>


            </div>


            
        </div>
    </div>
</div>



 
