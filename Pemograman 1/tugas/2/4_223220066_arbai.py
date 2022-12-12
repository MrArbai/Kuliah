
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