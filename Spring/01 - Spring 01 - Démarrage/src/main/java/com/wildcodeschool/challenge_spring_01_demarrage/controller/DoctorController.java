package com.wildcodeschool.challenge_spring_01_demarrage.controller;

import org.springframework.stereotype.Controller;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.ResponseBody;

@Controller
public class DoctorController {
    @GetMapping("/doctor/1")
    @ResponseBody
    public String williamHartnell() {
        return "William Hartnell";
    }

    @GetMapping("/doctor/10")
    @ResponseBody
    public String DavidTennant() {
        return "David Tennant";
    }

    @GetMapping("/doctor/13")
    @ResponseBody
    public String JodieWhittaker() {
        return "Jodie Whittaker";
    }
}
