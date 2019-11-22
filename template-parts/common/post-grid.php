
                <div class="blog-area-item post-box">
                    <div class="blog-img">
                        <a href="<?php the_permalink();?>"><img src="<?php the_post_thumbnail_url() ?>" alt="bsn-img"></a>
                    </div>
                    <div class="blog-text">
                        <h5><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h5>
                        <?php the_excerpt(); ?>
                        <div class="d-flex justify-content-between">
                            <span><?php echo wp_kses_post(get_the_category_list()); ?></span> 
                            <span><?php the_author(); ?></span>
                        </div>
                    </div>
                </div>