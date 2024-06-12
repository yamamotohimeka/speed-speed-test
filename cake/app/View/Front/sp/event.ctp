<section class="events">
    <ol class="bread">
        <li><a href="/group/">グループトップ</a></li>
        <span>›</span>
        <li class="left-space"><a href="/">日本橋店</a></li>
        <span>›</span>
        <li class="bread-current">イベント情報</li>
    </ol>
    <h2 class="section-title">イベント情報</h2>
    <ul class="sub-menu">
        <li class="item"><a href="/schedule/" class="nav-link">出勤情報</a></li>
        <li class="item"><a href="/realtime/" class="nav-link">待ち時間情報</a></li>
        <li class="item"><a href="/girls/" class="nav-link">女の子一覧</a></li>
        <li class="item"><a href="/newface/" class="nav-link">新人情報</a></li>
        <li class="item"><a href="/story/" class="nav-link">ストーリーズ</a></li>
        <li class="item"><a href="/ranking/" class="nav-link">ランキング</a></li>
    </ul>
    <div class="shop-switch">
        <a href="/event/all" class="item"><span
                    class="text<?php if ($shop_id == 'all') echo ' yellow'; ?>">全店舗</span></a>
        <?php foreach ($groupShopArray as $key => $value) { ?>
            <a href="/event/<?php echo $key; ?>" class="item"><span
                        class="text<?php if ($shop_id == $key) echo ' yellow"'; ?>"><?php echo $value['name']; ?></span></a>
        <?php } ?>
    </div>

    <?php if (!empty($printArray['Event'])) { ?>
        <div class="events-inner">

            <?php foreach ($printArray['Event'] as $key => $value) { ?>
                <article class="events-post">
                    <div class="events-text">
                        <div class="events-shop"><?php echo $value['Event']['shop_name']; ?></div>
                        <?php if (!empty($value['Image'][0]['image_url'])) { ?>
                            <img src="<?php echo $value['Image'][0]['image_url']; ?>?<?php echo date('YmdHis'); ?>"
                                 class="events-banner">
                        <?php } ?>
                        <p><?php echo $value['Event']['comment']; ?></p>
                    </div>
                </article>
            <?php } ?>

        </div>
    <?php } ?>
</section>