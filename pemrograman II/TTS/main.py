class Binatang:
    def __init__(self, nama, kelompok, kaki, warna):
        self.nama = nama
        self.kelompok = kelompok
        self.kaki = kaki
        self.warna = warna

    def jalan(self):
        print(f"{self.nama} sedang berjalan.")

    def makan(self):
        print(f"{self.nama} sedang makan.")

    def terbang(self):
        if self.kelompok == "Aves":
            print(f"{self.nama} sedang terbang.")
        else:
            print(f"{self.nama} tidak dapat terbang.")

    def berenang(self):
        if self.kelompok == "Pisces" or self.kelompok == "Amphibi":
            print(f"{self.nama} sedang berenang.")
        else:
            print(f"{self.nama} tidak dapat berenang.")


# Contoh penggunaan class Binatang
binatang1 = Binatang("Burung", "Aves", 2, "Merah")
binatang1.jalan()
binatang1.makan()
binatang1.terbang()
binatang1.berenang()

binatang2 = Binatang("Ikan", "Pisces", 0, "Biru")
binatang2.jalan()
binatang2.makan()
binatang2.terbang()
binatang2.berenang()

binatang3 = Binatang("Kucing", "Mamalia", 4, "Oren")
binatang3.jalan()
binatang3.makan()
binatang3.terbang()
binatang3.berenang()

binatang4 = Binatang("Kodok", "Amphibi", 4, "Hijau")
binatang4.jalan()
binatang4.makan()
binatang4.terbang()
binatang4.berenang()

binatang5 = Binatang("Kadal", "Reptile", 4, "Coklat")
binatang5.jalan()
binatang5.makan()
binatang5.terbang()
binatang5.berenang()
