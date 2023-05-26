# Inisialisasi array untuk menyimpan detail penjualan
detail_penjualan = [[0 for j in range(4)] for i in range(5)]

# Meminta input dari pengguna untuk setiap detail penjualan
for i in range(5):
    print(f"Detail penjualan ke-{i+1}")
    detail_penjualan[i][0] = input("Masukkan nama barang: ")
    detail_penjualan[i][1] = int(input("Masukkan harga barang: "))
    detail_penjualan[i][2] = int(input("Masukkan jumlah barang yang terjual: "))
    detail_penjualan[i][3] = detail_penjualan[i][1] * detail_penjualan[i][2]

# Mencetak detail penjualan
print("Detail Penjualan Barang")
print("{:<15} {:<10} {:<10} {:<10}".format("Nama Barang", "Harga", "Jumlah", "Total"))
for i in range(5):
    print("{:<15} {:<10} {:<10} {:<10}".format(detail_penjualan[i][0], detail_penjualan[i][1], detail_penjualan[i][2], detail_penjualan[i][3]))
