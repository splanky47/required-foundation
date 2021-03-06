<?php
/**
 * The template for displaying search forms in required+ Foundation
 *
 * @package required+ Foundation
 * @since required+ Foundation 0.1.0
 */
?>

<form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
    <div class="row collapse">
    	<div class="small-8 columns">
        	<input type="text" value="" name="s" id="s" placeholder="<?php _e( 'Search', 'requiredfoundation' ); ?>">
      	</div>
      	<div class="small-4 columns">
        	<input type="submit" id="searchsubmit" value="<?php _e( 'Search', 'requiredfoundation' ); ?>" class="postfix button secondary">
      	</div>
    </div>
</form>