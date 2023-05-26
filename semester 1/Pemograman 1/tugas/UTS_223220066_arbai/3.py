print("1. Kubus")
print("2. Balok")
print("3. Tabung")
print("4. Prisma Segitiga")

Rumus = input("Masukan Volume Bangunan yang Ingin Dicari")

if Rumus == 1:
    r = input("Masukan Nilai Panjang Rusuk (cm)")
    v = r ** 3
    print("Volume Kubus ="+ v + " cm")
elif Rumus ==2:
    p = input("Masukan Nilai Panjang Balok (cm)")
    l = input("Masukan Nilai lebar balok (cm)")
    t = input("Masukan Nilai Tinggi Balok (cm)")
    v = p*l*t
    print("Volume Kubus ="+ v + " cm")
elif Rumus == 3:
    r = input("Masukan Nilai jari-jari Tabung (cm)")
    t = input("Masukan Nilai Tinggi Tabung (cm)")

    v = 3.14 * (r ** 2) * t
    print("Volume Kubus ="+ v + " cm")
elif Rumus == 4:
    p = input("Masukan Nilai Panjang Balok (cm)")
    l = input("Masukan Nilai lebar balok (cm)")
    t = input("Masukan Nilai Tinggi Balok (cm)")

    v = 1/2 * (p * l * t)
    print("Volume Kubus ="+ v + " cm")