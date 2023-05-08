# inisialisasi variabel
total_biaya_per_wilayah = {
    "Jakarta Barat": 0,
    "Jakarta Pusat": 0,
    "Jakarta Selatan": 0,
    "Jakarta Utara": 0,
    "Jakarta Timur": 0
}
total_biaya_seluruh_wilayah = 0
kode_wilayah_sebelumnya = None

# looping untuk input data
while True:
    kd_plg = int(input("Masukkan kode pelanggan: "))
    if kd_plg == 0:
        break
    kd_wil = input("Masukkan kode wilayah: ")
    nm_plg = input("Masukkan nama pelanggan: ")
    pakai = int(input("Masukkan jumlah pemakaian: "))

    # hitung biaya listrik
    if pakai <= 100:
        biaya = pakai * 1000
    elif pakai <= 200:
        biaya = 100000 + (pakai - 100) * 1500
    else:
        biaya = 250000 + (pakai - 200) * 2000

    # tambah biaya ke total biaya per wilayah
    total_biaya_per_wilayah[kd_wil] += biaya

    # cek apakah kode wilayah berubah
    if kode_wilayah_sebelumnya != kd_wil:
        # cetak total biaya per wilayah sebelumnya
        if kode_wilayah_sebelumnya is not None:
            print("Total biaya wilayah", kode_wilayah_sebelumnya, "adalah", total_biaya_per_wilayah[kode_wilayah_sebelumnya])
            print()

        # simpan kode wilayah saat ini sebagai kode wilayah sebelumnya
        kode_wilayah_sebelumnya = kd_wil

        # tambah biaya ke total biaya seluruh wilayah
        total_biaya_seluruh_wilayah += biaya

        # cetak halaman baru
        print("=== Halaman Baru ===")

    else:
        # tambah biaya ke total biaya seluruh wilayah
        total_biaya_seluruh_wilayah += biaya

# cetak total biaya per wilayah terakhir
print("Total biaya wilayah", kode_wilayah_sebelumnya, "adalah", total_biaya_per_wilayah[kode_wilayah_sebelumnya])
print()

# cetak total biaya seluruh wilayah
print("Total biaya seluruh wilayah adalah", total_biaya_seluruh_wilayah)



# Pada program di atas terdapat:

# 6 variabel: total_biaya_per_wilayah, total_biaya_seluruh_wilayah, kode_wilayah_sebelumnya, kd_plg, kd_wil, nm_plg, pakai, dan biaya.
# 1 ekspresi aritmatika: biaya = pakai * 1000 dan biaya = 100000 + (pakai - 100) * 1500 dan biaya = 250000 + (pakai - 200) * 2000.
# 3 built-in function Python: input(), int(), dan print().
# Tidak termasuk fungsi-fungsi yang dibuat secara eksplisit.