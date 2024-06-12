<link rel="stylesheet" href="/assets/css/mailmagazine.css" />

<section class="page page_mm">
	<div class="page_ttl">
		<h2>メールマガジン<span>MAIL MAGAZINE</span></h2>
	</div>

	<ol class="flex bread">
		<li>
			<a href="/group/">グループトップ</a><span>›</span>
		</li>
		<li>
			メールマガジン
		</li>
	</ol>

	<div class="mm_wrap">
		<div class="mm_col">
			<h3><span>メルマガ会員募集中</span></h3>
			<p>登録は簡単！下のボタンを押して、空メールを配信するだけです！！<br>
				携帯のアドレスをご利用の方は、メール拒否設定の解除又は、ドメイン指定受信の設定（<?php echo SITE_DOMAIN; ?>の設定）をお願いします。<br>
				メールが受信されない場合があります。</p>
			<div class="submit">
				<input type="submit" onclick="location.href='mailto:mm-reg-group@<?php echo SITE_DOMAIN; ?>'" value="メールマガジンに登録する">
			</div>
			<?php foreach ($groupShopArray as $key => $value) { ?>
				<div class="submit">
					<input type="submit" onclick="location.href='mailto:mm-reg-<?php echo $value['id']; ?>@<?php echo $value['domain']; ?>'" value="<?php echo $value['name']; ?>メールマガジンを登録する">
				</div>
			<?php } ?>
		</div>

		<div class="mm_col">
			<h3><span>メルマガの解除</span></h3>
			<p>登録しているメルマガを解除する際も、下のボタンを押してメールを送信するだけです。<br>
				またのご利用をお待ちしております。
			</p>
			<div class="content-box" id="p1">
				<div class="submit">
					<input type="submit" onclick="location.href='mailto:mm-del-group@<?php echo $value['domain']; ?>'" value="メールマガジンを解除する">
				</div>
				<?php foreach ($groupShopArray as $key => $value) { ?>
					<div class="submit">
						<input type="submit" onclick="location.href='mailto:mm-del-<?php echo $value['id']; ?>@<?php echo $value['domain']; ?>'" value="<?php echo $value['name']; ?>メールマガジンを解除する">
					</div>
				<?php } ?>
			</div>
		</div>

		<div class="mm_col group_shukkin">
			<h3><span>出勤メルマガ</span></h3>
			<p>お気に入りのあの子の出勤をガッチリおさえる！<br>
				あらかじめ指定した女の子が出勤すると、あなたの元にメールを配信！<br>
				お店で出勤を確認する手間が省けます！<br>
				お気に入りの女の子がいれば、何人でも登録OK！<br>
				携帯のアドレスをご利用の方は、メール拒否設定の解除又は、ドメイン指定受信の設定（speed-speed.comの設定）をお願いします。<br>
				メールが受信されない場合があります。
			</p>
			<div class="content-box">
				<?php foreach ($groupShopArray as $key => $value) { ?>
					<div class="submit"><a href="<?php echo $value['url']; ?>mailmagazine/#p1"><?php echo $value['name']; ?>出勤メルマガを登録する</a></div>
				<?php } ?>
			</div>
		</div>

	</div>

</section>