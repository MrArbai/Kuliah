def modulo(a, b):
    hasil = a % b
    return hasil

def Main():
    # mengambil input dari user
    angka1 = int(input("Masukkan bilangan pertama: "))
    angka2 = int(input("Masukkan bilangan kedua: "))

    # memanggil fungsi modulo
    result = modulo(angka1, angka2)

    # menampilkan hasil
    print("Sisa hasil bagi dari", angka1, "dan", angka2, "adalah", result)

Main()