import java.util.Arrays;
import java.util.List;
import java.util.Scanner;

public class MostFrequentNumber {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);

        int[] numbers = Arrays.stream(scanner.nextLine().split(" ")).mapToInt(Integer::parseInt).toArray();

        int[] count = new int[65535];

        for (int num : numbers) {
            count[num]++;
        }

        int maxValue = Arrays.stream(count).max().getAsInt();

        for (int num : numbers) {
            if (count[num] == maxValue) {
                System.out.println(num);

                return;
            }
        }
    }
}
