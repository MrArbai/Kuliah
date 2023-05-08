import java.util.Scanner;

public class If_else {
    public static void main(String[] args) {
        try (// Membaca nilai dari keyboard
        Scanner input = new Scanner(System.in)) {
            System.out.print("Masukkan nilai Anda: ");
            int nilai = input.nextInt();

            // Konversi nilai ke nilai huruf
            String nilaiHuruf;
            if (nilai >= 81 && nilai <= 100) {
                nilaiHuruf = "A";
            } else if (nilai >= 71 && nilai <= 80) {
                nilaiHuruf = "AB";
            } else if (nilai >= 66 && nilai <= 70) {
                nilaiHuruf = "B";
            } else if (nilai >= 61 && nilai <= 65) {
                nilaiHuruf = "BC";
            } else if (nilai >= 56 && nilai <= 60) {
                nilaiHuruf = "C";
            } else if (nilai >= 41 && nilai <= 55) {
                nilaiHuruf = "D";
            } else if (nilai >= 0 && nilai <= 40) {
                nilaiHuruf = "E";
            } else {
                nilaiHuruf = "Nilai tidak valid";
            }

            // Menampilkan hasil konversi nilai
            System.out.println("Nilai huruf Anda: " + nilaiHuruf);
        }
    }
}
