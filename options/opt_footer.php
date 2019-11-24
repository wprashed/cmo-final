<?php

// Footer settings
Redux::setSection('cmo', array(
    'title'     => esc_html__('Footer', 'cmo'),
    'id'        => 'wpcmo_footer_btm',
    'icon'      => 'el el-arrow-down',
    // 'subsection'=> true,
    'fields'    => array(
        array(
            'id'        => 'footer_copyright',
            'type'      => 'editor',
            'title'     => esc_html__( 'Copyright Text','cmo'),
            'default'   => esc_html__( '2019 - CMO Consulting | All Rights Reserved','cmo'),
        ),
        array(
            'id'       => 'footer_term_url',
            'type'     => 'text',
            'title'    => esc_html__( 'Terms of Service url', 'cmo' ),
        ),
        array(
            'id'       => 'footer_privacy_url',
            'type'     => 'text',
            'title'    => esc_html__( 'Privacy Policy url', 'cmo' ),
        ),
    )
));