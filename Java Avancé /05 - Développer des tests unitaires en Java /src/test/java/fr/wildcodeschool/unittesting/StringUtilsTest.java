package fr.wildcodeschool.unittesting;

import exceptions.InvalidStringException;
import fr.wildcodeschool.StringUtils;
import static org.junit.Assert.*;
import org.junit.Test;

public class StringUtilsTest {
    @Test
    public void testNonPassant() {
        StringUtils stringUtils = new StringUtils();
        String testVowels = "Wild Code School";
        assertEquals("ioeoo", stringUtils.vowels(testVowels));
    }

    @Test (expected = InvalidStringException.class)
    public void testException() {
        StringUtils stringUtils = new StringUtils();
        assertEquals("", stringUtils.vowels(null));
    }

    @Test
    public void testNotVowels() {
        StringUtils stringUtils = new StringUtils();
        String testNotVowels = "Wld Cd Schl";
        assertEquals("", stringUtils.uniqueVowels(testNotVowels));
    }

    @Test
    public void testUniqueVowels() {
        StringUtils stringUtils = new StringUtils();
        String testUniqueVowels = "WIld COde SchOol";
        assertEquals("ioe", stringUtils.uniqueVowels(testUniqueVowels));
    }

    @Test
    public void testToLowerVowels() {
        StringUtils stringUtils = new StringUtils();
        String testToLowerVowels = "WIld Code ShOOl";
        assertEquals("ioe", stringUtils.uniqueVowels(testToLowerVowels));
    }
}
