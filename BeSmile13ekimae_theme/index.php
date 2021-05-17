<?php get_header(); ?>
    <?php if(wp_is_mobile()): ?>
        <style>
            body.home{
                background-image: unset;
            }
        </style>
    <?php endif; ?>
    <main>
        <section class="Cherry__Menu">
            <nav id="hanabira">
                <div class="img_fit_div">
                    <?php $today = date("m");
                    switch ($today) {
                        case "01":
                        case "12":
                        case "02":
                            echo '<img src="https://13-sunplace-osaka.com/wp/wp-content/uploads/2021/04/snow_wood-min.png" id="main_image" alt="ご神木" loading="lazy" width="1082" height="940">';
                            echo '<style>@media screen and (max-width: 870px){#hanabira > div.img_fit_div{height: calc(100vw * 0.8687 - 14px);}} @media screen and (max-width: 1159px){.vertical-1,.vertical-2{background-color: #ffffff66; backdrop-filter: blur(16px);}}</style>';
                            break;
                        case "03":
                        case "04":
                        case "05":
                            if(!wp_is_mobile()):
                            echo '<img src="' . get_template_directory_uri() . '/images/wood2-min.webp" id="main_image" alt="桜" srcset="https://13-sunplace-osaka.com/wp/wp-content/uploads/2021/04/wood2-320w-min.png 320w,https://13-sunplace-osaka.com/wp/wp-content/uploads/2021/04/wood2-640w-min.png 640w,https://13-sunplace-osaka.com/wp/wp-content/uploads/2021/04/wood2-750w-min.png 750w,' . get_template_directory_uri() . '/images/wood2-min_1000.webp 1000w" width="754.8" height="762" loading="lazy">';
                            else:
                            echo '<img src="' . get_template_directory_uri() . '/images/wood2_w500.webp" id="main_image" alt="桜" width="754.8" height="762" loading="lazy">';
                            endif;
                            break;
                        case "06":
                        case "07":
                        case "08":
                            echo '<img src="https://13-sunplace-osaka.com/wp/wp-content/uploads/2021/04/green_wood2-min.png" id="main_image" alt="緑の木" loading="lazy" width="847" height="707">';
                            echo '<style>img#main_image{padding-bottom: 15px;} .menu{background-color: #dccb18cc;} @media screen and (max-width: 1159px){.vertical-1,.vertical-2{background-color: #ffffff66; backdrop-filter: blur(16px);}}</style>';
                            break;
                        case "09":
                        case "10":
                        case "11":
                            echo '<img src="https://13-sunplace-osaka.com/wp/wp-content/uploads/2021/04/188336-min-min.png" id="main_image" alt="楓" loading="lazy" width="1000" height="970">';
                            echo '<style>@media screen and (max-width: 870px){#hanabira > div.img_fit_div{height: calc(100vw * 0.97);}}</style>';
                            break;
                    }
                    ?>

                    <a href="https://sunplace-osaka.com/" id="sun" rel="nofollow">
                        <?php if(!wp_is_mobile()): ?>
                        <img
                                src="<?php $upload_dir = wp_upload_dir();
                                echo $upload_dir['baseurl']; ?>/2021/04/sun_200-min.png" alt="太陽" width="100"
                                height="99.41"
                                loading="lazy">
                        <?php else: ?>
                            <img src="<?php echo get_template_directory_uri(); ?>/images/sun_200-min.webp" alt="太陽" width="100"
                                    height="99.41"
                                    loading="lazy">
                        <?php endif; ?>
                    </a>
                    <?php if (is_user_logged_in()): ?>
                        <!--<img src="<?php $upload_dir = wp_upload_dir();
                        echo $upload_dir['baseurl']; ?>/2021/04/2IT-min.png" alt="見入るキツネ" loading="lazy" width="500"
                         height="631" class="mv_kitsune">-->
                    <?php endif; ?>
                    <div id="sakura_animation">
                        <div id="sakura_animation2"></div>
                    </div>
                    <div class="key_visual">
                        <div class="vertical-1">自分にあった</div>
                        <div class="vertical-2">やりたいこと見つけた<span class="yoko">!!</span></div>
                        <ul class="mainmenu">
                            <li class="menu_s menu"><a href="#section06">サウンド</a></li>
                            <li class="menu_p menu"><a href="#section05">プログラミング</a></li>
                            <li class="menu_it menu"><a href="#section02">ITに特化</a></li>
                            <li class="menu_a menu"><a href="#section01">A型事業所</a></li>
                            <li class="menu_h menu"><a href="#section03">ホームページ</a></li>
                            <li class="menu_il menu"><a href="#section04">イラスト</a></li>
                            <li class="menu_soto menu"><a href="#section07">施設外就労</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </section>
        <section id="chiiki_renkei">
            <ul id="submenu">
                <li>
                    <a href="https://sunplace-osaka.com/" rel="nofollow">一般社団法人<br>サンプレイス</a>
                </li>
                <li>
                    <a href="<?php echo esc_url(home_url('/')); ?>pdf/cooperation.pdf">令和二年度<br>地域連携報告</a>
                </li>
                <li>
                    <a href="<?php echo esc_url(home_url('/')); ?>pdf/score.pdf">令和二年度<br>スコア表</a>
                </li>
                <li>
                    <a href="<?php echo esc_url(home_url('/jobrequest/')); ?>">お仕事のご依頼<br>はこちら</a>
                </li>
                <li>
                    <a href="<?php echo esc_url(home_url('/column/')); ?>">大阪就労支援<br>A型コラム</a>
                </li>
                <li>
                    <a href="<?php echo esc_url( home_url( '/tarot/' ) ); ?>">タロットカード<br>占い</a>
                </li>
            </ul>
        </section>
        <section id="blog">
            <h2>ブログ＆コラム</h2>
            <?php if (have_posts()): ?>
                <div class="wrap_articles">
                    <?php
                    global $max_num_page;
                    $paged = get_query_var('paged') ? get_query_var('paged') : 1;

                    if (wp_is_mobile()) {
                        $args = array(
                            'post_type' => array('post', 'column'),
                            'posts_per_page' => 5,
                            'orderby' => 'date',
                            'order' => 'DESC',
                            'paged' => $paged,
                        );
                    } else {
                        $args = array(
                            'post_type' => array('post', 'column'),
                            'posts_per_page' => 3,
                            'orderby' => 'date',
                            'order' => 'DESC',
                            'paged' => $paged,
                        );
                    }
                    $the_query = new WP_Query($args);
                    while ($the_query->have_posts()) : $the_query->the_post();
                        ?>
                        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                            <?php if (!wp_is_mobile()): ?>
                                <?php if (has_post_thumbnail()): ?>
                                    <a href="<?php the_permalink(); ?>">
                                        <?php the_post_thumbnail('medium'); ?>
                                    </a>
                                <?php else: ?>
                                    <a href="<?php the_permalink(); ?>">
                                        <img src="https://13-sunplace-osaka.com/wp/wp-content/uploads/2021/05/besmilelogo.jpg"
                                             alt="no-image">
                                    </a>
                                <?php endif; ?>
                            <?php endif; ?>
                            <div class="blog_text_area">
                                <a href="<?php the_permalink(); ?>">
                                    <h2><?php echo get_the_title(); ?></h2>
                                </a>
                                <time datetime="<?php the_time('Y-m-d'); ?>"><?php echo get_the_date(); ?></time>
                                <div>記事タイプ：<?php if (get_post_type(get_the_ID()) == 'post') {
                                        echo 'ブログ';
                                    } else {
                                        echo 'コラム';
                                    } ?></div>
                                <a href="<?php the_permalink(); ?>" class="color444">
                                    <?php the_excerpt(); ?>
                                </a>
                            </div>
                        </article>
                    <?php endwhile;
                    wp_reset_postdata(); ?>
                </div>
                <div class="flex_row">
                    <a href="<?php echo esc_url(home_url('/')); ?>archive/" class="archive_link">ブログ記事一覧</a>
                    <a href="<?php echo esc_url(home_url('/')); ?>column/" class="archive_link">コラム記事一覧</a>
                </div>
            <?php else: ?>
                <p>ブログ記事はまだありません。</p>
            <?php endif; ?>
        </section>
        <!--A型事業所とは-->
        <section class="Section__Odd" id="section01">
            <h2>就労継続支援A型とは？</h2>
            <div class="Section__Odd__Contents">
                <figure>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/1A-min.webp" alt="ニュースを読むキツネ" loading="lazy" width="500"
                         height="671" class="fadeup">
                    <figcaption>※BeSmile（ビースマイル）十三駅前イラストチーム制作</figcaption>
                </figure>
                <div class="Section__Odd__Paragraph">
                    <p><strong>就労継続支援A型</strong>とは、主に心身に障がいをお持ちの方に対して、将来的な一般就労を目標とした自立を支援するために<strong
                                class="marker-animation">就労の場を提供する</strong>福祉サービスのことです。<br>
                        そこには、そのサービスを利用する「利用者」と利用者を支える「支援員」がいて、利用者は支援員のサポートを受けながら、一方でしっかりと雇用契約を結び、”就労”をしていただきます。つまり、仕事をする意欲はあるものの、まだ一般就労は気が引けるという方に対して最適なサービスとなっております。<br>
                        中には営利目的で本サービスを行っている事業所もある中、弊所、BeSmile十三駅前は<strong
                                class="marker-animation">サポートが充実している</strong>と自負しております。是非一度ご見学に来ていただいて、その雰囲気を肌で感じてみてくださいね。
                    </p>
                </div>
            </div>
            <div class="Section__Odd--cherry">
                <?php if(wp_is_mobile()): ?><img src="<?php echo get_template_directory_uri(); ?>/images/sakura_1_w400.webp" alt="桜の枝" loading="lazy"
                         width="607" height="276.73">
                <?php else: ?>
                <img src="<?php echo get_template_directory_uri(); ?>/images/sakura_1.webp" alt="" loading="lazy"
                     width="607" height="276.73">
                <?php endif; ?>
            </div>
        </section>
        <!--/A型事業所とは-->

        <!--ITに特化-->
        <section class="Section__Even" id="section02">
            <h2>ITに特化した事業所</h2>
            <div class="Section__Even__Content">
                <div class="Section__Even__Paragraph">
                    <p>様々なA型事業所がある中、BeSmile十三駅前の特色として、IT事業に特化しているというところがあります。
                        例えばゲームプログラミング、ゲームイラスト制作、ゲームサウンド制作、ホームページ制作等、あなたの<strong
                                class="marker-animation">ITスキルを存分に発揮できる</strong>環境がBeSmile十三駅前にはあります。<br>
                        世間には軽作業等をメインに行っている事業所が多い中、イマドキなBeSmile十三駅前にご興味ございませんか？<br>
                        ちなみに案件がないときは<a href="<?php echo esc_url(home_url('/easy_work/')); ?>">軽作業</a>・清掃等の業務も一部行っているため、ちょっとそっちで息抜きなんていうこともできます。
                    </p>
                </div>
                <figure>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/2IT-min.webp" alt="見入るキツネ" loading="lazy" width="500"
                         height="631" class="fadeup">
                    <figcaption>※BeSmile（ビースマイル）十三駅前イラストチーム制作</figcaption>
                </figure>
            </div>
            <div class="Section__Even--cherry">
                <img src="<?php echo get_template_directory_uri(); ?>/images/sakura_1.webp" alt="" loading="lazy"
                     width="607" height="276.73">
            </div>

        </section>
        <!--/ITに特化-->
        <!--ホームページ制作-->
        <section class="Section__Odd" id="section03">
            <h2>ホームページ制作</h2>
            <div class="Section__Odd__Contents">
                <figure>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/3-min.webp" alt="ホームページを作るキツネ" loading="lazy" width="500"
                         height="388" class="fadeup">
                    <figcaption>※BeSmile（ビースマイル）十三駅前イラストチーム制作</figcaption>
                </figure>
                <div class="Section__Odd__Paragraph">
                    <p>発足したての部門で現在のところ特に実績はなく、案件もあまりありませんが、将来的にはバリバリ仕事をこなして立派な一部門としたいと考えております。<br>
                        仕様・方針を定めるディレクター、それを元にデザインを生み出すデザイナー、さらにそのデザインを元にHTML・CSSに起こしていくコーダー、3部門いずれもまだまだ未熟ですので、初心者でも互いに切磋琢磨できる環境です。<br>
                        もちろんチームを引っ張っていこう！という<strong class="marker-animation">スキルの高い人材も歓迎</strong>しております。<br>
                        ちなみに今ご覧になられているこのホームページもBeSmile十三駅前のホームページチームが作成したものです。
                    </p>
                </div>
            </div>
            <div class="Section__Odd--cherry">
                <?php if(wp_is_mobile()): ?><img src="<?php echo get_template_directory_uri(); ?>/images/sakura_1_w400.webp" alt="桜の枝" loading="lazy"
                                                 width="607" height="276.73">
                <?php else: ?>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/sakura_1.webp" alt="" loading="lazy"
                         width="607" height="276.73">
                <?php endif; ?>
            </div>
        </section>
        <!--/ホームページ制作-->
        <!--イラスト-->
        <section class="Section__Even" id="section04">
            <h2>ゲームイラスト制作</h2>
            <div class="Section__Even__Content">
                <div class="Section__Even__Paragraph">
                    <p>
                        主にゲーム制作で用いるイラスト制作を行います。
                        特にBeSmile十三駅前では週に一度、プロによる<strong class="marker-animation">イラスト講習会を開催</strong>しており、イラストのスキルアップを図れます。<br>
                        とはいえ現状かなりスキルの高いメンバーもそろっていて、以下でそのサンプル等ご覧になれます。<br>
                        <a href="https://begroup-create.biz/service/illustration/" target="_blank" rel="noopener"
                           class="blank">
                            <?php $today = date("m");
                            switch ($today) {
                                case "01":
                                case "12":
                                case "02":
                                    echo '<img src="https://13-sunplace-osaka.com/wp/wp-content/uploads/2021/04/illust_bana_winter-min.png" alt="イラストバナー" class="link_banner fadeup" width="300" height="99" loading="lazy">';
                                    break;
                                case "03":
                                case "04":
                                case "05":
                                    echo '<img src="https://13-sunplace-osaka.com/wp/wp-content/uploads/2021/04/illust_here2.png" alt="イラストバナー" class="link_banner fadeup" width="300" height="99" loading="lazy">';
                                    break;
                                case "06":
                                case "07":
                                case "08":
                                    echo '<img src="https://13-sunplace-osaka.com/wp/wp-content/uploads/2021/04/illust_bana_summer-min.png" alt="イラストバナー" class="link_banner fadeup" width="300" height="99" loading="lazy">';
                                    break;
                                case "09":
                                case "10":
                                case "11":
                                    echo '<img src="https://13-sunplace-osaka.com/wp/wp-content/uploads/2021/04/illust_bana_fall-min.png" alt="イラストバナー" class="link_banner fadeup" width="300" height="99" loading="lazy">';
                                    break;
                            }
                            ?>
                        </a><br>
                        <a href="<?php echo esc_url(home_url('/work_scenery/')); ?>">こちら</a>よりイラストチーム作業風景もご覧になれます。
                    </p>
                </div>
                <figure>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/4-min.webp" alt="イラストを書くキツネ" loading="lazy" width="500"
                         height="335" class="fadeup">
                    <figcaption>※BeSmile（ビースマイル）十三駅前イラストチーム制作</figcaption>
                </figure>
            </div>
            <div class="Section__Even--cherry">
                <?php if(wp_is_mobile()): ?><img src="<?php echo get_template_directory_uri(); ?>/images/sakura_1_w400.webp" alt="桜の枝" loading="lazy"
                                                 width="607" height="276.73">
                <?php else: ?>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/sakura_1.webp" alt="" loading="lazy"
                         width="607" height="276.73">
                <?php endif; ?>
            </div>
        </section>

        <!--/イラスト-->
        <!--プログラミング-->
        <section class="Section__Odd" id="section05">
            <h2>ゲームプログラミング</h2>
            <div class="Section__Odd__Contents">
                <figure>
                    <img class="pc_2 fadeup" src="<?php echo get_template_directory_uri(); ?>/images/5-min.webp" alt="プログラミングをしているキツネ" loading="lazy" width="500"
                         height="522">
                    <figcaption>※BeSmile（ビースマイル）十三駅前イラストチーム制作</figcaption>
                </figure>
                <div class="Section__Odd__Paragraph">
                    <p>プランナーの作成した仕様書を元に、Unityなどを使ってゲームの心臓部を作成していただきます。<br>
                        特にBeSmile十三駅前は<strong class="marker-animation">イラスト・サウンドメンバーと密に連携をとれる</strong>ので、あなたの作ったシステムにクオリティをもたらせられるというメリットがあります。<br>
                        とはいえ現状数名のプログラマーは在籍しているものの、まだ製品として販売した実績はない未熟な部門ではあるので、是非あなたのお力をお貸しください！</p>
                </div>
            </div>
            <div class="Section__Odd--cherry">
                <?php if(wp_is_mobile()): ?><img src="<?php echo get_template_directory_uri(); ?>/images/sakura_1_w400.webp" alt="桜の枝" loading="lazy"
                                                 width="607" height="276.73">
                <?php else: ?>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/sakura_1.webp" alt="" loading="lazy"
                         width="607" height="276.73">
                <?php endif; ?>
            </div>
        </section>
        <!--/プログラミング-->
        <!--サウンド-->
        <section class="Section__Even" id="section06">
            <h2>ゲームサウンド制作</h2>
            <div class="Section__Even__Content">
                <div class="Section__Even__Paragraph">
                    <p>主にゲーム制作で用いるサウンドや、BGM等の制作を行います。<br>BeSmile十三駅前では、FMCocoroでDJを8年間担当・CD13枚リリースという経歴を持つ音楽のプロ、<strong
                                class="marker-animation">フレディ・フローレス氏の監修</strong>を受けることができ、イラスト部門と同じくあなたのスキルアップに貢献できます。以下よりサンプル等お聞きできます。<br>
                        <a href="https://begroup-create.biz/service/sound/" target="_blank" rel="noopener"
                           class="blank">
                            <?php $today = date("m");
                            switch ($today) {
                                case "01":
                                case "12":
                                case "02":
                                    echo '<img src="https://13-sunplace-osaka.com/wp/wp-content/uploads/2021/04/sound_bana_winter-min.png" alt="サウンドバナー" class="link_banner fadeup" width="300" height="99" loading="lazy">';
                                    break;
                                case "03":
                                case "04":
                                case "05":
                                    echo '<img src="https://13-sunplace-osaka.com/wp/wp-content/uploads/2021/04/sound_here-min.png" alt="サウンドバナー" class="link_banner fadeup" width="300" height="99" loading="lazy">';
                                    break;
                                case "06":
                                case "07":
                                case "08":
                                    echo '<img src="https://13-sunplace-osaka.com/wp/wp-content/uploads/2021/04/sound_bana_summer-min.png" alt="サウンドバナー" class="link_banner fadeup" width="300" height="99" loading="lazy">';
                                    break;
                                case "09":
                                case "10":
                                case "11":
                                    echo '<img src="https://13-sunplace-osaka.com/wp/wp-content/uploads/2021/04/sound_bana_fall-min.png" alt="サウンドバナー" class="link_banner fadeup" width="300" height="99" loading="lazy">';
                                    break;
                            }
                            ?>
                        </a>
                    </p>

                </div>
                <figure>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/6-min.webp" alt="笛を吹くキツネ" loading="lazy" width="500"
                         height="518" class="fadeup">
                    <figcaption>※BeSmile（ビースマイル）十三駅前イラストチーム制作</figcaption>
                </figure>
            </div>
            <div class="Section__Even--cherry">
                <?php if(wp_is_mobile()): ?><img src="<?php echo get_template_directory_uri(); ?>/images/sakura_1_w400.webp" alt="桜の枝" loading="lazy"
                                                 width="607" height="276.73">
                <?php else: ?>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/sakura_1.webp" alt="" loading="lazy"
                         width="607" height="276.73">
                <?php endif; ?>
            </div>
        </section>
        <!--/サウンド-->
        <!--施設外就労-->
        <section class="Section__Odd" id="section07">
            <h2>施設外就労</h2>
            <div class="Section__Odd__Contents">
                <figure>
                    <img class="pc_2 fadeup" src="<?php echo get_template_directory_uri(); ?>/images/7-min-1.webp" alt="掃除をしているキツネ" loading="lazy" width="500"
                         height="542">
                    <figcaption>※BeSmile（ビースマイル）十三駅前イラストチーム制作</figcaption>
                </figure>
                <div class="Section__Odd__Paragraph">
                    <p>IT事業に特化したBeSmile十三駅前ですが、実は普段いるオフィスを離れて<strong class="marker-animation">施設外就労</strong>というものもしておりまして、<br>
                        具体的にはシェアハウスや特養ホームに赴いて、フロアやトイレの<strong
                                class="marker-animation">清掃、ベッドメイキングから洗濯</strong>までこなします。<br>
                        なのでIT系はちょっと苦手…だとか、パソコンに向かうの疲れた…とかいったような方は希望があればこちらの業務についていただくことも可能です。<br>
                        <a href="https://13-sunplace-osaka.com/outside_gallery/">こちら</a>より作業風景ご覧になれます。
                    </p>
                </div>
            </div>
            <div class="Section__Odd--cherry">
                <?php if(wp_is_mobile()): ?><img src="<?php echo get_template_directory_uri(); ?>/images/sakura_1_w400.webp" alt="桜の枝" loading="lazy"
                                                 width="607" height="276.73">
                <?php else: ?>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/sakura_1.webp" alt="" loading="lazy"
                         width="607" height="276.73">
                <?php endif; ?>
            </div>
        </section>
        <!--施設外就労-->
        <section class="Section__Even" id="contact">
            <h2>お電話でのお問い合わせ</h2>
            <p class=tel_contact>お電話でのお問い合わせは、下記電話番号にて承ります。お気軽にご連絡ください。<br>
                <strong><a href="tel:0667709011">TEL 06-6770-9011</a></strong>（平日10:00～18:00)</p>
            <h2>メールでのお問い合わせ</h2>
            <div class="Section__Odd__Contents">
                <?php $post = get_post(47);//表示したい固定ページのページID
                echo apply_filters('the_content', $post->post_content); //固定ページの内容
                ?>
            </div>
        </section>
        <aside class="Section__Odd" id="section_tips">
            <h2>Be Smile TIPS<img src="<?php $upload_dir = wp_upload_dir();
                echo $upload_dir['baseurl']; ?>/2021/04/coffee-solid.svg" alt="コーヒーアイコン" width="15" height="15"
                                  loading="lazy" class="fuwafuwa"></h2>
            <?php
            //子孫のページを取得するための親固定ページのID
            $args = ['child_of' => 109];

            //固定ページを取得する
            $pages = get_pages($args);

            //固定ページID格納用の配列を宣言
            $page_ids = array();

            //子ページがあり配列で取得出来ていれば処理開始
            if (is_array($pages) && count($pages)) {

                foreach ($pages as $page) {
                    //固定ページIDのみ配列に追加
                    $page_ids[] = $page->ID;
                }
            }

            //親固定ページIDを配列に追加
            $tips_ids = array_rand($page_ids, 1);
            $page_id = $page_ids[$tips_ids];
            $post = get_post($page_id);//表示したい固定ページのページID
            echo '<h3>' . apply_filters('the_title', $post->post_title) . '</h3>';
            echo apply_filters('the_content', $post->post_content); //固定ページの内容
            ?>
        </aside>
    </main>
<?php get_footer(); ?>