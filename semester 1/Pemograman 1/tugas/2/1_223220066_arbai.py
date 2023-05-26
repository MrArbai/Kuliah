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