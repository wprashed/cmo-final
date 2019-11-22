<?php 
/* Template Name: Full-width  */
get_header(); ?>
<!--About-Page-Styling-->
<main>
<?php while(have_posts()){
    the_post();
    the_content();    
}?>
</main>
<!--About-page-Styling-End-->
<?php get_footer(); ?>