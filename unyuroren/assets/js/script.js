"use strict";

jQuery(function ($) {
  // この中であればWordpressでも「$」が使用可能になる
  // ヘッダーの高さを取得してmainにmargin-topを指定
  $(window).on('load resize', function () {
    var headerHeight = $('.js-header').outerHeight();
    $('main').css('margin-top', headerHeight);
  });

  // ページトップボタン
  $(window).on('scroll', function () {
    if ($(this).scrollTop() > 70) {
      $('.js-pagetop').fadeIn();
    } else {
      $('.js-pagetop').fadeOut();
    }
  });
  $('.js-pagetop').on('click', function () {
    $('body, html').animate({
      scrollTop: 0
    }, 300);
  });

  // ハンバーガーメニュー
  $(document).ready(function () {
    var $hamburger = $(".js-hamburger");
    var $drawer = $(".js-drawer");
    function closeDrawer() {
      $("body").removeClass("is-fixed");
      $hamburger.removeClass("is-open").attr({
        "aria-expanded": "false",
        "aria-label": "メニューを開く"
      });
      $drawer.removeClass("is-open").attr("aria-hidden", "true");
    }
    function openDrawer() {
      $("body").addClass("is-fixed");
      $hamburger.addClass("is-open").attr({
        "aria-expanded": "true",
        "aria-label": "メニューを閉じる"
      });
      $drawer.addClass("is-open").attr("aria-hidden", "false");
    }
    if ($hamburger.length && $drawer.length) {
      $hamburger.on("click", function () {
        if ($drawer.hasClass("is-open")) {
          closeDrawer();
        } else {
          openDrawer();
        }
      });
      $drawer.find("a[href]").on("click", function () {
        closeDrawer();
      });

      // matchMediaを使用してメディアクエリの変更を検出
      var mediaQuery = window.matchMedia("(min-width: 768px)");
      mediaQuery.addEventListener("change", function (e) {
        if (e.matches && $drawer.hasClass("is-open")) {
          closeDrawer();
        }
      });
    }
  });

  // アコーディオン
  $('.js-drawer-accordion').on('click', function () {
    $('.js-drawer-accordion').not(this).removeClass('is-open').next().slideUp();
    $(this).next().slideToggle();
    $(this).toggleClass('is-open');
  });

  // フッターのアコーディオン
  function setupFooterAccordion() {
    if (window.matchMedia("(max-width: 767px)").matches) {
      $('.js-footer-accordion').on('click', function () {
        $('.js-footer-accordion').not(this).removeClass('is-open').next('.p-footer__nav-sub-list').slideUp();
        $(this).toggleClass('is-open').next('.p-footer__nav-sub-list').slideToggle();
      });
    } else {
      // 767px以上の場合はアコーディオン機能を解除
      $('.js-footer-accordion').off('click').removeClass('is-open');
      $('.p-footer__nav-sub-list').removeAttr('style');
    }
  }
  setupFooterAccordion();
  $(window).resize(function () {
    setupFooterAccordion();
  });
});

// MVスライダー
var thumbnailSwiper = new Swiper(".js-mv-thumbnail", {
  slidesPerView: 3,
  spaceBetween: 10,
  breakpoints: {
    768: {
      spaceBetween: 20
    }
  }
});
var mvSwiper = new Swiper('.js-mv-swiper', {
  slidesPerView: "auto",
  centeredSlides: true,
  loop: true,
  speed: 3000,
  spaceBetween: 20,
  autoplay: {
    delay: 1000
  },
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev'
  },
  thumbs: {
    swiper: thumbnailSwiper
  },
  breakpoints: {
    768: {
      spaceBetween: 40
    }
  }
});