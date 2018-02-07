<?php
/**
 * The Template footer for displaying all single posts.
 *
 * @package WordPress
 * @subpackage classiads
 * @since classiads 1.2.2
 */
?>



	    		</div>
	    		
	    		<div class="clearfix"></div>

   				  <div id="bottom_description" class="row" style="display: none;">
      				<div id="bottom_text_des" class="visible-xs visible-sm col-md-12">
      				<?php 
  
  						$footer_content = get_option("footer_content");
  
  						echo $footer_content;
  					?>
                    </div>
     			<!--   <div id="bottom_logo" class="visible-xs visible-sm center-block bottom-logo-block">
        				<a href="#" target="blank"><img src="<?php echo get_home_url(null,"wp-content/uploads/2015/09/WTGLogo-Large1.jpg"); ?>" alt="" width="250px" /></a>
      				</div>  -->  
      				
      				<div id="bottom_text_des" class="visible-md visible-lg col-md-12">
      				<?php 
  
  						$footer_content = get_option("footer_content");
  
  						echo $footer_content;
  					?>     				
                    </div>
     		<!--    <div id="bottom_logo" class="visible-md visible-lg">
        				<a href="#" target="blank"><img src="<?php echo get_home_url(null,"wp-content/uploads/2015/09/WTGLogo-Large1.jpg"); ?>" alt="" width="250px" /></a>
      				</div>  -->	 
      				
      				
   				  </div> 

	    		
	    	</div>

	    </div>

    </section>
    
