<?php 
//Retrieving Section Title
$title = get_sub_field( 'title_' );
//Retrieving Section Details
$content = get_sub_field( 'content' );
// Retrivieng the background image 
$bg_img = get_sub_field( 'bg_img' );

if ( $bg_img ) { 
  $bg_url = $bg_img['url']; 
} else {
    $bg_url = get_template_directory_uri().'/images/partners/partner_bg.png';
} 
?>
<section id="partner" style="background-image: url(<?php echo $bg_url; ?>)">
    <div class="container">
        <div class="center wow fadeInDown">
            <?php if ( $title ) { 
            ?>
                <h2><?php echo $title; ?></h2>
            <?php }
            if ( $content ) { 
            ?>
                <p class="lead"><?php echo $content; ?></p>
            <?php }
            ?>
        </div>    

        <div class="partners">
            <ul>
                <?php
                $c=300;
                if( have_rows( 'repeater_section' ) ):
                    while ( have_rows( 'repeater_section' ) ) : the_row();
                        //Retrieving Company Logo 
                        $logo   = get_sub_field( 'company_logo' );
                        //Retrieving Company URL
                        $url    = get_sub_field( 'company_url_' );
                        if ( $logo ) { 
                        ?>
                        <li> <a href="<?php echo $url['url']; ?>" target="<?php echo $url['target']; ?>"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="<?php echo $c.'ms'; ?>" src="<?php echo $logo['url']; ?>"></a></li>
                        <?php
                        } 
                        $c = $c+300;
                    endwhile;
                endif;
                ?>
            </ul>
        </div>        
    </div><!--/.container-->
</section><!--/#partner-->