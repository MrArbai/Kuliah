# Program menggunakan stack untuk menyimpan dan mengakses data

class Stack:
    def __init__(self):
        self.items = []

    def is_empty(self):
        return len(self.items) == 0

    def push(self, data):
        self.items.append(data)

    def pop(self):
        if not self.is_empty():
            return self.items.pop()
        else:
            return None

    def peek(self):
        if not self.is_empty():
            return self.items[-1]
        else:
            return None

    def display(self):
        if not self.is_empty():
            print("Data dalam stack:")
            for data in reversed(self.items):
                print(data)
        else:
            print("Stack kosong.")

def main():
    stack = Stack()

    # Menambahkan data ke stack
    stack.push("Data 1")
    stack.push("Data 2")
    stack.push("Data 3")

    # Menampilkan data dalam stack
    stack.display()

    # Menghapus data dari stack
    popped_item = stack.pop()
    if popped_item is not None:
        print("Data yang dihapus:", popped_item)

    # Melihat data paling atas dalam stack
    top_item = stack.peek()
    if top_item is not None:
        print("Data paling atas:", top_item)

if __name__ == "__main__":
    main()



# Start
# └─ Inisialisasi stack
#     └─ items = []
# └─ Menambahkan data ke stack
#     └─ Tambahkan data ke items
# └─ Menampilkan data dalam stack
#     └─ Jika stack tidak kosong, tampilkan pesan "Data dalam stack"
#     └─ Iterasi dari data teratas ke data terbawah
#         └─ Tampilkan data
# └─ Menghapus data dari stack
#     └─ Jika stack tidak kosong, hapus dan ambil data dari items
#     └─ Jika stack kosong, kembalikan None
# └─ Melihat data paling atas dalam stack
#     └─ Jika stack tidak kosong, ambil data teratas dari items
#     └─ Jika stack kosong, kembalikan None
# End
