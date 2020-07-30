<?php
    class frog extends animal{
        
        function __construct($name) {
            $this->name = $name;
            $this->legs = 4;
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
        function jump(){
            echo "hop hop <br>";
            return 0;
        }

    }
?>