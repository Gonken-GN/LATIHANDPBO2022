<?php
    include "daftar.php";
    $mahasiswa1 = new daftar("2000", "Luffy", "Male", "Ilmu_Bajak", "Semester3");
    echo "Identitas Mahasiswa Pertama: " ."<br/>".$mahasiswa1->getNim()."<br/>";

?>