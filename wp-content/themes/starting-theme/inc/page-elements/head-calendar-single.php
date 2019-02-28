<?php

	$rounds = get_field('rounds');
	$circuitCorners = get_field('circuit_corners');
	$circuitLength = get_field('circuit_length');


 ?>

<div class="container-fluid calendarhead-single">
	<div class="row title">
		<div class="col-md-6">
			<h1><?php echo the_title(); ?></h1>
		</div><!-- /.col-md-6 -->
		<div class="col-md-6">
			<?php echo the_content(); ?>
		</div><!-- /.col-md-6 -->
		<hr>
	</div><!-- /.row -->
	<div class="row circuit">
		<div class="col-md-6">
			<div class="circuit__details">
				<span class="rotate">Race Details</span>
			</div>
			<div style="float: left; margin-left: -110px;">
				<div class="wrapper">
					<span>Corners:</span>
						<p><?php echo $circuitCorners ?></p>
					</div>
				</div>
				<div style="float: left">
					<div class="wrapper">
						<span>Circuit length:</span>
						<p><?php echo $circuitLength ?></p>  <span class="miles">miles</span>
					</div>
				</div>
		</div>
		<?php if( have_rows('circuit_gallery') ): ?>

			<div class="col-md-6 circuit_gallery">
				<a class="fancybox" rel="group" href="<?php the_post_thumbnail_url(); ?>" title="<?php the_title(); ?>">

					<img src="<?php echo get_template_directory_uri(); ?>/images/circuit-photos.svg" alt="<?php echo the_title(); ?> Circuit Images"> View Circuit Photos

				</a>
			</div><!-- /.col-md-6 circuit_gallery -->

		<?php endif; ?>
	</div><!-- /.row -->
</div><!-- /.container-fluid calendarhead-single -->

<?php if( have_rows('circuit_gallery') ): ?>
  <!-- Hidden Gallery -->
  <div class="hidden">
    <?php while( have_rows('circuit_gallery') ): the_row();
      // vars
      $image = get_sub_field('gallery_image');
      $image_title = get_sub_field('gallery_image_title');
      ?>

        <a class="fancybox" rel="group" href="<?php echo $image ?>" title="<?php if($image_title) : ?>
          <?php echo $image_title ?>
        <?php else : ?>
          <?php the_title(); ?>
        <?php endif; ?>">

            <img src="<?php echo $image ?>" alt="<?php if($image_title) : ?>
              <?php echo $image_title ?>
            <?php else : ?>
              <?php the_title(); ?>
            <?php endif; ?>" />

        </a>


    <?php endwhile; wp_reset_postdata(); ?>
  </div>
<?php endif; ?>
