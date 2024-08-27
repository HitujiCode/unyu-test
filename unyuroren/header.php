<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="format-detection" content="telephone=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <header class="p-header l-header">
    <div class="p-header__inner">
      <h1 class="p-header__logo">
        <a href="#">
          <img src="<?php img_path('/common/logo.svg')?>" alt="省略">
        </a>
      </h1>
      <nav class="p-header__nav">
        <ul class="p-header__nav-list">
          <li class="p-header__nav-item">
            <a href="#">私たちについて</a>
          </li>
          <li class="p-header__nav-modal-wrap">
            <p>事業内容</p>
            <ul class="p-header__nav-modal">
              <li class="p-header__nav-modal-item">
                <a href="#">不動産賃貸事業</a>
              </li>
              <li class="p-header__nav-modal-item">
                <a href="#">不動産仲介事業</a>
              </li>
              <li class="p-header__nav-modal-item">
                <a href="#">不動産コンサルティング事業</a>
              </li>
            </ul>
          </li>
          <li class="p-header__nav-item">
            <a href="#">施工医実績</a>
          </li>
          <li class="p-header__nav-item">
            <a href="#">お知らせ</a>
          </li>
          <li class="p-header__nav-item">
            <a href="#">お客様の声</a>
          </li>
          <li class="p-header__nav-item p-header__nav-item--contact">
            <a href="#">お問い合わせ</a>
          </li>
        </ul>
      </nav>
      <button class="p-header__hamburger js-hamburger">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <div class="p-header__drawer js-drawer">
        <nav class="p-header__drawer-nav">
          <ul class="p-header__drawer-list">
            <li class="p-header__drawer-item">
              <a href="#">私たちについて</a>
            </li>
            <li class="p-header__drawer-item">
              <p class="p-header__drawer-accordion-title js-drawer-accordion">事業内容</p>
              <ul class="p-header__drawer-accordion-list">
                <li class="p-header__drawer-accordion-item">
                  <a href="#">不動産賃貸事業</a>
                </li>
                <li class="p-header__drawer-accordion-item">
                  <a href="#">不動産仲介事業</a>
                </li>
                <li class="p-header__drawer-accordion-item">
                  <a href="#">不動産コンサルティング事業</a>
                </li>
              </ul>
            </li>
            <li class="p-header__drawer-item">
              <a href="#">施工実績</a>
            </li>
            <li class="p-header__drawer-item">
              <a href="#">お知らせ</a>
            </li>
            <li class="p-header__drawer-item">
              <a href="#">お客様の声</a>
            </li>
            <li class="p-header__drawer-item p-header__drawer-item--contact">
              <a href="#">お問い合わせ</a>
            </li>
          </ul>
        </nav>
      </div>
    </div>
  </header>