
Totalhari = int(input("Masukan Jumlah Total Hari"))
bulan = int(input("Masukan Jumlah bulan"))
tahun = int(input("Masukan Jumlah tahun"))

print("2. Hitung berapa tahun dengan cara total hari dibagi dengan 365 hari")
print(Totalhari / 365)

print("3. Hitung berapa bulan dengan cara total hari dikurangi berapa tahun dikalikan dengan /n 365 hari, kemudian dibagi dengan total bulan.")
Bbulan = Totalhari - tahun * 365 / bulan
print(Bbulan)

print("4. Hitung sisa hari dengan cara mengurangi total hari dengan perkalian antara tahun /n dan 365 hari, dan dengan perkalian total bulan.")
ttahun = Totalhari - tahun * 365 * bulan
print(ttahun)

print("5. Cetak hasil berapa hari, berapa bulan, berapa tahun.")
print("Hari = " + str(Totalhari) + " Bulan =  " + str(bulan) + " Tahun = " + str(tahun))