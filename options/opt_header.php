<?php

   Redux::setSection( $opt_name, array(
        'title'            => esc_html__( 'Header', 'cmo' ),
        'id'               => 'cmo_header',
        'desc'             => esc_html__( 'cmo header', 'cmo' ),
        'customizer_width' => '400px',
        'icon'             => 'el el-th-large'
    ) );

    Redux::setSection( $opt_name, array(
        'title'      => esc_html__( 'Header Layout', 'cmo' ),
        'id'         => 'cmo-select-image_select',
        'subsection' => true,
        'fields'     => array(

            array(
                'id'       => 'cmo-opt-image-select-layout',
                'type'     => 'image_select',
                'title'    => esc_html__( 'Header Layout Option', 'cmo' ),
                //Must provide key => value(array:title|img) pairs for radio options
                'options'  => array(
                    '1' => array(
                        'alt' => '1 Column',
                        'img' => ReduxFramework::$_url . 'assets/img/1col.png'
                    ),
                    '2' => array(
                        'alt' => '2 Column Left',
                        'img' => ReduxFramework::$_url . 'assets/img/2cl.png'
                    ),
                ),
                'default'  => '1'
            ),
            array(
                'id'       => 'cmo_switch-on_search',
                'type'     => 'switch',
                'title'    => esc_html__( 'Search Button', 'cmo' ),
                'default'  => true,
            ),
            array(
                'id'       => 'get_quote_button',
                'type'     => 'switch',
                'title'    => esc_html__( 'Get Quote Button Display', 'cmo' ),
                'default'  => true,
            ),
            array(
                'id'       => 'get_quote_name',
                'type'     => 'text',
                'title'    => esc_html__( 'Get Quote Button Name', 'cmo' ),
                'default'  => 'GET QUOTE',
            ),
            array(
                'id'       => 'get_quote_url',
                'type'     => 'text',
                'title'    => esc_html__( 'Get Quote Button Url', 'cmo' ),
                'default'  => '#',
            ),
            array(
                'id'       => 'get_language',
                'type'     => 'switch',
                'title'    => esc_html__( 'Language', 'cmo' ),
                'default'  => false,
            ),
            array(
                'id'       => 'get_language_scode',
                'type'     => 'text',
                'title'    => esc_html__( 'Language Shortcode', 'cmo' ),
                'default'  => '',
            ),
            array(
                'id'       => 'cmo_header_top_color',
                'type'     => 'color',
                'output'   => array( '.site-title' ),
                'title'    => esc_html__( 'Header Color', 'cmo' ),
                'default'  => '#000000',
            ),
            
        array(
            'id'       => 'cmo_header_home_image',
            'type'     => 'media',
            'url'      => true,
            'title'    => esc_html__( 'Header background image For Home Page', 'cmo' ),
            'compiler' => 'true',
            'desc'     => esc_html__( 'Header Image Size: 1920px X 950px..', 'cmo' ),
            'default'  => array( 'url' => '' ),
            //)
            ),
        array(
            'id'       => 'cmo_header_back_image',
            'type'     => 'media',
            'url'      => true,
            'title'    => esc_html__( 'Header background image', 'cmo' ),
            'compiler' => 'true',
            'desc'     => esc_html__( 'Header Image Size: 1920px X 558px..', 'cmo' ),
            'default'  => array( 'url' => '' ),
            //)
            ),
        )
    ) );