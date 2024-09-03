<?php get_header(); ?>

<main class="p-page">

  <?php get_template_part('parts/component/c-breadcrumb') ?>

  <?php
  // 投稿のslugを取得
  $post_slug = get_post_field('post_name', get_post());

  // slugから0を除外し、1以上の数字を抽出
  preg_match('/[1-9]\d*/', $post_slug, $matches);
  $volume_number = isset($matches[0]) ? $matches[0] : '';
  ?>

  <h1 class="l-mtb1">機関紙づくり　vol.<?php echo esc_html($volume_number); ?></h1>

  <article class="p-detail-journal l-detail-journal">
    <div class="p-detail-journal__inner l-inner">
      <h2 class="l-mtb2"><?php the_title(); ?></h2>
      <div class="p-detail-journal__container">
        <?php the_content(); ?>
      </div>
      <div class="p-detail-journal__pagination">
        <?php the_post_navigation(array(
          'prev_text' => '前のページへ',
          'next_text' => '次のページへ'
        ));
        ?>
      </div>
      <div class="p-detail-journal__button">
        <?php
        $args = array(
          'link' => '/journal',
          'text' => '機関紙づくり トップ',
          'modifier' => ''
        );
        get_template_part('parts/component/c-button', null, $args);
        ?>
      </div>
    </div>
  </article>

</main>

<?php get_footer(); ?>