<footer class="footer">
    <div class="navigation-banner">
        <a href="/ranking/" class="banner-link"><img src="/assets/sp/img/common/banner-ranking.jpg" alt=""
                                                     class="banner-image"></a>
        <a href="/mailmagazine/" class="banner-link"><img src="/assets/sp/img/common/banner-mailmagazine.jpg" alt=""
                                                          class="banner-image"></a>
        <a href="/access/" class="banner-link"><img src="/assets/sp/img/common/banner-access.jpg" alt=""
                                                    class="banner-image"></a>
        <a href="/story/" class="banner-link"><img src="/assets/sp/img/common/banner-stories.jpg" alt="バナー ストーリーズ"
                                                   class="banner-image"></a>
    </div>
    <div class="groupshop-banner" id="group-list">
        <div class="groupshop-banner-store">
            <p class="groupshop-banner-store-name">スピードグループ</p>
            <p class="groupshop-banner-store-time">営業時間 9:00~翌3:30</p>
        </div>
        <div class="groupshop-banner-txt">
            <a class="groupshop-banner-txt-link" href="https://umeda.speed-speed.com/top/">スピード梅田店</a>
            <a class="groupshop-banner-txt-link" href="https://nippon.speed-speed.com/top/">スピード日本橋店</a>
            <a class="groupshop-banner-txt-link" href="https://nanba.speed-speed.com/top/">スピード難波店</a>
            <a class="groupshop-banner-txt-link" href="https://kyoubashi.speed-speed.com/top/">スピード京橋店</a>
        </div>
        <div class="groupshop-banner-img">
            <a target="_blank" rel=”noopener” href="https://esthetique-osaka.com/" class=" banner-link">
                <p>大阪回春性感エステ・ティーク</p><img src="/assets/sp/img/common/banner-shop-esthetique.jpg" alt="エステティーク"
                                          class="banner-image"></a>
            <a href="https://speed-eco.net/group/" class="banner-link">
                <p>エコグループ</p><img src="/assets/sp/img/common/banner-shop-eco.jpg" alt="エコ" class="banner-image"></a>
            <a href="https://www.gekiyasu-club.com/" class="banner-link">
                <p>クラブさくら</p><img src="/assets/sp/img/common/banner-shop-clubsakura.jpg" alt="club さくら"
                                  class="banner-image"></a>
            <a href="https://mrs-sakura.com/" class="banner-link">
                <p>奥様さくら</p><img src="/assets/sp/img/common/banner-shop-okusamasakura.jpg" alt="奥様 さくら"
                                 class="banner-image"></a>
        </div>
    </div>
</footer>


<script>
    // NAVIGATION MENU
    const nv_button = document.querySelector('.navigation-button'),
        footernav = document.querySelector('.bottom-nav');
    const icons = document.querySelector('.top-stories-list');
    const icons_wrap = document.querySelector('.top-stories');
    const labelSpan = nv_button.querySelector('.label');
    let scr = 0;

    // ナビゲーションの開閉を切り替える関数
    const toggleMenu = () => {
        if (nv_button.classList.contains('open')) {
            nv_button.classList.remove('open');
            labelSpan.textContent = 'MENU';
        } else {
            nv_button.classList.add('open');
            labelSpan.textContent = 'CLOSE';
        }
    };

    // ナビゲーションを閉じる関数
    const closeMenu = () => {
        if (nv_button.classList.contains('open')) {
            nv_button.classList.remove('open');
            labelSpan.textContent = 'MENU';
        }
    };

    // ナビゲーションボタンのクリックイベント
    nv_button.addEventListener('click', (event) => {
        toggleMenu();
        event.stopPropagation(); // イベントのバブリングを防ぐ
    });

    // ドキュメント全体のクリックイベント
    document.addEventListener('click', (event) => {
        if (!nv_button.contains(event.target)) {
            closeMenu();
        }
    });

    // スクロールイベント
    let timeout;
    window.addEventListener('scroll', () => {
        if (timeout) return;
        timeout = setTimeout(function () {
            timeout = false;
            scr = document.documentElement.scrollTop || document.body.scrollTop;
            if (scr > nv_button.getBoundingClientRect().height) {
                nv_button.classList.add('bottom');
                nv_button.classList.remove('top');
                footernav.classList.add('show');
                footernav.classList.remove('hide');
            } else {
                nv_button.classList.remove('bottom');
                nv_button.classList.add('top');
                footernav.classList.add('hide');
                footernav.classList.remove('show');
            }
            if (icons_wrap) {
                if (scr > icons_wrap.getBoundingClientRect().bottom + pageYOffset) {
                    icons_wrap.classList.add('fixed');
                } else {
                    icons_wrap.classList.remove('fixed');
                }
            }
        }, 250);
    });

    // function handleTouchmove(e) {
    //   e.preventDefault();
    // }
    //ナビゲーション
    document.addEventListener('DOMContentLoaded', function () {
        const currentPath = window.location.pathname;
        console.log("Current Path: " + currentPath); // デバッグ用に現在のパスを表示
        const navLinks = document.querySelectorAll('.sub-menu .nav-link');

        navLinks.forEach(link => {
            console.log("Link Href: " + link.getAttribute('href')); // デバッグ用にリンクのhrefを表示
            if (link.getAttribute('href') === currentPath) {
                link.classList.add('active');
                console.log("Active link found: " + link.textContent); // デバッグ用にアクティブなリンクを表示
            }
        });
    });


</script>