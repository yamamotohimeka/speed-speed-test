<link rel="stylesheet" href="/assets/css/realtime.css" />

<div class="page page_realtime">

	<section class="rt">

		<div class="page_ttl">
			<h2>即ヒメ<span>STAND BY GIRL</span></h2>
		</div>

		<ol class="flex bread">
			<li>
			    <a href="/group/">グループトップ</a><span>›</span>
			</li>
			<li>
				即ヒメ
			</li>
		</ol>

		<div class="girls_wrap page_wrap sokuhime_wrap">

            <ul class="flex shop-list">
                <li class="shop-list__col"><a href="/realtime/all"<?php if($shop_id == 'all') echo ' class="active"'; ?> >全店舗表示</a></li>
                <?php foreach($groupShopArray AS $key => $value){ ?>
                    <li class="shop-list__col"><a href="/realtime/<?php echo $key; ?>"<?php if($shop_id == $key) echo ' class="active"'; ?>><?php echo $value['name']; ?></a></li>
                <?php } ?>
            </ul>

			<div class="girl_wrap_5col">

				<div class="wrap flex">

                        <?php foreach($realTimeTitleArray AS $key2 => $value2){ ?>
                        <?php if($key2 != 0 AND $key2 != 99){ ?>
                        <?php if(!empty($printArray['RealTime'][$key2])){ ?>
                        <?php foreach($printArray['RealTime'][$key2] AS $key => $value){ ?>
						<div class="col">
							<a href="<?php echo $value['Girl']['profile_url']; ?>">
								<div class="inner">
									<div class="status status_01"><span><?php echo $value['SchedulePrint']['Schedule'][WORK_DATE]['schedulePrint']; ?></span></div>
                                    <?php if(!empty($value['Image']['image'][0][1]['image_url'])){ ?>
                                        <div class="pic">
                                            <img src="<?php echo $value['Image']['image'][0][1]['image_url']; ?>" width="100%">
                                        </div>
                                    <?php } ?>
                                    <div class="shop"><?php echo $value['Girl']['shop_name']; ?></div>
									<div class="name"><?php echo $value['Girl']['name']; ?>（<?php echo $value['Girl']['age']; ?>）</div>
									<div class="size">T<?php echo $value['Girl']['height']; ?> B<?php echo $value['Girl']['size_b']; ?>(<?php echo $cupArray[$value['Girl']['size_c']]; ?>) W<?php echo $value['Girl']['size_w']; ?> H<?php echo $value['Girl']['size_h']; ?></div>
									<ul class="tug flex">
										<?php if(!empty($value['Girl']['label_1'])){ ?><li><?php echo $value['Girl']['label_1']; ?></li><?php } ?>
										<?php if(!empty($value['Girl']['label_2'])){ ?><li><?php echo $value['Girl']['label_2']; ?></li><?php } ?>
										<?php if(!empty($value['Girl']['label_3'])){ ?><li><?php echo $value['Girl']['label_3']; ?></li><?php } ?>
										<?php if(!empty($value['Girl']['label_4'])){ ?><li><?php echo $value['Girl']['label_4']; ?></li><?php } ?>
									</ul>
                                    <div class="special flex">
                                        <p>特別指名料</p>
                                        <p><?php echo $value['Girl']['nominate_fare'] ?>円</p>
                                    </div>
								</div>
							</a>
							<ul class="girl_icon_list">
								<?php if(!empty($value['Ranking'][0]['priority'])){ ?><li><img src="/assets/img/common/girl_icon_rank<?php echo $value['Ranking'][0]['priority']; ?>.png" alt="" /></li><?php } ?>
								<?php if(!empty($value['Girl']['newface'])){ ?><li><img src="/assets/img/common/girl_icon_new.png" alt="" /></li><?php } ?>
								<?php if(!empty($value['Girl']['amateur'])){ ?><li><img src="/assets/img/common/girl_icon_si.png" alt="" /></li><?php } ?>
								<?php if(!empty($value['Girl']['twitter_id'])){ ?>
								<li>
									<a href="<?php echo $value['Girl']['twitter_id']; ?>" target="_blank">
										<img src="/assets/img/common/girl_icon_tw.png" alt="" />
									</a>
								</li>
								<?php } ?>
							</ul>
						</div>
						<?php } ?>
                        <?php } ?>
                        <?php } ?>
                        <?php } ?>

					</div>
				</div>
			</div>
		</div>
	</section>

</div>
