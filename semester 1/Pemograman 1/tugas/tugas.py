print("Enter your Nilai A :")
A = int(input())

if A < 10:
    print(A,"adalah bilangan Satuan")
elif A <= 99:
    print(A,"adalah bilangan Puluhan")
elif A <= 999:
    print(A,"adalah bilangan ratusan")
elif A <= 999999:
    print(A,"adalah bilangan ribuan")
else:
    print(A,"adalah bilangan Jutaan")


print("while")
i=1
while i <= 10:
      print("Saya belajar phyton")
      i += 1

print("for")
a=10
for i in range(a):
    print("Saya belajar phyton")


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


print("Bilangan ganjil/genap dengan for")


a = 20
i=2
print("Bilangan Genap")
for i in range(a):
     if i % 2 == 0:
          print(i)

a = 20
i=2
print("Bilangan Ganjil")
for i in range(a):
     if i % 2 != 0:
          print(i)


print("Bilangan ganjil/genap dengan while")


a=20
i=2
print("Bilangan Ganjil")
while i <= a:
    b = i % 2
    if b != 0:
        print(i)


a=20
i=2
print("Bilangan Genap")
while i <= a:
    b = i % 2
    if b == 0:
        print(i)


print("Menentukan bilangan positif, negatif, dan netral.")

x = int(input())

if x > 0:
    print("Bilangan positif")
elif x == 0:
    print("Bilangan netral")
else:
    print("Bilangan negatif")

