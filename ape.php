<?php
    class Ape extends animal{
        
        function __construct($name) {
            $this->name = $name;
        }
        function get_name() {
            return $this->name;
        }
        function get_legs() {
            return $this->legs;
        }
        function get_blood() {
            return $this->cold_blooded;
        }
        function yell(){
            echo "Auooo<br>";
            return 0;
        }

    }
?>