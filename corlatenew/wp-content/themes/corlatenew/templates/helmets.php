<?php 
/*
 Template Name: Helmets     
*/
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
                        <h1>Helmets </h1>
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
                <div class="row">
                 <div class="col-md-8">
                    <div class="blog-item">
                        <div class="row">
                            <div class="col-xs-12 col-sm-2 text-center">
                                <h2>All Helmets</h2> 
                            </div>
                                
                            <div class="col-xs-12 col-sm-10 blog-content">
                               <?php 
                               echo do_shortcode( '[products limits="3" columns="3" category ="Helmets"]' );
                               ?>
                            </div>
                        </div>    
                    </div><!--/.blog-item-->

                    <div class="blog-item">
                        <div class="row">
                            <div class="col-xs-12 col-sm-2 text-center">
                             <h2>AGV</h2> 
                            </div>
                                
                            <div class="col-xs-12 col-sm-10 blog-content">
                               <?php 
                               echo do_shortcode( '[products limits="3" columns="3" category="AGV"]' );
                               ?>
                            </div>
                        </div>    
                    </div><!--/.blog-item-->



                 <div class="blog-item">
                        <div class="row">
                            <div class="col-xs-12 col-sm-2 text-center">
                               <h2>LS2</h2>  
                            </div>
                                
                            <div class="col-xs-12 col-sm-10 blog-content">
                               <?php 
                               echo do_shortcode( '[products limits="3" columns="3" category="LS2"]' );
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
                    	<h3>On Sale</h3>
                        <?php
                        echo do_shortcode( '[sale_products limits="2" columns="2" category="Helmets"]')
                        ?>
                    </div><!--/.search-->
    				
                    <div class="widget search">
                        
                        <h3>Recent Products</h3>
                        <?php
                        echo do_shortcode( '[recent_products limits="2" columns="2" category="Helmets"]')
                        ?>
                    </div><!--/.search-->
                    
                        
                        
                    
                </aside>
            </div><!--/.row-->
    </section>
</div>