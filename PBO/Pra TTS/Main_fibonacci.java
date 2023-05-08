import java.util.Scanner;

public class Main_fibonacci {
    public static void main(String[] args) {
        try (// Membaca jumlah bilangan Fibonacci yang akan dihitung dari keyboard
        Scanner input = new Scanner(System.in)) {
            System.out.print("Masukkan jumlah bilangan Fibonacci: ");
            int n = input.nextInt();

            // Membuat array untuk menyimpan bilangan Fibonacci
            int[] fibonacci = new int[n];

            // Menghitung bilangan Fibonacci dan menyimpannya ke dalam array
            fibonacci[0] = 0;
            fibonacci[1] = 1;
            for (int i = 2; i < n; i++) {
                fibonacci[i] = fibonacci[i - 1] + fibonacci[i - 2];
            }

            // Menampilkan bilangan Fibonacci yang telah dihitung
            System.out.print("Bilangan Fibonacci: ");
            for (int i = 0; i < n; i++) {
                System.out.print(fibonacci[i] + " ");
            }
        }
    }
}
