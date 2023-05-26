def physics():
    print("--- Rumus Fisika ---")
    print("1. Energi Potensial")
    print("2. Energi Kinetik")
    print("3. Energi Mekanik")
    choice = int(input("Pilih rumus (1-3): "))
    if choice == 1:
        m = float(input("Masukkan massa (kg): "))
        g = float(input("Masukkan percepatan gravitasi (m/s^2): "))
        h = float(input("Masukkan ketinggian (m): "))
        ep = m * g * h
        print("Energi Potensial:", ep, "Joule")
    elif choice == 2:
        m = float(input("Masukkan massa (kg): "))
        v = float(input("Masukkan kecepatan (m/s): "))
        ek = 0.5 * m * v**2
        print("Energi Kinetik:", ek, "Joule")
    elif choice == 3:
        m = float(input("Masukkan massa (kg): "))
        g = float(input("Masukkan percepatan gravitasi (m/s^2): "))
        h = float(input("Masukkan ketinggian (m): "))
        ep = m * g * h
        v = float(input("Masukkan kecepatan (m/s): "))
        ek = 0.5 * m * v**2
        em = ep + ek
        print("Energi Mekanik:", em, "Joule")
    else:
        print("Pilihan tidak valid.")

def calculator():
    print("--- Kalkulator ---")
    print("1. Penjumlahan")
    print("2. Pengurangan")
    print("3. Perkalian")
    print("4. Pembagian")
    choice = int(input("Pilih operator (1-4): "))
    num1 = float(input("Masukkan angka pertama: "))
    num2 = float(input("Masukkan angka kedua: "))
    if choice == 1:
        result = num1 + num2
        print("Hasil:", result)
    elif choice == 2:
        result = num1 - num2
        print("Hasil:", result)
    elif choice == 3:
        result = num1 * num2
        print("Hasil:", result)
    elif choice == 4:
        result = num1 / num2
        print("Hasil:", result)
    else:
        print("Pilihan tidak valid.")

print("--- Menu ---")
print("1. Rumus Fisika")
print("2. Kalkulator")
choice = int(input("Pilih menu (1-2): "))
if choice == 1:
    physics()
elif choice == 2:
    calculator()
else:
    print("Pilihan tidak valid.")