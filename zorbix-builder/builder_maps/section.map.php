<?php

$zorbix_params = array(

	// ID
	array(
		'type'        => 'textfield',
		'holder'      => 'div',
		'heading'     => esc_html__('ID', 'pixo'),
		'param_name'  => 'id', // No dashes!
		'description' => esc_html__("Tag ID - don't include hash. Disabled when YouTube background enabled", 'pixo'),
		'value'       => '', // Default
	),

	// Class
	array(
		'type'        => 'textfield',
		'holder'      => 'div',
		'heading'     => esc_html__('Class', 'pixo'),
		'param_name'  => 'class', // No dashes!
		'description' => esc_html__("Add a class to the section. Can add multiple separated by spaces. Don't include the dot", 'pixo'),
		'value'       => '', // Default
	),

);

$zorbix_map_name = zorbix_builder::add_map(array(
	'name'     => esc_html__('Section', 'pixo'),
	'base'     => 'section',
	'category' => esc_html__('Zorbix', 'pixo'),
	'icon'     => 'fa fa-square-o',
	'params'   => $zorbix_params,
));

zorbix_builder::add_to_map($zorbix_map_name, zorbix_maps::margin());
zorbix_builder::add_to_map($zorbix_map_name, zorbix_maps::padding());
