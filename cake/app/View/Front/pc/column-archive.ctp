<link rel="stylesheet" href="/assets/css/column.css" />

 			<div class="page page_column page_column_archive">
 				<section>
 					<div class="page_ttl">
 						<h2>風俗お役立ち情報<span>COLUMN</span></h2>
 					</div>

 					<ol class="flex bread">
 						<li>
			                <a href="/group/">グループトップ</a><span>›</span>
 						</li>
 						<li>コラム</li>
 					</ol>

                    <?php if(!empty($printArray['Column'])){ ?>
 					<div class="page_wrap">
 						<div class="column_wrap">
 							<ul>

 								<?php foreach($printArray['Column'] AS $key => $value){ ?>
 								<li>
 									<h3><span><?php echo $value['Column']['title']; ?></span><span><?php $created = new DateTime($value['Column']['created']); echo $created->format('Y/m/d'); ?></span></h3>
 									<div class="cut_column_txt"><?php echo strip_tags($value['Column']['comment']); ?></div>
 									<a href="/column/<?php echo $value['Column']['id']; ?>">続きを見る</a>
 								</li>
 								<?php } ?>

 							</ul>
 						</div>

                        <?php if(!empty($Paging)){ ?>
                        <div class="pager">
                            <ol class="review-page-nav">
                            <?php echo $Paging; ?>
                            </ol>
                        </div>
                        <?php } ?>

 					</div>
 					<?php } ?>

 				</section>
 			</div>
