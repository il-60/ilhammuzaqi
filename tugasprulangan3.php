<?php

$jumlah = 0;
echo "bilangan kelipatan 6 dari 3 sampai 127 : <br>";

for ($i = 3; $i <= 127; $i++) {
    if ($i % 6 == 0) {
        echo $i . "<br>";
        $jumlah++;
    }
}

echo "Banyak bilangan kelipatan 6 = " . $jumlah;

?>