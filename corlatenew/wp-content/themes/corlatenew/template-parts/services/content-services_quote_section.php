<div class="get-started center wow fadeInDown">
   <?php
    // Retreiving the Title Of Quote Section 
   $title      = get_sub_field( 'title_' );
    // Retreiving the Content of Quote Section 
   $content    = get_sub_field( 'content_' );
    // Retreiving the Link Of Quote Section 
   $text_link  = get_sub_field( 'text_link' );
   if ( $title ) { 
    ?>
    <h2><?php echo $title; ?></h2>
    <?php }
    if ( $content ) { 
    ?>
    <p class="lead"><?php echo $content; ?></p>
    <?php }
    if ( $text_link ) { 
    ?>
    <div class="request">
        <h4><a href="<?php echo $text_link['url']; ?>"><?php echo $text_link['title']; ?></a></h4>
    </div>
    <?php }
    ?>
</div><!--/.get-started-->