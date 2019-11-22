<?php
add_action( 'cmb2_init', 'cmo_add_metabox' );
function cmo_add_metabox() {

	$prefix = '_cmo_';

		// client information
	$cmb = new_cmb2_box( array(
		'id'           => $prefix . 'client',
		'title'        => esc_html__( 'Client Information', 'cmo' ),
		'object_types' => array( 'client' ),
		'context'      => 'normal',
		'priority'     => 'default',
	) );

	$cmb->add_field( array(
		'name' => esc_html__( 'Client Logo', 'cmo' ),
		'id' => $prefix . 'client_logo',
		'type' => 'file',
	) );

	$cmb->add_field( array(
		'name' => esc_html__( 'Logo Link', 'cmo' ),
		'id' => $prefix . 'logo_link',
		'type' => 'text_url',
	) );

	// slider information
	$cmb = new_cmb2_box( array(
		'id'           => $prefix . 'slider',
		'title'        => esc_html__( 'Slider  Information', 'cmo' ),
		'object_types' => array( 'slider' ),
		'context'      => 'normal',
		'priority'     => 'default',
	) );

	$cmb->add_field( array(
		'name' => esc_html__( 'Slider Details', 'cmo' ),
		'id' => $prefix . 'slider_details',
		'type' => 'wysiwyg',
	) );

	$cmb->add_field( array(
		'name' => esc_html__( 'Slider Button Text', 'cmo' ),
		'id' => $prefix . 'slider_button_text',
		'type' => 'text',
		'default' => 'contact us',
	) );

	$cmb->add_field( array(
		'name' => esc_html__( 'Slider Button Link', 'cmo' ),
		'id' => $prefix . 'slider_button_link',
		'type' => 'text_url',
	) );

	// Team Information
	$cmb = new_cmb2_box( array(
		'id'           => $prefix . 'team',
		'title'        => esc_html__( 'Team  Information', 'cmo' ),
		'object_types' => array( 'team' ),
		'context'      => 'normal',
		'priority'     => 'default',
	) );

	$cmb->add_field( array(
		'name' => esc_html__( 'Photo', 'cmo' ),
		'id' => $prefix . 'photo',
		'type' => 'file',
	) );

	$cmb->add_field( array(
		'name' => esc_html__( 'Designation', 'cmo' ),
		'id' => $prefix . 'designation',
		'type' => 'text',
	) );
	$cmb->add_field( array(
		'name' => esc_html__( 'Profile', 'cmo' ),
		'id' => $prefix . 'profile',
		'type' => 'text',
	) );

	$cmb->add_field( array(
		'name' => esc_html__( 'Facebook', 'cmo' ),
		'id' => $prefix . 'facebook',
		'type' => 'text_url',
	) );

	$cmb->add_field( array(
		'name' => esc_html__( 'LinkedIn', 'cmo' ),
		'id' => $prefix . 'linkedin',
		'type' => 'text_url',
	) );

	$cmb->add_field( array(
		'name' => esc_html__( 'Twitter', 'cmo' ),
		'id' => $prefix . 'twitter',
		'type' => 'text_url',
	) );

	//Testimonial  Information
	$cmb = new_cmb2_box( array(
		'id'           => $prefix . 'testimonial',
		'title'        => esc_html__( 'Testimonial  Information', 'cmo' ),
		'object_types' => array( 'testimonial' ),
		'context'      => 'normal',
		'priority'     => 'default',
	) );

	$cmb->add_field( array(
		'name' => esc_html__( 'Testimonial Details', 'cmo' ),
		'id' => $prefix . 'testimonial_details',
		'type' => 'wysiwyg',
		'default' => 'they are very intuitive and flexible for both reporting and rules, and eclipses the competition in terms of driving enhancements and developments',
	) );

	$cmb->add_field( array(
		'name' => esc_html__( 'Photo', 'cmo' ),
		'id' => $prefix . 'photo',
		'type' => 'file',
	) );

	$cmb->add_field( array(
		'name' => esc_html__( 'Designation', 'cmo' ),
		'id' => $prefix . 'designation',
		'type' => 'text',
	) );

	//user
	$cmb = new_cmb2_box( array(
		'id'           => $prefix . 'user',
		'title'        => esc_html__( 'Testimonial  Information', 'cmo' ),
		'object_types' => array( 'user_form' ),
		'context'      => 'normal',
		'priority'     => 'default',
	) );

	$cmb->add_field( array(
		'name' => esc_html__( 'Testimonial Details', 'cmo' ),
		'id' => $prefix . 'testimonial_details',
		'type' => 'wysiwyg',
		'default' => 'they are very intuitive and flexible for both reporting and rules, and eclipses the competition in terms of driving enhancements and developments',
	) );

	$cmb->add_field( array(
		'name' => esc_html__( 'Photo', 'cmo' ),
		'id' => $prefix . 'photo',
		'type' => 'file',
	) );

	$cmb->add_field( array(
		'name' => esc_html__( 'Designation', 'cmo' ),
		'id' => $prefix . 'designation',
		'type' => 'text',
	) );

	// service video
	$cmb = new_cmb2_box( array(
		'id'           => $prefix . 'video',
		'title'        => esc_html__( 'Video', 'cmo' ),
		'object_types' => array( 'service' ),
		'context'      => 'normal',
		'priority'     => 'default',
	) );

	$cmb->add_field( array(
		'name' => esc_html__( 'Video Preview Image', 'cmo' ),
		'id' => $prefix . 'video_preview_image',
		'type' => 'file',
	) );

	$cmb->add_field( array(
		'name' => esc_html__( 'Video Link', 'cmo' ),
		'id' => $prefix . 'video_link',
		'type' => 'text_url',
	) );
// Pricing table
	$cmb = new_cmb2_box( array(
		'id'           => $prefix . 'services',
		'title'        => esc_html__( 'Pricing Table', 'cmo' ),
		'object_types' => array( 'service' ),
		'context'      => 'normal',
		'priority'     => 'default',
	) );

	$cmb->add_field( array(
		'name' 		=> esc_html__( 'Table Name', 'cmo' ),
		'id' 		=> $prefix . 'table_name',
		'type' 		=> 'text',
		'default' 	=> 'pricing',
	) );

	$pricing_table = $cmb->add_field( array(
		'name' 		=> esc_html__( 'Plan', 'cmo' ),
		'id'		=> $prefix . 'plan',
		'type' 		=> 'group',
	) );

	$cmb->add_group_field($pricing_table, array(
		'name' 		=> esc_html__( 'Plan name', 'cmo' ),
		'id' 		=> $prefix . 'plan_name',
		'type' 		=> 'text',
	) );
	$cmb->add_group_field($pricing_table, array(
		'name' 		=> esc_html__( 'Price $', 'cmo' ),
		'id' 		=> $prefix . 'price',
		'type' 		=> 'text',
	) );
	$cmb->add_group_field($pricing_table, array(
		'name' 		=> esc_html__( 'Price ¢', 'cmo' ),
		'id' 		=> $prefix . 'pricecent',
		'type' 		=> 'text',
	) );
	$cmb->add_group_field($pricing_table, array(
		'name' 			=> esc_html__( 'Item', 'cmo' ),
		'id' 			=> $prefix . 'item',
		'type' 			=> 'text',
		'repeatable' 	=> true,
	) );
	$cmb->add_group_field($pricing_table, array(
		'name' 			=> esc_html__( 'Button Label', 'cmo' ),
		'id' 			=> $prefix . 'button_label',
		'type' 			=> 'text',
	) );
	$cmb->add_group_field($pricing_table, array(
		'name' 			=> esc_html__( 'Button Link', 'cmo' ),
		'id' 			=> $prefix . 'button_link',
		'type' 			=> 'text_url',
	) );


}