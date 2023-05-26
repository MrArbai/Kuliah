def faktorial_rekursi(n):
    if n == 0:
        return 1
    else:
        return n * faktorial_rekursi(n-1)

def faktorial_iterasi(n):
    hasil = 1
    for i in range(1, n+1):
        hasil *= i
    return hasil

def perkalian_rekursi(a, b):
    if b == 0:
        return 0
    else:
        return a + perkalian_rekursi(a, b-1)

def perkalian_iterasi(a, b):
    hasil = 0
    for _ in range(b):
        hasil += a
    return hasil

# Contoh penggunaan faktorial
print(faktorial_rekursi(5))     # Output: 120
print(faktorial_iterasi(5))     # Output: 120

# Contoh penggunaan perkalian
print(perkalian_rekursi(4, 5))  # Output: 20
print(perkalian_iterasi(4, 5))  # Output: 20
