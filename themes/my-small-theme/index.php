<html>
  <head>
    <meta charset="UTF-8" />
    <title><?php my_title(); ?></title>
    <?php wp_head(); ?>
  </head>
  <body>
    <h1><?php bloginfo('name'); ?></h1>
 <?php
 if ( have_posts()):
   while( have_posts()):
     the_post();
 ?>

    <h2><?php the_title(); ?></h2>
    <?php the_excerpt(); ?>
    <p><a href="<?php the_permalink();?>">next</a><p>
 <?php
  endwhile;
 endif;
 ?>
   <?php wp_footer();?>
  </body>
</html>



