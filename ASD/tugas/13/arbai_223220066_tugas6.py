def jumlahkan_bilangan(list_bilangan):
  total = 0
  for bilangan in list_bilangan:
    total += bilangan
  return total

def Main():
    list_bilangan = [1, 2, 3, 4, 5]
    hasil = jumlahkan_bilangan(list_bilangan)
    print("Hasil penjumlahan:", hasil)

Main()