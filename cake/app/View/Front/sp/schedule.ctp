<section class="schedule">
    <ol class="bread">
        <li><a href="/group/">グループトップ</a></li>
        <span>›</span>
        <li class="bread-current">出勤情報</li>
    </ol>
    <h2 class="section-title">出勤情報</h2>
    <ul class="sub-menu">
        <li class="item"><a href="/schedule/" class="nav-link">出勤情報</a></li>
        <li class="item"><a href="/realtime/" class="nav-link">待ち時間情報</a></li>
        <li class="item"><a href="/girls/" class="nav-link">女の子一覧</a></li>
        <li class="item"><a href="/newface/" class="nav-link">新人情報</a></li>
        <li class="item"><a href="/story/" class="nav-link">ストーリーズ</a></li>
        <li class="item"><a href="/ranking/" class="nav-link">ランキング</a></li>
    </ul>
    <div class="attend-indicator">点滅している女の子は本日出勤しております。</div>

    <div class="shop-switch">
        <a href="/schedule/all" class="item"><span
                    class="text<?php if ($shop_id == 'all') echo ' yellow'; ?>">全店舗</span></a>
        <?php foreach ($groupShopArray as $key => $value) { ?>
            <a href="/schedule/<?php echo $key; ?>" class="item"><span
                        class="text<?php if ($shop_id == $key) echo ' yellow"'; ?>"><?php echo $value['name']; ?></span></a>
        <?php } ?>
    </div>

    <div class="date-selector swiper-container">
        <div class="swiper-wrapper">
            <?php foreach ($workDateFrontPrintArray as $key => $value) { ?>
                <button class="swiper-slide item<?php if ($day == $workDateArray[$key]) echo ' swiper-slide-thumb-active'; ?>">
                    <a href="/schedule/<?php if (!empty($shop_id)) echo $shop_id . '/'; ?><?php echo $workDateArray[$key]; ?>/<?php echo $printChk; ?>"
                       class="schedule-link"><?php echo $value; ?></a></button>
            <?php } ?>
        </div>
    </div>

    <?php
    $printDayArray = explode("-", $day);
    $printDay = sprintf("%02d", $printDayArray[1]) . "月" . sprintf("%02d", $printDayArray[2]) . "日(" . $weekArray[date('w', strtotime($day))] . ")";
    ?>
    <p class="schedule-text"><?php echo $printDay; ?>の出勤情報です</p>

    <div class="schedule-group swiper-container">
        <!-- <div class="swiper-wrapper"> -->

        <?php if (!empty($printArray)) { ?>
            <div class="swiper-slide">
                <ul class="girl-list today-list">
                    <?php foreach ($printArray as $key => $value) { ?>
                        <li class="girl<?php if ($value['ScheduleStatus']['status'] == '只今出勤中') echo ' attending'; ?>">
                            <div class="girl-state state-attendance">
                                <span class="status"><?php echo $value['ScheduleStatus']['status']; ?></span>
                                <?php if (!empty($value['ScheduleStatus']['time'])) { ?>
                                    <time class="attending-time"><?php echo $value['ScheduleStatus']['time']; ?></time><?php } ?>
                            </div>
                            <?php if (!empty($value['Image']['image_url'])) { ?>
                                <div class="girl-image-wrap">
                                    <img src="<?php echo $value['Image']['image_url']; ?>" class="girl-image" alt="">
                                    <div class="girl-shop"><?php echo $value['Girl']['shop_name']; ?></div>
                                </div>
                            <?php } ?>
                            <div class="girl-meta">
                                <h3 class="name"><?php echo $value['Girl']['name']; ?></h3>
                                <span class="age"><?php echo $value['Girl']['age']; ?>歳</span>
                                <span class="sizes">T<?php echo $value['Girl']['height']; ?> B<?php echo $value['Girl']['size_b']; ?>(<?php echo $cupArray[$value['Girl']['size_c']]; ?>) W<?php echo $value['Girl']['size_w']; ?> H<?php echo $value['Girl']['size_h']; ?></span>
                                <ul class="icons">
                                    <?php if (!empty($value['Ranking'][0]['priority'])) { ?>
                                        <li><img
                                                src="/assets/sp/img/common/stats-icon-rank<?php echo $value['Ranking'][0]['priority']; ?>.png"
                                                alt=""/></li><?php } ?>
                                    <?php if (!empty($value['Girl']['newface'])) { ?>
                                        <li><img src="/assets/sp/img/common/stats-icon-newface.png" alt=""/>
                                        </li><?php } ?>
                                    <?php if (!empty($value['Girl']['amateur'])) { ?>
                                        <li><img src="/assets/sp/img/common/stats-icon-beginner.png" alt=""/>
                                        </li><?php } ?>
                                    <?php if (!empty($value['Girl']['twitter_id'])) { ?>
                                        <li><a href="<?php echo $value['Girl']['twitter_id']; ?>" target="_blank"><img
                                                    src="/assets/sp/img/common/stats-icon-twitter.png" alt="ツイッター"></a>
                                        </li><?php } ?>
                                </ul>
                                <ul class="features">
                                    <?php if (!empty($value['Girl']['label_1'])) { ?>
                                        <li><?php echo $value['Girl']['label_1']; ?></li><?php } ?>
                                    <?php if (!empty($value['Girl']['label_2'])) { ?>
                                        <li><?php echo $value['Girl']['label_2']; ?></li><?php } ?>
                                    <?php if (!empty($value['Girl']['label_3'])) { ?>
                                        <li><?php echo $value['Girl']['label_3']; ?></li><?php } ?>
                                    <?php if (!empty($value['Girl']['label_4'])) { ?>
                                        <li><?php echo $value['Girl']['label_4']; ?></li><?php } ?>
                                </ul>
                                <div class="nominate-fee">
                                    特別指名料<span class="value"><?php echo $value['Girl']['nominate_fare']; ?>円</span>
                                </div>
                            </div>
                            <a href="<?php echo $value['Girl']['profile_url']; ?>" class="link">詳細を見る</a>
                        </li>
                    <?php } ?>

                </ul>
            </div>
        <?php } ?>

        <?php if (!empty($Paging)) { ?>
            <div class="pager">
                <ol class="pager-nav">
                    <?php echo $Paging; ?>
                </ol>
            </div>
        <?php } ?>


        <!-- </div> -->
    </div>
</section>

<script>
    let dsel_top = document.querySelector('.date-selector').getBoundingClientRect().top + pageXOffset;

    const datesel = new Swiper('.date-selector', {
        slidesPerView: 2.4,
        speed: 400,
        freeMode: true,
        watchSlidesProgress: true,
        centeredSlides: true,
        centeredSlidesBounds: true,
        freeModeMomentum: false,
    });

    // const schedule_g = new Swiper('.schedule-group', {
    //   thumbs: {
    //     swiper: datesel,
    //   },
    //   speed: 400,
    //   watchSlidesVisibility: true,
    //   autoHeight: true,
    // });

    /* schedule_g.on('slideChange', () => {
      window.scrollTo({
        top: dsel_top,
        behavior: "smooth",
      });
    }); */
</script>
