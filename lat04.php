<?php 

    // operator matematika

    $a = 2;
    $b = 3;

    $c = $a + $b;

    echo $c.'<br>';
    

    $c = $a - $b;
    echo $c.'<br>';

    $c = $a * $b;
    echo $c.'<br>';

    $c = $a / $b;
    echo floor($c).'<br>';

    $c = $a % $b;
    echo $c.'<br>'.'<br>';


    // operator logika

    $c = $a < $b;
    echo $c.'<br>';

    $c = $a > $b;
    echo $c;

    $c = $a == $b;
    echo $c;

    $c = $a != $b;
    echo $c.'<br>';

    // increment
    $a++;
    echo $a.'<br>';

    //operator string

    $kata = 'Sura';
    $kota = 'baya';

    $hasil = $kata . $kota;

    $hasil .=' kota pahlawan';

    echo $hasil;




?>