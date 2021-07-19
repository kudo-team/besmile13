<!doctype html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sunplace Bakery</title>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <style>
        *, *::after, *::before {
            box-sizing: border-box;
        }

        body {
            margin: 0px;
            padding: 0;
            color: #707070;
            position: relative;
        }

        a, a:focus, a:visited {
            text-decoration: none;
            color: #707070;
            transition: 0.2s;
        }

        a:hover {
            opacity: 0.7;
        }

        #menu {
            position: fixed;
            top: 0;
            left: -375px;
            width: 375px;
            height: 100vh;
            background-color: #ffffffcc;
            backdrop-filter: blur(7px);
            z-index: 5;
            transition: 0.3s;
            box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
        }

        #check_toggle {
            display: none;
        }

        #check_toggle:checked ~ #menu {
            left: 0;
        }

        #check_toggle:checked ~ #check_label {
            top: 10px;
            left: 10px;
        }

        #check_toggle:checked ~ #check_label > #hamburger {
            background-color: transparent;
        }

        #check_toggle:checked ~ #check_label > #hamburger::before {
            transform: rotate(-45deg) translate(-7px, -7px);
        }

        #check_toggle:checked ~ #check_label > #hamburger::after {
            transform: rotate(45deg) translate(-7px, 7px);
        }

        #check_label {
            width: 50px;
            height: 50px;
            display: flex;
            justify-content: center;
            align-items: center;
            position: fixed;
            top: 43px;
            left: 43px;
            z-index: 6;
            cursor: pointer;
            transition: 0.3s;
            background-color: #FFEE7D;
            border-radius: 5px;
            box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
        }

        #hamburger {
            display: block;
            width: 45px;
            height: 6px;
            border-radius: 3px;
            background-color: #F49C2D;
            position: relative;
            z-index: 6;
            transition: 0.3s;
        }

        #hamburger::before, #hamburger::after {
            content: '';
            display: block;
            width: 100%;
            height: 6px;
            background-color: #F49C2D;
            position: absolute;
            left: 0;
            border-radius: 3px;
            z-index: 6;
            transition: 0.3s;
        }

        #hamburger::before {
            top: -15px;
            transform-origin: right top;
        }

        #hamburger::after {
            bottom: -15px;
            transform-origin: right bottom;
        }

        #menu > ul {
            list-style: none;
            padding-left: 0;
            width: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-top: 50px;
            position: relative;
        }

        #moving_border {
            display: block;
            width: 200px;
            height: 60px;
            position: absolute;
            top: 0;
            left: 50%;
            transform: translateX(-50%);
            border: 3px solid #707070;
            border-radius: 30px;
            transition: 0.2s;
            pointer-events: none;
        }

        #menu > ul > li {
            height: 60px;
            width: 200px;
        }

        #menu > ul > li > a {
            display: flex;
            width: 100%;
            height: 100%;
            justify-content: center;
            align-items: center;
            border-radius: 30px;
        }

        section {
            position: relative;
            margin: 30px;
            width: calc(100% - 60px);
            /*height: calc(100vh - 60px);*/
        }

        body > section:not(:nth-child(4)) {
            border: 10px solid #C4D700;
            background-color: #FFEE7D;
        }

        @keyframes square-in-hesitate {
            0% {
                clip-path: polygon(50% 50%, 50% 50%, 50% 50%, 50% 50%);
            }
            40% {
                clip-path: polygon(calc(50% - 125px) calc(50% - 125px), calc(50% + 125px) calc(50% - 125px), calc(50% + 125px) calc(50% + 125px), calc(50% - 125px) calc(50% + 125px));
            }
            100% {
                clip-path: polygon(0 0, 100% 0, 100% 100%, 0% 100%);
            }
        }

        #mv {
            height: calc(100vh - 60px);
            background-image: url("https://13-sunplace-osaka.com/wp/wp-content/uploads/2021/07/back_pan.jpg");
            animation: 2.5s cubic-bezier(.25, 1, .30, 1) square-in-hesitate both, meronpan_anime 10s linear infinite;
        }

        .sub_titles {
            width: fit-content;
            width: -moz-fit-content;
            margin: 30px auto 15px;
            color: #F49C2D;
            background-image: url("https://13-sunplace-osaka.com/wp/wp-content/uploads/2021/07/h2.png");
            background-size: 100% 100%;
            padding: 20px 65px;
            position: relative;
            z-index: 3;
        }

        .sub_titles::before, .sub_titles::after {
            content: '';
            display: block;
            position: absolute;
            bottom: 17px;
            width: 4px;
            height: 61%;
            border-radius: 3px;
            background-color: #F49C2D;
        }

        .sub_titles::before {
            left: 45px;
            transform-origin: right bottom;
            transform: rotate(
                    -20deg
            );
        }

        .sub_titles::after {
            right: 45px;
            transform-origin: left bottom;
            transform: rotate(
                    20deg
            );
        }

        @keyframes meronpan_anime {
            from {
                background-position: 0px 0px;
            }
            to {
                background-position: 0px -673px;
            }
        }

        #mv_right {
            position: absolute;
            right: 0;
            top: 0;
            width: 100%;
            height: 100%;
            clip-path: polygon(0 0, 70% 0, 30% 100%, 0% 100%);
            background: linear-gradient(180deg, rgba(196, 215, 0, 0.7203256302521008) 0%, rgba(196, 215, 0, 1) 25%, rgba(196, 215, 0, 1) 100%);
        }

        #lady {
            position: absolute;
            bottom: 0;
            left: 0;
            max-height: 90%;
            width: auto;
        }

        @keyframes fuwafuwa {
            0% {
                transform: scale(1);
            }
            50% {
                transform: scale(1.1);
            }
            100% {
                transform: scale(1);
            }
        }

        #meron_fukidashi {
            position: absolute;
            top: 0;
            left: 30%;
            width: fit-content;
            padding: 54px 54px 41px 54px;
            color: black;
            margin: 0;
            background-image: url("https://13-sunplace-osaka.com/wp/wp-content/uploads/2021/07/ed9f1df5f565bbedb2a98d3e10bc6c04_w.png");
            background-size: 100% 100%;
            font-size: 41px;
            text-align: center;
            animation: fuwafuwa 2s linear infinite;
        }

        #meron_fukidashi > span {
            font-size: 30px;
        }

        #title {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 250px;
            height: 250px;
            margin: 0;
            background-color: #F49C2D;
            color: #ffffff;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            font-size: 50px;
            font-family: MyFont;
        }

        #title > span {
            letter-spacing: 10px;
            margin-left: 10px;
        }

        @font-face {
            font-family: 'MyFont';
            src: url(<?php echo get_template_directory_uri(); ?>/ttf/BonaNova-Bold.ttf);
        }

        .swiper-container {
            width: 100%;
            height: 600px;
        }

        .swiper_flex {
            display: flex;
            justify-content: center;
            padding: 0 45px;
        }

        .swiper_flex > img {
            width: 70%;
            max-width: 850px;
            height: auto;
            padding: 30px 30px 0px 45px;
        }

        .swiper_flex > p {
            width: 30%;
            padding: 30px 45px 0 0;
            margin: 0;
            line-height: 1.75;
        }

        .swiper-button-next:after, .swiper-button-prev:after {
            color: #C4D700;
            font-weight: bold;
        }

        .swiper-slide {
            position: relative;
        }

        #flow1::before, #flow2::before, #flow3::before {
            display: block;
            position: absolute;
            top: 0px;
            left: 24px;
            font-size: 50px;
        }

        #flow1::before {
            content: '1.';
        }

        #flow2::before {
            content: '2.';
        }

        #flow3::before {
            content: '3.';
        }

        #digital_money > img {
            display: block;
            margin: 30px auto;
            max-width: 80%;
            height: auto;
            position: relative;
            z-index: 3;
        }

        #digital_money > canvas {
            position: absolute;
            top: 0;
            left: 0;
        }

        .map_text {
            display: flex;
            padding: 20px;
            justify-content: center;
        }

        .text {
            padding-left: 30px;
        }

        .map_text iframe {
            width: 70%;
            max-width: 800px;
        }

        .meta_data {
            display: flex;
            align-items: center;
        }

        .meta_data p {
            margin-left: 10px;
        }

        .swiper-pagination-bullet-active {
            background: #C4D700;
        }

        html {
            scroll-behavior: smooth;
        }

        @media screen and (max-width: 768px) {
            @keyframes meronpan_anime {
                from {
                    background-position: 0px 0px;
                }
                to {
                    background-position: 0px -280px;
                }
            }
            #title {
                height: 140px;
                top: unset;
                bottom: 0;
            }

            section {
                margin: 10px;
                width: calc(100% - 20px);
            }

            #mv {
                height: calc(100vh - 20px);
                background-size: 244px;
                background-position-y: 0px;
                animation: 2.5s cubic-bezier(.25, 1, .30, 1) square-in-hesitate both, meronpan_anime 10s linear infinite;
            }

            #meron_fukidashi {
                font-size: 24px;
                left: unset;
                right: 0;
                padding: 28px 28px 20px;
            }

            #meron_fukidashi > span {
                font-size: 19px;
            }

            #lady {
                max-height: 100%;
                padding-top: 130px;
            }

            .sub_titles {
                font-size: 15px;
                margin: 30px auto 30px;
            }

            .swiper-container {
                height: auto;
                padding-bottom: 50px;
            }

            .swiper_flex {
                flex-direction: column;
            }

            .swiper_flex > img {
                padding: 0;
                width: 100%;
            }

            .swiper_flex > p {
                padding: 0;
                width: 100%;
            }

            #flow1::before, #flow2::before, #flow3::before {
                left: 8px;
                font-size: 31px;
            }

            .map_text {
                flex-direction: column;
            }

            .map_text iframe {
                width: 100%;
            }

            .text {
                padding-left: 0;
            }

            @keyframes square-in-hesitate {
                0% {
                    clip-path: polygon(50% calc(100% - 140px), 50% calc(100% - 140px), 50% calc(100% - 140px), 50% calc(100% - 140px));
                }
                40% {
                    clip-path: polygon(calc(50% - 125px) calc(100% - 210px), calc(50% + 125px) calc(100% - 210px), calc(50% + 125px) calc(100% - 70px), calc(50% - 125px) calc(100% - 70px));
                }
                100% {
                    clip-path: polygon(0 0, 100% 0, 100% 100%, 0% 100%);
                }
            }
        }
        @media screen and (max-height: 768px){
            #meron_fukidashi{
                left:36vh;
            }
        }
    </style>
