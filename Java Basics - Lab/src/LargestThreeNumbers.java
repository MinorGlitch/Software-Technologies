import java.util.ArrayList;
import java.util.Arrays;
import java.util.List;
import java.util.Scanner;

public class LargestThreeNumbers {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);

        int[] numbers = Arrays.stream(scanner.nextLine().split(" ")).mapToInt(Integer::parseInt).toArray();

        Arrays.sort(numbers);

        int takeLength = Math.min(3, numbers.length);

        List<String> largestNumbers = new ArrayList<>();

        for (int i = numbers.length - 1; i >= numbers.length - takeLength; i--) {
            largestNumbers.add(Integer.toString(numbers[i]));
        }

        System.out.println(String.join(" ", largestNumbers));
    }
}
