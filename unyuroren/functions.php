<?php

/**
 * Functions
 */

// 基本設定
get_template_part('parts/functions-lib/func-base');

// セキュリティー対応
get_template_part('parts/functions-lib/func-security');

// ショートコードの設定
get_template_part('parts/functions-lib/func-shortcode');

// URLのショートカット設定
get_template_part('parts/functions-lib/func-url');

// メインクエリのSP表示件数設定
// get_template_part('parts/functions-lib/func-posts-edit');

// スクリプト、スタイルシートの設定
get_template_part('parts/functions-lib/func-enqueue-assets');

// 投稿のラベルを変更
get_template_part('parts/functions-lib/func-add-posttype-post');

// エディターを非表示
// function my_custom_init()
// {
//   remove_post_type_support('case', 'editor');
// }
// add_action('admin_init', 'my_custom_init');
