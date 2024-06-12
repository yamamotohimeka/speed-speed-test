//トップスライダー
let topswiper = new Swiper(".top_swiper", {
	loop: true,
	slidesPerView: "auto",
	speed: 1000,
	autoplay: {
		delay: 10000,
	},

	//ページネーション表示の設定
	pagination: {
		el: ".swiper-pagination", //ページネーションの要素
		type: "bullets", //ページネーションの種類
		clickable: true, //クリックに反応させる
	},
});



//DOM読み込み完了後
$(window).on("load", function () {
	//ランキングスライダー
	let rankswiper1 = new Swiper(".rank_swiper_1", {
		loop: false,
		slidesPerView: "5",
		spaceBetween: 10,
		speed: 500,
		paginationClickable: true,
		allowTouchMove: true,
		autoplay: {
			delay: 2500,
		},
		navigation: {
			nextEl: ".swiper-button-next",
			prevEl: ".swiper-button-prev",
		},
	});

	let rankswipe2 = new Swiper(".rank_swiper_2", {
		loop: false,
		slidesPerView: "5",
		spaceBetween: 10,
		speed: 500,
		paginationClickable: true,
		allowTouchMove: true,
		autoplay: {
			delay: 2500,
		},
		navigation: {
			nextEl: ".swiper-button-next",
			prevEl: ".swiper-button-prev",
		},
	});

	let rankswiper3 = new Swiper(".rank_swiper_3", {
		loop: false,
		slidesPerView: "5",
		spaceBetween: 10,
		speed: 500,
		paginationClickable: true,
		allowTouchMove: true,
		autoplay: {
			delay: 2500,
		},
		navigation: {
			nextEl: ".swiper-button-next",
			prevEl: ".swiper-button-prev",
		},
	});
});

