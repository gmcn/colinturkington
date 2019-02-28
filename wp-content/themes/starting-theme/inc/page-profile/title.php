<?php

    $intro_col_1 = get_field('introduction_column_1');
    $intro_col_2 = get_field('introduction_column_2');

 ?>

<div class="container-fluid title-career">
  <div class="row">
    <div class="col-md-12">
      <h1><?php echo the_title(); ?></h1>
    </div>
    <div class="col-md-4">
      <?php the_content(); ?>
    </div>

  </div>
</div>
