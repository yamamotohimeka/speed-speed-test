<link rel="stylesheet" href="/assets/css/column.css" />

<div class="page page_column page_column_single">
	<section>
		<div class="page_ttl">
			<h2>風俗お役立ち情報<span>COLUMN</span></h2>
		</div>

		<ol class="flex bread">
			<li>
				<a href="/group/">グループトップ</a><span>›</span>
			</li>
			<li><a href="/column-archive/">コラム</a><span>›</span></li>
			<li><?php echo $printArray['Column']['Column']['title']; ?></li>
		</ol>

		<div class="page_wrap">
			<div class="column_wrap">
				<h3><?php echo $printArray['Column']['Column']['title']; ?></h3>
				<?php
				$comment = str_replace('<p>', '', $printArray['Column']['Column']['comment']);
				$comment = str_replace('</p>', '', $comment);
				echo $printArray['Column']['Column']['comment'];
				?>
			</div>
		</div>
	</section>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
	$(function() {
		if (!($('.page_column_single img').length)) {
			$('.page_column_single p').css({
				'width': '100%',
			});
		}
	});
</script>