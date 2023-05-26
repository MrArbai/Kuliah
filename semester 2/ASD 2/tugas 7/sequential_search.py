def sequential_search(arr, target):
    n = len(arr)
    for i in range(n):
        if arr[i] == target:
            return i
    return -1

# Contoh penggunaan dan pengujian Sequential Search
data = [10, 4, 2, 8, 7, 6]
target = 8
result = sequential_search(data, target)
if result != -1:
    print("Elemen", target, "ditemukan pada indeks", result)
else:
    print("Elemen", target, "tidak ditemukan dalam array")
