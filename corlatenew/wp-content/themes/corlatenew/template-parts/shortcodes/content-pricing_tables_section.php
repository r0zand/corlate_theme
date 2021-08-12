<section class="pricing-page">
    <div class="container">
        <?php 
        // Retreiving the Title Of Pricing Section 
        $title = get_sub_field( 'title_' );
        // Retreiving the Details Of Pricing Section 
        $content = get_sub_field( 'content' );
        if ( $title ) { 
            ?>
            <h2><?php echo $title; ?></h2>
            <?php 
        } 
        if ( $content ) {
            ?>
            <p class="lead"><?php echo $content; ?></p>
            <?php 
        }
        ?>
        <div class="pricing-area text-center">
            <div class="row">
                <?php
                $c = 1;
                if( have_rows( 'pricing_table_1_repeater' ) ):
                    while ( have_rows( 'pricing_table_1_repeater' ) ) : the_row();
                        // Retreiving The Image Ribbon Of Pricing Table 
                        $img        = get_sub_field( 'image_ribbon_' );
                    // Retreiving The Title Of Pricing Table 
                        $title      = get_sub_field( 'title_' );
                    // Retreiving The Dollar Per Month Of Pricing Table 
                        $dollar     = get_sub_field( 'dollar_per_month_' );
                    // Retreiving The  Disk Space Of Pricing Table
                        $disk_space = get_sub_field( 'disk_space' );
                    // Retreiving The  Dedicated RAM Of Pricing Table
                        $ram        = get_sub_field( 'dedicated_ram' );
                    // Retreiving The  Add On Domain Of Pricing Table 
                        $domain     = get_sub_field( 'addon_domain' );
                    // Retreiving The  Number Email Account Of Pricing Table
                        $email      = get_sub_field( 'email_account_' );
                    // Retreiving The Support Time Of Pricing Table
                        $support    = get_sub_field( 'support_time_' );
                    // Retreiving The Sign Up Link Of Pricing Table
                        $sign_up    = get_sub_field( 'sign_up_link_' );
                        $one        = "one";
                        $two        = "two";
                        $three      = "three";
                        $col4       = "col-sm-4 ";
                        $col6_3     = "col-sm-6 col-md-3 ";
                        ?>
                        <div class="<?php if( $c < 4 ) {
                            echo $col4;
                        }
                        else {
                            echo $col6_3;
                            }?> plan price-<?php if($c == 1) {
                                echo $one;
                                } elseif ( $c == 2 ) {
                                    echo $two;
                                    } elseif ( $c == 3 ) {
                                        echo $three; 
                                    }?> wow fadeInDown">
                                    <?php if ( $img ) {?>
                                     <img src="<?php echo $img['url']; ?>">
                                 <?php } ?>
                                 <ul>
                                    <li class="heading-<?php if($c == 1) {
                                        echo $one;
                                        }elseif( $c == 2 ) {
                                            echo $two;
                                            }elseif( $c == 3 ) {
                                                echo $three; 
                                            }?>">
                                            <?php 
                                            if ( $title) {
                                                ?>
                                                <h1><?php echo $title; ?></h1>
                                                <?php 
                                            }
                                            if ( $dollar ) { 
                                                ?>
                                                <span><?php echo $dollar; ?></span>
                                                <?php 
                                            }
                                            ?>
                                        </li>
                                        <?php 
                                        if ( $disk_space ) { 
                                            ?>
                                            <li><?php echo $disk_space; ?></li>
                                            <?php 
                                        }
                                        if ( $ram ) { 
                                            ?>
                                            <li><?php echo $ram; ?></li>
                                            <?php 
                                        }
                                        if ( $domain ) { 
                                            ?>
                                            <li><?php echo $domain; ?></li>
                                            <?php 
                                        }
                                        if ( $email ) { 
                                            ?>
                                            <li><?php echo $email; ?></li>
                                            <?php 
                                        }
                                        if ( $support ) { 
                                            ?>
                                            <li><?php echo $support; ?></li>
                                            <?php 
                                        } 
                                        ?>
                                        <li class="plan-action">
                                            <a href="<?php echo $sign_up['url']; ?>" target="<?php echo $sign_up['target']; ?>" class="btn btn-primary"><?php echo $sign_up['title']; ?></a>
                                        </li>
                                    </ul>
                                </div>
                                <?php 
                                $c++;
                            endwhile;
                        endif;
                        ?>
                    </div>
                </div><!--/pricing-area-->
            </div><!--/container-->
    </section><!--/pricing-page-->