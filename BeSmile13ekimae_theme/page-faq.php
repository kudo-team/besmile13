<?php get_header(); ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/lightbox.css">
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/lightbox.js"></script>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/faq.css?<?php echo mt_rand(); ?>">
    <div class="cp_qa">
        <h1>よくあるご質問</h1>
        <input id="acd-check1" class="acd-check" type="checkbox">
        <label class="acd-label" for="acd-check1"><i class="fab fa-quora"></i>利用には料金がかかりますか？</label>
        <div class="acd-content">
            <i class="fab fa-adn"></i>
            <p>サービスご利用の殆どの場合は免除になりますが、前年度の収入により自己負担が発生する場合があります。<br>
                <span style="font-size:0.9em;">※入所施設ご利用者（20歳以上）、グループホーム、ケアホームご利用者は、市町村民税課税世帯の場合、有料になります。詳しくは<a href="<?php echo esc_url( home_url( '/' ) ); ?>wp/pdf/burden.pdf">こちら</a></span></p>
        </div>
        <input id="acd-check2" class="acd-check" type="checkbox">
        <label class="acd-label" for="acd-check2"><i class="fab fa-quora"></i>見学をしたいのですが、どうすればいいでしょうか？</label>
        <div class="acd-content">
            <i class="fab fa-adn"></i>
            <p>施設の見学は随時行っております。お電話またはメールでお問い合わせください。 ご質問だけでも大丈夫ですよ。</p>
        </div>
        <input id="acd-check3" class="acd-check" type="checkbox">
        <label class="acd-label" for="acd-check3"><i class="fab fa-quora"></i>施設の利用できる時間は何時までですか？</label>
        <div class="acd-content">
            <i class="fab fa-adn"></i>
            <p>月曜日～土曜日の午前9時～午後5時まで開いております。(日・祝はお休み)利用時間（休憩含む）は5時間程度になります。</p>
        </div>
        <input id="acd-check4" class="acd-check" type="checkbox">
        <label class="acd-label" for="acd-check4"><i class="fab fa-quora"></i>面接の際に必要なものはありますか？</label>
        <div class="acd-content">
            <i class="fab fa-adn"></i>
            <p>写真つき履歴書と障害者手帳（お持ちの場合）が必要となります。 入所（就職）が決定した後は、障がい福祉サービス受給者証の発行が必要となります。<br>
                <span style="font-size:0.9em;">※受給者証の発行窓口はお住まいの市区町村障害福祉課もしくは保険センターになります。詳しくは管轄の役所までお問い合わせください。</span>
            </p>
        </div>
        <input id="acd-check5" class="acd-check" type="checkbox">
        <label class="acd-label" for="acd-check5"><i class="fab fa-quora"></i>事業所を利用するにあたり、必要なものはありますか？</label>
        <div class="acd-content">
            <i class="fab fa-adn"></i>
            <p>スリッパをご持参下さい。また、給与振込口座としてみずほ銀行の口座開設をお願いしております。</p>
        </div>
        <input id="acd-check6" class="acd-check" type="checkbox">
        <label class="acd-label" for="acd-check6"><i class="fab fa-quora"></i>利用可能な方の対象を教えてください。</label>
        <div class="acd-content">
            <i class="fab fa-adn"></i>
            <p>障害者手帳又は療育手帳を発行されている方、もしくは難病指定に認定されている方で、身辺自立が出来ている方。<br>
                <span style="font-size:0.9em;">※車いすの方も可能です。</span></p>
        </div>
        <input id="acd-check7" class="acd-check" type="checkbox">
        <label class="acd-label" for="acd-check7"><i class="fab fa-quora"></i>障害者手帳は必ず必要ですか？</label>
        <div class="acd-content">
            <i class="fab fa-adn"></i>
            <p>医師の意見書により受給者証が発行されれば必ずしも必要ではありません。</p>
        </div>
        <input id="acd-check8" class="acd-check" type="checkbox">
        <label class="acd-label" for="acd-check8"><i class="fab fa-quora"></i>私は車イスに乗っています。利用は可能ですか？</label>
        <div class="acd-content">
            <i class="fab fa-adn"></i>
            <p>利用者の中にも車イスの方がいらっしゃいます。ですので、トイレ等のバリアフリーや介助も徹底しています。<br>
                <span style="font-size:0.9em;">※女性スタッフも在籍していますので、女性の方も安心してご利用できます。</span></p>
        </div>
        <input id="acd-check9" class="acd-check" type="checkbox">
        <label class="acd-label" for="acd-check9"><i class="fab fa-quora"></i>利用日数はどうなっていますか？</label>
        <div class="acd-content">
            <i class="fab fa-adn"></i>
            <p>殆どの方が週に5日利用しています。入所当初は、体調管理や通院の事情もありますので、個別にご相談に応じています。</p>
        </div>
        <input id="acd-check10" class="acd-check" type="checkbox">
        <label class="acd-label" for="acd-check10"><i class="fab fa-quora"></i>昼食はどうすればいいですか？</label>
        <div class="acd-content">
            <i class="fab fa-adn"></i>
            <p>ご自身でお弁当を持参されていらっしゃる方もいますが、弊社では、<a
                        href="https://13-sunplace-osaka.com/wp/wp-content/uploads/2021/04/bento-scaled.jpg"
                        data-lightbox="bento">お弁当を提供</a>しています。（負担有）</p>
        </div>
        <input id="acd-check11" class="acd-check" type="checkbox">
        <label class="acd-label" for="acd-check11"><i class="fab fa-quora"></i>お給料日はいつですか？</label>
        <div class="acd-content">
            <i class="fab fa-adn"></i>
            <p>当月末締めの翌月25日払いとなります。<br>
                <span style="font-size:0.9em;">※25日が土曜日の場合は前日、日曜日の場合は翌日となります。</span></p>
        </div>
        <input id="acd-check12" class="acd-check" type="checkbox">
        <label class="acd-label" for="acd-check12"><i class="fab fa-quora"></i>交通費は支給されますか？</label>
        <div class="acd-content">
            <i class="fab fa-adn"></i>
            <p>通勤にかかる公共交通機関の交通費は、事業所が全額を負担します。（上限10,000円）</p>
        </div>
    </div>
<?php get_footer(); ?>