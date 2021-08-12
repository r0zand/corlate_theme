<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package corlatenew
 */

?>
<section id="bottom">
    <div class="container wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="widget">
                    <h3><?php echo get_field( 'footer_menu_1_','option' ); ?></h3>
                    <?php 
                    $args_main_menu = array(
                      'theme_location' => 'my-custom-footer-menu1', 
                  );
                    wp_nav_menu( $args_main_menu ); 
                    ?>
                </div>    
            </div><!--/.col-md-3-->
            <div class="col-md-3 col-sm-6">
                <div class="widget">
                    <h3><?php echo get_field( 'footer_menu_2','option' ); ?></h3>
                    <?php 
                    $args_main_menu = array(
                      'theme_location' => 'my-custom-footer-menu2', 
                  );
                    wp_nav_menu( $args_main_menu ); 
                    ?>
                </div>    
            </div><!--/.col-md-3-->
            <div class="col-md-3 col-sm-6">
                <div class="widget">
                    <h3><?php echo get_field( 'footer_menu_3','option' ); ?></h3>
                    <?php 
                    $args_main_menu = array(
                      'theme_location' => 'my-custom-footer-menu3', 
                  );
                    wp_nav_menu( $args_main_menu ); 
                    ?>
                </div>    
            </div><!--/.col-md-3-->
            <div class="col-md-3 col-sm-6">
                <div class="widget">
                    <h3><?php echo get_field( 'footer_menu_4_','option' ); ?></h3>
                    <?php 
                    $args_main_menu = array(
                      'theme_location' => 'my-custom-footer-menu4', 
                  );
                    wp_nav_menu( $args_main_menu ); 
                    ?>
                </div>    
            </div><!--/.col-md-3-->
        </div>
    </div>
</section><!--/#bottom-->

<footer id="footer" class="midnight-blue">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                &copy; <?php echo get_the_date('Y')."&nbsp"; ?><a target="_blank" href="<?php echo get_theme_mod( 'custom_setting_company_url' ); ?>" title="Free Twitter Bootstrap WordPress Themes and HTML templates" target="_blank"><?php echo get_theme_mod( 'custom_setting_text_company' ); ?></a>. <?php echo get_theme_mod( 'custom_setting_text_rights' ); ?>
            </div>
            <?php 
            $args_main_menu = array(
              'menu_class'     => 'pull-right',
              'theme_location' => 'my-custom-footer-menu', 
              'container'       => 'div',
              'container_class' => 'col-sm-6',
          );
            wp_nav_menu( $args_main_menu ); 
            ?>
        </div>
    </div>
</footer><!--/#footer-->
</body>
</html>
<?php wp_footer();