</head>
<body>
<input type="checkbox" id="check_toggle">
<label for="check_toggle" id="check_label">
    <span id="hamburger"></span>
</label>
<nav id="menu">
    <ul>
        <span id="moving_border"></span>
        <li><a href="#mv">トップ</a></li>
        <li><a href="#pan_flow">こだわりのメロンパン</a></li>
        <li><a href="#digital_money">電子決済に対応</a></li>
        <li><a href="#access">店舗情報</a></li>
    </ul>
</nav>
<section id="mv">
    <div id="mv_right">
    </div>
    <img src="https://13-sunplace-osaka.com/wp/wp-content/uploads/2021/07/meronlady1.png" alt="店員" id="lady">
    <h2 id="meron_fukidashi">メロンパン<br><span>専門店です！</span></h2>
    <h1 id="title">Sunplace<br><span>Bakery</span></h1>
</section>
<section id="pan_flow">
    <h2 class="sub_titles">こだわりのメロンパン</h2>
    <!-- Slider main container -->
    <div class="swiper-container">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
            <!-- Slides -->
            <div class="swiper-slide" id="flow1">
                <div class="swiper_flex">
                    <img src="https://13-sunplace-osaka.com/wp/wp-content/uploads/2021/07/5047565_s.jpg" alt="pan1">
                    <p>
                        メロンパンとは、日本発祥の菓子パンの一種。パン生地の上に甘いビスケット生地（クッキー生地）をのせて焼いたパンである。ビスケット生地は他のパンに見られないほどに分厚く広範囲を覆っており、このパンの最大の特徴であるとされる。主に紡錘形のタイプと円形のタイプとそれ以外の形のタイプに分かれる。近畿地方と四国地方の一部、中国地方の一部では円形のメロンパンをサンライズと呼称する習慣がある[注
                        1]。</p>
                </div>
            </div>
            <div class="swiper-slide" id="flow2">
                <div class="swiper_flex">
                    <img src="https://13-sunplace-osaka.com/wp/wp-content/uploads/2021/07/1295105_s.jpg" alt="pan2">
                    <p>
                        メロンパンとは、日本発祥の菓子パンの一種。パン生地の上に甘いビスケット生地（クッキー生地）をのせて焼いたパンである。ビスケット生地は他のパンに見られないほどに分厚く広範囲を覆っており、このパンの最大の特徴であるとされる。主に紡錘形のタイプと円形のタイプとそれ以外の形のタイプに分かれる。近畿地方と四国地方の一部、中国地方の一部では円形のメロンパンをサンライズと呼称する習慣がある[注
                        1]。</p>
                </div>
            </div>
            <div class="swiper-slide" id="flow3">
                <div class="swiper_flex">
                    <img src="https://13-sunplace-osaka.com/wp/wp-content/uploads/2021/07/965706_s.jpg" alt="pan3">
                    <p>
                        メロンパンとは、日本発祥の菓子パンの一種。パン生地の上に甘いビスケット生地（クッキー生地）をのせて焼いたパンである。ビスケット生地は他のパンに見られないほどに分厚く広範囲を覆っており、このパンの最大の特徴であるとされる。主に紡錘形のタイプと円形のタイプとそれ以外の形のタイプに分かれる。近畿地方と四国地方の一部、中国地方の一部では円形のメロンパンをサンライズと呼称する習慣がある[注
                        1]。</p>
                </div>
            </div>
        </div>
        <!-- If we need pagination -->
        <div class="swiper-pagination"></div>

        <!-- If we need navigation buttons -->
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
    </div>
