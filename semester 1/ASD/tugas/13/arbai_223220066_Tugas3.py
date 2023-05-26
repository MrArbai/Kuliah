def is_even(num):
  if num % 2 == 0:
    return True
  else:
    return False

def Main():
    number = int(input("Enter a number: "))
    if is_even(number):
        print(f"{number} is even")
    else:
        print(f"{number} is odd")

Main( )
