
print("1 Menghitung permukaan tabung /n 2 menghitung volume tabung")

a = int(input())
if a == 1:
    print("masukaan nilai jari tabung")
    r = int(input())
    print("masukkan nilai tinggi tabung")
    t = int(input())

    l=2*22/7*r*(r+t)
    print("luas permukaan tabung adalah =" + str(l))
elif a == 2:
    print("Masukkan nilai diameter tabung")
    d = int(input())
    print("masukan nilai tinggi tabung")
    t = int(input())

    v = 22/7 * pow((1/2 * d),2) * t

    print("volume tabung adalah =" + str(v))
