<?php
function cmo_custom_css(){
    global $cmo;
    ?>
    <style>
    body {
    background: <?php echo esc_attr($cmo['background_solid_color']); ?> none repeat scroll 0 0;
    color: <?php echo esc_attr($cmo['text_solid_color']); ?>;
}
    .common-banner-bg {
    background: url(<?php echo esc_url($cmo['cmo_header_back_image']['url']); ?>)no-repeat;
}
.banner-bg {
    background: url(<?php echo esc_url($cmo['cmo_header_home_image']['url']); ?>)no-repeat;
    background-size: cover;
    background-position: top;
    height: 100vh;
}
.bg-img {
    background-image: url(<?php echo esc_url($cmo['cmo_header_home_image']['url']); ?>);
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
    position: relative;
    padding: 270px 0px;
}
    </style>
    <?php
}
add_action('wp_head','cmo_custom_css');
?>