<div class="container promos">
	<div class="text-center">
    		<p class="noteTest2">Discover what's new and exciting on Cablelink!</p>
   	</div>

<?php $ctr=0; ?>     
<?php $ctr2=0; ?>
<?php foreach($advisory1 as $adv_1):?>
<?php $ctr++; ?>
<?php $ctr2++; ?>
    <?php if($ctr==1): ?>
        <div class="col-md-12 bHide" style="padding-top:25px;">
	<div class="row" id="wrapper1"> 
		<div class="int-pkg1">
			<div class="title">
				<img style="width:100%; height:250px;" title="<?php echo $adv_1['title'] ?>" src="<?php echo base_url().'assets/img/advisory/'.$adv_1['img_name_bg'] ?>" />
			</div>
			<div class="boost">
				<h5><?php echo $adv_1['title'] ?></h5>
				<p><?php echo $adv_1['under_title'] ?></p>
			</div>
			<div class="btnStyle">
            			<span class="learn-more">
     				<a href="<?php echo base_url().'advisory/view_advisory/'.$adv_1['ID'] ?>" class="btn btn-xs btn-orange hvr-icon-forward">Learn more</a>
                		</span>
            		</div>
		</div>
    <?php else: ?>   
	<div class="int-pkg1">
		<div class="title">
			<img style="width:100%;  height:250px;" title="<?php echo $adv_1['title'] ?>" src="<?php echo base_url().'assets/img/advisory/'.$adv_1['img_name_bg'] ?>" />
		</div>
		<div class="boost">
			<h5><?php echo $adv_1['title'] ?></h5>
			<p><?php echo $adv_1['under_title'] ?></p>
		</div>
		<div class="btnStyle">
           		<span class="learn-more">
     			<a href="<?php echo base_url().'advisory/view_advisory/'.$adv_1['ID'] ?>" class="btn btn-xs btn-orange hvr-icon-forward">Learn more</a>
               		</span>
            	</div>
	</div>
    <?php endif; ?>

<?php if($ctr==3): ?>
</div></div>
<?php $ctr=0; ?>
 <?php endif; ?>


<?php endforeach;?>  
	</div>
		</div>










    <div class="col-md-12 sHide" style="padding-bottom:25px;">
	
<!-- Carousel -->
<div id="myCarousel" class="carousel slide">
  <div class="carousel-inner">


  <?php foreach($advisory3 as $banner): ?>
        <div class="item <?php echo ($banner['ID']==1)? 'active':NULL ?>">
	<div class="title">
          <img style="width:100%;" id="<?php echo $banner['title'] ?>" title="<?php echo $banner['title'] ?>" 
            src="<?php echo base_url().'assets/img/advisory/'.$banner['img_name_bg'];?>" class="img-responsive"/>
        </div>
	<div class="boost" style="padding-left: 15px; padding-bottom: 20px;">
		<h5 class="noteTest2" style="font-size: 11px"><?php echo $banner['title'] ?></h5>
		<!-- <p><?php echo $banner['under_title'] ?></p> -->
	</div>
	<div class="btnStyle" style="padding-bottom: 25px;">
            	<span class="learn-more">
     			<a href="<?php echo base_url().'advisory/view_advisory/'.$banner['ID'] ?>" class="btn btn-xs btn-orange hvr-icon-forward">Learn more</a>
                </span>
        </div>
	</div>
  <?php endforeach; ?>


  </div>
  <!-- Controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-menu-left"></span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-menu-right"></span>
  </a>  
</div>
<!-- /.carousel -->


    </div>
	








</div>