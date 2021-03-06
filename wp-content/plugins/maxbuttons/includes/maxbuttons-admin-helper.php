<?php 

/* Helper class for uniform elements in admin pages */ 

add_action('mb-display-logo', array('maxAdmin','logo')); 
add_action('mb-display-title', array("maxAdmin",'rate_us'), 20); 
add_action('mb-display-tabs', array('maxAdmin','tab_menu')); 
add_action('mb-display-ads', array('maxAdmin', 'display_ads')); 
add_action('mb-display-pagination', array('maxAdmin', 'display_pagination'));
//add_action('mb-display-review-notice', array('maxAdmin', 'mb_review_notice')); 


class maxAdmin 
{
	protected static $tabs = null;
					
		
	public static function logo()
	{
	?> 
			<?php _e('Brought to you by', 'maxbuttons') ?>
			<a href="http://maxfoundry.com/products/?ref=mbfree" target="_blank"><img src="<?php echo MB()->get_plugin_url() ?>/images/max-foundry.png" alt="Max Foundry" /></a>
			<?php printf(__('Upgrade to MaxButtons Pro today! %sClick Here%s', 'maxbuttons'), '<a href="http://www.maxbuttons.com/pricing/?utm_source=mbf-dashboard&utm_medium=mbf-plugin&utm_content=mpb-list-sidebar-21&utm_campaign=inthecart19" target="_blank">', '</a>' ) ?>
	<?php
	}
	
	static function tab_items_init()
	{
			self::$tabs = array(
						"list" => array("name" =>  __('Buttons', 'maxbuttons'), 
										 "link" => "page=maxbuttons-controller&action=list",
										 "active" => "maxbuttons-controller", ), 
					/*	"group" => array("name" => __("Groups", "maxbuttons"), 
										 "link" => "page=maxbuttons-controller&action=groups", 
										 "active" => "maxbuttons-groups", ),  */
						"pro" => array( "name" => __('Upgrade to Pro', 'maxbuttons'),
										 "link" => "page=maxbuttons-pro",
										 "active" => "maxbuttons-pro",
										 ),
						"settings" => array("name" => __('Settings', 'maxbuttons'),
										 "link" => "page=maxbuttons-settings",
										 "active" => "maxbuttons-settings",
										 "userlevel" => 'manage_options'  ), 
						"support" => array("name" => __('Support', 'maxbuttons'), 
										 "link" => "page=maxbuttons-support",
										 "active" => "maxbuttons-support",
										 "userlevel" => 'manage_options'
										 )
			); 
	}
	
	public static function tab_menu()
	{
		 self::tab_items_init(); 
	?>
			<h2 class="tabs">
				<span class="spacer"></span>
		<?php foreach (self::$tabs as $tab => $tabdata) { 
			if (isset($tabdata["userlevel"]) && ! current_user_can($tabdata["userlevel"]))
				continue; 

			$link = admin_url() . "admin.php?" . $tabdata["link"]; 
			$name = $tabdata["name"];
			$active = ''; 
			if ($tabdata["active"] == $_GET["page"])
				$active = "nav-tab-active";
				
				echo "<a class='nav-tab $active' href='$link'>$name</a>"; 

		}
		echo "</h2>";	
	}
	
	public static function display_ads()
	{ ?>
        <div class="ads">
            <h3><?php _e('Get MaxButtons Pro', 'maxbuttons'); ?></h3>
 
 
            <ul>
            <?php // Thought. Is below needed for translation? Since it changes quite often ?>
                <li><?php _e('Two Lines of Editable Text', 'maxbuttons'); ?></li>
                <li><?php _e('Pre-Made Button Packs', 'maxbuttons'); ?></li>            
                <li><?php _e("Google Analytics Event Tracking","maxbuttons"); ?></li>           	
            	<li><?php _e("Button Search","maxbuttons"); ?></li>
                <li><?php _e('Responsive Buttons', 'maxbuttons'); ?></li> 
                <li><?php _e('Add An Icon To Your Buttons', 'maxbuttons'); ?></li>
                <li><?php _e('Google Fonts', 'maxbuttons'); ?></li>
				<li><?php _e('Font Awesome Icons', 'maxbuttons'); ?></li>
                <li><?php _e('Terrific Support', 'maxbuttons'); ?></li>
 

            </ul>
            <a class="button-primary" href="http://www.maxbuttons.com/pricing/?utm_source=mbf-dashboard&utm_medium=mbf-plugin&utm_content=mpb-list-sidebar-21&utm_campaign=inthecart19" target="_blank" ><?php _e('Buy MaxButtons Pro', 'maxbuttons'); ?></a>
        </div>
        
        <div class="ads"> 
        	<h3><?php _e("Everything for $99","maxbuttons"); ?></h3>
        	<p>Get a copy of MaxButtons Pro and all of our WordPress Button Packs including over 4,000 Professionally Designed, Production Ready WordPress Buttons in 190 sets.  </p>
            <a class="button-primary" href="http://www.maxbuttons.com/pricing/?utm_source=mbf-dashboard&utm_medium=mbf-plugin&utm_content=EBWG-sidebar-22&utm_campaign=inthecart60" target="_blank"><?php _e('Get Everything Now!', 'maxbuttons'); ?></a>        	
        </div>
        
        <div class="ads">
            <h3><?php _e('Get MaxGalleria', 'maxbuttons'); ?></h3>
            <p><?php _e('Download our free WordPress Gallery plugin MaxGalleria!  Add-ons for Albums, Videos, and Image Sliders.', 'maxbuttons'); ?></p>
            <a class="button-primary" href="https://wordpress.org/plugins/maxgalleria/?utm_source=mbf-dashboard&utm_medium=mbf_plugin&utm_content=MG_sidebar&utm_campaign=MG_promote" target="_blank"><?php _e('Get MaxGalleria Now!', 'maxbuttons'); ?></a>
        </div>
        
   <!--     <div class="ads">
            <h3><i class="fa fa-cogs"></i> <?php _e('Font Awesome Support', 'maxbuttons'); ?></h3>
            <p><?php _e('With MaxButtons Pro you have access to all 439 Font Awesome icons, ready to add to your buttons.', 'maxbuttons'); ?></p>
            <p><?php _e('Never upload another icon again, just choose an icon and go about your normal button-making business.', 'maxbuttons'); ?></p>
            <a class="button-primary" href="http://www.maxbuttons.com/pricing/?utm_source=wordpress&utm_medium=mbrepo&utm_content=button-list-sidebar-99&utm_campaign=plugin"><?php _e('Use Font Awesome!', 'maxbuttons'); ?> <i class="fa fa-arrow-circle-right"></i></a>
        </div> -->
        <?php
	}
	
