<?php
// Enqueue Bootstrap + Bootstrap Icons + Custom Footer Styles
function tte_enqueue_assets() {
  // Bootstrap CSS (if not already loaded elsewhere)
  wp_enqueue_style(
    'bootstrap-css',
    'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css'
  );

  // Bootstrap Icons (needed for <i class="bi bi-facebook"></i> etc.)
  wp_enqueue_style(
    'bootstrap-icons',
    'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css'
  );

  // Custom footer tweaks
  wp_add_inline_style(
    'bootstrap-css',
    '
    footer a {
      transition: color 0.2s ease, opacity 0.2s ease;
    }
    footer a:hover {
      color: #ffc107; /* gold accent on hover */
      opacity: 0.85;
      text-decoration: none;
    }
    footer .bi {
      font-size: 1.5rem;
      transition: transform 0.2s ease, color 0.2s ease;
    }
    footer a:hover .bi {
      transform: scale(1.2);
      color: #ffc107;
    }
    footer .btn-sm {
      border-radius: 50%;
      width: 40px;
      height: 40px;
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 0;
    }
    footer .btn-sm i {
      font-size: 1.2rem;
      color: #dc3545; /* Bootstrap danger red */
      transition: transform 0.2s ease, color 0.2s ease;
    }
    footer .btn-sm:hover i {
      transform: scale(1.2);
      color: #ffc107; /* gold accent on hover */
    }
    '
  );
}
add_action('wp_enqueue_scripts', 'tte_enqueue_assets');

// Dynamic year shortcode for footer
function tte_footer_year_shortcode() {
  return date('Y');
}
add_shortcode('footer_year', 'tte_footer_year_shortcode');