<!--Footer Area Start-->
<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage CMO
 * @since 1.0
 * @version 1.1
 */

global $cmo; ?>
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <?php
                    if ( is_active_sidebar( "footer-one" ) ) {
                        dynamic_sidebar( "footer-one" );
                    }
                ?>
            </div>
            <div class="col-md-3">
                <?php
                    if ( is_active_sidebar( "footer-two" ) ) {
                        dynamic_sidebar( "footer-two" );
                    }
                ?>
            </div>
            <div class="col-md-3">
                <?php
                    if ( is_active_sidebar( "footer-three" ) ) {
                        dynamic_sidebar( "footer-three" );
                    }
                ?>
            </div>
            <div class="col-md-3">
                <?php
                    if ( is_active_sidebar( "footer-four" ) ) {
                        dynamic_sidebar( "footer-four" );
                    }
                ?>
            </div>
        </div>
    </div>
</footer>

<!--Footer Area End-->

<!--Copyright Area Start-->

<div class="copyright">
    <div class="container">
        <div class="row">
            <div class="col-lg-2 col-md-3">
            <?php if(!empty($cmo['cmo_footer_logo']) ) { ?>        
                <div class="copy-right-logo">
                    <a href="<?php echo esc_url(home_url()); ?>"><img src="<?php echo esc_url($cmo['cmo_footer_logo']['url']); ?>" alt="bsn-img" class="img-responsive"></a>
                </div>
            <?php } else{ ?>
                <div class="copy-right-logo">
                    <a href="<?php echo esc_url(home_url()); ?>"><img src="http://cmo.anditthemes.com/style1/wp-content/uploads/2019/11/logo-sm.png" alt="bsn-img" class="img-responsive"></a>
                </div>
            <?php } ?>
            </div>
            <div class="col-lg-4 col-md-5">
                <p><?php
                        if (!empty($cmo['footer_copyright']) ) {
                            echo esc_html($cmo['footer_copyright']);
                        }else{
                            echo "2019 - CMO Consulting | All Rights Reserved";
                        } 
                    ?>        
                </p>
            </div>
            <div class="col-lg-6 col-md-4">
                <div class="terms-policy">
                <ul>
                        <li>
                            <?php if(!empty($cmo['footer_term_url']) ) : ?>   
                                <a href="<?php echo esc_url($cmo['footer_term_url']); ?>"><?php _e('Privacy Policy','cmo')?></a>
                            <?php endif ?>
                        </li>
                        <li>
                            <?php if(!empty($cmo['footer_privacy_url']) ) : ?>  
                                <a href="<?php echo esc_url($cmo['footer_privacy_url']); ?>"><?php _e('Terms of Service','cmo')?></a>
                            <?php endif ?>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<!--Copyright Area End-->
<!--Top Arrow area start-->
<div class="top-arrow">
    <a href="#" id="scroll" style="display: none;"><i class="fa fa-rocket"></i></a>
</div>
<?php wp_footer(); ?>
</body>
</html>