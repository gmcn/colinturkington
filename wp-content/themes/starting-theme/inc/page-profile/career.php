<div class="container-fluid career">

<?php if( have_rows('career') ): ?>

  <div class="row wow fadeInUp">
    <img src="<?php echo get_template_directory_uri()  ?>/images/career-topper.svg" alt="<?php the_title(); ?>">
    <div class="col-md-6 years" style="height: 200px;">

    </div>
  </div>

	<?php $i=0; while( have_rows('career') ): the_row();

		// vars
		$year = get_sub_field('year');
    $yearColour = get_sub_field('year_colour');
		$yearHead = get_sub_field('year_head');
		$yearContent = get_sub_field('year_content');
    $yearImage = get_sub_field('year_image');

		?>



    <div class="row wow fadeInUp">

  		<div class="col-md-6 <?php if ($i % 2): ?><?php else : ?>col-md-offset-6<?php endif; ?> years">

        <div class="years__wrapper" style="background: url(<?php echo $yearImage ?>) <?php echo $yearColour ?> right;  background-repeat: no-repeat; background-size: contain;">
          <h2><?php echo $year; ?></h2>
          <p>
            <?php echo $yearHead ?>
          </p>
            <?php echo $yearContent ?>
            <div class="ruler">

            </div>
        </div>



  		</div>

    </div>

	<?php $i++; endwhile; ?>

  <div class="row wow fadeInUp">
    <img src="<?php echo get_template_directory_uri()  ?>/images/career-topper.svg" alt="<?php the_title(); ?>">
    <div class="col-md-6 years" style="height: 200px;">

    </div>
  </div>

<?php endif; ?>

</div>

<div class="container-fluid career">
  <div class="col-md-12 wow fadeInUp">
    <div class="back__wrapper matchheight">
      <a href="/profile/"><img src="<?php echo get_template_directory_uri()  ?>/images/back_img.svg" alt="Back to Profile">Back to Profile</a>
    </div>
  </div>
</div>
