

<?php

//Setup pagination variables
$gallery = get_field('gallery_page'); // Get our gallery
$images = array(); // Set images array for current page

$items_per_page  = 20; // How many items we should display on each page
$total_items = count($gallery); // How many items we have in total
$total_pages = ceil($total_items / $items_per_page); // How many pages we have in total
//Get current page
if ( get_query_var( 'paged' ) ) {
	$current_page = get_query_var( 'paged' );
} elseif ( get_query_var( 'page' ) ) {
	//this is just in case some odd rewrite, but paged should work instead of page here
	$current_page = get_query_var( 'page' );
} else{
	$current_page = 1;
}
$starting_point = (($current_page-1)*$items_per_page); // Get starting point for current page

// Get elements for current page
if($gallery){
	$images = array_slice($gallery,$starting_point,$items_per_page);
}

?>

<?php if(!empty($images)) : ?>
  <div class="container-fluid gallery_page">
    <div class="row">


      <?php $i = 1; foreach( $images as $image ):
        $attachment = $image;
        $attachment_id = $attachment['id'];

        ?>
        <a class="fancybox" rel="group" href="<?php echo $image['sizes']['large']; ?>" title="<?php echo get_the_date('d.m.y', $attachment_id); //echo $image['caption']; ?>">
          <div class="col-sm-6 col-md-3 gallery_page__item count<?php echo $i ?> wow fadeIn" style="background: url(<?php echo $image['sizes']['large']; ?>) center center; background-size: cover;">
            <h2><?php echo get_the_date('d.m.y', $attachment_id); ?></h2>
          </div>
        </a>
      <?php $i++; endforeach; ?>


  </div>
<?php endif ?>

<div class="row">
	<div class="col-md-6 pagin">
		<div class="pagin__wrapper matchheight">
			<?php

			// And our pagination
			$big = 99999999999999999; // need an unlikely integer
			echo paginate_links(array(
				'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
				'format' => '?paged=%#%',
				'current' => $current_page,
				'total' => $total_pages,
				'before_page_number' => '<span class="screen-reader-text">'.__('Page ','textdomain').' </span>'
			));

			// // Set previous page
			// if($total_pages>1 && $current_page<=$total_pages && $current_page!=1){
			// 	echo '<a href="'.get_permalink().(($current_page-1)!=1 ? 'page/'.($current_page-1).'/' : '').'">'.__('Previous','textdomain').'</a>';
			// }
			// Set next page
			// if($total_pages>1 && $current_page<$total_pages && $current_page!=$total_pages){
			// 	echo '<a href="'.get_permalink().'page/'.($current_page+1).'/">'.__('Next','textdomain').'</a>';
			// }

			 ?>
		</div>
	</div>
	<div class="col-md-6 blue">
		<div class="blue__wrapper matchheight">
		</div>
	</div>
</div>
