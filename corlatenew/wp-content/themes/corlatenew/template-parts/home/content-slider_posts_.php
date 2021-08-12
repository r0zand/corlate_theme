<section id="main-slider" class="no-margin">
    <div class="carousel slide">
        <ol class="carousel-indicators">
           <?php  
           $c = 0; 
           $active = 'active';
           if ( have_rows( 'repeater_section_' ) ){
            while ( have_rows( 'repeater_section_' ) ) { 
                the_row();
                ?>
                <li data-target="#main-slider" data-slide-to="<?php echo $c; ?>" class="<?php if ( $c == 0 ) {
                    echo $c; 
                    }
                    ?>">    
                    </li>
                <?php 
                $c++;
            }
        }
        ?>
    </ol>
    <div class="carousel-inner">
        <?php
        $c = 1; 
        if( have_rows( 'repeater_section_' ) ){
            while ( have_rows( 'repeater_section_' ) ) { 
                the_row();
                $bg_img       = get_sub_field( 'background_image_' );
                $person_img   = get_sub_field( 'slider_person_image' );
                $title        = get_sub_field( 'title_' );
                $content      = get_sub_field( 'content' );
                $url          = get_sub_field( 'post_external_link' );
                ?>
                <div class="<?php if( $c==1 ){
                    echo "item active";
                }
                else{
                    echo "item";
                }
                ?>" style="background-image: url(<?php echo $bg_img['url']; ?>)">
                <div class="container">
                    <div class="row slide-margin">
                        <div class="col-sm-6">
                            <div class="carousel-content">
                                <h1 class="animation animated-item-1"><?php echo $title; ?></h1>
                                <h2 class="animation animated-item-2"><?php echo $content; ?></h2>
                                <a class="btn-slide animation animated-item-3" href="<?php echo $url['url']; ?>" target="<?php echo $url['target']; ?>"><?php echo $url['title']; ?></a>
                            </div>
                        </div>
                        <div class="col-sm-6 hidden-xs animation animated-item-4">
                            <div class="slider-img">
                                <img src="<?php echo $person_img['url']; ?>" class="img-responsive">
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/.item-->
            <?php
            $c++;        
        }
    }
    wp_reset_postdata();   
    ?>
</div><!--/.carousel-inner-->
</div><!--/.carousel-->
<a class="prev hidden-xs" href="#main-slider" data-slide="prev">
    <i class="fa fa-chevron-left"></i>
</a>
<a class="next hidden-xs" href="#main-slider" data-slide="next">
    <i class="fa fa-chevron-right"></i>
</a>
</section><!--/#main-slider-->