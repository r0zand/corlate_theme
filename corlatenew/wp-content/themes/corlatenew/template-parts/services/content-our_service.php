 <?php 
// Retreiving Title OF Client Section 
 $title = get_sub_field( 'title' );
// Retreiving Content Of Client Section 
 $content = get_sub_field( 'content_' );
 ?>
 <div class="clients-area center wow fadeInDown">
    <?php 
    if ( $title ) {
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
  <?php
  if( have_rows( 'repeat_section' ) ):
    while ( have_rows( 'repeat_section' ) ) : the_row();
        // Retreiving Image of Client 
        $imgs = get_sub_field( 'image' );
        // Retreiving Name Of Client 
        $titles = get_sub_field( 'titles' );
        // Retreiving Details of Client
        $contents = get_sub_field( 'content' );
        ?>
        <div class="col-md-4 wow fadeInDown">
            <div class="clients-comments text-center">
                <?php 
                if( $imgs ) {
                    ?>
                    <img src="<?php echo $imgs['url']; ?>" class="img-circle" alt="<?php echo $imgs['alt']; ?>">
                <?php } 
                if ($contents ) { 
                    ?>
                    <h3><?php echo $contents; ?></h3>
                <?php }
                if ( $title ) {
                    ?>
                    <h4><?php echo $titles; ?></h4>
                <?php } 
                ?>
            </div>
        </div>
        <?php 
    endwhile;
endif;
?>
</div>

</div><!--/.container-->
</section><!--/#feature-->
