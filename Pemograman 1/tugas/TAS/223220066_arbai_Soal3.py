def is_prime(n):
    if n < 2:
        return False
    for i in range(2, n):
        if n % i == 0:
            return False
    return True

start = int(input("Enter the start of range: "))
end = int(input("Enter the end of range: "))

for i in range(start, end+1):
    if is_prime(i):
        print(i)
