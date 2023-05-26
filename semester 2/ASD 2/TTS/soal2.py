
num1 = int(input("Masukkan bilangan pertama: "))
num2 = int(input("Masukkan bilangan kedua: "))

hasil = 0

for i in range(num2):
    hasil += num1

print(f"Hasil perkalian {num1} x {num2} adalah {hasil}")
