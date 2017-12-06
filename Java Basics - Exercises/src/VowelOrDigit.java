import java.util.Scanner;

public class VowelOrDigit {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);

        char[] vowels = new char[]{'a', 'e', 'o', 'u', 'i'};

        char input = scanner.nextLine().charAt(0);

        String charType;

        if (isVowel(vowels, input)) {
            charType = "vowel";
        } else if (Character.isDigit(input)) {
            charType = "digit";
        } else {
            charType = "other";
        }

        System.out.println(charType);
    }

    private static boolean isVowel(char[] vowels, char vowel) {
        for (char ch : vowels) {

            if (ch == vowel) {
                return true;
            }
        }

        return false;
    }
}
