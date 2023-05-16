import java.util.Scanner;

public class TemperatureConverter {
    public static void main(String[] args) {
        try (Scanner scanner = new Scanner(System.in)) {
            double celsius;

            do {
                System.out.print("Masukkan suhu dalam Celcius: ");
                celsius = scanner.nextDouble();

                System.out.println("Pilihan konversi suhu:");
                System.out.println("1. Fahrenheit");
                System.out.println("2. Kelvin");
                System.out.println("3. Reamur");
                System.out.print("Masukkan pilihan: ");
                int choice = scanner.nextInt();

                switch (choice) {
                    case 1:
                        double fahrenheit = celsiusToFahrenheit(celsius);
                        System.out.println(celsius + " Celcius = " + fahrenheit + " Fahrenheit");
                        break;
                    case 2:
                        double kelvin = celsiusToKelvin(celsius);
                        System.out.println(celsius + " Celcius = " + kelvin + " Kelvin");
                        break;
                    case 3:
                        double reamur = celsiusToReamur(celsius);
                        System.out.println(celsius + " Celcius = " + reamur + " Reamur");
                        break;
                    default:
                        System.out.println("Pilihan tidak valid.");
                        break;
                }

                System.out.print("Coba lagi? (y/t): ");
            } while (scanner.next().equalsIgnoreCase("y"));
        }
    }

    public static double celsiusToFahrenheit(double celsius) {
        return (celsius * 9/5) + 32;
    }

    public static double celsiusToKelvin(double celsius) {
        return celsius + 273.15;
    }

    public static double celsiusToReamur(double celsius) {
        return celsius * 4/5;
    }
}
