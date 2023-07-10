public class Pasien {
    private String noRM;
    private String nama;
    private String alamat;
    private String jenisKelamin;
    private String golDarah;
    private String poli;

    public Pasien(String noRM, String nama, String alamat, String jenisKelamin, String golDarah, String poli) {
        this.noRM = noRM;
        this.nama = nama;
        this.alamat = alamat;
        this.jenisKelamin = jenisKelamin;
        this.golDarah = golDarah;
        this.poli = poli;
    }

    public String getNoRM() {
        return noRM;
    }

    public String getNama() {
        return nama;
    }

    public String getAlamat() {
        return alamat;
    }

    public String getJenisKelamin() {
        return jenisKelamin;
    }

    public String getGolDarah() {
        return golDarah;
    }

    public String getPoli() {
        return poli;
    }
}
