    <section class="events">
      <ol class="bread">
        <li><a href="/group/">グループトップ</a></li>
        <span>›</span>
        <li class="bread-current">風俗お役立ち情報</li>
      </ol>
      <h2 class="section-title">風俗お役立ち情報</h2>

      <div id="contenter">
        <div class="column section">
          <ul>
 								<?php foreach($printArray['Column'] AS $key => $value){ ?>
 								<li>
 								<a href="/column/<?php echo $value['Column']['id']; ?>">
 									<date><?php $created = new DateTime($value['Column']['created']); echo $created->format('Y/m/d'); ?></date><br>
 									<h3><span><?php echo $value['Column']['title']; ?></span></h3>
 								</a>
 								</li>
 								<?php } ?>
          </ul>
        </div>
      </div>

                        <?php if(!empty($Paging)){ ?>
                        <div class="pagination">
                            <ol class="review-page-nav">
                            <?php echo $Paging; ?>
                            </ol>
                        </div>
                        <?php } ?>


    </section>