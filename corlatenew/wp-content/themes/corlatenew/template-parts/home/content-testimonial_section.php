<section id="content">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-8 wow fadeInDown">
				<div class="tab-wrap"> 
					<div class="media">
						<div class="parrent pull-left">
							<ul class="nav nav-tabs nav-stacked">
								<?php
								$c = 1;
								if ( have_rows( 'repeater_lhs' ) ):
									while ( have_rows( 'repeater_lhs' ) ) : the_row();
										//Retreiving Section Title
										$title = get_sub_field('title');
										?>
										<li class="<?php if ( $c == 2 ) {
											echo "active";
										}
										?>"><a href="#tab<?php echo $c; ?>" data-toggle="tab" class="<?php if( $c == 1 ) {
											echo "analistic-01";
											} elseif ( $c == 2 ) {
												echo "analistic-02";
											}
											else {
												echo "tehnical";
											}
											?>"><?php echo $title; ?></a></li>
											<?php
											$c++;
										endwhile;
									endif;
									?>
								</ul>
							</div>

							<div class="parrent media-body">
								<div class="tab-content">
									<?php
									$c=1;
									if( have_rows( 'repeater_lhs' ) ):
										while ( have_rows( 'repeater_lhs' ) ) : the_row();
											//Retreiving Testimonial Images 
											$imgs = get_sub_field('image');
											//Retreiving Testimonial Details 
											$contents = get_sub_field('content');
											?>
											<div class="tab-pane fade<?php if( $c==2 ){
												echo " active in";
											}
											?>" id="tab<?php echo $c; ?>">
											<?php if( $imgs ){ ?>
												<div class="media">
													<div class="pull-left">

														<img class="img-responsive" src="<?php echo $imgs['url']; ?>">
													</div>
													<div class="media-body">
														<?php echo $contents; ?>
													</div>
												</div>
												<?php 
											}else{
												echo $contents;
											}
											?>
										</div>
										<?php
										$c++;
									endwhile;
								endif;
								?>
							</div> <!--/.tab-content-->  
						</div> <!--/.media-body--> 
					</div> <!--/.media-->     
				</div><!--/.tab-wrap-->               
			</div><!--/.col-sm-6-->

			<?php 
			// Retreiving RHS Title
			$title_rhs = get_sub_field( 'title_rhs' );
			?>
			<div class="col-xs-12 col-sm-4 wow fadeInDown">
				<div class="testimonial">
					<?php if ( $title_rhs ) {
						?>
						<h2><?php echo $title_rhs; ?></h2>
					<?php }
					if( have_rows( 'repeater_section_rhs' ) ):
						while ( have_rows( 'repeater_section_rhs' ) ) : the_row();
							//Retreiving Images
							$imgs = get_sub_field('image');
							// Retreiving Author Name 
							$author = get_sub_field('author');
							// Retreiving Testimonial Details 
							$contents = get_sub_field('content');
							?>
							<div class="media testimonial-inner">
								<div class="pull-left">
									<?php if ( $imgs ) { 
										?>
										<img class="img-responsive img-circle" src="<?php echo $imgs['url']; ?>">
									<?php }
									?>
								</div>
								<div class="media-body">
									<?php if ( $contents ) { 
										?>
										<p><?php echo $contents; ?></p>
									<?php }
									if ( $author ) { 
										?>
										<span><?php echo $author; ?></span>
									<?php } 
									?>
								</div>
							</div>
							<?php
						endwhile;
					endif;
					?>
				</div>
			</div>

		</div><!--/.row-->
	</div><!--/.container-->
	</section><!--/#content-->