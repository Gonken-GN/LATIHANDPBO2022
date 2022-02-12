public class tim {
    private String nama;
    private String negara;
    private int tahun;
    private String pelatih;
    private String pemain;
    public tim(String nama, String negara, int tahun, String pelatih, String pemain){
        this.nama = nama;
        this.negara = negara;
        this.tahun = tahun;
        this.pelatih = pelatih;
        this.pemain = pemain;
    }
    tim(){
    }
    public void setNama(String nama){
        this.nama = nama;
    }
    public String getNama(){
        return this.nama;
    }
    public void setNegara(String negara){
        this.negara = negara;
    }
    public String getNegara(){
        return this.negara;
    }
    public void setTahun(int tahun){
        this.tahun = tahun;
    }
    public int getTahun(){
        return this.tahun;
    }
    public void setPelatih(String pelatih){
        this.pelatih = pelatih;
    }
    public String getPelatih(){
        return this.pelatih;
    }
    public void setPemain(String pemain){
        this.pemain = pemain;
    }
    public String getPemain(){
        return this.pemain;
    }
}
