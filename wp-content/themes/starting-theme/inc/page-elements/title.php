<?php

    $intro_col_1 = get_field('introduction_column_1');
    $intro_col_2 = get_field('introduction_column_2');

 ?>

<div class="container-fluid title">
  <div class="row">
    <div class="col-md-12">
      <h1>

        <?php if(is_404()) : ?>
          Page Not Found
        <?php else : ?>
          <?php echo the_title(); ?>
        <?php endif; ?>


        </h1>

      <?php the_content(); ?>
    </div>

    <?php if ($intro_col_1 || is_404()): ?>
      <div class="col-md-6">
        <?php if(is_404()) : ?>

          <p>It looks like nothing was found at this location.</p>

        <?php endif; ?>
        <p class="intro"><?php echo $intro_col_1 ?></p>
      </div>
      <div class="col-md-6">
        <?php if(is_404()) : ?>

        <?php endif; ?>
        <p class="intro"><?php echo $intro_col_2 ?></p>
      </div>
    <?php endif; ?>


  </div>
</div>
