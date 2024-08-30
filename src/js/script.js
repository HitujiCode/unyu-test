
jQuery(function ($) { // この中であればWordpressでも「$」が使用可能になる

  // ページトップボタン
  $(window).on('scroll', function () {
    if ($(this).scrollTop() > 70) {
      $('.js-pagetop').fadeIn();
    } else {
      $('.js-pagetop').fadeOut();
    }
  });

  $('.js-pagetop').on('click', function () {
    $('body, html').animate({ scrollTop: 0 }, 300);
  });

  // ハンバーガーメニュー
  $(document).ready(function () {
    const $hamburger = $(".js-hamburger");
    const $drawer = $(".js-drawer");

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
      const mediaQuery = window.matchMedia("(min-width: 768px)");
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
    $('.js-footer-accordion').off('click');

    if (window.matchMedia("(max-width: 767px)").matches) {
      $('.js-footer-accordion').on('click', function () {
        $('.js-footer-accordion').not(this).removeClass('is-open').next('.p-footer__nav-sub-list').stop(true, true).slideUp();
        $(this).toggleClass('is-open').next('.p-footer__nav-sub-list').stop(true, true).slideToggle();
      });
    } else {
      // 767px以上の場合はアコーディオン機能を解除
      $('.js-footer-accordion').removeClass('is-open');
      $('.p-footer__nav-sub-list').stop(true, true).slideDown().removeAttr('style');
    }
  }

  setupFooterAccordion();

  $(window).on('resize', function () {
    setupFooterAccordion();
  });

});

// MVスライダー
const thumbnailSwiper = new Swiper(".js-mv-thumbnail", {
  slidesPerView: 3,
  spaceBetween: 10,
  breakpoints: {
    768: {
      spaceBetween: 20,
    },
  },
});

const mvSwiper = new Swiper('.js-mv-swiper', {
  slidesPerView: "auto",
  centeredSlides: true,
  loop: true,
  speed: 3000,
  spaceBetween: 20,
  autoplay: {
    delay: 2000,
    disableOnInteraction: false,
  },
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
  thumbs: {
    swiper: thumbnailSwiper,
  },
  breakpoints: {
    768: {
      spaceBetween: 40,
    },
  },
});