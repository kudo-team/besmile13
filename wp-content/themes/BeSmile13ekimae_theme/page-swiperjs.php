<?php get_header() ?>
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/lightbox.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/lightbox.js"></script>
<style>
    #sample_cube {
        position: relative;
        height: auto;
        width:100%;
        margin: 0 auto;
        max-width: 1243px;
        display: flex;
        justify-content: space-around;
        align-items: center;
        flex-wrap: wrap;
    }

    body {
        background: rgb(125, 177, 0);
        background: radial-gradient(circle, rgba(125, 177, 0, 1) 0%, rgba(242, 255, 179, 1) 100%);
        background-attachment: fixed;
    }

    .swiper-container {
        width: 200px;
        height: 200px;
        position: static;
        margin: 25px;
    }

    .swiper-slide {
        background-position: center;
        background-size: cover;
    }

    .swiper-slide img {
        display: block;
        width: 100%;
    }

    h1#sample_h1 {
        position: static;
        width: 450px;
        margin: 25px;
        text-align: center;
        text-shadow: 0 5px 5px rgb(0 0 0 / 20%), 0 -5px 20px rgb(255 255 255 / 20%);
        color: #444444;
    }
    #page_main img{
        height: auto;
    }
    @media (max-width: 768px){
        #empty{
            display: none;
        }
    }

