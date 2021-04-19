<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="就労継続支援A型のBeSmile（ビースマイル）十三駅前 大阪淀川区。就労継続支援A型だけでなく就労継続支援B型もサポート。あなたの働きたいを形にします。ご見学・ご相談、いつでもどうぞ！">
    <meta name="theme-color" content="#e460d2">
    <meta name="format-detection" content="telephone=no">
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
        大阪の就労継続支援A型事業所<br>
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
                <li class="only_mobile"><a href="<?php echo esc_url( home_url( '/' ) ); ?>pdf/bbq.pdf">令和二年度地域連携報告</a></li>
                <li class="only_mobile"><a href="<?php echo esc_url( home_url( '/jobrequest/' ) ); ?>">お仕事のご依頼はこちら</a></li>
                <li class="only_mobile" id="contact_li">
                    <?php if(is_front_page()) : ?>
                        <a href="#contact">お問い合わせ</a>
                    <?php else: ?>
                        <a href="<?php echo esc_url( home_url( '/#contact' ) ); ?>">お問い合わせ</a>
                    <?php endif; ?>
                </li>
            </ul>
        </div>
    </nav>
</header>
<?php if(!is_front_page()) : ?>
    <nav class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
        <?php if(function_exists('bcn_display'))
        {
            bcn_display();
        }?>
    </nav>
<?php endif; ?>