$(function () {
	var navPos = $("#fixednav").offset().top; // グローバルメニューの位置
	var navHeight = $("#fixednav").outerHeight(); // グローバルメニューの高さ

	$(window).on("scroll", function () {
		if ($(this).scrollTop() > navPos) {
			$("body").css("padding-top", navHeight);
			$("#fixednav").addClass("m_fixed");
			$(".h_tel").addClass("tel_fixed");
		} else {
			$("body").css("padding-top", 0);
			$("#fixednav").removeClass("m_fixed");
			$(".h_tel").removeClass("tel_fixed");
		}
	});

	//女の子アイコン位置調整
	// var girlIcon = $(".girl_icon_list");
	// var girlStatus = $(".status");

	// if (girlStatus.hasClass("status_02")) {
	// 	girlIcon.css("bottom", "178px");
	// } else if (girlStatus.hasClass("status_01")) {
	// 	girlIcon.css("bottom", "140px");
	// }


	//システムスライダー
	let systemswiper = new Swiper(".swiper_system", {
		loop: true,
		slidesPerView: "auto",
		speed: 1000,
		autoplay: {
			delay: 2500,
		},

		//ページネーション表示の設定
		/* pagination: {
			el: ".swiper-pagination", //ページネーションの要素
			type: "bullets", //ページネーションの種類
			clickable: true, //クリックに反応させる
		}, */

		navigation: {
			nextEl: '.swiper-system-next',
			prevEl: '.swiper-system-prev',
		}
	});

	//アクセススライダー
	$(".bxslider1").bxSlider();
	$(".bxslider2").bxSlider();

	//プロフィール写真
	//プロフィールイメージをホバーしたら変更

	function profImageChange(panel) {
		var mainimage = $(panel + " " + ".mainimage").attr("src");
		$(panel + " " + ".subpic div").hover(
			function () {
				//オーバーしたliのインデックスを取得
				var index = $(panel + " " + ".subpic div").index(this);
				//オーバーした画像URLを取得
				var imageurl = $(panel + " " + ".subpic div")
					.eq(index)
					.find("img")
					.attr("src");
				//ulのクラス名を取得（空白で分割）
				className = $(this).parent().attr("class").split(" ");
				//元のメイン画像を保存しておく
				defaultImage = $(panel + " " + "img.mainimage." + className[1]).attr("src");
				$(panel + " " + "img.mainimage." + className[1]).attr("src", imageurl);
			}
			// ,トップ画像表示
			// function () {
			// 	$(panel + " " + ".mainimage").attr("src", mainimage);
			// }
		);
	}

	function profImage() {
		for (var i = 1; i < 11; i++) {
			profImageChange("#panel1-" + i);
		}
		for (var j = 1; j < 11; j++) {
			profImageChange("#panel2-" + j);
		}
		for (var k = 1; k < 11; k++) {
			profImageChange("#panel3-" + k);
		}
	}

	profImage();

	profImageChange(".panel-prof");

	//口コミタブ切り替え
	let reviewtab1 = $(".prof_review .tab1");
	let reviewtab2 = $(".prof_review .tab2");
	let reviewtabitem1 = $(".prof_review .tabitem1");
	let reviewtabitem2 = $(".prof_review .tabitem2");

	$(".prof_review .tab1").on("click", function () {
		reviewtabitem2.hide();
		reviewtabitem1.show();
		reviewtab2.removeClass("active");
		reviewtab1.addClass("active");
	});
	$(".prof_review .tab2").on("click", function () {
		reviewtabitem1.hide();
		reviewtabitem2.show();
		reviewtab1.removeClass("active");
		reviewtab2.addClass("active");
	});

	//最新情報（店舗トップ）タブ切り替え
	let newstab1 = $(".news .tab1");
	let newstab2 = $(".news .tab2");
	let newstabitem1 = $(".news .tabitem1");
	let newstabitem2 = $(".news .tabitem2");

	$(".news .tab1").on("click", function () {
		newstabitem2.hide();
		newstabitem1.show();
		newstab2.removeClass("active");
		newstab1.addClass("active");
	});
	$(".news .tab2").on("click", function () {
		newstabitem1.hide();
		newstabitem2.show();
		newstab1.removeClass("active");
		newstab2.addClass("active");
	});

	//リアルタイムタブ切り替え
	let rtnftab1 = $(".rt_nf .tab1");
	let rtnftab2 = $(".rt_nf .tab2");
	let rtnftabitem1 = $(".rt_nf .tabitem1");
	let rtnftabitem2 = $(".rt_nf .tabitem2");

	$(".rt_nf .tab1").on("click", function () {
		rtnftabitem2.hide();
		rtnftabitem1.show();
		rtnftab2.removeClass("active");
		rtnftab1.addClass("active");
	});
	$(".rt_nf .tab2").on("click", function () {
		rtnftabitem1.hide();
		rtnftabitem2.show();
		rtnftab1.removeClass("active");
		rtnftab2.addClass("active");
	});

	//ランキング種類タブ切り替え
	let ranktab1 = $(".rank .tab1");
	let ranktab2 = $(".rank .tab2");
	let ranktab3 = $(".rank .tab3");
	let ranktabitem1 = $(".rank .tabitem1");
	let ranktabitem2 = $(".rank .tabitem2");
	let ranktabitem3 = $(".rank .tabitem3");

	var positionauto = {
		position: "relative",
		top: "auto",
	};

	var position9999 = {
		position: "absolute",
		top: "-99999px",
	};

	// リロード時に大きいサイズで表示されるのを防止
	$(".rank_list").css("opacity", "1");

	$(".rank .tab1").on("click", function () {
		ranktabitem2.css(position9999);
		ranktabitem3.css(position9999);
		ranktabitem1.css(positionauto);
		ranktab2.removeClass("active");
		ranktab3.removeClass("active");
		ranktab1.addClass("active");
	});
	$(".rank .tab2").on("click", function () {
		ranktabitem1.css(position9999);
		ranktabitem3.css(position9999);
		ranktabitem2.css(positionauto);
		ranktab1.removeClass("active");
		ranktab3.removeClass("active");
		ranktab2.addClass("active");
	});
	$(".rank .tab3").on("click", function () {
		ranktabitem1.css(position9999);
		ranktabitem2.css(position9999);
		ranktabitem3.css(positionauto);
		ranktab1.removeClass("active");
		ranktab2.removeClass("active");
		ranktab3.addClass("active");
	});

	//ランキング女の子切り替え
	//全体を予めCSSで非表示
	$('#tabs1 a[href^="#panel"]').click(function () {
		$("#tabs1 .panel1").hide(); //パネル全てを非表示
		$(this.hash).fadeIn(); //a hrefに連動したIDのタグを表示（hashで順番取得）
		return false;
	});
	//1つ目を表示させておく
	$('#tabs1 a[href^="#panel"]:eq(0)').trigger("click");

	$('#tabs2 a[href^="#panel"]').click(function () {
		$("#tabs2 .panel2").hide();
		$(this.hash).fadeIn();
		return false;
	});
	$('#tabs2 a[href^="#panel"]:eq(0)').trigger("click");

	$('#tabs3 a[href^="#panel"]').click(function () {
		$("#tabs3 .panel3").hide();
		$(this.hash).fadeIn();
		return false;
	});
	$('#tabs3 a[href^="#panel"]:eq(0)').trigger("click");

	// //プロフィールページTwitterがある時とない時の高さ設定
	// if ($(".page_prof .twitter-timeline").length) {
	// 	$(".page_prof .story_wrap").css("height", "1445px");
	// } else {
	// 	$(".page_prof .story_wrap").css("height", "2668px");
	// }
});

