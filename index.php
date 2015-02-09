<?php get_header(); ?>

    <section class="primary feature">
      <div class="container">
        <h2>Vehicle Repairs, Servicing and MOT</h2>
      </div>
    </section>

    <div class="content">
      <div class="container">
        <div class="primary content">
          <?php while (have_posts()) : the_post(); ?>
            <?php get_template_part('content', get_post_format()); ?>
          <?php endwhile; ?>
        </div>

        <div class="secondary content" role="complementary">
          <?php get_sidebar(); ?>
        </div>
      </div>
    </div>

<?php get_footer(); ?>
