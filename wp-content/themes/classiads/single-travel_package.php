<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage classiads
 * @since classiads 1.2.2
 */
?>

<?php include_once "template-travel-header.php";?>

<style>
	
/* ----------------------------------------- */
/* Content Template: Content template for Packages - start */
/* ----------------------------------------- */

section.content-package {
  display: none;
  padding: 20px 0 0;
  border-top: 1px solid #ddd;
}

input.tabs {
  display: none;
}

label.single-label {
  display: inline-block;
  margin: 0 0 -1px;
  padding: 15px 25px;
  font-weight: 600;
  text-align: center;
  color: #bbb;
  border: 1px solid transparent;
}

label:before {
  font-family: fontawesome;
  font-weight: normal;
  margin-right: 10px;
}


label:hover {
  color: #888;
  cursor: pointer;
}

input:checked + label {
  color: #555;
  border: 1px solid #ddd;
  border-top: 2px solid #00afef;
  border-bottom: 1px solid #fff;
}

#tab1:checked ~ #content1,
#tab2:checked ~ #content2,
#tab3:checked ~ #content3,
#tab4:checked ~ #content4 {
  display: block;
}

.package-single-details h5.pricing .per-person {
    font-size: 16px !important;
    color: #252525;
    font-weight: 600;
}

.package-single-details h5.pricing {
    font-size: 20px !important;
    font-family: Open sans, sans-serif;
    font-weight: bold;
    color: #00aff0;
}

h3.package-single-name {
    font-size: 22px !important;
    font-weight: bold !important;
}

.rating {
    padding-bottom: 30px;
}

.single-hotel-website {
    background-color: transparent;
    border: 1px solid #00AFEF;
    padding: 10px 20px;
    border-radius: 50px;
    text-transform: uppercase;
    font-weight: bold;
}

.single-hotel-website:hover {
    background-color: #00AFEF;
    color: #fff !important;
}

.enquire-single a {
    background-color: #00aff0;
    padding: 10px 20px;
    color: #fff;
    text-transform: uppercase;
    border-radius: 50px;
    font-weight: 600;
      border: 1px solid #00aff0;
      margin-right: -20px;
}

.enquire-single a:hover {
    color: #00aff0;
    border: 1px solid #00aff0;
    background-color: transparent;
}

.enquire-single {
    text-align: right;
    display: inline-block;
    vertical-align: bottom;
  	margin-top: 40px;
}

.travel-valid-date h5, .package-exp h5 {
    font-size: 16px !important;
    font-family: Open Sans, sans-serif !important;
    font-weight: bold !important;
    color: #00aff0 !important;
}

.package-exp {
    padding-top: 20px;
}

.travel-valid-date {
    padding-bottom: 20px;
}

.stars .blue {
    font-weight: bold;
}


#gallery-carousel {
    position: relative;
}


#gallery-carousel .owl-nav {
    position: absolute;
    top: 44%;
    width: 100%;
}

#gallery-carousel .owl-next, #gallery-carousel .owl-prev {
    font-size: 50px;
    color: #00aff0;
}

#gallery-carousel .owl-prev {
    position: absolute;
    left: 1%;
}


#gallery-carousel .owl-next {
    position: absolute;
    right: 1%;
}

.countdown_txt {
    font-size: 9px !important;
    padding: 0 !important;
    margin: 0 !important;
    letter-spacing: 0px !important;
}

.countdown_amount:after {
    font-size: 11px !important;
    margin: 0 !important;
    padding: 0 !important;
    letter-spacing: 0px !important;
}

.countdown_amount {
    font-size: 16px !important;
    margin: 0 !important;
    letter-spacing: 0px !important;
}


.percentage:after {
    content: ' OFF!';
}

@media screen and (max-width: 650px) {
  label.single-label:before {
    margin: 0;
    font-size: 18px;
  }
  label.single-label {
	display: block;
	border: 1px solid;   
  }  
}

@media screen and (max-width: 400px) {
  label.single-label {
    padding: 15px;
  }
}

/* ----------------------------------------- */
/* Content Template: Content template for Packages - end */
/* ----------------------------------------- */
</style>


<?php while ( have_posts() ) : the_post(); 
      global $post;
      global $package_information;
          
      $page_name = $post->post_name;
      
      $package_information = array(
      		'package_name' => $post->post_title ,
      		'package_pricing' => wp_strip_all_tags(get_post_meta($post->ID, 'package_pricing', true)),
      		'package_excerpt' => get_post_meta($post->ID, 'package_excerpt', true),
      		'package_discount' => wp_strip_all_tags(get_post_meta($post->ID, 'package_discount', true)),
      		'package_cover_photo_url' =>  get_post_meta($post->ID, 'package_cover_photo_url', true),
      		'package_layer_slider_id' => get_post_meta($post->ID, 'package_layer_slider_id', true),
      		'package_detail_include' =>  get_post_meta($post->ID, 'package_detail_include', true),
      		'package_detail_validity' =>  get_post_meta($post->ID, 'package_detail_validity', true),     		
      		
      );
      
      $obj_arr = get_the_terms( $post->ID, "package_taxonomy");
      
      if(count($obj_arr)>0){
      	
      	foreach ($obj_arr as $obj ) {
      		$package_information['package_taxonomy_url'] = get_term_link($obj);
      		break;
      	}
          	
      }else{
      	$package_information['package_taxonomy_url'] = "#";
      }
      
   
      
