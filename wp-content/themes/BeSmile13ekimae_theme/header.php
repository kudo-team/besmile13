<!DOCTYPE html>
<html lang="ja">
<head>
    <script>
        var url = location.href

        if (url.indexOf('http:') >= 0) { // 判定方法の修正
            // url文字列の書き換え
            var newUrl = url.replace('http:', 'https:'); // 書き換え方法の修正

            // リダイレクト
            location.replace(newUrl);
        }
    </script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php if(is_single() || is_archive() || is_page(51)): ?>
    <script data-ad-client="ca-pub-7227979045791310" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <?php endif; ?>
    <meta name="keywords"
          content="大阪,就労継続支援A型,大阪府,大阪市,淀川区,大阪 就労継続支援A型,大阪市淀川区,BeSmile,Be Smile,ビースマイル,ビー スマイル,十三駅前,十三駅,十三">
    <meta name="theme-color" content="#e460d2">
    <meta name="format-detection" content="telephone=no">
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico">
    <link rel="apple-touch-icon" href="https://13-sunplace-osaka.com/wp/wp-content/uploads/2021/06/25f9af61b5241ed8bc47fdecedda4a0513d87b8e9a1a50b4c45d8c20bf3fac57.png">
    <link rel="stylesheet"
          href="<?php echo get_template_directory_uri(); ?>/css/style_master.css?<?php echo mt_rand(); ?>">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/color01.css" id="css">
    <script src="<?php echo get_template_directory_uri(); ?>/js/usability.js"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-L5VD11YFK1%22%3E"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());

        gtag('config', 'G-L5VD11YFK1');
    </script>
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "LocalBusiness",
            "name": "Be Smile 十三駅前",
            "description": "大阪から世界へ。就労継続支援A型のBeSmile（ビースマイル）十三駅前では、あなたの働きたいを形にします。利用者募集。ご見学やご相談などいつでも歓迎します。お気軽にお問い合わせください。",
            "address": "大阪府大阪市淀川区十三東３丁目１８−１２ 伊藤ビル １F",
            "url": "https://13-sunplace-osaka.com/",
            "telephone": "0667709011",
            "geo": {
                "@type": "GeoCoordinates",
                "latitude": "34.721655",
                "longitude": "135.484605"
            },
            "openingHours": "Mon-Sut 10:00-17:00",
            "paymentAccepted": [
                "Cach"
            ]
        }
    </script>
    <title><?php echo wp_get_document_title(); ?></title>
	<?php wp_head(); ?>
</head>
<body id="body" <?php body_class(); ?>>
<header>
    <h1>
        <a class="flex" href="<?php echo esc_url( home_url( '/' ) ); ?>">
            <img src="https://13-sunplace-osaka.com/wp/wp-content/uploads/2021/06/besmile_logo_200-min.png" alt="BeSmile（ビースマイル）ロゴ" loading="lazy" width="100" height="100">
        </a>
        <a class="flex" href="<?php echo esc_url( home_url( '/' ) ); ?>"><span class="osaka_agata">大阪の就労継続支援A型</span>BeSmile十三駅前</a>

    </h1>
    <nav class="Hamburger__Menu" id="Hamburger__Menu">
        <input type="checkbox" id="menu-btn-check">
        <label for="menu-btn-check" class="Hamburger__Menu--btn"><span></span></label>
        <div class="Hamburger__Menu__Content">
            <ul>
                <!--<li><a href="#">ご挨拶</a></li>-->
                <li><a href="<?php echo esc_url( home_url( '/instructors/' ) ); ?>">支援員紹介</a></li>
                <li><a href="<?php echo esc_url( home_url( '/flow/' ) ); ?>">ご利用までの流れ</a></li>
                <li><a href="<?php echo esc_url( home_url( '/company/' ) ); ?>">企業情報</a></li>
                <li><a href="<?php echo esc_url( home_url( '/faq/' ) ); ?>">よくあるご質問</a></li>
                <li class="only_mobile"><a href="https://sunplace-osaka.com/">一般社団法人サンプレイス</a></li>
                <li class="only_mobile"><a href="<?php echo esc_url( home_url( '/' ) ); ?>pdf/cooperation.pdf">令和二年度地域連携報告</a>
                </li>
                <li class="only_mobile"><a href="<?php echo esc_url( home_url( '/' ) ); ?>pdf/score.pdf">令和二年度スコア表</a>
                </li>
                <li class="only_mobile"><a href="<?php echo esc_url( home_url( '/jobrequest/' ) ); ?>">お仕事のご依頼はこちら</a>
                </li>
                <li class="only_mobile"><a href="<?php echo esc_url( home_url( '/column/' ) ); ?>">大阪就労支援A型コラム</a></li>
                <li class="only_mobile"><a href="https://13-sunplace-osaka.2bee.jp/">タロットカード占い</a></li>
                <li class="only_mobile"><a href="<?php echo esc_url( home_url( '/banner/' ) ); ?>">バナー制作サンプル集</a></li>
                <li class="only_mobile"><a href="<?php echo esc_url(home_url('/portfolio/')); ?>">イラストチームポートフォリオ</a></li>
                <li class="only_mobile" id="contact_li">
					<?php if ( is_front_page() ) : ?>
                        <a href="#contact">お問い合わせ</a>
					<?php else: ?>
                        <a href="<?php echo esc_url( home_url( '/#contact' ) ); ?>">お問い合わせ</a>
					<?php endif; ?>
                </li>
                <li class="only_mobile"><a href="<?php echo esc_url( home_url( '/agreement/' ) ); ?>">利用規約</a></li>
            </ul>
        </div>
    </nav>
</header>
<?php if ( ! is_front_page() ) : ?>
<nav class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
	<?php if ( function_exists( 'bcn_display' ) ) {
		bcn_display();
	} ?>
</nav>
<?php endif; ?>