<footer class="bg-danger text-white text-center p-4 mt-5">
  <div class="container">
    <h5 class="fw-bold mb-3">Clarity. Courage. Transformation.</h5>

    <!-- Navigation Links -->
    <div class="mb-3">
      <a href="<?php echo site_url(); ?>" class="text-white mx-2">Home</a> |
      <a href="<?php echo site_url('/services'); ?>" class="text-white mx-2">Services</a> |
      <a href="<?php echo site_url('/pricing'); ?>" class="text-white mx-2">Pricing</a> |
      <a href="<?php echo site_url('/about'); ?>" class="text-white mx-2">About</a> |
      <a href="<?php echo site_url('/contact'); ?>" class="text-white mx-2">Contact</a> |
      <a href="<?php echo get_permalink(get_option('page_for_posts')); ?>" class="text-white mx-2">Blog</a>
    </div>

    <!-- Social Media Icons -->
    <div class="mb-3">
      <a href="https://facebook.com/tytalkseverything" target="_blank" class="text-white mx-2" aria-label="Facebook"><i class="bi bi-facebook"></i></a>
      <a href="https://instagram.com/tytalkseverything" target="_blank" class="text-white mx-2" aria-label="Instagram"><i class="bi bi-instagram"></i></a>
      <a href="https://linkedin.com/company/tytalkseverything" target="_blank" class="text-white mx-2" aria-label="LinkedIn"><i class="bi bi-linkedin"></i></a>
      <a href="https://tiktok.com/@tytalkseverything" target="_blank" class="text-white mx-2" aria-label="TikTok"><i class="bi bi-tiktok"></i></a>
      <a href="https://youtube.com/@tytalkseverything" target="_blank" class="text-white mx-2" aria-label="YouTube"><i class="bi bi-youtube"></i></a>
    </div>

    <!-- Credits -->
    <p class="mb-1">© <?php echo date('Y'); ?> Ty Talks Everything. All rights reserved.</p>
    <small class="text-light">
      Designed by <a href="<?php echo site_url('/trevor-contact'); ?>" class="text-white text-decoration-none">Trevor Moyo</a>
    </small>

    <!-- Back to Top Button -->
    <div class="mt-3">
      <button onclick="window.scrollTo({top: 0, behavior: 'smooth'});" class="btn btn-light btn-sm">
        <i class="bi bi-arrow-up"></i>
      </button>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>