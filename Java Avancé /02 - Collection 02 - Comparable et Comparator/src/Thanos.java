import java.util.ArrayList;
import java.util.Collections;
import java.util.Comparator;
import java.util.List;

public class Thanos {

    public static void main(String[] args) {

        List<Hero> heroes = new ArrayList<>();
        heroes.add(new Hero("Hulk", 49));
        heroes.add(new Hero("Black Widow", 34));
        heroes.add(new Hero("Captain America", 100));
        heroes.add(new Hero("Thor", 1501));

        // TODO 1 : Modify Hero to implements Comparable and sort by name (ascending)

        Comparator<Hero> comparator = new Comparator<Hero>() {
            @Override
            public int compare(Hero heroName1, Hero heroName2) {
                return heroName1.getName().compareTo(heroName2.getName());
            }
        };

        heroes.sort(comparator);

        System.out.println("\nOrder by name:");
        showList(heroes);

        // TODO 2: Add a Comparator and sort by age (descending)

        Comparator<Hero> comparator1 = new Comparator<Hero>() {
            @Override
            public int compare(Hero heroAge1, Hero heroAge2) {
                return heroAge2.getAge() - heroAge1.getAge();
            }
        };

        heroes.sort(comparator1);

        System.out.println("\nOrder by age:");
        showList(heroes);
    }

    private static void showList(List<Hero> heroes) {
        for (Hero heroe : heroes) {
            System.out.println(heroe.getName() + ", " + heroe.getAge());
        }
    }
}