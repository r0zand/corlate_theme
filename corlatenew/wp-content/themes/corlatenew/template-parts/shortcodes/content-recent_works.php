<?php 
// Retreiving Title Of Recent Works Section 
$title = get_sub_field( 'title' );
// Retreiving Content Of Recent Works Section 
$content = get_sub_field( 'content_' );
?>
<section id="recent-works" class="shortcode-item">
    <div class="container">
        <?php 
        if ( $title ) { 
            ?>
            <h2><?php echo $title; ?></h2>
            <?php 
        }
        ?>
        <div class="row">
            <?php
            if( have_rows( 'repeat_section' ) ):
                while ( have_rows( 'repeat_section' ) ) : the_row();
                    // Retreiving the Image Of works 
                    $imgs = get_sub_field( 'image' );
                    // Retreiving Titles Of the Works 
                    $titles = get_sub_field( 'titles' );
                    // Retreiving Content Of the Works 
                    $contents = get_sub_field( 'content' );
                    ?>
                    <div class="col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="<?php echo $imgs['url']; ?>" alt="<?php echo $imgs['alt']; ?>">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <?php 
                                    if ( $titles ) { 
                                        ?>
                                        <h3><a href="#"><?php echo $titles; ?></a> </h3>
                                        <?php 
                                    }
                                    if ( $contents ) {
                                        ?>
                                        <p><?php echo $contents; ?></p>
                                        <?php 
                                    }
                                    if ( $imgs ) { 
                                        ?>
                                        <a class="preview" href="<?php echo $imgs['url']; ?>" rel="prettyPhoto"><i class="fa fa-eye"></i><?php _e(' View', 'corlatenew' ); ?></a>
                                        <?php 
                                    } 
                                    ?>
                                </div> 
                            </div>
                        </div>
                    </div>   
                    <?php
                endwhile;
            endif;
            ?>
        </div><!--/.row-->
    </div><!--/.container-->
            </section><!--/#recent-works-->