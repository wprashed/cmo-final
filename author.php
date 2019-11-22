<?php get_header(); ?>
<!-- Blog Classic Page Design  -->
<main>
    <section class="classic-blog-page">
        <!--start-container-->
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12">
                    
                    <?php
                        if ( ! have_posts() ):
                            ?>
                            <h1><?php _e("There is no post in this author","cmo"); ?></h1>
                        <?php
                        endif;
                    ?>
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
<?php get_footer(); ?>