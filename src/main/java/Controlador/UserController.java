/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package Controlador;

import Correo.MailService;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.web.bind.annotation.*;

import java.util.HashMap;
import java.util.Map;

@RestController
@RequestMapping("/users")
public class UserController {

    @Autowired
    private MailService mailService;

    @PostMapping("/register")
    public String registerUser(@RequestParam String email, @RequestParam String name) {
        Map<String, Object> model = new HashMap<>();
        model.put("name", name);

        mailService.sendEmail(
                email,
                "Bienvenido a nuestra app",
                "email-template",  // nombre de tu archivo .html sin extensión
                model
        );

        return "Correo enviado correctamente a " + email;
    }
}

