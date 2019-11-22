<!--Start-Blog-Post-->
<div class="blog-posts page">
    <!--Single-blog-post-->
    <div class="single-blog-post">
        <div class="blog-post-img">
            <?php the_post_thumbnail("cmo-home-square"); ?>
        </div>
    </div><!--End-blog-post-->
    <!--Start-Blog-title-->
    <div class="single-blog-title">
        <a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
    </div><!--End-Blog-title-->
    <div class="blog-description">
        <?php the_content(); ?>
    </div>
	<!--end-comment-form-->
</div>