<link rel="stylesheet" href="/assets/css/schedule.css" />

<section class="page page_schedule">

	<div class="page_ttl">
		<h2>出勤情報<span>ATTENDANCE</span></h2>
	</div>

	<ol class="flex bread">
		<li>
			<a href="/group/">グループトップ</a><span>›</span>
		</li>
		<li>
			出勤情報
		</li>
	</ol>

	<div class="page_wrap">

		<div class="girls_wrap">

            <ul class="flex shop-list">
                <li class="shop-list__col"><a href="/schedule/all"<?php if($shop_id == 'all') echo ' class="active"'; ?> >全店舗表示</a></li>
                <?php foreach($groupShopArray AS $key => $value){ ?>
                    <li class="shop-list__col"><a href="/schedule/<?php echo $key; ?>"<?php if($shop_id == $key) echo ' class="active"'; ?>><?php echo $value['name']; ?></a></li>
                <?php } ?>
            </ul>

			<div class="rt_wrap">

			<div class="girl_wrap_5col">

				<ul class="flex week">
				<?php foreach($workDateFrontPrintArray AS $key => $value){ ?>
					<li><a href="/schedule/<?php if(!empty($shop_id)) echo $shop_id . '/'; ?><?php echo $workDateArray[$key]; ?>"<?php if($day == $workDateArray[$key]) echo ' class="current"'; ?>><?php echo $value; ?></a></li>
				<?php } ?>
				</ul>

                <?php if(!empty($printArray)){ ?>
				<div class="wrap flex">

                    <?php foreach($printArray AS $key => $value){ ?>
					<div class="col">
						<a href="<?php echo $value['Girl']['profile_url'] ?>">
							<div class="inner">
                                <p class="status status_02">
                                    <span><?php echo $value['ScheduleStatus']['status']; ?></span>
                                	<?php if(!empty($value['ScheduleStatus']['time'])){ ?><span><?php echo $value['ScheduleStatus']['time']; ?></span><?php } ?>
                                </p>
                                <?php if(!empty($value['Image']['image_url'])){ ?>
                                    <div class="pic">
                                        <img src="<?php echo $value['Image']['image_url']; ?>" width="100%">
                                    </div>
                                <?php } ?>
                                <div class="shop"><?php echo $value['Girl']['shop_name']; ?></div>
								<div class="name"><?php echo $value['Girl']['name'] ?>（<?php echo $value['Girl']['age'] ?>）</div>
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
				</div>
				<?php } ?>

			</div>
		</div>

			<?php if(!empty($Paging)){ ?>
			<div class="pager">
				<ol class="review-page-nav">
			    <?php echo $Paging; ?>
				</ol>
			</div>
            <?php } ?>

	</div>

</section>
