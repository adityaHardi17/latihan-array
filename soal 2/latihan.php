<?php
    // Array dengan Min / Max
    echo min(289, 182, 381, 119, 391, 591, 123, 124, 284, 215, 312);
    
    echo "<br>";
    // array dengan cara perulangan (foreach)

    $bilangan = array(289, 182, 381, 119, 391, 591, 123, 124, 284, 215, 312);

    $min = $bilangan[0];

    foreach ($bilangan as $key => $data) {
        if ($data < $min) {
            $min = $data;
        }
    }

    echo "Nilai minimum adalah $min";