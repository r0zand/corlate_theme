<?php
// Retreiving Font Awesome Code
$fa_code = get_sub_field( 'font_awesome_code_' );
// Retreiving Sectiopn Title 
$title = get_sub_field( 'title_' );
// Retreiving Section Content 
$content = get_sub_field( 'content' );
?>
<section id="conatcat-info">
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <div class="media contact-info wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                    <div class="pull-left">
                        <?php if ( $fa_code ) { ?>
                            <i class="<?php echo $fa_code; ?>"></i>
                        <?php
                        }
                        ?>
                    </div>
                    <div class="media-body">
                        <?php if ( $title ) { ?>
                            <h2><?php echo $title; ?></h2>
                        <?php 
                        } if ( $content ) { ?>
                            <p><?php echo $content; ?></p>
                            <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/.container-->    
</section><!--/#conatcat-info-->