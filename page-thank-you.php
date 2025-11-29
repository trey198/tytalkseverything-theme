<?php
/* Template Name: Thank You Page */
get_header();
?>

<!-- Hero Section -->
<div class="hero text-center text-white py-5" 
     style="background: linear-gradient(135deg, #198754 0%, #0f5132 100%);">
  <div class="container">
    <h1>Thank You!</h1>
    <p class="lead">Your message has been sent successfully.</p>
  </div>
</div>

<!-- Confirmation Message -->
<div class="container my-5 text-center">
  <p class="lead">
    I appreciate you reaching out. I’ll get back to you as soon as possible.
  </p>
  <a href="<?php echo site_url('/'); ?>" class="btn btn-danger mt-4">Return to Homepage</a>
  <a href="https://linkedin.com/in/trevormoyo" target="_blank" class="btn btn-outline-success mt-4">Connect on LinkedIn</a>
</div>

<?php get_footer(); ?>