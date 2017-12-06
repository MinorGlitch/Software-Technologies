import java.util.ArrayList;
import java.util.Arrays;
import java.util.List;
import java.util.Scanner;

public class BombNumbers {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);

        int[] numbers = Arrays.stream(scanner.nextLine().split(" ")).mapToInt(Integer::parseInt).toArray();

        int[] bombAndPowerNumbers = Arrays.stream(scanner.nextLine().split(" ")).mapToInt(Integer::parseInt).toArray();

        int sum = removeBombNumbers(numbers, bombAndPowerNumbers);

        System.out.println(sum);
    }

    private static int removeBombNumbers(int[] numbers, int[] bombAndPowerNumbers) {
        int bombNumber = bombAndPowerNumbers[0];

        List<Integer> nums = convertToList(numbers);

        int power = bombAndPowerNumbers[1];

        for (int i = 0; i < numbers.length; i++) {
            if (numbers[i] == bombNumber) {
                int leftSide = Math.max(i - power, 0);
                int rightSide = Math.min(i + power, numbers.length - 1);

                int bombLength = Math.abs(leftSide - rightSide) + 1;

                nums.subList(leftSide, leftSide + bombLength).clear();

                numbers = nums.stream().mapToInt(Integer::intValue).toArray();

                i = 0;
            }
        }

        return Arrays.stream(numbers).sum();
    }

    private static List<Integer> convertToList(int[] numbers) {
        List<Integer> nums = new ArrayList<>();

        for (int i = 0; i < numbers.length; i++) {
            nums.add(numbers[i]);
        }

        return nums;
    }
}
