<?php
/* Template Name: Personal Recovery & Wellness */
get_header();
?>

<!-- Hero Section -->
<div class="hero text-white py-5 bg-danger" style="position: relative;">
  <div class="container text-center">
    <h1 class="fw-bold">Personal Recovery & Wellness</h1>
    <p class="lead">Holistic support for mental, emotional, and physical well-being.</p>
    <a href="<?php echo site_url('/contact'); ?>" class="btn btn-light btn-lg mt-3">Start Your Journey</a>
  </div>
  <!-- Fade effect -->
  <div style="position:absolute; bottom:0; left:0; right:0; height:60px;
       background: linear-gradient(to bottom, rgba(255,255,255,0) 0%, #ffffff 100%);"></div>
</div>

<!-- Content -->
<div class="container my-5">
  <h2 class="text-danger">Our Wellness Services</h2>
  <p class="lead">We provide tools and guidance to help you recover, recharge, and thrive.</p>
  <ul>
    <li>Stress management techniques</li>
    <li>Mindfulness and meditation coaching</li>
    <li>Personalized wellness plans</li>
    <li>Resilience training</li>
  </ul>
</div>

<!-- CTA -->
<div class="bg-danger text-white text-center py-5">
  <div class="container">
    <h2>Prioritize Your Wellness Today</h2>
    <a href="<?php echo site_url('/contact'); ?>" class="btn btn-light btn-lg">Start Your Journey</a>
  </div>
</div>

<?php get_footer(); ?>