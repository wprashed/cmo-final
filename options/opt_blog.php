<?php

Redux::setSection('cmo', array(
    'title'     => esc_html__('Blog Page', 'cmo'),
    'id'        => 'blog_page',
    'icon'      => 'dashicons dashicons-admin-post',
    'fields'    => array(
        array(
                'id'       => 'cmo-blog-layout-option',
                'type'     => 'image_select',
                'title'    => esc_html__( 'Blog Layout Option', 'cmo' ),
                //Must provide key => value(array:title|img) pairs for radio options
                'options'  => array(
                    '1' => array(
                        'alt' => '1 Column',
                        'img' => get_template_directory_uri() . '/assets/images/backend/grid.png'
                    ),
                    '2' => array(
                        'alt' => '2 Column Left',
                        'img' => get_template_directory_uri() . '/assets/images/backend/single-column.jpg'
                    ),
                    
                ),
                'default'  => '2'
            ),
    )
));

