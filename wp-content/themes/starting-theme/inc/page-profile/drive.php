<div class="container-fluid inspiration">

  <?php if( have_rows('inspiration') ): ?>

    <div class="row">

  	<?php  $i = 1; while( have_rows('inspiration') ): the_row();

  		// vars
  		$inspName = get_sub_field('inspiration_name');
  		$inspImage = get_sub_field('inspiration_image');
  		$inspQuoteHeading = get_sub_field('inspiration_quote_heading');
      $inspQuoteBody = get_sub_field('inspiration_quote_body');

  		?>

      <div class="col-md-6 quote matchheight">



        <p>#<?php if ($i < 9): ?>0<?php endif; ?><?php echo $i; ?> <?php echo $inspName; ?></p>
        <img src="<?php echo $inspImage ?>" alt="<?php echo $inspName ?>">
        <span>“</span>
        <h2><?php echo $inspQuoteHeading ?></h2>
        <p><?php echo $inspQuoteBody; ?></p>
        <p class="blue"><?php echo $inspName; ?></p>
        <span>“</span>

      </div>

  	<?php $i++; endwhile; ?>

  </div>

  <?php endif; ?>

  <div class="row">
    <div class="col-md-12 wow fadeInUp">
      <div class="back__wrapper matchheight">
        <a href="/profile/"><img src="<?php echo get_template_directory_uri()  ?>/images/back_img.svg" alt="Back to Profile">Back to Profile</a>
      </div>
    </div>
  </div>
</div>
