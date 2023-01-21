class Mahasiswa:
    def __init__(self, nama, nim):
        self.nama = nama
        self.nim = nim
        self.matakuliah = {"Desain Web": 0, "Pemrograman 1": 0, "B. Indonesia": 0, "Algoritma Struktur Data": 0, "Aljabar linier": 0, "Logika informatika": 0, "Pengantar Teknologi Informasi": 0, "Konsep Sistem Informasi": 0}

    def tampilkan(self):
        print("Nama:", self.nama)
        print("NIM:", self.nim)
        print("Nilai:", self.matakuliah)

daftar_mahasiswa = []

mahasiswa1 = Mahasiswa("Andi", "12345")
mahasiswa1.matakuliah["Desain Web"] = 85
mahasiswa1.matakuliah["Pemrograman 1"] = 80
mahasiswa1.matakuliah["B. Indonesia"] = 75
mahasiswa1.matakuliah["Algoritma Stuktur Data"] = 70
mahasiswa1.matakuliah["Aljabar linier"] = 80
mahasiswa1.matakuliah["Logika informatika"] = 75
mahasiswa1.matakuliah["Pengantar Teknologi Informasi"] = 90
mahasiswa1.matakuliah["Konsep Sistem Informasi"] = 95

daftar_mahasiswa.append(mahasiswa1)

mahasiswa2 = Mahasiswa("Budi", "67890")
mahasiswa2.matakuliah["Desain Web"] = 70
mahasiswa2.matakuliah["Pemrograman 1"] = 80
mahasiswa2.matakuliah["B. Indonesia"] = 75
mahasiswa2.matakuliah["Algoritma Stuktur Data"] = 80
mahasiswa2.matakuliah["Aljabar linier"] = 70
mahasiswa2.matakuliah["Logika informatika"] = 75
mahasiswa2.matakuliah["Pengantar Teknologi Informasi"] = 80
mahasiswa2.matakuliah["Konsep Sistem Informasi"] = 90

daftar_mahasiswa.append(mahasiswa2)

def cari_mahasiswa(nama):
    for mahasiswa in daftar_mahasiswa:
        if mahasiswa.nama == nama:
            return mahasiswa
    print("Mahasiswa tidak ditemukan")

# contoh penggunaan fungsi cari_mahasiswa
hasil_pencarian = cari_mahasiswa("Andi")
Mahasiswa.tampilkan(hasil_pencarian)
