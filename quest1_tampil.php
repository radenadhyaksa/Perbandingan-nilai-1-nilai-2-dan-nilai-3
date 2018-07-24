<?php

echo "<br>";
 $satu = $_POST["nsatu"];
 $dua = $_POST["ndua"];
 $tiga = $_POST["ntiga"];

//perbandingan
if ($satu >= $dua) {
    echo "perbandingan nilai yang besar adalah = ". ($satu. "<br>");
}

elseif ($dua >= $tiga) {
    echo "perbandingan nilai yang besar adalah = ". ($dua. "<br>");
}

elseif ($satu >= $tiga) {
    echo "perbandingan nilai yang besar adalah = ". ($satu. "<br>");
}

else {
    echo "perbandingan nilai yang besar adalah = ". ($tiga. "<br>");
}
  
?>