<?php
Redux::setSection( $opt_name, array(
        'title'            => esc_html__( 'General Settings', 'cmo' ),
        'id'               => 'opt_gen',
        'desc'             => esc_html__( 'gemeral setting!', 'cmo' ),
        'customizer_width' => '400px',
        'icon'             => 'dashicons dashicons-star-filled'
    ) );

    Redux::setSection( $opt_name, array(
        'title'      => esc_html__( 'Google Map', 'cmo' ),
        'id'         => 'cmo-google_map',
        'subsection' => true,
        'fields'     => array(

            array(
                'id'       => 'cmo_google_location',
                'type'     => 'text',
                'title'    => esc_html__( 'Google Map Shortcode', 'cmo' ),
                'subtitle'  => esc_html__('Enter your location google map Shortcode', 'cmo'),
            ),            
        )
    ) );
    Redux::setSection( $opt_name, array(
        'title'      => esc_html__( 'Contact Information', 'cmo' ),
        'id'         => 'cmo-contact_info',
        'subsection' => true,
        'fields'     => array(

            array(
                'id'       => 'contact_info_title',
                'type'     => 'text',
                'title'    => esc_html__( 'Title', 'cmo' ),
            ),
            array(
                'id'       => 'header_info_email',
                'type'     => 'text',
                'title'    => esc_html__( 'Email', 'cmo' ),
                'default'  => 'mail@example.com',
            ),
            array(
                'id'        => 'header_info_phone',
                'type'      => 'text',
                'title'     => esc_html__( 'Phone', 'cmo' ),
                'default'   => '+145 (2466) 888',
            ),
            array(
                'id'        => 'header_open_hour',
                'type'      => 'text',
                'title'     => esc_html__( 'Open Hour & day', 'cmo' ),
            ),
            array(
                'id'       => 'cmo-textarea',
                'type'     => 'editor',
                'title'    => esc_html__( 'Address', 'cmo' ),
            )             
        )
    ) );
    Redux::setSection( $opt_name, array(
        'title'      => esc_html__( 'Contact Form', 'cmo' ),
        'id'         => 'cmo-contact_form',
        'subsection' => true,
        'fields'     => array(

            array(
                'id'       => 'contact_form_title',
                'type'     => 'text',
                'title'    => esc_html__( 'Title', 'cmo' ),
            ),
            array(
                'id'       => 'contact_form_shortcode',
                'type'     => 'text',
                'title'    => esc_html__( 'CF7 Shortcode', 'cmo' ),

            ),            
        )
    ) );