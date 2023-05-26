# Modul matematika

def penjumlahan(a, b):
    return a + b

def pengurangan(a, b):
    return a - b

def perkalian(a, b):
    return a * b

def pembagian(a, b):
    if b == 0:
        return "Error: Tidak bisa dibagi dengan nol"
    else:
        return a / b

def perpangkatan(a, b):
    return a ** b

def sisa_bagi(a, b):
    if b == 0:
        return "Error: Tidak bisa dibagi dengan nol"
    else:
        return a % b
