<?php 
/**
 * The template for displaying 404 pages (Not Found)
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
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <h1 class="error_title"><?php _e( 'Oops! That page can&rsquo;t be found.', 'cmo' ); ?></h1>
                    <!--Pagination Start-->
                </div>
            </div>
        </div><!--End-Container-->
    </section>
</main><!-- Blog Classic Page Design End -->
<?php get_footer(); ?>