
fruits = ["apple", "banana", "cherry"]
numbers = [1, 2, 3, 4, 5]
mixed = [1, "hello", 3.14, True]
nested_list = [[1, 2, 3], [4, 5, 6], [7, 8, 9]]



print(fruits[0]) # akan mencetak "apple"
print(numbers[2]) # akan mencetak 3
print(nested_list[1][2]) # akan mencetak 6




fruits[1] = "orange"
print(fruits) # akan mencetak ["apple", "orange", "cherry"]



fruits.append("mango")
print(fruits) # akan mencetak ["apple", "orange", "cherry", "mango"]
fruits.insert(1, "kiwi")
print(fruits) # akan mencetak ["apple", "kiwi", "orange", "cherry", "mango"]
