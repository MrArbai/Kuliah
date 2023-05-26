fruits = ("apple", "banana", "cherry")
numbers = (1, 2, 3, 4, 5)
mixed = (1, "hello", 3.14, True)
nested_tuple = ((1, 2, 3), (4, 5, 6), (7, 8, 9))



print(fruits[0]) # akan mencetak "apple"
print(numbers[2]) # akan mencetak 3
print(nested_tuple[1][2]) # akan mencetak 6



fruits[1] = "orange"
# TypeError: 'tuple' object does not support item assignment


tup1 = (1, 2, 3)
tup2 = (4, 5, 6)
tup3 = tup1 + tup2
print(tup3) # akan mencetak (1, 2, 3, 4, 5, 6)



if x > 0
  File "<stdin>", line 1
    if x > 0
              ^
# SyntaxError: unexpected EOF while parsing


if x > 0:
    print(x + "is positive")

