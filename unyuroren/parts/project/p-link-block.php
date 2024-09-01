<?php
$head_link = isset($args['head']['link']) ? $args['head']['link'] : '';
$head_text = isset($args['head']['text']) ? $args['head']['text'] : '';
$c_link_arrows = isset($args['c_link_arrows']) ? $args['c_link_arrows'] : array();
?>

<div class="p-link-block l-link-block">
  <div class="p-link-block__inner l-inner">
    <div class="p-link-block__head">
      <?php
      $head = $args[0];
      $head_args = array(
        'link' => $head['link'],
        'text' => $head['text'],
        'class' => 'c-link-arrow c-link-arrow--large'
      );
      get_template_part('parts/component/c-link-arrow', null, $head_args);
      ?>
    </div>
    <ul class="p-link-block__list">
      <?php foreach (array_slice($args, 1) as $item) : ?>
        <li class="p-link-block__item">
          <?php
          get_template_part('parts/component/c-link-arrow', null, $item);
          ?>
        </li>
      <?php endforeach; ?>
    </ul>
  </div>
</div>