kalimat = input("Masukkan kalimat: ")
huruf_awal = input("Huruf yang ingin diganti: ")
huruf_pengganti = input("Huruf pengganti: ")

kalimat_baru = ""
for huruf in kalimat:
    if huruf == huruf_awal:
        kalimat_baru += huruf_pengganti
    else:
        kalimat_baru += huruf

print("Kalimat baru:", kalimat_baru)
