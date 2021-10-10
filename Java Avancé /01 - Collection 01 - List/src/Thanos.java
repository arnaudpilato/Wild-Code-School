import java.util.*;

public class Thanos {

    public static void main(String[] args) {

        // TODO 1 : Create an empty heroes list

        ArrayList<Hero> heroes = new ArrayList<>();

        // TODO 2 : Add those heroes to the list
        Hero blackWidow = new Hero("Black Widow", 34);
        Hero captainAmerica = new Hero("Captain America", 100);
        Hero vision = new Hero("Vision", 3);
        Hero ironMan = new Hero("Iron Man", 48);
        Hero scarletWitch = new Hero("Scarlet Witch", 29);
        Hero thor = new Hero("Thor", 1500);
        Hero hulk = new Hero("Hulk", 49);
        Hero doctorStrange = new Hero("Doctor Strange", 42);

        heroes.add(blackWidow);
        heroes.add(captainAmerica);
        heroes.add(vision);
        heroes.add(ironMan);
        heroes.add(scarletWitch);
        heroes.add(thor);
        heroes.add(hulk);
        heroes.add(doctorStrange);

        // TODO 3 : It's Thor birthday, now he's 1501

        System.out.println(heroes.get(5).getName() + " a " + heroes.get(5).getAge() + " ans");

        thor.setAge(thor.getAge() + 1);

        System.out.println("C'est son anniversaire, " + heroes.get(5).getName() + " a maintenant " + heroes.get(5).getAge() + " ans \n" );

        // TODO 4 : Shuffle the heroes list

        for (int i = 0; i < 8; i++) {
            Collections.shuffle(heroes);
            System.out.println(heroes.get(i).getName());
        }

        System.out.println(" \n");

        // TODO 5 : Keep only the half of the list

        List<Hero> smallList = heroes.subList(0, heroes.size() / 2);

        smallList.forEach((hero -> System.out.println(hero.getName())));

        // TODO 6 : Loop throught the list and display the name of the remaining heroes
    }
}