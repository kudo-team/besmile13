<?php 
function add_file_types_to_uploads($file_types){
 
    $new_filetypes = array();
    $new_filetypes['svg'] = 'image/svg+xml';
    $file_types = array_merge($file_types, $new_filetypes );
 
    return $file_types;
}
add_action('upload_mimes', 'add_file_types_to_uploads');
 
// アイキャッチ画像を有効にする。
add_theme_support('post-thumbnails');

function twpp_change_excerpt_length( $length ) {
	$length = 50;
	if ( !is_front_page() ) {
		$length = 150;
	}
	return $length;
}
add_filter( 'excerpt_length', 'twpp_change_excerpt_length', 999 );

//jquery削除
//function my_delete_local_jquery() {
//    wp_deregister_script('jquery');
//}
//add_action( 'wp_enqueue_scripts', 'my_delete_local_jquery' );

// webp許可
function custom_mime_types( $mimes ) {
    $mimes['webp'] = 'image/webp';
    return $mimes;
}
add_filter( 'upload_mimes', 'custom_mime_types' );


function pagenation($pages = '', $range = 2){
	$showitems = ($range * 1)+1;
	global $paged;
	if(empty($paged)) $paged = 1;
	if($pages == ''){
		global $wp_query;
		$pages = $wp_query->max_num_pages;
		if(!$pages){
			$pages = 1;
		}
	}
	if(1 != $pages){
		// 画像を使う時用に、テーマのパスを取得
		$img_pass = get_template_directory_uri();
		echo "<div class=\"m-pagenation\">";
		// 「1/2」表示 現在のページ数 / 総ページ数
		// echo "<div class=\"m-pagenation__result\">". $paged."/". $pages."</div>";
		// 「前へ」を表示
		// if($paged > 1) echo "<div class=\"m-pagenation__prev\"><a href='".get_pagenum_link($paged - 1)."'>前へ</a></div>";
		// ページ番号を出力
		echo "<ol class=\"m-pagenation__body\">\n";
		for ($i=1; $i <= $pages; $i++){
			if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems )){
				echo ($paged == $i)? "<li class=\"-current\">".$i."</li>": // 現在のページの数字はリンク無し
					"<li><a href='".get_pagenum_link($i)."'>".$i."</a></li>";
			}
		}
		// [...] 表示
		// if(($paged + 4 ) < $pages){
		//     echo "<li class=\"notNumbering\">...</li>";
		//     echo "<li><a href='".get_pagenum_link($pages)."'>".$pages."</a></li>";
		// }
		echo "</ol>\n";
		// 「次へ」を表示
		// if($paged < $pages) echo "<div class=\"m-pagenation__next\"><a href='".get_pagenum_link($paged + 1)."'>次へ</a></div>";
		echo "</div>\n";
	}
}

//// deferの付与
//add_filter('script_loader_tag', 'add_defer', 10, 2);
//
//function add_defer($tag, $handle) {
//	return str_replace(' src=', ' defer src=', $tag);
//}

function is_ios()
{
    $user_agent = $_SERVER['HTTP_USER_AGENT']; // HTTP ヘッダからユーザー エージェントの文字列を取り出す

    return preg_match('/iphone|ipod|ipad/ui', $user_agent) != 0; // 既知の判定用文字列を検索
}

function custom_enqueue_scripts(){
	if(!is_admin()){ //管理画面以外
		wp_enqueue_script('jquery');
		remove_action('wp_head', 'wp_print_scripts');
		remove_action('wp_head', 'wp_print_head_scripts', 9);
		remove_action('wp_head', 'wp_enqueue_scripts', 1);
		add_action('wp_footer', 'wp_print_scripts');
		add_action('wp_footer', 'wp_print_head_scripts');
		add_action('wp_footer', 'wp_enqueue_scripts');
	}
}
add_action('wp_enqueue_scripts', 'custom_enqueue_scripts');

/**
 * Summary
 *  見出しに id を自動挿入
 *
 * @param string $the_content 記事の本文.
 **/
function add_auto_id( $the_content ) {

	/* idを付加する見出しレベルを設定 */
	$start = 2;
	$end   = 6;

	/* 見出しのパターンを作成 */
	$pattern = '/^<h([' . $start . '-' . $end . ']).*?>.+?<\/h[' . $start . '-' . $end . ']>$/im';

	/*
		$headingsにページ内の見出し要素を格納
		$headings[0]：マッチした文字列
		$headings[1]：見出しレベル（h3なら"3"）
	*/
	if ( ! preg_match_all( $pattern, $the_content, $headings ) ) {
		/* 見出しがない場合は終了 */
		return $the_content;
	}

	/* idが設定されているかどうかを判断するためのパターン */
	$id_pattern = '/^<h([' . $start . '-' . $end . ']).+?id\s*=\s*\"(.+?)\".*>(.+?)<\/h[' . $start . '-' . $end . ']>$/im';

	/* 見出しごとにidが設定されていない見出しにidを付加 */
	$num_count = count( $headings[0] );
	for ( $i = 0; $i < $num_count; $i++ ) {

		/* 見出しにidが設定されているかどうかの判断. 見出しにidが設定されている場合のみマッチ */
		if ( ! preg_match( $id_pattern, $headings[0][ $i ], $dummy ) ) {

			/* idが設定されていない見出しの場合に行う処理. idを付加した文字列（<hX id=autoid-Y）を作成 */
			$id_str = '<h' . $headings[1][ $i ] . ' id="autoid-' . $i . '"';

			/* id_str（<hX id=autoid-Y）で元々の見出しの"<hX"部分に置換 */
			$replaced_heading =
				str_replace( '<h' . $headings[1][ $i ], $id_str, $headings[0][ $i ] );

			/* id付加後の見出しで元々のコンテンツ内の見出しを置換 */
			$the_content =
				str_replace( $headings[0][ $i ], $replaced_heading, $the_content );
		}
	}

	return $the_content;
}

/* the_contentフックに関数をフック */
add_filter( 'the_content', 'add_auto_id', 9 );
/* 見出しにid属性を自動挿入 End */