<?php
  $modal_type = array("enquiry","booking");
  for ($i=0;$i<count($modal_type);$i++){
?> 	

  <div id="<?php echo $modal_type[$i];?>Modal" class="contactModal modal fade" tabindex="-1" role="dialog" aria-labelledby="<?php echo $modal_type[$i];?>ModalLabel" aria-hidden="true">
  	<div class="modal-dialog modal-lg">
  	<div class="modal-content">
  	<div class="modal-header">
  	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
  	<h3 id="<?php echo $modal_type[$i];?>ModalLabel"></h3>
  	      </div>
  	      <form id="<?php echo $modal_type[$i];?>Form" class="form-horizontal" action="" method="post">
  	      <div class="modal-body">
  	          <div class="row">
  	            <div class="col-md-6 modal-right">
  	              <div class="form-group">
  	                <div class="row-fluid">
  	                <div class="col-md-4">
  	                  <label>First Name<abbr class="required" title="required">*</abbr></label>
  	                </div>
  	                <div class="col-md-8">
  	                  <input class="form-control required" name="first-name" placeholder="Your first name" data-msg-required="Please enter your first name" data-rule-minlength="2" type="text">
  	                </div>
  	                </div>
  	            </div>
  	          
  	          <div class="form-group">
  	            <div class="row-fluid">
  	            <div class="col-md-4">
  	              <label>Last Name<abbr class="required" title="required">*</abbr></label>
  	            </div>
  	            <div class="col-md-8">
  	              <input class="form-control required" name="last-name" placeholder="Your last name" data-msg-required="Please enter your last name"  data-rule-minlength="2" type="text">
  	            </div>
  	            </div>
  	          </div>
  	          
  	          <div class="form-group">
  	            <div class="row-fluid">
  	            <div class="col-md-4">
  	              <label>E-Mail<abbr class="required" title="required">*</abbr></label>
  	            </div>
  	            <div class="col-md-8">
  	              <input class="form-control email" name="email" placeholder="Email (so that we can contact you)" data-msg-email="email address e.g. (you@gmail.com)" data-msg-required="Please enter your email address" data-rule-email="true" data-rule-required="true" type="text">
  	            </div>
  	            </div>
  	          </div>
  	          
  	          <div class="form-group">
  	            <div class="row-fluid">
  	            <div class="col-md-4">
  	              <label>Contact me via</label>
  	            </div>
  	            <div class="col-md-8" >
  	              <div class="dropdown" id="contact-method-div">
  					<button class="btn btn-default dropdown-toggle modal-dropdown-btn" type="button" id="contact-method" data-toggle="dropdown" aria-expanded="true">
    					<span class="result">Email</span>
    					<span class="caret"></span>
 					</button>
  					<ul class="dropdown-menu" role="menu" aria-labelledby="contact-method">
    					<li role="presentation"><a role="menuitem" tabindex="-1" >Email</a></li>
    					<li role="presentation"><a role="menuitem" tabindex="-1" >Phone</a></li>
  					</ul>
				  </div>
  	            </div>
  	            </div>
  	          </div>
  	          
  	          <div id="phone-wrap" class="form-group">
  	            <div class="row-fluid">
  	            <div class="col-md-4">
  	              <label>Phone</label>
  	            </div>
  	            <div class="col-md-8">
  	              <input class="form-control phone" placeholder="" name="phone" type="text">
  	            </div>
  	            </div>
  	          </div>
  	          
  	          <div id="time-to-call-wrap" class="form-group">
  	            <div class="row-fluid">
  	            <div class="col-md-4">
  	              <label>Best time to call</label>
  	            </div>
  	            <div class="col-md-8" >
  	              <div class="dropdown" id="time-to-call-div">
  					<button class="btn btn-default dropdown-toggle modal-dropdown-btn" type="button" id="time-to-call" data-toggle="dropdown" aria-expanded="true">
    					<span class="result">Any Time</span>
    					<span class="caret"></span>
 					</button>
  					<ul class="dropdown-menu" role="menu" aria-labelledby="time-to-call">
    					<li role="presentation"><a role="menuitem" tabindex="-1" >Any Time</a></li>
    					<li role="presentation"><a role="menuitem" tabindex="-1" >Morning</a></li>
    					<li role="presentation"><a role="menuitem" tabindex="-1" >Afternoon</a></li>
  					</ul>
				  </div>
  	            </div>
  	            </div>
  	          </div>
  	          
  	          <div class="form-group">
  	            <div class="row-fluid">
  	            <div class="col-md-4">
  	              <label>Arrival Date</label>
  	            </div>
  	            <div class="col-md-8">
  	              <input class="form-control" placeholder="yyyy-mm-dd" data-provide="datepicker" name="date-depart" data-date-format="yyyy-mm-dd" data-date-start-date="-1d"  data-date-orientation='bottom' type="text">
  	            </div>
  	            </div>
  	          </div>
  	          
 <!--         <div class="form-group">
  	            <div class="row-fluid">
  	            <div class="col-md-4">
  	              <label>City Departing from</label>
  	            </div>
  	            <div class="col-md-8">
  	              <input class="form-control" placeholder="Where are you" name="city-depart" type="text">
  	            </div>
  	            </div>
  	          </div> --> 	 
  	          
  	          <div class="form-group">
  	            <div class="row-fluid">
  	            <div class="col-md-4">
  	              <label>Number of nights</label>
  	            </div>
  	            <div class="col-md-8">
  	              <input class="form-control" placeholder="How long do you want to stay" name="number-of-nights" type="text">
  	            </div>
  	            </div>
  	          </div>
  	          
  	          <div class="form-group">
  	            <div class="row-fluid">
  	            <div class="col-md-4">
  	              <label>Promo code<br>(if applicable)</label>
  	            </div>
  	            <div class="col-md-8">
  	              <input class="form-control" placeholder="Promo code" name="promo-code" type="text">
  	            </div>
  	            </div>
  	          </div>
  	          
  	           
  	              
  	        </div>
  	        <div class="col-md-6">
  	                
  	          <div class="form-group">
  	            <div class="row-fluid">
  	            <div class="col-md-4">
  	              <label>Maximum Spend AUD</label>
  	            </div>
  	            <div class="col-md-8" >
  	              <div class="dropdown" id="spend-div">
  					<button class="btn btn-default dropdown-toggle modal-dropdown-btn" type="button" id="spend" data-toggle="dropdown" aria-expanded="true">
    					<span class="result">$5,000 - $7,500</span>
    					<span class="caret"></span>
 					</button>
  					<ul class="dropdown-menu" role="menu" aria-labelledby="spend">
    					<li role="presentation"><a role="menuitem" tabindex="-1" >Under $3,000</a></li>
    					<li role="presentation"><a role="menuitem" tabindex="-1" >$3,000 - $5,000</a></li>
    					<li role="presentation"><a role="menuitem" tabindex="-1" >$5,000 - $7,500</a></li>
    					<li role="presentation"><a role="menuitem" tabindex="-1" >$7,500 - $10,000</a></li>
    					<li role="presentation"><a role="menuitem" tabindex="-1" >$10,000 Above</a></li>
  					</ul>
				  </div>
  	            </div>
  	            </div>
  	          </div>
  	          
  	          <div class="form-group">
  	            <div class="row-fluid">
  	            <div class="col-md-4">
  	              <label>Travel Occasion</label>
  	            </div>
  	            <div class="col-md-8" >
  	              <div class="dropdown" id="travel-occasion-div">
  					<button class="btn btn-default dropdown-toggle modal-dropdown-btn" type="button" id="travel-occasion" data-toggle="dropdown" aria-expanded="true">
    					<span class="result">Holiday</span>
    					<span class="caret"></span>
 					</button>
  					<ul class="dropdown-menu" role="menu" aria-labelledby="travel-occasion">
    					<li role="presentation"><a role="menuitem" tabindex="-1" >Holiday</a></li>
    					<li role="presentation"><a role="menuitem" tabindex="-1" >Honeymoon</a></li>
    					<li role="presentation"><a role="menuitem" tabindex="-1" >Other</a></li>
  					</ul>
				  </div>
  	            </div>
  	            </div>
  	          </div>
  	          
 <!--        <div class="form-group">
  	            <div class="row-fluid">
  	            <div class="col-md-7">
  	              <label>Flights required? <input type="checkbox" name="flight" value="flightChecked"></label>
  	              
  	            </div>
  	            </div>
  	          </div> --> 	    
  	              
  	          <div class="form-group">
  	            <div class="row-fluid">
  	            <div class="col-md-7">
  	            	<label>Enter your message here</label>
  	                  
  	                <textarea class="form-control" placeholder="Your message here.." name="message"  rows="6" cols="6"></textarea>
 	              
  	            </div>
  	            </div>
  	                 
  	                   
  	          </div>
  	          
  	          
  	          <div class="form-group">
  	            <div class="row-fluid">
  	            <div class="col-md-8">
  	            	
  	               <div class="g-recaptcha" data-sitekey="6LfqMhcUAAAAANsudqS343LdqUGXV18pw1VBN5og"></div>
  	            </div>
  	            </div>
            
  	          </div>
  	          
  	          <div class="form-group">
  	             <input id="<?php echo $modal_type[$i];?>_package_hidden" type="hidden" name="package" value="General Enquiry">
  	             <input id="contact-method-hidden" type="hidden" name="contact-method" value="Email">
  	             <input id="travel-occasion-hidden" type="hidden" name="travel-occasion" value="Holiday">
  	             <input id="spend-hidden" type="hidden" name="spend" value="$5000 - $10000">
  	             <input id="time-to-call-hidden" type="hidden" name="time-to-call" value="Any Time">
  	             
  	          </div>
  	          
  	        </div>
  	        </div>     
  	          
  	          
  	          
  	          
  	      </div>
  	      <div class="modal-footer">
  	        <?php wp_nonce_field('post_nonce', 'post_nonce_field'); ?>
  	        <label class="pull-left footer-checkbox"><input type="checkbox" name="newsletter" value="newsletterChecked" checked>Get the latest deals &amp; specials.</label>
  	        <button type="submit" name="submit" value="<?php echo $modal_type[$i];?>" class="btn btn-success">Send It!</button> <p class="help-block pull-left text-danger hide">&nbsp; The form is not valid. </p>
  	        <button class="btn" data-dismiss="modal" aria-hidden="true">Cancel</button>
  	      </div>
  	      </form>
  	    </div>
  	  </div>
  	</div>
<?php 	
  } 
