class tim():
    __nama = ""
    __negara = ""
    __tahun = 0
    __pelatih = ""
    __pemain = ""
    
    def __init__(self, nama = "", negara = "", tahun = 0, pelatih = "", pemain = ""):
        self.__nama = nama
        self.__negara = negara
        self.__tahun = tahun
        self.__pelatih = pelatih
        self.__pemain = pemain
    def setNama(self, nama):
        self.__nama = nama
    def getNama(self):
        return self.__nama
    def setNegara(self, negara):
        self.__negara = negara
    def getNegara(self):
        return self.__negara
    def setTahun(self, tahun):
        self.__tahun = tahun
    def getTahun(self):
        return self.__tahun
    def setPelatih(self, pelatih):
        self.__pelatih = pelatih
    def getPelatih(self):
        return self.__pelatih
    def setPemain(self, pemain):
        self.__pemain = pemain
    def getPemain(self):
        return self.__pemain
