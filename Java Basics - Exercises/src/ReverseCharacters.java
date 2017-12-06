import java.util.Scanner;

public class ReverseCharacters {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);

        StringBuilder sb = new StringBuilder();

        for (int i = 0; i < 3; i++) {
            char input = scanner.nextLine().charAt(0);
            sb.append(input);
        }

        sb.reverse();

        System.out.println(sb);
    }
}
