import java.util.Scanner;
public class soal1 {
    public static void main(String args[])

{
    String nim, nama;

    int angkatan;
    //String NIK = "<NIN Anda>";
    //String Nama = "<Nama Anda>":
    Scanner keyboard = new Scanner(System.in);
    
    System.out.print("NIM Saya : ");
    nim = keyboard.nextLine();
    System.out.print( "Nama Saya : ");
    nama = keyboard.nextLine();
    System.out.print("Angkatan :");
    angkatan = keyboard.nextInt();
    
    System.out.println("Selanat Datang NIN : " + nim + ", " + nama + ", Angkatan Tahun : " + angkatan + "\ndi Pemrograman Berorientasi Objek !");
    
    
}


}
