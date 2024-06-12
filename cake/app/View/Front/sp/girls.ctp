<section class="girls">
    <ol class="bread">
        <li><a href="/group/">グループトップ</a></li>
        <span>›</span>
        <li class="bread-current">女の子一覧</li>
    </ol>
    <h2 class="section-title">女の子一覧</h2>
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
        <a href="/girls/all" class="item"><span
                    class="text<?php if ($shop_id == 'all') echo ' yellow'; ?>">全店舗</span></a>
        <?php foreach ($groupShopArray as $key => $value) { ?>
            <a href="/girls/<?php echo $key; ?>" class="item"><span
                        class="text<?php if ($shop_id == $key) echo ' yellow"'; ?>"><?php echo $value['name']; ?></span></a>
        <?php } ?>
    </div>

    <!-- <form action="/girls/" class="girl-search" id="SearchGirlsForm" method="post" accept-charset="utf-8">
        <input type="hidden" name="shop_id" value="<?php echo $shop_id; ?>">
        <p class="label">絞り込み</p>
        <div class="filter">
          <div class="filter-list">
            <label class="item"><input type="radio" name="data[Search][radio]" value="all" <?php if ($this->request->data['Search']['radio'] == 'all') echo ' checked="checked"'; ?> id="radio-all" checked="checked">全件表示</label>
            <label class="item"><input type="radio" name="data[Search][radio]" value="Newface" <?php if ($this->request->data['Search']['radio'] == 'Newface') echo ' checked="checked"'; ?> id="radio-new">新人だけを表示</label>
            <label class="item"><input type="radio" name="data[Search][radio]" value="Amateur" <?php if ($this->request->data['Search']['radio'] == 'Amateur') echo ' checked="checked"'; ?> id="radio-new2">新人で未経験だけを表示</label>
            <div class="btn_submit">
              <input type="submit" value="検索">
            </div>
          </div>
        </div>
        <?php echo $this->Form->end(); ?> -->

    <div class="filter">
        <h3 class="title">絞り込み</h3>
        <form action="/girls/" class="girl-search" id="SearchGirlsForm" method="post" accept-charset="utf-8">
            <input type="hidden" name="shop_id" value="<?php echo $shop_id; ?>">
            <div class="filter-list">
                <label class="item"><input type="radio" name="data[Search][radio]"
                                           value="all" <?php if ($search == 'all') echo ' checked="checked"'; ?>
                                           id="radio-all" checked="checked">全件表示</label>
                <label class="item"><input type="radio" name="data[Search][radio]"
                                           value="Newface" <?php if ($search == 'Newface') echo ' checked="checked"'; ?>
                                           id="radio-new">新人だけを表示</label>
                <label class="item"><input type="radio" name="data[Search][radio]"
                                           value="Amateur" <?php if ($search == 'Amateur') echo ' checked="checked"'; ?>
                                           id="radio-new2">新人で未経験だけを表示</label>
                <div class="btn_submit">
                    <input type="submit" value="検索">
                </div>
            </div>
            <?php echo $this->Form->end(); ?>
    </div>

    <?php if (!empty($printArray['Girl'])) { ?>
        <ul class="girl-list" id="girllist">

            <?php foreach ($printArray['Girl'] as $key => $value) { ?>
                <li class="girl<?php if ($value['ScheduleStatus']['status'] == '只今出勤中') echo ' attending'; ?>">
                    <div class="girl-state state-list">
                        <span class="status"><?php echo $value['ScheduleStatus']['status']; ?></span>
                        <?php if (!empty($value['ScheduleStatus']['time'])) { ?>
                            <time class="attending-time"><?php echo $value['ScheduleStatus']['time']; ?></time><?php } ?>
                    </div>
                    <?php if (!empty($value['Image']['image'][0][1]['image_url'])) { ?>
                        <div class="girl-image-wrap">
                            <img src="<?php echo $value['Image']['image'][0][1]['image_url']; ?>" class="girl-image"
                                 alt="">
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
                                <li><img src="/assets/sp/img/common/stats-icon-newface.png" alt=""/></li><?php } ?>
                            <?php if (!empty($value['Girl']['amateur'])) { ?>
                                <li><img src="/assets/sp/img/common/stats-icon-beginner.png" alt=""/></li><?php } ?>
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
    <?php } ?>

    <?php if (!empty($Paging)) { ?>
        <div class="pager">
            <ol class="review-page-nav pager-nav">
                <?php echo $Paging; ?>
            </ol>
        </div>
    <?php } ?>

</section>