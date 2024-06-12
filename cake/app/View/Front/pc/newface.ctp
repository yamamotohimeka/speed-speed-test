<link rel="stylesheet" href="/assets/css/newface.css" />

<section class="page nf nf_wrap page_nf">

	<div class="page_ttl">
		<h2>新人情報<span>NEW FACE</span></h2>
	</div>

	<ol class="flex bread">
		<li>
			<a href="/group/">グループトップ</a><span>›</span>
		</li>
		<li>
			新人情報
		</li>
	</ol>

	<div class="page_wrap">
		<ul class="flex shop-list">
			<li class="shop-list__col"><a href="/newface/all" <?php if ($shop_id == 'all') echo ' class="active"'; ?>>全店舗表示</a></li>
			<?php foreach ($groupShopArray as $key => $value) { ?>
				<li class="shop-list__col"><a href="/newface/<?php echo $key; ?>" <?php if ($shop_id == $key) echo ' class="active"'; ?>><?php echo $value['name']; ?></a></li>
			<?php } ?>
		</ul>

		<div class="newface-container">

			<?php if (!empty($printArray['GirlNewface'])) { ?>
				<div class="flex outer">
					<?php foreach ($printArray['GirlNewface'] as $key => $value) { ?>
						<div class="nf_col">
							<div class="flex">
								<div class="blk01">
									<?php if (!empty($value['Image']['image'][0][1]['image_url'])) { ?>
										<div class="pic_nf">
											<a href="<?php echo $value['Girl']['profile_url']; ?>">
												<img src="<?php echo $value['Image']['image'][0][1]['image_url']; ?>?<?php echo date('YmdHis'); ?>" width="240" alt="">
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
																																												echo $started_at->format('m月d日'); ?>入店</div><?php } ?>
									<dl class="flex">
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

				</div>
			<?php } ?>
		</div>

		<?php if (!empty($Paging)) { ?>
			<div class="pager">
				<ol class="review-page-nav">
					<?php echo $Paging; ?>
				</ol>
			</div>
		<?php } ?>
	</div>
</section>