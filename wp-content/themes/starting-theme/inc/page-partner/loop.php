<div class="container-fluid partners">
	<div class="row">

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post();

		$partnerUrl = get_field('partner_url');

		?>

			<div class="col-sm-6 col-md-4 partner wow fadeInUp">
				<div class="partner__wrapper">
					<div class="img__wrapper">
						<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
					</div>

				</div>

				<a href="<?php the_permalink(); ?>">More Info</a><?php if($partnerUrl) : ?>| <a href="<?php echo $partnerUrl ?>" target="_blank">Visit Site</a><?php endif; ?>

			</div>

			<?php endwhile; ?>

		<?php endif; ?>

	</div>

</div>
