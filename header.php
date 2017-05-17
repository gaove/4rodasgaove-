  
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <title>
  <?php wp_title('|', true, 'right');?>
  <?php bloginfo('name');?>
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="<?php bloginfo('template_directory');?>/images/favicon.png">
  <?php wp_head();?>
</head>
<body <?php body_class(); ?>>

<!-- Navigation -->
<header>
  <nav>
    <div class="container nav-menu">
      <button class="open-menu"></button>
      <div class="company"><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name');?></a>  </div> 
    <div class="responsive-menu">
      <button class="close-menu"></button>
         <div class="company"><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name');?></a>  </div> 
      <div class="main-menu">
        <?php wp_nav_menu(array('theme_location'=='primary')); ?>
      </div>
    </div>
    </div>
  </nav>
</header>






  




