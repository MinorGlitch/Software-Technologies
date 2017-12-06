import java.util.LinkedHashMap;
import java.util.Scanner;
import java.util.TreeMap;

public class PhonebookUpgrade {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);

        String input = scanner.nextLine();

        TreeMap<String, String> phonebook = new TreeMap<>();

        while (true) {

            if (input.equals("ListAll")) {
                for (String keyName : phonebook.keySet()) {
                    System.out.printf("%s -> %s%n", keyName, phonebook.get(keyName));
                }

                input = scanner.nextLine();
            }

            if (input.equals("END")) {
                return;
            }

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
            }

            input = scanner.nextLine();
        }
    }

    private static void searchForContact(String name, TreeMap<String, String> phonebook) {
        if (phonebook.containsKey(name)) {
            System.out.printf("%s -> %s%n", name, phonebook.get(name));
        } else {
            System.out.printf("Contact %s does not exist.%n", name);
        }
    }


    private static void addContact(String name, String phoneNumber, TreeMap<String, String> phonebook) {
        phonebook.put(name, phoneNumber);
    }

}
