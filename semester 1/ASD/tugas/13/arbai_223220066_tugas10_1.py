# A = 1
# B = 100

# while A <= B:
#     if A % 2 != 0:
#         print(A)
#         A += 1
#     else:
#         A += 1
def print_odd_numbers(n):
    for i in range(1, n + 1):
        if i % 2 != 0:
            print(i)
def Main():
    print_odd_numbers(100)

Main()
