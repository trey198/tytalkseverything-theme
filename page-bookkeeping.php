<?php
/* Template Name: Bookkeeping */
get_header();
?>

<div class="hero text-white py-5 bg-danger">
  <div class="container text-center">
    <h1 class="fw-bold">Bookkeeping</h1>
    <p class="lead">Accurate and reliable bookkeeping services to keep your finances organized.</p>
  </div>
</div>

<div class="container my-5">
  <!-- Existing descriptive content -->
  <p>Our bookkeeping services ensure your records are precise, compliant, and stress-free.</p>

  <!-- Book Consultation button -->
  <div class="text-center mt-4">
    <a href="<?php echo site_url('/contact'); ?>?service=bookkeeping" class="btn btn-danger btn-lg">
      Book Consultation
    </a>
  </div>
</div>

<?php get_footer(); ?>