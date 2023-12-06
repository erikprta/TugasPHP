<?php
// Membuat Multidimensi Array
$kendaraan = [
    "transpormasi" => ["Mobil", "Sepeda", "Truk", "Motor", "Bus"],
    "mobil" => ["merk" => "Pajero", "type" => "Dakar", "year" => 2023],
    "motor" => ["Honda", "Yamaha", "Suzuki"]
];

echo "Ini Array Kendaraan<br><br>";
echo implode(", ", $kendaraan["transpormasi"]);

echo "<br>==========================<br>";
echo "Ini Array Mobil<br><br>";
echo implode(" , ", $kendaraan["mobil"]);

echo "<br>==========================<br>";
echo "Ini Array Motor<br><br>";
echo implode(", ", $kendaraan["motor"]);


// // menampilkan output
// echo "Ini Array Kendaraan <br><br>";
// echo implode (", ",$kendaraan["transportasi"]),"<br>";
// echo "==================================="."<br><br>";

// echo "Ini Array Mobile <br><br>";
// echo $kendaraan["mobil"]["merk"].", ".$kendaraan["mobil"]["type"].", ".$kendaraan["mobil"]["year"],"<br>";
// echo "==================================="."<br><br>";

// echo "Ini Array Motor <br><br>";
// echo implode (", ",$kendaraan["motor"]),"<br>";
// echo "==================================="."<br>";

    // $ar_jus = [
    //     ["buah"=>"Mangga", "harga"=>8000],
    //     ["buah"=>"Alpukat", "harga"=>10000],
    //     ["buah"=>"Durian", "harga"=>14000],
    // ];

    // foreach($ar_jus as $jus){
    //     echo "jus ".$jus["buah"]." harganya : ".$jus["harga"]."<br>";
    // }
?>
