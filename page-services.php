<?php
/* Template Name: Services Page */
get_header();
?>

<!-- Hero Section -->
<div class="hero text-center bg-danger text-white py-5">
  <div class="container">
    <h1>Our Services</h1>
    <p class="lead">Explore the areas where Ty can support your journey.</p>
  </div>
</div>

<!-- Services Overview Grid -->
<div class="container my-5">
  <div class="row text-center">

    <!-- Business Consulting -->
    <div class="col-md-4 mb-4">
      <div class="card h-100 shadow-sm">
        <div class="card-body">
          <h5 class="card-title">Business Consulting</h5>
          <p class="card-text">Strategic guidance to grow and sustain your business.</p>
          <a href="<?php echo site_url('/business-consulting'); ?>" class="btn btn-danger">Learn More</a>
        </div>
      </div>
    </div>

    <!-- Bookkeeping -->
    <div class="col-md-4 mb-4">
      <div class="card h-100 shadow-sm">
        <div class="card-body">
          <h5 class="card-title">Bookkeeping</h5>
          <p class="card-text">Organized financial records to keep your business on track.</p>
          <a href="<?php echo site_url('/bookkeeping'); ?>" class="btn btn-danger">Learn More</a>
        </div>
      </div>
    </div>

    <!-- Dating & Relationships -->
    <div class="col-md-4 mb-4">
      <div class="card h-100 shadow-sm">
        <div class="card-body">
          <h5 class="card-title">Dating & Relationships</h5>
          <p class="card-text">Tools and insights to build stronger, healthier connections.</p>
          <a href="<?php echo site_url('/dating-relationships'); ?>" class="btn btn-danger">Learn More</a>
        </div>
      </div>
    </div>

  </div>

  <div class="row text-center mt-4">

    <!-- Wellness -->
    <div class="col-md-6 mb-4">
      <div class="card h-100 shadow-sm">
        <div class="card-body">
          <h5 class="card-title">Personal Recovery & Wellness</h5>
          <p class="card-text">Support for resilience, recovery, and holistic wellness.</p>
          <a href="<?php echo site_url('/wellness'); ?>" class="btn btn-danger">Learn More</a>
        </div>
      </div>
    </div>

    <!-- Ty's H.I.L.L -->
    <div class="col-md-6 mb-4">
      <div class="card h-100 shadow-sm border-danger">
        <div class="card-body">
          <h5 class="card-title">Ty's H.I.L.L</h5>
          <p class="card-text">Hope, Insight, Leadership, and Love—our signature framework for transformation.</p>
          <a href="<?php echo site_url('/tys-hill'); ?>" class="btn btn-danger">Learn More</a>
        </div>
      </div>
    </div>

  </div>
</div>

<!-- Call to Action -->
<div class="text-center my-5">
  <a href="<?php echo site_url('/pricing'); ?>" class="btn btn-danger btn-lg mx-2">View Pricing</a>
  <a href="<?php echo site_url('/contact'); ?>" class="btn btn-outline-danger btn-lg mx-2">Book a Session</a>
</div>

<?php get_footer(); ?>