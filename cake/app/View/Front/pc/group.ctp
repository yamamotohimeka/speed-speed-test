<link rel="stylesheet" href="/assets/css/top.css" />

<!--ポイントカードバナーここから-->
<link rel="stylesheet" href="/assets/css/pointcard.css" />
<div class="pointcard">
    <div class="pointcard__inner">
        <a class="close"><div class="clbtn close"><span></span></div></a>
        <div class="pointcard__img">
            <a href="https://speed-speed.com/news/" target="_blank">
                <img src="/assets/img/common/pointcard_bnr.gif" alt="ポイントカードバナー" />
            </a>
        </div>
    </div>
</div>
<!--ここまで -->


<!-- <?php if (strtotime(date('YmdHi')) < strtotime('202105010000')) : //古い方 
			?>
	<h3 class="top_bnr"><a href="/special/" target="_blank"><img src="/assets/special2/img/bnr_main.jpg"></a></h3>
<?php else : //新しい方 
?>
	<h3 class="top_bnr"><a href="/special/" target="_blank"><img src="/assets/special/img/bnr_main.jpg"></a></h3>
<?php endif; ?> -->

<h3 class="top_bnr"><a href="/special/" target="_blank"><img src="/assets/special/img/special3/bnr_special.gif"></a></h3>


