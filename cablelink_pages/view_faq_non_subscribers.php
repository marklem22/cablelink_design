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
                <div class="tab-card active" data-tab="Service_Availability">Service Availability<span class="indicator"></span></div>
                <div class="tab-card" data-tab="Plans_&_Packages">Plans & Packages<span class="indicator"></span></div>
                <div class="tab-card" data-tab="Application_&_Installation">Application & Installation<span class="indicator"></span></div>
                <div class="tab-card" data-tab="Pricing_&_Payments">Pricing & Payments<span class="indicator"></span></div>
                <div class="tab-card" data-tab="Equipment_&_Service">Equipment & Service<span class="indicator"></span></div>
                <div class="tab-card" data-tab="Support_&_Next_Steps">Support & Next Steps<span class="indicator"></span></div>
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
            <!-- <div id="Service_Availability" class="content active"> -->
                <!-- <div class="centered"></div>   -->
            <!-- </div> -->
            <div id="Service_Availability" class="content active">
                <div class="centered-category">
                                    <!-- <?php echo json_encode($category)?> -->
                    <?php foreach($service_availability as $careers):?>
                    
                    	<div class="faq-container">
                            <a id="<?php echo $careers['ID']?>" class="faq-question"  data-jobtitle="<?php echo $careers['ID'] ?>">
                                   <?php echo $careers['FAQ'] ?><span class="plus-sign">+<span>
                            </a>
                    		<div class="faq-answer" style="display: none;">
                    					<!-- <p style="padding-top:25px;"><?php  echo $careers['question'];?></p> -->
                    				  	<p style="/*!margin-left: 50px;*/ font-weight:normal !important; padding-top:20px;"><?php echo  $careers['answer']; ?></p>
                    
                    		</div>
                        </div>
                    <?php endforeach?>
                </div>
            </div>

            <div id="Plans_&_Packages" class="content">
                 <div class="centered-category">
                    <?php foreach($featured_career as $careers):?>
                    
                    	<div class="faq-container">
                            <a id="<?php echo $careers['ID']?>" class="faq-question"  data-jobtitle="<?php echo $careers['ID'] ?>">
                                   <?php echo $careers['FAQ'] ?><span class="plus-sign">+<span>
                            </a>
                    		<div class="faq-answer" style="display: none;">
                    					<!-- <p style="padding-top:25px;"><?php  echo $careers['question'];?></p> -->
                    				  	<p style="/*!margin-left: 50px;*/ font-weight:normal !important; padding-top:20px;"><?php echo  $careers['answer']; ?></p>
                    
                    		</div>
                        </div>
                    <?php endforeach?>
                </div>
            </div>


            <div id="Application_&_Installation" class="content">
                 <div class="centered-category">
                    <?php foreach($Application_Installation as $careers):?>
                    
                    	<div class="faq-container">
                            <a id="<?php echo $careers['ID']?>" class="faq-question"  data-jobtitle="<?php echo $careers['ID'] ?>">
                                   <?php echo $careers['FAQ'] ?><span class="plus-sign">+<span>
                            </a>
                    		<div class="faq-answer" style="display: none;">
                    					<!-- <p style="padding-top:25px;"><?php  echo $careers['question'];?></p> -->
                    				  	<p style="/*!margin-left: 50px;*/ font-weight:normal !important; padding-top:20px;"><?php echo  $careers['answer']; ?></p>
                    
                    		</div>
                        </div>
                    <?php endforeach?>
                </div>
            </div>

            <div id="Pricing_&_Payments" class="content">
                 <div class="centered-category">
                    <?php foreach($Pricing_Payments as $careers):?>
                    
                    	<div class="faq-container">
                            <a id="<?php echo $careers['ID']?>" class="faq-question"  data-jobtitle="<?php echo $careers['ID'] ?>">
                                   <?php echo $careers['FAQ'] ?><span class="plus-sign">+<span>
                            </a>
                    		<div class="faq-answer" style="display: none;">
                    					<!-- <p style="padding-top:25px;"><?php  echo $careers['question'];?></p> -->
                    				  	<p style="/*!margin-left: 50px;*/ font-weight:normal !important; padding-top:20px;"><?php echo  $careers['answer']; ?></p>
                    
                    		</div>
                        </div>
                    <?php endforeach?>
                </div>
            </div>

            <div id="Equipment_&_Service" class="content">
                 <div class="centered-category">
                    <?php foreach($Equipment_Service as $careers):?>
                    
                    	<div class="faq-container">
                            <a id="<?php echo $careers['ID']?>" class="faq-question"  data-jobtitle="<?php echo $careers['ID'] ?>">
                                   <?php echo $careers['FAQ'] ?><span class="plus-sign">+<span>
                            </a>
                    		<div class="faq-answer" style="display: none;">
                    					<!-- <p style="padding-top:25px;"><?php  echo $careers['question'];?></p> -->
                    				  	<p style="/*!margin-left: 50px;*/ font-weight:normal !important; padding-top:20px;"><?php echo  $careers['answer']; ?></p>
                    
                    		</div>
                        </div>
                    <?php endforeach?>
                </div>
            </div>

            <div id="Support_&_Next_Steps" class="content">
                 <div class="centered-category">
                    <?php foreach($Support_Next_Steps as $careers):?>
                    
                    	<div class="faq-container">
                            <a id="<?php echo $careers['ID']?>" class="faq-question"  data-jobtitle="<?php echo $careers['ID'] ?>">
                                   <?php echo $careers['FAQ'] ?><span class="plus-sign">+<span>
                            </a>
                    		<div class="faq-answer" style="display: none;">
                    					<!-- <p style="padding-top:25px;"><?php  echo $careers['question'];?></p> -->
                    				  	<p style="/*!margin-left: 50px;*/ font-weight:normal !important; padding-top:20px;"><?php echo  $careers['answer']; ?></p>
                    
                    		</div>
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