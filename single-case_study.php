<?php
/**
 * Template part for displaying Case Study posts
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
                        <div class="case-post-img">
					       <?php the_post_thumbnail("cmo-home-square img-fluid"); ?>
					    </div>
                        <?php the_content(); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main><!--  Service Single styling End -->
<?php get_footer(); ?>