<?php get_header(); ?>

<main class="p-home">

  <div class="p-mv">
    <div class="p-mv__inner">
      <div class="p-mv__container">
        <div class="p-mv__swiper-wrap">
          <div class="p-mv__swiper swiper js-mv-swiper">
            <ul class="p-mv__wrapper swiper-wrapper">
              <li class="p-mv__slide swiper-slide">
                <figure class="p-mv__img">
                  <picture>
                    <source srcset="<?php img_path('/top/mv1.png') ?>" media="(min-width: 768px)" />
                    <img src="<?php img_path('/top/mv1_sp.png') ?>" alt="トラック正面と運転する手元" width="335" height="176" />
                  </picture>
                </figure>
                <figure class="p-mv__catch-img">
                  <img src="<?php img_path('/top/mv1-catch.svg') ?>" alt="だれもが安心して働ける職場づくりをめざして" />
                </figure>
              </li>
              <li class="p-mv__slide swiper-slide">
                <figure class="p-mv__img">
                  <picture>
                    <source srcset="<?php img_path('/top/mv2.jpg') ?>" media="(min-width: 768px)" />
                    <img src="<?php img_path('/top/mv2_sp.jpg') ?>" alt="演説者と聴衆" width="335" height="176" />
                  </picture>
                </figure>
                <div class="p-mv__catch">
                  <p class="p-mv__title">運輸労連第56回<br>定期大会開催</p>
                </div>
              </li>
              <li class="p-mv__slide swiper-slide">
                <figure class="p-mv__img">
                  <picture>
                    <source srcset="<?php img_path('/top/mv3.jpg') ?>" media="(min-width: 768px)" />
                    <img src="<?php img_path('/top/mv3_sp.jpg') ?>" alt="アンケート用紙を記入している手元" width="335" height="176" />
                  </picture>
                </figure>
                <div class="p-mv__catch">
                  <p class="p-mv__title">ドライバーアンケート<br>調査結果報告書</p>
                </div>
              </li>
            </ul>
          </div>
          <div class="p-mv__next swiper-button-next">
            <img src="<?php img_path('/common/circle-arrow.svg') ?>" alt="次へ" />
          </div>
          <div class="p-mv__prev swiper-button-prev">
            <img src="<?php img_path('/common/circle-arrow.svg') ?>" alt="前へ" />
          </div>
        </div>
        <div class="p-mv__thumbnail swiper js-mv-thumbnail">
          <ul class="p-mv__thumbnail-wrapper swiper-wrapper">
            <li class="p-mv__thumbnail-slide swiper-slide">
              <figure class="p-mv__thumbnail-img">
                <img src="<?php img_path('/top/mv1_sp.png') ?>" alt="トラック正面と運転する手元" />
              </figure>
              <figure class="p-mv__thumbnail-catch-img">
                <img src="<?php img_path('/top/mv1-catch.svg') ?>" alt="だれもが安心して働ける職場づくりをめざして" />
              </figure>
            </li>
            <li class="p-mv__thumbnail-slide swiper-slide">
              <figure class="p-mv__thumbnail-img">
                <img src="<?php img_path('/top/mv2_sp.jpg') ?>" alt="演説者と聴衆" />
              </figure>
              <div class="p-mv__thumbnail-catch">
                <p class="p-mv__thumbnail-title">運輸労連第56回<br>定期大会開催</p>
              </div>
            </li>
            <li class="p-mv__thumbnail-slide swiper-slide">
              <figure class="p-mv__thumbnail-img">
                <img src="<?php img_path('/top/mv3_sp.jpg') ?>" alt="アンケート用紙を記入している手元" />
              </figure>
              <div class="p-mv__thumbnail-catch">
                <p class="p-mv__thumbnail-title">ドライバーアンケート<br>調査結果報告書</p>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <section class="p-news l-common">
    <div class="p-news__inner l-inner">
      <h2 class="p-news__title">活動報告</h2>
      <div class="p-news__container">
        <ul class="p-news__list">
          <?php
          $args = array(
            'post_type' => 'post',
            'posts_per_page' => 6,
          );
          $news_query = new WP_Query($args);

          if ($news_query->have_posts()) :
            while ($news_query->have_posts()) : $news_query->the_post();
          ?>
              <li class="p-news__item">
                <?php get_template_part('parts/project/p-news-card') ?>
              </li>
          <?php
            endwhile;
            wp_reset_postdata();
          else :
            echo '<p class="p-news__text">お知らせはありません</p>';
          endif;
          ?>
        </ul>
        <div class="p-news__button">
          <?php
          $args = array(
            'link' => '/news',
            'text' => '活動報告をすべて見る',
            'modifier' => 'small'
          );
          get_template_part('parts/component/c-button', null, $args);
          ?>
        </div>
      </div>
    </div>
  </section>

  <section class="p-pickup l-common">
    <div class="p-pickup__inner l-inner">
      <h2 class="p-pickup__title">ピックアップ</h2>
      <div class="p-pickup__container">
        <ul class="p-pickup__list">
          <li class="p-pickup__item">
            <a href="http://fuso-jp.com/survey/unyu/enqu/area_01/" class="p-pickup__link">
              <figure class="p-pickup__img">
                <img src="<?php img_path('/top/banner1.png') ?>" alt="トラックドライバーの皆さんへ" />
              </figure>
              <p class="p-pickup__text">WEBアンケートのおねがい</p>
            </a>
          </li>
          <li class="p-pickup__item">
            <a href="<?php page_path('/activity/pr/support'); ?>" class="p-pickup__link">
              <figure class="p-pickup__img">
                <img src="<?php img_path('/top/banner2.jpg') ?>" alt="" />
              </figure>
              <p class="p-pickup__text">トラックを応援してください！</p>
            </a>
          </li>
        </ul>
      </div>

      <?php
      $bannerItem = [
        [
          'img' => '/top/banner3.jpg',
          'link' => 'https://www.jtuc-rengo.or.jp/action/saiteichingin/',
          'alt' => '知るから始めよう、最低賃金',
        ],
        [
          'img' => '/top/banner4.jpg',
          'link' => 'https://www.mlit.go.jp/jidosha/tragirl/',
          'alt' => '女性トラックドライバーとして活躍しませんか？トラガール促進プロジェクト｜国土交通省',
        ],
        [
          'img' => '/top/banner5.jpg',
          'link' => 'https://all.rokin.or.jp/',
          'alt' => 'ろうきん',
        ],
      ];
      ?>
      <ul class="p-pickup__banners">
        <?php foreach ($bannerItem as $item) : ?>
          <li class="p-pickup__banner">
            <a href="<?php echo esc_url($item['link']); ?>" target="_blank">
              <img src="<?php img_path($item['img']); ?>" alt="" />
            </a>
          </li>
        <?php endforeach; ?>
      </ul>
    </div>
  </section>

</main>

<?php get_footer(); ?>