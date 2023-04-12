import java.io.scanner;;;

public class soal1{
    public  static void(string args[])
    {
        string nama,nim;
        int angkatan;

        scanner keyboard = new scanner(system.in);
        system.out.print("NIM SAYA  : ");
        System.out.print("Nama mahasiswa: ");
        nim = keyboard.nextLine();
        
        System.out.print("NAMA SAYA  : ");
        nama = keyboard.nextLine();
        
        System.out.print("ANGKATAN  : ");
        angkatan = keyboard.nextLine();
        
        System.out.println("Selamat datang NIM : " + nim + ",  " + nama + ",  Angkatan Tahun : " + angkatan + "\n Di Kelas Pemrograman Berorientasi Objek ! ");
       
    }
}