<?php


$angka = array(1,2,3,4,5,6,7,8,9,10);

for($i=0;$i<count($angka);$i++){

    $counter = 0;

    for($j=0;$j<count($angka);$j++){
        //    2       %     1     = 0 ? 
        if($angka[$i] % $angka[$j] == 0){
            $counter++;
        }
    }

    if($counter == 2){
        // di bagi 1 atau di bagi bil itu sendiri
        // 2 -> 2 / 1 , bisa
        // 2 -> 2 / 2 , bisa
        echo "<p>".$angka[$i]."</p>";
    }

}

?>