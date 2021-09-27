public class Classroom {
    public static void main(String[] args) {
        Wilder sylvain = new Wilder("Sylvain", false);
        Wilder eleonore = new Wilder("Eléonore", true);

        System.out.println(sylvain.whoAmI(sylvain.getFirstname(), sylvain.isAware()));
        System.out.println(eleonore.whoAmI(eleonore.getFirstname(), eleonore.isAware()));
    }
}
