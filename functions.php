<?php

add_action('wp_print_styles', 'digressit_default_stylesheets', 100);
add_action('init', 'digressit_default_lightboxes', 100);


function digressit_default_stylesheets(){
	wp_register_style('digressit.default', get_template_directory_uri()."/style.css");
	wp_enqueue_style('digressit.default');
}

function digressit_default_lightboxes(){
	add_action('add_lightbox', 'lightbox_login');
	add_action('add_lightbox', 'lightbox_register');
	add_action('add_lightbox', 'lightbox_site_register');
	add_action('add_lightbox', 'lightbox_registering');
	add_action('add_lightbox', 'lightbox_generic_response');
}

remove_action('add_header_image', 'custom_digressit_logo');

if(esc_url($options['custom_header_image'], array('http', 'https'))){
	add_action('add_header_image', 'k12nn_digressit_logo');
}


function k12nn_digressit_logo(){
	$options = get_option('digressit');

	$css_name = preg_replace("/[^a-zA-Z]/", "", get_bloginfo('name'));
	?>
	<style>

	#<?php echo $css_name; ?>-logo{
		background: url(<?php echo $options['custom_header_image']; ?>) no-repeat;
		height: 100px;
	}
	</style>
	<div id="<?php echo $css_name; ?>-logo">
	<a href="http://www.k12newsnetwork.com/" class="left-header"></a>	
	<a href="http://k12newsnetwork.com/elementary-and-secondary-education-act/" class="right-header"></a>	
	</div>
	<?php
}