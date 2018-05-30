<?php

add_shortcode( 'row', 'zorbix_row' );
function zorbix_row( $set_atts, $content = null ) {

	$atts = array(
		'margin_bottom' => '',
		'class'         => ''
	);

	$atts = zorbix_sc::shortcode_atts( $atts, $set_atts, 'row' );

	return sprintf(
		'<div class="row %s" %s>%s</div>',
		$atts['class'],
		zorbix_sc::get_format_style_esc( 'margin-bottom', $atts['margin_bottom'] ),
		do_shortcode( $content )
	);

}