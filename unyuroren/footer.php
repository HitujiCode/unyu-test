<button class="c-pagetop js-pagetop" aria-label="ページトップへ戻る"></button>

<footer class="p-footer l-footer">
  <div class="p-footer__inner l-inner">
    <div class="p-footer__container">
      <div class="p-footer__info">
        <figure class="p-footer__logo">
          <img src="<?php img_path('/common/logo.svg') ?>" alt="運輸労連全日本運輸産業労働組合連合会">
        </figure>
        <address class="p-footer__address">
          〒100-0013<br>
          東京都千代田区霞が関3丁目3-3 全日通霞が関ビル5F<br>
          TEL：03-3503-2171
        </address>
        <div class="p-footer__sns-links">
          <a href="">
            <img src="<?php img_path('/common/youtube.svg') ?>" alt="YouTube" />
          </a>
          <a href="">
            <img src="<?php img_path('/common/facebook.svg') ?>" alt="Facebook" />
          </a>
        </div>
      </div>

      <?php
      $navItems = [
        [
          'title' => '運輸労連とは',
          'link' => 'info',
          'sub' => [
            ['text' => '設立目的', 'link' => 'info/about'],
            ['text' => '所在地', 'link' => 'info/place'],
            ['text' => '運輸労連 加盟組合一覧', 'link' => 'https://www.unyuroren.or.jp/home/info/kameikumiai.htm'],
          ],
        ],
        [
          'title' => '活動報告',
          'link' => 'news',
          'sub' => [
            ['text' => '活動報告一覧', 'link' => 'news'],
          ],
        ],
        [
          'title' => '主な活動',
          'link' => 'activity',
          'sub' => [
            ['text' => '調査活動', 'link' => 'activity/survey'],
            ['text' => '広報', 'link' => 'activity/pr'],
            ['text' => 'トラックドライバーの<wbr>労働基準', 'link' => 'activity/pr/issue'],
            ['text' => '産業政策', 'link' => 'activity/pr/industry'],
            ['text' => '労働政策', 'link' => 'activity/pr/labor'],
            ['text' => '春季生活闘争', 'link' => 'activity/pr/spring'],
            ['text' => 'メンタルヘルスと法律・労働相談', 'link' => 'activity/pr/mental'],
          ],
        ],
        [
          'title' => '組合づくり相談',
          'link' => 'union',
          'sub' => [
            ['text' => 'いつでもご相談ください', 'link' => 'union/talk'],
            // ['text' => 'なぜ組合が必要か', 'link' => 'union/why'],
            ['text' => '組合を結成しよう', 'link' => 'union/form'],
            ['text' => '運輸労連に入ろう', 'link' => 'union/unyu'],
            ['text' => '組合づくりQ＆A', 'link' => 'union/faq'],
          ],
        ],
        [
          'title' => '運輸労連共済',
          'link' => 'aid',
        ],
        [
          'title' => 'ご意見・お問い合わせ',
          'link' => 'contact',
        ],
      ];

      $allowed_tags = array(
        'wbr' => array(),
      );
      ?>
      <!-- PC -->
      <div class="p-footer__pc">
        <ul class="p-footer__nav">
          <?php foreach ($navItems as $item): ?>
            <li class="p-footer__nav-item">
              <?php if (isset($item['sub']) && is_array($item['sub'])): ?>
                <a href="<?php page_path($item['link']); ?>" class="p-footer__nav-head"><?php echo esc_html($item['title']); ?></a>
                <ul class="p-footer__nav-sub-list">
                  <?php foreach ($item['sub'] as $subitem): ?>
                    <li class="p-footer__nav-sub-item">
                      <?php
                      if (filter_var($subitem['link'], FILTER_VALIDATE_URL)) {
                        // 外部リンクの場合
                        $link = esc_url($subitem['link']);
                        $target = ' target="_blank"';
                      } else {
                        // 内部リンクの場合
                        ob_start();
                        page_path($subitem['link']);
                        $link = ob_get_clean();
                        $target = '';
                      }
                      ?>
                      <a href="<?php echo $link; ?>" <?php echo $target; ?>><?php echo wp_kses($subitem['text'], $allowed_tags); ?></a>
                    </li>
                  <?php endforeach; ?>
                </ul>
              <?php else: ?>
                <a href="<?php page_path($item['link']); ?>" class="p-footer__nav-head"><?php echo esc_html($item['title']); ?></a>
              <?php endif; ?>
            </li>
          <?php endforeach; ?>
        </ul>
      </div>
      <!-- SP -->
      <div class="p-footer__sp">
        <ul class="p-footer__nav">
          <?php foreach ($navItems as $item): ?>
            <li class="p-footer__nav-item">
              <?php if (isset($item['sub']) && is_array($item['sub'])): ?>
                <p class="p-footer__nav-head js-footer-accordion"><?php echo esc_html($item['title']); ?></p>
                <ul class="p-footer__nav-sub-list">
                  <?php foreach ($item['sub'] as $subItem): ?>
                    <li class="p-footer__nav-sub-item">
                      <?php
                      if (filter_var($subItem['link'], FILTER_VALIDATE_URL)) {
                        // 外部リンクの場合
                        $link = esc_url($subItem['link']);
                        $target = ' target="_blank"';
                      } else {
                        // 内部リンクの場合
                        ob_start();
                        page_path($subItem['link']);
                        $link = ob_get_clean();
                        $target = '';
                      }
                      ?>
                      <a href="<?php echo $link; ?>" <?php echo $target; ?>><?php echo wp_kses_post($subItem['text']); ?></a>
                    </li>
                  <?php endforeach; ?>
                </ul>
              <?php else: ?>
                <a href="<?php page_path($item['link']); ?>" class="p-footer__nav-head"><?php echo esc_html($item['title']); ?></a>
              <?php endif; ?>
            </li>
          <?php endforeach; ?>
        </ul>
      </div>

    </div>
    <div class="p-footer__bottom">

      <?php
      $linkItem = [
        ['text' => 'プライバシーポリシー', 'link' => 'privacy'],
        ['text' => 'About Us', 'link' => 'english'],
        ['text' => 'リンク', 'link' => 'link'],
      ];
      ?>

      <ul class="p-footer__links">
        <?php foreach ($linkItem as $item) : ?>
          <li class="p-footer__link">
            <a href="<?php page_path($item['link']); ?>"><?php echo esc_html($item['text']); ?></a>
          </li>
        <?php endforeach; ?>
      </ul>
      <div class="p-footer__copyright">
        <small>&copy; 1999-<?php echo date('Y'); ?> unyuroren</small>
      </div>
    </div>
  </div>

</footer>
<?php wp_footer(); ?>
</body>

</html>