import java.util.ArrayList;
import java.util.List;
import java.util.Scanner;

public class SymmetricNumbers {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);

        int count = scanner.nextInt();

        List<String> symmetricNumbers = new ArrayList<>();

        for (int i = 1; i <= count; i++) {
            String iVal = Integer.toString(i);

            if (iVal.equals(ReverseNum(iVal))) {
                symmetricNumbers.add(iVal);
            }
        }

        System.out.println(String.join(" ", symmetricNumbers));
    }

    private static String ReverseNum(String i) {
        return new StringBuilder(i).reverse().toString();
    }
}
