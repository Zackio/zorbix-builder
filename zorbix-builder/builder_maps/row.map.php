<?php

$pixo_map = array(
	'name'     => esc_html__( 'Row', 'pixo' ),
	'base'     => 'row',
	'category' => esc_html__( 'Zorbix', 'pixo' ),
	'icon'     => 'fa fa-bars',
	'params'   => array(

		array(
			'type'       => 'textfield',
			'holder'     => 'div',
			'heading'    => esc_html__( 'Add class', 'pixo' ),
			'param_name' => 'class', // No dashes!
		),

		array(
			'type'       => 'textfield',
			'holder'     => 'div',
			'heading'    => esc_html__( 'Add ID', 'pixo' ),
			'param_name' => 'id', // No dashes!
		),

	)
);

zorbix_builder::add_map( $pixo_map );
