<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">

<head>

  <title><?= get_the_title() ?></title>
  <!-- meta tag header includes -->
  <meta name="author" content="Taylor Callsen" />
  <meta name="description" content="<?= get_the_excerpt() ?>" />
  <meta name="keywords" content="<?= $metaTags ?>">
  <link rel="canonical" href="<?= wp_get_canonical_url() ?>">
  <meta name="robots" content="index, follow">
  <!-- compatability header includes -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/node_modules/bootstrap/dist/css/bootstrap.min.css">
  <!-- open graph header includes -->
  <meta property="og:title" content="<?= get_the_title() ?>" />
  <meta property="og:url" content="<?= wp_get_canonical_url() ?>" />
  <meta property="og:description" content="<?= get_the_excerpt() ?>" />

  <!-- wordpress header includes -->
  <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
  <header id="navbar" class="d-flex align-items-center justify-content-between container">
    <?php
    $logo = wp_get_attachment_image_src(get_theme_mod('custom_logo'), 'thumbnail');
    if ($logo) {
    ?>
      <a href="<?php echo get_home_url(); ?>" class="logo">
        <img class="img-fluid" alt="<?php bloginfo('name'); ?>" src="<?php echo $logo[0]; ?>">
      </a>
    <?php } ?>
    <nav>
      <?php  /* Mobile menu Bootstrap*/
      wp_nav_menu(array(
        'theme_location' => 'main-menu',
        'theme_location'  => 'main-menu'
      ));
      ?>
    </nav>
  </header>