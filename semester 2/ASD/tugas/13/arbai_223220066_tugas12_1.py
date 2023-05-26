# def MainProgram():
#     # Inisialisasi array untuk nama barang, harga satuan, jumlah, dan total
#     nama_barang = []
#     harga_satuan = []
#     jumlah = []
#     total = []

#     # Input jumlah barang yang akan diinputkan
#     n = int(input("Masukkan jumlah barang: "))

#     # Loop sebanyak n kali
#     for i in range(n):
#         # Input nama barang, harga satuan, dan jumlah
#         nama = input("Masukkan nama barang: ")
#         harga = int(input("Masukkan harga satuan: "))
#         jml = int(input("Masukkan jumlah: "))
    
#         # Hitung total
#         t = harga * jml
        
#         # Masukkan data ke dalam array
#         nama_barang.append(nama)
#         harga_satuan.append(harga)
#         jumlah.append(jml)
#         total.append(t)
#         i += 1

#     # Tampilkan data dari array yang telah diinputkan
#     print("Laporan Barang")
#     print("===============")
#     print("No.\tNama Barang\tHarga Satuan\tJumlah\tTotal")
#     for i in range(n):
#         print(i+1, "\t", nama_barang[i], "\t\t", harga_satuan[i], "\t\t", jumlah[i], "\t", total[i])

# MainProgram()

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
def print_table(data):
    # Menentukan panjang kolom untuk setiap elemen dalam array
    column_widths = [max(len(str(item)) for item in column) for column in zip(*data)]
    
    # Menampilkan baris atas tabel
    print("+" + "+".join("-" * (width + 2) for width in column_widths) + "+")
    
    # Menampilkan setiap baris data
    for row in data:
        print("|" + "|".join(str(item).ljust(width) for item, width in zip(row, column_widths)) + "|")
        
    # Menampilkan baris bawah tabel
    print("+" + "+".join("-" * (width + 2) for width in column_widths) + "+")

# Contoh data array
data = [["Nama", "Alamat", "Umur"], ["John Doe", "Jalan Raya No. 1", 30], ["Jane Doe", "Jalan Raya No. 2", 25]]

# Memanggil fungsi print_table
print_table(data)