<?php get_header(); ?>

<main class="p-post">

  <?php get_template_part('parts/component/c-breadcrumb') ?>

  <section class="p-sub-news l-common">
    <h1 class="p-sub-news__title">活動報告</h1>
    <div class="p-sub-news__container">
      <div class="p-sub-news__inner l-inner">
        <ul class="p-sub-news__list">
          <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
              <li class="p-sub-news__item">
                <?php
                $args = array(
                  'modifier' => 'small',
                );
                get_template_part('parts/project/p-news-card', null, $args);
                ?>
              </li>
            <?php
            endwhile;
          else : ?>
            <p class="p-sub-news__text">お知らせはありません</p>
          <?php endif; ?>
        </ul>
        <div class="p-sub-news__pagination">
          <?php if (function_exists('wp_pagenavi')) {
            wp_pagenavi();
          } ?>
        </div>
      </div>
    </div>
  </section>

</main>

<?php get_footer(); ?>