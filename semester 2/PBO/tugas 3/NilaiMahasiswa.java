import java.util.Scanner;

public class NilaiMahasiswa {
    public static void main(String[] args) {
        Scanner input = new Scanner(System.in);

        System.out.println("===== Menghitung Nilai Mahasiswa =====");

        // Input informasi mahasiswa
        System.out.print("Masukkan Nama: ");
        String nama = input.nextLine();
        System.out.print("Masukkan NIM: ");
        String nim = input.nextLine();
        System.out.print("Nilai Tugas: ");
        double tugas = input.nextDouble();
        System.out.print("Nilai Kuis: ");
        double kuis = input.nextDouble();
        System.out.print("Nilai UTS: ");
        double uts = input.nextDouble();
        System.out.print("Nilai UAS: ");
        double uas = input.nextDouble();

        // Hitung nilai akhir
        double nilaiAkhir = 0.15 * tugas + 0.2 * kuis + 0.3 * uts + 0.35 * uas;

        // Tampilkan hasil
        System.out.printf("%s dengan NIM %s memiliki nilai akhir: %.2f", nama, nim, nilaiAkhir);
    }
}
