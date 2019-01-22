<div class="container-fluid calendar">
	<div class="row">

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post();

			$startDate = get_field('date_from');
      $endDate = get_field('date_to');
			$rounds = get_field('rounds');

			?>

			<div class="col-sm-6 col-md-4 event wow fadeInUp">

				<div class="event__wrapper">
					<div class="dots"> </div>
  				<div class="round">
  					Rounds <?php echo $rounds; ?>
  				</div>
  				<div class="dates">
  					<?php echo $startDate ?> - <?php echo $endDate ?>
  				</div>
  				<div	class="title">
  					<h2 class="matchheight"><?php echo the_title(); ?></h2>
  					<a href="<?php the_permalink(); ?>">Click here for more</a>
  				</div>

  				<?php echo the_post_thumbnail( 'large' ); ?>
				</div>
        <a href="http://www.btcc.net" target="_blank"><img class="btcc_logo" src="<?php echo get_template_directory_uri(); ?>/images/btcc_logo.png" alt="BTCC"></a>
			</div>

			<?php endwhile; ?>

		<?php endif; ?>

	</div>

</div>
