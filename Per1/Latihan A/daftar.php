<?php
class daftar{
    private $nim = "";
    private $nama = "";
    private $kelamin = "";
    private $prodi = "";
    private $semester = "";
    public function __construct($nim = "", $nama = "", $kelamin = "", $prodi = "", $semester = ""){
        $this->nim = $nim;
        $this->nama = $nama;
        $this->kelamin = $kelamin;
        $this->prodi = $prodi;
        $this->semester = $semester;
    }
    public function setNim($nim){
        $this->nim = $nim;
    }
    public function getNim(){
        return $this->nim;
    }
    public function setNama($nama){
        $this->nama = $nama;
    }
    public function getNama(){
        return $this->nama;
    }
    public function setKelamin($kelamin){
        $this->kelamin = $kelamin;
    }
    public function getKelamin(){
        return $this->kelamin;
    }
    public function setProdi($prodi){
        $this->prodi = $prodi;
    }
    public function getProdi(){
        return $this->prodi;
    }
    public function setSemester($semester){
        $this->semester = $semester;
    }
    public function getSemester(){
        return $this->semester;
    }
}
?>