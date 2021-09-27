public class Decipherer {
    public static void main(String[] args) {
        String message1 = "0@sn9sirppa@#?ia'jgtvryko1";
        String message2 = "q8e?wsellecif@#?sel@#?setuotpazdsy0*b9+mw@x1vj";
        String message3 = "aopi?sedohtém@#?sedhtmg+p9l!";

        System.out.println(decode(message1));
        System.out.println(decode(message2));
        System.out.println(decode(message3));
    }

    public static String decode(String message) {
        int keyNumber = message.length() / 2;
        String subString = message.substring(5, keyNumber + 5);
        String replaceSymbol = subString.replace("@#?", " ");
        StringBuilder result = new StringBuilder();
        for (int i = replaceSymbol.length() - 1; i >= 0; i--) {
            result.append(replaceSymbol.charAt(i));
        }
        return result.toString();
    }
}