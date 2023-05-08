# data record yang akan diolah
records = [
    {"nama": "Andi", "program_studi": "Teknik Informatika", "angkatan": 2020},
    {"nama": "Budi", "program_studi": "Teknik Informatika", "angkatan": 2020},
    {"nama": "Cici", "program_studi": "Manajemen", "angkatan": 2021},
    {"nama": "Dedi", "program_studi": "Manajemen", "angkatan": 2021},
    {"nama": "Eva", "program_studi": "Akuntansi", "angkatan": 2022},
    {"nama": "Fani", "program_studi": "Akuntansi", "angkatan": 2022},
    {"nama": "Gina", "program_studi": "Teknik Industri", "angkatan": 2023},
    {"nama": "Hani", "program_studi": "Teknik Industri", "angkatan": 2023},
]

# dictionary untuk menyimpan data record yang dikelompokkan
grouped_records = {}

# looping untuk mengelompokkan data record berdasarkan program studinya
for record in records:
    program_studi = record["program_studi"]
    if program_studi in grouped_records:
        grouped_records[program_studi].append(record)
    else:
        grouped_records[program_studi] = [record]

# cetak data record yang dikelompokkan
for program_studi, records in grouped_records.items():
    print("Program Studi:", program_studi)
    for record in records:
        print("- Nama:", record["nama"], "| Angkatan:", record["angkatan"])
