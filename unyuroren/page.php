<?php get_header(); ?>

<main class="p-page">

  <?php get_template_part('parts/component/c-breadcrumb') ?>

  <h1 class="l-mtb1">タイトル</h1>

  <div class="l-inner">
    <?php the_content(); ?>
  </div>

</main>

<?php get_footer(); ?>