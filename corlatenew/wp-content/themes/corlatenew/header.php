<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package corlate
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri();?>/images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo get_template_directory_uri();?>/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo get_template_directory_uri();?>/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo get_template_directory_uri();?>/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?php echo get_template_directory_uri();?>/images/ico/apple-touch-icon-57-precomposed.png">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

   <?php wp_body_open(); ?>
   <header id="header">
    <div class="top-bar">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-xs-4">
                    <div class="top-number"><p><i class="fa fa-phone-square"></i><?php echo get_theme_mod( 'custom_setting_text'); ?></p></div>
                </div>
                <div class="col-sm-6 col-xs-8">
                   <div class="social">
                    <?php 
                    if ( have_rows('social_links_', 'option') ): ?>
                        <ul class="social-share">
                            <?php
                            while ( have_rows('social_links_', 'option') ): the_row(); ?>  
                                <li><a href="<?php the_sub_field('logo_links'); ?>" target="_blank"><i class="<?php the_sub_field('logo_code_'); ?>" target="_blank"></i></a></li>
                            <?php endwhile; 
                        endif; 
                        ?>
                    </ul>
                    <div class="search">
                        <form role="form">
                            <input type="text" class="search-form" autocomplete="off" placeholder="Search" value="<?php echo get_search_query();?>" name="s" size="10" id="searchfield" title="searchfield" onfocus="cleartxt(this)" onblur="cleartxt(this)"/>
                            <i  type="submit" class="fa fa-search" value="" alt="Search" id="searchbutton" title="Search"/></i>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/.container-->
</div><!--/.top-bar-->

<nav class="navbar navbar-inverse" role="banner">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only"><?php _e('Toggle navigation','corlate');?></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <?php
                   $custom_logo_id = get_theme_mod( 'custom_logo' );//Getting Logo id 
                   $image = wp_get_attachment_image_src( $custom_logo_id , 'full' ); 
                  $alt = get_post_meta( $custom_logo_id, '_wp_attachment_image_alt', true );//Getting Image Src through Logo Id
                  if ( $image ) { 
                    ?>                   
                    <a class="navbar-brand" href="<?php echo get_home_url(); ?>"><img src="<?php echo $image[0]; ?>" alt="<?php echo $alt; ?>"></a>
                    <?php 
                }
                else{
                    ?>
                    <a class="navbar-brand" href="<?php echo get_home_url(); ?>"><img src="<?php echo get_template_directory_uri().'/images/logo.png'; ?>" alt="logo"></a>
                    <?php
                }
                ?>
            </div>

            <div class="collapse navbar-collapse navbar-right">
                <?php 
                $args_main_menu = array(
                    'menu_class'     => 'nav navbar-nav',
                    'theme_location' => 'my-custom-header-menu' , 
                );
                wp_nav_menu( $args_main_menu );?>
            </div>




        </div><!--/.container-->
    </nav><!--/nav-->

    </header><!--/header-->