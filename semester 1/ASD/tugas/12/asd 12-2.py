# Input nama mahasiswa
nama = input("Masukkan nama mahasiswa: ")

# Inisialisasi array untuk 8 matakuliah
matakuliah = []

# Loop sebanyak 8 kali
for i in range(8):
    # Input nilai matakuliah
    nilai = int(input("Masukkan nilai matakuliah ke-" + str(i+1) + ": "))
    matakuliah.append(nilai)

# Hitung total nilai
total_nilai = sum(matakuliah)

# Hitung IP
ip = total_nilai / 8

# Tampilkan IP mahasiswa
print("IP mahasiswa", nama, "adalah", ip)


#    Start
#    |
#    |___ Input nama mahasiswa
#    |
#    |___ Inisialisasi array untuk 8 matakuliah
#    |
#    |___ Loop sebanyak 8 kali
#    |    |
#    |    |___ Input nilai matakuliah
#    |    |
#    |    |___ Masukkan nilai matakuliah ke dalam array
#    |
#    |___ Hitung total nilai
#    |
#    |___ Hitung IP
#    |
#    |___ Tampilkan IP mahasiswa
#    |
#    |___ End
