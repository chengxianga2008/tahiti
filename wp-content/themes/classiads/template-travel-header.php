<?php
/**
 * The Template Header for displaying all single posts.
 *
 * @package WordPress
 * @subpackage classiads
 * @since classiads 1.2.2
 */
?>



<?php


	//Template
	wp_enqueue_style( 'bootstrap3-style', get_template_directory_uri() . '/css/bootstrap3.min.css', array(), '1.0.0' );
	
	wp_enqueue_style( 'select-style', get_template_directory_uri() . '/css/bootstrap-select.min.css', array(bootstrap3-style), '1.0.0' );

	wp_enqueue_style ( 'google-font-style', 'http://fonts.googleapis.com/css?family=Indie+Flower|Rock+Salt|Open+Sans+Condensed:300|Roboto|Great+Vibes|Oleo+Script', array (
	), '1.0.0' );
	
	//Template
	wp_enqueue_style( 'travel-style', get_template_directory_uri() . '/css/travel.css', array(), '1.0.0' );

	wp_enqueue_style( 'update-travel-style', get_stylesheet_directory_uri() . '/update-travel.css', array(), '1.0.0' );
	
	
	wp_enqueue_style( 'datepicker-style', get_template_directory_uri() . '/css/datepicker3.css', array(), '1.0.0' );
	
	wp_enqueue_style( 'fontawesome-style', get_template_directory_uri() . '/css/font-awesome.min.css', array(), '1.0.0' );
	
	wp_enqueue_style( 'button-style', get_template_directory_uri() . '/css/buttons.css', array(), '1.0.0' );
	
	//Template
	wp_enqueue_style( 'animate-style', get_stylesheet_directory_uri() . '/css/animate.min.css', array('bootstrap3-style'), '1.0.0' );
	
	
	//Template
	wp_enqueue_style( 'templatemo-style', get_template_directory_uri() . '/css/templatemo_style.css', array('bootstrap3-style'), '1.0.0' );
	
	//Template
	wp_enqueue_style( 'dynamik-style', get_template_directory_uri() . '/css/dynamik-min.css', array(), '1.0.0' );
	
	wp_enqueue_style( 'responsive-menu', get_template_directory_uri() . '/css/responsivemenu.css', array(), '1.0.0' );
	
	wp_enqueue_style( 'layout-style', get_template_directory_uri() . '/css/2-layout.css', array(), '1.0.0' );
	
	wp_enqueue_style( 'layout-style1', get_template_directory_uri() . '/css/167-layout.css', array(), '1.0.0' );
	
	wp_enqueue_style( 'layout-style2', get_template_directory_uri() . '/css/424-layout.css', array(), '1.0.0' );
	

	// Loads JavaScript file with functionality specific to classiads.
	wp_enqueue_script( 'bootstrap3-js', get_template_directory_uri() . '/js/bootstrap3.min.js', array( 'jquery' ), '2014-07-18', true );
	
	// Loads JavaScript file with functionality specific to classiads.
	wp_enqueue_script( 'waypoint-js', get_stylesheet_directory_uri() . '/js/jquery.waypoints.min.js', array( 'jquery' ), '2014-07-18', true );
	
	
	// Loads JavaScript file with functionality specific to classiads.
	wp_enqueue_script( 'select-js', get_template_directory_uri() . '/js/bootstrap-select.min.js', array( 'bootstrap3-js' ), '2014-07-18', true );
	
	
	
	// Loads JavaScript file with functionality specific to classiads.
	wp_enqueue_script( 'easing', get_template_directory_uri() . '/js/jquery.easing.1.3.js', array( 'jquery' ), '2014-07-18', true );
	
	// Loads JavaScript file with functionality specific to classiads.
	wp_enqueue_script( 'mobile-customized', get_template_directory_uri() . '/js/jquery.mobile.customized.min.js', array( 'jquery','easing' ), '2014-07-18', true );
	
	// Loads JavaScript file with functionality specific to classiads.
	wp_enqueue_script( 'unslider', get_template_directory_uri() . '/js/unslider.min.js', array( 'jquery' ), '2014-07-18', true );
	
	// Loads JavaScript file with functionality specific to classiads.
	wp_enqueue_script( 'singlePageNav', get_template_directory_uri() . '/js/jquery.singlePageNav.min.js', array( 'jquery' ), '2014-07-18', true );
	
	wp_enqueue_script( 'datepicker-script', get_template_directory_uri() . '/js/bootstrap-datepicker.js', array( 'jquery', 'bootstrap3-js' ), '2014-07-18', true );
	
	
	wp_enqueue_script( 'moment', get_template_directory_uri() . '/js/moment.min.js', array(), '2014-07-18', true );
	
	
	// Loads JavaScript file with functionality specific to classiads.
	wp_enqueue_script( 'templatemo_scrip', get_template_directory_uri() . '/js/templatemo_script.js', array( 'jquery', 'bootstrap3-js','mobile-customized'), '2014-07-18', true );
	
	wp_enqueue_script( 'superfish', get_template_directory_uri() . '/js/superfish.js', array( 'jquery'), '2014-07-18', true );
	
	wp_enqueue_script( 'superfish.args', get_template_directory_uri() . '/js/superfish.args.js', array( 'jquery'), '2014-07-18', true );
	
	wp_enqueue_script( 'jquery.bxslider.min', get_template_directory_uri() . '/js/jquery.bxslider.min.js', array( 'jquery'), '2014-07-18', true );
	
	
	wp_enqueue_script( 'jquery.imagesloaded', get_template_directory_uri() . '/js/jquery.imagesloaded.js', array( 'jquery', 'jquery.bxslider.min'), '2014-07-18', true );
	
	wp_enqueue_script( '2-layout', get_template_directory_uri() . '/js/2-layout.js', array( 'jquery', 'jquery.imagesloaded'), '2014-07-18', true );
	
	wp_enqueue_script( '424-layout', get_template_directory_uri() . '/js/424-layout.js', array( 'jquery', ), '2014-07-18', true );
	
	wp_enqueue_script( 'wpf7', get_template_directory_uri() . '/js/wpf7.js', array( 'jquery', ), '2014-07-18', true );	
	
	wp_enqueue_script( 'responsive-menu', get_template_directory_uri() . '/js/responsivemenu.js', array( 'jquery'), '2014-07-18', true );
	
	
	// load local script
	wp_register_script( 'custom_script', get_template_directory_uri() . '/js/custom.js', array( 'jquery'), '2014-07-18', true );
	
	wp_localize_script('custom_script', 'package_base_url', get_home_url( null, get_post_type_object( 'travel_package' )->rewrite['slug'] ));
	
	if(is_page_template("template-search.php")){
	
		wp_localize_script('custom_script', 'search_date', esc_attr($_GET['date']));
		wp_localize_script('custom_script', 'search_des', esc_attr($_GET['des']));
		wp_localize_script('custom_script', 'search_des_text', esc_attr($_GET['des-text']));
	
	}
	
	//wp_localize_script('custom_script', 'package_arr', get_all_packages_meta());
	wp_enqueue_script( 'custom_script' );
	
	
