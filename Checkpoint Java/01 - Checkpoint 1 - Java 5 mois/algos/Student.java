package algos;

public class Student {
    public static void main(String[] args) {
    }

    // TODO hasLegalAge
    public static boolean hasLegalAge(int age) {
        return age >= 18;
    }

    // TODO getGroup
    public static char getGroup(int i) {
        return (i % 2 == 0) ? 'A' : 'B';
    }

    // TODO countStudents
    public static int countStudents(String[] students) {
        int studentJava = 0;
        for (String student : students) {
            if (student.toLowerCase().equals("java")) {
                studentJava += 1;
            }
        }

        return studentJava;
    }
}