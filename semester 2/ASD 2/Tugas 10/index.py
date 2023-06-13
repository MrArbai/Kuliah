# Program menggunakan pointer untuk menukar nilai dua variabel

def swap(a, b):
    temp = a
    a = b
    b = temp

def main():
    # Input nilai awal
    num1 = int(input("Masukkan nilai pertama: "))
    num2 = int(input("Masukkan nilai kedua: "))

    # Menampilkan nilai awal
    print("Sebelum pertukaran:")
    print("Nilai pertama:", num1)
    print("Nilai kedua:", num2)

    # Pertukaran menggunakan pointer
    swap(num1, num2)

    # Menampilkan nilai setelah pertukaran
    print("Setelah pertukaran:")
    print("Nilai pertama:", num1)
    print("Nilai kedua:", num2)

if __name__ == "__main__":
    main()


# Start
# └─ Input nilai pertama
# └─ Input nilai kedua
# └─ Tampilkan nilai awal
#     └─ Tampilkan nilai pertama
#     └─ Tampilkan nilai kedua
# └─ Pertukaran menggunakan pointer
#     └─ Simpan nilai pertama ke temp
#     └─ Simpan nilai kedua ke nilai pertama
#     └─ Simpan temp ke nilai kedua
# └─ Tampilkan nilai setelah pertukaran
#     └─ Tampilkan nilai pertama
#     └─ Tampilkan nilai kedua
# End
