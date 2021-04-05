<footer>
    <div class="Footer__Inner">
        <h1>Be Smile 十三駅前</h1>
        <div>
            <section class="Footer__Inner__Corporation">
                <p>〒532-0023<br>
                    大阪府大阪市淀川区十三東3-18-12<br>
                    伊藤ビル1F<br>
                    TEL 06-6770-9011<br>
                    FAX 06-6770-9014</p>
            </section>
        </div>
        <div class="Footer__Inner__GoogleMaps">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3279.346492076229!2d135.48241601546636!3d34.72165958960275!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6000e5cd9af468ab%3A0x7b3e50be2a98139c!2z44CSNTMyLTAwMjMg5aSn6Ziq5bqc5aSn6Ziq5biC5reA5bed5Yy65Y2B5LiJ5p2x77yT5LiB55uu77yR77yY4oiS77yR77yS!5e0!3m2!1sja!2sjp!4v1616636849950!5m2!1sja!2sjp"
                    width="300" height="180" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
        <div class="Footer__Inner__Links">
            <ul>
                <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">ホーム</a></li>
                <li><a href="<?php echo esc_url( home_url( '/instructors/' ) ); ?>">指導員紹介</a></li>
                <li><a href="<?php echo esc_url( home_url( '/flow/' ) ); ?>">ご利用までの流れ</a></li>
                <li><a href="<?php echo esc_url( home_url( '/company/' ) ); ?>">企業情報</a></li>
                <li><a href="<?php echo esc_url( home_url( '/faq/' ) ); ?>">よくあるご質問</a></li>
            </ul>
        </div>
    </div>
    <p id="copyright">🄫BeSmile十三駅前</p>
</footer>
<!--/footer-->

<!--toppageへのボタン-->
<div id="page_top" style="text-align: center"><div onclick="$('html,body').animate({ scrollTop: 0 }); return false;"><img src="<?php echo get_template_directory_uri(); ?>/images/up.svg" width="25px" height="30px" alt=""></div></div>
<!--/toppageへのボタン-->
<!--jquery-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!--/jquery-->
<script>
    $(window).scroll(function (){　// マーカーの動きをつける
	$(".marker-animation").each(function(){
	  var position = $(this).offset().top; //ページの一番上から要素までの距離を取得
	  var scroll = $(window).scrollTop(); //スクロールの位置を取得
	  var windowHeight = $(window).height(); //ウインドウの高さを取得
	  if (scroll > position - windowHeight){ //スクロール位置が要素の位置を過ぎたとき
	    $(this).addClass('active'); //クラス「active」を与える
	  }
	});
});
</script>
<script type="text/javascript">
    $(function () {
        // スクロールしたときに実行
        $(window).scroll(function () {
            // 目的のスクロール量を設定(px)
            var TargetPos = 35;
            // 現在のスクロール位置を取得
            var ScrollPos = $(window).scrollTop();
            // 現在位置が目的のスクロール量に達しているかどうかを判断
            if (ScrollPos >= TargetPos) {
                // 達していれば表示
                $("#page_top").css("display", "block");
                if (window.matchMedia('(max-width:768px)').matches) {
                    $(".Hamburger__Menu--btn").css("top", "10px");
                }
            } else {
                // 達していなければ非表示
                $("#page_top").css("display", "none");
                if (window.matchMedia('(max-width:768px)').matches) {
                    $(".Hamburger__Menu--btn").css("top", "70px");
                }
            }
        });
    });
</script>

<script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js" data-deferred="1"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/hanabira.js"></script>
<aside class="usability">
    <ul>
        <li>
            <span>文字サイズ</span>
            <a href="javascript:textSizeUp();">拡大</a>
            <a href="javascript:textSizeReset();">標準</a>
        </li>
        <li><!-- テスト -->
            <span>背景色</span>
        </li>
        <li>
            <a href="javascript:changeCSS('color01.css');" style="border:1px solid #e0e0e0;background-color: #e0e0e0;padding:8px">標準</a>
            <a href="javascript:changeCSS('color02.css');" style="border:1px solid #e0e0e0;background-color: #e0e0e0;padding:8px;background:#0000bc!important;color: #ffff00!important;">青</a>
            <a href="javascript:changeCSS('color03.css');" style="border:1px solid #e0e0e0;background-color: #e0e0e0;padding:8px;background:#ffff00!important;;color: #000!important;">黄</a>
            <a href="javascript:changeCSS('color04.css');" style="border:1px solid #e0e0e0;background-color: #e0e0e0;padding:8px;background:#000!important;;color: #fff!important;">黒</a>
        </li>
    </ul>
</aside>
<?php wp_footer(); ?>
</body>
</html>