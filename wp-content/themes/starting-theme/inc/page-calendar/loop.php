<div class="container-fluid calendar">
	<div class="row">

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post();

			$startDate = get_field('date_from', false, false);
			$startDate = new DateTime($startDate);
      $endDate = get_field('date_to', false, false);
			$endDate = new DateTime($endDate);
			$rounds = get_field('rounds');
			$today = date('d-m-Y');

			// $today_time = strtotime($today);
			// $expire_time = strtotime($endDate);
			// $startDate_time = strtotime($startDate);

			?>

			<div class="col-sm-6 col-md-4 event wow fadeInUp">

				<div class="event__wrapper__<?php if ($expire_time > $today_time) : ?>closed <?php else : ?>upcoming <?php endif; ?>">
					<div class="dots"> </div>
  				<div class="round">
  					Rounds <?php echo $rounds; ?>
  				</div>
  				<div class="dates">
  					<?php echo $startDate->format('jS'); ?>-<?php echo $endDate->format('jS F Y'); ?>
  				</div>
  				<div	class="title">
  					<h2 class="matchheight"><?php echo the_title(); ?></h2>
  					<a href="<?php the_permalink(); ?>">Click here for more</a>
  				</div>

					<div class="img__wrapper">

						<?php echo file_get_contents( get_the_post_thumbnail_url() ); ?>

					</div>

					<div class="status">
						<p class="over">Race Over</p>
						<p class="tbc">TBC</p>
					</div>

				</div>
        <a href="http://www.btcc.net" target="_blank"><img class="btcc_logo" src="<?php echo get_template_directory_uri(); ?>/images/btcc_logo.png" alt="BTCC"></a>



			</div>

			<?php endwhile; ?>

		<?php endif; ?>

	</div>

</div>
