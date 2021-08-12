<section id="feature" >
    <div class="container">
        <div class="center wow fadeInDown">
            <?php
                    //Retrieving Section Title
            $title      = get_sub_field( 'title' );
                    //Retrieving Section Details
            $content    = get_sub_field( 'content_' );
            if ($title ) { 
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
            <div class="features">
                <?php 
                if( have_rows( 'repeat_section' ) ){
                    while ( have_rows( 'repeat_section' ) ) { the_row();
                                //Retrieving Features Font Awesome Code
                        $code       = get_sub_field( 'font_awesome_fa_code' );
                                //Retrieving Features Title
                        $titles     = get_sub_field( 'titles' );
                                //Retrieving Features Details
                        $contents   = get_sub_field( 'content' );
                        ?>
                        <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                            <div class="feature-wrap">
                                <?php 
                                if ( $code ) { 
                                    ?>
                                    <i class="<?php echo $code; ?>"></i>
                                    <?php 
                                } 
                                if ( $titles ) { 
                                    ?>
                                    <h2><?php echo $titles; ?></h2>
                                <?php } 
                                if ( $contents ) { 
                                    ?>
                                    <h3><?php echo $contents; ?></h3>
                                    <?php 
                                } 
                                ?>
                            </div>
                        </div><!--/.col-md-4-->
                        <?php
                    }
                }
                ?>
            </div><!--/.services-->
        </div><!--/.row-->    
    </div><!--/.container-->
</section><!--/#feature-->