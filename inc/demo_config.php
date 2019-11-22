<?php
// OneClick Demo Importer
add_filter( 'pt-ocdi/import_files', 'cmo_import_files' );
function cmo_import_files() {
    return array(
        array(
            'import_file_name'             => esc_html__( 'Style 1 Demo', 'cmo' ),
            'local_import_file'            => trailingslashit( get_template_directory() ) . 'inc/demos/style1/contents.xml',
            'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'inc/demos/style1/widgets.wie',
            'import_preview_image_url'     => trailingslashit( get_template_directory_uri() ).'inc/demos/style1/screenshot.png',
            'import_notice'                => wp_kses_post(__( 'Install and activate all required plugins before you click on the "Import" button. 
            <br> All pages will be imported. If you fail to import the demo data, follow the alternative way described in Doccumentations', 'cmo' )),
            'preview_url'                  => '//cmo.anditthemes.com/style1',
            'local_import_redux'           => array(
                array(
                    'file_path'   => trailingslashit( get_template_directory() ) . 'inc/demos/all/settings.json',
                    'option_name' => 'cmo',
                ),
            ),
        ),
        array(
            'import_file_name'             => esc_html__('Style 2 Demo', 'cmo'),
            'local_import_file'            => trailingslashit( get_template_directory() ) . 'inc/demos/style2/contents.xml',
            'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'inc/demos/style2/widgets.wie',
            'import_preview_image_url'     => trailingslashit( get_template_directory_uri() ).'inc/demos/style2/screenshot.png',
            'import_notice'                => wp_kses_post(__( 'Install and activate all required plugins before you click on the "Import" button. 
            <br> All pages will be imported. If you fail to import the demo data, follow the alternative way described in Doccumentations', 'cmo' )),
            'preview_url'                  => '//cmo.anditthemes.com/style2',
            'local_import_redux'           => array(
                array(
                    'file_path'   => trailingslashit( get_template_directory() ) . 'inc/demos/style2/settings.json',
                    'option_name' => 'cmo',
                ),
            ),
        ),
    );
}

function cmo_after_import_setup($selected_import) {
    // Assign menus to their locations.
    $main_menu = get_term_by( 'name', 'Main Menu', 'nav_menu' );

    set_theme_mod( 'nav_menu_locations', array (
            'main_menu' => $main_menu->term_id,
        )
    );

    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'Home' );
    $blog_page_id  = get_page_by_title( 'Blog' );

    // Disable Elementor's Default Colors and Default Fonts
    update_option( 'elementor_disable_color_schemes', 'yes' );
    update_option( 'elementor_disable_typography_schemes', 'yes' );
    update_option( 'elementor_global_image_lightbox', '' );

    // Set the home page and blog page
    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    update_option( 'page_for_posts', $blog_page_id->ID );

}
add_action( 'pt-ocdi/after_import', 'cmo_after_import_setup' );