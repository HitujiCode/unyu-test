
jQuery(function ($) { // この中であればWordpressでも「$」が使用可能になる
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
});
