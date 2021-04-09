<?php get_header(); ?>
<main>
    <section class="Cherry__Menu">
        <nav id="hanabira">
            <div class="img_fit_div">
                <img src="<?php echo get_template_directory_uri(); ?>/images/wood-min.png" id="main_image" alt="桜" loading="lazy" width="754.8" height="762">
                <a href="https://sunplace-osaka.com/" id="sun"><img src="https://13-sunplace-osaka.com/wp/wp-content/uploads/2021/04/sun_200-min.png" alt="太陽" width="100" height="99.41" loading="lazy"></a>
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
                <a href="https://sunplace-osaka.com/">一般社団法人<br>サンプレイス</a>
            </li>
            <li>
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>pdf/bbq.pdf">令和二年度<br>地域連携報告</a>
            </li>
            <li>
                <a href="<?php echo esc_url( home_url( '/jobrequest/' ) ); ?>">お仕事のご依頼<br>はこちら</a>
            </li>
        </ul>
    </section>
    <section class="Section__Odd" id="section_tips">
        <h2>Today's TIPS<img src="https://13-sunplace-osaka.com/wp/wp-content/uploads/2021/04/coffee-solid.svg" alt="コーヒーアイコン" width="15" height="15" loading="lazy"></h2>
        <?php 
        //子孫のページを取得するための親固定ページのID
        $args     = ['child_of' => 109 ];
        
        //固定ページを取得する
        $pages    = get_pages($args);
        
        //固定ページID格納用の配列を宣言
        $page_ids = array();
        
        //子ページがあり配列で取得出来ていれば処理開始
        if ( is_array($pages) && count($pages) ) {
        
            foreach ($pages as $page) {
                //固定ページIDのみ配列に追加
                $page_ids[]= $page->ID;
            }
        }
            
        //親固定ページIDを配列に追加
        $tips_ids = array_rand($page_ids,1);
        $page_id =  $page_ids[$tips_ids];
        $post = get_post( $page_id );//表示したい固定ページのページID
        echo '<h3>'.apply_filters('the_title', $post->post_title).'</h3>';
        echo apply_filters('the_content', $post->post_content); //固定ページの内容
        ?>
    </section>
    <section id="blog">
    <?php if (have_posts()): ?>
        <div class="wrap_articles">
        <?php while (have_posts()) : the_post(); ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <a href="<?php the_permalink(); ?>">
                    <?php if( has_post_thumbnail() ): ?>
                        <?php the_post_thumbnail( 'large' ); ?>
                    <?php else: ?>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/noimage-min.png" alt="no-image">
                    <?php endif; ?>
                </a>
                <div class="blog_text_area">
                    <a href="<?php the_permalink(); ?>">
                        <h2><?php echo get_the_title(); ?></h2>
                    </a>
                    <time datetime="<?php the_time('Y-m-d'); ?>"><?php echo get_the_date(); ?></time>
                    <a href="<?php the_permalink(); ?>" class="color444">
                        <?php the_excerpt(); ?>
                    </a>
                </div>
            </article>
        <?php endwhile; ?>
        </div>
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>archive/" class="archive_link">記事一覧</a>
    <?php else: ?>
    <p>ブログ記事はまだありません。</p>
    <?php endif; ?>
    </section>
    <!--A型事業所とは-->
    <section class="Section__Odd" id="section01">
        <h2>就労継続支援A型とは？</h2>
        <div class="Section__Odd__Contents">
            <figure>
                <img src="<?php echo get_template_directory_uri(); ?>/images/a_news.png" alt="ニュースを読むうさぎ" loading="lazy" width="327.77" height="372.92">
                <figcaption>※BeSmile（ビースマイル）イラストチーム制作</figcaption>
            </figure>
            <div class="Section__Odd__Paragraph">
                <p>就労継続支援A型とは、主に心身に障害をお持ちの方に対して、将来的な一般就労を目標とした自立を支援するために<strong class="marker-animation">就労の場を提供する</strong>福祉サービスのことです。<br>
                    そこには、そのサービスを利用する「利用者」と利用者を支える「支援員」がいて、利用者は支援員の手厚いサポートを受けながら、一方でしっかりと雇用契約を結び、”就労”をしていただきます。つまり、仕事をする意欲はあるものの、まだ一般就労は気が引けるという方に対して最適なサービスとなっております。<br>
                    中には営利目的で本サービスを行っている事業所もある中、弊所、BeSmile十三駅前は福祉の意識が高く、<strong class="marker-animation">サポートが充実している</strong>と自負しております。是非一度ご見学に来ていただいて、その雰囲気を肌で感じてみてくださいね。
                </p>
            </div>
        </div>
        <div class="Section__Odd--cherry">
            <img src="<?php echo get_template_directory_uri(); ?>/images/sakura_1.png" alt="" loading="lazy" width="607" height="276.73">
        </div>
    </section>
    <!--/A型事業所とは-->

    <!--ITに特化-->
    <section class="Section__Even" id="section02">
        <h2>ITに特化した事業所</h2>
        <div class="Section__Even__Content">
            <div class="Section__Even__Paragraph">
                <p>様々なA型事業所がある中、BeSmile十三駅前の特色として、IT事業に特化しているというところがあります。
                    例えばゲームプログラミング、ゲームイラスト制作、ゲームサウンド制作、ホームページ制作等、あなたの<strong class="marker-animation">ITスキルを存分に発揮できる</strong>環境がBeSmile十三駅前にはあります。<br>
                    世間には軽作業等をメインに行っている事業所が多い中、イマドキなBeSmile十三駅前にご興味ございませんか？<br>
                    ちなみに案件がないときは軽作業・清掃等の業務も一部行っているため、ちょっとそっちで息抜きなんていうこともできます。
                </p>
            </div>
            <figure>
                <img src="<?php echo get_template_directory_uri(); ?>/images/sound.png" alt="指揮棒を振るうさぎ" loading="lazy" width="412" height="512">
                <figcaption>※BeSmile（ビースマイル）イラストチーム制作</figcaption>
            </figure>
        </div>
        <div class="Section__Even--cherry">
            <img src="<?php echo get_template_directory_uri(); ?>/images/sakura_2.png" alt="" loading="lazy" width="607" height="276.73">
        </div>

    </section>
    <!--/ITに特化-->
    <!--ホームページ制作-->
    <section class="Section__Odd" id="section03">
        <h2>ホームページ制作</h2>
        <div class="Section__Odd__Contents">
            <figure>
                <img src="<?php echo get_template_directory_uri(); ?>/images/pc.png" alt="ホームページを作るうさぎ" loading="lazy">
                <figcaption>※BeSmile（ビースマイル）イラストチーム制作</figcaption>
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
            <img src="<?php echo get_template_directory_uri(); ?>/images/sakura_1.png" alt="桜の枝の装飾" loading="lazy">
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
                    <a href="https://begroup-create.biz/service/illustration/" target="_blank" rel="noopener" class="blank">https://begroup-create.biz/service/illustration/<img src="https://13-sunplace-osaka.com/wp/wp-content/uploads/2021/04/link_icon.svg" alt="リンクアイコン" class="link_icon"></a></p>
            </div>
            <figure>
                <img src="<?php echo get_template_directory_uri(); ?>/images/illust.png" alt="イラストを書くうさぎ" loading="lazy">
                <figcaption>※BeSmile（ビースマイル）十三駅前イラストチーム制作</figcaption>
            </figure>
        </div>
        <div class="Section__Even--cherry">
            <img src="<?php echo get_template_directory_uri(); ?>/images/sakura_2.png" alt="桜の枝の装飾" loading="lazy">
        </div>
    </section>

    <!--/イラスト-->
    <!--プログラミング-->
    <section class="Section__Odd" id="section05">
        <h2>ゲームプログラミング</h2>
        <div class="Section__Odd__Contents">
            <figure>
                <img class="pc_2" src="<?php echo get_template_directory_uri(); ?>/images/pirograming.png" alt="プログラミングをしているうさぎ" loading="lazy">
                <figcaption>※BeSmile（ビースマイル）十三駅前プログラミング制作</figcaption>
            </figure>
            <div class="Section__Odd__Paragraph">
                <p>プランナーの作成した仕様書を元に、Unityなどを使ってゲームの心臓部を作成していただきます。<br>
                    特にBeSmile十三駅前は<strong class="marker-animation">イラスト・サウンドメンバーと密に連携をとれる</strong>ので、あなたの作ったシステムにクオリティをもたらせられるというメリットがあります。<br>
                    とはいえ現状数名のプログラマーは在籍しているものの、まだ製品として販売した実績はない未熟な部門ではあるので、是非あなたのお力をお貸しください！</p>
            </div>
        </div>
        <div class="Section__Odd--cherry">
            <img src="<?php echo get_template_directory_uri(); ?>/images/sakura_1.png" alt="" loading="lazy">
        </div>
    </section>
    <!--/プログラミング-->
    <!--サウンド-->
    <section class="Section__Even" id="section06">
        <h2>ゲームサウンド制作</h2>
        <div class="Section__Even__Content">
            <div class="Section__Even__Paragraph">
                <p>主にゲーム制作で用いるサウンドや、BGM等の制作を行います。<br>BeSmile十三駅前では、FMCocoroでDJを8年間担当・CD13枚リリースという経歴を持つ音楽のプロ、<strong class="marker-animation">フレディ・フローレス氏の監修</strong>を受けることができ、イラスト部門と同じくあなたのスキルアップに貢献できます。以下よりサンプル等お聞きできます。<br>
                    <a href="https://begroup-create.biz/service/sound/" target="_blank" rel="noopener" class="blank">https://begroup-create.biz/service/sound/<img src="https://13-sunplace-osaka.com/wp/wp-content/uploads/2021/04/link_icon.svg" alt="リンクアイコン" class="link_icon"></a>
                </p>

            </div>
            <figure>
                <img src="<?php echo get_template_directory_uri(); ?>/images/guiter.png" alt="ギターを引くうさぎ" loading="lazy">
                <figcaption>※BeSmile（ビースマイル）十三駅前ゲームサウンド制作</figcaption>
            </figure>
        </div>
        <div class="Section__Even--cherry">
            <img src="<?php echo get_template_directory_uri(); ?>/images/sakura_2.png" alt="" loading="lazy">
        </div>        
    </section>
    <!--/サウンド-->
    <!--施設外就労-->
    <section class="Section__Odd" id="section07">
        <h2>施設外就労</h2>
        <div class="Section__Odd__Contents">
            <figure>
                <img class="pc_2" src="https://13-sunplace-osaka.com/wp/wp-content/uploads/2021/04/shisetsugai.png" alt="掃除をしているうさぎ" loading="lazy">
                <figcaption>※BeSmile（ビースマイル）十三駅前イラストチーム制作</figcaption>
            </figure>
            <div class="Section__Odd__Paragraph">
                <p>IT事業に特化したBeSmile十三駅前ですが、実は普段いるオフィスを離れて<strong class="marker-animation">施設外就労</strong>というものもしておりまして、<br>
具体的にはシェアハウスや特養ホームに赴いて、フロアやトイレの<strong class="marker-animation">清掃、ベッドメイキングから洗濯</strong>までこなします。<br>
なのでIT系はちょっと苦手…だとか、パソコンに向かうの疲れた…とかいったような方は希望があればこちらの業務についていただくことも可能です。</p>
            </div>
        </div>
        <div class="Section__Odd--cherry">
            <img src="<?php echo get_template_directory_uri(); ?>/images/sakura_1.png" alt="" loading="lazy">
        </div>
    </section>
    <!--施設外就労-->
    <section class="Section__Even" id="contact">
        <h2>お問い合わせ</h2>
        <div class="Section__Odd__Contents">
            <?php $post = get_post( 47 );//表示したい固定ページのページID
            echo apply_filters('the_content', $post->post_content); //固定ページの内容
            ?>
        </div>
    </section>
</main>
<?php get_footer(); ?>