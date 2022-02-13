<?php
include "tim.php";

$sepakbola = new tim("Persib", "Indonesia", "2000", "Asep", "Bambang, Todo, George, Uji");

echo "Nama Tim: " .$sepakbola->getNama() ."<br>";
echo "Negara Tim: " .$sepakbola->getNegara() ."<br>";
echo "Tahun Tim: " .$sepakbola->getTahun() ."<br>";
echo "Pelatih Tim: " .$sepakbola->getPelatih() ."<br>";
echo "Pemain Tim: " .$sepakbola->getPemain() ."<br>";
?>
