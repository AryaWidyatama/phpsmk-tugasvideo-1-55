<?php 

    // array dimensi

    $nama = array("doni","adi","budi","siti",100,2.5);

    // var_dump($nama);

    // echo "<br>";

    // echo $nama[5];

    // echo "<br>";

    // for ($i=0; $i < 6; $i++) { 
    // //    echo $i;
    //    echo $nama[$i]."<br>";
    // }

    // foreach ($nama as $k ) {
    //   echo $key."<br>";
    // }

    //array asosiatif

    // $nama = array(
    //     "doni" => "Surabaya",
    //     "adi" => "malang",
    //     "budi" => "jakarta",
    //     "siti" => "bandung"
    // );

    $nama["doni"]="surabaya";
    $nama["adi"]="malang";
    $nama["budi"]="sjakarta";
    $nama["siti"]="bandung";
    $nama["edi"]="semarang";

    var_dump ($nama);

    echo "<br>";

   // echo $nama['doni'];

    foreach ($nama as $key => $value) {
        echo $key.' => '.$value;
        echo "<br>";
    }

?>