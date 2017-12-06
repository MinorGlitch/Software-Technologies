import java.util.Arrays;
import java.util.Scanner;

public class MaxSequenceOfEqualElements {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);

        int[] numbers = Arrays.stream(scanner.nextLine().split(" ")).mapToInt(Integer::parseInt).toArray();

        int start = 0;

        int length= 1;

        int bestStart = start;

        int bestLength = length;

        boolean isBesSeq = false;

        for (int i = 1; i <= numbers.length - 1; i++) {
            if (numbers[i] == numbers[i - 1]) {
                length++;

                if (isBesSeq == false  || length > bestLength) {
                    bestStart = start;
                    bestLength = length;

                    isBesSeq = true;
                }
            } else {
                start = i;
                length = 1;
            }


        }

        for (int i = bestStart; i < bestStart + bestLength; i++) {
            System.out.print(numbers[i] + " ");
        }
    }
}
