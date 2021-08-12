<?php 
//Retrieving Section Title
$title = get_sub_field( 'title' );
//Retrieving Section Content
$content = get_sub_field( 'content_' );
?><section id="recent-works">
    <div class="container">
        <div class="center wow fadeInDown">
            <?php if ( $title ) { 
                ?>
                <h2><?php echo $title; ?></h2>
            <?php }
            if ( $content ) { 
                ?>
                <p class="lead"><?php echo $content; ?></p>
                <?php 
            }
            ?>
        </div>

        <div class="row">
            <?php
            if( have_rows( 'repeat_section' ) ):
                while ( have_rows( 'repeat_section' ) ) : the_row();
                    //Retrieving Recent Works Image 
                    $imgs       = get_sub_field( 'image' );
                    //Retrieving Recent Works Title
                    $titles     = get_sub_field( 'titles' );
                    //Retrieving Recent Works Details
                    $contents   = get_sub_field( 'content' );
                    // Retrieving link of post 
                    $link        = get_sub_field( 'link_');

                    ?>
                    <div class="col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="<?php echo $imgs['url']; ?>" alt="<?php echo $imgs['alt']; ?>">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <?php if ( $titles ) { 
                                        ?>
                                        <h3><a href="<?php echo $link['url']; ?>"><?php echo $titles; ?></a> </h3>
                                        <?php 
                                    } 
                                    if ( $contents ) { 
                                        ?>
                                        <p><?php echo $contents; ?></p>
                                        <?php 
                                    }
                                    ?>
                                    <a class="preview" href="<?php echo $imgs['url']; ?>" rel="prettyPhoto"><i class="fa fa-eye"></i><?php _e( 'View', 'corlatenew' ); ?></a>
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