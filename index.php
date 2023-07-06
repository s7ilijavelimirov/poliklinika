<?php

/**
 * The main template file

 */
get_header(); ?>

<?php
if (have_posts()) :
  while (have_posts()) :
    the_post();
  echo the_title();
  echo the_content();
  endwhile;
else :
  echo 'No post found!';
endif;

get_footer();
