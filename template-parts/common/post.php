<?php
$url   = urlencode(get_the_permalink());
$title = urlencode(html_entity_decode(get_the_title(), ENT_COMPAT, 'UTF-8'));
?>
<!--Start-Blog-Post-->
<div class="blog-posts">
    <!--Single-blog-post-->
    <div class="single-blog-post">
        <div class="blog-post-img">
            <?php the_post_thumbnail("cmo-home-square"); ?>
        </div>
    </div><!--End-blog-post-->
    <!--Start-Blog-title-->
    <div class="single-blog-title">
        <a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
        <ul>
            <li><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( "ID" ) ) ); ?>">By: <?php the_author(); ?></a></li>
            <?php 
                $archive_month = get_the_time('m'); 
                $archive_day   = get_the_time('d'); 
                $archive_year  = get_the_time('Y');
            ?>
            <li><a href="<?php echo get_day_link( $archive_month, $archive_day, $archive_year ); ?>"><i class="fa fa-calendar-alt"></i><?php echo esc_html( get_the_date() ); ?></a></li>
            <li><a href="<?php comments_link(); ?>"><i class="fa fa-comments"></i><?php comments_number(); ?></a></li>
        </ul>
    </div><!--End-Blog-title-->
    <div class="blog-description">
        <?php the_excerpt(); ?>
    </div>
    <!--Start Read More Button-->
    <div class="read-more-btn">
        <a class="btn" href="<?php the_permalink(); ?>"><?php _e('Read more','cmo');?></a>
    </div><!--End Read More Button-->
</div><!--End-Blog-Post-->