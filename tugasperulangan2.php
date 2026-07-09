<?php

$jumlah = 0;
echo "proses penjumlahan bilangan 2 sampai 50 <br>";

for ($i = 2; $i <= 50; $i++) {
    echo $jumlah . " + ". $i;
    $jumlah = $jumlah + $i;
    echo" = ". $jumlah. "<br>";
}
echo "<br>";

echo "Jumlah bilangan 2 sampai 50 = " . $jumlah;

?>