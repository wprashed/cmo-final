<?php
/**
 * The template for displaying all pages
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

get_header(); ?>
<!-- Blog Classic Page Design  -->
<main>
    <section class="classic-blog-page">
        <!--start-container-->
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12">
                    <?php
                        while ( have_posts() ) :
                        the_post();
                    ?>
                    <?php get_template_part("/template-parts/common/content"); ?>
                    <?php
                        endwhile;
                    ?>
                    <!--Pagination Start-->
                </div>
                <?php get_sidebar(); ?>
            </div>
        </div><!--End-Container-->
    </section>
</main><!-- Blog Classic Page Design End -->
<?php get_footer(); ?>