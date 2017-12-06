import java.util.Arrays;
import java.util.Scanner;

public class IntersectionOfCircles {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);

        int[] inputArgs = Arrays.stream(scanner.nextLine().split(" ")).mapToInt(Integer::parseInt).toArray();

        Circle firstCircle = new Circle(inputArgs[0], inputArgs[1], inputArgs[2]);

        inputArgs = Arrays.stream(scanner.nextLine().split(" ")).mapToInt(Integer::parseInt).toArray();

        Circle secondCircle = new Circle(inputArgs[0], inputArgs[1], inputArgs[2]);

        String isIntersect = Intersect(firstCircle, secondCircle);

        System.out.println(isIntersect);
    }

    private static String Intersect(Circle firstCircle, Circle secondCircle)
    {
        int sumOfRadiuses = firstCircle.getRadius() + secondCircle.getRadius();

        double distance =
                Math.sqrt(Math.pow(firstCircle.getCenter().getX() - secondCircle.getCenter().getX(), 2) +
                        Math.pow(firstCircle.getCenter().getY() - secondCircle.getCenter().getY(), 2));

        if (sumOfRadiuses >= distance)
        {
            return "Yes";
        }

        return "No";
    }
}

class Circle {
    private Point center;
    private int radius;

    public Circle(int x, int y, int radius) {
        setCenter(new Point(x, y));
        setRadius(radius);
    }

    public Point getCenter() {
        return center;
    }

    public void setCenter(Point center) {
        this.center = center;
    }

    public int getRadius() {
        return radius;
    }

    public void setRadius(int radius) {
        this.radius = radius;
    }
}

class Point {
    private int X;
    private int Y;

    public Point(int x, int y) {
        X = x;
        Y = y;
    }

    public int getX() {
        return X;
    }

    public void setX(int x) {
        X = x;
    }

    public int getY() {
        return Y;
    }

    public void setY(int y) {
        Y = y;
    }
}