?> 

<?php

if(isset($_POST['submit']) && isset($_POST['package']) && isset($_POST['post_nonce_field']) && wp_verify_nonce($_POST['post_nonce_field'], 'post_nonce') && isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])) {
	//your site secret key
	$recaptcha_secret = '6LfqMhcUAAAAAGIjJQOquqnXKLJA45raOkBU6EQF';
	//get verify response data
	$verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$recaptcha_secret.'&response='.$_POST['g-recaptcha-response']);
	$responseData = json_decode($verifyResponse);
	if($responseData->success){
		
		$is_honeymoon = false;
		$is_flight = false;
		$is_newsletter = false;
		$is_honeymoon_human = "no";
		$is_flight_human = "no";
		$is_newsletter_human = "no";
		
		$post_honeymoon = esc_attr(strip_tags($_POST['honeymoon']));
		$post_flight = esc_attr(strip_tags($_POST['flight']));
		$post_date_depart = esc_attr(strip_tags($_POST['date-depart']));
		
		$post_contact_method = esc_attr(strip_tags($_POST['contact-method']));
		$post_number_of_nights = esc_attr(strip_tags($_POST['number-of-nights']));
		$post_spend= esc_attr(strip_tags($_POST['spend']));
		$post_time_to_call = esc_attr(strip_tags($_POST['time-to-call']));
		$post_travel_occasion = esc_attr(strip_tags($_POST['travel-occasion']));
		
		$post_newsletter = esc_attr(strip_tags($_POST['newsletter']));
		
		if(!empty($post_honeymoon)) {
			$is_honeymoon = true;
			$is_honeymoon_human = "yes";
		}
		
		if(!empty($post_flight)) {
			$is_flight = true;
			$is_flight_human = "yes";
		}
		
		if(!empty($post_newsletter)) {
			$is_newsletter = true;
			$is_newsletter_human = "yes";
		}
		
		if(!empty($post_date_depart)) {
		
			$date_depart_timestamp = strtotime($post_date_depart);
		
			if(empty($date_depart_timestamp)){
				exit;
			}
			$departure_date = date('Y-m-d', $date_depart_timestamp);
		}
		
		$current_date = date('Y-m-d', current_time( 'timestamp'));
		
		$enquiry_category = esc_attr(strip_tags($_POST['submit']));
		
		$enquiry_information = array(
				'first_name' => esc_attr(strip_tags($_POST['first-name'])),
				'last_name' => esc_attr(strip_tags($_POST['last-name'])),
				'city_depart' => esc_attr(strip_tags($_POST['city-depart'])),
				'departure_date' => $departure_date,
				'email'    => esc_attr(strip_tags($_POST['email'])),
				'phone' => esc_attr(strip_tags($_POST['phone'])),
				'package' => esc_attr(strip_tags($_POST['package'])),
				'promo_code' => esc_attr(strip_tags($_POST['promo-code'])),
				'honeymoon' => $is_honeymoon,
				'flight' => $is_flight,
				'message' => esc_attr(strip_tags($_POST['message'])),
				'category' => $enquiry_category,
				'enquiry_date' => $current_date,
				'contact_method' => $post_contact_method,
				'number_of_nights' => $post_number_of_nights,
				'spend' => $post_spend,
				'time_to_call' => $post_time_to_call,
				'travel_occasion' => $post_travel_occasion,
		
		);
		
		
		// insert listing meta for each listing post in separate table
		$wpdb->insert ( $wpdb->prefix . 'travel_enquiry_booking', array (
				'First Name' => $enquiry_information["first_name"],
				'Last Name' => $enquiry_information["last_name"],
				'City Depart' => $enquiry_information["city_depart"],
				'Departure Date' => $enquiry_information["departure_date"],
				'Email' => $enquiry_information["email"],
				//'Region' => $obj->region,
				'Phone' => $enquiry_information["phone"],
				'Package' => $enquiry_information["package"],
				'Promo Code' => $enquiry_information["promo_code"],
				'Honeymoon' => $enquiry_information["honeymoon"],
				'Flight' => $enquiry_information["flight"],
				'Message' => $enquiry_information["message"],
				'category' => $enquiry_information["category"],
				'Enquiry Date' => $enquiry_information["enquiry_date"],
		)
				);
		
		$multiple_to_recipients = array(
				'sales@overwaterbungalows.com.au',
				'chengxianga2008@yahoo.com',
		
		);
		
		$content_here = <<<DOC
  First Name: {$enquiry_information["first_name"]}
  Last Name: {$enquiry_information["last_name"]}
  Arrival Date: {$enquiry_information["departure_date"]}
  Email: {$enquiry_information["email"]}
  Phone: {$enquiry_information["phone"]}
  Contact me via: {$enquiry_information["contact_method"]}
  Best time to call: {$enquiry_information["time_to_call"]}
  Package: {$enquiry_information["package"]}
  Promo Code: {$enquiry_information["promo_code"]}
  Number of nights stay: {$enquiry_information["number_of_nights"]}
  Maximum Spend AUD $: {$enquiry_information["spend"]}
  Travel Occasion: {$enquiry_information["travel_occasion"]}
  Deals subscription checked: $is_newsletter_human
  Message:
-------------------------
		
{$enquiry_information["message"]}
		
-------------------------
  Category: {$enquiry_information["category"]}
DOC;
		
		$mail_subject = ucwords($enquiry_category)." - Package: ".$enquiry_information["package"]." - Date: ".$current_date;
		
		wp_mail($multiple_to_recipients, $mail_subject, $content_here);
		
		$contact_message = $enquiry_category;
		
		
		// Mailchimp Add Subscriber part
		
		if($is_newsletter){
		
			include_once 'Drewm/MailChimp.php';
		
			$MailChimp = new \Drewm\MailChimp('b54b29c0661fc003f612c8a1526ad5b5-us10');
			$result = $MailChimp->call('lists/subscribe', array(
					'id'                => '0d54271254',
					'email'             => array('email'=> $enquiry_information["email"] ),
					'merge_vars'        => array('FNAME'=>$enquiry_information["first_name"], 'LNAME'=>$enquiry_information["last_name"],'CITYDEPART'=>$enquiry_information["city_depart"]),
					'double_optin'      => false,
					'update_existing'   => true,
					'replace_interests' => false,
					'send_welcome'      => false,
			));
		}
		
		
	}
			//wp_redirect( home_url() ); exit;

}

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
    <title>Tahiti Holidays</title>

    <meta name="description" content="We want your honeymoon, anniversary or holiday to be remembered and talked about for a long time, so let us share in your joy and you won’t be disappointed. " />
    <meta name="author" content="World Travel Group">
    <meta name="contact" content="reservations@worldtravelgroup.com.au" />
    <meta name="copyright" content="Copyright (c)2015 World Travel Group. All Rights Reserved." />
