<?php
/* Template Name: Trevor Contact Page */
get_header();
?>

<!-- Hero Section -->
<div class="hero text-center text-white py-5" 
     style="background: linear-gradient(135deg, #000000 0%, #dc3545 100%);">
  <div class="container">
    <h1>Contact Trevor Moyo</h1>
    <p class="lead">Interested in working with me? Let’s connect.</p>
  </div>
</div>

<!-- Connect With Me Section -->
<div class="connect-section py-5">
  <div class="container">
    <h2 class="text-center mb-5 fw-bold">Connect With Me</h2>
    <div class="row text-center mb-4">
      <!-- Email -->
      <div class="col-md-3 mb-4">
        <div class="card shadow-sm h-100 border-0 contact-card">
          <div class="card-body">
            <i class="bi bi-envelope-fill fs-1 text-danger" aria-label="Email"></i>
            <p class="mt-2">
              <a href="mailto:trevie216@gmail.com" class="text-danger text-decoration-none">
                trevie216@gmail.com
              </a>
            </p>
          </div>
        </div>
      </div>

      <!-- WhatsApp -->
      <div class="col-md-3 mb-4">
        <div class="card shadow-sm h-100 border-0 contact-card">
          <div class="card-body">
            <i class="bi bi-whatsapp fs-1 text-success" aria-label="WhatsApp"></i>
            <p class="mt-2">
              <a href="https://wa.me/263714052404?text=Hi%20Trevor,%20I%27m%20interested%20in%20your%20work"
                 target="_blank"
                 class="text-danger text-decoration-none">
                +263 714 052 404
              </a>
            </p>
          </div>
        </div>
      </div>

      <!-- TikTok -->
      <div class="col-md-3 mb-4">
        <div class="card shadow-sm h-100 border-0 contact-card">
          <div class="card-body">
            <i class="bi bi-tiktok fs-1 text-dark" aria-label="TikTok"></i>
            <p class="mt-2">
              <a href="https://www.tiktok.com/@trey_yrn" target="_blank" class="text-danger text-decoration-none">
                @trey_yrn
              </a>
            </p>
          </div>
        </div>
      </div>

      <!-- Facebook -->
      <div class="col-md-3 mb-4">
        <div class="card shadow-sm h-100 border-0 contact-card">
          <div class="card-body">
            <i class="bi bi-facebook fs-1 text-primary" aria-label="Facebook"></i>
            <p class="mt-2">
              <a href="https://www.facebook.com/treviemoyo/" target="_blank" class="text-danger text-decoration-none">
                facebook.com/treviemoyo
              </a>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Contact Form -->
<div class="container my-5">
  <div class="row justify-content-center mb-5">
    <div class="col-md-8">
      <h2 class="text-center mb-4">Send Me a Message</h2>
      <form method="post" action="<?php echo esc_url(admin_url('admin-post.php')); ?>">
        <input type="hidden" name="action" value="trevor_contact_form">

        <div class="mb-3">
          <label for="name" class="form-label">Name</label>
          <input type="text" class="form-control" id="name" name="name" required>
        </div>

        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input type="email" class="form-control" id="email" name="email" required>
        </div>

        <div class="mb-3">
          <label for="message" class="form-label">Message</label>
          <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
        </div>

        <button type="submit" class="btn btn-danger">Send Message</button>
      </form>
    </div>
  </div>
</div>

<?php get_footer(); ?>