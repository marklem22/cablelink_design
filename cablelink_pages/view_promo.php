<div class="container promos">
<p class="title">Latest Promos</p>
<?php foreach($promos as $promo):?>
  <div class="row" style="margin: 10px 50px">
    
  <hr class="divider hidden-md hidden-lg">
    <div class="col-md-4 text-center" style="padding:15px;">
      <div class="img-container">
        <a href="<?php echo base_url().'promo/view_promo/'.$promo['ID'].'/'.$promo['name'] ?>"><img class="img-promo" style="width:90%" src="<?php echo base_url().'assets/img/promo/'.$promo['img_home']  ?>" /></a>
      </div>
    </div>
    <div class="col-md-8" style="padding:15px;">
      <div class="promo-title">
        <?php  echo $promo['title']?>
      </div>
      
      <hr class="divider">
      <div class="promo-detail">
        <p><?php  echo $promo['detail']?></p>
      </div>  
      <div style="position: absolute; right:15px;bottom: 0;">
        <span class="learn-more">
          <a href="<?php echo base_url().'promo/view_promo/'.$promo['ID'] ?>" class="btn btn-xs btn-blue btn-circle hvr-icon-forward">Learn more</a>
        </span>
      </div>
    </div>
  </div>
  <!-- <div class="row">
    <div class="col-lg-12">
      <hr class="divider">
    </div>
  </div> -->
<?php endforeach ?>
</div>


<!-- <style>
  
.row-divider {
  width: 100%;
  height: 10px;
  background: transparent; 
}
</style>


<div class="container promos">
<p class="title">Latest Promo</p>
<?php $test = 1?>
<?php foreach($promos as $promo):?>

	    <div class="col-md-6" style="padding:25px;">
      	<div class="img-container">

          	<a href="<?php echo base_url().'promo/view_promo/'.$promo['ID'].'/'.$promo['name'] ?>"><img style="width:100%" src="<?php echo base_url().'assets/img/promo/'.$promo['img_home']  ?>" /></a>
          </div>
          <div class="promo-title bordered">
      		<?php  echo $promo['title']?>
          </div>
          <div class="promo-detail bordered">
          	<p><?php  echo $promo['detail']?></p>
              <div style="text-align:right; margin-top:30px">
              	<span class="learn-more">
              		<a href="<?php echo base_url().'promo/view_promo/'.$promo['ID'] ?>" class="btn btn-xs btn-orange hvr-icon-forward">Learn more</a>
                  </span>
              </div>
          </div>
          
      </div>
    <?php if($test % 2 == 0):?>
      <div class="col-lg-12 row-divider"></div> 
    <?php endif; ?>
    <?php $test++; ?>
<?php endforeach ?>
</div> -->