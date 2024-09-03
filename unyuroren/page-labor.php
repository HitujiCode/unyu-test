<?php get_header(); ?>

<main class="p-page">

  <?php get_template_part('parts/component/c-breadcrumb') ?>

  <h1 class="l-mtb1"><?php the_title(); ?></h1>

  <?php
  $args = array(
    'text' => '',
    'img' => array(
      'src' => '/activity/industry1.jpg',
      'alt' => ''
    )
  );
  get_template_part('parts/project/p-fv-block', null, $args);
  ?>

  <div class="p-policy l-policy">
    <div class="p-policy__inner l-inner">

      <?php
      $policyItem = [
        [
          'title' => '',
          'text' => ''
        ],
      ] ?>

      <ol class="p-policy__list">
        <?php foreach ($policyItem as $item) : ?>
          <li class="p-policy__item">
            <p class="p-policy__title"><?php echo esc_html($item['title']); ?></p>
            <p class="p-policy__text"><?php echo wp_kses_post($item['text']); ?></p>
          </li>
        <?php endforeach; ?>
      </ol>
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