<?php
global $cmo;
/**
 * Template Name: Home Page
 */
$headerswitchvalue = $cmo['cmo-opt-image-select-layout'];
if( $headerswitchvalue == 1 ){
    get_header();
}else{
    get_template_part("/template-parts/home/headertwo");
}

?>
<?php while(have_posts()){
    the_post();
    the_content();    
}?>
<?php
get_footer();
?>