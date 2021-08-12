<?php
// Retreiving Title Of the About Skills Section  
$title = get_sub_field( 'title' );
// Retreiving Content Of the About Skills Section  
$content = get_sub_field( 'content' );
?>
<!-- Our Skill -->
<div class="skill-wrap clearfix">
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
	<div class="row">
		<?php 
		$counter = 1;
		$c=300;
		if( have_rows( 'repeat_section' ) ):
			while ( have_rows( 'repeat_section' ) ) : the_row();
				// Retreiving Name Of Skill   
				$skills = get_sub_field( 'skill_name' );
				// Retreiving Skill Percentage   
				$percentage = get_sub_field( 'skill_percentage' );
				// Retreiving  Skill Code   
				$skill_class = get_sub_field( 'skill_code_' );
				?>
				<div class="col-sm-3">
					<div class="sinlge-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="<?php echo $c."ms"; ?>">
						<div class="<?php echo $skill_class; ?>-skill">    
							<?php if ( $percentage ) {
								?>                               
								<p><em><?php echo $percentage; ?></em></p>
							<?php } 
							if ( $skills ) {
								?>
								<p><?php echo $skills; ?></p>
							<?php }
							?>
						</div>
					</div>
				</div>
				<?php 
				$c=$c=300;
			endwhile;
		endif;
		?>
	</div>
</div><!--/.our-skill-->
