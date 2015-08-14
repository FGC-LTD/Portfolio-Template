<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  	<?php // Load Meta ?>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
  	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php  wp_title('|', true, 'right'); ?></title>
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

    <?php // Load our CSS ?>
    <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_url' ); ?>" />

    <?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>

<header>
  <div class="flex-wrapper">

        <div class="header-menu">
        
          <?php wp_nav_menu(array(
              'theme_location' => 'primary',
              'container'=>'div',
              'container_id'=>'nav',
              'menu_class'=>'sub',

           )) ?>
        </div>
  </div> 

      <div class="header-toggle">
          <i class="fa fa-bars"></i>
      </div>
      
</header><!--/.header-->

