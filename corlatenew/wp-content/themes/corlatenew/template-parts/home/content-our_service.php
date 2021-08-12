<?php
//Retrieving Section Title
$title = get_sub_field( 'title' );
//Retrieving Section Content
$content = get_sub_field( 'content_' );
// Retrivieng the background image 
$bg_img = get_sub_field( 'bg_img' );
if( $bg_img ) { 
  $bg_url = $bg_img['url']; 
} else {
    $bg_url = get_template_directory_uri().'/images/services/bg_services.png';
} 
?>
<section id="services" class="service-item" style="background-image: url(<?php echo $bg_url; ?>);">
    <div class="container">
        <div class="center wow fadeInDown">
            <?php if ( $title ) { 
                ?>
                <h2><?php echo $title; ?></h2>
            <?php }
            if ( $content ) { ?>
                <p class="lead"><?php echo $content; ?></p>
            <?php }
            ?>
        </div>

        <div class="row">
            <?php
            if( have_rows( 'repeat_section' ) ):
                while ( have_rows( 'repeat_section' ) ) : the_row();
                    //Retrieving Services Image 
                    $imgs       = get_sub_field( 'image' );
                    //Retrieving Services Titles
                    $titles     = get_sub_field( 'titles' );
                    //Retrieving Services Details
                    $contents   = get_sub_field( 'content' );
                    ?>
                    <div class="col-sm-6 col-md-4">
                        <div class="media services-wrap wow fadeInDown">
                            <div class="pull-left">
                                <img class="img-responsive" src="<?php echo $imgs['url']; ?>" alt="<?php echo $imgs['alt']; ?>" >
                            </div>
                            <div class="media-body">
                                <?php if ( $titles ) { 
                                    ?>
                                    <h3 class="media-heading"><?php echo $titles; ?></h3>
                                <?php } 
                                if ( $contents ) { ?>
                                    <p><?php echo $contents; ?></p>
                                <?php }
                                ?>
                            </div>
                        </div>
                    </div>
                    <?php
                endwhile;
            endif;
            ?>
        </div><!--/.row-->
    </div><!--/.container-->
</section><!--/#services-->