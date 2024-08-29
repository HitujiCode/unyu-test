<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="format-detection" content="telephone=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <header class="p-header l-header js-header">
    <div class="p-header__inner">
      <div class="p-header__wrapper">
        <a href="<?php page_path(); ?>" class="p-header__logo-wrap">
          <h1 class="p-header__logo">
            <img src="<?php img_path('/common/logo.svg') ?>" alt="運輸労連全日本運輸産業労働組合連合会">
          </h1>
          <figure class="p-header__truck">
            <img src="<?php img_path('/common/truck.svg') ?>" alt="トラックのイラスト" />
          </figure>
        </a>
        <div class="p-header__sns-links">
          <a href="">
            <img src="<?php img_path('/common/youtube.svg') ?>" alt="YouTube" />
          </a>
          <a href="">
            <img src="<?php img_path('/common/facebook.svg') ?>" alt="Facebook" />
          </a>
        </div>
        <div class="p-header__button">
          <a href="#" target="_blank">会員ページログイン</a>
        </div>
        <div class="p-header__freedial">
          <p class="p-header__freedial-title">運輸労連 組合づくり相談</p>
          <figure class="p-header__freedial-icon">
            <img src="<?php img_path('/common/freedial.svg') ?>" alt="フリーダイヤル" />
          </figure>
          <a href="tel:0120109760" class="p-header__freedial-tel">0120-109-760</a>
        </div>

        <?php
        $navItems = [
          [
            'title' => '運輸労連とは',
            'link' => 'info',
            'img' => '/common/nav1.jpg',
            'modal' => [
              ['text' => '設立目的', 'modal_link' => 'info/about'],
              ['text' => '所在地', 'modal_link' => 'info/place'],
              ['text' => '運輸労連 加盟組合一覧', 'modal_link' => 'https://www.unyuroren.or.jp/home/info/kameikumiai.htm'],
            ],
          ],
          [
            'title' => '活動報告',
            'link' => 'news',
            'img' => '/common/nav1.jpg',
            'modal' => [
              ['text' => '活動報告一覧', 'modal_link' => 'news'],
            ],
          ],
          [
            'title' => '主な活動',
            'link' => 'activity',
            'img' => '/common/nav1.jpg',
            'modal' => [
              ['text' => '調査活動', 'modal_link' => 'activity/survey'],
              ['text' => '広報', 'modal_link' => 'activity/pr'],
              ['text' => 'トラックドライバーの労働基準', 'modal_link' => ''],
              ['text' => '産業政策', 'modal_link' => 'activity/pr/industry'],
              ['text' => '労働政策', 'modal_link' => 'activity/pr/labor'],
              ['text' => '春季生活闘争', 'modal_link' => 'activity/pr/spring'],
              ['text' => 'メンタルヘルスと法律・労働相談', 'modal_link' => 'activity/pr/mental'],
            ],
          ],
          [
            'title' => '組合づくり相談',
            'link' => 'union',
            'img' => '/common/nav1.jpg',
            'modal' => [
              ['text' => 'いつでもご相談ください', 'modal_link' => 'union/talk'],
              ['text' => 'なぜ組合が必要か', 'modal_link' => 'union/why'],
              ['text' => '組合を結成しよう', 'modal_link' => 'union/form'],
              ['text' => '運輸労連に入ろう', 'modal_link' => 'union/unyu'],
              ['text' => '組合づくりQ＆A', 'modal_link' => 'union/faq'],
            ],
          ],
        ];
        ?>

        <nav class="p-header__nav">
          <ul class="p-header__nav-list">
            <li class="p-header__nav-item">
              <a href="<?php page_path(); ?>">ホーム</a>
            </li>
            <?php foreach ($navItems as $item): ?>
              <li class="p-header__nav-modal-wrap">
                <a href="<?php page_path($item['link']); ?>"><?php echo esc_html($item['title']); ?></a>
                <?php if (isset($item['img']) || isset($item['modal'])): ?>
                  <div class="p-header__nav-modal">
                    <div class="p-header__nav-modal-inner">
                      <?php if (isset($item['img'])): ?>
                        <figure class="p-header__nav-modal-img">
                          <img src="<?php img_path($item['img']); ?>" alt="<?php echo esc_attr($item['title']); ?>" />
                        </figure>
                      <?php endif; ?>

                      <p class="p-header__nav-modal-head"><?php echo esc_html($item['title']); ?></p>

                      <?php if (isset($item['modal']) && is_array($item['modal'])): ?>
                        <ul class="p-header__nav-modal-list">
                          <?php foreach ($item['modal'] as $modalItem): ?>
                            <li class="p-header__nav-modal-item">
                              <a href="<?php page_path($modalItem['modal_link']); ?>"><?php echo esc_html($modalItem['text']); ?></a>
                            </li>
                          <?php endforeach; ?>
                        </ul>
                      <?php endif; ?>
                    </div>
                  </div>
                <?php endif; ?>
              </li>
            <?php endforeach; ?>
            <li class="p-header__nav-item">
              <a href="<?php page_path('aid'); ?>">運輸労連共済</a>
            </li>
          </ul>
        </nav>
        <button class="p-header__hamburger js-hamburger">
          <span></span>
          <span></span>
          <span></span>
          <span></span>
        </button>
      </div>
      <div class="p-header__drawer js-drawer">
        <div class="p-header__drawer-wrapper">
          <nav class="p-header__drawer-nav">
            <ul class="p-header__drawer-list">
              <li class="p-header__drawer-item">
                <a href="<?php page_path(); ?>">ホーム</a>
              </li>
              <?php foreach ($navItems as $item): ?>
                <li class="p-header__drawer-item">
                  <?php if (isset($item['modal']) && is_array($item['modal'])): ?>
                    <p class="p-header__drawer-accordion-title js-drawer-accordion"><?php echo esc_html($item['title']); ?></p>
                    <ul class="p-header__drawer-accordion-list">
                      <?php foreach ($item['modal'] as $modalItem): ?>
                        <li class="p-header__drawer-accordion-item">
                          <?php
                          if (filter_var($modalItem['modal_link'], FILTER_VALIDATE_URL)) {
                            // 外部リンクの場合
                            $link = esc_url($modalItem['modal_link']);
                            $target = ' target="_blank"';
                          } else {
                            // 内部リンクの場合
                            ob_start();
                            page_path($modalItem['modal_link']);
                            $link = ob_get_clean();
                            $target = '';
                          }
                          ?>
                          <a href="<?php echo $link; ?>" <?php echo $target; ?>><?php echo esc_html($modalItem['text']); ?></a>
                        </li>
                      <?php endforeach; ?>
                    </ul>
                  <?php else: ?>
                    <a href="<?php page_path($item['link']); ?>"><?php echo esc_html($item['title']); ?></a>
                  <?php endif; ?>
                </li>
              <?php endforeach; ?>
            </ul>
          </nav>
          <div class="p-header__drawer-sns-links">
            <a href="">
              <img src="<?php img_path('/common/youtube.svg') ?>" alt="YouTube" />
            </a>
            <a href="">
              <img src="<?php img_path('/common/facebook.svg') ?>" alt="Facebook" />
            </a>
          </div>
          <div class="p-header__drawer-en-about">
            <a href="<?php page_path('english'); ?>">About Us</a>
          </div>
          <div class="p-header__drawer-button">
            <?php
            $args = array(
              'link' => '',
              'text' => '会員ページログイン',
              'modifier' => 'blank2'
            );
            get_template_part('parts/component/c-button', null, $args);
            ?>
          </div>
        </div>
      </div>
    </div>
  </header>