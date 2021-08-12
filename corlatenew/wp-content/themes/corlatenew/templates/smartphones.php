<?php 
/*
 Template Name: Smartphones
*/
get_header();
$bg_url = get_template_directory_uri().'/images/smartphones_banner.jpg';
?>
<div style="background-color: #f2f2f2;">
    <section class="breadcrumb-area" style="background-image: url(<?php echo $bg_url; ?>">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="inner-content clearfix">
                    <div class="title">
                        <h1>Smartphones</h1>
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
			<div>
            <div class="row">
                 <div class="col-md-8">
                    <div class="blog-item">
                        <div class="row">
                            <div class="col-xs-12 col-sm-2 text-center">
                                <h2>All Smartphones</h2>
                            </div>
                                
                            <div class="col-xs-12 col-sm-10 blog-content">
                               <?php 
                               echo do_shortcode( '[products limits="3" columns="3" category="smartphones"]' );
                               ?>
                            </div>
                        </div>    
                    </div><!--/.blog-item-->

                        
                    <div class="blog-item">
                        <div class="row">
                            <div class="col-xs-12 col-sm-2 text-center">
                               <h2>Androids</h2>
                            </div>
                                
                            <div class="col-xs-12 col-sm-10 blog-content">
                               <?php 
                               echo do_shortcode( '[products limits="3" columns="3" category="android"]' );
                               ?>
                            </div>
                        </div>    
                    </div><!--/.blog-item-->



                 <div class="blog-item">
                        <div class="row">
                            <div class="col-xs-12 col-sm-2 text-center">
                               <h2>iOS</h2>
                            </div>
                                
                            <div class="col-xs-12 col-sm-10 blog-content">
                               <?php 
                               echo do_shortcode( '[products limits="3" columns="3" category="iOS"]' );
                               ?>
                            </div>
                        </div>    
                    </div><!--/.blog-item-->

                </div><!--/.col-md-8-->
                

                <aside class="col-md-4">
    				<div class="widget search">
    					<?php 
                    	echo get_sidebar();
                    	?>
                    	<h1>On Sale</h1>
                        <?php
                        echo do_shortcode( '[sale_products limits="2" columns="2" category="smartphones"]')
                        ?>
                    </div><!--/.search-->
    				
                    <div class="widget search">
                    	
                    	<h1>Recent Products</h1>
                        <?php
                        echo do_shortcode( '[recent_products limits="2" columns="2" category="smartphones"]')
                        ?>
                    </div><!--/.search-->
    				
                </aside>
            </div><!--/.row-->
        </div>
    </div>