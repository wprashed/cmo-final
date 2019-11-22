<?php
/**
 * The header for CMO
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage CMO
 * @since 1.0
 * @version 1.0
 */
global $cmo; ?>

<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
    <!-- Required meta tags -->
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>
<?php if(is_page_template('home-page.php')){
    $bgclass = 'banner-bg';
    }else{
        $bgclass = 'common-banner-bg';
    }
    ?>
<!--top-area start-->
<div class="<?php echo esc_attr($bgclass);?>">
    <div class="top-area">
        <div class="container">
            <div class="row">
                <div class="col-md-2">
                <?php if(!empty($cmo['cmo_header_logo_color']) ) { ?>
                    <div class="top-logo">
                        <a href="<?php echo esc_url(home_url()); ?>"><img src="<?php echo esc_url($cmo['cmo_header_logo_color']['url']); ?>" alt="header logo"></a>
                    </div>
                    <?php } else{ ?>
                    <div class="top-logo">
                        <a href="<?php echo esc_url(home_url()); ?>"><img src="http://cmo.anditthemes.com/style1/wp-content/uploads/2019/11/white-logoh1.png" alt="header logo"></a>
                    </div>
                    <?php } ?>
                </div>
                
                <div class="col-md-6">
                <div class="top-contact-area">
                        <div class="top-contact">
                            <span>
                                <a href="mailto:<?php  echo esc_html($cmo['header_info_email']); ?>"><i class="fa fa-envelope"></i>
                                <?php 
                                if(!empty($cmo['header_info_email']) ) {
                                    echo esc_html($cmo['header_info_email']); 
                                }else{
                                    echo "mail@example.com";
                                } 
                                ?>
                                </a>
                            </span>
                        </div>
                        <div class="top-contact">
                            <span><a href="callto:<?php echo esc_html($cmo['header_info_phone']);?>"><i class="fa fa-phone"></i>
                            <?php 
                                if(!empty($cmo['header_info_phone']) ) {
                                    echo esc_html($cmo['header_info_phone']); 
                                }else{
                                    echo "+145 (2466) 888";
                                }
                            ?>
                            </a></span>
                        </div>

                    </div>
                </div>
                <div class="col-md-4">
                <div class="top-area-language common-area">
                        <?php if(($cmo['get_language']) == 1) : ?> 
                        <div class="lan-text">
                        <?php echo do_shortcode('[glt language="English" label="EN" image="no" text="yes"]');?>
                            <?php echo do_shortcode($cmo['get_language_scode']);?>
                        </div>
                        <?php endif ?>
                        <?php if(($cmo['get_quote_button']) == 1) : ?> 
                        <?php if(!empty($cmo['get_quote_name']) ) { ?>
                            <div class="get-quote">
                                <a class="btn" href="<?php echo esc_url($cmo['get_quote_url']); ?>"><?php echo esc_html($cmo['get_quote_name']); ?></a>
                            </div>
                        <?php } ?>
                        <?php endif ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--top-area End-->

    <!--Header Area Start-->
    <header>
        <?php get_template_part("/template-parts/common/nav"); ?>
    </header>
    <!--Header Area End-->

    <!--Banner-Area Start-->

    <div class="banner-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <?php
                        if ( is_archive() ) {
                            get_template_part( "template-parts/common/breadcamp-archive" );
                        }elseif (is_404()) {
                           get_template_part( "template-parts/common/breadcamp-404" );
                        }
                        elseif(!is_home() && !is_front_page()){
                            get_template_part( "template-parts/common/breadcamp" );
                        }
                        else{
                            get_template_part( "template-parts/common/breadcamp-home" );
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
    <!--Banner-Area End-->
</div>