?>
<div class="entry-content single single-package">
<?php
	echo do_shortcode ( '[layerslider id="' . $package_information ['package_layer_slider_id'] . '"]' );
	?>   	

<?php
	
	$list_package_notes = get_post_meta ( $post->ID, 'list_package_notes', true );
	$list_package_notes_exclusive_sale = get_post_meta ( $post->ID, 'list_package_notes_exclusive_sale', true );
	$list_package_notes_added_value = get_post_meta ( $post->ID, 'list_package_notes_added_value', true );
	$list_package_notes_value_inclusion_1 = trim ( get_post_meta ( $post->ID, 'list_package_notes_value_inclusion_1', true ) );
	$list_package_notes_value_inclusion_2 = trim ( get_post_meta ( $post->ID, 'list_package_notes_value_inclusion_2', true ) );
	
	$list_package_other_travel_dates_honeymoon = trim ( get_post_meta ( $post->ID, 'list_package_other_travel_dates_honeymoon', true ) );
	$list_package_other_travel_dates_holiday = trim ( get_post_meta ( $post->ID, 'list_package_other_travel_dates_holiday', true ) );
	
	?>

<div class="one-half first package-single-details">
		<h5 class="pricing"> <?php echo $package_information['package_pricing']; ?> <span class="per-person">per person</span>
		</h5>
		<div class="percentage round"><?php echo $package_information['package_discount']; ?></div>
		<h3 class="package-single-name">
			<?php echo $package_information['package_name']; ?>
		</h3>

		<div class="rating">
			<span class="stars"> <span class="blue">HOTEL STAR RATING: </span> <i
				class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star"
				aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i
				class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-o"
				aria-hidden="true"></i>
			</span>
		</div>

		<a href="http://www.centarahotelsresorts.com/centara/crf/"
			class="single-hotel-website" target="_blank">Visit Hotel Website</a>

	</div>

	<div class="one-half enquire-single">
		<!--<div class="travel-valid-date"><h5>Travel Valid Date: </h5>[types field='travel-start-date' style='text' format='F j, Y'][/types] - [types field='travel-end-date' style='text' format='F j, Y'][/types]</div>-->
		<a href="#" class="popmake-390 pum-trigger" style="cursor: pointer;" data-toggle="modal"
				data-package_quote="specific" data-target="#enquiryModal">Enquire
			About The Package</a>
		<div class="package-exp">
			<h5>Deal Expiry: October 31, 2018</h5>
		</div>
	</div>

	<div class="four-fifths">

		<input class="tabs" id="tab1" type="radio" name="tabs" checked=""> <label
			for="tab1" class="single-label">Package Inclusions</label> <input
			class="tabs" id="tab2" type="radio" name="tabs"> <label for="tab2"
			class="single-label">Other Dates &amp; Room Types</label> <input
			class="tabs" id="tab3" type="radio" name="tabs"> <label for="tab3"
			class="single-label">Description</label> <input class="tabs"
			id="tab4" type="radio" name="tabs"> <label for="tab4"
			class="single-label">Conditions</label>

		<section id="content1" class="content-package">
			<h5>Includes:</h5>
			<?php echo $package_information['package_detail_include'];?>
			<h5>Valid for stays:</h5>
			<?php echo $package_information['package_detail_validity'];?>
			<span>For other travel dates please contact us or send an inquiry</span>

		</section>

		<section id="content2" class="content-package">
			<?php echo $package_information['package_detail_validity'];?>
			<span>For other travel dates please contact us or send an inquiry</span>

		</section>

		<section id="content3" class="content-package">
			<?php echo $package_information['package_detail_include'];?>
		</section>

		<section id="content4" class="content-package">
	<?php
	$conditions_apply_content = get_option ( "conditions_apply_content" );
	
	echo $conditions_apply_content;
	
	?>

		</section>

	</div>
	
	<div class="row" style="display: none;">
		<div class="in-sec col-xs-12 col-lg-10 col-md-12">
			<div class="row">
       <?php
	
if ($list_package_notes == "exclusive_sale" || $list_package_notes == "added_value") {
		?>
	  <div class="col-lg-8">
	  <?php } else{ ?>
	  <div class="col-lg-12">
	  <?php }?>
    	  