?>

<button id="responsive-menu-button"
	class="responsive-menu-button responsive-menu-boring responsive-menu-accessible"
	type="button" aria-label="Menu">


	<span class="responsive-menu-box"> <span class="responsive-menu-inner"></span>
	</span>

</button>

<div id="responsive-menu-container" class="slide-left">
	<div id="responsive-menu-wrapper">
		<div id="responsive-menu-title">
			<a href="<?php echo get_home_url();?>" target="_self">

				<div id="responsive-menu-title-image">
					<img alt=""
						src="<?php bloginfo('template_url'); ?>/images/logo.png">
				</div>

			</a> <a href="<?php echo get_home_url();?>" target="_self"> </a>
		</div>
		<ul id="responsive-menu" class="">
			<li id="responsive-menu-item-180"
				class=" menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-2 current_page_item responsive-menu-item responsive-menu-current-item"><a
				class="responsive-menu-item-link"
				href="<?php echo get_home_url();?>" itemprop="url">Home</a></li>
			<li id="responsive-menu-item-178"
				class=" menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children responsive-menu-item responsive-menu-item-has-children"><a
				class="responsive-menu-item-link"
				href="javascript:;" itemprop="url">Packages
					<div class="responsive-menu-subarrow">▼</div>
			</a>
			<ul class="responsive-menu-submenu responsive-menu-submenu-depth-1">
					<?php
								$tahiti = get_term_by ( 'slug', 'tahiti', 'package_taxonomy' );
								
								$term_args = array (
										'hide_empty' => true,
										'parent' => $tahiti->term_id 
								);
								
								$terms = get_terms ( 'package_taxonomy', $term_args );
								foreach ( $terms as $term ) {
									?>

									

						  <li
						class=" menu-item menu-item-type-post_type menu-item-object-page responsive-menu-item"><a
						class="responsive-menu-item-link"
						href="<?php echo get_term_link( $term->slug, "package_taxonomy" );?>"
						itemprop="url"><?php echo $term->name; ?></a></li>

   					      <?php

   				    	  }

   				    	  ?>
					
				</ul></li>
			<li id="responsive-menu-item-177"
				class=" menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children responsive-menu-item responsive-menu-item-has-children"><a
				class="responsive-menu-item-link"
				href="<?php echo get_home_url(null, 'travel-guide');?>"
				itemprop="url">Travel Guide
			</a></li>
			<li id="responsive-menu-item-179"
				class=" menu-item menu-item-type-post_type menu-item-object-page responsive-menu-item"><a
				class="responsive-menu-item-link"
				href="" itemprop="url">Blog</a></li>
			<li id="responsive-menu-item-383"
				class="popmake-514 menu-item menu-item-type-custom menu-item-object-custom responsive-menu-item pum-trigger"
				style="cursor: pointer;"><a class="responsive-menu-item-link"
				href="<?php echo get_home_url(null,"package-enquiry"); ?>" itemprop="url">Get A Quote</a></li>
			<li id="responsive-menu-item-175"
				class=" menu-item menu-item-type-post_type menu-item-object-page responsive-menu-item"><a
				class="responsive-menu-item-link"
				href="<?php echo get_home_url(null, 'about-us'); ?>" itemprop="url">About
					Us</a></li>
		</ul>
		<div id="responsive-menu-additional-content"></div>
	</div>
