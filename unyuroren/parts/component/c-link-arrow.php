<?php
$link = isset($args['link']) ? $args['link'] : '';
$text = isset($args['text']) ? $args['text'] : '調査活動';
$class = isset($args['class']) ? $args['class'] : 'c-link-arrow';
?>

<a class="<?php echo esc_attr($class); ?>" href="<?php page_path($link); ?>"><?php echo esc_html($text); ?></a>