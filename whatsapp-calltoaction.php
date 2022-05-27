<?php 
/**
 * Plugin Name: Whatsapp Call to Action Button
 * Description: Just add shortcode with phone & cta vars and magic will happens!
 * Version: 1.0.0
 * Author: Yamil Szyrko
 */

add_action('wp_enqueue_scripts', 'loadfontawesomecss', 999);

function loadfontawesomecss(){
	wp_register_style( 'fontawesomecss', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css");
	wp_enqueue_style( 'fontawesomecss');
}

add_shortcode( "wh-ca-btn", function($atts, $content){
	$styles = "
			display:block;
            width:100%;
			padding:10px;
            background-color: rgba(31, 174, 100);
            text-decoration:none;
            color:white;
            box-shadow:1px 1px 1px #333333;
			text-align:center;
			border-radius:10px;
        ";
	
	$phone = str_replace("+","",$atts['phone']);
	$cta = $atts['cta'];

	return '<div class="responsiveContent">
				<a target="blank" href="https://api.whatsapp.com/send?phone='.$phone.'" style="'.$styles.'"> <i class="fa fa-phone"></i> '.$cta.'</a>
			</div>';
});
?>