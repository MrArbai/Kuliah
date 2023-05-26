menu = "y" or "Y"
while menu == "y" or "Y":
    print(" ======================================== \n Selamat Datang di Resto Starbox \n ======================================== \n 1. Ayam Geprek Sambal : Rp 13.000 ")
    print(" 2. Nasi Goreng Kambing : Rp 17.000 \n 3. Sate Ayam : Rp 20.000  \n ========================================")
    listMenu=str(input(" Masukkan angka sesuai dengan menu yang tersedia = "))
    jumlahPesanan=int(input(" Jumlah dibeli = "))
    if listMenu == "1":
        namaMenu= " Ayam Geprek Sambal"
        harga=(13000*jumlahPesanan)
        pajak= int(harga * 0.1)
        totalHarga=int(harga+pajak)
    elif listMenu == "2":
        namaMenu= " Nasi Goreng Kambing"
        harga = (17000*jumlahPesanan)
        pajak = int(harga * 0.1)
        totalHarga =int(harga+pajak)
    elif listMenu == "3":
        namaMenu= " Sate Ayam"
        harga=int(20000*jumlahPesanan)
        pajak = int(harga * 0.1)
        totalHarga=int(harga+pajak)
    else:
        menu=input(" Maaf,Menu yang dipilih tidak tersedia di restoran")
 
    print(" Menu :",namaMenu , "\n Jumlah Pesanan : " ,jumlahPesanan , "\n Harga :", harga , "\n Pajak :", pajak ," ------------------------------" )
    print(" Total Pembayaran :", totalHarga)
    menu=input(" Mau pesan lagi? pilih Y jika Ya, pilih N jika Tidak (Y/N) = ")