</section>
<section id="digital_money">
    <h2 class="sub_titles">電子決済に対応</h2>
    <img src="https://13-sunplace-osaka.com/wp/wp-content/uploads/2021/07/main-44-770x578-1.jpg" alt="電子決済">
</section>
<section id="access">
    <h2 class="sub_titles">店舗情報</h2>
    <div class="map_text">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13117.386664736156!2d135.4846047!3d34.7216552!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xdd90ef86a6b83967!2zQmUgU21pbGUg5Y2B5LiJ6aeF5YmN!5e0!3m2!1sja!2sjp!4v1623733244284!5m2!1sja!2sjp"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        <div class="text">
            <div class="meta_data">
                <img src="https://13-sunplace-osaka.com/wp/wp-content/uploads/2021/07/map-marker-alt-solid.svg"
                     width="20" height="20" loading="lazy" alt="address">
                <p>
                    〒532-0023<br>
                    大阪府大阪市淀川区十三東3-18-12<br>
                    伊藤ビル1F</p>

            </div>
            <div class="meta_data">
                <img src="https://13-sunplace-osaka.com/wp/wp-content/uploads/2021/07/walking-solid.svg" width="20"
                     height="20" loading="lazy" alt="walk">
                <p>阪急京都線・宝塚線・神戸線<br>
                    十三駅から徒歩6分
                </p>
            </div>
            <div class="meta_data">
                <img src="https://13-sunplace-osaka.com/wp/wp-content/uploads/2021/07/phone-solid.svg" width="20"
                     height="20" loading="lazy" alt="phone">
                <p>
                    06-6770-9011
                </p>
            </div>
        </div>
    </div>
    <p style="text-align: center;">©Sunplace Bakery</p>
