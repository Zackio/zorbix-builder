<?php

# Map
$zorbix_map_name = zorbix_builder::add_map( array(
	'name'            => esc_html__( 'Text', 'pixo' ),
	'base'            => 'text',
	'category'        => esc_html__( 'Zorbix', 'pixo' ),
	'icon'            => 'fa fa-align-justify',
	"as_parent"       => array( 'except' => '' ),
	'content_element' => true,
	'params'          => array(
		array(
			'type'       => 'editor',
			'holder'     => 'h1',
			'heading'    => esc_html__( 'Content', 'pixo' ),
			'param_name' => 'content',
		),

		array(
			'type'       => 'textfield',
			'holder'     => 'div',
			'heading'    => esc_html__( 'Class', 'pixo' ),
			'param_name' => 'class',
		),

	)
),
	array( 'animation', 'makewhite', 'image', 'icon' )
);

zorbix_builder::add_to_map($zorbix_map_name, zorbix_maps::margin());
zorbix_builder::add_to_map($zorbix_map_name, zorbix_maps::padding());
