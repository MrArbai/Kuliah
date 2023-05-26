def hitung_ekspresi(x, y, z):
  # ekspresi pertama: operator matematika
  ekspresi1 = x + y * z
  
  # ekspresi kedua: operator logika
  ekspresi2 = ekspresi1 > 0
  
  # ekspresi ketiga: operator pembanding
  ekspresi3 = x == y
  
  return ekspresi1, ekspresi2, ekspresi3

def Main():
    # contoh pemanggilan fungsi
    hasil_ekspresi = hitung_ekspresi(10, 5, 2)

    print("Hasil dari ekspresi pertama adalah", hasil_ekspresi[0])
    print("Hasil dari ekspresi kedua adalah", hasil_ekspresi[1])
    print("Hasil dari ekspresi ketiga adalah", hasil_ekspresi[2])

Main()
