<div class="container-fluid standings-single">
  <div class="row">
    <div class="col-md-3 img_wrapper">
      <img src="/wp-content/themes/starting-theme/images/cup.svg" alt="Championship Standings">
    </div>
    <div class="col-md-6 list">
      <?php if( have_rows('driver_standings') ): ?>
        <table class="table">
          <tbody>
          <?php $i = 1; while( have_rows('driver_standings') ): the_row();

            // vars
            $driverName = get_sub_field('driver_name');
            $driverPoints = get_sub_field('driver_points');

            ?>

              <tr>
                <td class="count">#<?php echo $i; ?></td>
                <td class="name"><?php echo $driverName; ?></td>
                <td class="points"><?php echo $driverPoints; ?>pts</td>
              </tr>

          <?php $i++; endwhile; ?>
        </table>
      <?php endif; ?>
    </div>
    <div class="col-md-3 img_wrapper">
      <a href="http://btcc.net" target="_blank"><img src="/wp-content/themes/starting-theme/images/btcc_logo.png" alt="BTCC Kwikfit"></a>
      <p>For more information visit the BTCC site.</p>
    </div>
  </div>
</div>
