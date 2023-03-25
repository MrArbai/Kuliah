def init():
    jumlah_mahasiswa = int(input("Masukkan jumlah mahasiswa: "))
    daftar_mahasiswa = []
    Matakuliah = ["Desain Web", "Pemrograman 1", "B. Indonesia", "Algoritma Stuktur Data",
                "Aljabar linier", "Logika informatika", "Pengantar Teknologi Informasi", "Konsep Sistem Informasi",]

    for i in range(jumlah_mahasiswa):
        nama = input("Masukkan nama mahasiswa: ")
        nilai_matakuliah = []
        total_nilai = 0

        for j in range(len(Matakuliah)):
            nilai = float(input(f"Masukkan nilai matakuliah "+ Matakuliah[j] +" : "))
            total_nilai += nilai
            nilai_matakuliah.append(Matakuliah[j] + " : " + str(nilai))
        IP = total_nilai/8
        daftar_mahasiswa.append(
            {"nama": nama, "nilai_matakuliah" : nilai_matakuliah, "IP": IP})

    print("Daftar Mahasiswa:")
    for mahasiswa in daftar_mahasiswa:
        print("-", mahasiswa["nama"], "| Nilai Matakuliah:",
            mahasiswa["nilai_matakuliah"], "| IP:", mahasiswa["IP"])

init()