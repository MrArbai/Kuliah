import java.time.LocalDate;
import java.util.Scanner;

class Pegawai {
    private String idPegawai;
    private String namaPegawai;
    private int golongan;
    private LocalDate tanggalLahir;

    public Pegawai(String idPegawai, String namaPegawai, int golongan, LocalDate tanggalLahir) {
        this.idPegawai = idPegawai;
        this.namaPegawai = namaPegawai;
        this.golongan = golongan;
        this.tanggalLahir = tanggalLahir;
    }

    public double hitungGajiPokok() {
        if (golongan == 1) {
            if (tanggalLahir.isBefore(LocalDate.now().minusYears(40))) {
                return 4_500_000;
            } else {
                return 3_500_000;
            }
        } else if (golongan == 2) {
            if (tanggalLahir.isBefore(LocalDate.now().minusYears(40))) {
                return 6_000_000;
            } else {
                return 5_000_000;
            }
        }
        return 0;
    }
    public LocalDate getTanggalLahir() {
        return tanggalLahir;
    }
    public double hitungTunjanganPegawai() {
        return 1_000_000;
    }

    public double hitungGajiTotal() {
        return hitungGajiPokok() + hitungTunjanganPegawai();
    }
}

class Dosen extends Pegawai {
    private String nidn;

    public Dosen(String idPegawai, String namaPegawai, int golongan, LocalDate tanggalLahir, String nidn) {
        super(idPegawai, namaPegawai, golongan, tanggalLahir);
        this.nidn = nidn;
    }

    @Override
    public double hitungTunjanganPegawai() {
        return 1_500_000;
    }

    public double hitungTunjanganFungsional() {
        if (getTanggalLahir().isBefore(LocalDate.now().minusYears(40))) {
            return 2_000_000;
        } else {
            return 1_700_000;
        }
    }

    @Override
    public double hitungGajiTotal() {
        return hitungGajiPokok() + hitungTunjanganPegawai() + hitungTunjanganFungsional();
    }
}

class NonDosen extends Pegawai {
    public NonDosen(String idPegawai, String namaPegawai, int golongan, LocalDate tanggalLahir) {
        super(idPegawai, namaPegawai, golongan, tanggalLahir);
    }
}

public class Main {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);

        System.out.print("Masukkan ID Pegawai: ");
        String idPegawaiDosen = scanner.nextLine();

        System.out.print("Masukkan Nama Pegawai: ");
        String namaPegawaiDosen = scanner.nextLine();

        System.out.print("Masukkan Golongan (1/2): ");
        int golonganDosen = scanner.nextInt();
        scanner.nextLine(); 

        System.out.print("Masukkan Tanggal Lahir (YYYY-MM-DD): ");
        String tanggalLahirDosenString = scanner.nextLine();
        LocalDate tanggalLahirDosen = LocalDate.parse(tanggalLahirDosenString);

        System.out.print("Masukkan NIDN: ");
        String nidn = scanner.nextLine();

        Dosen dosen = new Dosen(idPegawaiDosen, namaPegawaiDosen, golonganDosen, tanggalLahirDosen, nidn);
        System.out.println("Gaji Total Dosen: " + dosen.hitungGajiTotal());

        System.out.println();

        System.out.print("Masukkan ID Pegawai: ");
        String idPegawaiNonDosen = scanner.nextLine();

        System.out.print("Masukkan Nama Pegawai: ");
        String namaPegawaiNonDosen = scanner.nextLine();

        System.out.print("Masukkan Golongan (1/2): ");
        int golonganNonDosen = scanner.nextInt();
        scanner.nextLine(); 

        System.out.print("Masukkan Tanggal Lahir (YYYY-MM-DD): ");
        String tanggalLahirNonDosenString = scanner.nextLine();
        LocalDate tanggalLahirNonDosen = LocalDate.parse(tanggalLahirNonDosenString);

        NonDosen nonDosen = new NonDosen(idPegawaiNonDosen, namaPegawaiNonDosen, golonganNonDosen, tanggalLahirNonDosen);
        System.out.println("Gaji Total NonDosen: " + nonDosen.hitungGajiTotal());

        scanner.close();
    }
}



