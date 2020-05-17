<?php error_reporting(0); ?>





<?php
echo "Cetak data berupa array";
$url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

$remove_http   = str_replace('http://', '', $url);
$split_url     = explode('?', $remove_http);
$get_page_name = explode('/', $split_url[0]);
$page_name     = $get_page_name[1];

$split_parameters = explode('&', $split_url[1]);

for ($i = 0; $i < count($split_parameters); $i++) {
    $final_split                                 = explode('=', $split_parameters[$i]);
    $split_complete[$page_name][$final_split[0]] = $final_split[1];
}

var_dump($split_complete);
?>

<?php
$nama          = $_GET['nama'];
$email         = $_GET['email'];
$area          = $_GET['area'];
$jenis_kelamin = $_GET['jenis_kelamin']; ?>

<?php
echo "=============================================================================================";
echo "<br>";
echo "Cetak data berupa json";
echo "<br>";
$array = array(
    'Nama' => $nama,
    'email' => $email,
    'area' => $area,
    'jenis kelamin' => $jenis_kelamin
);

echo stripslashes(json_encode($array));
?>
<?php echo "<br>"; ?>
<?php echo "============================================================================================="; ?>
<h3>cetak data berupa string</h3>
<?php
echo " Nama : " . $_GET['nama'];
?> <br>
<?php
echo " Email : " . $_GET['email'];
?> <br>
<?php
echo " Area : " . $_GET['area'];
?> <br>
<?php
echo " Jenis Kelamin : " . $_GET['jenis_kelamin'];
?> <br>
<?php echo "============================================================================================="; ?>

<h3>simpan data kedalam bentuk txt</h3>

<?php
$catat         = "hasil.txt";
$handle = fopen($catat, 'a');


fwrite($handle, "Nama: ");
fwrite($handle, "$nama");
fwrite($handle, "\n");

fwrite($handle, "Email: ");
fwrite($handle, "$email");
fwrite($handle, "\n");

fwrite($handle, "Area: ");
fwrite($handle, "$area");
fwrite($handle, "\n");


fwrite($handle, "Jenis Kelamin: ");
fwrite($handle, "$jenis_kelamin");
fwrite($handle, "\n");

fwrite($handle, "============:============");
fwrite($handle, "\n");

?>

<?php echo "data anda sukses disimpan di dalam file txt" ?> <br>
<script language="javascript" type="text/javascript">
function popitup(url) {
newwindow=window.open(url,'name','height=400,width=350');
if (window.focus) {newwindow.focus()}
return false;
}
</script>
<button type="button" onclick="return popitup('hasil.php')">Klik Disini untuk melihat data</button>
