def binary_search(arr, target):
    lower = 0
    upper = len(arr) - 1
    while lower <= upper:
        mid = (lower + upper) // 2
        if arr[mid] == target:
            return mid
        elif arr[mid] < target:
            lower = mid + 1
        else:
            upper = mid - 1
    return -1

# Contoh penggunaan dan pengujian Binary Search
data = [2, 4, 6, 8, 10, 12, 14]
target = 8
result = binary_search(data, target)
if result != -1:
    print("Elemen", target, "ditemukan pada indeks", result)
else:
    print("Elemen", target, "tidak ditemukan dalam array")
