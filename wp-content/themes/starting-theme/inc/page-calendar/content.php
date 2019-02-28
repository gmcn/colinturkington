<div class="container-fluid calendar-single">
	<div class="row">

		<?php

			$startDate = get_field('date_from', false, false);
			$startDate = new DateTime($startDate);
      $endDate = get_field('date_to', false, false);
			$endDate = new DateTime($endDate);
			$rounds = get_field('rounds');
			$today = date('d-m-Y');

			$circuitFeatureImage = get_field('circuit_feature_image');

			?>

			<div class="col-md-3 image hidden-xs hidden-sm matchheight">
				<div class="image__wrapper" style="background: url(<?php echo $circuitFeatureImage ?>) center center; background-size: cover;">

				</div>
			</div>

			<div class="col-md-9 circuit matchheight">
				<div class="circuit__wrapper">
					<?php echo file_get_contents( get_the_post_thumbnail_url()); ?>
				</div>
			</div>

	</div>

	<div class="row">
		<div class="col-md-3 back">
			<div class="back__wrapper matchheight">
				<img src="<?php echo get_template_directory_uri(); ?>/images/back_img.svg" alt="Back to Calendar"><a href="/calendar/">Back to Calendar</a>
			</div>
		</div>
		<div class="col-md-9 blog">
			<div class="blog__wrapper matchheight">
				<h3>From the blog...</h3>
			</div>
		</div>
	</div>

	<div class="row blog_section">

		<?php

		$args = array( 'post_type' => 'post', 'category_name' => get_the_title(), 'posts_per_page' => 4, 'orderby' => 'date', 'order' => 'DESC' );
		$loop = new WP_Query( $args );
		if ($loop->have_posts()) :
		while ( $loop->have_posts() ) : $loop->the_post();

		$thumb_id = get_post_thumbnail_id();
		$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'large', false);
		$thumb_url = $thumb_url_array[0];

		?>

			<div class="col-md-3 blog_section__post">
				<a href="<?php the_permalink(); ?>">
					<div class="blog_section__post__wrapper" style="background: url(<?php echo $thumb_url; ?>) #283C4F center center; background-size: cover;">
						<h2><?php the_title(); ?></h2>
					</div>
				</a>
			</div>
		<?php endwhile; ?>
	<?php endif; ?>




	</div>

</div>
