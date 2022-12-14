import os

# kumpulan fungsi
# 1. fungsi header

def header():
    os.system('clear')
    # os.system(cls)
    print(f"{'PROGRAM MENGHITUNG LUAS':^40}")
    print(f"{'DAN MENGHITUNG LUAS PERSEGI PANJANG':^40}")
    print(f"{'-'*40:^40}")

def input_user():
    panjang = int(input("masukan Panjang = "))
    lebar = int(input("Masukan Lebar = "))
    return panjang, lebar

def luas_pp(panjang,lebar):
    return panjang*lebar

def keliling_pp(panjang,lebar):
    return2*(panjang+lebar)

def display(pesan,nilai):
    print(f"Hasil Perhitungan {pesan} = {nilai}")


# main program

while true:
    header():
    p,l = input_user()
    luas = (luas_pp(p,l))
    keliling = (keliling_pp(p,l))
    display("Luas",luas)
    display("Keliling",keliling)
    isContinue = input('Apakah Lanjut (y/n)')
    if isContinue == 'n':
        break
print('Programselesai, Terima Kasih')