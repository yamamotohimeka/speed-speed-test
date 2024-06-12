    <section class="events">
      <ol class="bread">
        <li><a href="/group/">グループトップ</a></li>
        <span>›</span>
        <li class="bread-current">風俗お役立ち情報</li>
      </ol>
      <h2 class="section-title"><?php echo $printArray['Column']['Column']['title']; ?></h2>


      <div id="contenter">
        <div class="column section">
          <ul>
            <li>
              <date><?php $created = new DateTime($printArray['Column']['Column']['created']);
                    echo $created->format('Y/m/d'); ?></date><br>
              <!-- <h3><?php echo $printArray['Column']['Column']['title']; ?></h3> -->
              <?php
              $comment = str_replace('<p>', '', $printArray['Column']['Column']['comment']);
              $comment = str_replace('</p>', '', $comment);
              $comment = str_replace('<br />', '', $comment);
              echo $printArray['Column']['Column']['comment'];
              ?>
            </li>
          </ul>
        </div>
      </div>

    </section>