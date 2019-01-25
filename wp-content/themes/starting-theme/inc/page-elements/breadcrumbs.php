<?php if ( function_exists('yoast_breadcrumb') ) : ?>
	<div class="container-fluid breadcrumbs">
		<div class="row">
			<div class="col-md-12 ">
				<?php
					yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
				?>
			</div>
		</div>
	</div>
<?php endif; ?>
