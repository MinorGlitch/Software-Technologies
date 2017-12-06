import java.util.Scanner;

public class IndexOfLetters {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);

        char[] wordChars = scanner.nextLine().replaceAll(" ", "").toCharArray();

        for (int i = 0; i < wordChars.length; i++) {
            int charInAlphabet = wordChars[i] % 32 - 1;

            System.out.printf("%s -> %d%n", wordChars[i], charInAlphabet);
        }
    }
}
