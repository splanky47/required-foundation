<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package required+ Foundation
 * @since required+ Foundation 0.3.0
 */

get_header(); ?>

	<!-- Row for main content area -->
	<div id="content" class="row">

		<div id="main" class="<?php do_action( 'contentAction' ); ?>  columns" role="main">
			<div class="post-box">

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', 'page' ); ?>

					<?php
						/**
						 * Seriously I never used comments on a page, what for?
						 */
						//comments_template( '', true );
					?>

				<?php endwhile; // end of the loop. ?>

			</div>
		</div><!-- /#main -->

		
		<?php get_sidebar(); ?>
			

	</div><!-- End Content row -->

<?php get_footer(); ?>
