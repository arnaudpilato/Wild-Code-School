package com.wildcodeschool.challenge_spring_security.controller;

import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.RestController;

@RestController
public class ShieldController {
    @GetMapping("/")
    public String shield() {
        return "Welcome to the Shield";
    }

    @GetMapping("/avengers/assemble")
    public String championShield() {
        return "Avengers... Assemble";
    }

    @GetMapping("/secret-bases")
    public String[] directorShiel() {
        String[] wildcodeschool = new String[] {
                "Amsterdam",
                "Berlin",
                "Biarritz",
                "Bordeaux",
                "Bruxelle",
                "Bucarest",
                "La Loupe",
                "Lille",
                "Lisbonne",
                "Lyon",
                "Londres",
                "Madrid",
                "Marseille",
                "Nantes",
                "Orléans",
                "Paris",
                "Strasbourg",
                "Toulouse",
                "Tours"
        };
        return wildcodeschool;}
}
