<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Starting_Theme
 */

get_header(); ?>

<?php
include(locate_template("inc/page-elements/breadcrumbs.php"));
// include(locate_template("inc/page-elements/head-navy.php"));
// include(locate_template("inc/page-news/loop.php"));
?>

	<div class="container-fluid news-single">
		<div class="row">

			<?php
			if ( have_posts() ) : /* Start the Loop */
			while ( have_posts() ) : the_post(); ?>

				<div class="col-md-12 title">
					<div class="date">
						<?php the_date('d.m.y'); ?>
					</div>
					<h1><?php the_title(); ?></h1>
				</div>

				<div class="col-md-6 content wow fadeInLeft">
					<?php the_content() ?>
					<a class="back" href="/updates"><img src="<?php echo get_template_directory_uri(); ?>/images/back_img_nvy.svg" alt="Back to Calendar">Back to news</a>
				</div>
				<div class="col-md-6 thumbimg wow fadeInRight">
					<?php if( have_rows('gallery') ): ?>

		        <a class="fancybox" rel="group" href="<?php the_post_thumbnail_url(); ?>" title="<?php the_title(); ?>">

		            <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" />

		        </a>


		        <img class="more" src="<?php echo get_template_directory_uri() ?>/images/photo-camera.svg" alt="View <?php the_title() ?> Gallery">
		      <?php else : ?>
		        <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" />
		      <?php endif; ?>
					<div class="col-md-12 galleryinfo">
						<div class="galleryinfo__wrapper">
							<h3><?php echo the_title(); ?></h3>
							<?php echo the_excerpt(); ?>
						</div>

					</div>
				</div>
					<?php if( have_rows('gallery') ): ?>
				  <!-- Hidden Gallery -->
				  <div class="hidden">
				    <?php while( have_rows('gallery') ): the_row();
				      // vars
				      $image = get_sub_field('image');
				      $image_title = get_sub_field('image_title');
							$image_url = $image['sizes']['thumbnail'];
				      ?>

				        <a class="fancybox" rel="group" href="<?php echo $image ?>" title="<?php if($image_title) : ?>
				          <?php echo $image_title ?>
				        <?php else : ?>
				          <?php the_title(); ?>
				        <?php endif; ?>">

				            <img src="<?php echo $image_url; ?>" alt="<?php if($image_title) : ?>
				              <?php echo $image_title ?>
				            <?php else : ?>
				              <?php the_title(); ?>
				            <?php endif; ?>" />
				        </a>

				    <?php endwhile; wp_reset_postdata(); ?>
				  </div>
				<?php endif; ?>
			<?php endwhile; ?>
			<?php endif; ?>
		</div>

		<div class="row prev-next">
			<div class="col-xs-6 previous">

				<?php
				$prev_post = get_previous_post();
				if (!empty( $prev_post )): ?>
				  <?php previous_post_link('%link', '< Previous Article', TRUE); ?>
				<?php endif; ?>

			</div>
			<div class="col-xs-6 next">
				<?php
				$next_post = get_next_post();
				if (!empty( $next_post )): ?>
				  <?php next_post_link('%link', 'Next Article >', TRUE); ?>
				<?php endif; ?>
			</div>
		</div>

	</div>

<?php
get_footer();
