public class Main {
    public static void main(String[] args) {
        // Deklarasi dan inisialisasi array 2 dimensi untuk menyimpan data mahasiswa
        String[][] dataMahasiswa = {
                { "Aminah", "67", "78", "89" },
                { "Budiman", "88", "90", "87" },
                { "Candra", "56", "67", "70" },
                { "Adinda", "70", "80", "75" },
                { "Monika", "50", "70", "60" }
        };

        // Menghitung nilai akhir dan menampilkan keterangan lulus/tidak lulus untuk
        // setiap mahasiswa
        System.out.println("Nama\tUTS\tUAS\tTugas\tNA\tKeterangan");
        for (int i = 0; i < dataMahasiswa.length; i++) {
            // Mengambil nilai UTS, UAS, dan Tugas dari array dan mengkonversi ke tipe
            // integer
            int uts = Integer.parseInt(dataMahasiswa[i][1]);
            int uas = Integer.parseInt(dataMahasiswa[i][2]);
            int tugas = Integer.parseInt(dataMahasiswa[i][3]);

            // Menghitung nilai akhir (NA)
            double na = 0.35 * uts + 0.45 * uas + 0.2 * tugas;

            // Menentukan keterangan lulus/tidak lulus
            String keterangan;
            if (na >= 75) {
                keterangan = "Lulus";
            } else {
                keterangan = "Tidak Lulus";
            }

            // Menampilkan hasil perhitungan untuk setiap mahasiswa
            System.out.printf("%s\t%s\t%s\t%s\t%.2f\t%s\n", dataMahasiswa[i][0], dataMahasiswa[i][1],
                    dataMahasiswa[i][2], dataMahasiswa[i][3], na, keterangan);
        }
    }
}
