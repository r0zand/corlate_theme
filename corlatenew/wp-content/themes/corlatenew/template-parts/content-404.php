<section id="error" class="container text-center">
	<?php 
	// Retreiving The Title Of the Page 
	$title 		= get_sub_field( 'title_' );
	// Retrevinf The Content Of the Page 
	$details  	= get_sub_field( 'content_' );
	// Retreiving The Link Text To Homepage  
	$link_text  = get_sub_field( 'return_to_home_text_' );
	if ( $title ) { 
		?>
		<h1><?php echo  $title; ?></h1>
	<?php } 
	if ( $details  ) { 
		?>
		<p><?php echo $details; ?></p>
		<?php } 
		if ( $link_text ) { 
			?><a class="btn btn-primary" href="<?php echo get_home_url();?>"><?php echo $link_text; ?></a>
			<?php 
		}
		?>
</section><!--/#error-->