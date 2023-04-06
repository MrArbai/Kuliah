# Membuat list kosong untuk menyimpan data mahasiswa
data_mahasiswa = []

# Memasukkan data mahasiswa
while True:
    nama = input("Masukkan nama mahasiswa (tekan enter untuk selesai): ")
    if nama == "":
        break
    program_studi = input("Masukkan program studi mahasiswa: ")
    data_mahasiswa.append([program_studi, nama])

# Mengurutkan data mahasiswa berdasarkan program studi
data_mahasiswa.sort()

# Mencetak data mahasiswa yang telah dikelompokkan berdasarkan program studi
program_studi_sebelumnya = None
for program_studi, nama in data_mahasiswa:
    if program_studi != program_studi_sebelumnya:
        program_studi_sebelumnya = program_studi
        print(program_studi + ":")
    print("  - " + nama)
