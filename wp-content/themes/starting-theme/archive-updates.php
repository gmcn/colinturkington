<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Starting_Theme
 */

get_header(); ?>

		<?php
		if ( have_posts() ) : ?>

			<div class="col-md-4">
				<?php echo the_title(); ?>
				<img src="" alt="">
			</div>

		<?php endif; ?>

<?php
//get_sidebar();
get_footer();
