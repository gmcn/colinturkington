<div class="container-fluid partnershead">
	<div class="row">
		<div class="col-md-8">
			<h1>
				<?php if ( is_home() ) : ?>
					<?php $news_title = get_the_title( get_option('page_for_posts', true) ); echo $news_title; ?>
				<?php else: ?>
					<?php echo post_type_archive_title( '', false ); ?>
				<?php endif; ?>
			</h1>
			<p>Please feel free to check out my sponsors and partners websites.</p>
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
