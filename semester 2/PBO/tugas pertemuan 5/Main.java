import java.util.Scanner;

public class Main {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);
        char isPelanggan;
        int jumlahFotokopi;
        double bayar = 0;

        do {
            System.out.print("Apakah Pelanggan (y/t) = ");
            isPelanggan = scanner.next().charAt(0);

            System.out.print("Jumlah Fotokopi = ");
            jumlahFotokopi = scanner.nextInt();

            if (isPelanggan == 'y') {
                bayar = jumlahFotokopi * 175;
            } else {
                if (jumlahFotokopi < 100) {
                    bayar = jumlahFotokopi * 225;
                } else if (jumlahFotokopi >= 100 && jumlahFotokopi <= 200) {
                    bayar = jumlahFotokopi * 200;
                } else {
                    bayar = jumlahFotokopi * 175;
                }
            }

            System.out.println("\nJumlah Fotokopi = " + jumlahFotokopi + " Lembar");
            System.out.println("Bayar = Rp." + bayar);

            System.out.print("\nCoba lagi(y/t) = ");
            char cobaLagi = scanner.next().charAt(0);

            if (cobaLagi != 'y') {
                break;
            }

        } while (true);

        scanner.close();
    }
}
