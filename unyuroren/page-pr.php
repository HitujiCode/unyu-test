<?php get_header(); ?>

<main class="p-page">

  <?php get_template_part('parts/component/c-breadcrumb') ?>

  <h1 class="l-mtb1">広報</h1>

  <section class="p-sub-publication">
    <div class="p-sub-publication__inner l-inner">
      <h2 class="p-sub-publication__title">刊行物制作</h2>
      <p class="p-sub-publication__read c-text">アンケート調査報告書など、運輸に関する数多くの出版物を制作しています。資料をご希望の方は、運輸労連までお問い合わせください。</p>
      <ul class="p-sub-publication__list">
        <li class="p-sub-publication__item">
          <figure class="p-sub-publication__img">
            <img src="<?php img_path('/pr/publication1.jpg') ?>" alt="" />
          </figure>
        </li>
        <li class="p-sub-publication__item">
          <figure class="p-sub-publication__img">
            <img src="<?php img_path('/pr/publication2.jpg') ?>" alt="" />
          </figure>
        </li>
        <li class="p-sub-publication__item">
          <figure class="p-sub-publication__img">
            <img src="<?php img_path('/pr/publication3.jpg') ?>" alt="" />
          </figure>
        </li>
      </ul>
      <div class="p-sub-publication__button">
        <?php
        $args = array(
          'link' => '/contact',
          'text' => 'お問い合わせはこちら',
          'modifier' => ''
        );
        get_template_part('parts/component/c-button', null, $args);
        ?>
      </div>
    </div>
  </section>

  <section class="p-sub-task">
    <div class="p-sub-task__inner l-inner">
      <h2 class="p-sub-task__title">運輸に関する課題</h2>
      <p class="p-sub-task__read c-text">トラックは国民生活、経済活動を支えるため日夜走り続けています。現代社会の運輸に関する課題を、広く周知するためのコンテンツです。</p>
      <div class="p-sub-task__block">
        <figure class="p-sub-task__img">
          <img src="<?php img_path('/pr/pr1.jpg') ?>" alt="" />
        </figure>
        <div class="p-sub-task__content">
          <div class="p-sub-task__wrap">
            <p class="p-sub-task__head">トラックを応援してください！</p>
            <p class="p-sub-task__text c-text">もしトラックが無ければ、わたしたちの<wbr>生活は<wbr>一体<wbr>どのように<wbr>なる<wbr>でしょうか？</p>
            <div class="p-sub-task__button">
              <?php
              $args = array(
                'link' => '/activity/pr/support',
                'text' => 'つづきを見る',
                'modifier' => ''
              );
              get_template_part('parts/component/c-button', null, $args);
              ?>
            </div>
          </div>
        </div>
      </div>
      <div class="p-sub-task__block">
        <figure class="p-sub-task__img">
          <img src="<?php img_path('/pr/pr2.jpg') ?>" alt="" />
        </figure>
        <div class="p-sub-task__content">
          <div class="p-sub-task__wrap">
            <p class="p-sub-task__head">トラック運輸産業の課題<br>（2024年問題への対応）</p>
            <p class="p-sub-task__text c-text">トラックドライバーの時間外労働の規制が強化され、物流の停滞が懸念されている問題です。</p>
            <div class="p-sub-task__button">
              <?php
              $args = array(
                'link' => '/activity/pr/support',
                'text' => 'つづきを見る',
                'modifier' => ''
              );
              get_template_part('parts/component/c-button', null, $args);
              ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="p-sub-character">
    <div class="p-sub-character__inner l-inner">
      <h2 class="p-sub-character__title">運輸労連公式マスコットキャラクター　「ゆたか」</h2>
      <div class="p-sub-character__top">
        <figure class="p-sub-character__img">
          <picture>
            <source media="(min-width: 767px)" srcset="<?php img_path('/pr/yutaka.png') ?>" />
            <img src="<?php img_path('/pr/yutaka_sp.png') ?>" alt="運輸労連公式マスコットキャラクター「ゆたか」" />
          </picture>
        </figure>
        <figure class="p-sub-character__description">
          <img src="<?php img_path('/pr/character.png') ?>" alt="運輸産業で働く仲間の「ゆとりとゆたかさ」を実現するため運輸産業の魅力をアピールするためにみなさんの先頭に立って運動します！" />
        </figure>
      </div>
      <p class="p-sub-character__read c-text">　2021年7月の第54回定期大会において、運輸労連公式マスコットキャラクターの募集結果が発表されました。その後、プロによるブラッシュアップ、ならびにプロジェクトチーム内でさまざまな議論を行い、晴れて誕生しました。</p>
      <div class="p-sub-character__bottom">
        <div class="p-sub-character__wrap">
          <p class="p-sub-character__head">ネーミングの由来</p>
          <p class="p-sub-character__text">　「運輸産業で働く仲間の“ゆとりとゆたかさ”という制作者の思いと、多様な仲間が活躍できる魅力ある産業となるようにとの思いを込めました。<br>
            　なお、「ゆたか」の書体はユニバーサルフォントを使用しています。</p>
          <figure class="p-sub-character__truck">
            <img src="<?php img_path('/common/truck.png') ?>" alt="横から見たトラックに乗るゆたかのイラスト" />
          </figure>
        </div>
        <div class="p-sub-character__wrap">
          <p class="p-sub-character__head">デザインの由来</p>
          <p class="p-sub-character__text">　顔のまわりには「運輸労連マーク」。そして、カラーは、運輸労連のイメージカラーである「緑」を基調とし、みなさんが活動する際に着用するジャンパーやポロシャツと同じ色の服装を着ることで、「ともに運動に取り組んでいく！」という決意を表しています。</p>
          <figure class="p-sub-character__illust">
            <picture>
              <source media="(min-width: 767px)" srcset="<?php img_path('/pr/yutaka2.png') ?>" />
              <img src="<?php img_path('/pr/yutaka2_sp.png') ?>" alt="ダンボールを運ぶゆたか" />
            </picture>
          </figure>
        </div>
      </div>
    </div>
  </section>

  <section class="p-sub-journal">
    <div class="p-sub-journal__inner l-inner">
      <h2 class="p-sub-journal__title">機関紙づくり</h2>
      <div class="p-sub-journal__content">
        <div class="p-sub-journal__wrap">
          <p class="p-sub-journal__read c-text">「機関紙を発行して組織を活性化させたいのだが…」。しかし、「専従者が不在」「仕事が忙しい」「作り方がよく分からない」といった悩みを抱えている人たちは少なくありません。本コーナーでは、セオリーにあまり拘らず、なるべくラクに作れる機関紙の編集法を掲載します。</p>
          <div class="p-sub-journal__button">
            <?php
            $args = array(
              'link' => '/activity/pr/journal',
              'text' => '機関紙づくり情報',
              'modifier' => ''
            );
            get_template_part('parts/component/c-button', null, $args);
            ?>
          </div>
        </div>
        <figure class="p-sub-journal__img">
          <img src="<?php img_path('/pr/pr3.jpg') ?>" alt="" />
        </figure>
      </div>
    </div>
  </section>

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