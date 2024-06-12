<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta name="description" content="<?php if (!empty($description)) echo $description; ?>" />
  <title><?php if (!empty($title)) echo $title; ?></title>
  <link rel="stylesheet" href="/assets/sp/css/style.css">
  <script src="/assets/sp/js/swiper.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.1/css/swiper.min.css">
  <script src="https://code.jquery.com/jquery-3.0.0.min.js"></script>
  <link rel="apple-touch-icon" sizes="180x180" href="/assets/img/common/speed-icon.png">
  <link rel="icon" href="/assets/img/common/favicon.ico" />
    <!-- ogp -->
    <meta property="og:type" content="website" />
    <meta property="og:title" content="<?php if (!empty($title)) echo $title; ?>" />
    <meta property="og:description" content="大阪・風俗・最大級のホテヘル(ホテルヘルス)<?php echo SHOP_AREA_NAME; ?>です。大阪で風俗をお探しなら在籍女の子数、女の子の可愛さ、料金全てにおいてお客様に満足いただけること間違いなしの当店へ是非一度ご来店下さい。" />
    <meta property="og:image" content="<?php echo SITE_URL; ?>/assets/img/common/ogp-kyoubashi.jpg">
    <meta property="og:image:alt" content="ホテヘルグループ<?php echo SITE_NAME; ?>">
    <meta property="og:url" content="<?php echo SITE_URL; ?>" />
    <meta property="og:site_name" content="ホテヘルグループ<?php echo SITE_NAME; ?>" />

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-YGHPKZFZKJ"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-YGHPKZFZKJ');
    </script>
  <!-- ////////////////アナリティクス//////////////// -->
<!--  <script>-->
<!--    (function(i, s, o, g, r, a, m) {-->
<!--      i['GoogleAnalyticsObject'] = r;-->
<!--      i[r] = i[r] || function() {-->
<!--        (i[r].q = i[r].q || []).push(arguments)-->
<!--      }, i[r].l = 1 * new Date();-->
<!--      a = s.createElement(o),-->
<!--        m = s.getElementsByTagName(o)[0];-->
<!--      a.async = 1;-->
<!--      a.src = g;-->
<!--      m.parentNode.insertBefore(a, m)-->
<!--    })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');-->
<!---->
<!--    ga('create', 'UA-17396237-5', 'auto');-->
<!--    ga('send', 'pageview');-->
<!--  </script>-->
  <!-- ////////////////アナリティクス//////////////// -->
</head>

<body>
  <div class="container">

    <?php echo $this->element('../Front/sp/header'); ?>

    <?php echo $content_for_layout; ?>

    <?php echo $this->element('../Front/sp/footer'); ?>

  </div>
</body>

</html>