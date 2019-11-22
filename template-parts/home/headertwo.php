<?php global $cmo; ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <?php if(!empty($cmo['cmo_favicon']) ) { ?>
    <link rel="shortcut icon" type="image/png" href="<?php echo esc_url($cmo['cmo_favicon']['url']); ?>"/>
    <?php } ?>
    <?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>

<!--header-start-->
<header>
    <!--header-top-start-->
    <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-5 col-sm-12 col-xm-12">
                    <!--web-address-start-->
                    <div class="web-address d-flex justify-content-start">
                        <a href="mailto:<?php  echo esc_html($cmo['header_info_email']); ?>"><i class="fa fa-envelope"></i><?php 
                            if(!empty($cmo['header_info_email']) ) {
                                echo esc_html($cmo['header_info_email']); 
                            } 
                            ?></a>
                        <a href="callto:<?php echo esc_html($cmo['header_info_phone']);?>"><i class="fa fa-phone"></i><?php 
                                if(!empty($cmo['header_info_phone']) ) {
                                    echo esc_html($cmo['header_info_phone']); 
                                } 
                            ?></a>
                    </div><!--web-address-start-->
                </div>
                <div class="col-lg-6 col-md-7 col-sm-12 col-xm-12">
                    <!--web-language-start-->
                    <div class="multi-lng d-flex justify-content-end">
                    <?php if(($cmo['get_language']) == 1) : ?> 
                        <div class="lan-text">
                        <?php echo do_shortcode('[glt language="English" label="EN" image="no" text="yes"]');?>
                            <?php echo do_shortcode($cmo['get_language_scode']);?>
                        </div>
                        <?php endif ?>
                        <a href="#"><i class="far fa-clock"></i><?php 
                                if(!empty($cmo['header_open_hour']) ) {
                                    echo esc_html($cmo['header_open_hour']); 
                                } 
                            ?></a>
                    </div><!--web-language-start-->
                </div>
            </div>
        </div><!--container-end-->
    </div><!--header-top-end-->

    <!--main-menu-start-->
    <div class="main-menu">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-8 col-sm-12 col-xm-12">
                    <nav class="navbar sticky-top navbar-expand-lg navbar-light">
                        <!-- Brand -->
                        <a class="navbar-brand" href="<?php echo esc_url(home_url()); ?>"><img src="<?php echo esc_url($cmo['cmo_header_logo']['url']); ?>" alt="header logo"></a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <!-- Links -->
                            <?php
                    $cmo_menu = wp_nav_menu( array(
                        'theme_location' => 'mainmenu',
                        'menu_id'        => 'menu_id',
                        'menu_class'     => 'navbar-nav mr-auto mr-left',
                        'echo'           => false,
                    'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                    'walker' => new WP_Bootstrap_Navwalker(),
                    ) );

                    $cmo_menu = str_replace("menu-item-has-children","menu-item-has-children has-children",$cmo_menu);
                    echo wp_kses_post($cmo_menu);
                ?>
                        </div>
                    </nav>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-12 col-xm-12 search-icon-lb">
                    <!--main-menu-right-start-->
                    <div class="main-menu-right d-flex">
                        <!--get-quote-start-->
                        <?php if(($cmo['get_quote_button']) == 1) : ?> 
                        <?php if(!empty($cmo['get_quote_name']) ) { ?>
                        <div class="get-quote">
                            <div class="top-area-btn">
                            <a class="btn" href="<?php echo esc_url($cmo['get_quote_url']); ?>"><?php echo esc_html($cmo['get_quote_name']); ?></a>
                            </div>
                        </div><!--get-quote-end-->
                        <?php } ?>
                        <?php endif ?>
                    </div><!--main-menu-right-end-->
                </div>
            </div>
        </div> <!--container-end-->
    </div><!--main-menu-end-->

</header><!--header-end-->

<!--HomePage-02-Page-Content-Start-->
<main>
<?php if(is_front_page()){
    $bgclass = 'bg-img';
    }else{
        $bgclass = 'common-banner-bg';
    }
    ?>
<!--slider-section-start-->
<section class="slider-section <?php echo esc_attr($bgclass);?>">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="h2-banner-slider owl-carousel owl-theme">
                <?php 
                    $allslider = new WP_Query( array(
                        'post_type' => 'slider',
                        'posts_per_page' => -1,
                    ));
                    if($allslider->have_posts()):
                        while($allslider->have_posts()):
                            $allslider->the_post();
                            $sliderdetails = get_post_meta(get_the_ID(),'_cmo_slider_details', true);
                            $btnurl = get_post_meta(get_the_ID(),'_cmo_slider_button_link', true);
                            $btnlabel = get_post_meta(get_the_ID(),'_cmo_slider_button_text', true);
                        ?>
                   <div class="item">
                                <div class="banner-text">
                                    <div class="table-cell">
                                        <?php
                                        if(!empty($sliderdetails)){
                                        echo wp_kses_post( $sliderdetails);
                                        }
                                        ?>
                                        <div class="banner-area-btn">
                                            <a class="btn" href="<?php echo esc_url($btnurl); ?>"><?php echo esc_html($btnlabel);?></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
                            endwhile;
                        endif;
                        ?>
                </div>
            </div>
        </div>
    </div>
</section><!--slider-section-end-->