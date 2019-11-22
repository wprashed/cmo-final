<?php

// Color option
Redux::setSection('cmo', array(
	'title'     => esc_html__('Color Settings', 'cmo'),
	'id'        => 'color',
	'icon'      => 'dashicons dashicons-admin-appearance',
	'fields'    => array(
        array(
            'id'          => 'background_solid_color',
            'type'        => 'color',
            'title'       => esc_html__( 'Background Color', 'cmo' ),
            'output'      => array(
                'color' => '',
                'background-color' => '',
                'border-color' => '',
            ),
            'default'  => '#fff',
        ),
        array(
            'id'          => 'text_solid_color',
            'type'        => 'color',
            'title'       => esc_html__( 'Color', 'cmo' ),
            'output'      => array(
                'color' => '',
                'background-color' => '',
                'border-color' => '',
            ),
            'default'  => '#8f9bb5',
        ),
	)
));