import java.util.Scanner;

public class SumNIntegers {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);

        int count = scanner.nextInt();

        int sum = 0;

        for (int i = 0; i < count; i++) {
            int currentNum = scanner.nextInt();

            sum += currentNum;
        }

        System.out.printf("Sum = %d", sum);
    }
}
