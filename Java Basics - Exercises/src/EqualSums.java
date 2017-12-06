import java.util.ArrayList;
import java.util.Arrays;
import java.util.List;
import java.util.Scanner;

public class EqualSums {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);

        int[] numbers = Arrays.stream(scanner.nextLine().split(" ")).mapToInt(Integer::parseInt).toArray();

        boolean sumFound = false;

        for (int i = 0; i < numbers.length; i++) {
            int[] leftSide = take(numbers, i);
            int[] rightSide = skip(numbers, i);

            int leftSideSum = Arrays.stream(leftSide).sum();
            int rightSideSum = Arrays.stream(rightSide).sum();

            if (leftSideSum == rightSideSum) {
                System.out.println(i);

                sumFound = true;

                break;
            }
        }

        if (!sumFound) {
            System.out.printf("no");
        }
    }

    private static int[] skip(int[] numbers, int skipCount) {
        List<Integer> nums = new ArrayList<>();

        for (int i = skipCount + 1; i < numbers.length; i++) {
            nums.add(numbers[i]);
        }

        return nums.stream().mapToInt(i -> i).toArray();
    }

    private static int[] take(int[] numbers, int count) {
        List<Integer> nums = new ArrayList<>();

        for (int i = 0; i < count; i++) {
            nums.add(numbers[i]);
        }

        return nums.stream().mapToInt(i -> i).toArray();
    }
}
