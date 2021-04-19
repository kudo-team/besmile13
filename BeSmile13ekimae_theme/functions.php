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

//android判定
function is_android () {
	$useragents = array(
		'Android'        // Android
	);
	$pattern = '/'.implode('|', $useragents).'/i';
	if (!preg_match($pattern, $_SERVER['HTTP_USER_AGENT'])) {
		return false;
	}
	return true;
}