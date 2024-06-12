	<aside>
		<ul class="side_bnr">
			<li>
				<a href="https://esthetique-osaka.com/" target="_blank"><img src="/assets/img/common/bnr_tique.jpg" alt="エステ・ティーク" /></a>
			</li>
			<li>
				<a href="http://www.speed-eco.net/" target="_blank"><img src="/assets/img/common/bnr_eco.jpg" alt="ホテルヘルス エコグループ" /></a>
			</li>
			<li>
				<a href="https://www.gekiyasu-club.com/" target="_blank"><img src="/assets/img/common/bnr_sakura.jpg" alt="Club さくら" /></a>
			</li>
            <li>
                <a href="https://mrs-sakura.com/" target="_blank"><img src="/assets/img/common/bnr_okusamasakura.jpg" alt="奥様 さくら" /></a>
            </li>
		</ul>
	</aside>
	<div class="bg_img"><img src="/assets/img/top/group/bg_girl.png" width="100%" alt="SPEEDグループ" /></div>
	<div class="wrapper">
		<main>
			<header>
				<div class="flex nav1">
					<h1>
						<a href="/group/"><img src="/assets/img/common/logo.png" width="332" alt="SPEEDGROUP" /></a>
					</h1>
					<nav>
                        <div class="mypage-login">
                            <a href="https://mypage.speed-speed.com/" target="_blank">
                                <img src="/assets/img/common/mypage-login-icon.png" alt="会員ログイン">
                            </a>
                        </div>
						<ul class="flex">
                 				<?php foreach ($groupShopArray as $key => $value) { ?>
								<li><a href="<?php echo $value['url']; ?>top/">スピード<?php echo $value['name']; ?></a></li>
							<?php } ?>
							<li><a href="https://esthetique-osaka.com/" target="_blank">エステ・ティーク</a></li>
						</ul>
					</nav>
				</div>

				<nav class="nav2">
					<ul class="flex fixedsticky" id="fixednav">
						<li><a href="/group/">グループTOP</a></li>
						<li><a href="/newface/">新人情報</a></li>
						<li><a href="/realtime/">即ヒメ</a></li>
						<li><a href="/schedule/">出勤情報</a></li>
						<li><a href="/story/">ストーリーズ</a></li>
						<li><a href="/event/">イベント</a></li>
						<li><a href="/mailmagazine/">メルマガ登録</a></li>
						<li><a href="/girls/">女の子一覧</a></li>
						<li><a href="/ranking/">ランキング</a></li>
						<li><a href="/access/">アクセス</a></li>
						<li><a href="http://speed-recruit.net/" target="_blank">女性求人</a></li>
						<li><a href="http://mens.speed-recruit.net" target="_blank">男性求人</a></li>
					</ul>
				</nav>
			</header>