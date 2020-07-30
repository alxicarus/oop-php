<?php
    include('animal.php');
    include('frog.php');
    include('ape.php');
    $sheep = new Animal("shaun");

    echo $sheep->get_name()."<br>"; // "shaun"
    echo $sheep->get_legs()."<br>"; // 2
    echo $sheep->get_blood()."<br>"; // false

    $sungokong = new Ape("kera sakti");
    $sungokong->yell(); // "Auooo"

    $kodok = new Frog("buduk");
    $kodok->jump() ; // "hop hop"

    
?>