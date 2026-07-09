<?php
echo "bilangan kelipatan 10 dari 5 sampai 100 : <br>" ;
for ($i = 5; $i <= 100; $i++) {
    if ($i % 10 == 0) {
        echo $i . " <br>";
    }
}

?>