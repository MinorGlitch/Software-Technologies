import java.util.Arrays;
import java.util.Scanner;

public class CompareCharArrays {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);

        char[] firstArr = scanner.nextLine().replaceAll(" ", "").toCharArray();

        char[] secondArr = scanner.nextLine().replaceAll(" ", "").toCharArray();

        String[] result = compareArrays(firstArr, secondArr);

        for (String word : result) {
            System.out.println(word);
        }
    }

    private static String[] compareArrays(char[] firstArr, char[] secondArr) {
        if (firstArr.length > secondArr.length) {
            return new String[]{String.valueOf(secondArr), String.valueOf(firstArr)};
        } else if (firstArr.length < secondArr.length) {
            return new String[]{String.valueOf(firstArr), String.valueOf(secondArr)};
        } else {
            for (int i = 0; i < firstArr.length; i++) {
                if (firstArr[i] > secondArr[i]) {
                    return new String[]{String.valueOf(secondArr), String.valueOf(firstArr)};
                }

                return new String[]{String.valueOf(firstArr), String.valueOf(secondArr)};
            }
        }

        return new String[0];
    }
}
