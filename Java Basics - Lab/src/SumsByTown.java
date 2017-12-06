import java.util.HashMap;
import java.util.Scanner;
import java.util.TreeMap;

public class SumsByTown {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);

        TreeMap<String, Double> towns = new TreeMap<>();

        int count = Integer.parseInt(scanner.nextLine());

        for (int i = 0; i < count; i++) {

            String[] cityData = scanner.nextLine().split("\\|");

            String city = cityData[0].trim();

            double value = Double.parseDouble(cityData[1].trim());

            if (towns.containsKey(city)) {
                towns.put(city, towns.get(city) + value);
            } else {
                towns.put(city, value);
            }
        }

        for (String city : towns.keySet()) {
            System.out.printf(city + " -> " + towns.get(city) + "\r\n");
        }
    }
}
