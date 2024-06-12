<?php if (!empty($printArray['Linebots'])) { ?>
    <section class="top-stories shop">
        <h2 class="top-stories-title">ストーリーズ</h2>
        <ul class="top-stories-list">

            <?php foreach ($printArray['Linebots'] as $key => $value) { ?>
                <li class="top-stories-link">
                    <span class="top-stories-shop"><?php echo $value['Girl']['Girl']['shop_name']; ?></span>
                    <?php if (!empty($value['Girl']['Image']['image'][0][1]['image_url'])) { ?>
                        <div class="top-stories-icon">
                            <img src="<?php echo $value['Girl']['Image']['image'][0][1]['image_url']; ?>"
                                 class="top-stories-iconimage">
                        </div>
                    <?php } ?>
                    <span class="top-stories-name"><?php echo $value['Girl']['Girl']['name']; ?></span>
                </li>
            <?php } ?>

        </ul>
    </section>

    <div class="top-stories-modal" id="modal">
        <div class="swiper-container stories-swiper">
            <div class="swiper-wrapper">

                <?php foreach ($printArray['Linebots'] as $key => $value) { ?>
                    <div class="swiper-slide">
                        <header class="top-stories-info">
                            <?php if (!empty($value['Girl']['Image']['image'][0][1]['image_url'])) { ?>
                                <div class="icon"><a href="<?php echo $value['Girl']['Girl']['profile_url']; ?>"><img
                                                src="<?php echo $value['Girl']['Image']['image'][0][1]['image_url']; ?>"></a>
                                </div>
                            <?php } ?>
                            <h3 class="name"><a
                                        href="<?php echo $value['Girl']['Girl']['profile_url']; ?>"><?php echo $value['Girl']['Girl']['name']; ?></a><span
                                        class="shop"><?php echo $value['Girl']['Girl']['shop_name']; ?></span></h3>
                            <div class="top-stories-attendance">
                                <span class="top-stories-attendance-status"><?php echo $value['Girl']['ScheduleStatus']['status']; ?></span>
                                <?php if (!empty($value['Girl']['ScheduleStatus']['time'])) { ?>
                                    <time class="top-stories-attendance-time"><?php echo $value['Girl']['ScheduleStatus']['time']; ?></time><?php } ?>
                            </div>
                            <a href="<?php echo $value['Girl']['Girl']['profile_url']; ?>#personal-story"
                               class="stories-text">
                                <?php echo $value['Linebots']['text']; ?>
                            </a>
                        </header>
                        <div class="stories-close">閉じる</div>
                        <figure class="image-wrap">
                            <?php echo str_replace('controls', '', $value['Linebots']['file']['tag_url']); ?>
                        </figure>
                    </div>
                <?php } ?>

            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.0.0.min.js"></script>
    <script>
        // TOPPAGE STORIES MODAL WINDOW
        const modal = document.getElementById('modal'),
            links = document.getElementsByClassName('top-stories-link'),
            close = document.getElementsByClassName('stories-close');
        sound = document.getElementsByClassName('stories-sound');


        // let stories = new Swiper('.stories-swiper', {
        //     direction: 'vertical',
        //     resistance: true,
        //     resistanceRatio: 0,
        //     allowTouchMove: true,
        //     edgeSwipeDetection: true,
        //     autoplay: {
        //         delay: 10000,
        //         stopOnLastSlide: true,
        //         disableOnInteraction: false,
        //     },
        //     loop: false,
        //     mousewheel: true,
        //     direction: "vertical",
        //
        // });
        let stories = new Swiper('.stories-swiper', {
            direction: 'vertical',
            resistance: true,
            resistanceRatio: 0,
            mousewheel: true,
            autoplay: {
                delay: 10000,
                stopOnLastSlide: true,
                disableOnInteraction: false,
            },
            loop: false,
        });

        stories.autoplay.stop();

        var currentMovie = $(".swiper-slide-active video");
        var storyMovie = $(".swiper-slide video");

        for (let i = 0; i < links.length; i++) {
            links[i].addEventListener('click', () => {
                modal.classList.add('active');
                currentMovie.prop('muted', false);
                stories.update();
                stories.slideTo(i, 0);
                stories.autoplay.start();
                document.addEventListener('touchmove', handleTouchmove, {
                    passive: false
                });
            });
        }

        $(".image-wrap video").parent('figure').addClass('add-sound');
        $('.add-sound').before('<div class="stories-sound">サウンド</div>');
        for (let i = 0; i < sound.length; i++) {
            sound[i].addEventListener('click', () => {
                var video = $("video").get(i);
                if (video.muted) {
                    video.muted = false;
                    $('.stories-sound').css('background', 'url(../assets/sp/img/common/sound-on.png) no-repeat center/72rem auto');
                } else {
                    video.muted = true;
                    $('.stories-sound').css('background', 'url(../assets/sp/img/common/sound-off.png) no-repeat center/72rem auto');
                }
                stories.on("slideNextTransitionStart", () => {
                    if (video.muted) {
                    } else {
                        video.muted = true;
                        $('.stories-sound').css('background', 'url(../assets/sp/img/common/sound-off.png) no-repeat center/72rem auto');
                    }
                    video.currentTime = 0;
                });
                stories.on("slidePrevTransitionStart", () => {
                    if (video.muted) {
                    } else {
                        video.muted = true;
                        $('.stories-sound').css('background', 'url(../assets/sp/img/common/sound-off.png) no-repeat center/72rem auto');
                    }
                    video.currentTime = 0;
                });
                $(close).on("click", function () {
                    if (video.muted) {
                    } else {
                        video.muted = true;
                        $('.stories-sound').css('background', 'url(../assets/sp/img/common/sound-off.png) no-repeat center/72rem auto');
                    }
                    video = 0;
                });
                window.addEventListener('touchmove', () => {
                    if (stories.isEnd && stories.touches.diff < -96) {
                        if (video.muted) {
                        } else {
                            video.muted = true;
                            $('.stories-sound').css('background', 'url(../assets/sp/img/common/sound-off.png) no-repeat center/72rem auto');
                        }
                        video = 0;
                    }
                });
            });
        }

        stories.on('slideChange', () => {
            window.addEventListener('touchmove', () => {
                // storyMovie.attr("muted");
                // currentMovie.removeAttr("muted");
                if (stories.isEnd && stories.touches.diff < -96) {
                    modalClose();
                    document.removeEventListener('touchmove', handleTouchmove, {
                        passive: false
                    });
                }
            });
        });

        for (let i = 0; i < close.length; i++) {
            close[i].addEventListener('click', () => {
                modalClose(i);
                document.removeEventListener('touchmove', handleTouchmove, {
                    passive: false
                });
            });
        }

        function modalClose(index) {
            modal.classList.remove('active');
            stories.autoplay.stop();
        }

        function handleTouchmove(e) {
            e.preventDefault();
        }
    </script>
<?php } ?>