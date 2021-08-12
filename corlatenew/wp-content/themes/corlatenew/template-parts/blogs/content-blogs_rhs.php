<?php 
// Retreiving Comment Title
$comment_title  = get_sub_field( 'recent_comments_title' );
// Retreiving Categories Title
$category       = get_sub_field( 'categories_title' );
// Retreiving Archive Title
$archive        = get_sub_field( 'archive_title' );
// Retreiving Tag Cloud Title
$tag            = get_sub_field( 'tag_cloud_title' );
// Retreiving Gallery Title
$gallery        = get_sub_field( 'gallery_title_' );
?>
<aside class="col-md-4">
    <div class="widget search">
        <form role="form">
            <input type="text" class="form-control search_box" name="s" value="<?php echo get_search_query();?>" autocomplete="off" placeholder="Search Here">
        </form>
    </div><!--/.search-->
    
            <div class="widget categories">
                <?php 
                if ( $category ) {
                    ?>
                    <h3><?php echo $category; ?></h3>
                    <?php 
                } 
                ?>
                <div class="row">
                    <div class="col-sm-6">
                        <ul class="blog_category">
                           <?php
                           $categories = get_categories();
                           $c=1;
                           foreach ( $categories as $cat ) {
                            if( $cat->name!='Uncategorized' ){
                                ?>     
                                <li><a href="<?php echo get_category_link($cat->cat_ID);?>"><?php echo $cat->name; ?> <span class="badge"><?php echo $cat->category_count;  ?></span></a></li>
                                <?php
                            }
                        }
                        ?>
                    </ul>
                </div>
            </div>                     
        </div><!--/.categories-->

        <div class="widget archieve">
           <?php 
           if ( $archive ) { 
            ?>
            <h3><?php echo $archive; ?></h3>
            <?php 
            }
            ?>
        <div class="row">
            <div class="col-sm-12">
                <ul class="blog_archieve">
                    <?php $args = array('before' => '<i class="fa fa-angle-double-right"></i>',
                        'show_post_count' => true,
                    );
                    wp_get_archives($args); ?>
                </ul>
            </div>
        </div>                     
    </div><!--/.archieve-->

    <div class="widget tags">
        <?php 
        if ( $tag ) { 
            ?>
            <h3><?php echo $tag; ?></h3>
            <?php 
        }
        ?>
        <ul class="tag-cloud">
            <?php 
            $tags = get_tags();
            foreach ( $tags as $tag ) {
                ?>    
                <li><a class="btn btn-xs btn-primary" href="<?php echo get_tag_link($tag->term_id);?>"><?php echo $tag->name;?></a></li>
                <?php
            } 
            ?>
        </ul>
    </div><!--/.tags-->

    <div class="widget blog_gallery">
       <?php 
       if ( $gallery ) {
        ?>
        <h3><?php echo $gallery; ?></h3>
        <?php 
        }
        ?>
    <ul class="sidebar-gallery">
        <?php 
        if( have_rows( 'gallery_' ) ):
            while ( have_rows( 'gallery_' ) ) : the_row();
                $img = get_sub_field( 'image_' );

                ?>
                <li><a href="<?php echo $img; ?>"><img src="<?php echo $img; ?>" /></a></li>
                <?php
            endwhile;
        endif;
        ?>
    </ul>
</div><!--/.blog_gallery-->
</aside>  
</div><!--/.row-->
</div>
    </section><!--/#blog-->