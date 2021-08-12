<?php 
/*
 Template Name: Mesh     
*/
get_header();
$bg_url = get_template_directory_uri().'/images/bags_banner.jpg';
?>
    <section class="breadcrumb-area" style="background-image: url(<?php echo $bg_url; ?>">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="inner-content clearfix">
                    <div class="title">
                        <h1>Mesh Nepal</h1>
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
<div style="background-color: #f2f2f2;">
    <div>
                <div class="row">
                 <div class="col-md-8">
                    <div class="blog-item">
                        <div class="row">
                            <div class="col-xs-12 col-sm-2 text-center">
                                <h2>Bags</h2> 
                            </div>
                                
                            <div class="col-xs-12 col-sm-10 blog-content">
                               <?php 
                               echo do_shortcode( '[products limits="3" columns="3" category ="Mesh"]' );
                               ?>
                            </div>
                        </div>    
                    </div><!--/.blog-item-->

                        </div>
                

                <aside class="col-md-4">
                   
                    <div class="widget search">
                        
                        <h3>Recent Products</h3>
                        <?php
                        echo do_shortcode( '[recent_products limits="2" columns="2" category="Mesh"]')
                        ?>
                    </div><!--/.search-->
                </aside>
            </div><!--/.row-->
        </div>
</div>
    </section>