<article>
	<div class="flex top_wrap">
		<div class="blk01">

			<?php if (!empty($printArray['Linebots'])) { ?>
				<section class="story">
					<h2 class="block_ttl">最新のストーリーズ / Stories</h2>
					<div class="story_wrap fox_scroll">
						<?php foreach ($printArray['Linebots'] as $key => $value) { ?>
							<div class="story_col">
								<div class="flex icon_col">
									<?php if (!empty($value[Girl]['Image']['image'][0][1]['image_url'])) { ?>
										<div class="pic_story">
											<a href="<?php echo $value['Girl']['Girl']['profile_url']; ?>">
												<img src="<?php echo $value[Girl]['Image']['image'][0][1]['image_url']; ?>">
											</a>
										</div>
									<?php } ?>
									<div>
										<p class="status status_0<?php if (!empty($value['Girl']['ScheduleStatus']['time'])) {
																								echo '2';
																							} else {
																								echo '1';
																							} ?>">
											<span><?php echo $value['Girl']['ScheduleStatus']['status']; ?></span>
											<?php if (!empty($value['Girl']['ScheduleStatus']['time'])) { ?><span><?php echo $value['Girl']['ScheduleStatus']['time']; ?></span><?php } ?>
										</p>
										<p><a href="<?php echo $value['Girl']['Girl']['profile_url']; ?>"><?php echo $value['Girl']['Girl']['shop_name']; ?> <?php echo $value['Girl']['Girl']['name']; ?></a></p>
									</div>
								</div>
								<div class="content">
									<?php echo $value['Linebots']['file']['tag_url']; ?>
									<p><?php echo nl2br($value['Linebots']['text']); ?></p>
								</div>
							</div>
						<?php } ?>
						<div class="top_more_btn_sub"><a href="/story/">もっとみる</a></div>
					</div>
				</section>
			<?php } ?>

		</div>

		<div class="blk02">

			<?php if (!empty($printArray['SliderGroup'] or $printArray['SliderShop'])) { ?>
				<section class="slider">
					<div class="swiper-container sl top_swiper">
						<div class="swiper-wrapper">

							<?php if (!empty($printArray['SliderGroup'])) { ?>
								<?php foreach ($printArray['SliderGroup'] as $key => $value) { ?>
									<?php if (!empty($value['Image'][0]['image_url'])) { ?>
										<div class="swiper-slide">
										    <?php if (!empty($value['Slider']['url'])) echo '<a href="' . $value['Slider']['url'] . '" target="_blank">'; ?>
											<img src="<?php echo $value['Image'][0]['image_url']; ?>">
											<?php if (!empty($value['Slider']['url'])) echo '</a>'; ?>
											<!-- <?php if (!empty($value['Slider']['shop_name'])) { ?><p class="">SPEED<?php echo $value['Slider']['shop_name']; ?></p><?php } ?> -->
											<p>SPEEDGROUP</p>
										<?php } ?>
										</div>
									<?php } ?>
								<?php } ?>

								<?php if (!empty($printArray['SliderShop'])) { ?>
									<?php shuffle($printArray['SliderShop']); ?>
									<?php foreach ($printArray['SliderShop'] as $key => $value) { ?>
										<?php if (!empty($value['Image'][0]['image_url'])) { ?>
											<div class="swiper-slide">
											    <?php if (!empty($value['Slider']['url'])) echo '<a href="' . $value['Slider']['url'] . '" target="_blank">'; ?>
												<img style="width: 660px; height: 468px" src="<?php echo $value['Image'][0]['image_url']; ?>">
												<?php if (!empty($value['Slider']['url'])) echo '</a>'; ?>
												<?php if (!empty($value['Slider']['shop_name'])) { ?><p class="">SPEED<?php echo $value['Slider']['shop_name']; ?></p><?php } ?>
											<?php } ?>
											</div>
										<?php } ?>
									<?php } ?>


						</div>
						<div class="swiper-pagination"></div>
					</div>
				</section>
			<?php } ?>

			<?php if (!empty($printArray['GirlNewface'])) { ?>
				<section class="nf">
					<h2 class="block_ttl">新人情報 / New face</h2>
					<div class="nf_wrap">
						<div class="shop shop-check">
							<ul class="flex-newface shop-list-newface">
								<li class="shop-list-newface__col"><a href="/newface/" class="active">全店舗表示</a></li>
								<?php foreach ($groupShopArray as $key => $value) { ?>
									<li class="shop-list-newface__col"><a href="/newface/<?php echo $key; ?>"><?php echo $value['name']; ?></a></li>
								<?php } ?>
							</ul>
						</div>

						<div class="inner fox_scroll">

							<?php foreach ($printArray['GirlNewface'] as $key => $value) { ?>
								<div class="nf_col">
									<div class="flex">
										<div class="blk01">
											<?php if (!empty($value['Image']['image'][0][1]['image_url'])) { ?>
												<div class="pic_nf">
													<a href="<?php echo $value['Girl']['profile_url']; ?>">
														<img src="<?php echo $value['Image']['image'][0][1]['image_url']; ?>" width="240" alt="">
													</a>
												</div>
											<?php } ?>
											<ul class="tug flex">
												<?php if (!empty($value['Girl']['label_1'])) { ?><li><?php echo $value['Girl']['label_1']; ?></li><?php } ?>
												<?php if (!empty($value['Girl']['label_2'])) { ?><li><?php echo $value['Girl']['label_2']; ?></li><?php } ?>
												<?php if (!empty($value['Girl']['label_3'])) { ?><li><?php echo $value['Girl']['label_3']; ?></li><?php } ?>
												<?php if (!empty($value['Girl']['label_4'])) { ?><li><?php echo $value['Girl']['label_4']; ?></li><?php } ?>
											</ul>
											<div class="special flex">
												<p>特別指名料</p>
												<p><?php echo $value['Girl']['nominate_fare'] ?>円</p>
											</div>
										</div>
										<div class="blk02">
											<?php if (!empty($value['Girl']['started_at'])) { ?><div class="date"><?php $started_at = new DateTime($value['Girl']['started_at']);
																																														echo $started_at->format('m月d日'); ?>入店</div><?php } ?> <dl class="flex">
												<dt><?php echo $value['Girl']['name']; ?>（<?php echo $value['Girl']['age']; ?>）</dt>
												<dd>T<?php echo $value['Girl']['height']; ?> B<?php echo $value['Girl']['size_b']; ?>(<?php echo $cupArray[$value['Girl']['size_c']]; ?>) W<?php echo $value['Girl']['size_w']; ?> H<?php echo $value['Girl']['size_h']; ?></dd>
											</dl>
											<?php if (!empty($value['Girl']['comment'])) { ?>
												<div class="cut_nf_txt"><?php echo $value['Girl']['comment']; ?></div>
											<?php } ?>
											<div class="more">
												<a href="<?php echo $value['Girl']['profile_url']; ?>">続きを読む</a>
											</div>
											<div class="status_wrap">
												<p class="status status_0<?php if (!empty($value['ScheduleStatus']['time'])) {
																										echo '2';
																									} else {
																										echo '1';
																									} ?>">
													<span><?php echo $value['ScheduleStatus']['status']; ?></span>
													<?php if (!empty($value['ScheduleStatus']['time'])) { ?><span><?php echo $value['ScheduleStatus']['time']; ?></span><?php } ?>
												</p>
												<p class="girl_shop"><?php echo $value['Girl']['shop_name']; ?></p>
											</div>
										</div>
									</div>
								</div>
							<?php } ?>

							<div class="top_more_btn_sub"><a href="/newface/">もっとみる</a></div>
						</div>

					</div>
				</section>
			<?php } ?>

		</div>
	</div>

	<?php if (!empty($printArray['RealTime'])) { ?>
		<section class="rt">
			<h2 class="block_ttl">即ヒメ / STAND BY GIRL</h2>
			<div class="rt_wrap sokuhime_wrap">

				<ul class="flex shop-list">
					<li class="shop-list__col"><a href="/realtime/" class="active">全店舗表示</a></li>
					<?php foreach ($groupShopArray as $key => $value) { ?>
						<li class="shop-list__col"><a href="/realtime/<?php echo $key; ?>"><?php echo $value['name']; ?></a></li>
					<?php } ?>
				</ul>

				<div class="girl_wrap_5col">

					<div class="wrap flex">

						<?php foreach ($realTimeTitleArray as $key2 => $value2) { ?>
							<?php if ($key2 != 0 and $key2 != 99) { ?>
								<?php if (!empty($printArray['RealTime'][$key2])) { ?>
									<?php foreach ($printArray['RealTime'][$key2] as $key => $value) { ?>
										<div class="col">
											<a href="<?php echo $value['Girl']['profile_url']; ?>">
												<div class="inner">
													<div class="status status_01"><span><?php echo $value['SchedulePrint']['Schedule'][WORK_DATE]['schedulePrint']; ?></span></div>
													<?php if (!empty($value['Image']['image'][0][1]['image_url'])) { ?>
														<div class="pic">
															<img src="<?php echo $value['Image']['image'][0][1]['image_url']; ?>" width="100%">
														</div>
													<?php } ?>
													<div class="shop"><?php echo $value['Girl']['shop_name']; ?></div>
													<div class="name"><?php echo $value['Girl']['name']; ?>（<?php echo $value['Girl']['age']; ?>）</div>
													<div class="size">T<?php echo $value['Girl']['height']; ?> B<?php echo $value['Girl']['size_b']; ?>(<?php echo $cupArray[$value['Girl']['size_c']]; ?>) W<?php echo $value['Girl']['size_w']; ?> H<?php echo $value['Girl']['size_h']; ?></div>
													<ul class="tug flex">
														<?php if (!empty($value['Girl']['label_1'])) { ?><li><?php echo $value['Girl']['label_1']; ?></li><?php } ?>
														<?php if (!empty($value['Girl']['label_2'])) { ?><li><?php echo $value['Girl']['label_2']; ?></li><?php } ?>
														<?php if (!empty($value['Girl']['label_3'])) { ?><li><?php echo $value['Girl']['label_3']; ?></li><?php } ?>
														<?php if (!empty($value['Girl']['label_4'])) { ?><li><?php echo $value['Girl']['label_4']; ?></li><?php } ?>
													</ul>
													<div class="special flex">
														<p>特別指名料</p>
														<p><?php echo $value['Girl']['nominate_fare'] ?>円</p>
													</div>
												</div>
											</a>
											<ul class="girl_icon_list">
												<?php if (!empty($value['Ranking'][0]['priority'])) { ?><li><img src="/assets/img/common/girl_icon_rank<?php echo $value['Ranking'][0]['priority']; ?>.png" alt="" /></li><?php } ?>
												<?php if (!empty($value['Girl']['newface'])) { ?><li><img src="/assets/img/common/girl_icon_new.png" alt="" /></li><?php } ?>
												<?php if (!empty($value['Girl']['amateur'])) { ?><li><img src="/assets/img/common/girl_icon_si.png" alt="" /></li><?php } ?>
												<?php if (!empty($value['Girl']['twitter_id'])) { ?>
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

			<div class="top_more_btn"><a href="/realtime/">もっとみる</a></div>
		</section>
	<?php } ?>

	<?php if (!empty($printArray['Ranking'])) { ?>
		<section class="rank">
			<div class="rank_outer">
				<ul class="flex shop-list shop-list--four">
					<!-- li class="shop-list__col"><a href="/ranking/" class="active">全店舗表示</a></li -->
					<?php foreach ($groupShopArray as $key => $value) { ?>
						<li class="shop-list__col"><a href="/ranking/<?php echo $key; ?>" <?php if ($key == 1) echo ' class="active"'; ?>><?php echo $value['name']; ?></a></li>
					<?php } ?>
				</ul>
				<div class="rank_tab">
					<ul class="flex">
						<li class="tab1 active">総合ランキング/ranking10</li>
						<?php if (!empty($printArray['Ranking'][1][0]['Ranking']['title'])) { ?><li class="tab2"><?php echo $printArray['Ranking'][1][0]['Ranking']['title']; ?></li><?php } ?>
						<?php if (!empty($printArray['Ranking'][2][0]['Ranking']['title'])) { ?><li class="tab3"><?php echo $printArray['Ranking'][2][0]['Ranking']['title']; ?></li><?php } ?>
					</ul>
				</div>
				<div class="rank_wrap">
					<?php foreach ($rankingArray as $key2 => $value2) { ?>
						<?php if (!empty($printArray['Ranking'][$key2])) { ?>
							<?php
							$count = $key2 + 1;
							if ($key2 == 0) {
								$title = '総合ランキング';
							} else {
								$title = $printArray['Ranking'][$key2][0]['Ranking']['title'];
							}
							?>
							<div class="tabitem<?php echo $count; ?>" id="tabs<?php echo $count; ?>">
								<?php foreach ($printArray['Ranking'][$key2] as $key => $value) { ?>
									<div class="rank_col panel<?php echo $count; ?>" id="panel<?php echo $count; ?>-<?php echo $value['Ranking']['priority']; ?>">
										<div class="flex">
											<div class="blk01">
												<h3>
													<span><?php echo $title; ?></span>
													<span>RANKING</span>
													<span><?php echo $value['Ranking']['priority']; ?></span>
													<span>位</span>
												</h3>
												<ul class="flex">
													<li><?php echo $value['Girl']['name']; ?>（<?php echo $value['Girl']['age']; ?>）</li>
													<li>T<?php echo $value['Girl']['height']; ?> B<?php echo $value['Girl']['size_b']; ?>(<?php echo $cupArray[$value['Girl']['size_c']]; ?>) W<?php echo $value['Girl']['size_w']; ?> H<?php echo $value['Girl']['size_h']; ?></li>
												</ul>
												<div class="status status_0<?php if (!empty($value['ScheduleStatus']['time'])) {
																											echo '2';
																										} else {
																											echo '1';
																										} ?>">
													<span><?php echo $value['ScheduleStatus']['status']; ?></span>
													<?php if (!empty($value['ScheduleStatus']['time'])) { ?>
														<span>
															<?php echo $value['ScheduleStatus']['time']; ?>
														</span>
													<?php } ?>
												</div>
												<div class="Reserv"><a href="#">この子をWEB予約する</a></div>
												<?php if (!empty($value['Schedule'])) { ?>
													<h4>出勤予定</h4>
													<div class="sc_wrap">
														<ul>
															<?php foreach ($value['Schedule'] as $key3 => $value3) { ?>
																<li>
																	<div><?php echo $value3['workDatePrint']; ?></div>
																	<div><?php echo $value3['schedulePrint']; ?></div>
																</li>
															<?php } ?>
														</ul>
													</div>
												<?php } ?>
												<div class="prof">
													<a href="<?php echo $value['Girl']['profile_url']; ?>">プロフィールページを見る</a>
												</div>
											</div>

											<div class="blk02">
												<div class="pic">
													<?php if (!empty($value['Image'][1]['Image']['image_url'])) { ?>
														<div class="mainpic">
															<div><img src="<?php echo $value['Image'][1]['Image']['image_url']; ?>" width="351" class="mainimage changeimage" alt="" /></div>
														</div>
													<?php } ?>
													<ul class="girl_icon_list">
														<?php if (!empty($value['Ranking']['priority'])) { ?><li><img src="/assets/img/common/girl_icon_rank<?php echo $value['Ranking']['priority']; ?>.png" alt="" /></li><?php } ?>
														<?php if (!empty($value['Girl']['newface'])) { ?><li><img src="/assets/img/common/girl_icon_new.png" alt="" /></li><?php } ?>
														<?php if (!empty($value['Girl']['amateur'])) { ?><li><img src="/assets/img/common/girl_icon_si.png" alt="" /></li><?php } ?>
														<?php if (!empty($value['Girl']['twitter_id'])) { ?>
															<li>
																<a href="<?php echo $value['Girl']['twitter_id']; ?>" target="_blank">
																	<img src="/assets/img/common/girl_icon_tw.png" alt="" />
																</a>
															</li>
														<?php } ?>
													</ul>
												</div>
											</div>

											<?php if (!empty($value['Image'][1]['Image']['image_url'])) { ?>
												<div class="blk03 fox_scroll">
													<div class="subpic changeimage flex">
														<?php foreach ($value['Image'] as $key4 => $value4) { ?>
															<?php if ($key4 > 1) { ?>
																<div><img src="<?php echo $value4['Image']['image_url']; ?>" width="160" alt="" /></div>
															<?php } ?>
														<?php } ?>
													</div>
												</div>
											<?php } ?>

										</div>
									</div>
								<?php } ?>

								<div class="rank_list swiper-container rank_swiper_<?php echo $count; ?>">
									<div class="swiper-wrapper">
										<?php foreach ($printArray['Ranking'][$key2] as $key => $value) { ?>
											<div class="swiper-slide">
												<div class="flex">
													<h3><?php echo $value['Ranking']['priority']; ?><span>位</span></h3>
													<p><?php echo $value['Girl']['name']; ?>（<?php echo $value['Girl']['age']; ?>）</p>
												</div>
												<?php if (!empty($value['Image'][1]['Image']['image_url'])) { ?>
													<div class="pic">
														<a href="#panel<?php echo $count; ?>-<?php echo $value['Ranking']['priority']; ?>">
															<img src="<?php echo $value['Image'][1]['Image']['image_url']; ?>" width="203" />
														</a>
													</div>
												<?php } ?>
												<p class="size">T<?php echo $value['Girl']['height']; ?> B<?php echo $value['Girl']['size_b']; ?>(<?php echo $cupArray[$value['Girl']['size_c']]; ?>) W<?php echo $value['Girl']['size_w']; ?> H<?php echo $value['Girl']['size_h']; ?></p>
											</div>
										<?php } ?>
									</div>
								</div>
								<div class="swiper-button-prev"></div>
								<div class="swiper-button-next"></div>

							</div>
						<?php } ?>
					<?php } ?>
				</div>
			</div>
		</section>
	<?php } ?>



</article>

