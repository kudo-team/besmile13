<!doctype html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Sunplace Cafe</title>
	<style>
        *{
            box-sizing: border-box;
        }
		body{
			background-color: #494544;
			margin:0;
			padding:0;
            font-family: "メイリオ", "Hiragino Kaku Gothic Pro", "ヒラギノ角ゴ Pro", "Yu Gothic Medium", "游ゴシック Medium", YuGothic, "游ゴシック体", sans-serif;
			color: #BAC8C6;
		}
		#mv{
			width: 100%;
			height: 100vh;
			display: flex;
			align-items: center;
			position: relative;
		}
		#mv_center{
			width:100%;
			height: calc(2 * (100% / 3));
			display: flex;
		}
		#mv_text{
			height: 100%;
			width:calc(1 * (100% / 3));
		}
		.flex_column{
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
		}
		#title{
			text-align: center;
			color:#BAC8C6;
			width:fit-content;
			width: -moz-fit-content;
            font-size: 65px;
            margin: 0;
		}
		#title_under{
            width: 71%;
            height: 16px;
			margin: 50px auto;
			background-color: #C41A30;
			display: block;
		}
        #mv_image{
            height: 100%;
            width:calc(2 * (100% / 3));
	        background-image: url("https://13-sunplace-osaka.com/wp/wp-content/uploads/2021/06/4510016_m.jpg");
	        background-size: cover;
	        background-position: left center;
        }
        #meta_data{
	        width: fit-content;
	        width: -moz-fit-content;
	        margin:0 auto;
	        padding: 0;
            list-style:none;
        }
        .meta_list{
	        position: relative;
	        width:100%;
	        font-size: 14px;
	        padding-left: 35px;
	        line-height: 27px;
	        margin-bottom: 10px;
        }
        .meta_list::before{
	        position: absolute;
	        display: block;
	        left:0;
	        top:0;
        }
        #address::before{
            content: url("https://13-sunplace-osaka.com/wp/wp-content/uploads/2021/06/address.png");
        }
        #phone_number::before{
            content: url("https://13-sunplace-osaka.com/wp/wp-content/uploads/2021/06/phone.png");
        }
        .band{
            width: 120px;
            height: 300px;
            background-color: #BAC8C6;
            color: #494544;
            writing-mode: vertical-rl;
            font-weight: bold;
            display: flex;
            align-items: flex-end;
            position: absolute;
            top:0;
            right:10%;
            font-size: 32px;
            line-height: 1.1;
        }
        .band.umai{
            animation: uekara 0.6s;
        }
        @keyframes uekara {
            from{
                transform: translateY(-100%);
            }
            to{
                transform: translateY(0%);
            }
        }
        .band.coffee{
            top:unset;
            right: unset;
            left: 65px;
            bottom:0px;
            z-index: 6;
        }
        .band.yoko{
            transform: rotate(
                    -90deg
            );
            transform-origin: right bottom;
            top: -330px;
            right: 0;
            font-size: 40px;
        }
        .trans_band{
            width: 120px;
            height: 300px;
            border: 2px solid #BAC8C6;
            position: absolute;
            bottom: calc((100% / 6) - 94px);
            left: 40%;
            color: #BAC8C6;
            font-weight: bold;
            text-align: center;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 23px;
            padding-top: 117px;
            line-height: 1.3;
            animation: sitakara 0.9s;
        }
        @keyframes sitakara {
            from {
                transform: translateY(100%);
            }
            to{
                transform: translateY(0%);
            }
        }
        .shimashima{
            border: 0;
            width: 90%;
            margin:-2.5px auto 0;
            height: 5px;
            background-image: repeating-linear-gradient(135deg, #C41A30, #C41A30 2px, transparent 2px, transparent 4px);
        }
        #recommend{
            width:100%;
            position: relative;
            padding-bottom: 80px;
        }
        .sec_title{
            font-size:34px;
            color: #BAC8C6;
            position: relative;
            text-align: center;
            width: fit-content;
            width: -moz-fit-content;
            margin:78px auto;
            line-height: 1;
        }
        .english{
            font-size: 17px;
        }
        .sec_title::before,.sec_title::after{
            content: '';
            display: block;
            position: absolute;
            width:12px;
            height: 12px;
            border: 1px solid #C41A30;
            transform: rotate(45deg);
            top:9px;
        }
        .sec_title::before{
            left:-27px;
        }
        .sec_title::after{
            right:-27px;
        }
        .three_items{
            margin:0 auto;
            padding: 0;
            list-style: none;
            display: flex;
            justify-content: space-around;
            width:100%;
            max-width: 1140px;
        }
        .three_items > li{
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            width:300px;
        }
        .three_items > li:nth-child(2n){
            flex-direction: column-reverse;
        }
        .recommend_fig{
            width:100%;
            height: fit-content;
            position: relative;
        }
        .recommend_fig::before{
            content:'';
            display: block;
            width:100%;
            height: 100%;
            border: 1px solid #C41A30;
            position: absolute;
            top: 15px;
            left:15px;
            z-index: 4;
        }
        .recommend_img {
            width: 100%;
            height: auto;
            position: relative;
            z-index: 5;
        }
        .recommend_text{
            width:100%;
        }
        .recommend_text > h3{
            margin: 30px 0 10px;
        }
        .recommend_p{
            width:100%;
            font-size: 14px;
        }
        .yen{
            color: #C41A30;
            margin: 0 4px 0 0;
        }
        #coffee{
            width:100%;
            padding-bottom: 80px;
        }
        .coffee_fig{
            width:95%;
            max-width: 1140px;
            margin: 0 auto;
            position: relative;
        }
        .coffee_fig::before{
            content:'';
            display: block;
            width:100%;
            height: 500px;
            border: 1px solid #C41A30;
            position: absolute;
            top: 15px;
            left:15px;
            z-index: 4;
        }
        .coffee_fig > img{
            width:100%;
            height: 500px;
            object-fit: cover;
            position: relative;
            z-index: 5;
        }
        .coffee_fig > figcaption{
            width: calc(100% - 250px);
            margin-left: 250px;
            margin-top: 54px;
            font-size: 14px;
        }
        #map_text{
            display: flex;
            width:95%;
            max-width: 1140px;
            margin:0 auto;
        }
        #map_text > iframe{
            width:calc(100% - 300px)
        }
        #text_logo{
            width:300px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-direction: column;
        }
        #text_logo > p{
            width: fit-content;
            width: -moz-fit-content;
            position: relative;
        }
        #text_logo > p::before{
            content: url("https://13-sunplace-osaka.com/wp/wp-content/uploads/2021/06/マスクグループ-8.png");
            display: block;
            position: absolute;
            top:50%;
            left: -40px;
            transform: translateY(-50%);
        }
        .logo_fig{
            display: flex;
            align-items: center;
            flex-direction: column-reverse;
            border-bottom: 5px solid #C41A30;
        }
        .logo_fig figcaption{
            font-weight: bold;
        }
        .logo_fig > img{
            margin:20px 0;
        }
        #access{
            padding-bottom: 80px;
        }
        #copy_right{
            text-align: center;
            font-size: 11px;
        }
        .pc{
            display: block;
        }
        .pc_flex{
            display: flex;
        }
        body{
            position: relative;
        }
        #menu{
            position: fixed;
            top: 0;
            left:0;
            width:375px;
            height: 100vh;
            z-index: 10;
            background-color: #000000aa;
            display: flex;
            flex-direction: column;
            transform: translateX(-100%);
            transition: 0.3s;
        }
        #menu > ul{
            margin: 60px;
            padding:0;
            list-style: none;
            display: flex;
            flex-direction: column;
        }
        #hamburger{
            display: block;
            width:30px;
            height: 5px;
            background-color: #BAC8C6;
            position: relative;
            transition: 0.3s;
            border-radius: 3px;
        }
        #hamburger::before,#hamburger::after{
            display: block;
            width:30px;
            height: 5px;
            background-color: #BAC8C6;
            position: absolute;
            left:0;
            z-index: 13;
            content:'';
            transition: 0.3s;
            border-radius: 3px;
        }
        #hamburger::before{
            top:-10px;
            transform-origin: right top;
        }
        #hamburger::after{
            top:10px;
            transform-origin: right bottom;
        }
        #menu_label{
            width:40px;
            height: 40px;
            position: fixed;
            top:5px;
            left:5px;
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 13;
            cursor: pointer;
        }
        #menu_check{
            display: none;
        }
        #menu_check:checked ~ #menu{
            transform: translateX(0%);
        }
        #menu_check:checked ~ #menu_label > #hamburger{
            background-color: transparent;
        }
        #menu_check:checked ~ #menu_label > #hamburger::after{

            transform: rotate(
                    45deg
            );
        }
        #menu_check:checked ~ #menu_label > #hamburger::before{

            transform: rotate(
                    -45deg
            );
        }
        a,a:visited,a:focus,a:hover{
            color:#BAC8C6;
        }
        a:hover{
            opacity: 0.7;
        }
        html{
            scroll-behavior: smooth;
        }
        @media screen and (max-width: 768px){
            #mv{
                align-items: flex-start;
                height: auto;
                padding-bottom: 80px;
            }
            #mv_center{
                flex-direction: column;
                align-items: center;
                height: auto;
            }
            #mv_image{
                height: 400px;
                width:100%;
            }
            #mv_text{
                width: 100%;
            }
            .trans_band{
                width: 76px;
                height: 182px;
                bottom: 40px;
                left: 40px;
                font-size: 14px;
                padding-top: 104px;
            }
            .pc{
                display: none;
            }
            .pc_flex{
                display: none;
            }
            .band{
                width: 76px;
                height: 182px;
            }
            .band.yoko{
                font-size: 30px;
            }
            #title{
                font-size: 60px;
                margin-top: 38px;
            }
            #title_under{
                margin: 0 0 15px 0;
            }
            .sec_title{
                margin: 50px auto;
                font-size: 23px;
            }
            .three_items{
                flex-direction: column;
                align-items: center;
            }
            .three_items > li:nth-child(2n){
                flex-direction: column;
            }
            .coffee_fig{
                width: 88%;
            }
            .coffee_fig > figcaption{
                width: calc(100% - 134px);
                margin-left: 134px;
                margin-top: 25px;
            }
            .band.coffee{
                height: 340px;
                bottom: 0;
                left: 39px;
            }
            #map_text{
                flex-direction: column;
                align-items: center;
            }
            #map_text > iframe{
                width:100%;
            }
            #access {
                padding-bottom: 10px;
            }
            body{
                width:100%;
                overflow-x: hidden;
            }
            #menu_label{
                left:50%;
                transform: translateX(-50%);
            }
        }
	</style>
