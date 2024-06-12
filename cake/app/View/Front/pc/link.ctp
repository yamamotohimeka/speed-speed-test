<link rel="stylesheet" href="/assets/css/link.css" />

<div class="page page_link">
  <section class="link_wrap">
    <div class="page_ttl">
      <h2>相互リンク<span>LINK</span></h2>
    </div>

    <ol class="flex bread">
      <li>
		<a href="/group/">グループトップ</a><span>›</span>
      </li>
      <li>相互リンク</li>
    </ol>

    <div class="flex link_txt_wrap">
      <dl class="detailed">
        <dt>サイト名</dt>
        <dd>SPEED</dd>
        <dt>URL</dt>
        <dd>http://www.speed-speed.com/</dd>
        <dt>紹介文</dt>
        <dd>関西最大級ホテルヘルスグループ<br />女の子在籍数、サービス、価格すべてに自信アリ！<br />絶対に満足していただけます。</dd>
      </dl>
      <?php if(!empty($printArray['Banner'])){ ?>
      <div>
        <p class="link_txt">当店では相互リンクを大募集しております。<br />必要な場合は以下のバナー画像・紹介文をご利用下さい。<br />下記相互リンク申し込みフォームよりご連絡ください。<br />貴ホームぺージから当店ホームページへのリンクを確認次第、当店ホームページから貴ホームページへリンクさせていただきます。</p>
        <dl class="banner">
          <?php foreach($printArray['Banner'] AS $key => $value){ ?>
          <?php if(!empty($value['Image'][0]['file']) AND $value['Image'][0]['model'] == 0){ ?>
              <dt><?php echo $value['Banner']['name']; ?></dt>
              <dd><img src="/userImgShop/Image/<?php echo $value['Image'][0]['imgId']; ?>/<?php echo $value['Image'][0]['imgId']; ?>.jpg"  alt="<?php echo $value['Banner']['comment']; ?>"></dd>
          <?php } ?>
          <?php } ?>
        </dl>
      </div>
      <?php } ?>
    </div>

    <div class="link_form content-box">
      <h2><span class="sub-attend">相互リンクお申し込みフォーム</span></h2>
      <?php if(!empty($chk)){ ?>
        <p class="tx_right"><span>*</span><?php echo $chk; ?></p>
      <?php }else{ ?>
          <p class="tx_right"><span>*</span>入力必須</p>
          <?php echo $this->Form->create('Link'); ?>
            <table cellpadding="0" cellspacing="0" border="0">
              <tbody>
              <tr>
                <th>
                  <label for="LinkName">貴サイト名<span>*</span></label>
                </th>
                <td><?php echo $this->Form->input('name',array('label' => false, 'type' => 'text', 'maxlength' => 40, 'id' => 'LinkName', 'required' => true)); ?></td>
              </tr>
              <tr>
                <th>
                  <label for="LinkUrl">貴サイトURL<span>*</span></label>
                </th>
                <td><?php echo $this->Form->input('url',array('label' => false, 'type' => 'text', 'maxlength' => 40, 'id' => 'LinkUrl', 'required' => true)); ?></td>
              </tr>
              <tr>
                <th><label for="LinkBannerUrl">バナー画像URL</label></th>
                <td><?php echo $this->Form->input('banner_url',array('label' => false, 'type' => 'text', 'id' => 'LinkBannerUrl', 'required' => false)); ?></td>
              </tr>
              <tr>
                <th>
                  <label for="LinkChargeName">担当者様お名前<span>*</span></label>
                </th>
                <td><?php echo $this->Form->input('charge_name',array('label' => false, 'type' => 'text', 'id' => 'LinkChargeName', 'required' => true)); ?></td>
              </tr>
              <tr>
                <th>
                  <label for="LinkMailaddress">担当者様メールアドレス<span>*</span></label>
                </th>
                <td><?php echo $this->Form->input('mailaddress',array('label' => false, 'type' => 'text', 'pattern' => '[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$', 'id' => 'LinkMailaddress', 'required' => true)); ?></td>
              </tr>
              </tbody>
            </table>
            <div class="submit">
              <input type="submit" value="送信する" />
            </div>
          <?php echo $this->Form->end(); ?>
      <?php } ?>
    </div>

    <div class="links-box content">

    <?php foreach($linkCategoryArray AS $key2 => $value2){ ?>
    <?php if(!empty($printArray['Link'][$key2])){ ?>
      <h2><span><?php echo $value2; ?></span></h2>
      <ul>
        <?php foreach($printArray['Link'][$key2] AS $key => $value){ ?>
        <li>
          <a target="_blank" href="<?php echo $value['Link']['url']; ?>">
            <?php if(!empty($value['Image'][0]['file']) AND $value['Image'][0]['model'] == 0){ ?>
                <img src="/userImgShop/Image/<?php echo $value['Image'][0]['imgId']; ?>/<?php echo $value['Image'][0]['imgId']; ?>.jpg"  alt="<?php echo $value['Link']['comment']; ?>">
            <?php } ?>
          </a>
        </li>
        <?php } ?>
      </ul>
    <?php } ?>
    <?php } ?>

    </div>
  </section>
</div>