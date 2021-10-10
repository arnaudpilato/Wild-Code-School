package fr.wildcodeschool;

import exceptions.InvalidStringException;

public class StringUtils {
    public static void main(String[] args) {
        System.out.println(uniqueVowels("Wild Code School"));;
    }

    private static final String ALL_VOWELS = "aeiouyAEIOUY";

    /**
     * Renvoie la chaine formée par les voyelles d'une chaine de caractères
     * @return Chaine avec uniquement des voyelles
     */
    public static String vowels(String candidate) throws InvalidStringException {
        if (candidate == null) {
            throw new InvalidStringException("Erreur le champ est vide");
        }
        String vowels = "";
        char[] letters = candidate.toLowerCase().toCharArray();
        for (int i = 1; i < candidate.length(); i++) {
            if (ALL_VOWELS.indexOf(letters[i]) >= 0) {
                vowels += letters[i];
            }
        }
        return vowels;
    }

    /**
     * Renvoie la chaine formée par les voyelles d'une chaine de caractères sans doublon
     * @return Chaine avec uniquement des voyelles sans doublon
     */
    public static String uniqueVowels(String candidate) {
        String vowels = "";
        char[] letters = candidate.toLowerCase().toCharArray();
        for (int i = 0; i < candidate.length(); i++) {
            if (ALL_VOWELS.indexOf(letters[i]) >= 0) {
                vowels += letters[i];
            }
        }

        letters = vowels.toCharArray();
        vowels = "";

        for (char letter : letters) {
            if (vowels.indexOf(letter) == -1) {
                vowels += letter;
            }
        }

        return vowels;
    }
}