import java.util.Scanner;
import java.util.regex.MatchResult;
import java.util.regex.Matcher;
import java.util.regex.Pattern;

public class ChangeToUppercase {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);

        String text = scanner.nextLine();

        String finalText = toUpper(text);

        System.out.println(finalText);
    }

    private static String toUpper(String text) {
        final String pattern = "<upcase>(.+?)<\\/upcase>";

        Matcher match = Pattern.compile(pattern).matcher(text);

        while (match.find()) {
            String allMatch = match.group(0);
            String word = match.group(1);

            text = text.replace(allMatch, word.toUpperCase());
        }

        return text;
    }
}