</div>

<div id="call-us-bottom" class="visible-xs container_wapper">
	<div class="container">
		<div class="row-fluid">
			<div>
				<!--  <a class="center-block" href="tel:1300 650 965"> <strong> Call us: 1300 650 965</strong></a> -->
			</div>
		</div>
	</div>
</div>

<div
	class="fl-row fl-row-full-width fl-row-bg-photo fl-node-596737ad00a3a"
	data-node="596737ad00a3a">
	<div class="fl-row-content-wrap">
		<div class="fl-row-content fl-row-fixed-width fl-node-content">

			<div class="fl-col-group fl-node-596737acea492"
				data-node="596737acea492">
				<div class="fl-col fl-node-596737acea4e8 fl-col-has-cols"
					data-node="596737acea4e8">
					<div class="fl-col-content fl-node-content">
						<div class="fl-module fl-module-pp-heading fl-node-596737acea524"
							data-node="596737acea524">
							<div class="fl-module-content fl-node-content">
								<div class="pp-heading-content">
									<div class="pp-heading  pp-center">

										<h5 class="heading-title">


											<span class="title-text pp-primary-title">SUBSCRIBE FOR
												EXCLUSIVE SPECIAL DEALS</span>


										</h5>

									</div>
									<div class="pp-sub-heading"></div>

								</div>
							</div>
						</div>

						<div
							class="fl-col-group fl-node-596737acea55f fl-col-group-nested"
							data-node="596737acea55f">
							<div class="fl-col fl-node-596737acea599 fl-col-small"
								data-node="596737acea599">
								<div class="fl-col-content fl-node-content"></div>
							</div>
							<div class="fl-col fl-node-596737acea5d1 fl-col-small"
								data-node="596737acea5d1">
								<div class="fl-col-content fl-node-content">
									<div
										class="fl-module fl-module-rich-text fl-node-596737acea642"
										data-node="596737acea642">
										<div class="fl-module-content fl-node-content">
											<div class="fl-rich-text">
												<p></p>
												<div role="form" class="wpcf7" id="wpcf7-f157-p2-o1"
													lang="en-US" dir="ltr">
													<div class="screen-reader-response"></div>
													<form action="/#wpcf7-f157-p2-o1" method="post"
														class="wpcf7-form" novalidate="novalidate">
														<div style="display: none;">
															<input type="hidden" name="_wpcf7" value="157"> <input
																type="hidden" name="_wpcf7_version" value="5.0"> <input
																type="hidden" name="_wpcf7_locale" value="en_US"> <input
																type="hidden" name="_wpcf7_unit_tag"
																value="wpcf7-f157-p2-o1"> <input type="hidden"
																name="_wpcf7_container_post" value="2">
														</div>
														<div class="cta-form-wrap">
															<div class="three-fourths first">
																<span class="wpcf7-form-control-wrap classcta-email"><input
																	type="email" name="class:cta-email" value="" size="40"
																	class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email"
																	aria-required="true" aria-invalid="false"
																	placeholder="E-Mail Address *"></span>
															</div>
															<div class="one-fourth">
																<input type="submit" value="SUBMIT"
																	class="wpcf7-form-control wpcf7-submit cta-submit"><span
																	class="ajax-loader"></span>
															</div>
														</div>
														<input type="hidden" class="wpcf7-pum"
															value="{&quot;closepopup&quot;:false,&quot;closedelay&quot;:0,&quot;openpopup&quot;:false,&quot;openpopup_id&quot;:0}">
														<div class="wpcf7-response-output wpcf7-display-none"></div>
													</form>
												</div>
												<p></p>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="fl-col fl-node-596737acea60a fl-col-small"
								data-node="596737acea60a">
								<div class="fl-col-content fl-node-content"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<div id="templatemo_footer" class="container_wapper">
        <div class="container">
           <div class="row">
               <div class="hidden-xs">
                	<p>Copyright © 2018 <strong> <a href="#">Tahiti Holidays</a></strong> ·Powered by <strong><a href="#"> Tahiti Holidays</a></strong>·<strong><a href="<?php echo get_home_url(null,"/terms-and-conditions"); ?>">T&amp;C</a></strong> · <strong><a href="<?php echo get_home_url(null,"/privacy-policy"); ?>">Privacy Policy</a></strong> <!--  · <strong><a href="<?php echo get_home_url(null,"/special-conditions"); ?>">Special Conditions</a></strong>--> </p>
            
                </div>
                <div class="visible-xs col-xs-12">
                    <div>
                    	<p>Copyright © 2018 <strong> <a href="#">Tahiti Holidays</a></strong> · <strong><a href="<?php echo get_home_url(null,"/terms-and-conditions"); ?>">T&amp;C</a></strong>  </p> 
                    </div>

                    <div class="clearfix">
                    	<p> <strong><a href="<?php echo get_home_url(null,"/privacy-policy"); ?>">Privacy Policy</a></strong> <!-- · <strong><a href="<?php echo get_home_url(null,"/special-conditions"); ?>">Special Conditions</a></strong>  --> </p>                  	
                    </div>
                </div>
            </div>
        </div>
   </div>
   
   
      
   <script type="text/javascript">
