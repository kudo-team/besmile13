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
        overflow: hidden;
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
        background-color: #ffffffcc;
        transform: rotate(350deg);
        box-shadow: rgba(50, 50, 93, 0.25) 0px 13px 27px -5px, rgba(0, 0, 0, 0.3) 0px 8px 16px -8px;
    }
    #page_main img{
        height: auto;
    }

    @media (max-width: 768px){
        #empty{
            display: none;
        }
        h1#sample_h1{
            transform: rotate(0deg);
        }

    }

</style>
<section id="sample_cube">
    <h1 id="sample_h1">BeSmile十三駅前イラストチーム<br>ポートフォリオ（サンプル）集</h1>
    <div style="width:0;height: 200px;" id="empty"></div>
    <div class="swiper-container mySwiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <a href="#aaafubuki"><img
                            src="https://13-sunplace-osaka.com/wp/wp-content/uploads/2021/05/1-1.png"/></a>
            </div>
            <div class="swiper-slide">
                <a href="#aaafubuki"><img
                            src="https://13-sunplace-osaka.com/wp/wp-content/uploads/2021/05/2-1.png"/></a>
            </div>
            <div class="swiper-slide">
                <a href="#aaafubuki"><img
                            src="https://13-sunplace-osaka.com/wp/wp-content/uploads/2021/06/aaa3-1.png"/></a>
            </div>
            <div class="swiper-slide">
                <a href="#aaafubuki"><img
                            src="https://13-sunplace-osaka.com/wp/wp-content/uploads/2021/06/aaa4.png"/></a>
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </div>
    <div class="swiper-container mySwiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <a href="#sakamoto"><img
                            src="https://13-sunplace-osaka.com/wp/wp-content/uploads/2021/06/毒蟲-moudoku-.jpg"/></a>
            </div>
            <div class="swiper-slide">
                <a href="#sakamoto"><img
                            src="https://13-sunplace-osaka.com/wp/wp-content/uploads/2021/06/SKULL-CENTIPEDE.jpg"/></a>
            </div>
            <div class="swiper-slide">
                <a href="#sakamoto"><img
                            src="https://13-sunplace-osaka.com/wp/wp-content/uploads/2021/06/Deep-Sea-Skull.jpg"/></a>
            </div>
            <div class="swiper-slide">
                <a href="#sakamoto"><img
                            src="https://13-sunplace-osaka.com/wp/wp-content/uploads/2021/06/DEAD-FOR-INSIDE.jpg"/></a>
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </div>
    <div class="swiper-container mySwiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <a href="#kurokawa"><img
                            src="https://13-sunplace-osaka.com/wp/wp-content/uploads/2021/06/kuro2.png"/></a>
            </div>
            <div class="swiper-slide">
                <a href="#kurokawa"><img
                            src="https://13-sunplace-osaka.com/wp/wp-content/uploads/2021/06/kuro4.jpg"/></a>
            </div>
            <div class="swiper-slide">
                <a href="#kurokawa"><img
                            src="https://13-sunplace-osaka.com/wp/wp-content/uploads/2021/06/kuro1.jpg"/></a>
            </div>
            <div class="swiper-slide">
                <a href="#kurokawa"><img
                            src="https://13-sunplace-osaka.com/wp/wp-content/uploads/2021/06/kuro3.png"/></a>
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </div>
    <div class="swiper-container mySwiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <a href="#mono"><img
                            src="https://13-sunplace-osaka.com/wp/wp-content/uploads/2021/06/mono1.png"/></a>
            </div>
            <div class="swiper-slide">
                <a href="#mono"><img
                            src="https://13-sunplace-osaka.com/wp/wp-content/uploads/2021/06/mono2.png"/></a>
            </div>
            <div class="swiper-slide">
                <a href="#mono"><img
                            src="https://13-sunplace-osaka.com/wp/wp-content/uploads/2021/06/mono3.png"/></a>
            </div>
            <div class="swiper-slide">
                <a href="#mono"><img
                            src="https://13-sunplace-osaka.com/wp/wp-content/uploads/2021/06/mono4.jpg"/></a>
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </div>
    <div class="swiper-container mySwiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <a href="#bajo"><img
                            src="https://13-sunplace-osaka.com/wp/wp-content/uploads/2021/06/bajo1.png"/></a>
            </div>
            <div class="swiper-slide">
                <a href="#bajo"><img
                            src="https://13-sunplace-osaka.com/wp/wp-content/uploads/2021/06/bajo2.png"/></a>
            </div>
            <div class="swiper-slide">
                <a href="#bajo"><img
                            src="https://13-sunplace-osaka.com/wp/wp-content/uploads/2021/06/bajo3.jpg"/></a>
            </div>
            <div class="swiper-slide">
                <a href="#bajo"><img
                            src="https://13-sunplace-osaka.com/wp/wp-content/uploads/2021/06/bajo4.png"/></a>
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </div>
    <div class="swiper-container mySwiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <a href="#hana"><img
                            src="https://13-sunplace-osaka.com/wp/wp-content/uploads/2021/06/hana4.png"/></a>
            </div>
            <div class="swiper-slide">
                <a href="#hana"><img
                            src="https://13-sunplace-osaka.com/wp/wp-content/uploads/2021/06/hana1.png"/></a>
            </div>
            <div class="swiper-slide">
                <a href="#hana"><img
                            src="https://13-sunplace-osaka.com/wp/wp-content/uploads/2021/06/hana2.png"/></a>
            </div>
            <div class="swiper-slide">
                <a href="#hana"><img
                            src="https://13-sunplace-osaka.com/wp/wp-content/uploads/2021/06/hana3.png"/></a>
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </div>
    <div class="swiper-container mySwiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <a href="#fuji"><img
                            src="https://13-sunplace-osaka.com/wp/wp-content/uploads/2021/06/fuji1.png"/></a>
            </div>
            <div class="swiper-slide">
                <a href="#fuji"><img
                            src="https://13-sunplace-osaka.com/wp/wp-content/uploads/2021/06/fuji2.jpg"/></a>
            </div>
            <div class="swiper-slide">
                <a href="#fuji"><img
                            src="https://13-sunplace-osaka.com/wp/wp-content/uploads/2021/06/fuji3.jpg"/></a>
            </div>
            <div class="swiper-slide">
                <a href="#fuji"><img
                            src="https://13-sunplace-osaka.com/wp/wp-content/uploads/2021/06/fuji4.png"/></a>
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </div>
    <div class="swiper-container mySwiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <a href="#kid"><img
                            src="https://13-sunplace-osaka.com/wp/wp-content/uploads/2021/06/kid1.png"/></a>
            </div>
            <div class="swiper-slide">
                <a href="#kid"><img
                            src="https://13-sunplace-osaka.com/wp/wp-content/uploads/2021/06/kid2.jpg"/></a>
            </div>
            <div class="swiper-slide">
                <a href="#kid"><img
                            src="https://13-sunplace-osaka.com/wp/wp-content/uploads/2021/06/besmile_logo_200-min_whiteback.png"/></a>
            </div>
            <div class="swiper-slide">
                <a href="#kid"><img
                            src="https://13-sunplace-osaka.com/wp/wp-content/uploads/2021/06/besmile_logo_200-min_whiteback.png"/></a>
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </div>
    <div class="swiper-container mySwiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <a href="#akatsuki"><img
                            src="https://13-sunplace-osaka.com/wp/wp-content/uploads/2021/06/aka1.png"/></a>
            </div>
            <div class="swiper-slide">
                <a href="#akatsuki"><img
                            src="https://13-sunplace-osaka.com/wp/wp-content/uploads/2021/06/aka2.jpg"/></a>
            </div>
            <div class="swiper-slide">
                <a href="#akatsuki"><img
                            src="https://13-sunplace-osaka.com/wp/wp-content/uploads/2021/06/aka3.png"/></a>
            </div>
            <div class="swiper-slide">
                <a href="#akatsuki"><img
                            src="https://13-sunplace-osaka.com/wp/wp-content/uploads/2021/06/aka4.png"/></a>
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </div>
    <div class="swiper-container mySwiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <a href="#"><img
                            src="https://13-sunplace-osaka.com/wp/wp-content/uploads/2021/06/besmile_logo_200-min_whiteback.png"/></a>
            </div>
            <div class="swiper-slide">
                <a href="#"><img
                            src="https://13-sunplace-osaka.com/wp/wp-content/uploads/2021/06/besmile_logo_200-min_whiteback.png"/></a>
            </div>
            <div class="swiper-slide">
                <a href="#"><img
                            src="https://13-sunplace-osaka.com/wp/wp-content/uploads/2021/06/besmile_logo_200-min_whiteback.png"/></a>
            </div>
            <div class="swiper-slide">
                <a href="#"><img
                            src="https://13-sunplace-osaka.com/wp/wp-content/uploads/2021/06/besmile_logo_200-min_whiteback.png"/></a>
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