# Program menggunakan linked list untuk menyimpan dan menampilkan data

class Node:
    def __init__(self, data):
        self.data = data
        self.next = None

class LinkedList:
    def __init__(self):
        self.head = None

    def add_node(self, data):
        new_node = Node(data)
        if self.head is None:
            self.head = new_node
        else:
            current = self.head
            while current.next:
                current = current.next
            current.next = new_node

    def display(self):
        if self.head is None:
            print("Linked list kosong.")
        else:
            current = self.head
            while current:
                print(current.data)
                current = current.next

def main():
    linked_list = LinkedList()

    # Menambahkan data ke linked list
    linked_list.add_node("Data 1")
    linked_list.add_node("Data 2")
    linked_list.add_node("Data 3")

    # Menampilkan data dari linked list
    linked_list.display()

if __name__ == "__main__":
    main()


# Start
# └─ Inisialisasi linked list
#     └─ head = None
# └─ Menambahkan node ke linked list
#     └─ Membuat node baru dengan data
#     └─ Jika linked list kosong, set head ke node baru
#     └─ Jika tidak kosong, cari node terakhir
#         └─ Iterasi ke node selanjutnya
#         └─ Jika node selanjutnya tidak ada, set node selanjutnya ke node baru
# └─ Menampilkan data dari linked list
#     └─ Jika linked list kosong, tampilkan pesan "Linked list kosong"
#     └─ Jika tidak kosong, iterasi melalui setiap node
#         └─ Tampilkan data dari node
#         └─ Iterasi ke node selanjutnya
# End