//top ranking読み込み後表示
window.onload = function () {
	$(".swiper-wrapper").css({
		"opacity": 1,
		"height": "auto"
	});
	$(".swiper-button-prev").css({
		"opacity": 1,
		"height": "auto"
	});
	$(".swiper-button-next").css({
		"opacity": 1,
		"height": "auto"
	});
};

//ポイントカードバナー
$(document).ready(function(){
	$('.close').on('click', function(){
		$('.pointcard').fadeOut('slow');
	});
});
// 現在のURLを取得
var currentUrl = window.location.pathname;

// ナビゲーションリンクの親要素のリストを取得
var navLinks = document.querySelectorAll('.nav2 .flex li a');

// ナビゲーションリンクの数だけループ
navLinks.forEach(function(navLink) {
	// ナビゲーションリンクのhref属性を取得
	var linkHref = navLink.getAttribute('href');

	// 現在のURLとリンクのhref属性が一致したら
	if (currentUrl === linkHref) {
		// リンクにactiveクラスを追加
		navLink.classList.add('active');
	}
});


document.addEventListener("DOMContentLoaded", function() {
	var images = document.querySelectorAll(".page_prof .blk01 img");
	var imagesLoaded = 0;

	// 画像の読み込みが完了した数をカウントし、すべての画像が読み込まれたかを確認する関数
	function checkImagesLoaded() {
		imagesLoaded++;
		if (imagesLoaded === images.length) {
			setHeights(); // すべての画像が読み込まれたら高さを調整する関数を呼び出す
		}
	}

	// 画像の読み込みが完了したかを確認し、完了したらcheckImagesLoaded関数を呼び出す
	images.forEach(function(image) {
		if (image.complete) {
			checkImagesLoaded();
		} else {
			image.addEventListener("load", checkImagesLoaded);
		}
	});

	// 高さを調整する関数
	function setHeights() {
		var blk01Height = document.querySelector(".page_prof .blk01").offsetHeight;
		document.querySelector(".page_prof .blk02").style.maxHeight = blk01Height + "px";
		var storyWrap = document.querySelector(".story_wrap");
		storyWrap.style.height = (blk01Height - 74) + "px";
	}
});entListener("resize", setHeights);