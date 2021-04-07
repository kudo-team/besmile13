<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="就労継続支援A型のBeSmile（ビースマイル）十三駅前 大阪淀川区。就労継続支援A型だけでなく就労継続支援B型もサポート。あなたの働きたいを形にします。ご見学・ご相談、いつでもどうぞ！">
    <meta name="theme-color" content="#e460d2">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style_master.css?<?php echo mt_rand(); ?>">
    <?php if(wp_is_mobile()) : ?>
    <link href="<?php echo get_template_directory_uri(); ?>/css/noto_serif.css" rel="stylesheet">
    <?php endif; ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/color01.css" id="css">
    <script src="<?php echo get_template_directory_uri(); ?>/js/usability.js"></script>
    <title><?php echo wp_get_document_title(); ?></title>
    <?php wp_head(); ?>
</head>
<body id="body" <?php body_class(); ?>>
<header>
    <h1>
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/besmile_logo.png" alt="BeSmile（ビースマイル）"></a>
        大阪のA型事業所<br>
        BeSmile十三駅前
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
            </ul>
        </div>
    </nav>
</header>