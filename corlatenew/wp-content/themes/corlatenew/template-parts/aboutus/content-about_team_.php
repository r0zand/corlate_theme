<?php 
// Retreiving Title Of Team Section 
$title = get_sub_field( 'title_' );
// Retreiving Content OF Team Section
$content = get_sub_field( 'content' );
?>
<!-- our-team -->
<div class="team">
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

	<div class="row clearfix">
		<?php
		$c = 1;
		if( have_rows( 'repeat_section_' ) ):
			while ( have_rows( 'repeat_section_' ) ) : the_row();
				// Retriving Name Of Team Member
				$name = get_sub_field( 'name_' );
				// Retriving Designation Of Team Member 
				$designation = get_sub_field( 'designation' );
				// Retriving Details OF Team Member
				$details = get_sub_field( 'details' );
				// Retreiving Image OF Team Member
				$img = get_sub_field( 'image_' );
				if( $c < 3 ) {
					?>
					<div class="col-md-4 col-sm-6<?php if ( $c == 2 ) {
						echo " col-md-offset-2"; 
					}
					?>">	
					<div class="single-profile-top wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
						<div class="media">
							<div class="pull-left">
								<?php if ( $img ) { 
									?>
									<a href="<?php echo $img['url']; ?>"><img class="media-object" src="<?php echo $img['url']; ?>" alt="<?php echo $img['alt']; ?>"></a>
								<?php }
								?>
							</div>
							<div class="media-body">
								<?php if ( $name ) {
									?>
									<h4><?php echo $name; ?></h4>
								<?php }
								if ( $designation ) { ?>
									<h5><?php echo $designation; ?></h5>
								<?php }
								?>
								<ul class="tag clearfix">
									<?php
									if ( have_rows( 'skills_repeater' ) ) :
										while ( have_rows( 'skills_repeater' ) ) : the_row();
											// Retreiving Link Of Skills 
											$link = get_sub_field( 'skills_link_and_text' );
											if ( $link ) { 
												?>
												<li class="btn"><a href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>"><?php echo $link['title']; ?></a></li>
												<?php
											} 
										endwhile;
									endif;
									?>
								</ul>

								<ul class="social_icons">
									<?php
									if ( have_rows( 'social_links_repeater_' ) ) :
										while ( have_rows( 'social_links_repeater_' ) ) : the_row();
											// Retreiving Font Awesome Code 
											$fa_code = get_sub_field( 'fa_code' );
											// Retreiving Social Links 
											$link = get_sub_field( 'social_links' );
											if ( $link ) { 
												?>
												<li><a href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>"><i class="<?php echo $fa_code; ?>"></i></a></li>
												<?php 
											}
										endwhile;
									endif;
									?>
								</ul>
							</div>
						</div><!--/.media -->
						<?php if ( $details ) { 
							?>
							<p><?php echo $details; ?></p>
						<?php }
						?>
					</div>
				</div><!--/.col-lg-4 -->
				<?php 
			}
			$c++;
		endwhile;
	endif;
	?>

</div> <!--/.row -->
<div class="row team-bar">
	<div class="first-one-arrow hidden-xs">
		<hr>
	</div>
	<div class="first-arrow hidden-xs">
		<hr> <i class="fa fa-angle-up"></i>
	</div>
	<div class="second-arrow hidden-xs">
		<hr> <i class="fa fa-angle-down"></i>
	</div>
	<div class="third-arrow hidden-xs">
		<hr> <i class="fa fa-angle-up"></i>
	</div>
	<div class="fourth-arrow hidden-xs">
		<hr> <i class="fa fa-angle-down"></i>
	</div>
</div> <!--skill_border-->       

<div class="row clearfix"> 
	<?php
	$c = 1;
	if( have_rows( 'repeat_section_' ) ) :
		while ( have_rows( 'repeat_section_' ) ) : the_row();
				// Retriving Name Of Team Member
			$name = get_sub_field( 'name_' );
				// Retriving Designation Of Team Member 
			$designation = get_sub_field( 'designation' );
				// Retriving Details OF Team Member
			$details = get_sub_field( 'details' );
				// Retreiving Image OF Team Member
			$img = get_sub_field( 'image_' );
			if ( $c > 2 ) {
				?>
				<div class="col-md-4 col-sm-6 col-md-offset-2">	
					<div class="single-profile-bottom wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="600ms">
						<div class="media">
							<div class="pull-left">
								<?php if ( $img ) { 
									?>
									<a href="<?php echo $img['url']; ?>"><img class="media-object" src="<?php echo $img['url']; ?>" alt="<?php echo $img['alt']; ?>"></a>
								<?php }
								?>
							</div>

							<div class="media-body">
								<?php if ( $name ) {
									?>
									<h4><?php echo $name; ?></h4>
								<?php }
								if ( $designation ) { ?>
									<h5><?php echo $designation; ?></h5>
								<?php }
								?>
								<ul class="tag clearfix">
									<?php
									if ( have_rows( 'skills_repeater' ) ):
										while ( have_rows( 'skills_repeater' ) ) : the_row();
											// Retreiving Link Of Skills 
											$link = get_sub_field( 'skills_link_and_text' );
											if ( $link ) { 
												?>
												<li class="btn"><a href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>"><?php echo $link['title']; ?></a></li>
												<?php
											} 
										endwhile;
									endif;
									?>
								</ul>
								<ul class="social_icons">
									<?php
									if ( have_rows( 'social_links_repeater_' ) ):
										while ( have_rows( 'social_links_repeater_' ) ) : the_row();
											// Retreiving Font Awesome Code 
											$fa_code = get_sub_field( 'fa_code' );
											// Retreiving Social Links 
											$link = get_sub_field( 'social_links' );
											if ( $link ) { 
												?>
												<li><a href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>"><i class="<?php echo $fa_code; ?>"></i></a></li>
												<?php 
											}
										endwhile;
									endif;
									?>
								</ul>
							</div>
						</div><!--/.media -->
						<?php if ( $details ) { 
							?>
							<p><?php echo $details; ?></p>
						<?php }
						?>
					</div>
				</div>
				<?php 
			}
			$c++;
		endwhile;
	endif;
	?>
</div>	<!--/.row-->
</div><!--section-->
</div><!--/.container-->
    </section><!--/about-us-->