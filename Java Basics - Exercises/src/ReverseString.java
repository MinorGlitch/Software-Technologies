import java.util.Scanner;

public class ReverseString {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);

        String reversedStr = reverse(scanner.nextLine());

        System.out.println(reversedStr);
    }

    private static String reverse(String s) {
        return new StringBuilder(s).reverse().toString();
    }
}
