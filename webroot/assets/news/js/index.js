$('a[href^="#"]').click(function () {
  var href = $(this).attr("href");
  var $target = $(href === "#" || href === "" ? "html" : href);

  if ($(window).width() < 768) {
    offset = $("#header").height();
  } else {
    var offset = 80;
  }

  var speed = 400;
  var targetPos = $target.offset().top - offset;

  $("body,html").animate({ scrollTop: targetPos }, speed, "swing");
  return false;
});

$(function () {
  var $window = $(window);
  var $links = $(".header__link");

  $window.on("load scroll resize", function () {
    var st = $window.scrollTop();
    var wh = $window.height();

    $(".sec-scroll-point").each(function () {
      var tg = $(this).offset().top;
      var id = $(this).attr("id");

      if (st > tg - wh + wh / 1.3) {
        $links.removeClass("is-active");
        var link = $links.filter("[href*=" + id + "]");
        link.addClass("is-active");
      }
    });
  });

  //inview
  $(".fadeUp").on("inview", function () {
    $(this).addClass("show-fadeUp");
  });

  $(".fadeUp2").on("inview", function () {
    $(this).addClass("show-fadeUp2");
  });

  $(".fadeIn1").on("inview", function () {
    $(this).addClass("show-fadeIn1");
  });

  $(".fadeIn2").on("inview", function () {
    $(this).addClass("show-fadeIn2");
  });

  $(".fadeIn3").on("inview", function () {
    $(this).addClass("show-fadeIn3");
  });

  $(".fadeIn4").on("inview", function () {
    $(this).addClass("show-fadeIn4");
  });

  $(".fadeIn5").on("inview", function () {
    $(this).addClass("show-fadeIn5");
  });

  $(".bound1").on("inview", function () {
    $(this).addClass("show-bound1");
  });

  $(".bound2").on("inview", function () {
    $(this).addClass("show-bound2");
  });

  $(".bound3").on("inview", function () {
    $(this).addClass("show-bound3");
  });

  $(".party").on("inview", function () {
    $(this).addClass("show-party");
  });
  //ハンバーガーメニュー
  $(`.header__tabButton-bg`).on("click", (event) => {
    $(".header__tabNav").toggleClass("header__tabNav-active");
    $(".header__tabButton span").toggleClass("header__tabButton-active");
  });
  $(`.header__tabNav__list-link a`).on("click", (event) => {
    $(".header__tabNav").toggleClass("header__tabNav-active");
    $(".header__tabButton span").toggleClass("header__tabButton-active");
  });
  $(`.header-logo a`).on("click", (event) => {
    $(".header__tabNav").removeClass("header__tabNav-active");
    $(".header__tabButton span").removeClass("header__tabButton-active");
  });

  //TOPへ戻るボタン
  const pagetop = $(".footer-top");
  pagetop.hide();
  $(window).scroll(function () {
    if ($(this).scrollTop() > 500) {
      pagetop.fadeIn();
      if ($(window).width() < 2500) {
        pagetop.removeClass("none");
      } else {
        return;
      }
    } else {
      pagetop.fadeOut();
    }
  });

  $(window).resize(function () {
    if ($(window).width() > 768) {
      pagetop.addClass("none");
    } else {
      pagetop.removeClass("none");
    }
  });
  pagetop.on("click", (event) => {
    $("body, html").animate(
      {
        scrollTop: 0,
      },
      500
    );
    return false;
  });
});

$(function ($) {
  var nav = $(".header__nav"),
    main = $("main"),
    offset = nav.offset();

  $(window).scroll(function () {
    if ($(window).scrollTop() > offset.top) {
      nav.addClass("fixed");
      main.addClass("main-top");
    } else {
      nav.removeClass("fixed");
      main.removeClass("main-top");
    }
  });
});

$(".title").on("click", function () {
  //タイトル要素をクリックしたら
  var findElm = $(this).next(".box"); //直後のアコーディオンを行うエリアを取得し
  $(findElm).slideToggle(); //アコーディオンの上下動作

  if ($(this).hasClass("close")) {
    //タイトル要素にクラス名closeがあれば
    $(this).removeClass("close"); //クラス名を除去し
  } else {
    //それ以外は
    $(this).addClass("close"); //クラス名closeを付与
  }
});
$(".header__link, #headerTabButtonBg").on("click", function () {
  var $btnTxt = $("#headerTabButtonBg").find(".btn-txt");
  var $tabButton = $("#headerTabButtonBg").find(".header__tabButton");

  if ($btnTxt.text() === "MENU") {
    $btnTxt.fadeOut(300, function () {
      $btnTxt.text("CLOSE").fadeIn(200);
    });
  } else {
    $btnTxt.fadeOut(300, function () {
      $btnTxt.text("MENU").fadeIn(200);
    });
  }

  $tabButton.toggleClass("open");
});
$(function () {
  // ハンバーガーメニューボタンとリンクのクリック時のイベントハンドラを設定
  $("#headerTabButtonBg, .header__link").click(function () {
    // もしbodyに.openクラスが存在する場合
    if ($("body").hasClass("open")) {
      // bodyのスタイルを元に戻す
      $("body").css({ height: "", overflow: "" });
      // touchmoveイベントのデフォルト処理を再有効にする
      document.removeEventListener("touchmove", preventDefault);
      // .openクラスをbodyから削除する
      $("body").removeClass("open");
    } else {
      // そうでなければ、bodyにheight: 100%とoverflow: hiddenを設定し、スクロールを無効にする
      $("body").css({ height: "100%", overflow: "hidden" });
      // スクロールを無効にするために、touchmoveイベントに対するデフォルトの処理を防ぐ
      document.addEventListener("touchmove", preventDefault, {
        passive: false,
      });
      // .openクラスをbodyに追加する
      $("body").addClass("open");
    }
  });

  // スクロールを無効にするための関数
  function preventDefault(event) {
    event.preventDefault();
  }
});
