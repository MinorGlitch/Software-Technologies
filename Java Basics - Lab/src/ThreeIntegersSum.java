import java.util.Arrays;
import java.util.Scanner;

public class ThreeIntegersSum {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);

        int[] nums = Arrays.stream(scanner.nextLine().split(" ")).mapToInt(Integer::parseInt).toArray();

        if (!checkThreeIntegers(nums[0], nums[1], nums[2]) &&
                !checkThreeIntegers(nums[2], nums[0], nums[1]) &&
                !checkThreeIntegers(nums[1], nums[2], nums[0]))
            System.out.println("No");

    }

    private static boolean checkThreeIntegers(
            int num1, int num2, int sum) {
        if (num1 + num2 != sum) {
            return false;
        }
        if (num1 <= num2) {
            System.out.printf("%d + %d = %d%n", num1, num2, sum);
        } else {
            System.out.printf("%d + %d = %d%n", num2, num1, sum);
        }
        return true;
    }

}