</section>
<script>
    const swiper = new Swiper('.swiper-container', {
        // Optional parameters
        direction: 'horizontal',
        loop: true,
        autoplay: {
            delay: 5000,
            disableOnInteraction: false,
        },
        // If we need pagination
        pagination: {
            el: '.swiper-pagination',
        },

        // Navigation arrows
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },

    });
</script>
<script src="https://13-sunplace-osaka.com/wp/wp-content/themes/BeSmile13ekimae_theme/js/particles.min.js"
        data-deferred="1"></script>
<script>
    particlesJS("digital_money", {
        "particles": {
            "number": {"value": 19, "density": {"enable": true, "value_area": 800}},
            "color": {"value": "#ffffff"},
            "shape": {
                "type": "image",
                "stroke": {"width": 0, "color": "#000000"},
                "polygon": {"nb_sides": 5},
                "image": {
                    "src": "https://13-sunplace-osaka.com/wp/wp-content/uploads/2021/07/yen-sign-solid.png",
                    "width": 100,
                    "height": 133
                }
            },
            "opacity": {
                "value": 0.5,
                "random": false,
                "anim": {"enable": false, "speed": 1, "opacity_min": 0.1, "sync": false}
            },
            "size": {
                "value": 35.51164387345227,
                "random": true,
                "anim": {"enable": false, "speed": 40, "size_min": 0.1, "sync": false}
            },
            "line_linked": {"enable": false, "distance": 150, "color": "#ffffff", "opacity": 0.4, "width": 1},
            "move": {
                "enable": true,
                "speed": 6,
                "direction": "none",
                "random": false,
                "straight": false,
                "out_mode": "bounce",
                "bounce": false,
                "attract": {"enable": false, "rotateX": 600, "rotateY": 1200}
            }
        },
        "interactivity": {
            "detect_on": "canvas",
            "events": {
                "onhover": {"enable": false, "mode": "repulse"},
                "onclick": {"enable": false, "mode": "push"},
                "resize": true
            },
            "modes": {
                "grab": {"distance": 400, "line_linked": {"opacity": 1}},
                "bubble": {"distance": 400, "size": 40, "duration": 2, "opacity": 8, "speed": 3},
                "repulse": {"distance": 200, "duration": 0.4},
                "push": {"particles_nb": 4},
                "remove": {"particles_nb": 2}
            }
        },
        "retina_detect": true
    });
</script>
<script>
    jQuery(window).scroll(function () {
        var winH = jQuery(window).height();
        var scroll_value = jQuery(window).scrollTop();
        var window_center = (winH / 2) + scroll_value;
        var mv_height = jQuery('#mv').outerHeight(true);
        var pan_flow_height = jQuery('#pan_flow').outerHeight(true);
        var digital_money_height = jQuery('#digital_money').outerHeight(true);
        var access_height = jQuery('#access').outerHeight(true);
        if (window_center <= mv_height) {
            jQuery('#moving_border').css("top", "0px");
        } else if (window_center <= mv_height + pan_flow_height) {
            jQuery('#moving_border').css("top", "60px");
        } else if (window_center <= mv_height + pan_flow_height + digital_money_height) {
            jQuery('#moving_border').css("top", "120px");
        } else if (window_center <= mv_height + pan_flow_height + digital_money_height + access_height) {
            jQuery('#moving_border').css("top", "180px");
        }
    });
</script>
</body>
</html>