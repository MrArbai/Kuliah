
def repeat(n):
  for i in range(1, n+1):
    print(f"Iteration {i}")

def Main():
    n = int(input("Enter number of iterations: "))
    repeat(n)
    
Main()