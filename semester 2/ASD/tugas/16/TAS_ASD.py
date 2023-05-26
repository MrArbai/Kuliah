def init():

    angka = []
    print("Input 3 Angka (Dipisah Denan Enter)")
    A = int(input("input angka ke 1 = "))
    B = int(input("Input angka ke 2 = "))
    C = int(input("Input angka ke 3 = "))
    angka.append(A)
    angka.append(B)
    angka.append(C)

    print(max(angka))

init()