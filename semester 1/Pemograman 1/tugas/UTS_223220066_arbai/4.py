end = "N" or "n"

while end == "y" or "Y":
    a = input("Input 1 untuk Perulangan While 2 Untuk Perulangan For")
    i = 0
    if int(a) == 1:
        while i <= 15:
            x = 3
            y = x ** i
            print(str(x) + " Pangkat " + str(i) + " adalaha " + str(y))
            i += 1
    elif int(a) == 2:
        for i in range(16):
            x = 3
            y = x ** i
            print(str(x) + " Pangkat " + str(i) + " adalaha " + str(y))
    end = input("N untuk berhenti Y untuk coba lagi")

