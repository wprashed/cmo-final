<?php global $cmo; ?>
<nav class="navbar navbar-expand-lg navbar-light" data-toggle="sticky-onscroll">
<?php if(!empty($cmo['cmo_header_logo_color']) ) { ?>
            <div class="mobile-logo">
                <a href="<?php echo esc_url(home_url()); ?>"><img src="<?php echo esc_url($cmo['cmo_header_logo_color']['url']); ?>" alt="logo"></a>
            </div>
            <?php } ?>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="container">
        <div class="col-lg-12">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <?php if(!empty($cmo['cmo_header_logo_color']) ) { ?>
                            <div class="sticky-logo">
                                <a href="<?php echo esc_url(home_url()); ?>"><img src="<?php echo esc_url($cmo['cmo_header_logo_color']['url']); ?>" alt="logo"></a>
                            </div>
                        <?php } ?>
                <?php
                    $cmo_menu = wp_nav_menu( array(
                        'theme_location' => 'mainmenu',
                        'menu_id'        => 'menu_id',
                        'menu_class'     => 'navbar-nav main-navigation mr-auto',                      
                        'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                        'walker' => new WP_Bootstrap_Navwalker(),
                    ) );

                ?>

                <div class="menu-search-icon text-right">
                <?php if(($cmo['cmo_switch-on_search']) == 1) : ?> 
                    <?php $unique_id =  uniqid( 'search-form-' ) ; ?>
                    <form role="search" method="get" class="header__search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
                        <div class="search-icon">
                            <div class="search">
                                <input type="search" id="<?php echo esc_attr($unique_id); ?>" placeholder="<?php esc_attr_e( 'Search..', 'cmo' ); ?>" value="<?php echo get_search_query(); ?>" name="s">
                                <div class="icon"></div>
                            </div>
                        </div>
                    </form>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</nav>