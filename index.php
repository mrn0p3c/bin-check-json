<title>Bin Check </title>
<?php
$bin = $_GET['bin'];
if (empty($bin)) {
echo 'BIN Empty, use on url ?bin=44444';
} else {
$getbank = json_decode(file_get_contents("http://www.binlist.net/json/".$bin.""));
$info = "$getbank->brand - $getbank->bank - $getbank->card_type - $getbank->card_category - $getbank->country_name";
echo $info;
}
?>
