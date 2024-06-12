<link rel="stylesheet" href="/assets/css/girls.css" />

			<div class="page page_girls">

				<section>
					<div class="page_ttl">
						<h2>女の子一覧<span>GIRLS</span></h2>
					</div>

					<ol class="flex bread">
						<li>
			                <a href="/group/">グループトップ</a><span>›</span>
						</li>
						<li>
							女の子一覧
						</li>
					</ol>


			<div class="girls_wrap page_wrap">
                        <ul class="flex shop-list">
                            <li class="shop-list__col"><a href="/girls/all"<?php if($shop_id == 'all') echo ' class="active"'; ?> >全店舗表示</a></li>
                            <?php foreach($groupShopArray AS $key => $value){ ?>
                                <li class="shop-list__col"><a href="/girls/<?php echo $key; ?>"<?php if($shop_id == $key) echo ' class="active"'; ?>><?php echo $value['name']; ?></a></li>
                            <?php } ?>
                        </ul>

						<div class="flex sort_radio">
							<p>絞り込み：</p>
							<form action="/girls/" class="girl-search" id="SearchGirlsForm" method="post" accept-charset="utf-8">
							<input type="hidden" name="shop_id" value="<?php echo $shop_id; ?>">
								<div class="radio flex">
									<div>
										<input type="radio" id="radio-all" name="data[Search][radio]" value="all"<?php if($search == 'all') echo ' checked="checked"'; ?> id="radio-all" checked="checked">
										<label for="radio-all" class="radio02">全件表示</label>
									</div>
									<div>
										<input type="radio" id="radio-new" name="data[Search][radio]" value="Newface"<?php if($search == 'Newface') echo ' checked="checked"'; ?> id="radio-new">
										<label for="radio-new" class="radio02">新人だけを表示</label>
									</div>
									<div>
										<input type="radio" id="radio-new2" name="data[Search][radio]" value="Amateur"<?php if($search == 'Amateur') echo ' checked="checked"'; ?> id="radio-new2">
										<label for="radio-new2" class="radio02">新人で素人未経験だけを表示</label>
									</div>
									<div class="btn_submit">
										<input type="submit" value="検索">
									</div>
								</div>
							</form>
						</div>

			<div class="girl_wrap_5col">

            <?php if(!empty($printArray['Girl'])){ ?>
				<div class="wrap flex">

                    <?php foreach($printArray['Girl'] AS $key => $value){ ?>
					<div class="col">
						<a href="<?php echo $value['Girl']['profile_url'] ?>">
							<div class="inner">
                                <p class="status status_0<?php if(!empty($value['ScheduleStatus']['time'])){ echo '2'; }else{ echo '1'; } ?>">
                                    <span><?php echo $value['ScheduleStatus']['status']; ?></span>
                                	<?php if(!empty($value['ScheduleStatus']['time'])){ ?><span><?php echo $value['ScheduleStatus']['time']; ?></span><?php } ?>
                                </p>
                                <?php if(!empty($value['Image']['image'][0][1]['image_url'])){ ?>
                                    <div class="pic">
                                        <img src="<?php echo $value['Image']['image'][0][1]['image_url']; ?>" width="100%">
                                    </div>
                                <?php } ?>
								<div class="shop"><?php echo $value['Girl']['shop_name'] ?></div>
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

			<?php if(!empty($Paging)){ ?>
			<div class="pager">
				<ol class="review-page-nav">
			    <?php echo $Paging; ?>
				</ol>
			</div>
            <?php } ?>

		</div>

	</section>
</div>
