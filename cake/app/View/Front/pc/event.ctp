<link rel="stylesheet" href="/assets/css/event.css" />

			<section class="page page_event">

				<div class="page_ttl">
					<h2>イベント情報<span>EVENT</span></h2>
				</div>

				<ol class="flex bread">
					<li>
			            <a href="/group/">グループトップ</a><span>›</span>
					</li>
					<li>
						イベント情報
					</li>
				</ol>
<?php if(!empty($printArray['Event'])){ ?>
				<div class="event_wrap page_wrap">

                    <ul class="flex shop-list">
                        <li class="shop-list__col"><a href="/event/all"<?php if($shop_id == 'all') echo ' class="active"'; ?> >全店舗表示</a></li>
                        <?php foreach($groupShopArray AS $key => $value){ ?>
                            <li class="shop-list__col"><a href="/event/<?php echo $key; ?>"<?php if($shop_id == $key) echo ' class="active"'; ?>><?php echo $value['name']; ?></a></li>
                        <?php } ?>
                    </ul>

                      <?php foreach($printArray['Event'] AS $key => $value){ ?>
                      <div class="event_col">
                        <div class="tag_wrap">
                          <div class="shop_tag"><?php echo $value['Event']['shop_name']; ?></div>
                        </div>
                        <div class="article">
                            <?php if(!empty($value['Image'][0]['image_url'])){ ?>
                                <img src="<?php echo $value['Image'][0]['image_url']; ?>?<?php echo date('YmdHis'); ?>" width="100%">
                            <?php } ?>
                            <?php if(!empty($value['Event']['title'])) echo $value['Event']['title'] . '<br />'; ?>
                            <?php echo $value['Event']['comment']; ?>
                        </div>
                      </div>
                      <?php } ?>

				</div>
<?php } ?>
			</section>
