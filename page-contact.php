<?php
/* Template Name: Contact Page */
get_header();
?>

<!-- Hero Section -->
<div class="hero text-center bg-danger text-white py-5">
  <div class="container">
    <h1>Contact Us</h1>
    <p class="lead">We’re here to support your journey.</p>
  </div>
</div>

<!-- Contact Form Section -->
<div class="container my-5">

  <!-- Service Banner -->
  <?php if (isset($_GET['service']) && !empty($_GET['service'])): ?>
    <div class="alert alert-danger mb-4">
      <strong>You are inquiring about:</strong>
      <?php echo esc_html(ucwords(str_replace('-', ' ', $_GET['service']))); ?>
    </div>
    <!-- Hidden field to carry service info with submission -->
    <input type="hidden" name="service" value="<?php echo esc_html($_GET['service']); ?>">
  <?php endif; ?>

  <!-- Contact Form -->
  <form method="post" action="">
    <div class="mb-3">
      <label for="name" class="form-label">Your Name</label>
      <input type="text" class="form-control" id="name" name="name" required>
    </div>
    <div class="mb-3">
      <label for="email" class="form-label">Your Email</label>
      <input type="email" class="form-control" id="email" name="email" required>
    </div>
    <div class="mb-3">
      <label for="message" class="form-label">Message</label>
      <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
    </div>
    <button type="submit" class="btn btn-danger">Send Message</button>
  </form>
</div>

<?php get_footer(); ?>