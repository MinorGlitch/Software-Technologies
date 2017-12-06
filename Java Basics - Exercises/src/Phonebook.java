import java.util.LinkedHashMap;
import java.util.Scanner;

public class Phonebook {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);

        String input = scanner.nextLine();

        LinkedHashMap<String, String> phonebook = new LinkedHashMap<>();

        while (!input.equals("END")) {

            String[] inputArgs = input.split(" ");

            String operation = inputArgs[0];

            String name = inputArgs[1];

            switch (operation) {
                case "A":
                    String phoneNumber = inputArgs[2];

                    addContact(name, phoneNumber, phonebook);
                    break;
                case "S":
                    searchForContact(name, phonebook);
                    break;
            }

            input = scanner.nextLine();
        }
    }

    private static void searchForContact(String name, LinkedHashMap<String, String> phonebook) {
        if (phonebook.containsKey(name)) {
            System.out.printf("%s -> %s%n", name, phonebook.get(name));
        } else {
            System.out.printf("Contact %s does not exist.%n", name);
        }
    }

    private static void addContact(String name, String phoneNumber, LinkedHashMap<String, String> phonebook) {
        phonebook.put(name, phoneNumber);
    }

}
