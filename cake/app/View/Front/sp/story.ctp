    <section class="stories">
      <ol class="bread">
        <li><a href="/group/">グループトップ</a></li>
        <span>›</span>
        <li class="bread-current">ストーリーズ</li>
      </ol>
      <h2 class="section-title">ストーリーズ</h2>

      <div class="shop-switch">
        <a href="/story/all" class="item"><span class="text<?php if ($shop_id == 'all') echo ' yellow'; ?>">全店舗</span></a>
        <?php foreach ($groupShopArray as $key => $value) { ?>
          <a href="/story/<?php echo $key; ?>" class="item"><span class="text<?php if ($shop_id == $key) echo ' yellow"'; ?>"><?php echo $value['name']; ?></span></a>
        <?php } ?>
      </div>

      <?php if (!empty($printArray['Linebots'])) { ?>
        <?php foreach ($printArray['Linebots'] as $key => $value) { ?>
          <article class="stories-content">
            <?php if (!empty($value['Girl']['Image']['image'][0][1]['image_url'])) { ?>
              <div class="stories-icon">
                <a href="<?php echo $value['Girl']['Girl']['profile_url']; ?>">
                  <img src="<?php echo $value['Girl']['Image']['image'][0][1]['image_url']; ?>" class="stories-iconimage">
                </a>
              </div>
            <?php } ?>
            <header class="stories-head">
              <div class="stories-status">
                <span class="stories-status-attendance"><?php echo $value['Girl']['ScheduleStatus']['status']; ?></span>
                <?php if (!empty($value['Girl']['ScheduleStatus']['time'])) { ?><time class="stories-status-hour"><?php echo $value['Girl']['ScheduleStatus']['time']; ?></time><?php } ?>
              </div>
              <h3 class="stories-name"><?php echo $value['Girl']['Girl']['shop_name']; ?> <?php echo $value['Girl']['Girl']['name']; ?></h3>
            </header>
            <?php echo $value['Linebots']['file']['tag_url']; ?>
            <?php
            $dateTimeArray = explode(" ", $value['Linebots']['dateTime']);
            $dateTimeDayArray = explode("-", $dateTimeArray[0]);
            $dateTimeTimeArray = explode(":", $dateTimeArray[1]);
            ?>
            <time class="stories-timestamp"><?php echo $dateTimeDayArray[0]; ?>年<?php echo $dateTimeDayArray[1]; ?>月<?php echo $dateTimeDayArray[2]; ?>日 <?php echo $dateTimeTimeArray[0]; ?>:<?php echo $dateTimeTimeArray[1]; ?></time>
            <div class="stories-text"><?php echo nl2br($value['Linebots']['text']); ?></div>
          </article>
        <?php } ?>
      <?php } ?>

      <?php if (!empty($Paging)) { ?>
        <div class="pager">
          <ol class="review-page-nav pager-nav">
            <?php echo $Paging; ?>
          </ol>
        </div>
      <?php } ?>

    </section>