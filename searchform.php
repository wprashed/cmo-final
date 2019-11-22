<?php
/**
 * Template for displaying search forms
 *
 * @package WordPress
 * @subpackage CMO
 * @since 1.0
 * @version 1.0
 */

?>

<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">	
<div class="catg-search">
	<div class="input-group">
		<input type="text" class="form-control" placeholder="<?php echo esc_attr( 'Search', 'cmo' ); ?>"  value="<?php echo get_search_query() ?>" name="s">
		<div class="input-group-append">
		<button class="cmoserchbtn" type="submit">
		<i class="fa fa-search"></i>
		</button>
		</div>
		<!--input-group-append-->
	</div>
	<!--nput-group-->
</div>
</form>