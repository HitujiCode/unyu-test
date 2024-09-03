<?php get_header(); ?>

<main class="p-page">

  <?php get_template_part('parts/component/c-breadcrumb') ?>

  <h1 class="l-mtb1"><?php the_title(); ?></h1>

  <?php
  $args = array(
    'text' => '労働組合のよくあるご質問をまとめました。',
    'img' => array(
      'src' => '/union/faq1.jpg',
      'alt' => 'Q&Aと書かれた付箋とカラフルな付箋'
    )
  );
  get_template_part('parts/project/p-fv-block', null, $args);
  ?>

  <div class="p-faq l-faq">
    <div class="p-faq__inner l-inner">

      <?php
      $faqItem = [
        [
          'title' => '労働組合結成によって給与は上がりますか？',
          'text' => '労働組合を結成したからといって、すぐに各種の条件は向上するものではありません。しかし、労働組合ができれば、社員がこれまで以上に一つにまとまること（組織力アップ）が十分考えられます。<br>　それにより、経営にも好影響が出て、今まで以上の昇給や労働条件の改善も可能になるでしょう。労働組合の活動は、一つ一つの積み上げ。数年経過すれば、労働組合の『ある・ない』では大きな差が出てくると思います。'
        ],
        [
          'title' => '組合費は何に使いますか？',
          'text' => '組合費は、みんなで討議し決定した活動方針に基づき使用します。その支出項目は、「事務所費」「通信費」「交通費」「資料関係費」「各専門部活動費」など。その他、上部団体関連費用（会費）にも充当します。組合の規模によりますが、組合専従者やアルバイトの人件費も、将来的に考慮する必要があるでしょう。'
        ],
        [
          'title' => 'ストライキは行うのですか？',
          'text' => '無謀なストライキはやるべきではありません。ストライキによって、取引先やユーザーの信頼を失うと、企業の存続自体に赤信号が。結局、組合員自身の首を締める事にもなってしまいます。よって、ストライキはあくまで最後の手段。問題の解決は、交渉・話し合いによって解決していくことが大前提です。ストライキよりも、私たち自らの労働力の価値を高め、それを組合として集約保持する方が、会社との交渉では大きな武器になるはずです。'
        ],
        [
          'title' => '労働組合を結成しても加入してくれるか不安なのですが？',
          'text' => '労働組合が、その機能を最大限に発揮させるには、組合員が意識を統一し、一つにまとまることが何よりも重要。そして、組合によって得られた利益は、組合員が平等に享受すべきとだと思います。<br>　だから、みんなが組合員になる『ユニオンショップ協定』（※）を締結するのがベスト。締結されれば、原則として組合員以外は正社員になれません。'
        ]
      ] ?>

      <ul class="p-faq__list">
        <?php foreach ($faqItem as $item) : ?>
          <li class="p-faq__item">
            <p class="p-faq__title"><?php echo esc_html($item['title']); ?></p>
            <p class="p-faq__text"><?php echo wp_kses_post($item['text']); ?></p>
          </li>
        <?php endforeach; ?>
      </ul>
      <div class="p-faq__frame">
        <p class="p-faq__frame-title">『ユニオンショップ協定』 とは</p>
        <p class="p-faq__frame-text">　労働者が採用された場合、一定の期間・一定の労働組合に加入しなければならず、加入しなかったり、その組合から脱退・除名されて組合員の資格を失った場合、使用者が解雇する旨を定めた労働協約のこと。＜労働組合法第７条１項後段＞ 「労働者がその労働組合の組合員であることを雇用条件とする労働協約を締結することをさまたげるものでありません。」</p>
      </div>
      <div class="p-faq__button">
        <?php
        $args = array(
          'link' => '',
          'text' => '運輸労連・地域の相談窓口',
          'modifier' => ''
        );
        get_template_part('parts/component/c-button', null, $args);
        ?>
      </div>
    </div>
  </div>

  <?php
  $args = [
    [
      'link' => '/union',
      'text' => '組合づくり相談トップ',
    ],
    [
      'link' => '/union/talk',
      'text' => 'いつでもご相談ください'
    ],
    [
      'link' => '/union/form',
      'text' => '組合を結成しよう'
    ],
    [
      'link' => '/union/unyu',
      'text' => '運輸労連に入ろう'
    ],
    [
      'link' => '/union/faq',
      'text' => '組合づくり Q&A'
    ]
  ];

  get_template_part('parts/project/p-link-block', null, $args);
  ?>


</main>

<?php get_footer(); ?>