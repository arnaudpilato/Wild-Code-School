package algos;

public class Factorial {
    // TODO
    public static int facto(int i) {
        return (i == 0) ? 1 : i * facto(i - 1);
    }
}
