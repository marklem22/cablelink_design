<div class="container-fluid careers">





<!-- <div class="tab-content"> -->
    <!-- <div id="subs" class="content active">
        <h3>Subs FAQs</h3>
        <p>Accordion FAQs for subscribers here.</p>
    </div> -->

  <!-- <div id="nonsubs" class="content">
    <h3>Non-Subs FAQs</h3>
    <p>Accordion FAQs for non-subscribers here.</p>
  </div> -->
<!-- </div> -->



    <div class="row">
    	<div class="col-md-12">
        	<div class="featured-title">
                <p class="title text-center">FREQUENTLY ASKED QUESTIONS</p>
                <p class="sub-title text-center">Learn everything about CABLELINK and the most frequently asked questions.</p>
            </div>
            <div class="card-tabs"> 
                <div class="tab-card active" data-tab="Sales_related_concerns">Sales related concerns<span class="indicator"></span></div>
                <div class="tab-card" data-tab="Billing_related_concerns">Billing related concerns<span class="indicator"></span></div>
                <div class="tab-card" data-tab="Service_related_concerns">Service related concerns<span class="indicator"></span></div>
            </div>
        </div>


        <!-- <div class="featured-container" style="max-height:600px;height:600px; overflow-y:scroll; overflow-x:hidden"></div>
                 <div class="back-container"></div> -->
                 
        <!-- <div class="centered"> -->
            <!-- <div class="faq-container">
                <a  class="faq-question">
                       <p>testing <span class="plus-sign">+<span></p>
                </a>
                <div class="faq-answer">
                    <p>test</p>
                </div>
            </div>
            <div class="faq-container">
                 <a  class="faq-question">
                       <p>testing2 <span class="plus-sign">+<span></p>
                </a>
                <div class="faq-answer">
                    <p>test2 </p>
                </div>
            </div> -->
        <!-- </div> -->
        <div class="tab-content">
            <div id="Sales_related_concerns" class="content active">
                <div class="centered"></div>  
            </div>
            <div id="Billing_related_concerns" class="content">
                <div class="centered-category">
                                    <!-- <?php echo json_encode($category)?> -->
                    <?php foreach($category as $careers):?>
	                    <div class="faq-container">
                            <a id="<?php echo $careers['id']?>" class="faq-question"  data-jobtitle="<?php echo $careers['id'] ?>"><!--href="javascript:;"-->
                                   <?php echo $careers['question'] ?><span class="plus-sign">+<span>
                            </a>
	                    	<div class="faq-answer" style="display: none;">
	                    	<?php foreach($careers['answers'] as $ans):?>
	                    	<!-- <div class="test<?php echo $careers['id']?>"> -->
	                    			<?php  $test = explode('/|+|',$ans)?>
	                    			<!-- <p><?php  echo $ans?></p> -->
                            
	                    				<p style="padding-top:30px;"><?php  echo $test[0];?></p>
	                    			  	<p style="margin-left: 50px; font-weight:normal !important; padding-top:8px;"><?php echo $test[1]; ?></p>
	                    	<?php endforeach?>
	                    	</div>
                            <!-- <div class="faq-answer">
                                <p>test</p>
                            </div> -->
                        </div>
                    <?php endforeach?>
                </div>
            </div>
            <div id="Service_related_concerns" class="content">
                <!-- <div class="centered"></div>   -->
                   <div class="centered-category">
                                    <!-- <?php echo json_encode($category)?> -->
                      <?php foreach($get_service_faq as $careers):?>
	                    <div class="faq-container">
                            <a id="<?php echo $careers['id']?>" class="faq-question"  data-jobtitle="<?php echo $careers['id'] ?>"><!--href="javascript:;"-->
                                   <?php echo $careers['question'] ?><span class="plus-sign">+<span>
                            </a>
	                    	<div class="faq-answer" style="display: none;">
	                    	<?php foreach($careers['answers'] as $ans):?>
	                    	<!-- <div class="test<?php echo $careers['id']?>"> -->
	                    			<?php  $test = explode('/|+|',$ans)?>
	                    			<!-- <p><?php  echo $ans?></p> -->
                            
	                    				<p style="padding-top:30px;"><?php  echo $test[0];?></p>
	                    			  	<p style="margin-left: 50px; font-weight:normal !important; padding-top:8px;"><?php echo $test[1]; ?></p>
	                    	<?php endforeach?>
	                    	</div>
                            <!-- <div class="faq-answer">
                                <p>test</p>
                            </div> -->
                        </div>
                    <?php endforeach?>
                </div>
            </div>
        </div>
    </div>
</div>      





            <!-- <div class="col-md-12"> -->
                <!-- <div class="faq-container">
                    <a  class="faq-question"> -->
                        <!-- <div > -->
                           <!-- <p>testing <span class="plus-sign">+<span></p> -->
                        <!-- </div> -->
                    <!-- </a>
                    <div class="faq-answer">
                        <p>test</p>
                    </div>
                </div> -->
            <!-- </div> -->

            <!-- <div class="col-md-12"> -->
                <!-- <div class="faq-container">
                     <a  class="faq-question"> -->
                        <!-- <div > -->
                           <!-- <p>testing2 <span class="plus-sign">+<span></p> -->
                        <!-- </div> -->
                    <!-- </a>
                    <div class="faq-answer">
                        <p>test2 </p>
                    </div>
                </div> -->
            <!-- </div> -->