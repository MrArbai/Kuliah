import java.io.IOException;
import java.io.BufferedReader;
import java.io. InputStreamReader;

public class ContohBufferReader {
public static void main(String[] args) throws IOException {
InputStreamReader input = new InputStreamReader(System.in);

BufferedReader br = new BufferedReader(input);
System.out.print("Inputkan NIM :");
String nim = br.readLine();
System.out.print("Inputkan Nama :");
String nama = br.readLine();
System.out.print("Inputkan Angkatan : ");

String angkatan = br.readLine();
int x = Integer.parseInt(angkatan);

System.out.println("..:: Data Mahasiswa ::..");
System.out.println("NIN Anda :" + nim);
System.out.println("Dengan Nama :" + nama);

System.out.println("Tahun Masuk Anda : " + x );
}}
