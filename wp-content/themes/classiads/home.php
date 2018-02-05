<?php

/**

 * The Template for displaying home page.

 *

 * @package WordPress

 * @subpackage classiads

 * @since classiads 1.2.2

 */

?>



<?php include_once "template-travel-header.php";?>



<?php

echo do_shortcode('[layerslider id="291"]');

?>
 

  <div id="templatemo_Search_Box" class="">
    
            <div class="row">

                <div class="col-md-12 col-sm-12 col-xs-12 header-p right">


                  <div class="row">
<div class="prosenjitdiv">  


					<div class="plan-trip-dropdown btn-group">
                                                 
                          
                           <a href="javascript:;" class="button button--nanuk button--border-thin button--round-s getquote_anchor quote buton_custom button_effect dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
							<span>P</span><span>l</span><span>a</span><span>n</span><span>&nbsp;</span>
							<span>y</span><span>o</span><span>u</span><span>r</span><span>&nbsp;</span>
							<span>t</span><span>r</span><span>i</span><span>p</span>
						   </a>
                           
         
                           <ul class="trip dropdown-menu">
                                <li><a href="http://holidays.tahitiholiday.com/?pl=3">Holiday</a></li>
                                <li><a href="http://honeymoon.tahitiholiday.com/?pl=4">Honeymoon</a></li>
                           </ul>
                                                 
                        </div>
<!--                      <a id="SliderPackagesbtn" class="getquote_anchor quote buton_custom" href="#package_text_anchor">Packages</a> -->
                    </div>
<!--                    <div class="visible-lg visible-md frame4" ><center><iframe id="wtg" width="970" scrolling="No" height="80" frameborder="0" z-index:0="" style="padding:0px;"    src="http://worldtravelgroup.reslogic.com/?pl=555&tpl=TQW_IFRAME&iframe"></iframe></center></div> 
                  
                    <div class="visible-sm visible-xs frame4" ><center><iframe id="wtg" width="360" scrolling="No" height="290" frameborder="0" z-index:0="" style="padding:0px;"    src="http://worldtravelgroup.reslogic.com/?pl=555&tpl=TQW_IFRAME&iframe"></iframe></center></div> -->
                    
      <!--          <div class="col-lg-12 col-md-12">

                                     <form action="<?php echo get_home_url(null,"package-search"); ?>" method="get">                 

                        <div class="col-md-5 remove-right-padding">

                          <input class="date-input-top" placeholder="Departure Date" data-provide="datepicker" data-date-format="yyyy-mm-dd" data-date-start-date="-1d" name="date" type="text">

                          <input id="des-hidden" name="des" type="hidden">

                          <input id="des-text-hidden" name="des-text" type="hidden">

                        </div>

                        <div class="col-md-5 dropdown remove-right-padding">

                        <button class="btn btn-default dropdown-toggle" id="package_dropdown" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >

                           Destination

                           <span class="caret"></span>

                        </button>

                        <ul id="package_list" class="dropdown-menu" role="menu" aria-labelledby="package_dropdown">

                         

   		    			  <?php 

   		    			  $term_args = array( 'hide_empty=0' );

   					  

   		    			  $terms = get_terms( 'package_taxonomy', $term_args );

   		    			  foreach ( $terms as $term ) {

   		    			  ?>

   	    				  <li role="presentation">

     					  	  <a role="menuitem" tabindex="-1" href="#" data-slug="<?php echo $term->slug; ?>" ><?php echo $term->name; ?></a>

   		    			  </li>

   					  	

   					      <?php

   				    	  }

   				    	  ?>

 					    

 					    </ul>

                        </div>

                        <div class="visible-lg col-lg-1">

                      

                          <button id="package_search_submit1" type="submit" value="Search">

						    <i class="fa fa-search"></i>

					      </button>

                     

                        </div>

                        

                        <div class="visible-md col-md-1">

                      

                          <button id="package_search_submit2" type="submit" value="Search">

						    <i class="fa fa-search"></i>

					      </button>

                     

                        </div>

                        

 					  </form> 

              				  </div> -->   

                </div>

            </div>

        </div>

</div>

<div id="package_wrap" class="wrap">
<a name="CustomPackagesData"></a>
<h3 id="package_text_anchor" class="home-travel-h3">Travel Packages</h3>

<div class="box">

<div class="boxInner"><a href="<?php echo get_term_link( "papeete", "package_taxonomy" );?>"><img src="<?php echo get_home_url(null,"/wp-content/uploads/2015/09/papeete.jpg"); ?>" alt="" /></a>

<div class="titleBox">MORE INFO</div>

</div>

</div>

<div class="box">

<div class="boxInner"><a href="<?php echo get_term_link( "bora-bora", "package_taxonomy" );?>"><img src="<?php echo get_home_url(null,"/wp-content/uploads/2015/09/bora.jpg"); ?>" alt="" /></a>

<div class="titleBox">MORE INFO</div>

</div>

</div>

<div class="box">

<div class="boxInner"><a href="<?php echo get_term_link( "moorea", "package_taxonomy" );?>"><img src="<?php echo get_home_url(null,"/wp-content/uploads/2015/09/moorea.jpg"); ?>" alt="" /></a>

<div class="titleBox">MORE INFO</div>

</div>

</div>

<div class="box">


<div class="boxInner"><a href="<?php echo get_term_link( "raiatea-tahaa", "package_taxonomy" );?>"><img src="<?php echo get_home_url(null,"/wp-content/uploads/2015/10/Raiatea-taha-.jpg"); ?>" alt="" /></a>

<div class="titleBox">MORE INFO</div>

</div>

</div>

<div class="box">

<div class="boxInner"><a href="<?php echo get_term_link( "tikehau", "package_taxonomy" );?>"><img src="<?php echo get_home_url(null,"/wp-content/uploads/2015/10/tikehau-.jpg"); ?>" alt="" /></a>

<div class="titleBox">MORE INFO</div>

</div>

</div>

<div class="box">

<div class="boxInner"><a href="<?php echo get_term_link( "huahine", "package_taxonomy" );?>"><img src="<?php echo get_home_url(null,"/wp-content/uploads/2015/09/huahine.jpg"); ?>" alt="" /></a>

<div class="titleBox">MORE INFO</div>

</div>

</div>

<div class="box">

<div class="boxInner"><a href="<?php echo get_term_link( "rangiroa", "package_taxonomy" );?>"><img src="<?php echo get_home_url(null,"/wp-content/uploads/2015/09/rangiroa.jpg"); ?>" alt="" /></a>

<div class="titleBox">MORE INFO</div>

</div>

</div>

<div class="box">

<div class="boxInner"><a href="<?php echo get_term_link( "tetiaroa", "package_taxonomy" );?>"><img src="<?php echo get_home_url(null,"/wp-content/uploads/2015/09/Tetiaroa.jpg"); ?>" alt="" /></a>

<div class="titleBox">MORE INFO</div>

</div>

</div>



</div>


<style>
.prosenjitdiv a {
    color: #fff;
    background-color: #0086ac !important;
    font-family:arial;
}
.prosenjitdiv {
    display: block;
    padding-top: 59px;
    text-align: center;
}
</style>




<?php include_once "template-travel-footer.php";?>
