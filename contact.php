<?php
global $cmo;
/**
 * Template Name: Contact
 */
get_header();
?>

<!--Case-Study-Page-Styling-start-->
<main>
    <!--Testimonial-Section-Start-->
    <section class="con-area-sec">
        <div class="container">
           <div class="email-submit">
               <div class="row">
                   <div class="col-lg-3 offset-1">
                       <!--Contact-Area-Section-Start-->
                       <div class="c-area">
                           <div class="">
                               <h2><?php 
                                    if(!empty($cmo['contact_info_title']) ) {
                                        echo esc_html($cmo['contact_info_title']); 
                                     } 
                                     ?>
                                </h2>
                               <div class="ca-area d-flex">
                                   <div class="content-icon">
                                       <i class="fa fa-home fa-2x"></i>
                                   </div>
                                   <div class="text-area">
                                   <p>
                                       <?php 
                                        if(!empty($cmo['cmo-textarea']) ) {
                                            echo esc_textarea($cmo['cmo-textarea']); 
                                        } 
                                        ?></p>
                                   </div>
                               </div>
                               <div class="ca-area d-flex">
                                   <div class="content-icon">
                                        <i class="fa fa-phone fa-2x"></i>
                                   </div>
                                   <div class="text-area">
                                       <p>
                                       <?php 
                                        if(!empty($cmo['header_info_phone']) ) {
                                            echo esc_html($cmo['header_info_phone']); 
                                        } 
                                        ?></p>
                                   </div>
                               </div>
                               <div class="ca-area d-flex">
                                   <div class="content-icon">
                                       <i class="fa fa-paper-plane fa-2x"></i>
                                   </div>
                                   <div class="text-area">
                                       <p><?php 
                                        if(!empty($cmo['header_info_email']) ) {
                                            echo esc_html($cmo['header_info_email']); 
                                        } 
                                        ?> </p>
                                   </div>
                               </div>
                           </div>
                       </div><!--Contact-Area-Section-end-->
                   </div>
                   <div class="col-lg-6 offset-1">
                       <div class="leave-a-comment">
                           <div class="blog-f-head">
                               <h4><?php 
                                    if(!empty($cmo['contact_form_title']) ) {
                                        echo esc_html($cmo['contact_form_title']);
                                     } 
                                     ?>
                                     </h4>
                           </div>
                           <!--blog-f-head-->
                           <div class="single-blog-form">
                           <?php
                           if(!empty($cmo['contact_form_title']) ) {
                           echo do_shortcode($cmo['contact_form_shortcode']);

                           }
                           ?>
                               <!--form-->
                           </div>
                           <!--blog-form-->
                       </div><!--end-comment-form-->
                   </div>
               </div>
           </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <!--google-map-start-->
                <div class="map-area">
                <?php 
                        if(!empty($cmo['cmo_google_location']) ) {
                        echo do_shortcode($cmo['cmo_google_location']); 
                        } 
                    ?>
                </div>
              <!--google-map-end-->
            </div>
          </div>
        </div>
    </section>
    <!--Testimonial-Section-end-->
</main>
<!--Case-Study-Page-Styling-end-->
<?php
get_footer();
?>