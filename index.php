<?php
$pattern = '/^[a-zA-Z]+@[a-zA-Z]+\.[a-zA-Z]+/';
$emails = ["qwerty321@gmail.com", 
"ivanov.alex@mail.com"
"anna.kozlovska2024@gmail.com"
"petr.petrov1985@yahoo.com"]; 

foreach($emails as $email) {
    if(preg_match($pattern, $email)) {
        echo "Ел.почта: $email\n"
    }
}
?>