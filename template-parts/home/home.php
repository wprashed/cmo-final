<!--Banner-Area Start-->
<div class="banner-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="owl-carousel owl-theme banner-slider">
                    <?php 
                    $allslider = new WP_Query( array(
                        'post_type' => 'slider',
                        'posts_per_page' => -1,
                    ));
                    if($allslider->have_posts()):
                        while($allslider->have_posts()):
                            $allslider->the_post();
                            $sliderdetails = get_post_meta(get_the_ID(),'_cmo_slider_details', true);
                            $btnurl = get_post_meta(get_the_ID(),'_cmo_slider_button_link', true);
                            $btnlabel = get_post_meta(get_the_ID(),'_cmo_slider_button_text', true);
                        ?>
                            <div class="item">
                                <div class="banner-text">
                                    <div class="table-cell">
                                        <?php
                                        if(!empty($sliderdetails)){
                                        echo wp_kses_post( $sliderdetails);
                                        }
                                        ?>
                                        <div class="banner-area-btn">
                                            <a class="btn" href="<?php echo esc_url($btnurl); ?>"><?php echo esc_html($btnlabel);?></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
                            endwhile;
                        endif;
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Banner-Area End-->