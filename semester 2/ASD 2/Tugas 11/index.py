# Program menggunakan list untuk menyimpan daftar nama mahasiswa

def main():
    # Membuat list kosong untuk menyimpan nama mahasiswa
    mahasiswa = []

    # Memasukkan nama mahasiswa ke dalam list
    while True:
        nama = input("Masukkan nama mahasiswa (tekan Enter untuk berhenti): ")
        if nama == "":
            break
        mahasiswa.append(nama)

    # Menampilkan daftar nama mahasiswa
    print("\nDaftar Mahasiswa:")
    for nama in mahasiswa:
        print(nama)

if __name__ == "__main__":
    main()


# Start
# └─ Membuat list kosong untuk mahasiswa
# └─ Loop
#     └─ Memasukkan nama mahasiswa
#     └─ Jika nama kosong, keluar dari loop
#     └─ Menambahkan nama ke list mahasiswa
# └─ Tampilkan daftar mahasiswa
#     └─ Loop
#         └─ Mengambil nama dari list mahasiswa
#         └─ Menampilkan nama mahasiswa
# End
