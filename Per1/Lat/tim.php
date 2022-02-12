<?php
class tim{
    private $nama;
    private $negara;
    private $tahun;
    private $pelatih;
    private $pemain;
    public function __construct($nama="", $negara="", $tahun="", $pelatih="", $pemain = ""){
        $this->nama = $nama;
        $this->negara = $negara;
        $this->tahun = $tahun;
        $this->pelatih = $pelatih;
        $this->pemain = $pemain;
    }
    public function setNama($nama){
        $this->nama = $nama;
    }
    public function getNama(){
        return $this->nama;
    }
    public function setNegara($negara){
        $this->negara= $negara;
    }
    public function getNegara(){
        return $this->negara;
    }
    public function setTahun($tahun){
        $this->tahun = $tahun;
    }
    public function getTahun(){
        return $this->tahun;
    }
    public function setPelatih($pelatih){
        $this->pelatih = $pelatih;
    }
    public function getPelatih(){
        return $this->pelatih;
    }
    public function setPemain($pemain){
        $this->pemain = $pemain;
    }
    public function getPemain(){
        return $this->pemain;
    }
}
?>