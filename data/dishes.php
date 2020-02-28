<?php
require_once(DOC_ROOT . "/components/Dishes.php");

function fillDishes()
{
    $dishes = array(
        new Dish(0, "Curry", "India", "Mumbai",  "Namak - Indian Specialty Restaurant", "https://www.saharastar.com/dining/namak-indian-specialty.html", "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3770.2810490467423!2d72.85198731500087!3d19.09532255632677!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c856a7d54355%3A0xfbfb5b72c9db17e5!2sNamak%20-%20Indian%20Specialty%20Restaurant!5e0!3m2!1sen!2sca!4v1582776092484!5m2!1sen!2sca"),
        new Dish(1, "Feijoada", "Brazil",  "Rio de Janeiro",  "Casa da Feijoada", "http://cozinhatipica.com.br", "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3673.0385205276734!2d-43.19890258479068!3d-22.98561094646773!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9bd5177f083c35%3A0x660d4c0e14d5ce1a!2sCasa%20da%20Feijoada!5e0!3m2!1sen!2sca!4v1582776043748!5m2!1sen!2sca"),
        new Dish(2, "Sushi", "Japan", "Tokyo",  "Sushi Yoshitake", "http://sushi-yoshitake.com/", "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3241.327310660956!2d139.75974881528205!3d35.66894183825326!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188be8ee6d5f4d%3A0x878757ad6adcde6d!2sSushi%20Yoshitake!5e0!3m2!1sen!2sca!4v1582775943691!5m2!1sen!2sca")
    );
    return $dishes;
}
