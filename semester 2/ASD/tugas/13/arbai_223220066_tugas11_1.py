import os
# Mendefinisikan menu kopi yang tersedia
menu = ["Espresso", "Latte", "Mocha", "Cappuccino", "Affogato"]

# Mendefinisikan harga kopi yang tersedia
harga = [10000, 12000, 13000, 14000, 15000]

def header():
    os.system('clear')
    # os.system(cls)
    print(f"{'KEDAI KOPI KITA':^40}")
    print(f"{'-'*40:^40} \n")

def MenuAdmin():
    # os.system('clear')
    print(f"{'1. Kasir':^40}")
    print(f"{'2. Input Menu Baru':^40}")

def TampilkanMenu():
    # Menampilkan menu kopi dan harga setelah penambahan
    print("\nMenu Kopi:")
    for i in range(len(menu)):
      print(f"{i+1}. {menu[i]} - Rp{harga[i]}")

def Kasir():
# Meminta input pembelian dari user
    print("\nSilakan pilih kopi yang ingin Anda beli:")
    pilihan = int(input())

# Menampilkan rincian pembelian dan total harga
    print(f"\nAnda membeli {menu[pilihan-1]} dengan harga Rp{harga[pilihan-1]}")
    print(f"Total harga: Rp{harga[pilihan-1]}")

def InputMenuBaru():
# Menambah menu baru
    print("\nMasukkan nama menu baru:")
    nama_menu = input()
    print("Masukkan harga menu baru:")
    harga_menu = int(input())
    menu.append(nama_menu)
    harga.append(harga_menu)

def main():
    while True:
        header()
        MenuAdmin()
        Pilihan = int(input())
        if Pilihan == 1:
            TampilkanMenu()
            Kasir()
            
        elif Pilihan == 2:
            InputMenuBaru()
            TampilkanMenu()
            
        isContinue = input('Apakah Lanjut (y/n)')
        if isContinue == 'n':
            break
    print('Programselesai, Terima Kasih')

main()
