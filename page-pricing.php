<?php
/* Template Name: Pricing Page */
get_header();
?>

<!-- Hero Section -->
<div class="hero text-center bg-danger text-white py-5">
  <div class="container">
    <h1>Our Services</h1>
    <p class="lead">Choose the support that fits your journey.</p>
  </div>
</div>

<!-- Service Cards -->
<div class="container my-5">
  <div class="row text-center">

    <!-- Clarity Call -->
    <div class="col-md-4 mb-4">
      <div class="card shadow-sm h-100">
        <div class="card-body">
          <h5 class="card-title">Clarity Call</h5>
          <p>15-minute introductory session to explore your needs.</p>
          <a href="<?php echo site_url('/contact'); ?>?service=clarity-call" class="btn btn-danger">Learn More</a>
        </div>
      </div>
    </div>

    <!-- Coaching Session -->
    <div class="col-md-4 mb-4">
      <div class="card shadow-sm h-100 border-danger">
        <div class="card-body">
          <h5 class="card-title">Coaching Session</h5>
          <p>One-on-one coaching tailored to your personal or professional goals.</p>
          <a href="<?php echo site_url('/contact'); ?>?service=coaching-session" class="btn btn-danger">Learn More</a>
        </div>
      </div>
    </div>

    <!-- The Everything Reset -->
    <div class="col-md-4 mb-4">
      <div class="card shadow-sm h-100">
        <div class="card-body">
          <h5 class="card-title">The Everything Reset</h5>
          <p>Comprehensive coaching and support program for lasting transformation.</p>
          <a href="<?php echo site_url('/contact'); ?>?service=everything-reset" class="btn btn-danger">Learn More</a>
        </div>
      </div>
    </div>

  </div>

  <div class="row text-center mt-4">

    <!-- Business Consulting -->
    <div class="col-md-4 mb-4">
      <div class="card shadow-sm h-100">
        <div class="card-body">
          <h5 class="card-title">Business Consulting</h5>
          <p>Strategic guidance to grow and sustain your business.</p>
          <a href="<?php echo site_url('/contact'); ?>?service=business-consulting" class="btn btn-danger">Learn More</a>
        </div>
      </div>
    </div>

    <!-- Dating & Relationships -->
    <div class="col-md-4 mb-4">
      <div class="card shadow-sm h-100">
        <div class="card-body">
          <h5 class="card-title">Dating & Relationships</h5>
          <p>Tools and insights to build stronger, healthier connections.</p>
          <a href="<?php echo site_url('/contact'); ?>?service=dating-relationships" class="btn btn-danger">Learn More</a>
        </div>
      </div>
    </div>

    <!-- Personal Recovery & Wellness -->
    <div class="col-md-4 mb-4">
      <div class="card shadow-sm h-100">
        <div class="card-body">
          <h5 class="card-title">Personal Recovery & Wellness</h5>
          <p>Support for resilience, recovery, and holistic wellness.</p>
          <a href="<?php echo site_url('/contact'); ?>?service=personal-recovery-wellness" class="btn btn-danger">Learn More</a>
        </div>
      </div>
    </div>

  </div>

  <div class="row text-center mt-4">

    <!-- Ty's H.I.L.L -->
    <div class="col-md-12 mb-4">
      <div class="card shadow-sm h-100 border-danger">
        <div class="card-body">
          <h5 class="card-title">Ty's H.I.L.L</h5>
          <p>Hope, Insight, Leadership, and Love—tailored programs available both in-person and virtually.</p>
          <a href="<?php echo site_url('/contact'); ?>?service=tys-hill" class="btn btn-danger">Learn More</a>
        </div>
      </div>
    </div>

  </div>
</div>

<?php get_footer(); ?>