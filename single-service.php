<?php
/**
 * Template part for displaying Service posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage CMO
 * @since 1.0
 * @version 1.0
 */
the_post();
get_header();
global $cmo;
$pricing = get_post_meta(get_the_ID(),'_cmo_plan', true); ?>
<!-- Service Single styling Start -->
<main>
    <section class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xm-12">
                <?php
                if(is_active_sidebar('service-sidebar')){
                    dynamic_sidebar('service-sidebar');
                }
                ?>
                </div>

                <!-- Main Content Area -->
                <div class="col-lg-8 col-md-8 col-sm-12 col-xm-12">
                    <div class="over-view-title">
                        <h2><?php the_title(); ?></h2>
                        <?php the_content(); ?>
                    </div>
                    <?php if(!empty(get_post_meta(get_the_ID(),'_cmo_video_preview_image', true)) && !empty(get_post_meta(get_the_ID(),'_cmo_video_link', true))):?>
                    <div class="section-video text-center" style="background-image: url('<?php echo esc_url(get_post_meta(get_the_ID(),'_cmo_video_preview_image', true)); ?>')">
                        <a class="popup-youtube video-con m-auto" href="<?php echo esc_url($videolink);?>">
                            <i class="fa fa-play"></i>
                        </a>
                    </div>
                    <?php
                    endif;
                    ?>
                    <div class="ss-pricing">
                        <div class="ss-pricing-title">
                            <h2><?php if(!empty(get_post_meta(get_the_ID(),'_cmo_table_name', true))) echo get_post_meta(get_the_ID(),'_cmo_table_name', true);?></h2>
                        </div>
                        <div class="row">
                        <?php 
                        if(!empty($pricing)):
                        foreach($pricing as $pricingplan):
                        ?>
                            <div class="col-md-4">
                                <div class="card card-pricing">
                                    <div class="card-body ">
                                        <div class="single-pricing-plan text-center">
                                            <h4 class="pt-4"><?php if(!empty($pricingplan['_cmo_plan_name'])) echo esc_html($pricingplan['_cmo_plan_name']); ?></h4>
                                            <h2><small>S</small><?php if(!empty($pricingplan['_cmo_price'])) echo esc_html($pricingplan['_cmo_price']);?><small>.<?php if(!empty($pricingplan['_cmo_pricecent'])) echo esc_html($pricingplan['_cmo_pricecent']); ?></small></h2>
                                            <ul>
                                            <?php foreach($pricingplan['_cmo_item'] as $pitem):?>
                                                <li><?php if(!empty($pitem)) echo esc_html($pitem)?></li>
                                            <?php endforeach; ?>
                                            </ul>
                                            <div class="card-footer">
                                                <a href="<?php if(!empty($pricingplan['_cmo_button_link'])) echo esc_html($pricingplan['_cmo_button_link'])?>" class="sing-btn"><?php if(!empty($pricingplan['_cmo_button_label'])) echo esc_html($pricingplan['_cmo_button_label'])?></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php
                        endforeach;
                        endif;
                        ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main><!--  Service Single styling End -->
<?php get_footer(); ?>