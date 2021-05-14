<?php

//$wp_dir = "/home/users/2/hippy.jp-sunplace/web/13-sunplace-osaka/pdf/pdf";
//$top_dir = "/home/users/2/hippy.jp-sunplace/web/13-sunplace-osaka/";
echo '<pre>';
echo `mv ../.htaccess ../.htaccess_bak`;
echo `mv htaccess.txt ../.htaccess`;
//echo `cat ../.htaccess`;
//echo `mv {$top_dir}pdf~/pdf/score.pdf /home/users/2/hippy.jp-sunplace/web/13-sunplace-osaka/pdf/score.pdf`;
//echo `ls -al {$top_dir}/pdf`;
//echo `mv -b {$wp_dir} {$top_dir}`;
exit();
//$f_r = file($file);
//echo '<pre>';
//echo 'here';
//echo implode($f_r);
//exit();
$data = <<<EOF
<?php
/**
 * Front to the WordPress application. This file doesn't do anything, but loads
 * wp-blog-header.php which does and tells WordPress to load the theme.
 *
 * @package WordPress
 */

/**
 * Tells WordPress to load the WordPress theme and output it.
 *
 * @var bool
 */
define( 'WP_USE_THEMES', true );

/** Loads the WordPress Environment and Template */
require __DIR__ . '/wp-blog-header.php';
EOF;

$fp = fopen($file,"w");
echo fwrite($fp,$data);
