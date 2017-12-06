import java.util.Scanner;

public class CensorEmailAddress {
    public static void main(String[] args) {

         char asterisk = '*';

        Scanner scanner = new Scanner(System.in);

        String[] emailTokens = scanner.nextLine().split("@");

        String text = scanner.nextLine();

        String username = emailTokens[0];

        StringBuilder replacement = new StringBuilder();

        for (int i = 0; i < username.length(); i++) {
            replacement.append(asterisk);
        }

        replacement.append("@");

        replacement.append(emailTokens[1]);

        String fullEmail = emailTokens[0] + "@" + emailTokens[1];

        text = text.replaceAll(fullEmail, replacement.toString());

        System.out.println(text);
    }
}
