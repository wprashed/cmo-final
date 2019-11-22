<div class="page-title breadcamp 404">
    <h1>
    	<?php the_archive_title(); ?>		
    </h1>
</div>
<div class="page-path">
    <ul>
        <li><a class="active" href="<?php echo get_home_url(); ?>"><?php _e('Home','cmo');?> <i class="fa fa-angle-double-right"></i></a></li>
        <li><?php the_archive_title(); ?></li>
    </ul>
</div>