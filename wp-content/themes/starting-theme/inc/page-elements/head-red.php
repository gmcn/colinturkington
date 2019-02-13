<div class="container-fluid calendarhead">
	<div class="row">
		<div class="col-md-8">
			<h1><?php echo post_type_archive_title( '', false ); ?></h1>
			<p>Each race as it comes click into each event to find out more.</p>
		</div><!-- /.col-md-8 -->
		<div class="col-md-4 standings">

			<p>Current BTCC Standings</p>

			<?php if( have_rows('driver_standings', 'option') ): ?>
				<table class="table">
					<tbody>
					<?php $i = 1; while( have_rows('driver_standings', 'option') ): the_row();

						// vars
						$driverName = get_sub_field('driver_name');
						$driverPoints = get_sub_field('driver_points');

						?>

	    				<tr>
								<td class="count">#<?php echo $i; ?></td>
								<td class="name"><?php echo $driverName; ?></td>
								<td class="points"><?php echo $driverPoints; ?></td>
							</tr>

					<?php $i++; endwhile; ?>
				</table>
			<?php endif; ?>


		</div><!-- /.col-md-4 -->
	</div><!-- /.row -->
</div><!-- /.container-fluid eventshead -->
