#include <iostream>
#include <string>
using namespace std;
class tim{
    private:
        string nama;
        string negara;
        int tahun;
        string pemain;
        string pelatih;
    public:
        tim(){
        }
        tim(string namaT, string negaraT, int tahunT, string pemainT, string pelatihT){
            nama = namaT;
            negara = negaraT;
            pemain = pemainT;
            tahun = tahunT;
            pelatih = pelatihT;
        }
        void setNama(string namaT){
            nama = namaT;
        }
        string getNama(){
            return nama;
        }
        void setNegara(string negaraT){
            negara = negaraT;
        }
        string getNegara(){
            return negara;
        }
        void setTahun(int tahunT){
            tahun = tahunT;
        }
        int getTahun(){
            return tahun;
        }
        void setPemain(string pemainT){
            pemain = pemainT;
        }
        string getPemain(){
            return pemain;
        }
        void setPelatih(string pelatihT){
            pelatih = pelatihT;
        }
        string getPelatih(){
            return pelatih;
        }
        ~tim(){
        }
};