<?php get_header(); ?>

<main class="p-page">
  <div class="l-inner">

    <br>
    <br>

    <h1>h1見出し</h1>

    <br>
    <br>

    <h2>h2見出し</h2>

    <br>
    <br>

    <h3>h3見出し</h3>

    <br>
    <br>

    <h4>h4見出し</h4>

    <br>
    <br>

    <?php
    $args = array(
      'link' => '/about',
      'text' => '理念',
      'modifier' => ''
    );
    get_template_part('parts/component/c-button', null, $args);
    ?>

    <br>
    <br>

    <?php
    $args = array(
      'link' => '/about',
      'text' => 'サンプルテキスト',
      'modifier' => 'blank'
    );
    get_template_part('parts/component/c-button', null, $args);
    ?>

    <br>
    <br>

    <?php
    $args = array(
      'link' => '/about',
      'text' => 'サンプルテキスト',
      'modifier' => 'blank2'
    );
    get_template_part('parts/component/c-button', null, $args);
    ?>

    <br>
    <br>

    <?php
    $args = array(
      'link' => '/about',
      'text' => 'サンプルテキスト',
      'modifier' => 'anchor'
    );
    get_template_part('parts/component/c-button', null, $args);
    ?>

    <br>
    <br>

    <?php
    $args = array(
      'link' => '/about',
      'text' => 'サンプルテキスト',
      'modifier' => 'small'
    );
    get_template_part('parts/component/c-button', null, $args);
    ?>

    <br>
    <br>

    <?php
    $args = array(
      'link' => '/about',
      'text' => 'サンプルテキスト',
    );
    get_template_part('parts/component/c-link-text', null, $args);
    ?>

    <br>
    <br>

    <?php
    $args = array(
      'link' => '/about',
      'text' => 'サンプルテキスト',
    );
    get_template_part('parts/component/c-link-arrow', null, $args);
    ?>

    <br>
    <br>

    <?php
    $args = array(
      'text' => '自動車運転の業務（ドライバー）に年960時間の上限規制が適用されます',
    );
    get_template_part('parts/component/c-frame', null, $args);
    ?>

    <br>
    <br>

    <blockquote>
      　昨日の集会ではＡさんとＢさんが熱く意見を主張し、議論は多いに白熱したが、二人の主張が食い違っており、２時間という長丁場を経たが、議論は平行線を辿ったままで、ＡさんもＢさんも感情的になってしまい、最後まで結論は出なかった。
    </blockquote>

    <br>
    <br>

    <?php
    $args = array(
      'text' => '「改善基準告示」とは自動車運転者の労働時間等の労働条件の改善をするために労働大臣が1989年2月に告示したものの略称です。さらに一部改正され、現行基準は2024年4月1日から適用されています。',
      'img' => array(
        'src' => 'http://unyuroren.local/wp-content/themes/unyuroren/assets/images/top/mv1.jpg',
        'alt' => '改善基準告示の画像'
      )
    );
    get_template_part('parts/project/p-fv-block', null, $args);
    ?>


    <!-- 仮置き -->
    <div class="l-inner">

      <div class="c-frame-border">
        <p class="c-frame-border__title">記事作成「７つの心得」</p>
        <p class="c-frame-border__text">①重要な記事を除いては400字程度、② センテンスは長くとも60字以内を目標に、③段落は10行以内、④ 接続助詞（「～で」「～だが」）を多用しない、⑤ 接続詞「また」「そして」「さらに」「しかし」を多用しない、⑥難しい言葉、漢字を使わない、⑦ 「です・ます」と「だ・である」を混用しない</p>
        <figure class="c-frame-border__img l-img-small">
          <img src="http://unyuroren.local/wp-content/themes/unyuroren/assets/images/pr/howto001_02.jpg" alt="" />
        </figure>
      </div>

      <div class="c-frame-border">
        <p class="c-frame-border__title">記事作成「７つの心得」</p>
        <p class="c-frame-border__sub-title">記事作成「７つの心得」</p>
        <p class="c-frame-border__text">①重要な記事を除いては400字程度、② センテンスは長くとも60字以内を目標に、③段落は10行以内、④ 接続助詞（「～で」「～だが」）を多用しない、⑤ 接続詞「また」「そして」「さらに」「しかし」を多用しない、⑥難しい言葉、漢字を使わない、⑦ 「です・ます」と「だ・である」を混用しない</p>
        <figure class="c-frame-border__img">
          <img src="http://unyuroren.local/wp-content/themes/unyuroren/assets/images/top/mv1.jpg" alt="" />
        </figure>
      </div>

      <br>
      <br>

      <div class="c-frame-green1">
        <p class="c-frame-green1__num">1</p>
        <p class="c-frame-green1__title">労働条件の維持・向上</p>
        <p class="c-frame-green1__text">・賃金引き上げや一時金（ボーナス）について統一要求などの取り組みを行います。<br>
          ・産業別最低賃金、企業内最低賃金の協定化を行います。</p>
        <figure class="c-frame-green1__img">
          <img src="http://unyuroren.local/wp-content/themes/unyuroren/assets/images/top/mv1.jpg" alt="" width="295" height="182" />
        </figure>
      </div>

      <br>
      <br>

      <div class="c-frame-green2">
        <p class="c-frame-green2__num">1</p>
        <p class="c-frame-green2__title">医療品・医薬品が手に入りにくくなる可能性があります</p>
        <p class="c-frame-green2__text">病院や薬局、ドラッグストアへの医療品・医薬品などの納品は、ほとんどトラックが行っています。</p>
        <figure class="c-frame-green2__img">
          <img src="http://unyuroren.local/wp-content/themes/unyuroren/assets/images/top/mv1.jpg" alt="" width="295" height="182" />
        </figure>
      </div>


    </div>
</main>

<?php get_footer(); ?>