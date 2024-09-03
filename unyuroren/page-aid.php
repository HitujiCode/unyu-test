<?php get_header(); ?>

<main class="p-page">

  <?php get_template_part('parts/component/c-breadcrumb') ?>

  <h1 class="l-mtb1"><?php the_title(); ?></h1>

  <div class="p-toc l-common">
    <div class="p-toc__inner l-inner">
      <?php the_content(); ?>
    </div>
  </div>

</main>

<?php get_footer(); ?>