nilai = [0,1,2,3,4]
daftar_mahasiswa = []

class Mahasiswa:
    def __init__(self, nama, nim,IP):
        self.nama = nama
        self.nim = nim
        self.IP = IP

    def add_student(students, student):
        students.append(student)
def InputMhs():
        print("Nilai di input angka A sampai E")
        nama = str(input ("Nama = "))
        Nim = str(input("Nim = "))
        DesainWeb = str(input("Nilai Desain Web = "))
        Pemrograman1 = str(input("Nilai Pemrograman 1 = "))
        if DesainWeb == "A":
            NilaiA = nilai[4]
        elif DesainWeb == "B":
            NilaiA = nilai[3]
        elif DesainWeb == "C":
            NilaiA = nilai[2]
        elif DesainWeb == "D":
            NilaiA = nilai[1]
        elif DesainWeb == "E":
            NilaiA = nilai[0]

        if Pemrograman1 == "A":
            NilaiB = nilai[4]
        elif Pemrograman1 == "B":
            NilaiB = nilai[3]
        elif Pemrograman1 == "C":
            NilaiB = nilai[2]
        elif Pemrograman1 == "D":
            NilaiB = nilai[1]
        elif Pemrograman1 == "E":
            NilaiB = nilai[0]

        IP = NilaiA + NilaiB / 2
        students = []

        Mahasiswa.add_student(students,Mahasiswa(nama,Nim,"IP = " + str(IP)))

        for r in students:
            print(r.nama, r.nim, r.IP)

InputMhs()