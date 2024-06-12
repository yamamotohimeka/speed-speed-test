<link rel="stylesheet" href="/assets/css/ranking.css" />

<section class="page page_rank">

	<div class="page_ttl">
		<h2>ランキング<span>RANKING</span></h2>
	</div>

	<ol class="flex bread">
		<li>
			<a href="/group/">グループトップ</a><span>›</span>
		</li>
		<li>
			ランキング
		</li>
	</ol>

	<?php if (!empty($printArray['Ranking'])) { ?>
		<section class="rank">

			<div class="rank_outer">
				<ul class="flex shop-list shop-list--four">
					<?php foreach ($groupShopArray as $key => $value) { ?>
						<li class="shop-list__col"><a href="/ranking/<?php echo $key; ?>" <?php if ($shop_id == $key) echo ' class="active"'; ?>><?php echo $value['name']; ?></a></li>
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
																<?php
																$workDateArray = explode("-", $value3['workDate']);
																$startTimeArray = explode(":", $value3['startTime']);
																$endTimeArray = explode(":", $value3['endTime']);
																?>
																<li>
																	<div><?php echo $workDateArray[1]; ?>月<?php echo $workDateArray[2]; ?>日（<?php echo $weekArray[date('w', strtotime($value3['workDate']))]; ?>）</div>
																	<div><?php echo $startTimeArray[0]; ?>:<?php echo $startTimeArray[1]; ?>～<?php echo $endTimeArray[0]; ?>:<?php echo $endTimeArray[1]; ?></div>
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

</section>
	</article>