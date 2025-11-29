<?php
/* Template Name: Blog */
get_header();
?>

<!-- Hero Section -->
<div class="hero text-white py-5 bg-danger" style="position: relative;">
  <div class="container text-center">
    <h1 class="fw-bold">Blog</h1>
    <p class="lead">Insights, stories, and updates from Ty Talks Everything.</p>
  </div>
  <!-- Fade effect -->
  <div style="position:absolute; bottom:0; left:0; right:0; height:60px;
       background: linear-gradient(to bottom, rgba(255,255,255,0) 0%, #ffffff 100%);"></div>
</div>

<!-- Blog Content -->
<div class="container my-5">
  <?php if (have_posts()) : ?>
    <div class="row">
      <?php while (have_posts()) : the_post(); ?>
        <div class="col-md-4 mb-4">
          <div class="card h-100 shadow-sm">
            <?php if (has_post_thumbnail()) : ?>
              <a href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail('medium', ['class' => 'card-img-top']); ?>
              </a>
            <?php endif; ?>
            <div class="card-body">
              <h5 class="card-title">
                <a href="<?php the_permalink(); ?>" class="text-danger fw-bold">
                  <?php the_title(); ?>
                </a>
              </h5>
              <p class="card-text"><?php echo wp_trim_words(get_the_excerpt(), 20); ?></p>
            </div>
            <div class="card-footer bg-transparent border-0">
              <a href="<?php the_permalink(); ?>" class="btn btn-danger btn-sm">Read More</a>
            </div>
          </div>
        </div>
      <?php endwhile; ?>
    </div>

    <!-- Pagination -->
    <div class="d-flex justify-content-center mt-4">
      <?php the_posts_pagination(array(
        'mid_size'  => 2,
        'prev_text' => __('« Prev', 'tytalkseverything'),
        'next_text' => __('Next »', 'tytalkseverything'),
      )); ?>
    </div>

  <?php else : ?>
    <p class="lead text-center">No blog posts found. Check back soon!</p>
  <?php endif; ?>
</div>

<?php get_footer(); ?>