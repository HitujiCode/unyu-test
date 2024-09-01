<?php
$text = isset($args['text']) ? $args['text'] : '';
$img = isset($args['img']) ? $args['img'] : array('src' => '', 'alt' => '');
?>

<div class="p-fv-block">
  <div class="p-fv-block__inner l-inner">
    <figure class="p-fv-block__img">
      <img
        src="<?php echo esc_url($img['src']); ?>"
        alt="<?php echo esc_attr($img['alt']); ?>"
        width="400" height="248" />
    </figure>
    <p class="p-fv-block__text">
      <?php echo wp_kses_post($text); ?>
    </p>
  </div>
</div>