	public static function rate_us()
	{
		$output = ''; 
		
		$output .= "<div>"; 
		$output .= sprintf("Enjoying MaxButtons? Please %s rate us ! %s", 
			"<a href='https://wordpress.org/support/view/plugin-reviews/maxbuttons#postform'>", 
			"</a>"
			);
		$output .= "</div>"; 
		echo $output;
	}


	public static function display_pagination($page_args)
	{

		$mbadmin =  MB()->getClass("admin");  
		$pag = $mbadmin->getButtonPages($page_args); 
		if ($pag["first"] == $pag["last"])
		{	return; }

 
		extract($pag);
 
	?>

	<div class="tablenav-pages"><span class="displaying-num"><?php echo $pag["total"] ?> items</span>
	<span class="pagination-links">
	
	<?php if (! $first_url): ?>
	<a class="first-page disabled">«</a>
	<?php else: ?>
		<a href="<?php echo $first_url ?>" title="<?php _e("Go to the first page","maxbuttons") ?>" class="first-page <?php if (!$first_url) echo "disabled"; ?>">«</a>
	<?php endif;  ?>
	
	<?php if (! $prev_url): ?>
	<a class="prev-page disabled">‹</a>
	<?php else : ?> 
		<a href="<?php echo $prev_url ?>" title="<?php _e("Go to the previous page","maxbuttons"); ?>" class="prev-page <?php if (!$prev_url) echo "disabled"; ?>">‹</a>	
	<?php endif; ?> 
	
	<span class="paging-input"><input data-url="<?php echo $base ?>" class='input-paging' min="1" max="<?php echo $last ?>" type="number" name='paging-number' size="1" value="<?php echo $current ?>"> <?php _e("of","maxbuttons") ?> <span class="total-pages"><?php echo $last ?>
	</span></span>
	
	<?php if (! $next_url): ?>
		<a class="next-page disabled">›</a>
	<?php else: ?> 
		<a href="<?php echo $next_url ?>" title="<?php _e("Go to the next page","maxbuttons") ?>" class="next-page <?php if (!$next_url) echo "disabled"; ?>">›</a>	
	<?php endif; ?> 

	<?php if (! $last_url): ?>
	<a class="last-page disabled">»</a></span></div>
 	<?php else: ?>
 		<a href="<?php echo $last_url ?>" title="<?php _e("Go to the last page","maxbuttons") ?>" class="last-page <?php if (!$last_url) echo "disabled"; ?>">»</a></span></div>	
 	<?php endif; ?> 
 
 
	<?php
	}

    public static function mb_review_notice() {
	   if( current_user_can( 'manage_options' ) ) {  ?>
		  <div class="updated notice maxbuttons-notice">         
		      <div class='review-logo'></div>
		      <div class='mb-notice'>
		      	<p class='title'><?php _e("Rate us Please!","maxbuttons"); ?></p>
		     	<p><?php _e("Your rating is the simplest way to support MaxButtons. We really appreciate it!","maxbuttons"); ?></p>
		    
				  <ul class="review-notice-links">
				    <li> <span class="dashicons dashicons-smiley"></span><a data-action='off' href="javascript:void(0)"><?php _e("I've already left a review","maxbuttons"); ?></a></li>
				    <li><span class="dashicons dashicons-calendar-alt"></span><a data-action='later' href="javascript:void(0)"><?php _e("Maybe Later","maxbuttons"); ?></a></li>
				    <li><span class="dashicons dashicons-external"></span><a target="_blank" href="https://wordpress.org/support/view/plugin-reviews/maxbuttons?filter=5#postform"><?php _e("Sure! I'd love to!","maxbuttons"); ?></a></li>
				  </ul>
		      </div>
		      <a class="dashicons dashicons-dismiss close-mb-notice" href="javascript:void(0)" data-action='off'></a>
 
		  </div>
		<?php     
		}
	  }

} // class
?>
