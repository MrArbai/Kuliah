import java.util.Scanner;

public class StudentGradeCalculator {
    public static void main(String[] args) {
        try (Scanner scanner = new Scanner(System.in)) {
            System.out.print("Jumlah mata kuliah: ");
            int jumlahMataKuliah = scanner.nextInt();

            System.out.print("NPM: ");
            int npm = scanner.nextInt();

            scanner.nextLine(); // Membuang karakter newline (\n)

            System.out.print("Nama Mahasiswa: ");
            String namaMahasiswa = scanner.nextLine();

            System.out.print("Program Studi: ");
            String programStudi = scanner.nextLine();

            System.out.println("==========================================");
            System.out.println("            Data Mahasiswa");
            System.out.println("==========================================");
            System.out.println("NPM            : " + npm);
            System.out.println("Nama Mahasiswa : " + namaMahasiswa);
            System.out.println("Program Studi  : " + programStudi);
            System.out.println("==========================================");
            System.out.println("No.  | Mata Kuliah     | Tugas | UTS | UAS | Nilai Akhir | Grade");
            System.out.println("-----|-----------------|-------|-----|-----|-------------|------");

            for (int i = 1; i <= jumlahMataKuliah; i++) {
                System.out.printf("%-5d| ", i);

                System.out.print("Nama Mata Kuliah   : ");
                String namaMataKuliah = scanner.nextLine();

                System.out.print("Nilai Tugas        : ");
                double nilaiTugas = scanner.nextDouble();

                System.out.print("Nilai UTS          : ");
                double nilaiUTS = scanner.nextDouble();

                System.out.print("Nilai UAS          : ");
                double nilaiUAS = scanner.nextDouble();

                double nilaiAkhir = (0.25 * nilaiTugas) + (0.35 * nilaiUTS) + (0.4 * nilaiUAS);
                String grade = calculateGrade(nilaiAkhir);

                System.out.printf("%-17s| %-5.2f| %-3.2f| %-3.2f| %-12.2f| %s%n", namaMataKuliah, nilaiTugas, nilaiUTS, nilaiUAS, nilaiAkhir, grade);

                scanner.nextLine(); // Membuang karakter newline (\n)
            }
        }

        System.out.println("==========================================");
    }

    public static String calculateGrade(double nilaiAkhir) {
        if (nilaiAkhir >= 85) {
            return "A";
        } else if (nilaiAkhir >= 75) {
            return "B";
        } else if (nilaiAkhir >= 65) {
            return "C";
        } else if (nilaiAkhir >= 50) {
            return "D";
        } else {
            return "E";
        }
    }
}
