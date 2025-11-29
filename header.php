<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<!-- Site Header -->
<header class="bg-danger text-white p-3">
  <div class="container d-flex justify-content-between align-items-center">

    <!-- Logo + Site Name -->
    <div class="d-flex align-items-center">
      <a href="<?php echo esc_url(home_url('/')); ?>" class="d-flex align-items-center text-decoration-none text-white">
        <img src="http://tytalkseverything.local/wp-content/uploads/2025/11/copy-of-instagram-2025-profile-pic-logo-1-1.png" 
             alt="<?php bloginfo('name'); ?> Logo" 
             style="max-height:50px;" class="me-2">
        <span class="fw-bold h5 mb-0"><?php bloginfo('name'); ?></span>
      </a>
    </div>

    <!-- Simple Navigation -->
    <nav>
      <ul class="list-unstyled d-flex mb-0">
        <li class="mx-2"><a href="<?php echo esc_url(home_url('/')); ?>" class="text-white text-decoration-none">Home</a></li>
        <li class="mx-2"><a href="<?php echo site_url('/services'); ?>" class="text-white text-decoration-none">Services</a></li>
        <li class="mx-2"><a href="<?php echo site_url('/about'); ?>" class="text-white text-decoration-none">About</a></li>
        <li class="mx-2"><a href="<?php echo site_url('/contact'); ?>" class="text-white text-decoration-none">Contact</a></li>
      </ul>
    </nav>

  </div>
</header>