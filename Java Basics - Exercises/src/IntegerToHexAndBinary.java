import java.util.Scanner;

public class IntegerToHexAndBinary {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);

        int decimalInput = Integer.parseInt(scanner.nextLine());

        String hex = Integer.toHexString(decimalInput).toUpperCase();

        String binary = Integer.toBinaryString(decimalInput);

        System.out.printf("%s%n%s", hex, binary);
    }
}
