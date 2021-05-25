<!doctype html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <style>
        html,
        body {
            position: relative;
            height: 100%;
            display: flex;
            justify-content: space-around;
            align-items: center;
            flex-wrap: wrap;
        }

        body {
            background: rgb(125,177,0);
            background: radial-gradient(circle, rgba(125,177,0,1) 0%, rgba(242,255,179,1) 100%);
            font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
            font-size: 14px;
            color: #000;
            margin: 0;
            padding: 0;
        }

        .swiper-container {
            width: 300px;
            height: 300px;
            position: static;
            margin:50px;
        }

        .swiper-slide {
            background-position: center;
            background-size: cover;
        }

        .swiper-slide img {
            display: block;
            width: 100%;
        }
        h1{
            position: absolute;
            width:fit-content;
            width: -moz-fit-content;
            left:50%;
            top: 50%;
            transform: translate(-50%,-50%);
            text-align: center;
            text-shadow: 0 5px 5px rgb(0 0 0 / 20%), 0 -5px 20px rgb(255 255 255 / 20%);
            color: #444444;
        }
    </style>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/lightbox.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/lightbox.js"></script>
</head>
<body>
<h1>BeSmile十三駅前<br>イラストチームサンプル集</h1>
<div class="swiper-container mySwiper">
    <div class="swiper-wrapper">
        <div class="swiper-slide">
            <a href="https://swiperjs.com/demos/images/nature-1.jpg" data-lightbox="demo"><img src="https://swiperjs.com/demos/images/nature-1.jpg" /></a>
        </div>
        <div class="swiper-slide">
            <a href="https://swiperjs.com/demos/images/nature-2.jpg" data-lightbox="demo"><img src="https://swiperjs.com/demos/images/nature-2.jpg" /></a>
        </div>
        <div class="swiper-slide">
            <a href="https://swiperjs.com/demos/images/nature-3.jpg" data-lightbox="demo"><img src="https://swiperjs.com/demos/images/nature-3.jpg" /></a>
        </div>
        <div class="swiper-slide">
            <a href="https://swiperjs.com/demos/images/nature-4.jpg" data-lightbox="demo"><img src="https://swiperjs.com/demos/images/nature-4.jpg" /></a>
        </div>
    </div>
    <div class="swiper-pagination"></div>
</div>
<div class="swiper-container mySwiper">
    <div class="swiper-wrapper">
        <div class="swiper-slide">
            <a href="https://swiperjs.com/demos/images/nature-1.jpg" data-lightbox="demo"><img src="https://swiperjs.com/demos/images/nature-1.jpg" /></a>
        </div>
        <div class="swiper-slide">
            <a href="https://swiperjs.com/demos/images/nature-2.jpg" data-lightbox="demo"><img src="https://swiperjs.com/demos/images/nature-2.jpg" /></a>
        </div>
        <div class="swiper-slide">
            <a href="https://swiperjs.com/demos/images/nature-3.jpg" data-lightbox="demo"><img src="https://swiperjs.com/demos/images/nature-3.jpg" /></a>
        </div>
        <div class="swiper-slide">
            <a href="https://swiperjs.com/demos/images/nature-4.jpg" data-lightbox="demo"><img src="https://swiperjs.com/demos/images/nature-4.jpg" /></a>
        </div>
    </div>
    <div class="swiper-pagination"></div>
</div>
<div class="swiper-container mySwiper">
    <div class="swiper-wrapper">
        <div class="swiper-slide">
            <a href="https://swiperjs.com/demos/images/nature-1.jpg" data-lightbox="demo"><img src="https://swiperjs.com/demos/images/nature-1.jpg" /></a>
        </div>
        <div class="swiper-slide">
            <a href="https://swiperjs.com/demos/images/nature-2.jpg" data-lightbox="demo"><img src="https://swiperjs.com/demos/images/nature-2.jpg" /></a>
        </div>
        <div class="swiper-slide">
            <a href="https://swiperjs.com/demos/images/nature-3.jpg" data-lightbox="demo"><img src="https://swiperjs.com/demos/images/nature-3.jpg" /></a>
        </div>
        <div class="swiper-slide">
            <a href="https://swiperjs.com/demos/images/nature-4.jpg" data-lightbox="demo"><img src="https://swiperjs.com/demos/images/nature-4.jpg" /></a>
        </div>
    </div>
    <div class="swiper-pagination"></div>
