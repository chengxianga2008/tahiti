<?php
/**
 * Template name: Feedback
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage classiads
 * @since classiads 1.2.2
 */

if(isset($_POST['_wpcf7_unit_tag']) && $_POST['_wpcf7_unit_tag'] == 'wpcf7-f157-p2-o1' ) {
	
	$multiple_to_recipients = array (
			'reservations@tahitirooms.com',
			'chengxianga2002@gmail.com' 
	);
	
	$content_here = <<<DOC
  Subscription Email: {$enquiry_information["first_name"]}
DOC;
	
	wp_mail ( $multiple_to_recipients, 'new subscription', $content_here );
			
	echo json_encode(array("into" => "#wpcf7-f157-p2-o1", 
			"message" => "Thank you for your message. It has been sent.",
			"status" => "mail_sent"));
}

exit;

?>
