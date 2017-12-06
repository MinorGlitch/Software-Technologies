import java.util.Scanner;

public class URLParser {

    static final String protocolAttribute = "://";

    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);

        String input = scanner.nextLine();

        String protocol = getProtocol(input);

        if (protocol.length() > 0) {
            input = input.substring(input.indexOf(protocolAttribute) + 3);
        }

        String server = getDomain(input);

        input = input.replace(server, "");

        input = input.replaceAll("/$", "").replaceAll("^/", "").trim();

        System.out.printf("[protocol] = \"%s\"%n", protocol);
        System.out.printf("[server] = \"%s\"%n", server);
        System.out.printf("[resource] = \"%s\"%n", input);
    }

    private static String getProtocol(String input) {
        if (input.contains(protocolAttribute)) {
            StringBuilder result = new StringBuilder();

            int protocolLength = input.indexOf(protocolAttribute);

            for (int i = 0; i < protocolLength; i++) {
                result.append(input.charAt(i));
            }

            return result.toString();
        }

        return "";
    }

    private static String getDomain(String input) {
        StringBuilder result = new StringBuilder();

        for (int i = 0; i < input.length(); i++) {
            if (input.charAt(i) == '/') {
                break;
            }

            result.append(input.charAt(i));
        }

        return result.toString();
    }
}
