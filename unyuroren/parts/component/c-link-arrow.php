<?php
$link = isset($args['link']) ? $args['link'] : '';
$text = isset($args['text']) ? $args['text'] : '調査活動';
?>

<a class="c-link-arrow" href="<?php page_path($link); ?>"><?php echo esc_html($text); ?></a>