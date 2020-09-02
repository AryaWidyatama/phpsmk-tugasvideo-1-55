<?php 

    // $nama = array("doni","adi","siti",100);

    // var_dump ($nama);

    // echo "<br>";

    // foreach ($nama as $key ) {
    //   echo $key."<br>";
    // }

    $nama = array(
        "doni" => "surabaya",
        "adi" => "malang",
        "siti" => "sidoarjo"
    );

    var_dump ($nama);

    echo "<br>";

    foreach ($nama as $b => $c) {
        echo $b." - ".$c;
        echo "<br>";
    }

?>