<?php

/**
 * func-enqueue-assets
 * CSSとJavaScriptの読み込み
 * スライダーを使用しない場合
 *
 * @codex https://wpdocs.osdn.jp/%E3%83%8A%E3%83%93%E3%82%B2%E3%83%BC%E3%82%B7%E3%83%A7%E3%83%B3%E3%83%A1%E3%83%8B%E3%83%A5%E3%83%BC
 */
function my_script_init()
{
  // Google Fonts
  wp_enqueue_style('google-fonts', '//fonts.googleapis.com/css2?family=Zen+Kaku+Gothic+New:wght@500;700&family=Anton&family=Roboto:wght@700&display=swap"', array(), null);

  // WordPressがデフォルトで提供するjQueryは使用しない
  wp_deregister_script('jquery');
  wp_enqueue_script('jquery', '//code.jquery.com/jquery-3.7.1.min.js', array(), '3.7.1');

  // JavaScript
  // wp_enqueue_script('gsap', '//cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js', array(), '3.11.5', true);
  // wp_enqueue_script('scroll-trigger', '//cdn.jsdelivr.net/npm/gsap@3.11.5/dist/ScrollTrigger.min.js', array(), '3.11.5', true);
  wp_enqueue_script('swiper-script', '//cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', array(), '11', true);
  wp_enqueue_script('yubinbango', 'https://yubinbango.github.io/yubinbango/yubinbango.js', array(), null, true);
  wp_enqueue_script('my-script', get_theme_file_uri('/assets/js/script.js'), array(), filemtime(get_theme_file_path('/assets/js/script.js')), true);

  // CSS
  wp_enqueue_style('swiper-style', '//cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css', array(), '11', 'all');
  wp_enqueue_style('my-style', get_theme_file_uri('/assets/css/style.css'), array(), filemtime(get_theme_file_path('/assets/css/style.css')), 'all');
}
add_action('wp_enqueue_scripts', 'my_script_init');


// defer属性を追加
// function add_defer_attribute($tag, $handle)
// {
//   $handles_to_defer = ['swiper-script', 'luminous-script', 'yubinbango', 'my-script'];

//   if (in_array($handle, $handles_to_defer, true)) {
//     return str_replace(' src=', ' defer src=', $tag);
//   }

//   return $tag;
// }
// add_filter('script_loader_tag', 'add_defer_attribute', 10, 2);