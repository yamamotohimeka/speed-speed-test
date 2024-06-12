<section class="ranking">
    <ol class="bread">
        <li><a href="/group/">グループトップ</a></li>
        <span>›</span>
        <li class="bread-current">ランキング</li>
    </ol>
    <h2 class="section-title">ランキング</h2>
    <ul class="sub-menu">
        <li class="item"><a href="/schedule/" class="nav-link">出勤情報</a></li>
        <li class="item"><a href="/realtime/" class="nav-link">待ち時間情報</a></li>
        <li class="item"><a href="/girls/" class="nav-link">女の子一覧</a></li>
        <li class="item"><a href="/newface/" class="nav-link">新人情報</a></li>
        <li class="item"><a href="/story/" class="nav-link">ストーリーズ</a></li>
        <li class="item"><a href="/ranking/" class="nav-link">ランキング</a></li>
    </ul>
    <div class="shop-switch">
        <!-- a href="/ranking/all" class="item"><span class="text<?php if ($shop_id == 'all') echo ' yellow'; ?>">全店舗</span></a -->
        <?php foreach ($groupShopArray as $key => $value) { ?>
            <a href="/ranking/<?php echo $key; ?>" class="item"><span
                        class="text<?php if ($shop_id == $key) echo ' yellow"'; ?>"><?php echo $value['name']; ?></span></a>
        <?php } ?>
    </div>

    <div class="ranking-switch swiper-container">
        <div class="swiper-wrapper">
            <button class="ranking-type swiper-slide">総合ランキング/ranking10</button>
            <?php if (!empty($printArray['Ranking'][1][0]['Ranking']['title'])) { ?>
                <button class="ranking-type swiper-slide"><?php echo $printArray['Ranking'][1][0]['Ranking']['title']; ?></button><?php } ?>
            <?php if (!empty($printArray['Ranking'][2][0]['Ranking']['title'])) { ?>
                <button class="ranking-type swiper-slide"><?php echo $printArray['Ranking'][2][0]['Ranking']['title']; ?></button><?php } ?>
        </div>
    </div>
    <div class="ranking-wrapper swiper-container">
        <div class="swiper-wrapper">

            <?php foreach ($rankingArray as $key2 => $value2) { ?>
                <?php if (!empty($printArray['Ranking'][$key2])) { ?>
                    <?php foreach ($printArray['Ranking'][$key2] as $key => $value) { ?>
                        <?php
                        if ($key2 == 0) {
                            $title = '総合ランキング';
                        } else {
                            $title = $printArray['Ranking'][$key2][0]['Ranking']['title'];
                        }
                        ?>
                    <?php } ?>
                    <section class="ranking-content swiper-slide">
                        <h3 hidden><?php echo $title; ?></h3>
                        <div class="ranking-top">
                            <div class="ranking-top-inner">
                                <div class="ranking-top-text">
                                    <div class="ranking-top-title">
                                        <p class="left"><span class="ja"><?php echo $title; ?></span><br>RANKING</p>
                                        <span class="right"><em
                                                    class="num"><?php echo $printArray['Ranking'][$key2][0]['Ranking']['priority']; ?></em>位</span>
                                    </div>
                                    <header class="ranking-top-meta">
                                        <h4 class="ranking-top-name"><?php echo $printArray['Ranking'][$key2][0]['Girl']['name']; ?>
                                            <span class="ranking-top-age">(<?php echo $printArray['Ranking'][$key2][0]['Girl']['age']; ?>)
                                        </h4>
                                        <p class="ranking-top-sizes">
                                            T<?php echo $printArray['Ranking'][$key2][0]['Girl']['height']; ?>
                                            B<?php echo $printArray['Ranking'][$key2][0]['Girl']['size_b']; ?>
                                            (<?php echo $cupArray[$printArray['Ranking'][$key2][0]['Girl']['size_c']]; ?>
                                            ) W<?php echo $printArray['Ranking'][$key2][0]['Girl']['size_w']; ?>
                                            H<?php echo $printArray['Ranking'][$key2][0]['Girl']['size_h']; ?></p>
                                    </header>
                                    <div class="ranking-top-fee">
                                        特別指名料<span
                                                class="value"><?php echo $printArray['Ranking'][$key2][0]['Girl']['nominate_fare']; ?>円</span>
                                    </div>
                                    <div class="ranking-top-attendance">
                                        <span class="ranking-top-attendance-status"><?php echo $printArray['Ranking'][$key2][0]['ScheduleStatus']['status']; ?></span>
                                        <?php if (!empty($printArray['Ranking'][$key2][0]['ScheduleStatus']['time'])) { ?>
                                            <time class="ranking-top-attendance-time"><?php echo $printArray['Ranking'][$key2][0]['ScheduleStatus']['time']; ?></time><?php } ?>
                                    </div>
                                    <ul class="ranking-top-features">
                                        <?php if (!empty($printArray['Ranking'][$key2][0]['Girl']['label_1'])) { ?>
                                            <li class="item"><?php echo $printArray['Ranking'][$key2][0]['Girl']['label_1']; ?></li><?php } ?>
                                        <?php if (!empty($printArray['Ranking'][$key2][0]['Girl']['label_2'])) { ?>
                                            <li class="item"><?php echo $printArray['Ranking'][$key2][0]['Girl']['label_2']; ?></li><?php } ?>
                                        <?php if (!empty($printArray['Ranking'][$key2][0]['Girl']['label_3'])) { ?>
                                            <li class="item"><?php echo $printArray['Ranking'][$key2][0]['Girl']['label_3']; ?></li><?php } ?>
                                        <?php if (!empty($printArray['Ranking'][$key2][0]['Girl']['label_4'])) { ?>
                                            <li class="item"><?php echo $printArray['Ranking'][$key2][0]['Girl']['label_4']; ?></li><?php } ?>
                                    </ul>
                                    <a href="" class="ranking-top-reserve" hidden>この子をWEB予約する</a>
                                </div>
                                <?php if (!empty($printArray['Ranking'][$key2][0]['Image'][1]['Image']['image_url'])) { ?>
                                    <div class="ranking-top-image">
                                        <img src="<?php echo $printArray['Ranking'][$key2][0]['Image'][1]['Image']['image_url']; ?>"
                                             class="ranking-top-image-main" alt=""/>
                                    </div>
                                <?php } ?>
                            </div>
                            <a href="<?php echo $printArray['Ranking'][$key2][0]['Girl']['profile_url']; ?>"
                               class="ranking-top-link">詳細を見る</a>
                        </div>

                        <div class="ranking-list">
                            <ul class="ranking-list-inner">
                                <?php foreach ($printArray['Ranking'][$key2] as $key => $value) { ?>
                                    <?php if ($key > 0) { ?>
                                        <li class="ranking-list-item">
                                            <h4 class="ranking-list-head"><?php echo $value['Girl']['name']; ?>
                                                (<?php echo $value['Girl']['age']; ?>)</h4>
                                            <div class="ranking-list-attendance">
                                                <span class="ranking-list-attendance-status"><?php echo $value['ScheduleStatus']['status']; ?></span>
                                                <?php if (!empty($value['ScheduleStatus']['time'])) { ?>
                                                    <time class="ranking-list-attendance-time"><?php echo $value['ScheduleStatus']['time']; ?></time><?php } ?>
                                            </div>
                                            <div class="ranking-list-image-wrap">
                                                <?php if (!empty($value['Image'][1]['Image']['image_url'])) { ?>
                                                    <img src="<?php echo $value['Image'][1]['Image']['image_url']; ?>"
                                                         class="ranking-list-image" alt=""/>
                                                <?php } ?>
                                                <img src="/assets/sp/img/common/stats-icon-rank<?php echo $value['Ranking']['priority']; ?>.png"
                                                     alt="順位アイコン" class="ranking-list-image-rank">
                                            </div>
                                            <p class="ranking-list-sizes">T<?php echo $value['Girl']['height']; ?>
                                                B<?php echo $value['Girl']['size_b']; ?>
                                                (<?php echo $cupArray[$value['Girl']['size_c']]; ?>)
                                                W<?php echo $value['Girl']['size_w']; ?>
                                                H<?php echo $value['Girl']['size_h']; ?></p>
                                            <a href="<?php echo $value['Girl']['profile_url']; ?>"
                                               class="ranking-list-link">詳細を見る</a>
                                        </li>
                                    <?php } ?>
                                <?php } ?>
                            </ul>
                        </div>

                    </section>
                <?php } ?>
            <?php } ?>

        </div>
    </div>
</section>


<script>
    const ranking_type = new Swiper('.ranking-switch', {
        slidesPerView: 2,
        speed: 400,
        freeMode: true,
        watchSlidesProgress: true,
        centeredSlides: true,
        centeredSlidesBounds: false,
        breakpoints: {
            1200: {
                slidesPerView: 1,
                allowSlideNext: false,
                allowSlidePrev: false,
                allowTouchMove: false,
            }
        }
    });

    const ranking_wrap = new Swiper('.ranking-wrapper', {
        thumbs: {
            swiper: ranking_type,
        },
        spaceBetween: 20,
        speed: 400,
        watchSlidesVisibility: true,
        autoHeight: true,
        breakpoints: {
            1200: {
                spaceBetween: 10,
            }
        }
    });
</script>