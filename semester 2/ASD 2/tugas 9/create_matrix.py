def create_matrix(rows, cols):
    matrix = []
    for _ in range(rows):
        row = []
        for _ in range(cols):
            element = int(input("Masukkan elemen matriks: "))
            row.append(element)
        matrix.append(row)
    return matrix

def print_matrix(matrix):
    for row in matrix:
        print(row)

# Contoh penggunaan dan pengujian
rows = int(input("Masukkan jumlah baris matriks: "))
cols = int(input("Masukkan jumlah kolom matriks: "))

my_matrix = create_matrix(rows, cols)
print("Matriks:")
print_matrix(my_matrix)
