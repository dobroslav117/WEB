package com.example.demo;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.RequestParam;
import org.springframework.web.bind.annotation.RestController;


@RestController
public class HelloController {
    @GetMapping("/")
    public String index() {
        return "Greeatings from Spring Boot";
    }
    @GetMapping("/hello")
    public String getFoos(@RequestParam(defaultValue = "user") String name) {
        return "hello " + name;
    }



}