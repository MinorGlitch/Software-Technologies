import java.util.*;

public class AverageGrades {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);

        List<Student> students = new ArrayList<>();

        int n = Integer.parseInt(scanner.nextLine());

        for (int i = 0; i < n; i++) {
            String[] studentArgs = scanner.nextLine().split(" ");

            String name = studentArgs[0];

            List<Double> grades = new ArrayList<>();

            for (int j = 1; j < studentArgs.length; j++) {
                grades.add(Double.parseDouble(studentArgs[j]));
            }

            Student student = new Student(name, grades);

            students.add(student);
        }

        Collections.sort(students, Student.comparator);

        for (Student st : students) {
            if (st.getAverageGrade() >= 5) {
                System.out.printf("%s -> %.2f%n", st.getName(), st.getAverageGrade());
            }
        }
    }
}

class Student {
    private String name;
    private List<Double> grades;
    private double averageGrade;

    public Student(String name, List<Double> grades) {
        this.name = name;
        this.grades = grades;
    }

    public String getName() {
        return name;
    }

    public void setName(String name) {
        this.name = name;
    }

    public List<Double> getGrades() {
        return grades;
    }

    public void setGrades(List<Double> grades) {
        this.grades = grades;
    }

    public double getAverageGrade() {
        return grades.stream().mapToDouble(x -> x).average().getAsDouble();
    }

    public static Comparator<Student> comparator = new Comparator<Student>() {

        public int compare(Student firstStudent, Student secondStudent) {
            String name1 = firstStudent.getName();
            String name2 = secondStudent.getName();

            if (name1.equals(name2)) {
                double average1 = firstStudent.getAverageGrade();
                double average2 = secondStudent.getAverageGrade();

                // Descending order (for Ascending - swap the return ones)
                return Double.compare(average2, average1);
            }

            // Ascending order (for Descending - return name2.compareTo(name1);)
            return name1.compareTo(name2);
        }
    };
}