<!--     <meta name="keywords" content="world, travel, honeymoon, love, package, cheap, deal" /> -->
    <!-- Favicon-->
    
   <!-- //// <link rel="shortcut icon" href="<?php echo get_template_directory_uri();?>/images/icon/favicon.ico" type="" /> -->
<style>


</style>
    <?php wp_head(); ?>
    
<!--     <script src='https://www.google.com/recaptcha/api.js' async></script> -->
    
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>
  <body class="travel-style page-template-default page fl-builder full-width-content windows chrome feature-top-outside site-fluid override fl-builder-page-builder gd-full-width responsive-menu-slide-left">

	<div class="site-header-top">
		<div class="wrap">
			<div id="header_top_left"
				class="widget-area dynamik-widget-area header-top">
				<section id="text-7"
					class="widget-odd widget-last widget-first widget-1 widget widget_text">
					<div class="widget-wrap">
						<div class="textwidget">
							<p>
								<a href="reservations@tahitirooms.com"
									class="header-top-email">reservations@tahitirooms.com</a>
							</p>
						</div>
					</div>
				</section>
			</div>
			<div id="header_top_right"
				class="widget-area dynamik-widget-area header-top">
				<section id="text-6"
					class="widget-odd widget-last widget-first widget-1 widget widget_text">
					<div class="widget-wrap">
						<div class="textwidget">
							<p>
								Speak to an Agent (Mon – Sat 9 AM – 5:30 PM) <a
									class="header-top-phone" href="tel:1300256067">1300<span
									class="blue">.</span>241<span class="blue">.</span>745
								</a> <i class="fa fa-user"
									style="color: #00afef; padding-left: 20px;" aria-hidden="true"></i>
								<a style="color: #00afef;"
									href="https://overwaterbungalows.reslogic.com/?pl=6&amp;screen=scnlogonta"
									target="_blank" rel="nofollow noopener">Travel Agent Login</a>
							</p>
						</div>
					</div>
				</section>
			</div>
		</div>
	</div>



	<header class="site-header" itemscope=""
		itemtype="https://schema.org/WPHeader">
		<div class="wrap">
			<div class="title-area">
				<p class="site-title" itemprop="headline">
					<a href="<?php echo get_home_url();?>"
						title="Tahiti Holidays"><img style="height: 64px;"
						src="<?php bloginfo('template_url'); ?>/images/logo.png"
						alt="Tahiti Holidays"></a>
				</p>
			</div>
			<div class="widget-area header-widget-area">
				<section id="nav_menu-2"
					class="widget-odd widget-last widget-first widget-1 widget widget_nav_menu">
					<div class="widget-wrap">
						<nav class="nav-header" itemscope=""
							itemtype="https://schema.org/SiteNavigationElement">
							<ul id="menu-header-menu"
								class="menu genesis-nav-menu js-superfish "
								style="touch-action: pan-y;">
								<li id="menu-item-180"
									class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-2 current_page_item menu-item-180"><a
									href="<?php echo get_home_url();?>" itemprop="url"><span
										itemprop="name">Home</span></a></li>
								<li id="menu-item-178"
									class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-178"><a
									href="javascript:;"
									itemprop="url" class="sf-with-ul"><span itemprop="name">Packages</span></a>
									<ul class="sub-menu" style="display: none;">
										 <?php
											
											$tahiti = get_term_by('slug', 'tahiti', 'package_taxonomy');
											
											$term_args = array (
													'hide_empty'=>true,
													'parent'=> $tahiti->term_id, 
											);
											
											$terms = get_terms ( 'package_taxonomy', $term_args );
											foreach ( $terms as $term ) {
												?>
											<li 
											class="menu-item menu-item-type-taxonomy menu-item-object-category"><a
											href="<?php echo get_term_link( $term->slug, "package_taxonomy" );?>"
											itemprop="url"><span itemprop="name"><?php echo $term->name; ?></span></a></li>

										<?php
											}
											?>
									
									
										
									</ul></li>
								<li id="menu-item-177"
									class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-177"><a
									href="<?php echo get_home_url(null, 'travel-guide');?>"
									itemprop="url" class="sf-with-ul"><span itemprop="name">Travel
											Guide</span></a>
							    </li>
								<li id="menu-item-179"
									class="menu-item menu-item-type-post_type menu-item-object-page menu-item-179"><a
									href="https://overwaterbungalows.com.au/blog/" itemprop="url"><span
										itemprop="name">Blog</span></a></li>
								<li id="menu-item-383"
									class="menu-item menu-item-type-post_type menu-item-object-page menu-item-383"
									style="cursor: pointer;"><a href="#" data-toggle="modal" data-target="#enquiryModal" data-package_quote="general" itemprop="url"><span
										itemprop="name">Get A Quote</span></a></li>
								<li id="menu-item-175"
									class="menu-item menu-item-type-post_type menu-item-object-page menu-item-175"><a
									href="<?php echo get_home_url(null, 'about-us'); ?>"
									itemprop="url"><span itemprop="name">About Us</span></a></li>
							</ul>
						</nav>
					</div>
				</section>
			</div>
		</div>
	</header>


	<!--
 <div id="templatemo_banner_logo" class="container_wapper">
        <div class="container">
            <div class="row">
                <div class="visible-lg visible-md center-block logo-group-block">
                    <a href="<?php echo get_home_url();?>"><img src="http://0a7.47f.myftpupload.com/wp-content/uploads/2015/06/WTGLogo-Large1.jpg" alt="logo"/></a>
                    
                </div>
                <div class="visible-xs visible-sm center-block logo-group-block">
                    <img src="http://0a7.47f.myftpupload.com/wp-content/uploads/2015/06/WTGLogo-Large1.jpg" alt="logo"/>
                    
                </div>
                
            </div>
        </div>
  </div>
  -->
   <div class="container banner-fixed-offset">
   <?php

    if(!empty($contact_message)){
    	if($contact_message == "enquiry"){
	        echo do_shortcode('[notification_box]Thank you, your enquiry has been received. One of our consultants will be in touch shortly to answer your questions.[/notification_box]');
    	}
    	else if($contact_message == "booking"){
    		echo do_shortcode('[notification_box]Thank you, your booking request has been received. You will be contacted by our booking agent shortly to confirm your booking.[/notification_box]');
    	}
    	else{
    		echo do_shortcode('[notification_box]Your submission is invalid, please check all fields re-submit.[/notification_box]');
    		 
    	}
    }
   ?>
   </div>
    
   <section class="ads-main-page">

    	<div class="container">

	    	<div class="full" style="padding: 0 0;">

				<div class="ad-detail-content">

	    			