<?php
$link = isset($args['link']) ? $args['link'] : '';
$text = isset($args['text']) ? $args['text'] : '';
?>

<a class="c-link-text" href="<?php page_path($link); ?>"><?php echo esc_html($text); ?></a>