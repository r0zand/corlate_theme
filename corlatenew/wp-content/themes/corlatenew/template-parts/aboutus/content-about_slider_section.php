<?php 
// Retreiving Title Of the About Slider Section  
$title = get_sub_field( 'title' );
// Retreiving Content Of the About Slider Section  
$content = get_sub_field( 'content' );
?>
<section id="about-us">
	<div class="container">
		<div class="center wow fadeInDown">
			<?php if ( $title ) {
				?>
				<h2><?php echo $title; ?></h2>
			<?php }
			if ( $content ) { 
				?>
				<p class="lead"><?php echo $content; ?></p>
			<?php }
			?>
		</div>

		<!-- about us slider -->
		<div id="about-slider">
			<div id="carousel-slider" class="carousel slide" data-ride="carousel">
				<!-- Indicators -->
				<ol class="carousel-indicators visible-xs">
					<?php  $c=0; 
					$active = 'active';
					if( have_rows( 'repeater_section' ) ) {
						while ( have_rows( 'repeater_section' ) ) { 
							the_row();
							?>
							<li data-target="#carousel-slider" data-slide-to="<?php echo $c; ?>" class="<?php if ( $c == 0 ) { 
								echo $active;
							} 
							?>">		
						</li>
						<?php 
						$c++;
					}
				}
				?>
			</ol>

			<div class="carousel-inner"><?php 
			$c=1;
			if( have_rows( 'repeater_section' ) ):
				while ( have_rows( 'repeater_section' ) ) : the_row();
					// Retreiveing Slider Images 
					$img = get_sub_field( 'image_' );
					?>
					<div class="item<?php if( $c==1 ){
						echo " active";
					}?>">
					<?php if ( $img ) { 
					?>
					<img src="<?php echo $img['url']; ?>" class="img-responsive" alt="<?php echo $img['alt']; ?>"> 
				<?php }
				?>
				</div>
				<?php
				$c++;
			endwhile;
		endif;
		?>
	</div>

	<a class="left carousel-control hidden-xs" href="#carousel-slider" data-slide="prev">
		<i class="fa fa-angle-left"></i> 
	</a>

	<a class=" right carousel-control hidden-xs"href="#carousel-slider" data-slide="next">
		<i class="fa fa-angle-right"></i> 
	</a>
</div> <!--/#carousel-slider-->
			</div><!--/#about-slider-->