</head>
<body>
    <input type="checkbox" id="menu_check">
    <label for="menu_check" id="menu_label">
        <span id="hamburger"></span>
    </label>
    <nav id="menu">
        <ul>
            <li><a href="#recommend">おすすめ３種</a></li>
            <li><a href="#coffee">当店のスペシャルコーヒー</a></li>
            <li><a href="#access">アクセス</a></li>
        </ul>
    </nav>
	<section id="mv">
		<main id="mv_center">
			<div id="mv_text" class="flex_column">
				<h1 id="title" class="flex_column">
					Sunplace<br>Cafe
					<span id="title_under"></span>
				</h1>
				<ul id="meta_data">
					<li id="address" class="meta_list">大阪府大阪市淀川区十三東3-18-12</li>
					<li id="phone_number" class="meta_list">06-6770-9011</li>
				</ul>
			</div>
			<div id="mv_image"></div>
		</main>
        <div class="band pc_flex umai">Umai Hayai Yasui</div>
        <div class="trans_band">とろける<br>おいしさ</div>
	</section>
    <hr class="shimashima">
    <section id="recommend">
        <h2 class="sec_title">おすすめ３種<br><span class="english">-Recommend-</span></h2>
        <ul class="three_items">
            <li>
                <figure class="recommend_fig">
                    <img src="https://13-sunplace-osaka.com/wp/wp-content/uploads/2021/06/196501_s.jpg" width="300" height="300" loading="lazy" alt="Recommend1" class="recommend_img">
                </figure>
                <div class="recommend_text">
                    <h3><span class="yen">￥</span>490</h3>
                    <p class="recommend_p">穀物の粉を混ぜて作る液状の生地を、パン（鍋）またはそれに類する平坦な調理器具を用いて調理する平焼きの食品に対する総称。 一般的には、小麦粉、鶏卵、砂糖、膨らし粉などを用いて作る、日本語でホットケーキと呼ばれるものを指す場合が多いが、ホットケーキより甘くなく、主食として用いられることもある。</p>
                </div>
            </li>
            <li>
                <figure class="recommend_fig">
                    <img src="https://13-sunplace-osaka.com/wp/wp-content/uploads/2021/06/196501_s.jpg" width="300" height="300" loading="lazy" alt="Recommend1" class="recommend_img">
                </figure>
                <div class="recommend_text">
                    <h3><span class="yen">￥</span>490</h3>
                    <p class="recommend_p">穀物の粉を混ぜて作る液状の生地を、パン（鍋）またはそれに類する平坦な調理器具を用いて調理する平焼きの食品に対する総称。 一般的には、小麦粉、鶏卵、砂糖、膨らし粉などを用いて作る、日本語でホットケーキと呼ばれるものを指す場合が多いが、ホットケーキより甘くなく、主食として用いられることもある。</p>
                </div>
            </li>
            <li>
                <figure class="recommend_fig">
                    <img src="https://13-sunplace-osaka.com/wp/wp-content/uploads/2021/06/196501_s.jpg" width="300" height="300" loading="lazy" alt="Recommend1" class="recommend_img">
                </figure>
                <div class="recommend_text">
                    <h3><span class="yen">￥</span>490</h3>
                    <p class="recommend_p">穀物の粉を混ぜて作る液状の生地を、パン（鍋）またはそれに類する平坦な調理器具を用いて調理する平焼きの食品に対する総称。 一般的には、小麦粉、鶏卵、砂糖、膨らし粉などを用いて作る、日本語でホットケーキと呼ばれるものを指す場合が多いが、ホットケーキより甘くなく、主食として用いられることもある。</p>
                </div>
            </li>
        </ul>
        <div class="band yoko pc_flex">Eat this !!</div>
    </section>
    <hr class="shimashima">
    <section id="coffee">
        <h2 class="sec_title">当店のスペシャルコーヒー<br><span class="english">-Special Coffee-</span></h2>
        <figure class="coffee_fig">
            <img src="https://13-sunplace-osaka.com/wp/wp-content/uploads/2021/06/1856172_m.jpg" width="1920" height="1280" loading="lazy" alt="coffee">
            <figcaption>グアテマラはメキシコの南にある中米の国で、火山、熱帯雨林、古代マヤ文明の遺跡で知られています。首都のグアテマラ市には、風格のある国立宮殿や国立考古学民族博物館があります。首都の西側にあるアンティグアには、スペイン植民地時代の建物が当時の姿で残っています。火山の大きな噴火口にあるアティトラン湖の周囲には、コーヒー園や村落があります。</figcaption>
            <div class="band coffee">From Guatemala</div>
        </figure>
    </section>
    <hr class="shimashima">
    <section id="access">
        <h2 class="sec_title">アクセス<br><span class="english">-Access-</span></h2>
        <div id="map_text">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13117.386664736156!2d135.4846047!3d34.7216552!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xdd90ef86a6b83967!2zQmUgU21pbGUg5Y2B5LiJ6aeF5YmN!5e0!3m2!1sja!2sjp!4v1623733244284!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            <div id="text_logo">
                <p>阪急電鉄<br>神戸線・宝塚線・京都線<br>十三駅から徒歩6分</p>
                <figure class="logo_fig">
                    <img src="https://13-sunplace-osaka.com/wp/wp-content/uploads/2021/06/utensils-solid-1.png" alt="sunplace cafe" width="148" height="182" loading="lazy">
                    <figcaption>Sunplace Cafe</figcaption>
                </figure>
            </div>
        </div>
    </section>
<p id="copy_right">©Sunplace Cafe</p>
</body>
</html>