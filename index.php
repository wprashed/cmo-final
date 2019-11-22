<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage CMO
 * @since 1.0
 * @version 1.0
 */

global $cmo;
 get_header();
$bloggridswitchvalue = $cmo['cmo-blog-layout-option'];
if( $bloggridswitchvalue == 1 ){
?>
        <section class="section-padding">
        <div class="container">
            <div <?php post_class('blog-items'); ?> id="post-<?php the_ID(); ?>">
                <div class="row">
                    <?php
                        while ( have_posts() ) :
                        the_post();
                    ?>
                    <div class="col-md-4">
                    <?php get_template_part("/template-parts/common/post-grid"); ?>
                    </div>
                    <?php
                        endwhile;
                    ?>
                </div>
                <div class="row">
                    <div class="col-md-12 text-center">
                        <ul class="pagination text-uppercase">
                        <?php
                              the_posts_pagination(array(
                                  "screen_reader_text"=>' ',
                                  "prev_text" => esc_html__("Prev","cmo"),
                                  "next_text" => esc_html__("Next","cmo")
                              ));
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php
}else{
    ?>

<!-- Blog Classic Page Design  -->
<main>
    <section class="classic-blog-page">
        <!--start-container-->
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12 pr-lg-5">
                    <?php
                        while ( have_posts() ) :
                        the_post();
                    ?>
                    <?php get_template_part("/template-parts/common/post"); ?>
                    <?php
                        endwhile;
                    ?>
                    <!--Pagination Start-->
                    <div class="row">
                        <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                            <?php
                              the_posts_pagination(array(
                                  "screen_reader_text"=>' ',
                                  "prev_text" => esc_html__("Prev","cmo"),
                                  "next_text" => esc_html__("Next","cmo")
                              ));
                            ?>
                        </div>
                    </div><!--Pagination End-->
                </div>
                <?php get_sidebar(); ?>
            </div>
        </div><!--End-Container-->
    </section>
</main><!-- Blog Classic Page Design End -->
    <?php
}

?>
<?php get_footer(); ?>