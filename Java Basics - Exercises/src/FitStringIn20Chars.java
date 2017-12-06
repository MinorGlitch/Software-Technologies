import java.util.Scanner;

public class FitStringIn20Chars {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);

        String fitString = padString(scanner.nextLine());

        System.out.println(fitString);
    }

    private static String padString(String s) {
        if (s.length() < 20) {
            return padRight(s);
        } else {
            return s.substring(0, 20);
        }
    }

    private static String padRight(String s) {
        StringBuilder sb = new StringBuilder(s);

        while (sb.length() != 20) {
            sb.append('*');
        }

        return sb.toString();
    }
}
