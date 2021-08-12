 <section id="contact-info">
    <div class="center"> 
        <?php
        // Retreiving the Title One Of the Page 
        $title1     = get_sub_field( 'title_1' );
        // Retreiving the Content One Of the Page 
        $content1   = get_sub_field( 'content1_' );
        // Retreiving the iframe for Google Map 
        $map        = get_sub_field( 'google_map_iframe_' );
        // Retreiving the Title Two Of the Page 
        $title2     = get_sub_field( 'title_2_' );
        // Retreiving the Content Two Of the Page 
        $content2   = get_sub_field( 'content2' );
        // Retreiving shortcode for the contact form
        $form       = get_sub_field( 'form_shortcode' );
        // Retrivieng the background image 
        $bg_img = get_sub_field( 'bg_img' );

        if( $bg_img ) { 
          $bg_url = $bg_img['url']; 
        } else {
        $bg_url = get_template_directory_uri().'/images/map.jpg';
        } 
        if ( $title1 ) { 
            ?>               
            <h2><?php echo $title1; ?></h2>
            <?php 
        }
        if ( $title2 ) {
            ?>
            <p class="lead"><?php echo $content1; ?></p>
            <?php 
        }
        ?>
    </div>
    <div class="gmap-area" style="background-image: url(<?php echo $bg_url; ?>)">
<div class="container">
    <div class="row">
        <div class="col-sm-5 text-center">
            <?php if ( $map ) { 
                ?>
                <div class="gmap">
                    <?php echo $map; ?>
                </div>
                <?php 
            }
            ?>
        </div>

        <div class="col-sm-7 map-content">
            <ul class="row">
                <?php 
                $c = 1;
                if( have_rows( 'repeat_section' ) ):
                    while ( have_rows( 'repeat_section' ) ) : the_row();
                                // Retreiving the Office Description 
                        $office     = get_sub_field( 'office_description' );
                                // Retreiving the Street Address
                        $street     = get_sub_field( 'street_address' );
                                // Retreiving the Main Address
                        $address    = get_sub_field( 'main_address' );
                                // Retreiving the Phone Number 
                        $phone      = get_sub_field( 'phone_number' );
                                // Retreiving the Email
                        $email      = get_sub_field( 'email_' );
                        ?>
                        <li class="<?php if ( $c % 2 == 1 ){
                            echo "col-sm-6";
                        }
                        ?>">
                        <address>
                            <?php 
                            if ( $office ) { 
                                ?>
                                <h5><?php echo $office; ?></h5>
                                <?php 
                            }
                            if ( $street ) {
                                ?> 
                                <p><?php echo $street; ?><br>
                                    <?php echo $address; ?></p>
                                    <?php 
                                }
                                if ( $phone ) { 
                                    ?>
                                    <p><?php echo $phone; ?><br>
                                        <?php echo $email; ?></p>
                                        <?php 
                                    }
                                    ?>
                                </address>
                            </li>
                            <?php
                            $c++;
                        endwhile;
                    endif;
                    ?>
                </ul>
            </div>
        </div>
    </div>
</div>
</section>  <!--/gmap_area -->

<section id="contact-page">
    <div class="container">
        <div class="center">
            <?php if ( $title2 ) {         
                ?>
                <h2><?php echo $title2; ?></h2>
                <?php 
            }
            if ( $content2 ) { 
                ?>
                <p class="lead"><?php echo $content2; ?></p>
                <?php 
            } 
            ?>
        </div> 
        <div class="row contact-wrap"> 
            <div class="status alert alert-success" style="display: none"></div>
            <?php 
            if ( $form ) { 
                ?>
                <form id="main-contact-form" class="contact-form" name="contact-form" method="post" action="sendemail.php">
                    <div class="col-sm-5 col-sm-offset-1">
                        <?php echo do_shortcode( $form ); ?>
                    </form> 
                    <?php 
                }
                ?>
            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#contact-page-->
