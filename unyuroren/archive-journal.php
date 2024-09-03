<?php get_header(); ?>

<main class="p-post">

  <?php get_template_part('parts/component/c-breadcrumb') ?>

  <h1 class="l-mtb1">機関紙づくり</h1>

  <?php
  $args = array(
    'text' => '運輸労連機関誌2013年12月号から2015年12月号まで連載されたものです。',
    'img' => array(
      'src' => '/pr/journal_fv.jpg',
      'alt' => '折りたたまれた雑誌が重なっている写真'
    )
  );
  get_template_part('parts/project/p-fv-block', null, $args);
  ?>

  <div class="p-journal l-journal">
    <div class="p-journal__inner l-inner">
      <?php
      query_posts(array(
        'post_type' => 'journal',
        'order' => 'ASC',
        'orderby' => 'date',
        'posts_per_page' => -1,
      ));
      ?>

      <?php if (have_posts()) : ?>
        <ul class="p-journal__list">
          <?php while (have_posts()) : the_post(); ?>
            <li class="p-journal__item">
              <a href="<?php the_permalink(); ?>" class="p-journal__card">
                <figure class="p-journal__card-img">
                  <?php if (has_post_thumbnail()) :
                    $thumbnail_id = get_post_thumbnail_id(get_the_ID());
                    $alt_text = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);
                  ?>
                    <img src="<?php echo esc_url(get_the_post_thumbnail_url(get_the_ID(), 'full')); ?>" alt="<?php echo esc_attr($alt_text); ?>" />
                  <?php else : ?>
                    <img src="<?php echo esc_url(img_path('/common/noimage.jpg')); ?>" alt="" />
                  <?php endif; ?>
                </figure>
                <hgroup class="p-journal__title">
                  <?php
                  // スラッグを取得して数字を抽出し、0を除外
                  $post_slug = get_post_field('post_name', get_post());
                  preg_match('/[1-9]\d*/', $post_slug, $matches);
                  $volume_number = isset($matches[0]) ? $matches[0] : '';
                  ?>
                  <p class="p-journal__card-num"><?php echo esc_html($volume_number); ?></p>
                  <h2 class="p-journal__card-title"><?php the_title(); ?></h2>
                </hgroup>
              </a>
            </li>
          <?php endwhile; ?>
        </ul>
      <?php else : ?>
        <p>まだ投稿はありません。</p>
      <?php endif; ?>

      <?php wp_reset_query(); ?>
    </div>
  </div>

  <?php
  $args = [
    [
      'link' => '/activity',
      'text' => '主な活動トップ',
    ],
    [
      'link' => '/activity/survey',
      'text' => '調査活動'
    ],
    [
      'link' => '/activity/pr',
      'text' => '広報'
    ],
    [
      'link' => '/activity/pr/issue',
      'text' => 'トラックドライバーの労働基準'
    ],
    [
      'link' => '/activity/pr/industry',
      'text' => '産業政策'
    ],
    [
      'link' => '/activity/pr/labor',
      'text' => '労働政策'
    ],
    [
      'link' => '/activity/pr/spring',
      'text' => '春季生活闘争'
    ],
    [
      'link' => '/activity/pr/mental',
      'text' => 'メンタルヘルスと法律・労働相談'
    ]
  ];

  get_template_part('parts/project/p-link-block', null, $args);
  ?>

</main>

<?php get_footer(); ?>