<?php
$link = isset($args['link']) ? $args['link'] : '';
$text = isset($args['text']) ? $args['text'] : '';
$modifier_list = array('blank', 'anchor', 'blank2', 'small', 'back');
$modifier = isset($args['modifier']) ? $args['modifier'] : '';

$button_class = 'c-button';
if (!empty($modifier) && in_array($modifier, $modifier_list)) {
  $button_class .= ' c-button--' . esc_attr($modifier);
}
?>

<a href="<?php page_path($link); ?>" class="<?php echo esc_html($button_class); ?>">
  <?php echo esc_html($text); ?>
</a>