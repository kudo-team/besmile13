<!doctype html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords"
          content="大阪,就労継続支援A型,大阪府,大阪市,淀川区,大阪 就労継続支援A型,大阪市淀川区,BeSmile,Be Smile,ビースマイル,ビー スマイル,十三駅前,十三駅,十三">
    <meta name="theme-color" content="#e460d2">
    <meta name="format-detection" content="telephone=no">
    <?php $today = date("m");
    switch ($today) {
        case "01":
        case "12":
        case "02":
            echo '<link rel="icon" href="' . get_template_directory_uri() . '/images/favicon_winter.ico">';
            break;
        case "03":
        case "04":
        case "05":
            echo '<link rel="icon" href="' . get_template_directory_uri() . '/images/favicon_spring.ico">';
            break;
        case "06":
        case "07":
        case "08":
            echo '<link rel="icon" href="' . get_template_directory_uri() . '/images/favicon_summer.ico">';
            break;
        case "09":
        case "10":
        case "11":
            echo '<link rel="icon" href="' . get_template_directory_uri() . '/images/favicon_fall.ico">';
            break;
    }
    ?>
<!--    <link rel="stylesheet"-->
<!--          href="--><?php //echo get_template_directory_uri(); ?><!--/css/style_master.css?--><?php //echo mt_rand(); ?><!--">-->
<!--    <link rel="stylesheet" href="--><?php //echo get_template_directory_uri(); ?><!--/css/color01.css" id="css">-->
<!--    <script src="--><?php //echo get_template_directory_uri(); ?><!--/js/usability.js"></script>-->
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
    <script src="https://2bee.jp/taro/js/three.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=New+Tegomin&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://2bee.jp/taro/dist/style.css?<?php echo mt_rand(); ?>">
    <style>
        body {
            font-family: 'New Tegomin', serif;
        }
    </style>
    <title><?php echo wp_get_document_title(); ?></title>
    <?php wp_head(); ?>
</head>
<body id="body" <?php body_class(); ?> style="margin:0; padding:0; overflow: hidden; background-image:none;">
<canvas id="myCanvas"></canvas>
<video src="https://2bee.jp/taro/background_sm.mp4" muted autoplay playsinline id="video" loop></video>
<section id="comment">
    <h1 id="title_1"></h1>
    <h2 id="r_loc"></h2>
    <h3 id="r_key"></h3>
    <p id="message_1"></p>
    <hr>
    <h1 id="title_2"></h1>
    <h2 id="m_loc"></h2>
    <h3 id="m_key"></h3>
    <p id="message_2"></p>
    <hr>
    <p class="back">
        <a href="./tarot">別の人を占う</a> |
        <a href="https://13-sunplace-osaka.com/" target="_parent">Be Smileのトップに戻る</a><br>
        <em>Illustration by Bajo.</em>
    </p>
</section>
<script src="https://2bee.jp/taro/dist/main.js?<?php echo mt_rand(); ?>"></script>
<?php
function is_mobile()
{
    $user_agent = $_SERVER['HTTP_USER_AGENT'];
    return preg_match('/iphone|ipod|ipad|android/ui', $user_agent) != 0;
}
wp_footer(); ?>
</body>
</html>