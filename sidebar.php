<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage CMO
 * @since 1.0
 * @version 1.0
 */
?>

<div class="col-lg-3 col-md-4 col-sm-12 col-xs-12 silly-pad-2">
    <?php
        if ( is_active_sidebar( "sidebar" ) ) {
            dynamic_sidebar( "sidebar" );
        }
    ?>
</div>
<!--col-md-4 col-sm-12 col-xs-12 Category Area END-->