<?php error_reporting(0); ?>
<table width="" border="">
<?php
$file_handle = fopen("hasil.txt", "rb");

while (!feof($file_handle) ) {
    $line_of_text = fgets($file_handle);
    $parts = explode(':', $line_of_text);
    echo "<tr><td height=''>$parts[0]</td><td>$parts[1]</td></tr>";
}
fclose($file_handle);
?>
</table>
