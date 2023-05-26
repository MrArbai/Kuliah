def swap(a, b):
  temp = a
  a = b
  b = temp
  return a, b

def Main():
    a = int(input("Enter value of a: "))
    b = int(input("Enter value of b: "))
    a, b = swap(a, b)
    print(f"a = {a}, b = {b}")

Main()