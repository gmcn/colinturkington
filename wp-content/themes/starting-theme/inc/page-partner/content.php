<div class="container-fluid partner-single">
	<div class="row">

		<?php

			$partnerAddress = get_field('partner_address');
			$partnerTelephone = get_field('partner_telephone');
			$partnerFax = get_field('partner_fax');
			$partnerUrl = get_field('partner_url');

			?>

			<div class="col-md-6 details wow fadeInLeft">
				<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
				<div class="details__contact">


					<div class="col-sm-4">
						<p>Address</p>
						<?php echo $partnerAddress; ?>
					</div>

					<?php if($partnerTelephone): ?>
						<div class="col-sm-4">
							<p>Telephone</p>
								<a href="tel:<?php echo $partnerTelephone; ?>"><?php echo $partnerTelephone; ?></a>
						</div>
					<?php endif; ?>


						<?php if($partnerFax): ?>
						<div class="col-sm-4">
							<p>Fax</p>
							<a href="tel:<?php echo $partnerFax; ?>"><?php echo $partnerFax; ?></a>
						</div>
						<?php endif; ?>



						<div class="clear">

						</div>

				</div>
				<!-- <div class="col-md-12 url"> -->
					<?php if($partnerUrl): ?>
						<a class="partner-url" href="<?php echo $partnerUrl; ?>" target="_blank">View website now</a>
					<?php endif; ?>
				<!-- </div> -->
			</div>

			<div class="col-md-6 content wow fadeInRight">
				<?php the_content(); ?>
			</div>

	</div>

	<div class="row">
		<div class="col-md-12 wow fadeInUp">
			<div class="back__wrapper matchheight">
				<a href="/partner/"><img src="<?php echo get_template_directory_uri(); ?>/images/back_img.svg" alt="Back to Partners">Back to Partners</a>
			</div>
		</div>
	</div>



</div>

<div class="container-fluid partner-img">
	<div class="partner-img">
	</div>
</div>
