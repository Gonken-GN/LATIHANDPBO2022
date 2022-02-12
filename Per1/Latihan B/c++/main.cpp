#include <iostream>
#include <string>
using namespace std;
#include "football.cpp"
int main (){
    tim sepakbola;
    int n, tahunI;
    string namaI, negaraI, pelatihI, pemainI; 
    cout << "Masukkan Nama tim: ";
    cin >> namaI;
    sepakbola.setNama(namaI);
    cout << "Masukkan Negara tim: ";
    cin >> negaraI;
    sepakbola.setNegara(negaraI);
    cout << "Masukkan Tahun terbentuknya tim: ";
    cin >> tahunI;
    sepakbola.setTahun(tahunI);
    cout << "Masukkan Pelatih tim: ";
    cin >> pelatihI;
    sepakbola.setPelatih(pelatihI);
    cout << "Masukkan banyaknya Pemain yang ingin dimasukkan: " ;
    cin >> n;
    tim sepakbola2[n];
    for(int i=0;i<n;i++){
        cout << "Masukkan Nama Pemain: " << i+1 << ". ";
        cin >> pemainI;
        sepakbola2[i].setPemain(pemainI);
    }
    cout << "\nNama Tim: " << sepakbola.getNama() << endl;
    cout << "Negara Tim: " << sepakbola.getNegara() << endl;
    cout << "Tahun Terbentuknya Tim: "  << sepakbola.getTahun() << endl;
    cout << "Pelatih Tim: " << sepakbola.getPelatih() << endl;
    cout << "Pemain Tim:\n";
    for(int i = 0;i<n;i++){
        cout << (i+1) << ". " << sepakbola2[i].getPemain() << endl;
    }
    return 0;
}