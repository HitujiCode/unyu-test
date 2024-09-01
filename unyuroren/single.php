<?php get_header(); ?>

<main class="p-page">
  <div class="l-inner">

    <?php get_template_part('parts/component/c-breadcrumb') ?>

    <section class="p-detail-news l-common">
      <h1 class="p-detail-news__title">活動報告</h1>
      <div class="p-detail-news__container">
        <time datetime="<?php echo get_the_date('Y-m-d'); ?>" class="p-detail-news__date"><?php the_time('Y年m月d日'); ?></time>
        <h2><?php the_title(); ?></h2>
        <?php if (has_post_thumbnail()) : ?>
          <figure class="p-detail-news__thumbnail">
            <?php the_post_thumbnail(); ?>
          </figure>
        <?php endif; ?>
        <div class="p-detail-news__content">
          <?php echo the_content(); ?>
        </div>
        <div class="p-detail-news__button">
          <?php
          $args = array(
            'link' => '/news',
            'text' => '活動報告一覧に戻る',
            'modifier' => 'back'
          );
          get_template_part('parts/component/c-button', null, $args);
          ?>
        </div>
      </div>
    </section>
  </div>
</main>

<?php get_footer(); ?>