</div>
<div class="swiper-container mySwiper">
    <div class="swiper-wrapper">
        <div class="swiper-slide">
            <a href="https://swiperjs.com/demos/images/nature-1.jpg" data-lightbox="demo"><img src="https://swiperjs.com/demos/images/nature-1.jpg" /></a>
        </div>
        <div class="swiper-slide">
            <a href="https://swiperjs.com/demos/images/nature-2.jpg" data-lightbox="demo"><img src="https://swiperjs.com/demos/images/nature-2.jpg" /></a>
        </div>
        <div class="swiper-slide">
            <a href="https://swiperjs.com/demos/images/nature-3.jpg" data-lightbox="demo"><img src="https://swiperjs.com/demos/images/nature-3.jpg" /></a>
        </div>
        <div class="swiper-slide">
            <a href="https://swiperjs.com/demos/images/nature-4.jpg" data-lightbox="demo"><img src="https://swiperjs.com/demos/images/nature-4.jpg" /></a>
        </div>
    </div>
    <div class="swiper-pagination"></div>
</div>
<div class="swiper-container mySwiper">
    <div class="swiper-wrapper">
        <div class="swiper-slide">
            <a href="https://swiperjs.com/demos/images/nature-1.jpg" data-lightbox="demo"><img src="https://swiperjs.com/demos/images/nature-1.jpg" /></a>
        </div>
        <div class="swiper-slide">
            <a href="https://swiperjs.com/demos/images/nature-2.jpg" data-lightbox="demo"><img src="https://swiperjs.com/demos/images/nature-2.jpg" /></a>
        </div>
        <div class="swiper-slide">
            <a href="https://swiperjs.com/demos/images/nature-3.jpg" data-lightbox="demo"><img src="https://swiperjs.com/demos/images/nature-3.jpg" /></a>
        </div>
        <div class="swiper-slide">
            <a href="https://swiperjs.com/demos/images/nature-4.jpg" data-lightbox="demo"><img src="https://swiperjs.com/demos/images/nature-4.jpg" /></a>
        </div>
    </div>
    <div class="swiper-pagination"></div>
</div>
<div class="swiper-container mySwiper">
    <div class="swiper-wrapper">
        <div class="swiper-slide">
            <a href="https://swiperjs.com/demos/images/nature-1.jpg" data-lightbox="demo"><img src="https://swiperjs.com/demos/images/nature-1.jpg" /></a>
        </div>
        <div class="swiper-slide">
            <a href="https://swiperjs.com/demos/images/nature-2.jpg" data-lightbox="demo"><img src="https://swiperjs.com/demos/images/nature-2.jpg" /></a>
        </div>
        <div class="swiper-slide">
            <a href="https://swiperjs.com/demos/images/nature-3.jpg" data-lightbox="demo"><img src="https://swiperjs.com/demos/images/nature-3.jpg" /></a>
        </div>
        <div class="swiper-slide">
            <a href="https://swiperjs.com/demos/images/nature-4.jpg" data-lightbox="demo"><img src="https://swiperjs.com/demos/images/nature-4.jpg" /></a>
        </div>
    </div>
    <div class="swiper-pagination"></div>
</div>
<script>
    const swiper = new Swiper('.mySwiper', {
        loop: true,
        lazy: true,
        effect: "cube",
        autoplay: {
            delay: 2500,
            disableOnInteraction: false,
        },
        grabCursor: false,
        mousewheel: true,
        cubeEffect: {
            shadow: true,
            slideShadows: true,
            shadowOffset: 20,
            shadowScale: 0.94,
        },
        pagination: {
            el: ".swiper-pagination",
        },
    });
</script>
</body>
</html>