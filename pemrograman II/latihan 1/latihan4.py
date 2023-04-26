import matematika

print("======================Kalkulator Sederhana=========================")

nilai_1 = float(input("Masukkan nilai 1 = "))
nilai_2 = float(input("Masukkan nilai 2 = "))

print("Pilih menu:")
print("1. Penjumlahan")
print("2. Pengurangan")
print("3. Perkalian")
print("4. Pembagian")
print("5. Pangkat")
print("6. Pencarian sisa hasil bagi")

pilihan = int(input("Masukkan pilihan (1/2/3/4/5/6): "))

if pilihan == 1:
    hasil = matematika.penjumlahan(nilai_1, nilai_2)
    print("Operasi penjumlahan antara nilai 1 = ", nilai_1, " dan nilai 2 = ", nilai_2, " adalah ", hasil)
elif pilihan == 2:
    hasil = matematika.pengurangan(nilai_1, nilai_2)
    print("Operasi pengurangan antara nilai 1 = ", nilai_1, " dan nilai 2 = ", nilai_2, " adalah ", hasil)
elif pilihan == 3:
    hasil = matematika.perkalian(nilai_1, nilai_2)
    print("Operasi perkalian antara nilai 1 = ", nilai_1, " dan nilai 2 = ", nilai_2, " adalah ", hasil)
elif pilihan == 4:
    hasil = matematika.pembagian(nilai_1, nilai_2)
    print("Operasi pembagian antara nilai 1 = ", nilai_1, " dan nilai 2 = ", nilai_2, " adalah ", hasil)
elif pilihan == 5:
    hasil = matematika.perpangkatan(nilai_1, nilai_2)
    print("Operasi perpangkatan antara nilai 1 = ", nilai_1, " dan nilai 2 = ", nilai_2, " adalah ", hasil)
elif pilihan == 6:
    hasil = matematika.sisa_bagi(nilai_1, nilai_2)
    print("Operasi sisa bagi antara nilai 1 = ", nilai_1, " dan nilai 2 = ", nilai_2, " adalah ", hasil)
else:
    print("Pilihan tidak valid")
