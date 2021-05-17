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
function my_delete_local_jquery() {
    wp_deregister_script('jquery');
}
add_action( 'wp_enqueue_scripts', 'my_delete_local_jquery' );

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