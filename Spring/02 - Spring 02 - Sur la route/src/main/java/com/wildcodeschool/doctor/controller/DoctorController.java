package com.wildcodeschool.doctor.controller;

import com.wildcodeschool.doctor.model.Doctor;
import org.springframework.http.HttpStatus;
import org.springframework.stereotype.Controller;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.PathVariable;
import org.springframework.web.bind.annotation.ResponseBody;
import org.springframework.web.bind.annotation.ResponseStatus;
import org.springframework.web.server.ResponseStatusException;

import javax.print.Doc;

@Controller
public class DoctorController {

    @GetMapping("/doctor/{number}")
    @ResponseBody
    public Doctor doctor(@PathVariable int number) {
        if (number == 13) {
            return new Doctor(number, "Jodie Whittaker");
        } else if (number >= 1 && number <=12) {
            throw new ResponseStatusException(HttpStatus.FORBIDDEN, "Hey status 303! Redirection!!!");
        } else {
            throw new ResponseStatusException(HttpStatus.NOT_FOUND, "Sorry page not found, error 404");
        }
    }
}
