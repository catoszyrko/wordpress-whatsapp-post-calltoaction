<?php 
/**
 * Plugin Name: Whatsapp Call to Action Button
 * Description: Just add shortcode with phone & cta vars and magic will happens!
 * Version: 1.0.0
 * Author: Yamil Szyrko
 */

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
        ";
	
	$phone = str_replace("+","",$atts['phone']);
	$cta = $atts['cta'];

	return '<div class="responsiveContent">
				<a target="blank" href="https://api.whatsapp.com/send?phone='.$phone.'" style="'.$styles.'">'.$cta.'</a>
			</div>';
});
?>