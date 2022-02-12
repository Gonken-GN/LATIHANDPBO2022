from tim import tim

sepakbola = tim()

print("Masukkan Nama Tim: ")
namaI = str(input())
sepakbola.setNama(namaI)
print("Masukkan Negara Tim: ")
negaraI = str(input())
sepakbola.setNegara(negaraI)
print("Masukkan Tahun Tim: ")
tahunI = int(input())
sepakbola.setTahun(tahunI)
print("Masukkan Pelatih tim")
pelatihI = str(input())
sepakbola.setPelatih(pelatihI)
print("Masukkan Banyaknya Pemain Tim: ")
n = int(input())
sepakbola2 = [tim() for i in range(n)]
for i in range(n):
    print("Masukkan Nama Pemain Tim: ")
    pemainI = str(input())
    sepakbola2[i].setPemain(pemainI)
print("")
print("Nama Tim: " + str(sepakbola.getNama()))
print("Negara Tim: " + str(sepakbola.getNegara()))
print("Tahun Tim: " + str(sepakbola.getTahun()))
print("Pelatih Tim: " + str(sepakbola.getPelatih()))
print("Nama Pemain Tim: ")
for i in range(n):
    print(sepakbola2[i].getPemain())