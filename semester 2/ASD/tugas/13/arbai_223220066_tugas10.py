# A = int(input())
# #print(a)
# while A != 2:
#     A -= 2
#     if A == 2:
#         print("genap")
#         break
#     elif A < 0 :
#         print("ganjil")
#         break


def is_even_or_odd(x):
    if x/2 == int(x/2):
        return "genap"
    else:
        return "ganjil"
def Main():
    x = int(input("Masukkan bilangan: "))
    print("Bilangan " + str(x) + " adalah bilangan " + is_even_or_odd(x))

Main()