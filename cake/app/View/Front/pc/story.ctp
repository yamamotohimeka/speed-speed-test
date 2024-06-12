<link rel="stylesheet" href="/assets/css/story.css" />

<section class="page page_story">

	<div class="page_ttl">
		<h2>最新のストーリーズ / Stories<span>STORIES</span></h2>
	</div>

	<ol class="flex bread">
		<li>
			<a href="/group/">グループトップ</a><span>›</span>
		</li>
		<li>
			ストーリーズ
		</li>
	</ol>

    <ul class="flex shop-list">
        <li class="shop-list__col"><a href="/story/all"<?php if($shop_id == 'all') echo ' class="active"'; ?> >全店舗表示</a></li>
        <?php foreach($groupShopArray AS $key => $value){ ?>
            <li class="shop-list__col"><a href="/story/<?php echo $key; ?>"<?php if($shop_id == $key) echo ' class="active"'; ?>><?php echo $value['name']; ?></a></li>
        <?php } ?>
    </ul>

<?php if(!empty($printArray['Linebots'])){ ?>
<?php foreach($printArray['Linebots'] AS $key => $value){ ?>
	<div class="story story_wrap">

		<div class="story_col">
			<div class="flex icon_col">
			<?php if(!empty($value['Girl']['Image']['image'][0][1]['image_url'])){ ?>
			    <div class="pic_story">
			        <a href="<?php echo $value['Girl']['Girl']['profile_url']; ?>">
                        <img src="<?php echo $value['Girl']['Image']['image'][0][1]['image_url']; ?>">
			        </a>
			    </div>
			<?php } ?>
			<div>
			    <p class="status status_02">
				    <span><?php echo $value['Girl']['ScheduleStatus']['status']; ?></span>
				    <?php if(!empty($value['Girl']['ScheduleStatus']['time'])){ ?><span><?php echo $value['Girl']['ScheduleStatus']['time']; ?></span><?php } ?>
			    </p>
			    <p><a href="<?php echo $value['Girl']['Girl']['profile_url']; ?>"><?php echo $value['Girl']['Girl']['shop_name']; ?> <?php echo $value['Girl']['Girl']['name']; ?></a></p>
			</div>
			</div>
			<div class="content flex">
				<div class="pic">
					<?php echo $value['Linebots']['file']['tag_url']; ?>
					<p class="date">
                        <?php
                            $dateTimeArray = explode(" ", $value['Linebots']['dateTime']);
                            $dateTimeDayArray = explode("-", $dateTimeArray[0]);
                            $dateTimeTimeArray = explode(":", $dateTimeArray[1]);
                        ?>
				        <?php echo $dateTimeDayArray[0]; ?>年<?php echo $dateTimeDayArray[1]; ?>月<?php echo $dateTimeDayArray[2]; ?>日 <?php echo $dateTimeTimeArray[0]; ?>:<?php echo $dateTimeTimeArray[1]; ?>
                    </p>
				</div>
				<div><?php echo nl2br($value['Linebots']['text']); ?></div>
			</div>
		</div>
	</div>
<?php } ?>
<?php } ?>

			<?php if(!empty($Paging)){ ?>
			<div class="pager">
				<ol class="review-page-nav">
			    <?php echo $Paging; ?>
				</ol>
			</div>
            <?php } ?>

</section>