//                 (function () {
//                     var head = document.getElementsByTagName("head").item(0);
//                     var script = document.createElement("script");
//                     var src = (document.location.protocol == 'https:' ? 'https://www.formilla.com/scripts/feedback.js' : 'http://www.formilla.com/scripts/feedback.js');
//                     script.setAttribute("type", "text/javascript"); script.setAttribute("src", src); script.setAttribute("async", true);
//                     var complete = false;

//                     script.onload = script.onreadystatechange = function () {
//                         if (!complete && (!this.readyState || this.readyState == 'loaded' || this.readyState == 'complete')) {
//                             complete = true;
//                             Formilla.guid = '0327e879-5d41-45cd-a7dd-cc53ec06ff0a';
//                             Formilla.loadFormillaChatButton();
//                         }
//                     };

//                     head.appendChild(script);

//                 })();
   </script>
   
   <script type="text/javascript">
           jQuery(document).ready(function($){
        	   $(".promotion-note-scroll").waypoint(function(direction) {
                   $(".promotion-note").removeClass("hidden");
             	  $(".promotion-note").addClass("animated zoomInDown");
               }, {
                  offset: '200'
               });

                  $('.date-input-top').val("");
              	  
              	  $(".enquiry_anchor").click(function(){
              		  $("#enquiryModal").css("z-index","1042");
              		  $("#bookingModal").css("z-index","1041");
              	  });

              	  $(".booking_anchor").click(function(){
              		  $("#enquiryModal").css("z-index","1041");
              		  $("#bookingModal").css("z-index","1042");
              	  });

              	  var enquiry_validator = $("#enquiryForm").validate(); 
            	  var booking_validator = $("#bookingForm").validate();

              	  $('#enquiryModal').on('show.bs.modal', function (e) {
              		 // package_quote = $(e.relatedTarget).data("package_quote");
              		  <?php if(empty($package_information['package_name'])){?>
              			  $("#enquiryModalLabel").text("General Enquiry");
              			  $("#enquiry_package_hidden").val("General Enquiry");
              		  <?php }else{?>
              		  
              			  $("#enquiryModalLabel").text("Enquiry - <?php echo $package_information['package_name']." / ".$package_information['package_pricing'];?>");
              			  $("#enquiry_package_hidden").val("<?php echo $package_information['package_name']." / ".$package_information['package_pricing'];?>");
              		  <?php }?>
              	  });

              	  $('#bookingModal').on('show.bs.modal', function (e) {
              		  package_quote = $(e.relatedTarget).data("package_quote");
              		  <?php if(empty($package_information['package_name'])){?>
              			  $("#bookingModalLabel").text("General Booking");
              			  $("#booking_package_hidden").val("General Booking");
              		  <?php }else{?>
              			  $("#bookingModalLabel").text("Booking - <?php echo $package_information['package_name']." / ".$package_information['package_pricing'];?>");
              			  $("#booking_package_hidden").val("<?php echo $package_information['package_name']." / ".$package_information['package_pricing'];?>");
              		  <?php }?>
              	  });
            
//             $('#SliderPackagesbtn').on('click',function(){
//                 $('.tripplan').toggle();
//             });


               $("#enquiryForm button[type=submit]").on("click", function(event){

                		enquiry_validator.form();

                		if (grecaptcha.getResponse() == "") {
           			    var errors;
           			    /* Build up errors object, name of input and error message: */
           			    errors = { "g-recaptcha-response" : "You have to go through CAPTCHA check" };
           			    /* Show errors on the form */
           			    enquiry_validator.showErrors(errors);
           			    event.preventDefault();            
           			}
                    	 
               });

               window.recaptcha_callback = function(){
         			$(".g-recaptcha div label").remove();
         	   };

         		
          });
   </script>

   
   <?php wp_footer(); ?>
   </body>
</html>