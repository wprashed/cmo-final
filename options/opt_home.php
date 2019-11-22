   <?php

    Redux::setSection( $opt_name, array(
        'title'            => esc_html__( 'Home', 'cmo' ),
        'id'               => 'cmo_theme_home',
        'desc'             => esc_html__( 'cmo header!', 'cmo' ),
        'customizer_width' => '400px',
        'icon'             => 'dashicons dashicons-admin-home'
    ) );

    Redux::setSection( $opt_name, array(
        'title'      => esc_html__( 'Logo & Icon', 'cmo' ),
        'id'         => 'cmo_all_logo_select',
        'subsection' => true,
        'fields'     => array(

            array(
                'id'       => 'cmo_header_logo',
                'type'     => 'media',
                'url'      => true,
                'title'    => esc_html__( 'Header Logo White BG', 'cmo' ),
                'compiler' => 'true',
                //'mode'      => false, // Can be set to false to allow any media type, or can also be set to any mime type.
                'desc'     => esc_html__( 'Header Logo Size: 170px X 50px..', 'cmo' ),
                //'subtitle' => esc_html__( 'Upload any media using the WordPress native uploader', 'cmo' ),
                'default'  => array( 'url' => 'https://s.wordpress.org/style/images/codeispoetry.png' ),
                //'hint'      => array(
                //    'title'     => 'Hint Title',
                //    'content'   => 'This is a <b>hint</b> for the media field with a Title.',
                //)
            ),
            array(
                'id'       => 'cmo_header_logo_color',
                'type'     => 'media',
                'url'      => true,
                'title'    => esc_html__( 'Header Logo Color BG', 'cmo' ),
                'compiler' => 'true',
                //'mode'      => false, // Can be set to false to allow any media type, or can also be set to any mime type.
                'desc'     => esc_html__( 'Header Logo Size: 170px X 50px..', 'cmo' ),
                //'subtitle' => esc_html__( 'Upload any media using the WordPress native uploader', 'cmo' ),
                'default'  => array( 'url' => 'https://s.wordpress.org/style/images/codeispoetry.png' ),
                //'hint'      => array(
                //    'title'     => 'Hint Title',
                //    'content'   => 'This is a <b>hint</b> for the media field with a Title.',
                //)
            ),
            array(
                'id'       => 'cmo_footer_logo',
                'type'     => 'media',
                'url'      => true,
                'title'    => esc_html__( 'Footer Logo', 'cmo' ),
                'compiler' => 'true',
                //'mode'      => false, // Can be set to false to allow any media type, or can also be set to any mime type.
                'desc'     => esc_html__( 'Footer Logo Size: 170px X 50px.', 'cmo' ),
                //'subtitle' => esc_html__( 'Upload any media using the WordPress native uploader', 'cmo' ),
                'default'  => array( 'url' => 'https://s.wordpress.org/style/images/codeispoetry.png' ),
                //'hint'      => array(
                //    'title'     => 'Hint Title',
                //    'content'   => 'This is a <b>hint</b> for the media field with a Title.',
                //)
            ),
            array(
                'id'       => 'cmo_mobile_logo',
                'type'     => 'media',
                'url'      => true,
                'title'    => esc_html__( 'Mobile & Sticky Logo', 'cmo' ),
                'compiler' => 'true',
                //'mode'      => false, // Can be set to false to allow any media type, or can also be set to any mime type.
                'desc'     => esc_html__( 'Footer Logo Size: 170px X 50px.', 'cmo' ),
                //'subtitle' => esc_html__( 'Upload any media using the WordPress native uploader', 'cmo' ),
                'default'  => array( 'url' => 'https://s.wordpress.org/style/images/codeispoetry.png' ),
                //'hint'      => array(
                //    'title'     => 'Hint Title',
                //    'content'   => 'This is a <b>hint</b> for the media field with a Title.',
                //)
            ),
        )
    ) );


    //end Home section