<?php

function generate_password(){

    $generator_letters = "ABCDEFGHILMNOPQRSTUVZYJKW";
    $generator_numbers ="1234567890";
    $generator_characters = "!@£$%^&*";
    $ciao = ($_GET['lenght']);
    $generator = substr(str_shuffle(($generator_characters) . ($generator_letters) . ($generator_numbers) ),0,$ciao);
    //var_dump($generator)
    echo $generator ;

}