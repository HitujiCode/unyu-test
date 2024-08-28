<?php get_header(); ?>

<main>
  <div class="l-inner">

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

  </div>
</main>

<?php get_footer(); ?>