</style>
<section id="sample_cube">
    <h1 id="sample_h1">BeSmile十三駅前イラストチーム<br>ポートフォリオ（サンプル）集</h1>
    <div style="width:0;height: 200px;" id="empty"></div>
    <div class="swiper-container mySwiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <a href="https://swiperjs.com/demos/images/nature-1.jpg" data-lightbox="demo"><img
                            src="https://13-sunplace-osaka.com/wp/wp-content/uploads/2021/05/1-1.png"/></a>
            </div>
            <div class="swiper-slide">
                <a href="https://swiperjs.com/demos/images/nature-2.jpg" data-lightbox="demo"><img
                            src="https://13-sunplace-osaka.com/wp/wp-content/uploads/2021/05/2-1.png"/></a>
            </div>
            <div class="swiper-slide">
                <a href="https://swiperjs.com/demos/images/nature-3.jpg" data-lightbox="demo"><img
                            src="https://swiperjs.com/demos/images/nature-3.jpg"/></a>
            </div>
            <div class="swiper-slide">
                <a href="https://swiperjs.com/demos/images/nature-4.jpg" data-lightbox="demo"><img
                            src="https://swiperjs.com/demos/images/nature-4.jpg"/></a>
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </div>
    <div class="swiper-container mySwiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <a href="https://swiperjs.com/demos/images/nature-1.jpg" data-lightbox="demo"><img
                            src="https://swiperjs.com/demos/images/nature-1.jpg"/></a>
            </div>
            <div class="swiper-slide">
                <a href="https://swiperjs.com/demos/images/nature-2.jpg" data-lightbox="demo"><img
                            src="https://swiperjs.com/demos/images/nature-2.jpg"/></a>
            </div>
            <div class="swiper-slide">
                <a href="https://swiperjs.com/demos/images/nature-3.jpg" data-lightbox="demo"><img
                            src="https://swiperjs.com/demos/images/nature-3.jpg"/></a>
            </div>
            <div class="swiper-slide">
                <a href="https://swiperjs.com/demos/images/nature-4.jpg" data-lightbox="demo"><img
                            src="https://swiperjs.com/demos/images/nature-4.jpg"/></a>
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </div>
    <div class="swiper-container mySwiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <a href="https://swiperjs.com/demos/images/nature-1.jpg" data-lightbox="demo"><img
                            src="https://swiperjs.com/demos/images/nature-1.jpg"/></a>
            </div>
            <div class="swiper-slide">
                <a href="https://swiperjs.com/demos/images/nature-2.jpg" data-lightbox="demo"><img
                            src="https://swiperjs.com/demos/images/nature-2.jpg"/></a>
            </div>
            <div class="swiper-slide">
                <a href="https://swiperjs.com/demos/images/nature-3.jpg" data-lightbox="demo"><img
                            src="https://swiperjs.com/demos/images/nature-3.jpg"/></a>
            </div>
            <div class="swiper-slide">
                <a href="https://swiperjs.com/demos/images/nature-4.jpg" data-lightbox="demo"><img
                            src="https://swiperjs.com/demos/images/nature-4.jpg"/></a>
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </div>
    <div class="swiper-container mySwiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <a href="https://swiperjs.com/demos/images/nature-1.jpg" data-lightbox="demo"><img
                            src="https://swiperjs.com/demos/images/nature-1.jpg"/></a>
            </div>
            <div class="swiper-slide">
                <a href="https://swiperjs.com/demos/images/nature-2.jpg" data-lightbox="demo"><img
                            src="https://swiperjs.com/demos/images/nature-2.jpg"/></a>
            </div>
            <div class="swiper-slide">
                <a href="https://swiperjs.com/demos/images/nature-3.jpg" data-lightbox="demo"><img
                            src="https://swiperjs.com/demos/images/nature-3.jpg"/></a>
            </div>
            <div class="swiper-slide">
                <a href="https://swiperjs.com/demos/images/nature-4.jpg" data-lightbox="demo"><img
                            src="https://swiperjs.com/demos/images/nature-4.jpg"/></a>
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </div>
    <div class="swiper-container mySwiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <a href="https://swiperjs.com/demos/images/nature-1.jpg" data-lightbox="demo"><img
                            src="https://swiperjs.com/demos/images/nature-1.jpg"/></a>
            </div>
            <div class="swiper-slide">
                <a href="https://swiperjs.com/demos/images/nature-2.jpg" data-lightbox="demo"><img
                            src="https://swiperjs.com/demos/images/nature-2.jpg"/></a>
            </div>
            <div class="swiper-slide">
                <a href="https://swiperjs.com/demos/images/nature-3.jpg" data-lightbox="demo"><img
                            src="https://swiperjs.com/demos/images/nature-3.jpg"/></a>
            </div>
            <div class="swiper-slide">
                <a href="https://swiperjs.com/demos/images/nature-4.jpg" data-lightbox="demo"><img
                            src="https://swiperjs.com/demos/images/nature-4.jpg"/></a>
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </div>
    <div class="swiper-container mySwiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <a href="https://swiperjs.com/demos/images/nature-1.jpg" data-lightbox="demo"><img
                            src="https://swiperjs.com/demos/images/nature-1.jpg"/></a>
            </div>
            <div class="swiper-slide">
                <a href="https://swiperjs.com/demos/images/nature-2.jpg" data-lightbox="demo"><img
                            src="https://swiperjs.com/demos/images/nature-2.jpg"/></a>
            </div>
            <div class="swiper-slide">
                <a href="https://swiperjs.com/demos/images/nature-3.jpg" data-lightbox="demo"><img
                            src="https://swiperjs.com/demos/images/nature-3.jpg"/></a>
            </div>
            <div class="swiper-slide">
                <a href="https://swiperjs.com/demos/images/nature-4.jpg" data-lightbox="demo"><img
                            src="https://swiperjs.com/demos/images/nature-4.jpg"/></a>
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </div>
    <div class="swiper-container mySwiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <a href="https://swiperjs.com/demos/images/nature-1.jpg" data-lightbox="demo"><img
                            src="https://swiperjs.com/demos/images/nature-1.jpg"/></a>
            </div>
            <div class="swiper-slide">
                <a href="https://swiperjs.com/demos/images/nature-2.jpg" data-lightbox="demo"><img
                            src="https://swiperjs.com/demos/images/nature-2.jpg"/></a>
            </div>
            <div class="swiper-slide">
                <a href="https://swiperjs.com/demos/images/nature-3.jpg" data-lightbox="demo"><img
                            src="https://swiperjs.com/demos/images/nature-3.jpg"/></a>
            </div>
            <div class="swiper-slide">
                <a href="https://swiperjs.com/demos/images/nature-4.jpg" data-lightbox="demo"><img
                            src="https://swiperjs.com/demos/images/nature-4.jpg"/></a>
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </div>
    <div class="swiper-container mySwiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <a href="https://swiperjs.com/demos/images/nature-1.jpg" data-lightbox="demo"><img
                            src="https://swiperjs.com/demos/images/nature-1.jpg"/></a>
            </div>
            <div class="swiper-slide">
                <a href="https://swiperjs.com/demos/images/nature-2.jpg" data-lightbox="demo"><img
                            src="https://swiperjs.com/demos/images/nature-2.jpg"/></a>
            </div>
            <div class="swiper-slide">
                <a href="https://swiperjs.com/demos/images/nature-3.jpg" data-lightbox="demo"><img
                            src="https://swiperjs.com/demos/images/nature-3.jpg"/></a>
            </div>
            <div class="swiper-slide">
                <a href="https://swiperjs.com/demos/images/nature-4.jpg" data-lightbox="demo"><img
                            src="https://swiperjs.com/demos/images/nature-4.jpg"/></a>
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </div>
    <div class="swiper-container mySwiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <a href="https://swiperjs.com/demos/images/nature-1.jpg" data-lightbox="demo"><img
                            src="https://swiperjs.com/demos/images/nature-1.jpg"/></a>
            </div>
            <div class="swiper-slide">
                <a href="https://swiperjs.com/demos/images/nature-2.jpg" data-lightbox="demo"><img
                            src="https://swiperjs.com/demos/images/nature-2.jpg"/></a>
            </div>
            <div class="swiper-slide">
                <a href="https://swiperjs.com/demos/images/nature-3.jpg" data-lightbox="demo"><img
                            src="https://swiperjs.com/demos/images/nature-3.jpg"/></a>
            </div>
            <div class="swiper-slide">
                <a href="https://swiperjs.com/demos/images/nature-4.jpg" data-lightbox="demo"><img
                            src="https://swiperjs.com/demos/images/nature-4.jpg"/></a>
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </div>
    <div class="swiper-container mySwiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <a href="https://swiperjs.com/demos/images/nature-1.jpg" data-lightbox="demo"><img
                            src="https://swiperjs.com/demos/images/nature-1.jpg"/></a>
            </div>
            <div class="swiper-slide">
                <a href="https://swiperjs.com/demos/images/nature-2.jpg" data-lightbox="demo"><img
                            src="https://swiperjs.com/demos/images/nature-2.jpg"/></a>
            </div>
            <div class="swiper-slide">
                <a href="https://swiperjs.com/demos/images/nature-3.jpg" data-lightbox="demo"><img
                            src="https://swiperjs.com/demos/images/nature-3.jpg"/></a>
            </div>
            <div class="swiper-slide">
                <a href="https://swiperjs.com/demos/images/nature-4.jpg" data-lightbox="demo"><img
                            src="https://swiperjs.com/demos/images/nature-4.jpg"/></a>
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </div>
</section>
<?php while ( have_posts() ) : the_post(); ?>
    <main id="page_main">
		<?php the_content(); ?>
    </main>
<?php endwhile; ?>
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
<?php get_footer(); ?>