data = [
    {"nama": "Budi", "program_studi": "Informatika"},
    {"nama": "Ani", "program_studi": "Informatika"},
    {"nama": "Cindy", "program_studi": "Sistem Informasi"},
    {"nama": "Doni", "program_studi": "Informatika"},
    {"nama": "Eva", "program_studi": "Sistem Informasi"},
    {"nama": "Fika", "program_studi": "Teknik Komputer"},
    {"nama": "Gita", "program_studi": "Teknik Komputer"},
    {"nama": "Hani", "program_studi": "Sistem Informasi"},
    {"nama": "Ivan", "program_studi": "Informatika"},
    {"nama": "Joni", "program_studi": "Sistem Informasi"}
]

# Membuat daftar kosong untuk setiap program studi
informatika = []
sistem_informasi = []
teknik_komputer = []

# Memasukkan data ke dalam daftar program studi yang sesuai
for item in data:
    program = item["program_studi"]
    if program == "Informatika":
        informatika.append(item)
    elif program == "Sistem Informasi":
        sistem_informasi.append(item)
    elif program == "Teknik Komputer":
        teknik_komputer.append(item)

# Menampilkan hasil
print("Informatika")
for item in informatika:
    print(" - ", item["nama"])
print("")
print("Sistem Informasi")
for item in sistem_informasi:
    print(" - ", item["nama"])
print("")
print("Teknik Komputer")
for item in teknik_komputer:
    print(" - ", item["nama"])
print("")
