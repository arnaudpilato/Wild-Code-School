import java.util.Arrays;

public class Movies {
    public static void main(String args[]) {
        String[] movies = {"Indiana Jones and the Raiders of the Lost Ark", "Indiana Jones and the Temple of Doom", "Indiana Jones and the Last Crusade"};
        String[][] actors = new String[][] {
                {"Harrison Ford", "Denholm Elliott", "John Rhys-Davies"},
                {"Kate Capshaw", "Jonathan Ke Quan", "Amrish Puri"},
                {"Harrison Ford", "Denholm Elliott", "John Rhys-Davies"},
        };

        for (int i = 0 ; i < 3 ; i++) {
            System.out.println(movies[i]);
            System.out.println(Arrays.toString(actors[i]));
        }

    }
}
