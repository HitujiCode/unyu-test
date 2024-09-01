<?php
$modifier = isset($args['modifier']) ? $args['modifier'] : '';
$card_class = 'p-news-card' . (!empty($modifier) ? ' p-news-card--' . esc_attr($modifier) : '');
?>

<a href="<?php the_permalink(); ?>" class="<?php echo esc_html($card_class); ?>">
  <figure class="p-news-card__img">
    <?php if (has_post_thumbnail()) :
      $thumbnail_id = get_post_thumbnail_id(get_the_ID());
      $alt_text = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);
    ?>
      <img src="<?php echo esc_url(get_the_post_thumbnail_url(get_the_ID(), 'full')); ?>" alt="<?php echo esc_attr($alt_text); ?>" />
    <?php else : ?>
      <img src="<?php echo esc_url(img_path('/common/noimage.jpg')); ?>" alt="" />
    <?php endif; ?>
  </figure>
  <div class="p-news-card__body">
    <h3 class="p-news-card__text"><?php the_title(); ?></h3>
    <time datetime="<?php echo get_the_date('Y-m-d'); ?>" class="p-news-card__time"><?php echo get_the_date('Y年m月d日'); ?></time>
  </div>
</a>