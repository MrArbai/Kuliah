import java.time.LocalDate;

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

    public double hitungTunjanganPegawai() {
        return 1_000_000;
    }

    public double hitungGajiTotal() {
        return hitungGajiPokok() + hitungTunjanganPegawai();
    }

    // Getter dan setter lainnya
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

    // Getter dan setter lainnya
}

class NonDosen extends Pegawai {
    public NonDosen(String idPegawai, String namaPegawai, int golongan, LocalDate tanggalLahir) {
        super(idPegawai, namaPegawai, golongan, tanggalLahir);
    }

    // Tidak ada perubahan pada method hitungTunjanganPegawai() dan hitungGajiTotal()

    // Getter dan setter lainnya
}

public class Main {
    public static void main(String[] args) {
        // Contoh penggunaan class Pegawai, Dosen, dan NonDosen
        LocalDate tanggalLahirDosen = LocalDate.of(1978, 5, 10);
        Dosen dosen = new Dosen("D001", "John Doe", 2, tanggalLahirDosen, "1234567890");
        System.out.println("Gaji Total Dosen: " + dosen.hitungGajiTotal());

        LocalDate tanggalLahirNonDosen = LocalDate.of(1990, 8, 25);
        NonDosen nonDosen = new NonDosen("ND001", "Jane Smith", 1, tanggalLahirNonDosen);
        System.out.println("Gaji Total NonDosen: " + nonDosen.hitungGajiTotal());
    }
}
