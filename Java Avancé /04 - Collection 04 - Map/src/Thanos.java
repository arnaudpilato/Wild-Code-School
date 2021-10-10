import java.util.Comparator;
import java.util.Map;
import java.util.TreeMap;

public class Thanos {

    public static void main(String[] args) {

        Hero hulk = new Hero("Hulk", 49);
        Hero blackWidow = new Hero("Black Widow", 34);
        Hero captainAmerica = new Hero("Captain America", 100);
        Hero thor = new Hero("Thor", 1501);
        Hero vision = new Hero("Vision", 3);
        Hero scarletWitch = new Hero("Scarlet Witch", 29);
        Hero doctorStrange = new Hero("Doctor Strange", 42);
        
        Flower lily = new Flower("Lily");
        Flower tulip = new Flower("Tulip");
        Flower begonia = new Flower("Begonia");
        Flower violet = new Flower("Violet");
        Flower rose = new Flower("Rose");

        // TODO 1 : Create a TreeMap where :
        // Hulk, Thor and Scarlet Witch have a Rose
        // Vision has a Tulip
        // Captain America has a Lily
        // Doctor Strange and Black Widow have a Violet

        Comparator<Hero> comparator = new Comparator<Hero>() {
            @Override
            public int compare(Hero o1, Hero o2) {
                return o1.getName().compareTo(o2.getName());
            }
        };

        Map<Hero, Flower> party = new TreeMap<>(comparator);

        party.put(hulk, rose);
        party.put(thor, rose);
        party.put(scarletWitch, rose);
        party.put(vision, tulip);
        party.put(captainAmerica, lily);
        party.put(doctorStrange, violet);
        party.put(blackWidow, violet);

        // TODO 2 : Print if `begonia` is contained in the TreeMap

        String begoniaExist = "Il n'y a pas de Begonia dans le tableau \n";
        for (Hero hero : party.keySet()) {
            Flower flower = party.get(hero);
            if (flower.getName() == "Begonia") {
                begoniaExist = "Il y a un Begonia dans le tableau \n";
            }
        }

        System.out.println(begoniaExist);

        // TODO 3 : For each hero, alphabetically, print the corresponding flower

        for (Hero hero : party.keySet()) {
            Flower flower = party.get(hero);
            System.out.println(flower.getName());
        }
    }
}
