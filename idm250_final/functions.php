<?php

function learningWordPress_resources() {
	
	wp_enqueue_style('style', get_stylesheet_uri());
	
}
function my_login_logo_one() { 
?> 
<style type="text/css"> 
body.login div#login h1 a {
background-image: url(http://pngimage.net/wp-content/uploads/2018/06/mp-png.png);  //Add your own logo image in this url 
padding-bottom: 30px; 
} 
</style>
<?php 
} add_action( 'login_enqueue_scripts', 'my_login_logo_one' );

add_action('wp_enqueue_scripts', 'learningWordPress_resources');

// Navigation Menus
register_nav_menus(array(
	'primary' => __( 'Primary Menu'),
	'footer' => __( 'Footer Menu'),
));

