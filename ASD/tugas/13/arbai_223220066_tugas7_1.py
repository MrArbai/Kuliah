def Main():
    # Batas maksimal pemesanan barang
    LIMIT = 100

    # Diskon yang diberikan jika pemesanan melebihi batas
    DISCOUNT = 0.1

    # Daftar barang yang dipesan
    order_list = []

    while True:
        # Input nama barang
        item = input("Masukkan nama barang: ")

        # Input jumlah barang
        quantity = int(input("Masukkan jumlah barang: "))

        # Tambahkan barang ke daftar pemesanan
        order_list.append((item, quantity))

        # Hitung total pemesanan
        total_order = sum(quantity for item, quantity in order_list)

        # Cek apakah pemesanan melebihi batas
        if total_order > LIMIT:
            print("Selamat! Anda mendapat diskon sebesar", DISCOUNT*100, "%")
            break
        else:
            # Tanyakan apakah ingin memesan barang lagi
            again = input("Apakah Anda ingin memesan barang lagi? (y/n)")
            if again.lower() != "y":
                break

    # Cetak daftar pemesanan
    print("Daftar Pemesanan:")
    for item, quantity in order_list:
        print(quantity, item)

Main()