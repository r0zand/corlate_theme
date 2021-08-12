<?php 
get_header();

$bg_url = get_template_directory_uri().'/images/banner-destroyer-2020.jpg';
?>
<div style="background-color: #f2f2f2;">
    <section>
    <section class="breadcrumb-area" style="background-image: url(<?php echo $bg_url; ?>">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="inner-content clearfix">
                    <div class="title">
                        <h1>Products</h1>
                    </div>
                    <div class="breadcrumb-menu float-right">
                        <ul class="clearfix">
                            
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
	
		
		<?php
		while ( have_posts() ) :
			the_post();
			?>
					<div class="row">
                 <div class="col-md-8">
                    <div class="blog-item">
                        <div class="row">
                            
                               <?php 
the_content();                               ?>
                            </div>
                        </div>    
                    </div><!--/.blog-item-->
                    <aside class="col-md-4">
                    	<?php dynamic_sidebar('my-sidebar2');
?>
                    </aside>
            </section>
                </div>
			
<?php
			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>


<?php
get_footer();