<?php

$n = $_POST['jum'];

    for ($i=0; $i < $n; $i++) { 
        $a=$i+1;
        $nilai[$i] = $_POST["nilai$i"];
        echo "Bil urutan ke $a adalah : ".$nilai[$i]."<br>";
    }

    $min=$nilai[0];
    for($i=0; $i <=count($nilai)-1; $i++){
        if($nilai[$i] < $min)
        {
            $min = $nilai[$i];
        }
    }

    $max=$nilai[0];
    for($i=0; $i <=count($nilai)-1; $i++){
        if($nilai[$i] > $max)
        {
            $max = $nilai[$i];
        }
    }

    $jangkauan=$max-$min;

    echo "Nilai minimum adalah $min<br>";
    echo "Nilai maksimum adalah $max<br>";
    echo "Jangkauan nilai adalah $jangkauan<br>";