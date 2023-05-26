# Inisialisasi array untuk nama barang, harga satuan, jumlah, dan total
nama_barang = []
harga_satuan = []
jumlah = []
total = []

# Input jumlah barang yang akan diinputkan
n = int(input("Masukkan jumlah barang: "))

# Loop sebanyak n kali
for i in range(n):
    # Input nama barang, harga satuan, dan jumlah
    nama = input("Masukkan nama barang: ")
    harga = int(input("Masukkan harga satuan: "))
    jml = int(input("Masukkan jumlah: "))
   
    # Hitung total
    t = harga * jml
    
    # Masukkan data ke dalam array
    nama_barang.append(nama)
    harga_satuan.append(harga)
    jumlah.append(jml)
    total.append(t)
    i += 1

# Tampilkan data dari array yang telah diinputkan
print("Laporan Barang")
print("===============")
print("No.\tNama Barang\tHarga Satuan\tJumlah\tTotal")
for i in range(n):
    print(i+1, "\t", nama_barang[i], "\t\t", harga_satuan[i], "\t\t", jumlah[i], "\t", total[i])



#    Start
#    |
#    |___ Input jumlah barang yang akan diinputkan (n)
#    |
#    |___ Inisialisasi array untuk nama barang, harga satuan, jumlah, dan total
#    |
#    |___ Loop sebanyak n kali
#    |    |
#    |    |___ Input nama barang, harga satuan, dan jumlah
#    |    |
#    |    |___ Hitung total = harga satuan * jumlah
#    |    |
#    |    |___ Masukkan data ke dalam array yang telah dibuat
#    |
#    |___ Tampilkan data dari array yang telah diinputkan
#    |
#    |___ End