<!--  	  <div class="visible-lg visible-md col-lg-4 col-md-5 no-left-padding">
		    <a class="enquiry_anchor" href="#" data-toggle="modal" data-package_quote="specific" data-target="#enquiryModal"><img src="<?php echo get_stylesheet_directory_uri()."/images/enquire-now-300x75.png"; ?>" alt="enquire now" /></a>
		  </div>
		
		  <div class="visible-xs visible-sm col-sm-6 col-xs-8">
		    <a class="enquiry_anchor" id="enquiry-button-2" data-package_quote="specific" href="<?php echo get_home_url(null,"package-enquiry"); ?>" ><img src="<?php echo get_stylesheet_directory_uri()."/images/enquire-now-300x75.png"; ?>" alt="enquire now" /></a>
		  </div> -->
						<div class="clearfix"></div>
						<h3>INCLUDES:</h3>
						<p>
		  
		  </p>
						<h3>Valid for stays:</h3>
						<p>
		  
		  </p>

						<h3 class="other_dates_text">For Other Travel Dates:</h3>


						<p>
							<!--  Please contact us on <a href="tel:+61295690811">
		  	<i class="fa fa-phone"></i>+61 2 95690811</a>  / 
		  	<a href="tel:1300241745"><i class="fa fa-phone"></i>1300 241 745</a> 
		  	or -->
							Click on the <a href="#page_bottom_button_group">Enquiry</a>
							button below.
						</p>


						<!--  	  <div class="row other_dates_div">
		  		<div id="other_dates_honeymoon" class="visible-lg visible-md col-md-3 col-md-offset-2">
    				<a class="buton_custom" href="<?php echo $list_package_other_travel_dates_honeymoon;?>" > Honeymoons</a>
  		  		</div>
  
  		  		<div id="other_dates_holiday" class="visible-lg visible-md col-md-3 col-md-offset-2">
    				<a class="buton_custom" href="<?php echo $list_package_other_travel_dates_holiday;?>" > Holidays</a>
  		 		</div>
  		 		
  		 		<div id="other_dates_btn_group" class="visible-xs visible-sm center-block btn-group" role="group" aria-label="Button Group">
    				<button class="btn buton_custom" onclick="location.href ='<?php echo $list_package_other_travel_dates_honeymoon;?>'"> Honeymoons</button>
    				<button class="btn buton_custom" onclick="location.href ='<?php echo $list_package_other_travel_dates_holiday;?>'"> Holidays</button>
  				</div>
  		 		
		  </div> -->



					</div>
	  <?php
	
if ($list_package_notes == "exclusive_sale" || $list_package_notes == "added_value") {
		?>
	  
	  <div
						class="col-lg-4 col-lg-offset-0 col-md-offset-4 col-md-4 col-sm-offset-4 col-sm-5 col-xs-offset-1 col-xs-10">
						<div class="promotion-note-scroll"></div>
						<div class="promotion-note hidden">
							<div class="">
								<img class="pin-image center-block"
									src="<?php echo get_stylesheet_directory_uri();?>/images/note-pin-1.png">
							</div>
	  			
	  			<?php
		
if ($list_package_notes == "exclusive_sale") {
			?> 
	  			<div class="exclusive-text">Exclusive Sale</div>
							<div class="percentage-text">
								<span class="percentage-word">Save</span> <br>
	  				<?php echo $list_package_notes_exclusive_sale; ?> %
	  			</div>
							<div class="clause-text">If paid in full within 7 days of
								confirmation</div>
	  			<?php
		}
		
		if ($list_package_notes == "added_value") {
			?>
	  			<div class="add-value-text1">With over...</div>
							<div class="add-value-text2">
	  				$<?php echo $list_package_notes_added_value; ?>	
	  			</div>
							<div class="add-value-text3">of Added Value included</div>
	  			

			        
	  			<?php if(!empty($list_package_notes_value_inclusion_1)){?>
	  			<div class="inclusion-text1">
	  				- <?php echo $list_package_notes_value_inclusion_1; ?>	
	  				
	  			</div>
	  			<?php }?>
	  			
	  			<?php if(!empty($list_package_notes_value_inclusion_2)){?>
	  			<div class="inclusion-text2">
	  				- <?php echo $list_package_notes_value_inclusion_2; ?>
	  			</div>
	  			<?php
			}
			?>
	  			<div class="inclusion-bottom"></div>
	  			<?php
		}
		?>
	  		</div>
					</div>
	  <?php
	}
	?>
  </div>
  <?php
	if ($page_name == "hot-deal-pimalai-resort-and-spa") {
		$expiry_date = date ( 'jS M Y', mktime ( 0, 0, 0, 2, 28, 2015 ) );
	} else {
		// $expiry_date = date('jS M Y', mktime(0, 0, 0, date("m") , date("d")+30, date("Y")));
		$expiry_date = "31 OCT 2015";
	}
	
	?>

			</div>

		</div>
	</div>

</div>

<?php endwhile; ?>

<script type="text/javascript">
    jQuery(document).ready(function($){

    	$("#enquiry-button-1").attr("href", $("#enquiry-button-1").attr("href") + "?package_name=<?php echo urlencode($package_information['package_name']);?>&package_pricing=<?php echo urlencode($package_information['package_pricing']); ?>");
        
        $("#enquiry-button-2").attr("href", $("#enquiry-button-2").attr("href") + "?package_name=<?php echo urlencode($package_information['package_name']);?>&package_pricing=<?php echo urlencode($package_information['package_pricing']); ?>");
        
		
    });
        
</script>

<?php include_once "template-travel-footer.php";?>